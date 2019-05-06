<?php
  // Simple page redirect
  function redirect($page){
    //CathyWang???echo '<script>console.log("come to here")</script>';
    header('location: ' . URLROOT . '/' . $page);
  }