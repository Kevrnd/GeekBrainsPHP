<?
$id=$_POST;
$fstnum = $id["fstnum"];
$secnum = $id["secnum"];
$act = $id["d"];
if ($act == 3 and $secnum ==0){
    $result = "Делить на ноль нельзя!";
} if ($act == 3 and $secnum !=0){
    $result = $fstnum/$secnum;
}else if ($act ==1){
    $result = $fstnum+$secnum;
} else if ($act == 2){
    $result = $fstnum-$secnum;
}else if ($act == 4){
    $result = $fstnum*$secnum;
}
echo "Результат вычисления  " .$result;
?>