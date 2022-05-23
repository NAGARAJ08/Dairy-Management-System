<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/all.css">
    <style media="screen">
    .header {
      position: fixed;
      right:0;
      top: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }
    .LOGO{
      height: 100px;
      width: auto;
      float: left;
      margin-left: 30px;
    }

    .list{
      float: right;
      margin-right: 40px;
    }


    .list li{
      display: inline-block;
      margin-right: 30px;
      margin-top: 30px;
    }

    .list li a{
      text-decoration: none;
      font-size: 20px;
      color:white;
      font-family: serif;
      font-weight: bold;
    }

    .list li:hover{
      border-bottom: 4px solid yellow;
      transition: .3s;
    }


      /* Full-width input fields */
      input[type=text], input[type=number] {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;

        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 8px;
        border: none;
        cursor: pointer;
        width: 50%;
      }

      button:hover {
        opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      .submit-btn-add{
        margin-left: 140px;
        width: auto;
        height: 40px;
        width: 200px;
        background-color:#00ff00;
      }

      /* Center the image and position the close button */

      .container {
        padding: 16px;
      }


      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 5px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 1% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 40%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      h2{
        text-align: center;
        font-family:serif;
        font-weight: bolder;
        color: white;
        font-size: 30px;

      }
      h3{
        text-align: center;
        font-family:serif;
        font-weight: bolder;
        color: green;
        font-size: 30px;

      }
      sup{
        color: red;
      }

      label{
        display: block;
        float: left;
        width : 120px;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
      }

      @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        .cancelbtn {
           width: 100%;
        }
      }

      .main-container{
        margin-top: 80px;
      }

      .h2{
        margin-top: 30px;

      }

    /*Footer*/
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color:white;
      text-align: center;
    }


</style>
  </head>
  <body>
    <!--Header-->
        <div class="header">
          <a href="startpage.php">  <img src="images/NATURE-ONE-DAIRY-CORPORATE-LOGO-01.png"  alt="logo" class="LOGO"></a>
          <ul class="list">
            <li> <a href="startpage.php" class="effect"><i class="fas fa-home"></i>  HOME</a> </li>
            <li> <a href="Service.php" class="effect"> <i class="fas fa-dolly-flatbed"></i> SERVICES</a> </li>
            <li> <a href="aboutus.html" class="effect"><i class="fas fa-info-circle"></i>  ABOUT US</a> </li>
          </ul>
        </div>

  <!-- Footer -->
        <div class="footer">
          <p>&copy DIARY.com <sub>All Rigths Reserved</sub> </p>
        </div>
  </body>
</html>
