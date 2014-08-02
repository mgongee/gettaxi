<?php

/**
 * This is the model class for table "bookings".
 *
 * The followings are the available columns in table 'bookings':
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $state
 * @property string $city
 * @property string $phone
 * @property string $passenger
 * @property string $luggage
 * @property string $trip_type
 * @property string $car_type
 * @property string $airline
 * @property string $flight
 * @property string $pickup_note
 * @property string $dropoff_note
 * @property string $pickup_time
 * @property string $created_at
 * @property string $status
 */
class Booking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bookings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, state, city, phone, passenger, luggage, trip_type, car_type, airline, flight, pickup_note, dropoff_note, pickup_time, created_at', 'required'),
			array('name, email, city, airline, flight', 'length', 'max'=>200),
			array('state, phone', 'length', 'max'=>20),
			array('passenger, luggage, trip_type, car_type, status', 'length', 'max'=>10),
			array('pickup_note, dropoff_note', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, state, city, phone, passenger, luggage, trip_type, car_type, airline, flight, pickup_note, dropoff_note, pickup_time, created_at, status', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'email' => 'Email',
			'state' => 'State',
			'city' => 'City',
			'phone' => 'Phone',
			'passenger' => 'Passenger',
			'luggage' => 'Luggage',
			'trip_type' => 'Trip Type',
			'car_type' => 'Car Type',
			'airline' => 'Airline',
			'flight' => 'Flight',
			'pickup_note' => 'Pickup Note',
			'dropoff_note' => 'Dropoff Note',
			'pickup_time' => 'Pickup Time',
			'created_at' => 'Created At',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('passenger',$this->passenger,true);
		$criteria->compare('luggage',$this->luggage,true);
		$criteria->compare('trip_type',$this->trip_type,true);
		$criteria->compare('car_type',$this->car_type,true);
		$criteria->compare('airline',$this->airline,true);
		$criteria->compare('flight',$this->flight,true);
		$criteria->compare('pickup_note',$this->pickup_note,true);
		$criteria->compare('dropoff_note',$this->dropoff_note,true);
		$criteria->compare('pickup_time',$this->pickup_time,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
