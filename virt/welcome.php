<?php

session_start();
$id = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Welcome</title>
    <style type ="text/css">
    body{
      background-image: url(bg1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
    }
    header{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      background: #24252a
    }
    li,a,button{
      font-weight: 500;
      font-size: 16px;
      color: #edf0f1;
      text-decoration: none;
    }
    header{
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 10%;
    }
    .nav_links{
      list-style: none;
    }
    .nav_links li{
      display: inline-block;
      padding: 0px 20px;
    }
    .nav_links li a{
      transition: all 0.3s ease 0s;
    }
    .nav_links li a:hover{
      color: #0088a9;
    }
    button{
      padding: 9px 25px ;
      background-color: rgba(0, 136, 169, 1);
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease 0s;
    }
    button:hover{
      background-color: rgba(0, 136, 169, 0.5);
    }
    h2{
      color: #fff000;
      margin-right: auto;
    }
    h3{
      color: #fff;
      margin-right: auto;
    }
    .content{
      width: 100%;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      text-align: center;
      color: #fff;
    }
    .content h1{
      font-size: 70px;
      margin-top: 80px;
    }
    .content p{
      margin: 20px auto;
      font-size: 20px;
      font-weight: 100;
      line-height: 25px;
    }
    .footer-head
{
    font-weight: 600;
    color: white;
}

footer hr
{
    height: 0.125em;
    background-color: #463F57;
}

footer p,li,li a
{
    color: #999;
}


li a:hover{
    text-decoration: none;
    color: #463F57;
}

.social-icons{
    text-align: center;
}

.social-icons li{
    display: inline-block;
    margin-bottom: 4px;
}
#delete{
  padding: 9px 25px ;
      background-color:#bd0f0f;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease 0s;
}
#delete:hover{
      background-color:#ff0000;
    }
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 25%; /* Could be more or less, depending on screen size */
}
.modal-open{
  display: flex;

}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}
.cancelbtn {
  background-color: #ccc;
  color: black;
  width: 175px;
}

.deletebtn {
  background-color: #f44336;
  max-width: 175px;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
    </style>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    
</head>




<body>
  <header>
    <h2>VirtuaBud</h2>
    <nav>
    <ul class ="nav_links">
        <li><a href="face.php">Check Emotion</a></li>
        <li><a href="relaxing end.php">Relaxing End</a></li>
      </ul>
    </nav>
    <a href="logout.php"><button>Logout</button></a>
    <button name ="delete" id="delete" onclick="document.getElementById('id01').style.display='block'">Delete</button></a>
    <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="welcome.php" method="POST">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" onclick="document.getElementById('id01').style.display='none'" class="deletebtn" name ="deletebtn" value="delete">Delete</button>
      </div>
    </div>
  </form>
</div>
  </header>
  <section>
  <div class="content" align = "center">
    <h1>Welcome,
    <?php echo  $_SESSION['username']; ?>
    </h1>
    <p>We are here to create awareness for mental health issues </p>
    <p></p>

  </div>
  <?php

include('config.php');
$user = $_SESSION['username'];

if(isset($_POST['deletebtn']))
{
  
  $sql = "DELETE FROM `users` WHERE `username` ='$user'";
  

  $query_run = mysqli_query($conn,$sql);

  if($query_run)
  {
    echo '<script> alert("Account Deleted"); </script>';
    echo'<script>window.location = "logout.php";</script>';
    /*header("Location: logout.php");*/
  }
  else {
      echo("Error description: " . mysqli_error($conn));
      
  }
}

?>

  <div>
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="VirtuaBud"
  agent-id="76ce4a0c-1826-496c-b603-5a74f24852da"
  chat-icon=""
  language-code="en"
></df-messenger>
</div>
</section>
<footer>

</footer>
</body>
</html>
