<?php
session_start();

/* LOGOUT FUNCTION */
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Impact of Social Media On Brand Awareness</title>

<style>
body{margin:0;font-family:'Segoe UI',sans-serif;}

/* LOGIN DESIGN */
.login-container{display:flex;height:100vh;}
.left-panel{
 flex:1;
 background:linear-gradient(135deg,#6a11cb,#2575fc);
 color:white;
 display:flex;
 flex-direction:column;
 justify-content:center;
 align-items:center;
 text-align:center;
 padding:40px;
}
.right-panel{
 flex:1;
 display:flex;
 justify-content:center;
 align-items:center;
 background:#f4f6f9;
}
.login-box{
 background:white;
 padding:40px;
 width:350px;
 border-radius:12px;
 box-shadow:0 10px 30px rgba(0,0,0,0.1);
}
.login-box input{
 width:100%;
 padding:12px;
 margin:10px 0;
 border-radius:8px;
 border:1px solid #ccc;
}
.login-box button{
 width:100%;
 padding:12px;
 background:linear-gradient(135deg,#6a11cb,#2575fc);
 border:none;
 color:white;
 border-radius:8px;
 cursor:pointer;
 font-weight:bold;
}

/* HOME DESIGN */
.topbar{
 background:#131921;
 color:white;
 display:flex;
 justify-content:space-between;
 align-items:center;
 padding:12px 20px;
}
.menu{
 background:#232f3e;
 padding:10px 20px;
}
.menu a{
 color:white;
 margin-right:20px;
 text-decoration:none;
}
.hero{
 height:250px;
 background:linear-gradient(135deg,#2575fc,#6a11cb);
 color:white;
 display:flex;
 justify-content:center;
 align-items:center;
 font-size:28px;
 font-weight:bold;
}
.content{
 padding:40px;
 text-align:center;
}
.logout{
 color:white;
 margin-left:10px;
 text-decoration:none;
}
</style>

</head>
<body>

<?php if(!isset($_SESSION['user'])){ ?>

<!-- LOGIN PAGE -->

<div class="login-container">

<div class="left-panel">
<h1>Impact Of Social Media On Brand Awareness</h1>
<p>Brand Awareness</p>
</div>

<div class="right-panel">
<div class="login-box">
<h2>Login to Your Account</h2>

<form action="backend/login.php" method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>

</div>
</div>

</div>

<?php } else { ?>

<!-- HOME PAGE -->

<div class="topbar">
<div><b>Brand Awareness System</b></div>
<div>
Hello, <?php echo $_SESSION['user']; ?> 😎
<a class="logout" href="?logout=true">Logout</a>
</div>
</div>

<div class="menu">
<a href="#">Home</a>
<a href="#">Brand</a>
<a href="#">About Us</a>
<a href="#">Contact Us</a>
</div>

<div class="hero">
Welcome to Brand Awareness Dashboard
</div>

<div class="content">
<h2>Social Media Marketing Platform</h2>
<p>This system analyzes and tracks brand awareness using social media engagement metrics.</p>
</div>

<?php } ?>

</body>
</html>