<style>
.no_validado{
  font-size:18px;
  color:#F00;
  font-weight:bold;
}
 
.validado{
  font-size:18px;
  color:#0C3;
  font-weight:bold;
}

</style>

<?php
if (isset ($_POST["enviando"])){
    
    $edad=$_POST["edad_usuario"];
    if ($edad <=17) {

        echo "Eres menor de Edad";   
    }
    
    else if ($edad >17) {
      echo "Eres menor de Edad";   
    }

 



}

   


?>