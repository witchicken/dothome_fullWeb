<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>enigsPage</title>
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Read.css" type="text/css" />

</head>
<body>
<?php 
        include("./connectMysql.php");
        $conn = new mysqli($servername,$username,$password,"witchicken");
        $id = $_GET['id'];
        $board = mysqli_fetch_array(mysqli_query($conn,"SELECT * from BOARD where id = $id"));
        $hit = mysqli_fetch_array($conn->query("select hit FROM BOARD where id = $id"));
        $hit = $board['hit'] + 1;
        mysqli_query($conn,"UPDATE BOARD SET hit = $hit where id = $id");    
        $conn -> close();
        
      ?>
<?php include_once 'header.inc' ?>

  <section class="read">
    <div class="read_container">
      <div class="read_background">
        <p>Board</p>
      </div>
    </div>
    <div class="read_content">
      
      <div class="read_main">
        <h2><?php echo $board['title'] ?></h2>
        <div class="read_main_date_hit">
          <span>작성일 : <?php echo $board['date']?></span>
          <span>조회수 : <?php echo $board['hit'] + 1?></span>
          <span>추천수 : <?php echo $board['thumbup']?></span>
          <p>글쓴이 : <?php echo $board['nickname']?></p>
        </div>
        <div class="read_main_des">
          <?php echo $board['content'] ?>
        </div>
        <div class="read_btn_thumbup">
          <a href="/thumbup.php?id=<?php echo $_GET['id']?>">
            <p>[추천]</p>
          </a>
          
        </div>
        <div class="read_main_list">
          <ul>
            <li><a href="/board.php">
              목록
            </a></li>
            <li><a href="/modify.php?id=<?php echo $_GET['id']?>">
              수정
            </a></li>
            <li><a href="/delete.php?id=<?php echo $_GET['id']?>">
              삭제
            </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
</body>
</html>