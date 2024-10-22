<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        if (($n1 != 0 && $n2 != 0) && (empty($n1) || empty($n2))) {
            echo "<p class='text-danger'> Almeno uno dei due numeri è vuoto </p>";
            echo "<a href='numeri.html'>number page</a>";
            $sum = "!!";
            $sot = "!!";
            $mol = "!!";
            $div = "!!";
        } else {
            echo "<ul> <li>$n1</li> <li>$n2</li> </ul>";
            $sum = intval($n1) + intval($n2);
            $sot = intval($n1) - intval($n2);
            $mol = intval($n1) * intval($n2);
            $strdiv;
            if ($n2 != 0) {
                $div = number_format(intval($n1)/intval($n2), 3);
            }else{
                $div = "<span class='text-danger'>impossibile</span>";
            }
        }
    ?>
    <table style="border-collapse:collapse">
        <tr>
            <th>Operazione</th>
            <th>Risultato</th>
        </tr>
        <?php
            echo "<tr> <td>Somma</td> <td> $sum</td></tr>";
            echo "<tr> <td>Sottrazione</td> <td> $sot</td></tr>";
            echo "<tr> <td>Moltiplicazione</td> <td> $mol</td></tr>";
            echo "<tr> <td>Divisione</td> <td> $div</td></tr>";
       ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>