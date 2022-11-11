<?php session_start(); ?>

<?php 
    if(isset($_SESSION['user_nickname'])&&isset($_SESSION['user_email'])){
    }else{
      echo "<script>
      alert('로그인 해주세요');
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
        <h1>글쓰기</a></h1>
            <div class="write_area">
                <form action=<?php echo htmlspecialchars('write_ok.php');?> method="post">
                    <div class="write_title">
                        <textarea name="write_title_text"class="write_title_text" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="write_content">
                        <textarea name="write_content_text" class="write_content_text" placeholder="내용" 
                        cols="5" rows="10"
                        required></textarea>
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