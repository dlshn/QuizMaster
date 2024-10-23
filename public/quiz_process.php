<?php
require_once '../src/config.php';
session_start();
$error_message = '';
$num_of_questions = 10;
$_SESSION['questions']=$num_of_questions;
$answers = [];
$correct_answers_array = [];
$num_of_correct = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {  //store user's answers in array       
    for ($i = 1; $i <= $num_of_questions; $i++) {
        if (isset($_POST[$i])) {
            $answers[$i - 1] = $_POST[$i];
        }
    }
}

for ($i = 1; $i <= $num_of_questions; $i++) {
    $sql = "SELECT answer FROM quiz_answers WHERE question_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $i);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // store all rows
    if ($row = mysqli_fetch_assoc($result)) {
        $correct_answers_array[$i - 1] = $row["answer"];

    } else {
        $_SESSION["error"] = "Some answers have not yet been provided by the Admin. Unfortunately, we are unable to provide your marks at this time. Please try again in a few minutes."; // session use
        header("Location: index.php");
    }

}
$conn->close();

if (count($correct_answers_array) == $num_of_questions) {
    for ($i = 0; $i < $num_of_questions; $i++) {
        if ($answers[$i] == $correct_answers_array[$i]) {
            $num_of_correct++;
        }
    }
}
    $_SESSION["mark"] = $num_of_correct;
    header("Location: marks.php");

?>