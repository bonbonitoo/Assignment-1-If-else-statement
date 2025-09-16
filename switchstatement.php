<?php
// Romar Antonio
if (isset($_POST['day'])) {
    $day = strtolower(trim($_POST['day']));

    switch ($day) {
        case "monday":
            echo "Monday: Start of the work week!";
            break;
        case "wednesday":
            echo "Wednesday: Midweek hustle.";
            break;
        case "friday":
            echo "Friday: Weekend is near!";
            break;
        case "sunday":
            echo "Sunday: Time to relax.";
            break;
        default:
            echo "Invalid day. Please enter Monday, Wednesday, Friday, or Sunday.";
    }
}
?>

<form method="post">
    Enter a day (Monday, Wednesday, Friday, Sunday): 
    <input type="text" name="day" required>
    <input type="submit" value="Check Day">
</form>