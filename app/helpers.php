<?php


 function setActive($path, $active = 'active'){
   $request = Request::path();
   if(is_string($path) && $path == $request){
     return 'active';
   }
   if(is_array($path) && in_array($request, $path)){
     return 'active';
   }
  }

  function toSlug($string){
    return preg_replace("/\W+/", "-", $string);
  }

?>
