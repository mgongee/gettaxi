<?php

$backend=dirname(dirname(__FILE__));
$frontend=dirname($backend);
Yii::setPathOfAlias('backend', $backend);

return CMap::mergeArray(
    // наследуемся от main.php
    require($frontend.'/config/main.php'), 
array(
    'basePath'=>$frontend,
    'name'=>'Admin panel',
    // Настраиваем пути до основных компонентов нашего backend
    'controllerPath' => $backend.'/controllers',
    'viewPath' => $backend.'/views',
    'runtimePath' => $backend.'/runtime',
    'modulePath'=>$backend.'/modules',
    

    // autoloading model and component classes
    'import'=>array(   
        'application.models.*',
        'application.components.*',        
        'backend.models.*',
        'backend.components.*', 
	            
    ),
    
    'sourceLanguage' => 'en',
      'language' => 'en',
    
    'modules'=>array(

        ),           
    'defaultController'=>'index',

    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),                       
        ), 
        'errorHandler'=>array(
            // use 'index/error' action to display errors
            'errorAction'=>'index/error',
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'=>false,  
            'rules'=>array(     
                // Убираем расширение .php из заголовка.(настройка файла .htaccess далее)
                'backend'=>'index/index',
                'backend/<_c>'=>'<_c>',
                'backend/<_c>/<_a>'=>'<_c>/<_a>',
            ),
        ),
    ),
)
);
?>
