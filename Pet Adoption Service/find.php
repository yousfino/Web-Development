<!-- check selected options by the user, then present the results to the user
     based on user selections. for now, the website has only two available pets.-->
<?php
  if(isset($_POST['sel']) && isset($_POST['1']) && isset($_POST['2']) && isset($_POST['age']) && isset($_POST['petGender']) && isset($_POST['cope']) && isset($_POST['submit'])) {
    if($_POST['sel'] == "Cat" && $_POST['age'] == "36") {
      header("Location: cat.php");
    } else if($_POST['sel'] == "Dog" && $_POST['age'] == "36") {
      header("Location: dog.php");
    } else {
      header("Location: browseAvailPets.php");
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Find a Dog/Cat</title>
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
      width: 230px;
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
      <li><a href="home.php"><p class="side-bar" >Home</p></a></li>
      <li><a href="createAccount.php"><p class="side-bar" >Create an Account</a></li>
      <li><a href="find.php"><p class="side-bar">Find a Dog/Cat</p></a></li>
      <li><a href="dogCare.php"><p class="side-bar">Dog Care</p></a></li>
      <li><a href="catCare.php"><p class="side-bar">Cat Care</p></a></li>
      <li><a href="giveAway.php"><p class="side-bar">Have a Pet to Give Away?</p></a></li>
      <li><a href="contact.php"><p class="side-bar">Contact Us</p></a></li>
    </ul>

    <form class="formFind" action="" method="POST">
      <label>What are you looking for?</label>
      <input type="radio" value="Dog" name="sel"/>
      <label>A dog</label>
      <input type="radio" value="Cat" name="sel"/>
      <label>A cat</label>
      <br /> <br /><br />
      <label>If Dog, Breed of Dog?</label>
      <select id="dogBreed" name="1">
        <option>Please select</option>
        <option value="dogbreed1">German Shepherd (available)</option>
        <option value="dogbreed2">Dog Breed 2 (not available)</option>
        <option value="catsel">Cat Breed Selected</option>
      </select>
      <br /> <br /><br />
      <label>If Cat, Breed of Cat?</label>
      <select id="Catbreed" name="2">
        <option>Please select</option>
        <option value="catbreed1">Cyprus (available)</option>
        <option value="catbreed2">Cat Breed 2 (not available)</option>
        <option value="dogsel">Dog Breed Selected</option>
      </select>
      <br /> <br /><br />
      <label>Preferred Age Range of Dog/Cat?</label>
      <select id="age" name="age">
        <option>Please select</option>
        <option>Does Not Matter</option>
        <option value="02">0 to 2 Years Old</option>
        <option value="36">3 to 6 Years Old (available)</option>
        <option value="710">7 to 10 Years Old</option>
        <option value="1115">11 to 15 Years Old</option>
        <option value="15">Above 15 Years of Age</option>
      </select>
      <br /><br /><br />
      <label>Preferred Gender of Dog/Cat?</label>
      <select id="petGender" name="petGender">
        <option>Please select</option>
        <option value="no">Does Not Matter</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <br /><br /><br />
      <label>Does the Pet Need to Cope With Other Pets/Children at Home?</label>
      <input type="radio" name="cope" class="cope" id="Yes" value="yes"/>
      <label>Yes</label>
      <input type="radio" name="cope" class="cope" value="no"/>
      <label>No</label>
      <input type="radio" name="cope" class="cope" value="doesnt"/>
      <label>Does Not Matter</label>
      <br /><br /><br /><br /><br /><br />
      <button type="submit" name="submit" class="button" onclick="validate()">Submit</button>
      <input type="button" value="Clear" class="button"/>
    </form>
    <?php include("Q3_part1_footer.php"); ?>
    <script>
      function validate() {
        var radioCheck1 = document.querySelector('input[name="sel"]:checked');
        if (radioCheck1 == null) {
          alert("The following field is still empty:\nWhat are you looking for?");
        }

        var dogBreedSel = document.getElementById("dogBreed");
        if (dogBreedSel.value == "Please select") {
          alert("One of the following fields is still empty:\nIf Dog, Breed of Dog?\nor\nIf Cat, Breed of Cat?")
        }

        var catBreedSel = document.getElementById("Catbreed");
        if (catBreedSel.value == "Please select") {
          alert("One of the following fields is still empty:\nIf Dog, Breed of Dog?\nor\nIf Cat, Breed of Cat?")
        }

        var prefAge = document.getElementById("age");
        if (prefAge.value == "Please select") {
          alert("The following field is still empty:\nPreferred Age Range of Dog/Cat?");
        }

        var prefGender = document.getElementById("petGender");
        if (prefGender.value == "Please select") {
          alert("The following field is still empty:\nPreferred Gender of Dog/Cat?");
        }

        var radioCheck2 = document.querySelector('input[name="cope"]:checked');
        var textCheck = document.getElementById("selYes").value;
        if (radioCheck2 == null) {
          alert("The following field is still empty:\nDoes the Pet Need to Cope With Other Pets/Children at Home?");
        }
        if (document.getElementById("Yes").checked) {
          if (textCheck == "") {
            alert("The following field is still empty:\nIf You Selected 'Yes' in the Field Above, Please Specify Here Whether it is a Dog, a Cat, or a Child:");
          }
        }
      }
    </script>
  </body>
</html>
