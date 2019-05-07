<?php
  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once 'helpers/url_helper.php';
  require_once 'helpers/session_helper.php';
  
  require_once 'libraries/Controller.php';
  require_once 'libraries/Core.php';
  require_once 'libraries/Database.php';
  
  // Autoload Core Libraries
  // CathyWang2019-05-06: class name and file name should be same/
//  spl_autoload_register(function($className){
//    require_once 'libraries/' . $className . '.php';
//  });
