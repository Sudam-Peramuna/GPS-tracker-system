
<?php include("session.php");?>
<!DOCTYPE html>
<!--
$username="";
$email="";
$mobile="";
$password="";
$cpassword="";
$errors = array(); 

$connection = mysqli_connect('localhost:3306','root','','gps1'); // Establishing Connection with Server

$db = mysql_select_db("gps1", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ 
// Fetching variables of the form which travels in URL
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Phone Number is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $cpassword) {
  array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM gps_table WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO person_details (username, email, mobile,password,cpassword) 
          VALUES('$username', '$email','$mobile','$password', '$cpassword')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: login.php');
  }
}
 // Closing Connection with Server
?> -->

<html>
   
   <head>
      <title>Sign In Page</title>
      
      <style type = "text/css">
         body{
    margin: 0;
    padding: 0;
    background: url(background1.jpg);
    background-size:fill;
    background-position: center;
    font-family: sans-serif;

   
}

.signin{
    width: 600px;
    height: 700px;
    background-color: #000;
    color: #fff;
    top: 403px;
    left: 75%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    filter: alpha(opacity=50);
    
    
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}


h1{
    margin: 0;
    padding: 0 0 20px;
    top: 5px;
    text-align: center;
    font-size: 22px;
}

.signin p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.signin input{
    width: 100%;
    margin-bottom: 20px;
}

.signin input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.signin input[type="submit"]
{
    border: none;
    outline: none;
    height: 50px;
    bottom: 30px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.signin input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.signin a{
    text-decoration: none;
    font-size: 15px;
    line-height: 25px;
    color: darkgrey;
}

.signin a:hover
{
    color: #ffc107;
}




      </style>
      
   </head>
   
   <body>
    <div class="signin">
    
        
        <form action="session.php" method="post">
         <img src="avatar.png" class="avatar">
          <h1>Sign In Here</h1>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" value ="<?php echo $username; ?>">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" value ="<?php echo $email; ?>">
            <p>Phone Number</p>
            <input type="text" name="mobile" placeholder="+94" value ="<?php echo $mobile; ?>">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>Comfirm Password</p>
            <input type="password" name="cpassword" placeholder="Comfirm Password">
            <input type="submit" name="reg_user" value="Register">

            <p>Already a member?</br></p>
            <p class="singin"><a href="login.php">Sign in</a></p>
          
        </form>
        
    </div>

</body>
</html>