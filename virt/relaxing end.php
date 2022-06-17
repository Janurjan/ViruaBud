<html>
<head>
    <title>Relaxing end</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <style type ="text/css">
    body{
      background-image: url(foto.jfif);
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
    #canvas{
  position: relative;
  top: 10px;
  left: 0px;
  z-index:1;
}

#video{
  position: absolute;
  top: 10px;
  left: 10px;
  z-index:0;
  border: 3px #fff solid;
	border-radius: 10px;
}
  
</style>
</head>
<body>
<header>
    <h2>VirtuaBud</h2>
    <nav>
    <ul class ="nav_links">
        <li><a href="welcome.php">Home</a></li>
        <li><a href="face.php">Check Emotion</a></li>
      </ul>
    </nav>
    <a href="logout.php"><button>Logout</button></a>
  </header>
<div class="video" align ="center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/P2hJOsMXDPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="video1" align ="center">
<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/BmFl9Kx79iI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</body>

</html>