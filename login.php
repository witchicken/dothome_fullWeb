<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
    <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
    <link rel="stylesheet" href="./src/css/Login.css" type="text/css" />
    <!--fontawesome!-->
    <script src="https://kit.fontawesome.com/b4823e771e.js" crossorigin="anonymous"></script>
  </head>
  <body>
<?php include_once 'header.inc' ?>

    <form class="login" action=<?php echo htmlspecialchars('login_ok.php');?>
    method="post">
    <fieldset>
      <h1>로그인</h1>
      <div class="input">
      <i class="fa-solid fa-user"></i>
        <input type="email" placeholder="Email" name="email" required />
      </div>
      <div class="input">
      <i class="fa-solid fa-lock"></i>
        <input
          type="password"
          placeholder="Password"
          name="password"
          required
        />
      </div>
      <div class="login_box">
        <button type="submit" class="submit">로그인</button>

        <a href="/signup.php" style="text-decoration: none; color: black">
          회원가입
        </a>
      </div>
      
    </fieldset>
    <div class="feedback"></div>
    </form>
    <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
  </body>
</html>
