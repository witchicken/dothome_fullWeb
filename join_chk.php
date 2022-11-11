<?php
  //connect mysql
  include("./connectMysql.php");
  $conn = new mysqli($servername,$username,$password,"witchicken");
  $id = $_GET['userid'];
  $sql="select count(*) from user where email='$id'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  if($row['count(*)'] == 1){
    echo "<span style='color:blue;'>$id</span> 는 중복된 아이디입니다.";
  ?>
  <p><input type=button value="다른 이메일 사용" onclick="opener.parent.change(); window.close()"></p>
    <?php
  }else{
    echo "<span style='color:blue;'>$id</span> 는 사용 가능한 아이디입니다.";
    ?>
    <p><input type=button value="이메일 사용" onclick="opener.parent.decide(); window.close();"></p>
    <?php 
  }
  $conn->close();
?>
<script>
  
</script>