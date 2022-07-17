<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Hotel Management</title>
</head>
<body>

    <!--Header section-->
    <header>
        <div class="logo"><span style="color: white";>Welcome</span> <?php echo $_SESSION['username']?></div>

        <div class="links">
            <a href="#">Home</a>
            <a href="#room">Rooms</a>
            <a href="logout.php"> Logout  <i class="fa fa-sign-out" style="font-size: 30px;"></i></a>

        </div>
    </header>

    <!--Home section-->
    <div class="home">
        <p class="para">Temukan Penawaran untuk Hotel, Kamar, dan banyak lagi...<p>
        <p class="mini">Dapatkan kamar terbaik dengan harga terbaik</p>

        <p class="hotel">HOTEL MELATI SOLO</p>
        <p class="subhotel">kami tahu apa yang kamu suka</p>


        </div>





<!--room section starts-->

<div class="room">
    <a name="room"></a>

    <h1>Kamar Dan Tarif</h1>
    <p>Pesan Kamar Dengan Harga Terbaik</p>

    <div class="roomblock">
        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room2.jpg" alt="" width="100%" height="55%">
                <h2>Ruangan superior</h2>
                <p>Rp200.000/malam</p>
                <div class="book"><a href="welcome.php">pesan sekarang</a></div>
            </div>
        </div>

        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room1.jpg" alt="" width="100%" height="55%">
                <h2>Kamar Mewah</h2>
                <p>Rp300.000/malam</p>
                <div class="book"><a href="welcome.php">pesan sekarang</a></div>
            </div>
        </div>

        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room3.jpg" alt="" width="100%" height="55%">
                <h2>Kamar tamu</h2>
                <p>Rp200.000/malam</p>
                <div class="book"><a href="welcome.php">pesan sekarang</a></div>
            </div>
        </div>

        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room4.jpg" alt="" width="100%" height="55%">
                <h2>Kamar single</h2>
                <p>Rp150.000/malam</p>
                <div class="book"><a href="welcome.php">pesan sekarang</a></div>
            </div>
        </div>

    </div>
                                 
</div>



<footer>


<script>
    function myfunction() {
        document.getElementById("learnmore").style.display='block';
        
    }
    function closefunction() {
        document.getElementById("learnmore").style.display='none';
        
    }


</script>


</body>
</html>