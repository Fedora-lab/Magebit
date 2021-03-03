<?php
require_once ("php/DBmethods.php");
$data=new Databases;
if(isset($_POST['reg_user'])){
  $massage='';
  $insert_data =  $_POST['email'];
  if(isset($_POST['agree-terms'])){
    if(validate($insert_data)==true){
      $data->insertdata('users', $insert_data);
      header('Location: http://localhost/practice/ss/sucess.html');
    }else {
      $massage = Databases::$errors;
    }
  }else{
    $massage= "Please agree with terms";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <div class="col-left">
      <div class="nav-bar">
        <div class="brand">
          <a href="main.php">pineapple.</a>
        </div>
        <ul class="links">
          <li class="link"><a href='#'>About</a></li>
          <li class="link"><a href='#'>How&nbsp;it&nbsp;works</a></li>
          <li class="link"><a href='#'>Contact</a></li>
      </div>
      <div class="email-form">
        <form action="main.php" class="emails" method="post" onsubmit="return MainValidation();" novalidate>
          <h1>Subscribe to newsletter</h1>
          <h4>Subscribe to our newsletter and get 10% discount on pineapple glasses.</h4>
          <div class="email-field">
            <div class="input">
            <input type="email" class="email" name="email" placeholder="Type your email address here…" value="<?php $email; ?>">
            <button type="submit" class="submit" name="reg_user"><i class="arrow"></i></button>
            </div>
            <p class="errors"></p>
            <?php if(isset($massage)) { ?>
            <p class="errors"><?php echo $massage ?></p>
            <?php
              }
            ?>
          </div>
          <div class="terms">
            <input type="checkbox" class="agree-terms" name="agree-terms"></input>
            <label for="agree-terms">I agree to <span>terms of service</span></label>
          </div>
        </form>
      </div>
      <div class="social-icons">
          <ul class="sociala-icons">
            <li class="social-icon" id="fb"><a href="#fb"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icon" id="ig"><a href="#ig"><i class="fab fa-instagram"></i></a></li>
            <li class="social-icon" id="tw"><a href="#tw"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icon" id="yt"><a href="#yt"><i class="fab fa-youtube"></i></a></li>
          </ul>
      </div>
    </div>
    <div class="col-right"><img src="./img/image_summerimage.png" alt=""></div>
  </div>

  </div>
  <script src="./js/script.js"></script>
</body>
</html>