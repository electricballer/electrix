<!DOCTYPE html>
<html>

 <link rel="shortcut icon" href="logo/electric-large.jpg"></link>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>SignUp | Electrix</title>
<style>

.already{

    font-family: Avenir Next Cyr W00 Medium,helvetica,sans-serif;
}

.first{
  text-align: center;
}

.title {
  text-align: center;
  font-size: 46px;
  background-color: #FEFEFE;
  width: 45%;
    margin: 0 auto;
    padding: 20px 0px;
}

.tabs {
font-size: 200px;
}


body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


body {
      padding: 0px;
      margin: 0 auto;
      background-color: #ebebeb;
    }

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
.signup {
    background-color: #041e3a;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    max-width: 425px;
    font-family: Avenir Next Cyr W00 Medium,helvetica,sans-serif;
}
.login {
    background-color: #041e3a;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    max-width: 425px;
    font-family: Avenir Next Cyr W00 Medium,helvetica,sans-serif;

}

button:hover {
    opacity:1;
}
/* Extra styles for the cancel button */
.loginbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.loginbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.tab {
    overflow: hidden;
    border-bottom: 1.2px solid #ccc;
    background-color: #FEFEFE;
    text-align: center;
   
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: none;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    text-align: center;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
    text-align: center;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
    text-align: center;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    text-align: center;
}
    .header {
    background-color: #FEFEFE;
    width: 100%;
    }

    .big{
        background-color: #FEFEFE;
        max-width: 1140px;
        padding: 10px;
         margin: auto;
          width: 100%;
    }

    .space{
      display: flex;
      padding: 3px;
      width: 100%
    }



.topnav {
  /*overflow: hidden;*/
  float: right;
  /*margin-top: -18px*/
  position: absolute;
  right: 0;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }


</style>

<body>

<div class="header" id="myHeader">

  <div class="space">

     <h1 class="title"> <a href="electrix-home.php"><font color="black" face="Georgia">Electrix</font></a></h1>


<div class="topnav">
 <?php
  session_start();
  if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['mail'] && $_SESSION['psw']){
      echo $_SESSION['username'];
  }else{
    echo '<a href="electrix-signin.php">Sign Up/ Sign In</a>';
  }

 ?>
  

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
  </div>
<br>

  <div class="tab">
<button class="tabs"><font face="Georgia">Featured</font></button>
    <a href="electrix-men.html"><button class="tabs"><font face="Georgia">Men</font></button></a>
    <button class="tabs"><font face="Georgia">Women</font></button>
    <button class="tabs"><font face="Georgia">Kids</font></button>
    <button class="tabs"><font face="Georgia">Sale</font></button>
  </div>
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>


<br>
<br>
<div class="big">

<form method="POST" action="#" `style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">

      <button type="submit" name="submit" class="signup">SIGN UP</button>
  </div>
  <br>
  <a class="already">ALREADY HAVE AN ACCOUNT?</a>
    <br>
    <br>
  <div>
      

      <a href="electrix-signin.php"><button type="button" class="login">LOGIN</button></a>
      
    </div>

  </div>
</form>
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>

