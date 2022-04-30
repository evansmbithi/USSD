<?php

function main_menu(){
  // main menu display
  // $text is only available in this scope
  $text = "Welcome to Loyalty\nPlease reply with\n1. Register\n2. Transfer Points\n3. Purchase Item with Points\n4. Check Points Balance";
  ussd_proceed($text);
}

function ussd_proceed($text){
  echo "CON ".$text;
}

function ussd_stop($text){
  echo "END ".$text;
}

function customer_register(){
  $text = "You can now register";
  ussd_proceed($text);
}

function transferPoints(){
  $text = "You have transferred 10 points to XXXXXX";
  ussd_proceed($text);
}

function purchaseItem(){
  $text = "You have purchased items worth 5 points";
  ussd_proceed($text);
}

function checkPoints(){
  $text = "Your points balance is 100";
  ussd_proceed($text);
}
?>