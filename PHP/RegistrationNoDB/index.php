<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['errors']) && $_SESSION['Correct?'] == false){
            foreach($_SESSION['errors'] as $error){
                echo "<p>" . $error . "</p>";
            }
        }
        if(isset($_SESSION['Birthday'])){
            echo $_SESSION['Birthday'];
        }
    ?>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="Register">
        <span>First Name: </span><input type="text" name="FirstName">
        <span>Last Name: </span><input type="text" name="LastName">
        <span>Email: </span><input type="text" name="Email">
        <span>Date of Birth: </span><input type="date" name="Birthday">
        <input type="file" name="ProfilePic">
        <span>Password: </span><input type="text" name="Password">
        <span>Confirm Password: </span><input type="text" name="ConfirmPassword">
        <input type="submit" value="Submit">
    </form>

    <?php
        if(isset($_SESSION['success']) && $_SESSION['Correct?'] == true){
            echo "<p>" . $_SESSION['success'] . "</p>";
        }
    ?>
</body>
</html>