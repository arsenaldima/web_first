<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $status
 * @property string $login
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $famile
 * @property string $picture
 * @property string $kom_o_sebe
 */
class User extends CActiveRecord
{

   // public $image;
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, password', 'required'),
            array('email', 'email'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('login, password', 'length', 'max'=>50),
			array(' name, famile', 'length', 'max'=>100),
       //     array('image', 'file', 'types'=>'jpg, gif, png'),//menal
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, status, login, password, email, name, famile, picture, kom_o_sebe', 'safe', 'on'=>'search'),
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
			'id' => 'id-polzovatela',
			'status' => 'status-guest,polzovatel,moderator,admin',
			'login' => 'Login',
			'password' => 'Password',
			'email' => 'Email',
			'name' => 'Name',
			'famile' => 'Famile',
			'picture' => 'Picture',
			'kom_o_sebe' => 'Kom O Sebe',
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
		$criteria->compare('status',$this->status);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('famile',$this->famile,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('kom_o_sebe',$this->kom_o_sebe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function update_m()
    {

    }


}
