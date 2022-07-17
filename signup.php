<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sign_up.css">
    <title>Sign-Up Form</title>
    
</head>

<body>
    <div class="home">
      <a href="index.php"><i class="fa fa-angle-double-left" id="arrow"></i><i class="fa fa-home"></i>HomePage</a>  
    </div>
        
</div>
    <div class="big1">
    <div class="big">
    <div class="main">
        <h1>Sign-Up</h1>
        <h2>Buat akun baru</h2>
    </div>
    <div class="mainbox">
        <div class="box">
            <form action="registration.php" method="POST">

                <table>
                    <tr>
                        <th><span>Nama : </span></th>
                        <th><input type="text" name="name" placeholder="ketik nama" required><br>
                        </th>
                    </tr>

                    <tr>
                        <th><span>E-mail : </span></th>
                        <th> <input type="email" name="email" placeholder="ketik email" required><br>
                        </th>
                    </tr>

                    <tr>
                        <th><span>Jenis kelamin : </span></th>
                        <th><span>perempuan</span> <input type="radio" name="gender" value="perempuan">\
                            <br>
                        &nbsp;&nbsp;<span>laki-laki</span> <input type="radio" name="gender" value="laki-laki"></th>
                    </tr>

                    <tr>
                        <th><span> No telepon: </span></th>
                        <th> <input type="tel" name="phone" placeholder="enter your phone number" required><br>
                        </th>
                    </tr>

                    <tr>
                        <th><span>Password: </span></th>
                        <th> <input type="password" name="password" placeholder="enter strong password" required><br>
                        </th>

                    </tr>

                </table>

                <div class="btn">

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">

                </div>



            </form>
            
            <div class="signupblock">
                <h3>Sudah memiliki akun!!!</h3>
                <a href="login.php">Log-In</a>
                </div>
        </div>
    </div>
</div>
</div>
</body>

</html>