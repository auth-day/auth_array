
<?php
  require_once("validation_function.php");

	function redirect_to($location) {
		header("Location: " . $location);
		exit;
	}

  $output_info = array(
    "username" => "",
    "password" => "",
    "sex"      => "",
    "age"      => "",
  );

  $auth = array("Username","Password",
                  "Diman" ,"123",
                  "user"  ,"user",
                "somebody","something");

	if ( isset($_POST["submit"]) ) {

  		$username = (string)htmlentities(htmlspecialchars(trim($_POST["username"])));
  		$password = (int)htmlentities(htmlspecialchars(trim($_POST["password"])));
  		$sex 			= strtolower((string)trim($_POST["male"]));
  		$age 			= (int)(trim($_POST["age"]));

      //checking data validity
      username_check($username);
      $output_info["password"] = $password;
      gender_check($sex);
      age_check($age);

      // if all fields passed validation
      if($output_info["username"] == $username and
         $output_info["password"] == $password and
         $output_info["sex"]      == $sex      and
         $output_info["age"]      == $age )      {

          //check for auth
          if (authentication($output_info,$auth)) {
            echo "You did it, {$output_info["username"]}";
          } else {
            include("index.php");
          }

      } else {
        include("index.php");
      }

}
?>
