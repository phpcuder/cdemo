<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property string $order_id
 * @property string $customer_id
 * @property string $contact_person
 * @property integer $size
 * @property string $zipcode
 * @property string $season
 * @property integer $status
 * @property string $order_date
 */
class Orders extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, contact_person, size, zipcode, season, order_date', 'required'),
			array('size, status', 'numerical', 'integerOnly'=>true),
			array('customer_id, order_date', 'length', 'max'=>10),
			array('contact_person', 'length', 'max'=>250),
			array('zipcode', 'length', 'max'=>255),
			array('season', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('order_id, customer_id, contact_person, size, zipcode, season, status, order_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'order_id' => 'Order',
			'customer_id' => 'Customer',
			'contact_person' => 'Contact Person',
			'size' => 'Size',
			'zipcode' => 'Zipcode',
			'season' => 'Season',
			'status' => 'Status',
			'order_date' => 'Order Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('size',$this->size);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('season',$this->season,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order_date',$this->order_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}