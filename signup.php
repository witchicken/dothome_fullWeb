<?php session_start(); ?>

<!DOCTYPE HTML>  
<html lang = "en">
<head>

<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
    <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
    <link rel="stylesheet" href="./src/css/Signup.css" type="text/css" />
    <!--fontawesome!-->
    <script src="https://kit.fontawesome.com/b4823e771e.js" crossorigin="anonymous"></script>
    <style>
.error {color: red;}
</style>
<script>
  function chid(){
    let id=document.getElementById("chk_id1").value;
    //if(id==""){alert("이메일을 입력해 주세요");exit;} 
    //ifrm1.location.href=`join_chk.php?userid=${id}`;
    if(id)
	{
		url = `join_chk.php?userid=${id}`
		window.open(url,"chkemail","width=400,height=200");
	} else {
		alert("이메일을 입력하세요.");
	}
  }
  function decide(){
    document.getElementById("decide").innerHTML= "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>";
    document.getElementById("chk_id2").value = document.getElementById("chk_id1").value;
    document.getElementById("chk_id1").disabled = true;
    document.getElementById("join_button").disabled = false;
    document.getElementById("check_button").value = "다른 ID로 변경";
    document.getElementById("check_button").setAttribute("onclick","change()");
  }
  function change(){
    document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>";
    document.getElementById("chk_id1").disabled = false;
    document.getElementById("chk_id1").value = "";
    document.getElementById("join_button").disabled = true;
    document.getElementById("check_button").value = "중복검사";
    document.getElementById("check_button").setAttribute("onclick", "chid()")
  }
</script>
</head>
<body>  
<?php include_once 'header.inc' ?>
<section class="signup">
<h2>회원가입</h2>
<p><span class="error">* 필수 체크사항</span></p>
<div class="signup_container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <div class="signup_innerbox">
  이메일: <input type="email" name="email" maxlength=25 id="chk_id1" required>
  <input type=button value="중복검사" id = "check_button" onclick=chid()>
  <input type=hidden id="chk_id2" name="chk_id2">
  <span class="error">*<?php 
    if(!empty($emailerror)){
      echo $emailerror;
    }
  ?></span>
  <p><span id="decide" style='color:red;'>ID 중복 여부를 확인해주세요.</span>
  <br><br>
  비밀번호: <input type="password" name="password" required>
  <span class="error">* <?php 
    if(!empty($pwderror)){
      echo $pwderror;
    }
  ?></span>
  <br><br> 
  닉네임: <input type="text" name="nickname" required>
  <span class="error">* <?php 
    
  ?></span>
  <?php 
    
  ?>
  <input type="submit" name="submit" value="회원가입" id="join_button" disabled=true class="signup_submit"/> 
  </div>
  
</form>
<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$nickname = $email = $password = "";
$validated = False;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nickname"])) {
    $nameErr = "닉네임을 입력하세요.";
  } else {
    $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nickname)) {
      $nameErr = "문자만 입력가능하며 공백은 허용하지 않습니다.";
    }
  }
  
  if (empty($_POST["chk_id2"])) {
    $emailErr = "이메일을 입력하세요.";
  } else {
    $email = test_input($_POST["chk_id2"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "이메일 형식이 올바르지 않습니다.";
    }
  }
  if(empty($nameErr and $emailErr)){
    $validated = TRUE;
  }
}

//connect db
include("./connectMysql.php");
$conn = new mysqli($servername,$username,$password,"witchicken");
if($validated == TRUE){
  $user_nickname=$_POST['nickname'];
  $user_email=$_POST['chk_id2'];
  $org_user_password = $_POST['password'];
  $user_password = password_hash($org_user_password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO user (email, password, nickname)
VALUES ('$user_email', '$user_password','$user_nickname')";
  if($conn->query($sql) === TRUE){
    $conn->close();

    echo "<script>
    alert('회원가입 성공');
    location.href='/';</script>";
  }  else{
    $conn->close();

    echo "<script>
    alert('에러가 발생했습니다.');
    location.href='/';</script>";
  }
  $conn->close();
}
?>
</div>

</section>

<?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
</body>
</html>