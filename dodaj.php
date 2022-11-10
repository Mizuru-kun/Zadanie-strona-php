<?php
$conn=mysqli_connect('localhost','root','','baza');
if (!$conn)
{
    exit("Błąd połączenia z serwerem");
}
else {
$tytul=$_POST['tytul'];
    $pytanie= "insert into wishlist (tytul)
    values('$tytul')";
    $pyt=mysqli_query($conn,$pytanie);
}
echo $tytul;
mysqli_close($conn);
?>