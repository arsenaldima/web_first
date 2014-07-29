<?php

/**
 * This is the model class for table "coments".
 *
 * The followings are the available columns in table 'coments':
 * @property integer $id
 * @property integer $perent_id
 * @property integer $user_id
 * @property integer $statia_id
 * @property string $coment
 */
class Coments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('perent_id, user_id, statia_id, coment', 'required'),
			array('perent_id, user_id, statia_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, perent_id, user_id, statia_id, coment', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'perent_id' => 'Perent',
			'user_id' => 'User',
			'statia_id' => 'Statia',
			'coment' => 'Coment',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('perent_id',$this->perent_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('statia_id',$this->statia_id);
		$criteria->compare('coment',$this->coment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Coments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
