<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Browse Available Pets</title>
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
      <li><a href="home.php"><p class="side-bar">Home</p></a></li>
      <li><a href="createAccount.php"><p class="side-bar">Create an Account</a></li>
      <li><a href="find.php"><p class="side-bar">Find a Dog/Cat</p></a></li>
      <li><a href="dogCare.php"><p class="side-bar">Dog Care</p></a></li>
      <li><a href="catCare.php"><p class="side-bar">Cat Care</p></a></li>
      <li><a href="giveAway.php"><p class="side-bar">Have a Pet to Give Away?</p></a></li>
      <li><a href="contact.php"><p class="side-bar">Contact Us</p></a></li>
    </ul>

    <div style="margin-left: 200px;">
      <table style="border-spacing: 50px;">
        <tr>
          <th colspan="2" style="text-align: center; font-size: 170%; color: #E9D985">
            Cats Available for Adoption
          </th>
        </tr>
        <tr>
          <td>
            <img style="margin-left: 160px;" src="https://t3.ftcdn.net/jpg/00/95/52/14/240_F_95521433_VMSTA0cL0wpGbCccPWpMOKFKq7OwBqlW.jpg" alt="Cyprus Cat"/>
            <br />
            <p style="text-align: center; color: #E9D985; font-size: 120%; font-style: oblique;"><b>KitKat || Breed: Cyprus</b></p>
            <p style="text-align: center; font-style: oblique; font-size: 110%; width: 75%; margin-left: 70px;">KitKat is a beautiful 4 years old cat. KitKat's owner passed away last month and she is currently looking for a new friend.<br /><input type="button" class="button" value="Interested in KitKat?"/></p>
          </td>
        </tr>
      </table>
    </div>
    <?php include("Q3_part1_footer.php"); ?>
  </body>
</html>
