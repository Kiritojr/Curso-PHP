<?php

  function redirect ($target) {

    return header("location:/?page={$target}");
  }

  function redirectHome() {

    return header("location:/");
  }

?>