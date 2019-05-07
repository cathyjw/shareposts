<?php
  
  // Simple page redirect
  function redirect($page){
    //CathyWang???echo '<script>console.log("come to here")</script>';
//    $handler->debug('Hi', '$page');
    header('location: ' . URLROOT . '/' . $page);
  }