<?php

  require "../../../functions.php";
    
  dd($_SERVER['REQUEST_METHOD']);

  $validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
  ]);
?>