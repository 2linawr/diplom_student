<?php 
if(empty($_POST['name'])&& empty($_POST['email'])&& empty($_POST['telephone'])){
$to="doc.docit@mail.ru";
$from="linar210998@yandex.ru";

$message="Прикол могу отправлять теперь сообщения на почту";
$headers = "From:$from"."\r\n".
"Reply-To:$from"."\r\n";
mail("doc.docit@mail.ru",$subject,$message,$headers)
echo'Данные есть';
 }
else{
echo'Данных нет';
}
?>