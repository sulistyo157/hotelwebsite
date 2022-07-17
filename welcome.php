<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> <link rel="stylesheet" href="welcome.css">
    <title>Book Reservation</title>
</head>
<body>
<div class="header">
<h2>welcome<span><?php echo $_SESSION['username']?></span></h2>
<a href="logout.php">Logout <i class="fa fa-sign-out" style="font-size: 30px;"></i></a>
</div>

<div class="reservation">
    <h1>RESERVASI</h1>
    <hr>
</div>
<form action="reservation.php" method="POST">

<div class="maintable">

    <div class="table1">
        <h2>INFORMASI PRIBADI</h2>

        <h3>Title*</h3>

        <select name="title" required>
            <option value="" selected disabled></option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
        </select>


        <h3>Nama depan</h3>
         <input type="text" name="firstname" placeholder="ketik nama depan" required>
        
         <h3>Nama belakang</h3>
         <input type="text" name="lastname" placeholder="ketik nama belakang" required>
            
         <h3>Email*</h3>
         <input type="email" name="email" placeholder="ketik email" required>

         <h3>No telepon</h3>
         <input type="tel" name="phone" placeholder="ketik No telepon" required>

         <h3>kewarganegaraan</h3>
          <span>Indonesia</span> <input type="radio" name="nationality" value="Indonesia" required>
          <span>luar negeri</span> <input type="radio" name="nationality" value="luar-negeri" required>

         

    </div>

    <div class="table2">
        <h2>INFORMASI RESERVASI</h2>

        <h3>Type of room*</h3>
        <select name="roomtype" required>
            <option value="" selected disabled></option>
            <option value="Superior Room">Ruangan superior</option>
            <option value="Delux Room">Kamar Deluxe</option>
            <option value="Guest Room">Kamar tamu</option>
            <option value="Single Room">Kamar single</option>
            
        </select>

        <h3>Bedding Type*</h3>
        <select name="bedtype" required>
            <option value="" selected disabled></option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
        </select>

        <h3>No. of rooms*</h3>
        <select name="totalroom" required>
            <option value="" selected disabled></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
           
        </select>

        <h3>Meal plan</h3>
        <select name="meal">
            <option value="" selected disabled></option>
            <option value="Room only">Kamar saja</option>
            <option value="Break-fast">Sarapan</option>
            <option value="Half-board">Setengah papan</option>
            <option value="Full-board">Lengkap</option>

        </select>

        <h3>Tanggal Check-in</h3>
        <input type="date" name="checkin" required>

        <h3>Tanggal keluar</h3>
        <input type="date" name="checkout" required>

    </div>

</div>

<input type="submit" value="Submit">
</form>

</body>
</html>