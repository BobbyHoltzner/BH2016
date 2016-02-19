<?php


 function setActive($path, $active = 'active'){
    return Request::is($path) ? 'active' : '';
  }

  function toSlug($string){
    return preg_replace("/\W+/", "-", $string);
  }

?>
