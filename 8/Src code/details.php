<?php
include "Database_emp.php";
$empid = $_GET['empid'];
$sql = "SELECT * FROM EMPDETAILS WHERE EMPID = '$empid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Employee Details</h2>";
    echo "EMPID: " . $row["EMPID"] . "<br>";
    echo "Name: " . $row["ENAME"] . "<br>";
    echo "Designation: " . $row["DESIG"] . "<br>";
    echo "Department: " . $row["DEPT"] . "<br>";
    echo "Date of Joining: " . $row["DOJ"] . "<br>";
    echo "Salary: " . $row["SALARY"] . "<br>";
} else {
    echo "Employee ID not found.";
}

$conn->close();
?>
