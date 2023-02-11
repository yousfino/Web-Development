<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dog Care</title>
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

    <div class="hint">
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <h1 id="dog">What You Need to Know About Dog Care</h1>
      <br />
      <div class="lists">
        <h3>The following is a list of general instructions you will need to consider when adopting a dog:</h3>
        <br /><br />
        <ol class="bottom">
          <li>Provide a protected and clean living environment for youe dog.
            <ul class="bottom">
              <li>Shelter from the elements and hazards, as well as good hygiene, are basic to a quality life.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Always keep fresh water available.
            <ul class="bottom">
              <li>Maintaining optimal hydration is important for health and energy.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Feed a quality diet and prevent obesity.
            <ul class="bottom">
              <li>Overweight humans and animals can adversely affect health in many ways. Follow the dietary recommendations that your veterinarian will make according to the nutritional needs of your dog, based on size, age, level of activity and breed. Remember to provide healthy treats rather than table scraps, as rewards.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Have your dog examined by a veterinarian on a regular basis.
            <ul class="bottom">
              <li>Your veterinarian will provide you with the information on vaccination schedules, deworming and external parasite control. Keep a copy of your pet’s vaccination records in your home or with you when you travel. Contact your veterinarian if you believe that your pet may be ill, injured, or if something just doesn’t seem right. Your veterinarian is the expert on keeping your dog healthy.  Work as a team with him or her.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Provide ample opportunities to exercise.
            <ul class="bottom">
              <li>Make sure your dog gets the regular exercise needed to enable it to be fit.  By being in shape, your dog will be more capable of participating in the activities that it enjoys.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Communicate with your dog and develop a relationship.
            <ul class="bottom">
              <li>Dogs are social creatures and they need to interact with their owner. Quality time will help you get to know your dog and understand  particular needs that it might have, as well enhance your ability to recognize early signs of an illness that could be developing. In addition, time spent in developing a relationship will help prevent many undesirable behavioral patterns.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Train your dog to follow the simple commands.
            <ul class="bottom">
              <li>Puppy and dog training classes can be very helpful. The better your dog is at following basic and necessary commands, the greater the chances are that your dog will live a safe and long life.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Practice reproductive control.
            <ul class="bottom">
              <li>If you do not intend to create puppies, spaying or neutering is a certain option. If you plan to breed your dog or are opposed to spaying and neutering for other reasons, take appropriate measures to prevent mismatings. Consult with your veterinarian in regard to other options that are available.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Dental care is very important.
            <ul class="bottom">
              <li>Many breeds are prone to gum disease, which can have serious implications. Infection resulting from this condition leads to premature tooth loss, and can commonly cause infections in major organs, including the heart valves.</li>
            </ul>
          </li>
        </ol>
        <hr />
        <ol class="bottom">
          <li>Don't overlook grooming and nail trimming.
            <ul class="bottom">
              <li>Long coated dogs are prone to developing matts and ice balls in their hair. Overgrown nails are common in elderly dogs and can make it more difficult for them to walk. In addition, such nails are much more prone to breaking, which can be quite painful.</li>
            </ul>
          </li>
        </ol>

      </div>
    </div>
    <?php include("Q3_part1_footer.php"); ?>
  </body>
</html>
