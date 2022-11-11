<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>enig's Page</title>
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Introduction.css" type="text/css" />
  
</head>
<body>
  <?php include_once 'header.inc' ?>
  <div class="introduction">
    <section class="introduction_main">
      <div class="introduction_img"></div>
      <div class="introduction_msg">
        <h1>enig's page에 오신걸 환영합니다.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sit!</p>
      </div>
      <div class="introduction_nav">
        <nav>
          <ul>
            <a href="introduction.php?cr=hello" class="intro_hello"><li>인사말</li></a>
            <a href="introduction.php?cr=career" class="intro_career"><li>경력</li></a>
            <a href="introduction.php?cr=news" class="intro_news"><li>소식</li></a>
            <a href="introduction.php?cr=location" class="intro_location"><li>location</li></a>
          </ul>
        </nav>
      </div>
    </section>
    
    <?php
      if(!empty($_GET['cr'])){
        $cr = $_GET['cr'];
        switch ($cr) {
          case 'hello':
            echo "<section class=\"introduction_hello\" id=\"move_hello\">
        <h1>인사말</h1>
        <div class=\"introduction_hello_container\">
        <div class=\"introduction_hello_content\">
          <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima magni officia aut ab! Laboriosam aliquid ratione voluptas molestiae beatae cupiditate ad minus adipisci, ipsum libero perferendis facere sapiente suscipit quis iusto dignissimos molestias animi inventore non! Quo expedita ex similique quos libero autem voluptatem pariatur, molestiae sapiente deserunt consectetur enim.</h3>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo alias expedita eveniet, iure earum veritatis similique sed facilis quae ipsum repellendus velit.</h3>
          <p>Lorem, ipsum.</p></div>
          
          <div class=\"introduction_hello_svg\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 700 900\">
          <path
            class=\"path path1\"
            d=\"M220.54,84.4c.3-5.06.05-14.81-6-24-9.34-14.2-28.11-20.39-42-16-2.62.83-10.54,3.33-12,9-.85,3.33,1,5.9,8,21,3.21,6.91,4.15,9.24,3,11-1.45,2.2-5.33,2.16-13,2-9.19-.2-12-1.5-13,0-1.65,2.46,2.87,10.55,10,14,6.77,3.27,10.14-.41,17,3,6.6,3.28,5.37,7.62,11,10,6.33,2.68,9.45-2.15,23-4,12.22-1.67,18,1.12,21-3a9.2,9.2,0,0,0,0-10c-6-8.71-30.92-3-31,0,0,1.46,5.89,3.38,7,2,1.23-1.53-3.84-6.64-10-16-6-9.07-4.7-11.7-9-16-5-5-13.9-9.52-17-7-6.84,5.57,12.62,46.7,24,45,5.93-.89,5.57-12.8,16-18a23.86,23.86,0,0,1,21,0c6.59,3.45,9.12,9.71,12,16,6.32,13.79,14.24,31.06,26,43,13.33,13.54,31.08,19.69,32,20,12.21,4.1,18.42,2.75,24,9,8,8.92,7.37,25.21,2,28-3.86,2-7.49-4.38-13-3-9.92,2.49-7.3,25.55-18,30-4.76,2-9.64-.77-19-6-10.34-5.78-11.49-9.11-37-37-4.18-4.57-8.07-8.77-7-13,.87-3.44,4.91-5.29,13-9s12.11-5.49,16-4c3.74,1.43,7.47,5.44,7,9-.14,1.07-.8,3.17-16,11-4.47,2.3-4.43,2.13-8,4-11.69,6.12-12.23,8-15,8-7.56-.09-13.23-14.45-17-24-7-17.8-3.64-21.88-11-36-4.76-9.14-8.16-11.24-7-15,3.06-9.89,32-12.71,36-5,2,3.93-3.88,7.71-7,19-2.61,9.45-1.27,17,1,29,2.24,11.83,5,26.44,15,43,8.36,13.84,18.91,22.23,40,39,10,7.95,14,10.07,18,9,10.06-2.67,16.63-24.22,19-32,1.65-5.4,2.86-11,5-11s3.81,5.94,5,9c5.39,13.84,23.12,19.58,43,26,23.32,7.53,42.14,8,55,7,20.7-1.6,26.43-7,29-11,2-3.1.61-4.81,3-13s4.8-11.1,7-17c3.77-10.11,5.64-21.78,3-23-1.45-.67-3,2.39-8,5-6.28,3.27-14.86,4.19-16,2-2.37-4.57,25.89-25.71,30-22,1.72,1.55-2.17,6.19,0,9,3.83,4.94,17.93-6.78,29-1,6.7,3.5,7.27,10.79,16,13,2.23.56,4.76,1.2,7,0,6.77-3.64,6-21.58-1-34-2.17-3.84-6.95-12.27-17-15a25.78,25.78,0,0,0-18,2c-10.71,5.44-14.84,18.41-14,19,.51.35,4-2.94,6-7,2.33-4.78,1.69-8.9,1-16-1.64-16.79-.15-15.11-2-28a118.28,118.28,0,0,0-3-16c-2.32-8.49-4.41-16.14-10-23-5.37-6.6-11.35-9.26-22-14-7.49-3.34-16.58-7.39-29-8-7.94-.39-14.29,1.07-27,4-16.5,3.8-24.75,5.7-31,10-10.83,7.45-14.68,18.6-20,33a116.57,116.57,0,0,0-7,34c-1,17.41-1.57,28.57,5,39,8.6,13.64,24.23,17.66,45,23,10.32,2.65,18.33,4.62,29,3,6-.92,21.38-3,30-15,3.31-4.63,4.21-9.08,6-18,.75-3.75,3.53-18.67,0-39-1.49-8.6-2.24-12.9-5-18-6.69-12.36-18.13-17.72-23-20-14.16-6.64-26.93-5.63-35-5-8.77.69-21.64,1.7-33,11a46.55,46.55,0,0,0-9,10c-14.28,21.32-3.86,43.72-1,92a23.81,23.81,0,0,0,2,9c4.1,9,14.1,14.21,35,19,32.3,7.41,48.45,11.11,65,4,7.35-3.16,23.46-10.08,33-26,3.92-6.55,5.87-13.18,12-15,5.3-1.58,10.67,1.34,20,8,23.86,17,35.78,25.51,36,36,.21,10.31-7.25,19.38-14,24-7.07,4.84-18,8-20,5-2.91-4.32,10.42-24.94,25-24,10.32.66,16.48,11.82,21,20,7.82,14.15,15.94,41.08,4,53-9.8,9.78-23.29-.37-35,11-10.19,9.9-9.15,26.53-7,34,.51,1.76,1.65,5.57,4,6,3.31.6,7.26-5.81,8-7,3.14-5.09,2.71-8.27,5-9s5.52,1.3,7,4c2.87,5.25-3.09,9.68-2,17,1,6.86,7.91,14,15,14,8.18.05,13.47-9.3,15-12,7.14-12.61,3-26.71,0-37-2.37-8.11-3.56-12.16-7-14-9.09-4.86-19.48,10-31,6-3.35-1.17-4.73-3.21-16-21-5.42-8.56-5.55-14.74-12-19-4.33-2.86-5.14-1.09-10-4-8-4.78-7.18-10.4-16-18-2.7-2.32-9-7.77-12-6-3.2,1.89-3.2,12.44,3,17,2.82,2.07,5.25.74,13,1,8.13.27,13.38.46,17,3,6.14,4.31,6,14.31,6,19-.66,73.66-1,110.48,0,114a11.12,11.12,0,0,1,0,7c-1.55,4.09-5.89,6.18-11,8a90.06,90.06,0,0,1-34,5c-10.55-.51-15.83-.76-18-4-3.45-5.15,1.78-13.06,9-28,3.87-8,12.28-25.42,16-40,4.41-17.3,2.4-31.31,0-48-4.12-28.66-14.42-50.19-15-50s6.8,15.2,10,38c5,35.74-3.82,63.4-8,76-5.05,15.23-13.54,33.91-17,33-1.91-.5-.24-6.42-2-14-4.63-19.94-29-34.07-50-37-9.75-1.36-23.44-1-24,2-.69,3.67,18.08,15.47,36,10,16-4.89,22.19-20.79,23-23a68.19,68.19,0,0,0-14-55c-16-19.69-29.11-11.83-56-34-7.18-5.92-12.41-11.56-18-10-3.8,1.06-6.71,5.16-11,20-5.16,17.86-4.32,23.29-8,39-6.57,28.1-14.78,34.52-19,37-2.21,1.3-8,4.25-9,3-1.31-1.65,4.87-11.48,12-12,5.68-.41,9.47,5.27,15,11,12.43,12.88,26.26,18.35,38,23,17.75,7,19.09.73,38,7,10.23,3.39,31,10.28,40,29,6.86,14.28,6.58,34.87-3,41-2.86,1.83-6.51,2.35-26-3-29.87-8.2-33-12.62-44-12-16.15.91-33.65,11.73-34,22-.38,11.14,19.66,14.76,19,28-.25,5.1-3.67,13.42-8,24l-.71,1.7c-5.15,12.4-13.66,55.81,8.71,81.3,2.21,2.52,6.24,7,9,6,3.68-1.36,2.83-11.71,1-32-3.89-43.13-4.89-53.57,2-62,1.78-2.18,1.89-1.54,17-10,34.69-19.43,39.88-26,42-29,3-4.21,10.15-14.23,9-27-1.27-14.08-11.87-23.17-21-31-6.93-5.94-16.81-14.41-31-16-10-1.13-13.37,2.17-24,0-7.17-1.46-11.39-4.14-21-10-34.25-20.9-39.2-22.71-45-23-9.32-.47-16.33,3.2-25,8-43.37,24-65,36-74,46-30.33,33.81-33.72,71.6-36,97-1.43,16-.21,27.33,7,33,10.13,8,26.31.13,30,7,2.65,4.93-3.27,13.51-8,18-7.06,6.71-15.81,7.89-33,10-16.08,2-24.32,2.89-34,0-3.39-1-22.08-6.6-23-17-.52-5.85,4.82-10.46,15-19,15.55-13,23.33-19.58,33-20,13.88-.61,16.31,10,40,15,10.25,2.18,15.75,3.35,22,1,3.25-1.22,10.47-4.8,25-42,3.69-9.45,6.79-20,13-41,5.29-17.92,7.4-26.65,3-35-2.4-4.54-7.17-9.82-11-9-5.1,1.08-6.46,12.5-7,17-.77,6.4-1.73,14.42,2,21,6.28,11.08,22.51,12.13,36,13a95.28,95.28,0,0,0,53-12c10-5.68,18.56-10.57,23-21,5.47-12.85,3.28-30.88-6-36-4.84-2.67-12.21-2.17-14,1-1.66,2.93,2.12,7,4,11,5.78,12.41-4.73,28.24-27,69-10.9,20-14,26.47-11,31,2.83,4.25,9,3.67,34,5,27.07,1.44,31.49,2.74,33,6,2.84,6.11-5.87,16.27-12,21-2.86,2.2-10.63,7.45-21,7-11.53-.5-19.85-7.76-27-14-10-8.76-13.23-16-16-15-2.6.93-2.64,8.35-1,21a239.76,239.76,0,0,0,18,65c12.43,29,18.24,32,22,33,7,2,15.09-.59,26-4,14.4-4.51,19.4-9.19,22-7,3.77,3.18-.72,18.15-10,29-6.65,7.77-12.68,9.85-45,22-30.14,11.33-35.9,13.67-41,10-7.37-5.31-8-19.27-4-29,4.77-11.66,16-16.95,28-22,31.25-13.17,42.54-10.37,74-25C362.64,595.24,365,593,368.2,592a9.32,9.32,0,0,1,3.34-.57c3,.57,5,12.52,2,56.53V758\"
          />
        </svg>
          </div></div>
        
          </section>";
            break;
          case 'career':
            echo "<section class=\"introduction_career\" id=\"move_career\">
              <h1>career</h1>
              <div class=\"introduction_career_container\">
                <div class=\"year_container\">
                  <div class=\"introduction_career_year\">
                  <span>20</span>
                  <ul class=\"intro_year_second\">
                    <li>0</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                  </ul>
                  <ul class=\"intro_year_first\">
                    <li>0</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                  </ul>

                  </div>

              </div>
                
                <div class=\"introduction_career_contents\">
                  <div class=\"introduction_career_year_content year_2022\">
                    <ul>
                      <li>
                        <div class=\"date\">
                          <div class=\"dot\">

                          </div>
                          <div class=\"date_txt\">
                          <p>08.23</p>
                          </div>
                        </div>
                        <div class=\"content_txt\">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione porro!
                        </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>06.12</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>04.02</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>01.27</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione porro!
                    </div>
                      </li>

                    </ul>
                  </div>
                  <div class=\"introduction_career_year_content year_2021\">
                    <ul>
                      <li>
                        <div class=\"date\">
                          <div class=\"dot\">

                          </div>
                          <div class=\"date_txt\">
                          <p>11.12</p>
                          </div>
                        </div>
                        <div class=\"content_txt\">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione
                        </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>07.14</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione porro!
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>03.23</p>
                      </div>
                    </div>
                    
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione porro!
                    </div>
                      </li>

                    </ul>
                  </div>
                  <div class=\"introduction_career_year_content year_2020\">
                    <ul>
                      <li>
                        <div class=\"date\">
                          <div class=\"dot\">

                          </div>
                          <div class=\"date_txt\">
                          <p>12.25</p>
                          </div>
                        </div>
                        <div class=\"content_txt\">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur 
                        </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>11.26</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione porro
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>09.23</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum 
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>05.16</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem 
                    </div>
                      </li>
                    
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>03.01</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt
                    </div>
                      </li>
                      </li>
                    
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>02.04</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum 
                    </div>
                      </li>
                    </ul>
                  </div>
                  <div class=\"introduction_career_year_content year_2019\">
                    <ul>
                      <li>
                        <div class=\"date\">
                          <div class=\"dot\">

                          </div>
                          <div class=\"date_txt\">
                          <p>12.25</p>
                          </div>
                        </div>
                        <div class=\"content_txt\">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur 
                        </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>11.26</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem ratione porro
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>09.23</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum 
                    </div>
                      </li>
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>05.16</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt quidem 
                    </div>
                      </li>
                    
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>03.01</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum nesciunt
                    </div>
                      </li>
                      </li>
                    
                      <li>
                      <div class=\"date\">
                      <div class=\"dot\">

                      </div>
                      <div class=\"date_txt\">
                      <p>02.04</p>
                      </div>
                    </div>
                    <div class=\"content_txt\">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore quas reiciendis suscipit hic esse pariatur ipsum 
                    </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>";
            break;
          case 'news':
            echo "<section class=\"introduction_news\" id=\"move_news\">
              <h1 class=\"introduction_news_title\">소식<h1>
              
            </section>
            ";
            break;
          case 'location':
            echo "<section class=\"introduction_location\" id=\"move_location\">
            <script type=\"text/javascript\" src=\"//dapi.kakao.com/v2/maps/sdk.js?appkey=da3934c49567ea7c57f05bfc43253582\"></script>  
            <h1 class=\"introduction_location_title\">location</h1>
            <div class=\"introduction_location_kakao\">
              <div id=\"map\" style=\"width:800px;height:600px;\"></div>
            </div>
            
            <script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(33.450701, 126.570667),
			level: 3
		};

		var map = new kakao.maps.Map(container, options);
	</script>
            </section>";
            break;
          default:
            # code...
            break;
        }
      }else{
        echo "<section class=\"introduction_hello\" id=\"move_hello\">
        <h1>인사말</h1>
        <div class=\"introduction_hello_container\">
        <div class=\"introduction_hello_content\">
          <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima magni officia aut ab! Laboriosam aliquid ratione voluptas molestiae beatae cupiditate ad minus adipisci, ipsum libero perferendis facere sapiente suscipit quis iusto dignissimos molestias animi inventore non! Quo expedita ex similique quos libero autem voluptatem pariatur, molestiae sapiente deserunt consectetur enim.</h3>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo alias expedita eveniet, iure earum veritatis similique sed facilis quae ipsum repellendus velit.</h3>
          <p>Lorem, ipsum.</p></div>
          
          <div class=\"introduction_hello_svg\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 700 900\">
          <path
            class=\"path path1\"
            d=\"M220.54,84.4c.3-5.06.05-14.81-6-24-9.34-14.2-28.11-20.39-42-16-2.62.83-10.54,3.33-12,9-.85,3.33,1,5.9,8,21,3.21,6.91,4.15,9.24,3,11-1.45,2.2-5.33,2.16-13,2-9.19-.2-12-1.5-13,0-1.65,2.46,2.87,10.55,10,14,6.77,3.27,10.14-.41,17,3,6.6,3.28,5.37,7.62,11,10,6.33,2.68,9.45-2.15,23-4,12.22-1.67,18,1.12,21-3a9.2,9.2,0,0,0,0-10c-6-8.71-30.92-3-31,0,0,1.46,5.89,3.38,7,2,1.23-1.53-3.84-6.64-10-16-6-9.07-4.7-11.7-9-16-5-5-13.9-9.52-17-7-6.84,5.57,12.62,46.7,24,45,5.93-.89,5.57-12.8,16-18a23.86,23.86,0,0,1,21,0c6.59,3.45,9.12,9.71,12,16,6.32,13.79,14.24,31.06,26,43,13.33,13.54,31.08,19.69,32,20,12.21,4.1,18.42,2.75,24,9,8,8.92,7.37,25.21,2,28-3.86,2-7.49-4.38-13-3-9.92,2.49-7.3,25.55-18,30-4.76,2-9.64-.77-19-6-10.34-5.78-11.49-9.11-37-37-4.18-4.57-8.07-8.77-7-13,.87-3.44,4.91-5.29,13-9s12.11-5.49,16-4c3.74,1.43,7.47,5.44,7,9-.14,1.07-.8,3.17-16,11-4.47,2.3-4.43,2.13-8,4-11.69,6.12-12.23,8-15,8-7.56-.09-13.23-14.45-17-24-7-17.8-3.64-21.88-11-36-4.76-9.14-8.16-11.24-7-15,3.06-9.89,32-12.71,36-5,2,3.93-3.88,7.71-7,19-2.61,9.45-1.27,17,1,29,2.24,11.83,5,26.44,15,43,8.36,13.84,18.91,22.23,40,39,10,7.95,14,10.07,18,9,10.06-2.67,16.63-24.22,19-32,1.65-5.4,2.86-11,5-11s3.81,5.94,5,9c5.39,13.84,23.12,19.58,43,26,23.32,7.53,42.14,8,55,7,20.7-1.6,26.43-7,29-11,2-3.1.61-4.81,3-13s4.8-11.1,7-17c3.77-10.11,5.64-21.78,3-23-1.45-.67-3,2.39-8,5-6.28,3.27-14.86,4.19-16,2-2.37-4.57,25.89-25.71,30-22,1.72,1.55-2.17,6.19,0,9,3.83,4.94,17.93-6.78,29-1,6.7,3.5,7.27,10.79,16,13,2.23.56,4.76,1.2,7,0,6.77-3.64,6-21.58-1-34-2.17-3.84-6.95-12.27-17-15a25.78,25.78,0,0,0-18,2c-10.71,5.44-14.84,18.41-14,19,.51.35,4-2.94,6-7,2.33-4.78,1.69-8.9,1-16-1.64-16.79-.15-15.11-2-28a118.28,118.28,0,0,0-3-16c-2.32-8.49-4.41-16.14-10-23-5.37-6.6-11.35-9.26-22-14-7.49-3.34-16.58-7.39-29-8-7.94-.39-14.29,1.07-27,4-16.5,3.8-24.75,5.7-31,10-10.83,7.45-14.68,18.6-20,33a116.57,116.57,0,0,0-7,34c-1,17.41-1.57,28.57,5,39,8.6,13.64,24.23,17.66,45,23,10.32,2.65,18.33,4.62,29,3,6-.92,21.38-3,30-15,3.31-4.63,4.21-9.08,6-18,.75-3.75,3.53-18.67,0-39-1.49-8.6-2.24-12.9-5-18-6.69-12.36-18.13-17.72-23-20-14.16-6.64-26.93-5.63-35-5-8.77.69-21.64,1.7-33,11a46.55,46.55,0,0,0-9,10c-14.28,21.32-3.86,43.72-1,92a23.81,23.81,0,0,0,2,9c4.1,9,14.1,14.21,35,19,32.3,7.41,48.45,11.11,65,4,7.35-3.16,23.46-10.08,33-26,3.92-6.55,5.87-13.18,12-15,5.3-1.58,10.67,1.34,20,8,23.86,17,35.78,25.51,36,36,.21,10.31-7.25,19.38-14,24-7.07,4.84-18,8-20,5-2.91-4.32,10.42-24.94,25-24,10.32.66,16.48,11.82,21,20,7.82,14.15,15.94,41.08,4,53-9.8,9.78-23.29-.37-35,11-10.19,9.9-9.15,26.53-7,34,.51,1.76,1.65,5.57,4,6,3.31.6,7.26-5.81,8-7,3.14-5.09,2.71-8.27,5-9s5.52,1.3,7,4c2.87,5.25-3.09,9.68-2,17,1,6.86,7.91,14,15,14,8.18.05,13.47-9.3,15-12,7.14-12.61,3-26.71,0-37-2.37-8.11-3.56-12.16-7-14-9.09-4.86-19.48,10-31,6-3.35-1.17-4.73-3.21-16-21-5.42-8.56-5.55-14.74-12-19-4.33-2.86-5.14-1.09-10-4-8-4.78-7.18-10.4-16-18-2.7-2.32-9-7.77-12-6-3.2,1.89-3.2,12.44,3,17,2.82,2.07,5.25.74,13,1,8.13.27,13.38.46,17,3,6.14,4.31,6,14.31,6,19-.66,73.66-1,110.48,0,114a11.12,11.12,0,0,1,0,7c-1.55,4.09-5.89,6.18-11,8a90.06,90.06,0,0,1-34,5c-10.55-.51-15.83-.76-18-4-3.45-5.15,1.78-13.06,9-28,3.87-8,12.28-25.42,16-40,4.41-17.3,2.4-31.31,0-48-4.12-28.66-14.42-50.19-15-50s6.8,15.2,10,38c5,35.74-3.82,63.4-8,76-5.05,15.23-13.54,33.91-17,33-1.91-.5-.24-6.42-2-14-4.63-19.94-29-34.07-50-37-9.75-1.36-23.44-1-24,2-.69,3.67,18.08,15.47,36,10,16-4.89,22.19-20.79,23-23a68.19,68.19,0,0,0-14-55c-16-19.69-29.11-11.83-56-34-7.18-5.92-12.41-11.56-18-10-3.8,1.06-6.71,5.16-11,20-5.16,17.86-4.32,23.29-8,39-6.57,28.1-14.78,34.52-19,37-2.21,1.3-8,4.25-9,3-1.31-1.65,4.87-11.48,12-12,5.68-.41,9.47,5.27,15,11,12.43,12.88,26.26,18.35,38,23,17.75,7,19.09.73,38,7,10.23,3.39,31,10.28,40,29,6.86,14.28,6.58,34.87-3,41-2.86,1.83-6.51,2.35-26-3-29.87-8.2-33-12.62-44-12-16.15.91-33.65,11.73-34,22-.38,11.14,19.66,14.76,19,28-.25,5.1-3.67,13.42-8,24l-.71,1.7c-5.15,12.4-13.66,55.81,8.71,81.3,2.21,2.52,6.24,7,9,6,3.68-1.36,2.83-11.71,1-32-3.89-43.13-4.89-53.57,2-62,1.78-2.18,1.89-1.54,17-10,34.69-19.43,39.88-26,42-29,3-4.21,10.15-14.23,9-27-1.27-14.08-11.87-23.17-21-31-6.93-5.94-16.81-14.41-31-16-10-1.13-13.37,2.17-24,0-7.17-1.46-11.39-4.14-21-10-34.25-20.9-39.2-22.71-45-23-9.32-.47-16.33,3.2-25,8-43.37,24-65,36-74,46-30.33,33.81-33.72,71.6-36,97-1.43,16-.21,27.33,7,33,10.13,8,26.31.13,30,7,2.65,4.93-3.27,13.51-8,18-7.06,6.71-15.81,7.89-33,10-16.08,2-24.32,2.89-34,0-3.39-1-22.08-6.6-23-17-.52-5.85,4.82-10.46,15-19,15.55-13,23.33-19.58,33-20,13.88-.61,16.31,10,40,15,10.25,2.18,15.75,3.35,22,1,3.25-1.22,10.47-4.8,25-42,3.69-9.45,6.79-20,13-41,5.29-17.92,7.4-26.65,3-35-2.4-4.54-7.17-9.82-11-9-5.1,1.08-6.46,12.5-7,17-.77,6.4-1.73,14.42,2,21,6.28,11.08,22.51,12.13,36,13a95.28,95.28,0,0,0,53-12c10-5.68,18.56-10.57,23-21,5.47-12.85,3.28-30.88-6-36-4.84-2.67-12.21-2.17-14,1-1.66,2.93,2.12,7,4,11,5.78,12.41-4.73,28.24-27,69-10.9,20-14,26.47-11,31,2.83,4.25,9,3.67,34,5,27.07,1.44,31.49,2.74,33,6,2.84,6.11-5.87,16.27-12,21-2.86,2.2-10.63,7.45-21,7-11.53-.5-19.85-7.76-27-14-10-8.76-13.23-16-16-15-2.6.93-2.64,8.35-1,21a239.76,239.76,0,0,0,18,65c12.43,29,18.24,32,22,33,7,2,15.09-.59,26-4,14.4-4.51,19.4-9.19,22-7,3.77,3.18-.72,18.15-10,29-6.65,7.77-12.68,9.85-45,22-30.14,11.33-35.9,13.67-41,10-7.37-5.31-8-19.27-4-29,4.77-11.66,16-16.95,28-22,31.25-13.17,42.54-10.37,74-25C362.64,595.24,365,593,368.2,592a9.32,9.32,0,0,1,3.34-.57c3,.57,5,12.52,2,56.53V758\"
          />
        </svg>
          </div></div>
        
          </section>";
      }
      
    ?>
    
    <section class="introduction_career" id="move_career">

    </section>
    
  </div>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
  <script src="./src/js/introduction.js"></script>
</body>
</html>