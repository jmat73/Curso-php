<style>
    .resaltar{
        color:firebrick;
        font-weight:bold;

    }
</style>

<?php   
print "Deberia haber puesto mMi primer  PHP <br>" ; // imprime y da un salto de linea (<br>), print devuelve 1
echo "este es Mi primer fallo en PHP file"; /* comentario de varias lineas para comentaro invalidar/probar código
ademas admite variables separadas por coma y te las muestras, ademas echo no devuelve uno por lo que gasta menos tiempo
por lo que suele usar echo para imprimir en pantalla */


/* VARIABLES --> COMIENZAN CON EL SIMBOLO $, SIN SIGNOS EXTRAÑOS, NO COMENZAR POR NUMERO PERO LOS ADMITE EN EL MEDIO*/
 $nombre= "Jose Manuel";/* Es poco Tipado o Flexible con el tipo de dato*/
 $edad= 49;

 /* de lo anterior se ve el concepto de Casting*/

 /*Casting inplicito no hace falta indicar el tipo de variable lo hace el sistema*/
 $num1="5";// aunque es un Nº lo guarda como string al ponerlo Tú como cadena de texto.

 /*Casting explicito no hace falta indicar el tipo de variable lo hace el sistema*/
 $resultadoexpl=(int)$num1;

 /* CONCATENAR CON VARIABLES COn . , CONVIEN DEJAR EL ESPACIO EN BLANCO ENTRE EL PUNTO*/

echo  "<br>El nombre del aprendiz es " . $nombre . " y su edad " . $edad . "años.";  

echo  "<br>El nombre del aprendiz es  $nombre y su edad  $edad años."; //sin concatenar dentro del String




/* FUNCIONES*/

/*declaracion de la función*/
function nombreFuncion() { 
echo "<br>Este es el mensaje de dentro de la función. <br>";
}; 

/*Llamada a la función*/
nombreFuncion();


/* FUNCIONES EXTERNAS LLAMADAS DESDE OTRO ARCHIVO*/

include ("dame_datos.php");/* si hubiera un error al tener include generara un error pero ejecuta el programa,
 con require no, al ser requerido si falla*/

/*Funciones y Variables*/
function no_incremetVariable(){

    $contador =0;
    $contador++;
    echo "<br>" . $contador;

}
no_incremetVariable();

function incremetVariable(){

    static  $contador =0; /* variable statica para que conserve su valor al salir de la función*/
    $contador++;
    echo "<br>" . $contador;

}
incremetVariable();
incremetVariable();


/*STRINGS Y COMO DECLARARLOS. COMPARAR */
echo "<br>Hola, el  String resaltado es: " .  "<p class=\"resaltar\"> JOSE</p>"; /* resaltar con el estilo creado línea1

/*COMPARAR STRING -->strcmp compara teniendo en cuenta MAY, y strcasecmp no distingue MAYsC, devuelven 1/0(True/False) 
en caso de coincidir da 0 y si no coinciden 1 */
$Nombre1="casa";
$Nombre2="CASA";
$resultado=strcmp($Nombre1,$Nombre2);
echo "El resultado de las casas es:". $resultado . "<br>";

/* OPERADORES DE COMPARACIÓ  ==  para valor y === para valor y tipo
!= Diferente para valor y <> para valor y tipo,mas los tipicos mayor >, menor< etc*/ 

$variable1=9;
$variable2=7;

if ($variable1 < $variable2){
    echo " El primer valor a comparar es $variable1" . "<br>";
    echo " El 2º valor a comparar es $variable2" . "<br>";
    echo " $variable2 es mayor que $variable1" . "<br>";
}else{
    echo " elprimer valor a comparar es $variable1" . "<br>";
    echo " elprimer valor a comparar es $variable2" . "<br>";
    echo " $variable1 es mayor que $variable2" . "<br>";  
}
 
 /* DECLARACION DE CONSTANTES   define("NOMBRE_CONSTANTE", Valor); el nomnbre por convenio en mayusculas, no simbolo$
 obligatorio define(), es de ambito global, solo valores escalares(int, bool, string, float[arrays NO]) */

 define("HOLA_CONSTANTE", "Primera Constante", true); //el True hace posible que otra persona llamae a la CTE en minuscula
 define("AUTOR", "josé Manuel");
 
 echo hola_constante . "<br>";// da error, no esta definida la constante, pero PHP lo usa por el True de la definida.
 echo "El autor es: AUTOR <br>"; //esto no dara el valor de la constante debe concatenar
 echo "El autor es: " . AUTOR . "<br>" ; 

 // constantes Predefinidas
 echo __LINE__ . "<br>";
 echo "vas por la línea que has visto y estas en el archivo:" . __FILE__ . "<br>";
 ?>