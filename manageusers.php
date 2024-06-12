<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Users</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Custom styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            background-color: hsl(207, 19%, 11%);
            color: #fff;
            font-family: "Poppins", sans-serif;
        }

        .table-container {
            max-width: 800px;
            margin: auto;
            margin-top: 50px;

        }

        .table-container h2 {
            text-align: center;
            color: #CE1212;
            margin-bottom: 30px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 6px rgb(19, 19, 19);
            background-color: rgb(19, 19, 19);
            border-radius: 10px;
            overflow: hidden;
            color: silver;
        }

        .table-container th,
        .table-container td {
            border: 0.11px solid gray;
            padding: 15px;
            text-align: left;
        }

        .table-container th {
            background-color: #CE1212;
            font-weight: bold;
            color: silver;
        }

        .table-container tbody tr:nth-child(even) {
            background-color: #CE1212;
        }

        .table-container tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        h4 {
            margin-left: 190px;
            color: #CE1212;
            text-align: center;
            width: 50%;
            padding: 10px;
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
    ?>

    <!-- Display the fetched data in an HTML table -->

    <div class="container table-container">
        <h2 style="font-weight: var(--fw-500);">User
            <span style="color: silver;">Data</span>
            <i class="fa-solid fa-user" style="color: #CE1212;"></i>
        </h2>
        <?php
        $userDataQuery = "SELECT * FROM user";
        $userDataResult = $conn->query($userDataQuery);

        if ($userDataResult->num_rows > 0) {
            echo "<table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr></thead>";

            while ($row = $userDataResult->fetch_assoc()) {
                echo "<tbody><tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
            </tr></tbody>";
            }

            echo "</table>";
        } else {
            echo "<h4>No records found!</h4>";
        }

        $conn->close();
        ?>
        </table>
    </div>
    <script src="https://kit.fontawesome.com/4eb603963b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>