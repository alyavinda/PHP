<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator sederhana</title>
</head>
<body>
    <form action="" method="POST">
    NILAI 1 <input type="text" name="nilai1"> <br>
    NILAI 2 <input type="text" name="nilai2"> <br>
    <input type ="submit" value="+" name="tombol">
 <input type ="submit" value="-" name="tombol">
 <input type ="submit" value="\" name="tombol">
 <input type ="submit" value="*" name="tombol">
</form>
      
      
      <?php
      if(isset($_POST['tombol'])) {
          
         $nilai1 =$_POST['nilai1'];
         $nilai2 =$_POST['nilai2'];

            
         if  ($_POST['tombol']=="+" ) {
             $hasil = $nilai1 + $nilai2; 
             echo "hasil adalah".$hasil;
         }
        else if ($_POST['tombol']=="-") {
            $hasil = $nilai1 - $nilai2;
            echo "hasil adalah".$hasil;
        }else if ($_POST['tombol']=="/") {
            $hasil = $nilai1 / $nilai2;
            echo "hasil adalah".$hasil;
        }else if ($_POST['tombol']=="*") {
            $hasil = $nilai1 * $nilai2;
            echo "hasil adalah".$hasil;
        }
    }
    

        
?> 


             </body>
</html>