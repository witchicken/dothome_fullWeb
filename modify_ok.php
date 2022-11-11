<?php session_start(); ?>

<?php 
  function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $write_title_text = validate_input($_POST['write_title_text']);
    $write_content_text =validate_input($_POST['write_content_text']);
    $email = $_SESSION['user_email'];
    $nickname = $_SESSION['user_nickname'];
    $date = date("Y-m-d", time());
    include("./connectMysql.php");
    $conn = new mysqli($servername,$username,$password,"witchicken");
    $sql = "UPDATE BOARD SET title = '$write_title_text' , content = '$write_content_text' WHERE id= '$id'";
    if($conn->query($sql) === TRUE){
      echo "<script>
    alert('수정 완료되었습니다.');
    location.href='/board.php';</script>";
    }  else{
      echo "<script>
    alert('수정에 실패했습니다.');
    history.back();</script>";
    }
    $conn->close();
  }
?>