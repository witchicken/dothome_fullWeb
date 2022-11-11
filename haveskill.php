<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>enig'sPage</title>
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Haveskill.css" type="text/css" />
</head>
<body>
  <?php include_once 'header.inc' ?>
  <section class="haveskill">
    <div class="haveskill_container">
      <div class="haveskill_background">
        <p>Skill</p>
      </div>
    </div>
    <div class="haveskill_front" id="move_front">
      <h1>FrontSkill</h1>
        <div class="haveskill_front_lists">
          <div class="menu" onclick="this.classList.toggle('open')">
          <div class="button"><span>html5</span></div>
          <div class="button"><span>css</span></div>
          <div class="button"><span>javascript</span></div>
          <div class="button"><span>react</span></div>
          <div class="button"><span>nextjs</span></div>
        </div>
      </div>
    </div>
    <!--php,jsp/servlet,nodejs,express,api,typescript!-->
    <div class="haveskill_back" id="move_back">
      <h1>BackSkill</h1>
      <div class="haveskill_back_lists">
        <div class="menu" onclick="this.classList.toggle('open')">
        <div class="button"><span>php</span></div>
        <div class="button"><span>jsp/servlet</span></div>
        <div class="button"><span>nodejs</span></div>
        <div class="button"><span>expressjs</span></div>
        <div class="button"><span>api</span></div>
        <div class="button"><span>typescript</span></div>
      </div>
    </div>
    <div class="haveskill_db" id="move_db">
      <h1>DB</h1>
      <div class="haveskill_db_lists">
        
          <div class="menu" onclick="this.classList.toggle('open')">
            <div class="button"><span>mysql</span></div>
            <div class="button"><span>mongodb</span></div>
            
        
      </div>
    </div>
  </section>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
</body>
</html>