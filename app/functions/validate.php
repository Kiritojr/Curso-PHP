<?php

  function validate(array $fields) {
    
    $validate = [];
    foreach($fields as $key => $type) {

      switch($type) {

        case 's':
          $validate[$field] = filter_var($_POST[$key], FILTER_SANITIZE_STRING);
          break;

          case 'i':
            $validate[$field] = filter_var($_POST[$key], FILTER_SANITIZE_NUMBER_INT);
            break;

      }
    }
  }

?>