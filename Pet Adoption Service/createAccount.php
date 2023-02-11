<!-- call account.php which contains the class UserData -->
<?php
  require("account.php");
 ?>
<!-- if the button 'Submit is clicked, the following action is performed' -->
<?php
if(isset($_POST["submit"])) {
  $UserData = new UserData($_POST["username"], $_POST["pass"]);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>
    <style>
    .div2 {
      list-style-type: none;
      overflow: hidden;
      width: 210px;
      margin: 0;
      padding: 0px;
      position: absolute;
      max-width: 100%;
      margin-right: 30px;
    }
    #ulHome {
      list-style-type: none;
      overflow: hidden;
      width: 210px;
      margin: 0;
      padding: 0px;
      position: absolute;
      max-width: 100%;
      margin-right: 30px;
      bottom: 1px;
    }
    li a {
      display: block;
      color: #E9D985;
      text-align: left;
      padding:5px 0;
      text-decoration: none;
    }
    li a:hover:not(.active) {
      background-color: #111;
    }
    body {
      background-image: url("https://t3.ftcdn.net/jpg/02/98/20/18/240_F_298201821_e90YxH0f6FBwOvcKhynlwF8sNYxlCMsg.jpg");
    }
    .firstH1 {
      color: #439A86;
      text-align:center;
      font-size: 300%;
      background-color:#E9D985;
    }
    .catImg {
      border-radius: 50%;
      width: 7%;
      height: auto;
      margin-left: 60px;
    }
    .img {
      position: relative;
      bottom: 110px;
      left: 15px;
    }
    .side-bar {
      font-size: 120%;
    }
    footer {
      text-align: center;
      margin-top: 20%;
      background-color: #FDB699;
      height: 200px;
    }
    .a:hover{
      background-color: #E9D985;
      cursor: pointer;
    }
    #browse1 {
      text-align: center;
    }
    #browse2 {
      text-align: center;
      color: red;
    }
    div.div1 {
      position: absolute;
      bottom: 650px;
      max-width: 100%;
      max-height: 100%;
    }
    #cat {
      color: #E9D985;
      margin-left: 150px;
    }
    #dog {
      color: #E9D985;
      margin-left: 150px;
    }
    .hint {
      position: relative;
      left: 300px;
      bottom: 400px;
      width: 50%;
      text-align: center;
    }
    .bottom {
      list-style-type: none;
    }
    .lists {
      background-color: #E9D985;
      width: 130%;
      margin-left: -50px;
      padding-right: 60px;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #439A86;
      font-style: oblique;
      font-weight: bold;
      font-size: 107%;
      border-radius: 7%;
    }
    hr {
      border: 10px solid #439A86;
      border-radius: 5px;
      margin-left: 50px;
    }
    .span1 {
      font-size: 130%;
    }
    .legendContact {
      text-align: center;
      color: #439A86;
      font-size: 35px;
      background-color: #E9D985;
      width: 400px;
    }
    .button {
      background-color: #439A86;
      border: none;
      color: black;
      padding: 15px 32px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 20px;
      margin: 5px;
      color: #E9D985;
    }
    .button:hover{
      border-style:solid;
      border-color: white;
      color: white;
    }
    .formFind {
      position: relative;
      left: 400px;
      bottom: 20px;
      background-color: #E9D985;
      width: 60%;
      padding-left: 10px;
      padding-top: 15px;
      padding-bottom: 10px;
      color: #439A86;
      border-radius: 6%;
      font-style: oblique;
      font-weight: bold;
    }
    .fieldsetGiveAway {
      border: none;
      width: 50%;
      text-align: center;
      margin-left: 25%;
      background-color: #E9D985;
      color: #439A86;
    }
    .form {
      font-weight: bold;
    }
    .pForDisclaimer {
      bottom: 200px;
    }
    .fieldsetContact {
      width: 50%;
      text-align: center;
      margin-left: 25%;
      background-color: #E9D985;
      color: #439A86;
      border: none;
      margin-top: 10%;
    }
    .h1GiveAway {
      background-color: #E9D985;
      width: 125px;
    }
    .h1GiveAway_ {
      background-color: #E9D985;
      width: 700px;
    }
    .h1Home {
      background-color: #E9D985;
      width: 220px;
    }
    .fieldsetHome {
      width: 50%;
      text-align: center;
      margin-left: 25%;
      background-color: #E9D985;
      color: #439A86;
      border: none;
    }
    </style>
  </head>
  <body>
    <?php include("Q3_part1_header.php"); ?>
    <ul class="div2">
      <li><a href="home.php"><p class="side-bar">Home</p></a></li>
      <li><a href="createAccount.php"><p class="side-bar">Create an Account</a></li>
      <li><a href="find.php"><p class="side-bar">Find a Dog/Cat</p></a></li>
      <li><a href="dogCare.php"><p class="side-bar">Dog Care</p></a></li>
      <li><a href="catCare.php"><p class="side-bar">Cat Care</p></a></li>
      <li><a href="giveAway.php"><p class="side-bar">Have a Pet to Give Away?</p></a></li>
      <li><a href="contact.php"><p class="side-bar">Contact Us</p></a></li>
    </ul>

    <div class="login">
      <fieldset class="fieldsetGiveAway">
        <legend><h1 class="h1GiveAway">Create a New Account</h1></legend>
        <div class="form">
          <form action="" method="post">
            <label>Username:</label>
            <input type="text" id="username" class="username" name="username"/>
            <br /><br />
            <label>Password:</label>
            <input type="text" id="pass" class="pass" name="pass" required title="A password must be at least 4 characters long, have at least one letter and at least one digit."/>
            <br /><br /><br /><br />
            <button type="submit" id="button" name="submit" class="button" onclick="loginValidate()" >Create Account</button>
            <br /><br />
          </form>
        </div>
      </fieldset>
    </div>

    <?php include("Q3_part1_footer.php"); ?>

    <script>
    function loginValidate() {
      var usernameVal = document.getElementById("username").value;
      var passVal = document.getElementById("pass").value;
      if (usernameVal == "") {
        alert("Please create a new username.");
      }
      if (passVal == "") {
        alert("Please create a new password.");
      }
    }
    </script>
  </body>
</html>
