<?php
  require_once '../app/bootstrap.php';
  
  require_once '../src/PhpConsole/__autoload.php';
  

  // Init Core Library
  $init = new Core;
  
  // CathyWang:2019-05-05; print variable value on console using javascript
//  $handler = PhpConsole\Handler::getInstance();
//  $handler->start();
  // Ctrl+Shift+I bring chrome developer tools
  // echo '<script>console.log("'.$myName.'")</script>';