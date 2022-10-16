<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'users';
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <?php 
        if(isset($_POST['user_id'])){
            $user_id = $_POST['user_id'];
            $user_password = $_POST['user_password'];
            $sql = "SELECT * FROM users WHERE user_id = '$user_id' AND user_password = '$user_password'";
            $query = $conn->query($sql);

            if(mysqli_num_rows($query) > 0){
                echo '<script>alert("You have logged In Successfully!")</script>';
            }
           // else{
           //     echo '<script>alert("Failed!")</script>';
           // }
        
        }
    ?>
    <div class="page">

        <div class="side-frame">

            <div class="logo">
                
            </div>
    
            <div class="system-name">
                <label>Halkhata - Shop Management System</label>
            </div>
    
            <div class="motto">
                <label>Less Hassle, More Profit.</label>
            </div>
    
        </div>

        <div class="wrapper">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="welcome-label">
                    <label>Welcome to Halkhata - The Shop Management System</label>
                </div>
                <div class="login-label">
                    <label>Please Login!</label>
                </div>
                <div class="shop-id-label">
                    <label>Shop ID</label>
                </div>                     
                <div>
                    <input type="text" name ="user_id" placeholder="Enter the Shop ID" class="shop-id-input">
                </div>
                <div class="password-label">
                    <label>Password</label>
                </div>        
                <div>
                    <input type="password" name ="user_password" placeholder="Enter Your Password"  class="password-input">
                </div>
                <div>
                    <button type="submit" name = "logIn" class="login-button" required>Login</button>
                </div>
            </form>
        </div>

    </div> 
</body>
</html>
