<?php
include 'Validation_form.php';
?>
<!DOCTYPE html>
<html>
<body>
    <h1>University Registration Form</h1>

<?php
// Show errors
if (!empty($errors)) {
    echo "<ul style='color:red;'>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}

// Show success
if ($success) {
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Course:</strong> $course</p>";
}
?>

<form method="POST" action="">
    <label>Full Name:</label><br>
    <input type="text" name="fullname"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Username:</label><br>
    <input type="text" name="username"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="confirm_password"><br><br>

    <label>Age:</label><br>
    <input type="number" name="age"><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>

    <label>Course:</label><br>
    <select name="course">
        <option value="">--Select--</option>
        <option value="Computer Science">Computer Science</option>
        <option value="BBA">BBA</option>
        <option value="EEE">EEE</option>
        <option value="LAW">LAW</option>
    </select><br><br>

    <label>
        <input type="checkbox" name="terms"> Accept Terms & Conditions
    </label><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>