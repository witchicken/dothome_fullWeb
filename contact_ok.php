<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>enig'sPage</title>
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Contact_ok.css" type="text/css" />
</head>
<body>
<?php include_once 'header.inc' ?>
<section class="contact_ok">
<?php 
  function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $form_name_input = validate_input($_POST['form_name_input']);
      $form_email_input = validate_input($_POST['form_email_input']);
      $form_msg_input = validate_input($_POST['form_msg_input']);
      include("./connectMysql.php");
      $conn = new mysqli($servername,$username,$password,"witchicken");
      
      $sql = "INSERT INTO CONTACT (name,email,msg) VALUES ('$form_name_input','$form_email_input','$form_msg_input');";
      if($conn->query($sql) === TRUE){
        echo "성공";
      }  else{
        echo "실패";
      }
      $conn->close();
    }
    
    

?>
<a href="/">홈으로 가기</a>
</section>

  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
</body>
</html>




