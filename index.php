<!DOCTYPE html>

<html>

<head>

    <title>UTOP LOGIN</title>

    <link rel="stylesheet" type="text/css" href="login_style.css">

</head>

<body>

     <form action="login.php" method="post">

        <img src="ic.png"> <h2>UTOP LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 
        
        <button type="submit">Login</button>
        
        

     </form>

</body>

</html>