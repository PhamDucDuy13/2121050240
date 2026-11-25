<?php
    //noi dung dat o vi tri nay 
    echo"Hello world";
    //Bien: $tenbien =gia tri
    $hoten ="Duc Duy";
    $tuoi =24; 
    //de noi chuoi dung dau .
    echo $hoten. " " .$tuoi."<br>";

    //strlen() tra do dai cua chuoi
    echo strlen($hoten);
    //str_word_count()
    echo str_word_count($hoten)."<br>";
    // strpos tim kiem
    echo strpos($hoten, "D")."<br>";
    //thay the ki tu trong chuoi
    echo str_replace("Duc", "Pham" ,$hoten)."<br>";


    $sothunhat = 10;
    $sothuhai = 5;
    //phep cong
    echo $sothunhat + $sothuhai ."<br>";
    //phep tru
    echo $sothunhat - $sothuhai ."<br>";
    //phep nhan
    echo $sothunhat * $sothuhai ."<br>";
    //phep chia;
    echo $sothunhat / $sothuhai ."<br>";

    //toan tu gan += ,-=,/=, %=
    $sothunhat += $sothuhai;
    echo $sothunhat . "<br>";

    $sothunhat -= $sothuhai;
    echo $sothunhat . "<br>";

    $sothunhat/= $sothuhai;
    echo $sothunhat . "<br>";

    $sothunhat %= $sothuhai;
    echo $sothunhat . "<br>";

    // phep so sanh == , !=;>,<,>=,<=,===
    echo  $sothunhat <= $sothuhai. "<br>";
    echo  $sothunhat > $sothuhai. "<br>";
    echo  $sothunhat >= $sothuhai. "<br>";
    echo  $sothunhat == $sothuhai. "<br>";
    echo  $sothunhat === $sothuhai. "<br>";
    echo  $sothunhat != $sothuhai. "<br>";

    //cau dien kien
    //if(dieukien){
        //logic
    //}elseif(dieukien){
        //logic
    //}else{
        //logic
    //}

    if($sothunhat + $sothuhai <15){
        echo "nho hon";
    }elseif($sothunhat +$sothuhai ==15){
        echo $sothunhat + $sothuhai;
    }else{
        echo "lon hon";
    }
    //switch case
    $color ="red";
    switch($color){
        case "red":
            echo "<br>";
            echo "Is RED";
            break;

        case "blue":
            echo "<br>";
            echo "Is BLUE";
            break;
            
        default :
            echo "<br>";
            echo "no color";
            break;
       
    };

    //for
    for ($i =0 ; $i <100 ;$i++){
        echo $i. "<br>";
    }
    // mang
    $mang =["duy", "diem quynh", "pham duc"];
    //dem phan tu trong mang
    echo count($mang)."<br";
    echo $mang[1] ."<br>";

    $mang[]= "Duc Duy";
    print_r($mang);
    echo "<br>";
    unset($mang[3]);
    print_r($mang);
    
?>