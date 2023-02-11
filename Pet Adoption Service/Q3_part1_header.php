<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
    .firstH1 {
      color: #439A86;
      text-align:center;
      font-size: 300%;
      background-color:#E9D985;
    }
    .img {
      position: relative;
      bottom: 110px;
      left: 15px;
    }
    .catImg {
      border-radius: 50%;
      width: 7%;
      height: auto;
      margin-left: 60px;
    }

    </style>

  </head>
  <body onload="getCurrentDate()">

    <h1 class="firstH1">Pet Adoption Service</h1>

    <div class="img">
      <a href="home.html"><img id="homeIMG" src="https://t3.ftcdn.net/jpg/03/31/50/52/240_F_331505253_QuQ79rnGD5MX76Epq2yv1ETdOyxteBWu.jpg" alt="Logo Picture" class="catImg"/></a>
      <p id="headerTime" style="margin-left: 1100px; background-color: #E9D985; width: 16%;"></p>
    </div>

    <script>
    function getCurrentDate() {
      var str = "";
      var date = new Date();
      var weekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

      var day = weekDay[date.getDay()];
      var monthName = month[date.getMonth()];
      var year = date.getFullYear();
      var monthDay = date.getDate();

      str += day + ", " + monthName + " " + monthDay + ", " + year + " " + date.getHours() + ": " + date.getMinutes() + ": " + date.getSeconds();
      document.getElementById("headerTime").innerHTML = str;
      setTimeout(getCurrentDate, 1000);
    }
    </script>



  </body>
</html>
