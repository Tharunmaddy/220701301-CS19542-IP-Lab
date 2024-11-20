<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>
    <h2>Enter Employee ID</h2>
    <form method="POST" action="">
        <label for="empid">Employee ID:</label>
        <input type="text" id="empid" name="empid" required>
        <br><br>

        <button type="submit" name="e_details">E-Details</button>
        <button type="submit" name="update_page">Update</button>
        <button type="submit" name="list_e">List-E</button>
    </form>

    <?php
    if (isset($_POST['e_details'])) {
        $empid = $_POST['empid'];
        header("Location: details.php?empid=" . $empid);
    }
    if (isset($_POST['update_page'])) {
        $empid = $_POST['empid'];
        header("Location: update.php?empid=" . $empid);
    }
    if (isset($_POST['list_e'])) {
        header("Location: list.php");
    }
    ?>
</body>
</html>
