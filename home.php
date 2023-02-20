<!DOCTYPE HTML>

<head>
    <style>
    span {
        color: red;
    }
    </style>
</head>
<html>

<body>

    <?php

    $fullName = $userName = $password = $confirmPassword = $email = $phone = $dateOfBirth = $socialSecurityNumber = "";
    $fullNameErr = $userNameErr = $passwordErr = $confirmPasswordErr = $emailErr = $phoneErr = $dateOfBirthErr = $socialSecurityNumberErr = "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fullName"])) {
            $fullNameErr = "ur full name is required";
        } else {
            $fullName = test_input($_POST["fullName"]);
        }
        if (empty($_POST["userName"])) {
            $userNameErr = "userName is required";
        } else {
            $userName = test_input($_POST["userName"]);
        }
        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
        } else {
            $password = test_input($_POST["password"]);
        }
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Confirm ur password";
        } elseif ($_POST["confirmPassword"] != $password ) {
            $confirmPasswordErr = "write the same Password";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "phone is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }
        if (empty($_POST["dateOfBirth"])) {
            $dateOfBirthErr = "dateOfBirth is required";
        } else {
            $dateOfBirth = test_input($_POST["dateOfBirth"]);
        }
        if (empty($_POST["socialSecurityNumber"])) {
            $socialSecurityNumberErr = "socialSecurityNumber is required";
        } else {
            $socialSecurityNumber = test_input($_POST["socialSecurityNumber"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <!-- <form method="post"
        action=" echo htmlspecialchars($_SERVER[" PHP_SELF"], ENT_QUOTES); /safe.php"> -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>">

        <!-- <form method="post" action=" echo htmlspecialchars(" safe.php"); "> -->
        <!-- error msg will not appear in safe.php -->

        Full Name: <input type=" text" name="fullName"><br>
        <span><?php echo $fullNameErr; ?></span>
        <br><br>
        Username: <input type="text" name="userName"><br>
        <span><?php echo $userNameErr; ?></span>
        <br><br>
        Password: <input type="password" name="password"><br>
        <span><?php echo $passwordErr; ?></span>
        <br><br>
        Confirm Password: <input type="password" name="confirmPassword"><br>
        <span><?php echo $confirmPasswordErr; ?></span>
        <br><br>
        Email: <input type="email" name="email"><br>
        <span><?php echo $emailErr; ?></span>
        <br><br>
        Phone: <input type="tel" name="phone"><br>
        <span><?php echo $phoneErr; ?></span>
        <br><br>
        Date of Birth: <input type="date" name="dateOfBirth"><br>
        <span><?php echo $dateOfBirthErr; ?></span>
        <br><br>
        Social Security Number: <input type="number" name="socialSecurityNumber"><br>
        <span><?php echo $socialSecurityNumberErr; ?></span>
        <br><br>
        <input type="submit">
    </form>






</body>

</html>