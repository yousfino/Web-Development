<!-- this php file contains a class called userData that has methods to create
     new account for users and checks for user existence -->
<?php

  class UserData {

    private $userName;
    private $password;
    private $saveUser;
    private $newUser;
    private $save = "create.json";

    // constructor
    public function __construct($userName, $password) {
      $this->userName = $userName;
      $this->password = $password;

      $usernameVal = "/^[a-z A-Z 0-9]+$/";
      $passwordVal = "/(?=.*\d)(?=.*[a-z]).{4,}/";

      if(preg_match($usernameVal, $this->userName) && preg_match($passwordVal, $this->password)) {
        $this->saveUser = json_decode(file_get_contents($this->save), true);
        $this->newUser = [
          "userName"=>$this->userName,
          "password"=>$this->password,
        ];
        $this->register();
      }
    }

    // check if user already exists before registering a new user account
    public function exists() {
      foreach($this->saveUser as $stored) {
        if($this->userName == $stored["userName"]) {
          echo "<script> alert('Error, this username already exists. Please try a different one.')</script>";
          return true;
        }
      }
      return false;
    }

    // if method exists() returns false, the register() method will register a
    // new user account
    public function register() {
      if($this->exists() == false) {
        array_push($this->saveUser, $this->newUser);
        if(file_put_contents($this->save, json_encode($this->saveUser, JSON_PRETTY_PRINT))) {
          echo "<script> alert('Account successfully created!')</script>";
        } else {
          echo "<script> alert('Failed to create a new account. Please try again.')</script>";
        }
      }
    }

  }
?>
