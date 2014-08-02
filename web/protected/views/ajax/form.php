
	
<?php echo CHtml::form(array('class' => 'form-horisontal')); 
//<form class="form-horizontal">
?>
<fieldset>

<!-- Form Name -->
<legend>Online Quick Quote & Reservation</legend>

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
    <select id="state" name="state" class="form-control">
      <option value="11">CT</option>
      <option value="26">MA</option>
      <option value="28">ME</option>
      <option value="39">NH</option>
      <option value="53">NY</option>
      <option value="50">RI</option>
      <option value="58">VT</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="Enter city name or number" class="form-control input-md">
  <span class="help-block">for example, 0134 goes for Watertown</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="passenger">Passenger</label>
  <div class="col-md-4">
    <select id="passenger" name="passenger" class="form-control">
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
    <select id="luggage" name="luggage" class="form-control">
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
      <input type="radio" name="round_trip" id="round_trip-0" value="1" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="round_trip-1">
      <input type="radio" name="round_trip" id="round_trip-1" value="2">
      No
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="continue"></label>
  <div class="col-md-4">
    <button id="continue" name="continue" class="btn btn-primary">Continue</button>
  </div>
</div>

</fieldset>
</form>

<?php /*
echo CHtml::label('Текст', 'input');
echo CHtml::textArea('input', $input);
 
echo CHtml::label('Результат', 'output');
// name и id для textarea автоматически заданы как 'output'.
echo CHtml::textArea('output', $output);
 
// Второй параметр пуст, значит отсылаем данные на тот же URL.
// Третий параметр задаёт опции запроса. Подробнее с ними можно
// ознакомиться в документации jQuery.
echo CHtml::ajaxSubmitButton('Обработать', 'ajax/getBooking', array(
    'type' => 'POST',
    // Результат запроса записываем в элемент, найденный
    // по CSS-селектору #output.
    'update' => '#output',
),
array(
    // Меняем тип элемента на submit, чтобы у пользователей
    // с отключенным JavaScript всё было хорошо.
    'type' => 'submit'
));
 
echo CHtml::endForm();
 * ?>
 */

?>
