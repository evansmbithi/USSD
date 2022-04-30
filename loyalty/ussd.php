<?php

include('functions.php');

header("content-type: text/plain"); //takes in values as plain text

// $session_id = $_POST['sessionId'];  //USSD uses sessions 
// $service_code = $_POST['serviceCode'];  //USSD code *256#

$phone = $_GET['phoneNumber'];  //phone number dialing the code
$text = $_GET['text'];  //user input

$data = explode("*", $text);  //split the user input into an array using *

$level = 0;
$level = count($data);  //counts the elements in the data array

echo $level . " ";  //display the level so that we know where we are

if($level == 0 || $level == 1){
  main_menu();
}

if($level > 1){
  // Explode $text at index 1
  switch($data[1]){
      case 1:
      customer_register();
      break;

      case 2:
      transferPoints();
      break;

      case 3:
      purchaseItem();
      break;

      case 4:
      checkPoints();
      break;

      default:
      $prompt = "Invalid input\nPlease insert a valid option";
      ussd_stop($prompt);

  }
}


?>