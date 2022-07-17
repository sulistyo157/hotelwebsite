<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Login Form</title>
    
</head>

<body>
    <div class="home">
        <a href="index.php"><i class="fa fa-angle-double-left" id="arrow"></i></i>kembali</a>  
      </div>  
        
</div>
    <div class="big1">
    <div class="big">
    <div class="main">
        <h1>Log-In</h1>
        <h2>Masuk ke akun Anda</h2>
    </div>
    <div class="mainbox">
        <div class="box">
            <form action="validation.php" method="POST">

                <table>
                    <tr>
                        <th><span>Nama: </span></th>
                        <th><input type="text" name="name" placeholder="ketik nama" required><br></th>
                    </tr>


                    <th><span>Password: </span></th>
                    <th> <input type="password" name="password" placeholder="ketik password" required><br>
                    </th>
                    </tr>

                </table>

                <div class="btn">

                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">

                </div>



            </form>
            
            <div class="signupblock">
                <h3>Saya Pengguna Baru!!!</h3>
                <br>
                <a href="signup.php">Sign-Up</a>
                </div>
        </div>
    </div>
</div>
</div>
</body>

</html>