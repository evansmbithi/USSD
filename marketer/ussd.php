<?php

include('functions.php');

$adverts = [
  // ['company_name' => 'Benita Travels', 'advert_message' => 'Mt. Kenya Hike. March 5, 2022. Book Now!', 'contact' => '0710631370'],
  ['company_name' => 'Benita Travels', 'advert_message' => 'Mt. Kenya Hike. March 5, 2022. Book Now!', 'contact' => '0710631370']
];

header("content-type: text/plain");

// $session_id = $_POST['sessionId'];  //USSD uses sessions in production
// $service_code = $_POST['serviceCode'];  //USSD code *256#

// $phone = $_GET['phoneNumber'];  //phone number dialing the code
// $text = $_GET['text'];  //user input

// loop through the array
foreach($adverts as $advert){
  echo main_menu($advert);
}

// array length
$length = count($adverts);
// echo $length;
// echo random_int(1,$length);

// loop through random numbers less than length
// while($i != $length){

// }

?>