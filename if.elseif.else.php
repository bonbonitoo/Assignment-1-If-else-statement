<?php
// Romar Antonio
if (isset($_POST['age'])) {
    $age = $_POST['age'];

    if ($age >= 0 && $age <= 12) {
        echo "You're a child.";
    } elseif ($age >= 13 && $age <= 19) {
        echo "You're a teenager.";
    } elseif ($age >= 20 && $age <= 59) {
        echo "You're an adult.";
    } elseif ($age >= 60) {
        echo "You're a senior citizen.";
    } else {
        echo "Invalid age entered.";
    }
}
?>

<form method="post">
    Enter your age: <input type="number" name="age" required>
    <button type="submit">Check Age Group</button>
</form>