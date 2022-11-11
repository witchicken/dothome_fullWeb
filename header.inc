  <header class="header">
    <div class="header_back">
      <?php 
      if(!isset($_SESSION['user_email']) || !isset($_SESSION['user_nickname'])){
        echo "<a href=\"login.php\">로그인</a>";
        echo "<a href=\"signup.php\">회원가입</a>";
      }else{
        $user_email = $_SESSION['user_email'];
        $user_nickname = $_SESSION['user_nickname'];
        echo "<p style=\"color:#888\"><strong>$user_nickname</strong>님 환영합니다.";
        echo "<a href=\"logout.php\">[로그아웃]</a></p>";
      }
    ?>
    </div>
    <div class="header_container">
      <div class="header_company">
        <a href="/">
          <div class="header_company_logo">
          </div>
        </a>
        
        <a class="header_company_name" href="/">
            <span>enig's </span> <span>Page</span>
          </a>
      </div>
      <div class="header_nav">
        <nav>
          <ul>
            <li>
              <a href="introduction.php">
                <p>소개</p>
              </a>
              <div class="header_nav_detail">
                <div><a href="introduction.php#move_hello">인사말</a></div>
                <div><a href="introduction.php?cr=career#move_career">경력</a></div><div><a href="introduction.php?cr=news#move_news">소식</a></div><div><a href="introduction.php?cr=location#move_location">위치</a></div>
              </div>
              
            </li>
            <li>
            <a href="haveskill.php">
              <p>스킬</p>
            </a>
            <div class="header_nav_detail">
                <div>
                  <a href="haveskill.php#move_front">front</a>
                </div>
                <div><a href="haveskill.php#move_back">back</a></div>
                <div><a href="haveskill.php#move_db">db</a></div>
              </div>
            </li>
            <li>
              <a href="portfolio.php">
                  <p>포트폴리오</p>
              </a>
            <div class="header_nav_detail">
                
              </div>
            </li>
            <li>
            <a href="contact.php">
                <p>contact</p>
            </a>
            
            </li>
            <li>
            <a href="board.php">
                <p>board</p>
            </a>
            
            </li>
          </ul>
        </nav>
      </div>
      <div class="header_nav_mobile">
        <a class="hamburger">
          <b></b>
          <b></b>
          <b></b>
          <b></b>
        </a>
      </div>
      <div class="header_nav_mobile_list">
        <ul>
          <li>
            <a href="introduction.php">
                <p>소개</p>
            </a>
          </li>
          <li>
            <a href="haveskill.php">
              <p>스킬</p>
            </a>
          </li>
          <li>
            <a href="portfolio.php">
              <p>포트폴리오</p>
            </a>
          </li>
          <li>
            <a href="contact.php">
              <p>contact</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="btn_toTop">
        Top
      </div>
  </header>
