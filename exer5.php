<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Juros Simples</title>
</head>
<body>
    <table>
       <tr>
         <th>Tempo</th>
         <th>Montante</th>
         <th>Juro</th>
       </tr>
    <?php
        $capital = $_GET['capital'];
        $taxa = $_GET['taxa'];
        $tempo = $_GET['tempo'];
        $tempoAux = 1;

 while($tempoAux <= $tempo):
        $juros = $capital * $taxa/100 * $tempoAux; ?> 
        <tr>
         <td><?= $tempoAux ?></td>
         <td><?= $capital + $juros?></td>
         <td><?= $juros ?></td>
        </tr>
       <?php
       $tempoAux++;
endwhile;   
    ?>
</body>
</html>

