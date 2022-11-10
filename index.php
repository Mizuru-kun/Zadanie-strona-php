<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>MANGOWNIA.PL</title>
</head>
<body>
    <div class ="naglowek">
    <img class ="image" src="./a1.png" alt="ksiazka"><h1>TŁUMACZYMY KOMIKSY Z MIŁOŚCIĄ</h1><img class ="image1" src="./a1.png" alt="ksiazka"> 
    </div>
    <div class = "main">
        <div class ="baner-lewy"> 
            <p><b>TOP 3 NAJCZĘŚCIEJ CZYTANE TYTUŁY</b></p>
            <div class ="zdjenc">
            <p><b>TOP 1</b></p>
            <img src="./11.jpg" alt="ksiazka">
            <p>282389796 wyświetleń</p>
            <p><b>TOP 2</b></p>
            <img src="./2.jpg" alt="ksiazka">
            <p>232456677 wyświetleń</p>
            <p><b>TOP 3</b></p>
            <img src="./3.jpg" alt="ksiazka">
            <p>128473552 wyświetleń</p>
            <div class="jeden">
            <a href="./index.pxp" target="_blank">Nasze dostępne tytuły</a>
        </div>
        </div>
        </div>
        <div class="baner">
        <h2>NASZE DOSTĘPNE TYTUŁY</h2>
        <div class="php">
        <?php
            $conn=mysqli_connect('localhost','root','','baza');
            if (!$conn)
            {
            exit("Błąd połączenia z serwerem");
            }
            else {
            $zapytanie1="SELECT id, tytul from mangi order by id";
            $pyt=mysqli_query($conn,$zapytanie1);

            $il_wierszy=mysqli_num_rows($pyt);

            for($i=0;$i<$il_wierszy;$i++)
            {
            $result=mysqli_fetch_array($pyt);

            echo $result['id']." ".$result['tytul']." "."</br>";
            }
            }
        ?>
        </div>  
        </div>
        <div class = "baner-prawy">
            <h3>WISHLISTA</h3>
            <p>Szukasz czegoś? Chcesz żebyśmy coś przetłumaczyli? <br> Daj nam o tym znać!</p>
            <img class ="zdjenc" src="./a2.png" alt="zyczenie" onmouseover="this.src = './a4.png'" onmouseout="this.src = './a2.png'">
            <div class = "strona">
        <a href="./dodaj.html" target="_blank">Wishlista</a>
    </div>
        </div>
        
    </div>
    <div class = "stopka">
        <p>Strona prowadzona przez niezastąpionych tłumaczy</p>
    </div>
</body>
</html>