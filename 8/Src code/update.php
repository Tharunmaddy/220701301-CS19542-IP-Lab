<?php
include "Database_emp.php";
if (isset($_POST['update_salary'])) {
    $empid = $_POST['empid'];
    $new_salary = $_POST['salary'];

    $sql = "UPDATE EMPDETAILS SET SALARY = '$new_salary' WHERE EMPID = '$empid'";
    if ($conn->query($sql) === TRUE) {
        echo "Salary updated successfully.";
    } else {
        echo "Error updating salary: " . $conn->error;
    }
    $conn->close();
} else {
    $empid = $_GET['empid'];
    echo '<h2>Update Salary</h2>';
    echo '<form method="POST" action="">
            <label for="empid">Employee ID: </label>
            <input type="text" id="empid" name="empid" value="' . $empid . '" readonly><br><br>
            <label for="salary">New Salary: </label>
            <input type="text" id="salary" name="salary" required><br><br>
            <button type="submit" name="update_salary">Update</button>
          </form>';
}
?>
