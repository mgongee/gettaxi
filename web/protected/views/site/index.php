<?php
/* @var $this SiteController */

$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/script.js');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/base/jquery-ui.css');

//$cs->registerCssFile($baseUrl.'/css/yourcss.css');
$this->pageTitle=Yii::app()->name;
?>

<h1>Online Quick Quote & Reservation</h1>
<div class="row">
	<div class="col-lg-6">
		<?php echo CHtml::form('','post',array('class' => 'form-horizontal',  'id' => 'bookingForm')); 
		//<form class="form-horizontal">
		?>
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="trip_type">Trip Type</label>
			  <div class="col-md-4">
				<select id="trip_type" name="trip_type" class="form-control">
				  <option value="1">Ride to Airport</option>
				  <option value="2">Ride from Airport</option>
				</select>
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="state">State</label>
			  <div class="col-md-4">
				<?php  
				$values = array(0=>'Please select') + State::model()->getShownStates();
				echo CHtml::dropDownList('state', '0', $values ,array(
					'id' => 'state',
					'class'=>'form-control'
				)); ?>
			  </div>
			</div>
  
			<!-- Text input-->
			<div class="form-group" id="city-form-group" style="display:none;">
			  <label class="col-md-4 control-label" for="city">City</label>  
			  <div class="col-md-4">
			  <input id="city" name="city" type="text" placeholder="Enter city name or zip number" class="form-control input-md onChangeGetPriceEstimate">
			  <span class="help-block">for example, 00544 goes for Holtsville, NY</span>  
			  </div>
			  <?php echo CHtml::hiddenField('city_id','0'); ?>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="passenger">Passenger</label>
			  <div class="col-md-4">
				<select id="passenger" name="passenger" class="form-control onChangeGetPriceEstimate">
				  <option value="0">Please select</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				  <option value="9">9</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				</select>
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="luggage">Luggage</label>
			  <div class="col-md-4">
				<select id="luggage" name="luggage" class="form-control onChangeGetPriceEstimate">
				  <option value="0">Please select</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				  <option value="9">9</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				</select>
			  </div>
			</div>

			<!-- Multiple Radios (inline) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="round_trip">Round Trip</label>
			  <div class="col-md-4"> 
				<label class="radio-inline" for="round_trip-0">
				  <input type="radio" name="round_trip" id="round_trip-0" value="1" class="onChangeGetPriceEstimate" checked="checked">
				  Yes
				</label> 
				<label class="radio-inline" for="round_trip-1">
				  <input type="radio" name="round_trip" id="round_trip-1" class="onChangeGetPriceEstimate" value="2">
				  No
				</label>
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="continue"></label>
			  <div class="col-md-4">
				<!--<button id="continue" name="continue" class="btn btn-primary">Continue</button>-->
				<input type="button" id="continue" name="continue" onclick="return false;" class="btn btn-primary" value="Continue">
			  </div>
			</div>

			<div id="form_continue" style="display:none">
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="car_type">Car Type</label>
				  <div class="col-md-4">
					<select id="car_type" name="car_type" class="form-control onChangeGetPriceEstimate">
					  <option value="1">Sedan (1-4 passengers)</option>
					  <option value="2">Van (1-6 passengers)</option>
					</select>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="date">Date</label>  
				  <div class="col-md-4">
				  <input id="date" name="date" type="text" placeholder="12.04.2014" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="pickup_note">Pickup Location</label>  
				  <div class="col-md-4">
				  <input id="pickup_note" name="pickup_note" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dropoff_note">Dropoff location</label>  
				  <div class="col-md-4">
				  <input id="dropoff_note" name="dropoff_note" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="airline">Airline</label>  
				  <div class="col-md-4">
				  <input id="airline" name="airline" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="flight">Flight</label>  
				  <div class="col-md-4">
				  <input id="flight" name="flight" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="name">Your name</label>  
				  <div class="col-md-4">
				  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">Your email</label>  
				  <div class="col-md-4">
				  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="phone">Your phone no.</label>  
				  <div class="col-md-4">
				  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">

				  </div>
				</div>
			</div>
			</fieldset>
		</form>		
	</div>
	<div class="col-lg-6">
		<div class="btn btn-lg btn-outline" id="priceEstimateContainer" style="border: 1px solid black; display:none;"><h3>Price estimate:</h3><h1 id="price_estimate">0$</h1></div>
	</div>
</div>
