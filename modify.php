<?php session_start(); ?>

<?php 
  
    $id = $_GET['id'];
    include("./connectMysql.php");
    $conn = new mysqli($servername,$username,$password,"witchicken");
    if($conn){ }
    else{ die(); }
    $result =  mysqli_fetch_array($conn->query("select * from BOARD where id = $id"));
    $db_board_email = $result['email'];
    
    $conn -> close();
    if($db_board_email === $_SESSION['user_email']){
    }else{
      echo "<script>
      alert('수정 권한이 없습니다.');
      window.location.href='/';
      </script>";
    }
    
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
  <link rel="stylesheet" href="./src/css/Write.css" type="text/css" />
</head>
<body>
<?php include_once 'header.inc' ?>
  
  <section class="write">
    <div class="write_container">
      <div class="write_background">
        <p>Board</p>
      </div>
    </div>
    <div class="write_content">
      <div class="write_content_main">
        <h1>글 수정</a></h1>
            <div class="write_area">
                <form action=<?php echo htmlspecialchars('modify_ok.php');?> method="post">
                
                    <input name="id" value="<?php echo $id?>" style="display:none"/>
                    <div class="write_title">
                        <textarea name="write_title_text"class="write_title_text" rows="1" cols="55" placeholder="제목" maxlength="100"
                        
                        required><?php echo $result['title']?></textarea>
                    </div>
                    <div class="write_content">
                        <textarea name="write_content_text" class="write_content_text" placeholder="내용"
                        cols="5" rows="10"
                        required><?php echo $result['content'];?></textarea>
                    </div>
                    
                    <div class="write_btn_writeok">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>

</body>
</html>