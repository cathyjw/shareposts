<?php
  /*
   * Base Controller
   * Loads the models and views
   */
  class Controller {
    // Load model
    public function model($model){
      // Require model file
      require_once APPROOT . '/models/' . $model . '.php';

      // Instatiate model
      
      return new $model();
    }
    public function serviceModel($model){
      // Require model file
      require_once APPROOT . '/services/' . $model . 'Service.php';

      // Instatiate model
      
      return new $model();
    }

    // Load view
    public function view($view, $data = []){
      // Check for view file
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php';
      } else {
        // View does not exist
        die('View does not exist');
      }
    }
  }