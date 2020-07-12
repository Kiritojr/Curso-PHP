<?php

  require "../../../functions.php";
    
  dd($_SERVER['REQUEST_METHOD']);

  if (isEmpty()) {
    flash('message', 'Preencha todos os campos.');

    return redirect('?page=contato');
  }

  $validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
  ]);
?>