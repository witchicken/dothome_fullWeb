
    <?php
  //connect mysql
  include("./connectMysql.php");
  $conn = new mysqli($servername,$username,$password,"witchicken");
  $inputEmail = $_POST["email"];
  $inputPassword = $_POST["password"];
  
  
  $sql = "SELECT email,password,nickname FROM user WHERE email='$inputEmail'";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      if(password_verify($inputPassword, $row['password'])){
        session_start();
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_nickname']= $row['nickname'];
        echo "<script>window.location.replace('index.php');</script>";
      }else{
        echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.');";
        echo "window.location.replace('login.php');</script>";
      }
    }
  }
  $conn->close();

  
?>
