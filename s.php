<?php
    $name = $_POST['write-name'];
    $number = $_POST['write-phone-number'];
    $area = $_POST['area'];
    if($area == "are1"){
        $selectedArea = "Центральный";
    }
    elseif($area == "are2"){
        $selectedArea = "Ленинский";
    }
    elseif($area == "are3"){
        $selectedArea = "Октябрьский";
    }
    elseif($area == "are4"){
        $selectedArea = "Кировский";
    }
    elseif($area == "are5"){
        $selectedArea = "Советский";
    }
    elseif($area == "areAn"){
        $selectedArea = "Другое";
    }
    $link = mysqli_connect("localhost", "root", "root","sanpaku_eyes_db");
    mysqli_set_charset($link, "utf8");
    $sql = "INSERT INTO clients(Name, Phone_Number, Area) VALUES ('1','7','aa')";
    $result = mysqli_query($link, $sql);
    if ($result == true) {
        echo "sssssss";
    }
?>