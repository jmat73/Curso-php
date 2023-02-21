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
  <style>
    h1{
      text-align:center;
    }
     
    table{
      background-color:#FFC;
      padding:5px;
      border:#666 5px solid;
    }
  </style>      
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

                      <h2>USANDO CONDICIONALES</h2>
                      <?php
                        if (isset ($_POST["enviando"])){
                        
                            $edad=$_POST["edad_usuario"];
                            if ($edad <=17) {
                              
                              echo "<h1>Eres menor de Edad</h1>";                            

                            }
                          
                            else if ($edad >17) {
                              echo "Eres mayor de Edad"; 
                            }
                        }

                      ?>                      
                </div>
              </div>
            </div> 
          </section>           
      </main>
      <footer class="site-footer"></footer>
          <div class="container"></footer>
              <div class="site-footer-inner"></footer>
                  <div class="brand footer-brand"></footer>
          <a href="#"></footer>
            <img class="header-logo-ima</footer>
          </a></footer>
                  </div></footer>
                  <ul class="footer-links list-reset"</footer>
                      <li></footer>
                          <a href="#">Contact</a></footer>
                      </li></footer>
                      <li></footer>
                          <a href="#">About us</a></footer>
                      </li></footer>
                      <li></footer>
                          <a href="#">FAQ's</a></footer>
                      </li></footer>
                      <li></footer>
                          <a href="#">Support</a></footer>
                      </li></footer>
                  </ul></footer>
                  <ul class="footer-social-links list</footer>
                      <li></footer>
                          <a href="#"></footer>
                              <span class="screen-rea</footer>
                              <svg width="16" height=</footer>
                                  <path d="M6.023 16L</footer>
                              </svg></footer>
                          </a></footer>
                      </li></footer>
                      <li></footer>
                          <a href="#"></footer>
                              <span class="screen-rea</footer>
                              <svg width="16" height=</footer>
                                  <path d="M16 3c-.6.</footer>
                              </svg></footer>
                          </a></footer>
                      </li></footer>
                      <li></footer>
                          <a href="#"></footer>
                              <span class="screen-rea</footer>
                              <svg width="16" height=</footer>
                                  <path d="M7.9 7v2.4</footer>
                              </svg></footer>
                          </a></footer>
                      </li></footer>
                  </ul></footer>
                  <div class="footer-copyright">&copy</footer>
              </div></footer>
          </div></footer>
      </footer></footer>
  </div>
<script src="dist/js/main.min.js"></script>
</body>
</html>































