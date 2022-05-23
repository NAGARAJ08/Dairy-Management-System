<html>
    <head>
        <title>Dairy management system</title>
        <script src="https://kit.fontawesome.com/d5e4bd332c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/all.css">
        <style>
body{
  margin:0;
    padding:0;
    overflow-x:hidden;
}
.wrapper
    {
    margin:0 0;
    }
header
    {

    height:100px;
    background:lightgreen;
    width:100%;
    border-radius:10px;
    }
.logo
    {padding-top:10px;
    width:30%;
    float:left;

    }
.logo a
    {
    text-decoration:none;
    font-size:30px;
    font-weight:bold;
    color:black;
    letter-spacing:3px;
    }
 .banner-area
    {

    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)), url('images/mainimg.jpeg');
    padding-bottom:5px;
    height:650px;
    background-repeat: no-repeat;
    background-size: cover;
    text-align:center;
    transition:-10px;
    }
.banner-area h2
    {
    position:relative;
    margin-top:200px;
    margin-left:50px;
    color:yellow;
    width:30%;
    font-family:lucida ;
    }
 .main-body
    {
    text-align:center;

    }
 img.lgo
    {
    height:60px;
    width:60px;
    border-radius:10px;
    opacity:1;
    }

.nav1 ul li a:hover
    {
    background-color:lightgreen;
    }
.nav1 ul
    {
    display:flex;
    list-style:none;
    }
h2
    {
    color:white;
    font-family: "Lucida Console", "Courier New", monospace;
    font-size:50px;
    text-align:left;
    width:40%;
    margin-top:100px;
    }
  .login
    {
    padding:10px;
    margin-right:30px;
    margin-top:20px;
    font-size:25px;
    float:right;
    color:green;
    text-decoration: none;
    background-color:white;
    border-radius:20px;
    font-weight:bold;
  }
.login:hover
    {
    background-color:yellow;
    }

.cno
    {
    float:center;
    padding:15px;
    display:inline-block;
    }
.mail
    {
    float:left;
    padding:10px;
    margin-left:350px;
    display:inline-block;
    }
.loc
    {
    float:right;
    text-align:center;
    padding:10px;
    margin-top:10px;
    margin-right:30px;
    }
.cno a
    {
    text-decoration:none;
    padding:10px;
    display:inline-block;
    margin-left:20px;
    font-size:20px;
    color:black;
    }
.loc a
    {
    text-decoration:none;
    font-size:20px;
    color:black;
    display:inline-block;
    }

.mail a
    {
    padding:18px;
    text-decoration:none;
    font-size:20px;
    color:black;
    display:inline-block;
    }
 .fas
    {
    margin-right:10px;
    color:black;
    }
.menu
    {
    opacity:0.7;
    background-color:orange;
    width:100%;
    height:50px;
    display:inline-block;
    border-radius:20px;
    }
 .menu li
    {
    display:inline-block;
    padding:10px;
    float:center;
    }
.menu a
    {
    padding:10px;
    text-decoration:none;
    font-size:20px;
    color:black;
    font-weight:bold;
    line-height:40px;
    margin-right:20px;
    border:transperent;
    transition:0.3;
    }
.menu a:hover
    {
    color:white;
    background-color:black;
    }
.menu i:hover
{
    color:white;
    background-color:black;
  }

.foot
    {
    position:relative;
    top:30px;
    background-color:black;
    padding:20px;
    }
.foot-main
    {
    padding:20px;
    }
.foot1
    {
    width:25%;
    height:25%;
    float:left;
    }
.foot1 p
    {color:white;
    font-family: "Lucida Console", "Courier New", monospace;
    padding:10px;
    font-weight:bold;
    padding-bottom:15px;
    }
.foot1 a
    {
    color: white;
    padding-left:10px;
    padding-right:10px;
    padding-top:5px;
    padding-bottom:8px;
    text-decoration:none;
    border: 2px solid #42b7e8;
    text-transform: uppercase;
    font-weight:bold;
    border-radius:6px;
    }

.foot2
    {
    width:500px;
    height:25%;
    float:right;
    }
.foot2 p
    {color:white;
    font-size:20px;
    font-family:monospace;
    }

 .foot4 li
    {
    display:inline-block;
    list-style:none;

    }
    .foot4{
      margin-left: -200px;
    }
 .foot3
    {color:white;
    font-size:15px;
    font-family:cursive;
    }

 .foot-main h3
 {  color:yellow;
     text-decoration:underline;
    font-size:25px;
    font-family: "Times New Roman", Times, serif;
    padding:10px;
    }
 .foot-main h3:hover
    {
    text-decoration:underline;
    transform:scale(1.3);
    }
 .fab
    {color:white;
    position:relative;
    font-size:30px;
    padding:10px;
    }
.maile
    {
    margin-left:0px;
    background-color:black;
    color:white;
    border-radius:2px;
    padding:none;
    height:20px;
    border:none;
    }
 .emailid
    {
    color: black;
    height:28px;
    }
.section
    {   border-radius:10px;
        display:inline-flex;
        position:relative;
    }
.products
    {
        width:30%;
        padding:20px;
        position:relative;

    }
.products img
    {
    height:300px;
    width:400px;
    box-shadow: 5px 8px grey;
    }
 .products h3
    {
     padding:10px;
     font-size:30px;
     color:red;
     letter-spacing:2px;
     font-family:lucida handwriting,Brushscriptm7,cursive;
    }
.products p
    {
        font-size:25px;
        line-height:20px;
        padding-top:15px;
        font-family:Papyrus,Copperplate,Fantasy;
        font-weight:bold;
    }
.products a
    {
        border:2px solid green;
        border-radius:5px;
        font-family:Brushscriptm7,cursive;
    }
div.box-area img{
  height: 100px;
  float: left;
  margin-left: 20px;
}
.title{
  font-size: 40px;
  font-family: monospace;
  font-weight:bold;
  margin-top: 10px;
}
</style>
    </head>
    <body class="main-body">
      <header>
        <div class="box-area">

              <a href="startpage.php">
              <img src="images/NATURE-ONE-DAIRY-CORPORATE-LOGO-01.png" alt="" class="lg"></a>
              <span class="title">Dairy Management</span>
              <a href="loginpage.html" class="login"><i class="fas fa-sign-in-alt"></i>Login</a>
        </div>
</header>

            <div class="banner-area">
             <div class="menu">
                      <ul>
                        <li><a href="startpage.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="Service.php"><i class="fas fa-dolly-flatbed"></i>Services</a>
                        </li>
                        <li><a href="aboutus.html"><i class="fas fa-info-circle"></i>About Us</a></li>
                        <li><a href="gallery.html"><i class="far fa-images"></i>Gallery</a></li>

                       </ul>


                    </div>

                <h2> welcome to farmer friendly and eco-friendly dairy</h2>

            </div>
            <div class="section" id="aboutus">
                <div class="products">
                <h3> Our Products</h3>
                 <img src="images/products.jpg" alt="image">
                 <br>
                 <p>we provide our customers a wide variety of dairy products from organic milk to butter and cheese</span><P>
                 <a href="#">Read More</a>
                </div>
                <div class="products">
                <h3>Our Aim </h3>
                 <img src="images/aim.jpg">
                 <br>
                 <p>To build a <span style="color:green">strong </span><span style="color:red">,healthy </span>and <span style="color:blue">nutritious</span> country by providing an employement to all small-scale farmers <P>
                 <a href="#">Read More</a>
                </div>
                <div class="products">
                <h3>Working</h3>
                 <img src="images/working.png" alt="image">
                 <br>
                 <p> let"s start<P>
                 <a href="#">Read More</a>
                </div>
            </div>
            <div class="foot">
                <footer>
                    <div class="foot-main">
                        <div class="foot1">
                            <h3 font> About us</h3>
                            <p>A dairy is a business enterprise established for the processing of animal milk.mostly from cows or buffaloes,for human consumption.</p>
                            <a href="#">read more</a>
                        </div>
                        <div class="foot2">
                            <h3>find us</h3>
                            <p>BANASHANKARI </P>
                            <p>NEAR BANASHANKARI TTMC</p>
                            <p>BANGALORE-560082</p>
                            <p>TELEPHONE:08518-232205</p>
                        </div>
                        <div class="foot3">
                            <h3>Contact us</h3>
                            <p>Subscribe to get our latest updates and offers.</p>
                            <br>
                            <form class="" action="" method="POST">
                            <input type="email" name="subscribe"  class="emailid" placeholder="Enter Your Email ID"/><button type="submit" onclick=href"www.gmail.com"><span class="maile">submit</span></button>
                            <p>***Don't worry, we wont spam you!</p>
                            </form>



                        </div>
                        <div class="foot4">
                            <h3>follow us</h3>
                            <ul>
                              <li><a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram-square"></i></a></li>
                              <li><a href="https://www.bing.com/search?q=facebook&form=ANNTH1&refig=57c3a643f07b4d528577f9477c526b74"><i class="fab fa-facebook-square"></i></i></a></li>
                              <li><a href="https://www.bing.com/search?q=twitter&cvid=df49de1cdf96439c8e1c74517c24caca&aqs=edge.0.0l7.4519j0j9&FORM=ANAB01&PC=DCTS"><i class="fab fa-twitter-square"></i></i></a></li>
                            </ul>
                        </div>
                    <//div>
            </div>

    </body>
