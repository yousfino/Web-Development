<!-- this php file contains the code for the login session. it reads the data
     input by the user (username and password), and checks if this data matches
     with the data stored in the file create.json and then behaves accordingly -->
<?php

  class LogIn {

    private $save = "create.json";
    private $userName;
    private $password;
    private $saveUser;

    // constructor accesses the data stored in create.json file then calls
    // the sign_in() method
    public function __cunstruct($username, $password) {
      $this->userName = $username;
      $this->password = $password;

      $this->saveUser = json_decode(file_get_contents($this->save), true);
      $this->sign_in();
    }

    // check whether data input by user exists or does not exist
    // if login is successful, the user if forwarded to the 'Register a Pet' form
    public function sign_in() {
      foreach($this->saveUser as $stored) {
        if($stored['userName'] == $this->userName) {
          if($this->password == $stored['password']) {
            session_start();
            $_SESSION['stored'] = $this->username;
            header("Location: register_a_pet.php");
            echo "<script> alert('Login successful.')</script>";
          }
        }
      }
      echo "<script> alert('Error. Unable to login. Please retry.')</script>";
    }
  }
?>
