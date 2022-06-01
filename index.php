<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'ControleRemote.php';
                   
           $c = new ControleRemote();
                             
           $c -> abrirMenu();
           
           // test ligar e tocar
           $c ->ligar();
           $c ->play();
           $c -> abrirMenu();
           
           //controlando volume
           $c -> maisVolume();
           $c -> maisVolume();
           $c -> maisVolume();
           $c -> abrirMenu();
           $c -> menosVolume();
           $c -> menosVolume();
           $c -> menosVolume();
           $c -> abrirMenu();
           
           //mutando
           $c ->ligarMudo();
           $c -> abrirMenu();
          
           //desmutando
           $c ->desligarMudo();
           $c -> abrirMenu();
           
        ?>
        </pre>
    </body>
</html>
