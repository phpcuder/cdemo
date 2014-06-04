<?php

class SiteController extends Controller {

    protected function beforeAction($action) {
        $this->layout = 'main';

        return parent::beforeAction($action);
    }

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'foreColor' => 0x666666,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionSignUp() {
        $fileData = array();

        $businessTypes = CHtml::listData(BusinessTypes::model()->findAll(), 'business_type_id', 'name');

        $this->render('sign_up', array(
            'businessTypes' => $businessTypes,
        ));
    }

    private function _saveCustomer($data, $images) {
        $customerModel = new Customers;
        $customerModel->attributes = $data;
        $customerModel->signup_date = time();

        if ($customerModel->save()) {
            $this->_saveCustomerUploadImages($images);

            return $customerModel;
        }

        return false;
    }

    private function _saveCustomerUploadImages($images) {
        
    }

    private function _saveOrder($customer, $postData) {
        $orderModel = new Orders;
        $orderModel->attributes = $this->_handleOrderData($customer, $postData);

        if ($orderModel->save()) {
            return $orderModel;
        }

        return false;
    }

    private function _handleOrderData($customer, $postData) {

        $zipcodeArray = explode(' ', $postData['Orders']['zipcode']);
        $qty = count($zipcodeArray) + count($postData['Orders']['season']);
        $price = $postData['price'];

        return array(
            'customer_id' => $customer->customer_id,
            'contact_person' => $customer->contact_person,
            'zipcode' => $postData['Orders']['zipcode'],
            'size' => Yii::app()->params['price_size_value'][$price],
            'qty' => $qty,
            'total' => $qty * $price,
            'season' => implode(' ', $postData['Orders']['season']),
            'order_date' => time(),
        );
    }

    public function actionSaveSignUp() {
        if (Yii::app()->request->isPostRequest) {
            $postData = $_POST;
            $this->pr($postData);

            if (isset($_FILES['logo'])) {
                $fileData['logo'] = $_FILES['logo'];
                unset($_FILES['logo']);
            }

            $fileData['images'] = $_FILES;

            if ($customer = $this->_saveCustomer($postData['Customers'], $fileData)) {
                if ($order = $this->_saveOrder($customer, $postData)) {
                    $priceValue = array_flip(Yii::app()->params['price_size_value']);

                    exit(json_encode(array(
                                'success' => 200,
                                'data' => array(
                                    'order_id' => $order->order_id,
                                    'invoice_date' => date('d/m/Y', $order->order_date),
                                    'total' => number_format($order->total, 2),
                                    'qty' => $order->qty,
                                    'price' => $priceValue[$order->size],
                                    'size' => $order->size,
                                    'customer_address' => $customer->address,
                                ),
                            )));
                }
            }
        }

        exit(json_encode(array(
                    'success' => 400,
                )));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionMaps() {
        $this->render('maps');
    }

    public function actionPrices() {
        $this->render('prices');
    }

    public function actionCalender() {
        $this->render('calender');
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;

        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];

            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }

        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            var_dump($model->validate());
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}