<?php
// Romar Antonio
if (isset($_POST['username'])) {
    $username = trim($_POST['username']);

    if ($username === "") {
        echo "Username cannot be empty.";
    } elseif ($username === "user123") {
        echo "Welcome, User123!";
    } else {
        echo "Unknown user. Access denied.";
    }
}
?>

<form method="post">
    Enter username: <input type="text" name="username" required>
    <button type="submit">Login</button>
</form>