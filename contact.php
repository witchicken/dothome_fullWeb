<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>enig'sPage</title>
  <!--fontawesome!-->
  <script src="https://kit.fontawesome.com/b4823e771e.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Contact.css" type="text/css" />
  
</head>
<body>
  <?php include_once 'header.inc' ?>
  <section class="contact">
    <div class="contact_container">
      <form class="contact_inner" method="post" action=<?php echo htmlspecialchars('contact_ok.php');?>>
        <h1>Contact us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit iste vero recusandae!</p>
        <div class="contact_common">
          <label for="form_name_input">
            <span><i class="fa-solid fa-user"></i></span>
          </label>
          <input type="text" class="form_name_input_cl" placeholder="Enter your name" name="form_name_input" id="form_name_input" required/>
        </div>
        <div class="contact_common">
          <label for="form_email_input">
            <span><i class="fa-solid fa-envelope"></i></span>
          </label>
          <input type="email" class="form_email_input_cl" placeholder="Enter your email" name="form_email_input" id="form_email_input" required/>
        </div>
        <div class="contact_msg">
          
          <textarea class="form_msg_input_cl" placeholder="type message" name="form_msg_input" id="form_msg_input" maxlength="500" required></textarea>
        </div>
        <input type="submit" class="contact_submit" value="SEND" />
      </form>

    </div>
  </section>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>

  
</body>
</html>