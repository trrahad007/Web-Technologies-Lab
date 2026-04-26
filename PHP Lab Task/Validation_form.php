<?php
// Initialize variables so the page doesn't crash on first load
$errors   = [];
$success  = false;
$fullname = $email = $username = $age = $gender = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname         = trim($_POST["fullname"]);
    $email            = trim($_POST["email"]);
    $username         = trim($_POST["username"]);
    $password         = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $age              = trim($_POST["age"]);
    $gender           = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $course           = $_POST["course"];
    $terms            = isset($_POST["terms"]) ? true : false;

    // --- Validations ---
    if (empty($fullname)) {
        $errors[] = "Full Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email Address is required.";
    }
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if (empty($confirm_password)) {
        $errors[] = "Please confirm your password.";
    }
    if (empty($age)) {
        $errors[] = "Age is required.";
    }
    if (!empty($fullname) && !preg_match("/^[a-zA-Z ]+$/", $fullname)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address (e.g. john@example.com).";
    }
    if (!empty($username) && strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters long.";
    }
    if (!empty($password) && strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }
    if (!empty($password) && !empty($confirm_password) && $password !== $confirm_password) {
        $errors[] = "Password and Confirm Password do not match.";
    }
    if (!empty($age) && intval($age) < 18) {
        $errors[] = "You must be at least 18 years old to register.";
    }
    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }
    if (empty($course)) {
        $errors[] = "Please select a course.";
    }
    if (!$terms) {
        $errors[] = "You must agree to the Terms & Conditions.";
    }

    // If no errors, set success to true
    if (empty($errors)) {
        $success = true;
    }
}
?>