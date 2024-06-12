<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <!-- Custom styles -->
  <style>
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
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "movie";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if the login form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
    $enteredEmail = $_POST["email"];

    // Validate user credentials
    $loginQuery = "SELECT * FROM user WHERE username='$enteredUsername' AND password='$enteredPassword' AND email='$enteredEmail'";
    $loginResult = $conn->query($loginQuery);

    if ($loginResult->num_rows > 0) {
      echo "<h2>Welcome, $enteredUsername!</h2>";
    } else {
      // Insert new user data into the database
      $insertQuery = "INSERT INTO user (username, email, password) VALUES ('$enteredUsername', '$enteredEmail', '$enteredPassword')";
      if ($conn->query($insertQuery) === TRUE) {
        echo "<h2>User registered successfully.</h2>";
      } else {
        echo "<h2>Error: " . $conn->error . "</h2>";
      }
      // echo "<h2>Invalid login credentials.</h2>";
    }
  }
  ?>

  <!-- HTML Login Form -->
  <div class="container login-container">
    <h2 style="color: #fff; ">အကောင့်
      <span style="color: #CE1212;">ဖွင့်ရန်</span>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
          <input type="text" placeholder="Username" class="form-control" id="username" name="username" required />
        </div>
        <div class="form-group">
          <input type="email" placeholder="Email" class="form-control" id="email" name="email" required />
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control" id="password" name="password" required />
        </div>
        <button type="submit" class="btn" style="background-color: #CE1212;">SIGN UP</button>
      </form>
  </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>