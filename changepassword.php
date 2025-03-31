<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

class ChangePassword {
    private $db;
    private $empid;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
        $this->empid = $_SESSION['uid'] ?? 0;
        if ($this->empid == 0) {
            header('location:logout.php');
            exit();
        }
    }

    public function updatePassword($currentPassword, $newPassword) {
        $query = mysqli_query($this->db, "SELECT ID FROM employeedetail WHERE ID='$this->empid' AND EmpPassword='$currentPassword'");
        $row = mysqli_fetch_array($query);

        if ($row > 0) {
            mysqli_query($this->db, "UPDATE employeedetail SET EmpPassword='$newPassword' WHERE ID='$this->empid'");
            return "Your password has been successfully changed.";
        } else {
            return "Your current password is incorrect.";
        }
    }
}

// Instantiate ChangePassword class
$changePassword = new ChangePassword($con);

if (isset($_POST['submit'])) {
    $msg = $changePassword->updatePassword($_POST['currentpassword'], $_POST['newpassword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Change Password</title>
</head>
<body>
    <form method="post">
        <label>Current Password:</label>
        <input type="password" name="currentpassword" required>
        <label>New Password:</label>
        <input type="password" name="newpassword" required>
        <button type="submit" name="submit">Change Password</button>
    </form>
    <?php if(isset($msg)) echo "<p>$msg</p>"; ?>
</body>
</html>
