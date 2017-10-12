<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>登录系统的后台执行过程</title> 
</head> 
<body> 
  <?php 
    session_start();
    $userna=$_REQUEST["username"];
    $pass=$_REQUEST["Password"]; 
  
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    
    $sql="select * from user_register where user_name ='$userna'";
    $result=mysqli_query($db,$sql);
   
    while ($row=mysqli_fetch_array($result)) { 
      $dbusername=$row["user_name"]; 
      $dbpassword=$row["user_password"]; 
    } 
    if (is_null($dbusername)) {
  ?> 
  <script type="text/javascript"> 
    alert("Username does not exist"); 
   window.location.href="login.html"; 
  </script> 
  <?php 
    } 
    else { 
      if ($dbpassword!=$pass){
  ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="login.html"; 
  </script> 
  <?php 
      } 
      else { 
        $_SESSION["user_name"]=$userna; 
        $_SESSION["code"]=mt_rand(0, 100000);
        require('../loginJSON.php');
  ?> 
  <script type="text/javascript"> 
    window.location.href="../welcome.php"; 
  </script> 
  <?php 
      } 
    } 
  mysqli_close($db);
  ?> 
</body> 
</html> 