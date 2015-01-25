<?php

Yii::app()->moduleManager->register(array(
    'id' => 'journels',
    'class' => 'application.modules_core.journels.JournelsModule',
    'isCoreModule' => true,
    'import' => array(
        'application.modules_core.journels.*',
    ),
    // Events to Catch 
    'events' => array(
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('JournelsModule', 'onTopMenuInit')),
    ),
));
?>