<!DOCTYPE html>

<head>
    
    <title>Latihan Form </title>
</head>
<body>
    <form action="" method="POST">
    NILAI <input type="text" name="nilai"> 
    <input type ="submit" value="hasil" name="tombol_hasil">
    </form>
    <?php 
    //proses jika tombol hasil di tekan
     if(isset ($_POST ['tombol_hasil'])) {
         $nilai = $_POST ['nilai'];
         if ($nilai == 50) {
             echo "nilai adalah :" . $nilai;
         }else if ($nilai == 90) {
             echo "nilai adalah :" . $nilai;
         }else {
            echo "nilai tidak sesuai"; 
         }

     }
       
    
    
    
    ?>


</body>
</html>