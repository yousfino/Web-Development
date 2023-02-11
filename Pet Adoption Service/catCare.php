<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cat Care</title>
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
      <h1 id="cat">What You Need to Know About Cat Care</h1>
      <br />
      <div class="lists">
        <h3>The following is a list of general instructions you will need to consider when adopting a cat:</h3>
        <br /><br />
        <ol class="bottom">
          <li>Groom your cat regularly.
            <ul class="bottom">
              <li>Whether your cat has short or long fur, he will benefit greatly from regular brushing or combing. This helps remove the dead hair from his coat so he doesn't ingest it while self-grooming. It also gives you the chance to notice any changes to his body. Irregularities such as lumps, bumps or sore spots can then be investigated right away by your veterinarian.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Provide fresh water daily.
            <ul class="bottom">
              <li>Clean, fresh water is essential for your cat's good health. If your cat doesn't seem to drink from a bowl, consider providing her with a tall glass (some cats don't like to bend down to drink) or a cat fountain. Be sure to replenish the water with a fresh supply every day.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Make sure you have enough litter boxes.
            <ul class="bottom">
              <li>A general rule of thumb for litter boxes is one for each cat plus one more. So if you have 2 cats, you should have 3 litter boxes. To encourage good litter box habits. keep the litter boxes clean. This may mean scooping more than once per day. Regular cleaning will also help you notice any changes in your cat's urine or stool, which could indicate a health issue.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Notice if your cat starts urinating outside its litter box.
            <ul class="bottom">
              <li>Sometimes a cat will urinate outside his litter box if the box is dirty. But before you blame the accident on the state of the litter box or your cat's naughty behavior, schedule a visit to the veterinarian. A change in litter box habits sometimes means that a cat has a urinary tract inflection or other medical issue.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Train your cat to use a scratching post.
            <ul class="bottom">
              <li>Not only will this help prevent damage to your furniture, it will help your cat stretch her muscles and keep her claws in top condition. Regular scratching on an appropriate surface such as carpet, sisal, or cardboard helps remove the old layers from your cat's claws.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Use a cat carrier in the car.
            <ul class="bottom">
              <li>Does your cat need to visit the vet? Or are you moving to a new home? Transport your cat in an appropriate carrier designed for pets. Allowing your cat to roam freely in the car can distract you from driving safely, which can lead to accidents that may harm both you and your cat.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Keep your cat's teeth clean.
            <ul class="bottom">
              <li>Like humans, cats can develop tartar on their teeth, which can lead to gum disease and tooth decay. The bacteria that collect on your cat's teeth also can enter her bloodstream, contributing to other feline diseases. Unlike humans, however, cats can't brush their teeth. And many cats won't let their owners brush their teeth for them. To keep your cat's teeth in top condition, schedule a cleaning with your veterinarian at least once every year.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Choose a cat-friendly vet.
            <ul class="bottom">
              <li>It seems to go without saying that cats are not smaller versions of dogs. That said, it follows that cats have different veterinary requirements than dogs do. A veterinarian specializing in feline health and anatomy can be a valuable ally in keeping your cat in her best possible health. You can find a feline vet in your area by visiting the American Association of Feline Practitioners.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Schedule regular veterinary visits.
            <ul class="bottom">
              <li>Annual visits give the vet a chance to catch any potential feline diseases in their early stages, administer vaccines, and clean the cat's teeth. Your vet can also tell you if your cat is at a healthy weight.</li>
            </ul>
          </li>
        </ol>

        <hr />

        <ol class="bottom">
          <li>Spay or neuter your cat.
            <ul class="bottom">
              <li>Reproductive diseases can affect cats of both genders, both male and female. Spaying prevents uterine infections, ovarian cancers and breast tumors in female cats, while neutering prevents testicular cancer and some prostate problems in males. The surgeries also reduce a male cat's urge to roam and if done soon enough in his life, may eliminate his urge to spray to mark territory. The best benefit? Your cat won't contribute to the pet overpopulation situation.</li>
            </ul>
          </li>
        </ol>
      </div>
    </div>
    <?php include("Q3_part1_footer.php"); ?>
  </body>
</html>
