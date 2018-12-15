<?php 
        // Server Kullanıcı Adımız
        $user        =    "root";
        // Server Kullanıcı Şifremiz
        $pass        =    "12345678";
        // Server Adresimiz
        $host        =    "localhost";
        // Veritabanı Adımız
        $db            =    "carsharingdb";
        
        //Veritabanı Bağlantısı Oluşturalım.
        $baglan = mysql_connect($host,$user,$pass,$db) or die(mysql_error());
        
        //Veritabanına Bağlanalım.
        mysql_select_db($db,$baglan) or die(mysql_error());    
?>