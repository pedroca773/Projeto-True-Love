<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamo aqui</title>
</head>
<body>
  <section>
        <?php
         echo "<a href='EscolaAberta.php' id='Home'><img src='img/Home.svg' alt='Inicio' width='48px' height='48px'></a>";
            if(isset($_POST["envio"])) {

                $you = $_POST['yourName'];
                $crush = $_POST['crushName'];

                session_start();
                    $_SESSION['you'] = $you;
                    $_SESSION['crush'] = $crush;
                    
                    $percentage = rand(0, 100);
                    
                if($percentage >= 85) {
                    echo "<div class='quadrado'> <div class='square'> <span class='borda'></span><span class='borda'></span><span class='borda'></span><span class='borda'></span>";
                    echo "<p>A compatibilidade entre " . $you . " e " . $crush . " é </p>";
                    include 'Index.php';
                    echo "<p>Vocês são um casal perfeito!</p><br>";
                    echo "<div id='botao'><a href='Poema.php'><button>Poema</button></a><a href='Musica.php'><button>Musica</button></a></div>";
                    echo "</div></div>";
                } else if($percentage >= 25 && $percentage <= 84){
                    echo "<div class='quadrado'> <div class='square'> <span class='borda'></span><span class='borda'></span><span class='borda'></span><span class='borda'></span>";
                    echo "<p>A compatibilidade entre " . $you . " e " . $crush . " é </p>";
                    include 'Index.php';
                    echo "<p> Acho um casal lindo, Tem futuro!</p><br>";
                    echo "<div id='botao'><a href='Poema.php'><button>Poema</button></a><a href='Musica.php'><button>Musica</button></a></div>";
                    echo "</div></div>";
                } else {
                    echo "<div class='quadrado'> <div class='square'> <span class='borda'></span><span class='borda'></span><span class='borda'></span><span class='borda'></span>";
                    echo "<p>A compatibilidade entre " . $you . " e " . $crush . " é </p>";
                    include 'Index.php';
                    echo "<p> Acho melhor partir pra proxima, Infelizmente não tem futuro!</p><br>";
                    echo "<div id='botao'><a href='Poema2.php'><button>Poema</button></a><a href='Musica2.php'><button>Musica</button></a></div>";
                    echo "</div></div>";
                }

            }

        ?>
  </section>  
    
</body>
</html>