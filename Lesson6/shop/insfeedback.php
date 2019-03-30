<?
include 'connect.php';
$feedback = $_POST;
$fio = $feedback['fio'];
$email = $feedback['email'];
$text = $feedback['usercomment'];
mysqli_query($connect, "INSERT INTO feedback (fio, email, text) VALUES ('$fio', '$email', '$text')");
header("Location:feedback.php");
?>