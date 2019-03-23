<?php session_start();?>
<!Doctype html>
<html lang="en">
<head>
<title>Admin Area</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="assets/css/dashboard.css">
<link rel="shortcut icon" href="images/index.png">
<link rel="stylesheet" href="newbootstrap/bootstrap/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3.css" type="text/css">
<meta charset="utf-8"/>
<script type="text/javascript" src="plugins/jquery-2.1.3.js"></script>
<script src="plugins/jquery_cycle2.js"></script>
<script src=".js">
</script>
</head>
<body>
<header id="the_header">
<h1 class="title">Tpw</h1>
</header>
<div id="user_protocols">

<table id="welcome_table" >
<tr>
<td class='welc'> <?php echo " WELCOME, Admin";?></td><td>

</td>
</tr>
</table>
</div>
<div id="workarea">
<div id="user_navigation">
<ul id="the_dashboard">
<li><a href="dashboard.php">Home</a></li>
<li  class="active"><a href="manage_audio.php">Audio</a></li>
<li><a href="manage_video.php">Video</a></li>
<li><a href="messages.php">Messages</a></li>
<li><a href="manage_news.php">News</a></li>
<li><a href="manage_comments.php">Manage Comments</a></li>
<li><a href="security.php">Manage Passowrd</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="context_display">
	<h3 class='module'>Manage Video</h3>
<div class='well2'>
	<ul class="menu_throw">
	<li>Videos <span class='lebel'>100</span></li>
	<li><a href="audio_new.php">New Video</a></li>
	<li><input type="text" placeholder="Video Search" name="audio"></li>
	<li><button class="search_button">Search</button></li>
</ul>
</div>
</div>
</div>
<footer id="footer">
PTW &copy; 2018. All Rights Reserved. <br/><br/>Designed and powered by Knfb Reflections
</footer>
</body>
</html>