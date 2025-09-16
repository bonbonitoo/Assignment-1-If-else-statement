<?php
// Romar Antonio
if (isset($_POST['word'])) {
    $word = strtolower(trim($_POST['word'])); // normalize input

    if ($word == "hello") {
        echo "Hi there! You said hello.";
    }
}
?>

<form method="post">
    Enter a word: <input type="text" name="word" required>
    <button type="submit">Submit</button>
</form>