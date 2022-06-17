<html>
<head>
    <title>Emotion Dectector</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.min.js" integrity="sha512-N4kV7GkNv7QR7RX9YF/olywyIgIwNvfEe2nZtfyj73HdjCUkAfOBDbcuJ/cTaN04JKRnw1YG1wnUyNKMsNgg3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/addons/p5.sound.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/ml5js/Intro-ML-Arts-IMA@ml5-build-10-7-19/ml5_build/ml5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="facestyle.css">
    <style type ="text/css">
    body{
      background-image: url(fac.jpg);
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
    </style>
</head>
<body>
<header>
    <h2>VirtuaBud</h2>
    <nav>
    <ul class ="nav_links">
        <li><a href="welcome.php">Home</a></li>
        <li><a href="relaxing end.php">Relaxing End</a></li>
      </ul>
    </nav>
    <a href="logout.php"><button>Logout</button></a>
  </header>
    <div class="videocontent" align = "center">
    <script src="sketch.js"></script>
    </div>

</body>

</html>