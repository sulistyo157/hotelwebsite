<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/index.css">
  <title>Hotel SOLO</title>
</head>
<body>

<div class="block">
    <header>

        <div class="main">
            <p>HOTEL MELATI SOLO </p>
        
        </div>

        <div class="link">
            <a href="login.php" >Log-In</a>
            <a href="signup.php" >Sign-Up</a>
         </div>

    </header>

    <div class="maincontact">
    <div class="contact" id="contact">
    <i class="fa fa-times" onclick="myclose()"></i>

        <h2>Contact Us</h2>
        <p> Lets Get In Touch</p>
        <form action="contact.php" method="POST">

        <span>Name :</span>
        <input type="text" placeholder="enter your name" name="name" required><br>

        <span>Phone no :</span>
        <input type="tel" placeholder="enter your phone" name="phone" required><br>

        <span>E-mail :</span>
        <input type="email" placeholder="enter your email" name="email" required><br>

        <span>Query box :</span><br>
        <textarea name="query" cols="30" rows="30" placeholder="enter your query" required></textarea><br>
        <input type="submit" value="Submit">

        </form>

    </div>
</div>

<div class="menu">
    <h3>Hotel <span>MELATI SOLO</span></h3>
   
    <p>Silakan Masuk Untuk Memesan Kamar Hotel Anda dan habiskan Liburan Berkualitas bersama kami.</p>
   
    <div class="notice">
        <div class="notice1">
        <h2>Fiture yang anda dapatkan:</h2>
        <ul>
            <li>Kamar Terbaik dengan Harga Murah.</li>
            <li>Dapatkan fasilitas Restoran 24 jam.</li>
            <li>Pesan hotel Anda di tempat terbaik.</li>
            <li>Dapatkan diskon hingga 50% untuk pemesanan pertama Anda.</li>
            <li>Dapatkan Cakupan Wi-Fi Berkecepatan Tinggi di Setiap Pemesanan.</li>
            <li>Dapatkan Diskon Spesial Untuk Acara Spesial.</li>
        </ul>
        </div>
        <div class="notice2">
            <p>Info kontak:</p>
        <i class="fa fa-phone"></i><span> 089638442801</span><br>
        <i class="fa fa-envelope"></i><span>hotelmelatisolo@gmail.com</span>

        </div>

    </div>

    
    
</div>

</div>

<footer>



<script>
function myopen(){
    document.getElementById("contact").style.display="block";
}

function myclose(){
    document.getElementById("contact").style.display="none";
}


</script>

</body>
</html>