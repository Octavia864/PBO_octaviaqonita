<?php

class customException extends Exception {
  public function errorMessage() {
    // Error message
    $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
    . ': <b>' . $this->getMessage() . '</b> is not a valid E-mail address';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  // Check if 
  if(filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE) {
    // Throw exception if email is not valid
    throw new customException($email);
  } 

  // Check for "example" in mail address
  if(strpos($email, "example") !== FALSE) {
    // Throw exception if email is an example email
    throw new Exception("$email is an example e-mail");
  }

  echo "This email address is valid.";

} catch (customException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
