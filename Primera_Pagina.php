<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Prácticas jmat</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
				        <div class="hero-copy">
                            <h1 class="hero-title mt-0">PHP Prácticas</h1>
                            <?php   
                                print "Deberia haber puesto mMi primer  PHP <br>" ; // imprime y da un salto de linea (<br>), print devuelve 1
                                echo "Este es Mi primer fallo en PHP file"; /* comentario de varias lineas para comentaro invalidar/probar código
                                ademas admite variables separadas por coma y te las muestras, ademas echo no devuelve uno por lo que gasta menos tiempo
                                por lo que suele usar echo para imprimir en pantalla */


                                /* VARIABLES --> **** https://www.php.net/manual/es/language.variables.basics.php ***
                                COMIENZAN CON EL SIMBOLO $ Y UNA LETRA 0 _ [a-zA-Z_], NO COMENZAR POR NUMERO */
                                $nombre= "Jose Manuel";/* Es poco Tipado o Flexible con el tipo de dato*/
                                $edad= 49;

                                /* de lo anterior se ve el concepto de Casting*/

                                /*Casting inplicito no hace falta indicar el tipo de variable lo hace el sistema*/
                                $num1="5";// aunque es un Nº lo guarda como string al ponerlo Tú como cadena de texto.

                                /*Casting explicito Tú indicas el tipo de variable según lo necesites*/
                                $resultadoexpl=(int)$num1;

                                /* CONCATENAR CON VARIABLES COn . , CONVIEN DEJAR EL ESPACIO EN BLANCO ENTRE EL PUNTO*/

                                echo  "<br>El nombre del aprendiz es " . $nombre . " y su edad " . $edad . "años.";  

                                echo  "<br>El nombre del aprendiz es  $nombre y su edad  $edad años."; //sin concatenar dentro del String

                                /* AMBITO VARIABLES https://www.php.net/manual/es/language.variables.scope.php El ámbito de una variable es el contexto 
                                dentro del que la variable está definida. La mayor parte de las variables PHP sólo tienen un ámbito simple.*/

                                /*  EJEMPLO:
                                $a = 1; // ámbito global 

                                function test(){
                                    echo $a; // referencia a una variable del ámbito local DENTRO DE LA FUNCIÓN 
                                }
                                test();*/ 
                            
                                /*uso de global DENTRO DE LA FUNCIÓN: 
                                function Suma()
                                {
                                    global $a, $b;// HACE globales dentro de la función
                                
                                    $b = $a + $b;
                                }
                            
                                /* Superglobals https://www.php.net/manual/es/language.variables.superglobals.php* Superglobals son variables internas
                                que están disponibles siempre en todos los ámbitos
                                Las variables superglobals son:
                                $GLOBALS
                                $_SERVER
                                $_GET
                                $_POST
                                $_FILES
                                $_COOKIE
                                $_SESSION
                                $_REQUEST
                                $_ENV
                                */ 
                            
                            
                                /* FUNCIONES*/
                            
                                /*declaracion de la función  function nombreFuncion(PARAMETROS) */
                                function nombreFuncion() { 
                                echo "<br>Este es el mensaje de dentro de la función. <br>";
                                }; 
                            
                                /*Llamada a la función
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
                            
                                /*STRINGS Y COMO DECLARARLOS. COMPARAR **** https://www.php.net/manual/es/language.types.string.php *** */
                                echo "<br>Hola, el  String resaltado es: " .  "<p class=\"resaltar\"> JOSE</p>"; /* resaltar con el estilo creado línea1
                            
                                /*COMPARAR STRING -->strcmp compara teniendo en cuenta MAY, y strcasecmp no distingue MAYsC, devuelven 1/0(True/False) 
                                en caso de coincidir da 0 y si no coinciden 1 */
                                $Nombre1="casa";
                                $Nombre2="CASA";
                                $resultado=strcmp($Nombre1,$Nombre2);
                                echo "El resultado de las casas es:". $resultado . "<br>";
                            
                                /* OPERADORES DE COMPARACIÓN  ==  para valor y === para valor y tipo
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
                                /* DECLARACION DE CONSTANTES  **** https://www.php.net/manual/es/language.constants.syntax.php ***
                                define("NOMBRE_CONSTANTE", Valor); el nomnbre por convenio en mayusculas, no simbolo$
                                obligatorio define(), es de ambito global, solo valores escalares(int, bool, string, float[arrays NO]) */
                                define("HOLA_CONSTANTE", "Primera Constante", true); //el True hace posible que otra persona llamae a la CTE en minuscula.
                                echo hola_constante . "<br>";// da error, no esta definida la constante, pero PHP lo usa por el True de la definida.
                                define("AUTOR", "josé Manuel");
                                echo "El autor es: AUTOR <br>"; //esto no dara el valor de la constante debe concatenar
                                echo "El autor es: " . AUTOR . "<br>" ; 
                            
                                // constantes Predefinidas **** https://www.php.net/manual/es/language.constants.predefined.php ****
                                echo __LINE__ . "<br>";
                                echo "vas por la línea que has visto y estas en el archivo:" . __FILE__ . "<br>";
                            
                                /* Paara los acentos & + vocal_con_acento + acute;+resto_palabra---> Cuídate = "Cu&íacute;date"; */
                                /* OPERADORES Y SU PRECEDENCIA **** https://www.php.net/manual/es/language.operators.precedence.php ***
                                izquierda	[	array()
                                derecha	**	aritmética
                                derecha	++ -- ~ (int) (float) (string) (array) (object) (bool) @	tipos e incremento/decremento
                                no asociativo	instanceof	tipos
                                derecha	!	lógico
                                izquierda	* / %	aritmética
                                izquierda	+ - .	aritmética y string
                                izquierda	<< >>	bit a bit
                                no asociativo	< <= > >=	comparación
                                no asociativo	== != === !== <> <=>	comparación
                                izquierda	&	bit a bit y referencias
                                izquierda	^	bit a bit
                                izquierda	|	bit a bit
                                izquierda	&&	lógico
                                izquierda	||	lógico
                                derecha	??	comparación
                                izquierda	? :	ternario
                                derecha	= += -= *= **= /= .= %= &= |= ^= <<= >>=	asignación
                                izquierda	and	lógico
                                izquierda	xor	lógico
                                izquierda	or	lógico */
                            ?>
                            <br>
                            <div class="hero-cta"><a class="button button-primary" href="index.html">VOLVER</a></div>
                        </div>
                            <div class="hero-figure anime-element">
                                <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                    <rect width="528" height="396" style="fill:transparent;" />
                                </svg>
                                <div class="hero-figure-box hero-figure-box-01" data-rotation="-45deg"></div>
                                <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                                <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                                <div class="hero-figure-box hero-figure-box-04" data-rotation="5deg"></div>
                                <div class="hero-figure-box hero-figure-box-05"></div>
                                <div class="hero-figure-box hero-figure-box-06"></div>
                                <div class="hero-figure-box hero-figure-box-07"></div>
                                <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                                <div class="hero-figure-box hero-figure-box-09" data-rotation="1252deg"></div>
                                <div class="hero-figure-box hero-figure-box-10" data-rotation="-2250deg"></div>
                            </div>
                        
                    </div>
                </div>  
            </section>            
        </main>


        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
						<a href="#">
							<img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
						</a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2023 jmat, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
-