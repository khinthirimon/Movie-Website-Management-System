<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <script src="https://kit.fontawesome.com/4eb603963b.js" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
        <style>
            h3 {
                color: #fff;
            }

            body {
                background-color: hsl(207, 19%, 11%);
                color: #fff;
                font-family: var(--ff-poppins);
            }

            .login-container {
                max-width: 400px;
                margin: auto;
                margin-top: 100px;
                padding: 20px;
                background-color: rgb(19, 19, 19);
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .login-container h2 {
                text-align: center;
                color: #CE1212;
            }

            .login-container form {
                margin-top: 20px;
            }

            .login-container form label {
                font-weight: bold;
                color: #333;
            }

            .login-container form input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 0.1px solid grey;
                border-radius: 5px;
                background-color: rgb(19, 19, 19);
            }

            .login-container form input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 0.1px solid grey;
                border-radius: 5px;
                background-color: rgb(19, 19, 19);
            }


            .login-container form input[type="email"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 0.1px solid grey;
                border-radius: 5px;
                background-color: rgb(19, 19, 19);
            }


            .login-container form button {
                width: 100%;
                padding: 10px;
                background-color: #CE1212;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                background-color: rgb(19, 19, 19);
            }

            .login-container form button:hover {
                background-color: #333;
            }
        </style>
    </head>

    <body>
        <div class="container login-container">
            <div class="col ">
                <div class="form-group">
                    <h3 class="ml-4">Hello, <?php echo $_SESSION['user_name']; ?>
                        <i class="fa-solid fa-user-check ml-3" style="color: #CE1212;"></i>
                    </h3>
                </div>

                <button type="submit" class="btn" style="background-color: #CE1212;
                margin-left: 110px">
                    <a href="home.html" style="text-decoration: none;
                    color: #fff;">
                        <i class="fa-solid fa-arrow-right-from-bracket" style="color: #fff;"></i>
                        Home
                    </a>
                </button>
            </div>
        </div>
    </body>
    <script src="https://kit.fontawesome.com/4eb603963b.js" crossorigin="anonymous"></script>

    </html>
<?php
} else {
    header("Location: userlogin.php");
    exit();
}
?>