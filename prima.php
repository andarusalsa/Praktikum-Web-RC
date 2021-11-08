<?php 
    function input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function Prima(){
        $bil = 2;
        while($bil < 50){
            $bil1 = 2;
            if($bil == 2 || $bil == 3){
                echo $bil;
                echo " , ";
            }
            else if($bil == 47){
                echo $bil;
            }
            else{
                while($bil1<=$bil){
                    if($bil1==$bil){
                        echo $bil;
                        echo " , ";
                    }
                    else if($bil1<$bil && $bil%$bil1 == 0){
                        break;
                    }  
                    $bil1++;
                }
            }
            $bil++;
        }    
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><b>Menampilkan bilangan prima 1-50<br></b></p>

    <input type="submit" value="Hasil">
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hasil : ";
        Prima();
        
    }
?>
