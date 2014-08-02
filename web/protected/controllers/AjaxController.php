<?php

class AjaxController extends FrontEndController {
    
    public function actionIndex(){
        $input = Yii::app()->request->getPost('city');
        // для примера будем приводить строку к верхнему регистру
        $output = mb_strtoupper($input, 'utf-8');
 
        // если запрос асинхронный, то нам нужно отдать только данные
        if(Yii::app()->request->isAjaxRequest){
            echo CHtml::encode($output);
            // Завершаем приложение
            Yii::app()->end();
        }
        else {
           // если запрос не асинхронный, отдаём форму полностью
            $this->render('form', array(
                'input'=>$input,
                'output'=>$output,
            ));
        }
    }

	public function actionEstimate(){
		if(Yii::app()->request->isAjaxRequest){
			$city = Yii::app()->request->getQuery('city');
			$state = Yii::app()->request->getQuery('state');
			$tripType = Yii::app()->request->getQuery('trip_type');
			
			$estimate = $this->estimatePrice($tripType,$city,$state);
			echo CHtml::encode($estimate);
			Yii::app()->end();
		}
	}
	
	
	public function actionAutocompleteCity () {
		if (isset($_GET['city']) && isset($_GET['state'])) {
			$criteria=new CDbCriteria;
			$criteria->alias = "cities";
			$criteria->condition = "(cities.city like '" . $_GET['city'] . "%' OR cities.zip LIKE '%" . $_GET['city'] . "%')"
					. " AND cities.state_code = '" . $_GET['state'] . "'";

			$dataProvider = new CActiveDataProvider(get_class(City::model()), 
				array('criteria'=>$criteria,'pagination'=>false)
			);

			$cities = $dataProvider->getData();

			$return_array = array();
			$found_cities = array();
			
			foreach($cities as $city) {
				if (!in_array($city->city, $found_cities)) {
					$return_array[] = array(
						'label'=>$city->city,
						'value'=>$city->city,
						'id'=>$city->id,
					);
					$found_cities[] = $city->city;
				}
			}

			echo CJSON::encode($return_array);
		}
	}
	
	public function actionBooking1(){
		$booking = new Booking();
		
        $city = Yii::app()->request->getQuery('city');
		$state = Yii::app()->request->getQuery('state');
		$tripType = Yii::app()->request->getQuery('trip_type');
        // для примера будем приводить строку к верхнему регистру
        $output = mb_strtoupper($input, 'utf-8');
 
        // 
        if(Yii::app()->request->isAjaxRequest){
            echo CHtml::encode($output);
            // Завершаем приложение
            Yii::app()->end();
        }
        else {
           // если запрос не асинхронный, отдаём форму полностью
            $this->render('form', array(
                'input'=>$input,
                'output'=>$output,
            ));
        }
    }
	
	private function estimatePrice($tripType,$city,$state) {
		return '50' + rand(1,40);
	}
}

?>