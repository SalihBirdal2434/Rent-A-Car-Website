<?php
$hostname = "localhost"; #formalite 
$username = "root"; #kullanıcı adı, root olması gerekir
$password = ""; #password, boş olması gerekiyor.
$dbname = "araba kiralama verisi"; #database'de oluşturduğun isim
$conn= mysqli_connect($hostname,$username,$password,$dbname); #bu kod,True ya da False döndürüyor
#Flag olarak kullanılır. Herhangi bir uyarıda etkilidir. Üstteki hatalara bakıyor.

if(!$conn){
    die("Something went wrong" . mysqli_connect_error());
}


?>