<?php
/* @var $this IndexController */

$this->pageTitle=Yii::app()->name;
?>
<br>
<br>
<h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>You can <a href="backend/user/logout">logout</a>, manage <a href="backend/booking/index">bookings</a>, <a href="backend/state/index">states</a> or <a href="backend/city/index">cities</a>.</p>
