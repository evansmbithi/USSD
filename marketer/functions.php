<?php

function main_menu($advert){
  $company = $advert['company_name'];
  $message = $advert['advert_message'];
  $contact = $advert['contact'];

  // main menu display
  // $text is only available in this scope
  $text = "Airtime Balance: KSH XXX.\nExpiry Date: XX-XX-XXXX.\n$company: $message\n$contact";
  ussd_proceed($text);
}

// function advert($advert){
//   $company = $advert['company_name'];
//   $message = $advert['advert_message'];
//   $contact = $advert['contact'];

//   $text = "$company: $message\n$contact";
//   return $text;
// }

function ussd_proceed($text){
  echo "CON ".$text;
}

function ussd_stop($text){
  echo "END ".$text;
}

?>