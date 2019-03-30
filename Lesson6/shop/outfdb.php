<?
include 'connect.php';
$result = mysqli_query($connect, "SELECT * FROM `feedback`");
while ($data = mysqli_fetch_assoc($result)){   
echo "Ф.И.О " .$data['fio']."<br>";
echo "E-MAIL: " .$data['email']."<br>";
echo "Отзыв: " .$data['text']."<br>";
echo "Дата написания отзыва " .$data['date']."<br>"."<hr>";
};
?>