<?php
//create function with an exception
function checkNum($number) {
  if($number > 1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception
try {
  checkNum(2); 
} catch(Exception $e) {
  echo 'Exception caught: ' . $e->getMessage();
}
?>