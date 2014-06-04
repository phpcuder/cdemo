<?php

/**
 * This is the model class for table "business_types".
 *
 * The followings are the available columns in table 'business_types':
 * @property string $business_type_id
 * @property string $name
 */
class BusinessTypes extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return BusinessTypes the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'business_types';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 250),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('business_type_id, name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'images' => array(self::HAS_MANY, 'BusinessTypeImages', 'business_type_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'business_type_id' => 'Business Type',
            'name' => 'Name',
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

        $criteria->compare('business_type_id', $this->business_type_id, true);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function getAllImages() {
        $images = BusinessTypeImages::model()->findAll();
        $result = array();

        if (!empty($images)) {
            foreach ($images as $img) {
                $result[$img->business_type_id][] = $img->src;
            }
        }

        return $result;
    }

}