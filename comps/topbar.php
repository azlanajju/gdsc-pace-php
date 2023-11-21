    <link rel="stylesheet" href="./css/responsive.css">

<div class="topBar">
    <div class="gdscLogo">
        <img src="./images/gdscLogo.png" alt="">
        <p>
            Google Developer Student Clubs
        </p>
    </div>
    <p>
        |
    </p>
    <div class="paceLogo">
        <img src="./images/PaceLogo.png" alt="">
    </div>
    <div class="logoName">
        <img src="./images/PACollegeName.png" alt="">
    </div>
</div>

<?php
$navNum = isset($_GET['nav']) ? intval($_GET['nav']) : 0;
?>
<div onclick="openNavBar()" id="menuBars">
    <i class="fa fa-bars"></i>

</div>

<div id="navBar" class="navBar">
        <div onclick="closeNavBar()" id="cancelBtn"><i id="barsBtn" class="fa fa-close"></i></div>

    <a <?php if ($navNum === 0) echo ' class="navActive"'; else {echo ' href="./index.php"';} ?>>Home</a>
    <a <?php if ($navNum === 2) echo ' class="navActive" echo href="./events.php?nav=2"';  else {echo ' href="./events.php?nav=2"';} ?>>Events</a>
    <a <?php if ($navNum === 3) echo ' class="navActive" echo href="./blogs.php?nav=3"';  else {echo ' href="./blogs.php?nav=3"';} ?>>Blogs</a>
    <a <?php if ($navNum === 4) echo ' class="navActive" echo href="./about.php?nav=4"';  else {echo ' href="./about.php?nav=4"';} ?>>About us</a>
    <a <?php if ($navNum === 5) echo ' class="navActive" echo href="./contact.php?nav=5"';  else {echo ' href="./contact.php?nav=5"';} ?>>Contact us</a>
</div>



