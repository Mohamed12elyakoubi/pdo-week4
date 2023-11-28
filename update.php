<?php
include "db.php";
$db = new Database();

if ($_GET['id']) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $db->editUser($_POST['name'], $_POST['pass'], $_GET['id']);
            echo '<div class="message" style="text-align: center; font-size:30px; color: green;"  onclick="redirectToIndex();">' . "User is succesvol geupdate" . '</div>';
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function redirectToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</head>

<body>
    <h1>User EDITEN</h1>
    <br>
    <form method="POST">
        <input type="text" class="form-control" name="name" placeholder="Naam" required> <br>
        <input type="password" class="form-control" name="pass" placeholder="wachtword" required> <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>

</html>
