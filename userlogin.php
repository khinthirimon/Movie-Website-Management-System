<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
        h2 {
            color: #CE1212;
            justify-content: center;
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
        <form action="login.php" method="post">
            <h2 class="mb-4">
                အကောင့်ဝင်ရန်
            </h2>
            <?php
            if (isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error'] ?></p>

            <?php } ?>
            <!-- <label for="">User name</label> -->
            <!-- <input type="text" name="uname" placeholder="User Name"> -->
            <div class="form-group">
                <input type="text" placeholder="Username" class="form-control" name="uname" required />
            </div>
            <br>
            <!-- <label for="">Password</label> -->
            <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password" required />
            </div>
            <!-- <input type="password" name="password" id="Password"><br> -->
            <button type="submit" class="btn" style="background-color: #CE1212;">အကောင့်ဝင်ရန်</button>
        </form>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>