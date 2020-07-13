<?php

function isEmpety() {

  $request = request();

  $empty = false;
  foreach($request as $key => $value) {

    if (empty($request[$key])) {
      $empty = true;
    }
  }

  return $empty;
}

?>