
<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="enigspage 포트폴리오">
    <title>enig's Page</title>
    <!--fontawesome-->

    <!--font-->
    
    <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="./src/css/Home.css" type="text/css" />
    <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
    <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  </head>
  <body>
    <div class="Home">
      <section class="Home_main" id="move_main">
        <div class="Home_slide_1 visible" >
          <div class="Home_main_description_1">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_2">
        <div class="Home_main_description_2">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_3">
        <div class="Home_main_description_3">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_4">
        <div class="Home_main_description_4">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_btn">
          <span id="Home_slide_left"><</span>
          <span id="Home_slide_num">1</span>
          <span id="Home_slide_right">></span>
        </div>
        
        <?php include_once 'header.inc' ?>
        
      </section>
      <section class="Home_skill" id="move_skill">
        <h1 class="Home_skill_title">skills</h1>
        <h3 class="Home_skill_subtitle">Lorem, ipsum dolor.</h3>
        <div class="Home_skill_list ">
          <div class="Home_skill_detail skill_front">
            <div class="Home_skill_text">
              <h2>Front</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque!</p>
              <a href="/haveskill.php#move_front">more skills</a>
            </div>
            <div class="Home_skill_bottom">

            </div>
          </div>
          <div class="Home_skill_detail skill_back">
            <div class="Home_skill_text">
              <h2>Back</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <a href="/haveskill.php#move_back">more skills</a>

            </div>
            <div class="Home_skill_bottom">

            </div>

          </div>

          <div class="Home_skill_detail skill_db"
          >
            <div class="Home_skill_text"><h2>DB</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A repellat libero dolor.</p>
              <a href="/haveskill.php#move_db">more skills</a>
          </div>
          <div class="Home_skill_bottom">

          </div>

            
          </div>
        </div>
      </section>
      <section class="Home_portfolio" id="move_portfolio">
        <div class="Home_portfolio_title">
          <h1>Portfolio</h1>
          <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias ut debitis sint laudantium dolores deleniti aperiam, inventore, voluptatum perferendis veritatis excepturi labore enim omnis at repudiandae ipsum minus error culpa?</h3>
        </div>
        
        <div class="Home_portfolio_list">
          <div class="Home_portfolio_detail">
              <div class="Home_portfolio_img Home_port_img_01"></div>
            <a>lorem</a>

          </div>
          <div class="Home_portfolio_detail">
            <div class="Home_portfolio_img Home_port_img_02"></div>
            <a>lorem</a>
          </div>
          <div class="Home_portfolio_detail">
            <div class="Home_portfolio_img Home_port_img_03"></div>
            <a>lorem</a>

          </div>
          <div class="Home_portfolio_detail">
            <div class="Home_portfolio_img Home_port_img_04"></div>
            <a>lorem</a>

          </div>
          
          
        </div>
        <div class="Home_portfolio_more">
            <a href="/portfolio.php">more portfolio...</a>
          </div>
        
      </section>
      <div class="Home_movebtn">
        <ul>
          <li class="Home_movebtn_main">main</li>
          <li class="Home_movebtn_skill">skill</li>
          <li class="Home_movebtn_portfolio">portfolio</li>
          
        </ul>
      </div>
      <?php 
        
      ?>
      <?php include_once 'footer.inc' ?>
    </div>
    

    <script src="./src/js/Home.js" ></script>
    <script src="./src/js/Header.js" ></script>
  </body>
</html>
