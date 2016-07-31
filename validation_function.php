<?php
  // Function for username
  function username_check($value) {
    global  $output_info;

    if(isset($value) and $value != "") {
      return $output_info["username"] = $value;
    } else {
      return $output_info["username"] = "Enter the correct name";
    }
  }

  // function for password
//  function check_password($value) {
//    global $output_info;

//    if( $value > 0 and $value < 10 ) {
//      return $output_info["password"] = $value;
//    } else {
//      return $output_info["password"] = "wrong";
//    }
//  }


  // function for gender checking
  function gender_check($value) {
  global  $output_info;

    if ($value === "male" or $value === "female") {
      return $output_info["sex"] = $value;
    } else {
      return $output_info["sex"] = "Enter male or female";
    }
  }

  // function for age checking
  function age_check($value) {
    global $output_info;

    if ($value > 0) {
      return $output_info["age"] = $value;
    } else {
      return $output_info["age"] = "What's your age again?";
    }
  }

  //authentication
  function authentication($input_arr, $auth_arr){

    for ($i=0; $i < count($auth_arr); $i++) {
      if ( ($input_arr["username"] == $auth_arr[$i]) and
           ($input_arr["password"] == $auth_arr[$i+1]) ){
        return true;
      }
    }
    return false;
  }
 ?>
