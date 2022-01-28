<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DMIS | Dashboard</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/0a3cb2abd3.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>DMIS</h2>
        <ul>
            <li><a href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li><a href="#"><i class="fas fa-tags" ></i>Category</a></li>
            <li><a href="#"><i class="fas fa-boxes"></i>Product</a></li>
            <li><a href="#"><i class="fas fa-chart-pie"></i>Report</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Scan</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i></i>Logout</a></li>
        </ul>
    </div>
    <div id="main-content" class="main_content">
        <div class="header">This is a Header</div>
        <div class="info">
            <?php include "sidebar-nav/dashboard.html" ?>
        </div>
    </div>
</div>
</body>
</html>