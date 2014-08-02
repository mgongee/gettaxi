<?php

return CMap::mergeArray(
    // наследуемся от main.php
    require(dirname(__FILE__).'/main.php'), 
	array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'GetTaxi',
		// autoloading model and component classes
		'import'=>array(
			'application.models.*',
			'application.components.*',
			'application.backend.models.*',
			'application.backend.components.*',
		),
		'defaultController'=>'site',    
		'modules'=>array(

			),
		// application components
		'components'=>array(
			'user'=>array(
				// enable cookie-based authentication
				'allowAutoLogin'=>true,             
			),        
			'urlManager'=>array(
				'urlFormat'=>'path',
				'showScriptName'=>false,
				'rules'=>array(                
				),
			),    
		),
	)
); 

?>