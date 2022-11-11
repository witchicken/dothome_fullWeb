<?php session_start(); ?>

<?php 
  function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $write_title_text = validate_input($_POST['write_title_text']);
    $write_content_text =validate_input($_POST['write_content_text']);
    $email = $_SESSION['user_email'];
    $nickname = $_SESSION['user_nickname'];
    $date = date("Y-m-d", time());
    include("./connectMysql.php");
    $conn = new mysqli($servername,$username,$password,"witchicken");
    $sql = "INSERT INTO BOARD (email,nickname,title,content,date)values('$email','$nickname','$write_title_text','$write_content_text','$date');";
    if($conn->query($sql) === TRUE){
      echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/board.php';</script>";
    }  else{
      echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
    }
    $conn->close();
  }
?>