<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property string $customer_id
 * @property string $business_name
 * @property integer $business_type_id
 * @property string $contact_person
 * @property string $address
 * @property string $email
 * @property string $website
 * @property string $phone
 * @property string $mobile
 * @property string $sale_agent
 * @property string $headlines
 * @property string $coupon_deal
 * @property string $disclaimers
 * @property string $addition_info_1
 * @property string $addition_info_2
 * @property integer $signup_date
 * @property string $uploaded_logo
 * @property string $uploaded_images
 */
class Customers extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'customers';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('business_name, business_type_id, contact_person, address, email, website, phone, mobile, sale_agent, headlines, coupon_deal, disclaimers, addition_info_1, addition_info_2, signup_date', 'required'),
            array('business_type_id, signup_date', 'numerical', 'integerOnly' => true),
            array('business_name, email', 'length', 'max' => 200),
            array('contact_person, sale_agent, headlines, coupon_deal, disclaimers, addition_info_1, addition_info_2', 'length', 'max' => 250),
            array('address, uploaded_logo', 'length', 'max' => 255),
            array('website', 'length', 'max' => 150),
            array('phone, mobile', 'length', 'max' => 20),
            array('uploaded_logo, uploaded_images', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('customer_id, business_name, business_type_id, contact_person, address, email, website, phone, mobile, sale_agent, headlines, coupon_deal, disclaimers, addition_info_1, addition_info_2, signup_date, uploaded_logo, uploaded_images', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'customer_id' => 'Customer',
            'business_name' => 'Business Name',
            'business_type_id' => 'Business Type',
            'contact_person' => 'Contact Person',
            'address' => 'Address',
            'email' => 'Email',
            'website' => 'Website',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'sale_agent' => 'Sale Agent',
            'headlines' => 'Headlines',
            'coupon_deal' => 'Coupon Deal',
            'disclaimers' => 'Disclaimers',
            'addition_info_1' => 'Addition Info 1',
            'addition_info_2' => 'Addition Info 2',
            'signup_date' => 'Signup Date',
            'uploaded_logo' => 'Uploaded Logo',
            'uploaded_images' => 'Uploaded Images',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('customer_id', $this->customer_id, true);
        $criteria->compare('business_name', $this->business_name, true);
        $criteria->compare('business_type_id', $this->business_type_id);
        $criteria->compare('contact_person', $this->contact_person, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('website', $this->website, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('sale_agent', $this->sale_agent, true);
        $criteria->compare('headlines', $this->headlines, true);
        $criteria->compare('coupon_deal', $this->coupon_deal, true);
        $criteria->compare('disclaimers', $this->disclaimers, true);
        $criteria->compare('addition_info_1', $this->addition_info_1, true);
        $criteria->compare('addition_info_2', $this->addition_info_2, true);
        $criteria->compare('signup_date', $this->signup_date);
        $criteria->compare('uploaded_logo', $this->uploaded_logo, true);
        $criteria->compare('uploaded_images', $this->uploaded_images, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Customers the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
