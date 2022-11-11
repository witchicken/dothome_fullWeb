<?php session_start(); ?>
<?php 
    $id = $_GET['id'];
    include("./connectMysql.php");
    $conn = new mysqli($servername,$username,$password,"witchicken");
    if($conn){ }
    else{ die(); }
    $result =  mysqli_fetch_array($conn->query("select email from BOARD where id = $id"));
    $db_board_email = $result['email'];

    if(isset($db_board_email)&&isset($_SESSION['user_email'])){
      if($db_board_email === $_SESSION['user_email']){
        mysqli_query($conn,"DELETE FROM BOARD WHERE id = '$id'");
        echo "<script>
        alert('삭제하였습니다.');
        window.location.href='/board.php';
        </script>";
        $conn -> close();
      }else{
        $conn -> close();
        echo "<script>
        alert('삭제 권한이 없습니다.');
        window.location.href='/board.php';
        </script>";
      }
    }else{
      $conn -> close();
      echo "<script>
        alert('삭제 권한이 없습니다.');
        window.location.href='/board.php';
        </script>";
    }
    

    
?>