<?php

/**
 * This is the model class for table "business_type_images".
 *
 * The followings are the available columns in table 'business_type_images':
 * @property integer $btype_image_id
 * @property integer $business_type_id
 * @property string $src
 */
class BusinessTypeImages extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return BusinessTypeImages the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'business_type_images';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('business_type_id, src', 'required'),
            array('business_type_id', 'numerical', 'integerOnly' => true),
            array('src', 'length', 'max' => 255),
            array('business_type_id', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('btype_image_id, business_type_id, src', 'safe', 'on' => 'search'),
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
            'btype_image_id' => 'Btype Image',
            'business_type_id' => 'Business Type',
            'src' => 'Src',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('btype_image_id', $this->btype_image_id);
        $criteria->compare('business_type_id', $this->business_type_id, true);
        $criteria->compare('src', $this->src);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}