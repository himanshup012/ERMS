<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

class PasswordReset {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function processRequest($empid, $email) {
        $query = mysqli_query($this->db, "SELECT ID FROM employeedetail WHERE EmpEmail='$email' AND EmpCode='$empid'");
        $ret = mysqli_fetch_array($query);
        
        if ($ret > 0) {
            $_SESSION['empid'] = $empid;
            $_SESSION['email'] = $email;
            header('location:resetpassword.php');
            exit();
        } else {
            return "Invalid Details. Please try again.";
        }
    }
}

// Instantiate the PasswordReset class
$passwordReset = new PasswordReset($con);

if (isset($_POST['submit'])) {
    $empid = $_POST['empid'];
    $email = $_POST['Email'];
    $msg = $passwordReset->processRequest($empid, $email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ERMS | Forgot Password</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form method="post">
        <label>Employee ID:</label>
        <input type="text" name="empid" required>
        <label>Email:</label>
        <input type="email" name="Email" required>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php if(isset($msg)) echo "<p>$msg</p>"; ?>
</body>
</html>
