<?php
/*
 * Napisz funkcję która pobiera tablicę i zwraca tablice w której znajdują się wszystkie elementy które wystepują co najmniej 2 razy.
 *
 * Przykłady:
 * findDuplicates([1,2, "jan", "kowlaski", 2, "jan"]) => [2, "jan"]
 * findDuplicates([3.4, "jablko", 'banan', 'banan']) => ['banan']
 * findDuplicates([1,2, 3, "jablko", 'banan']) => []
 */


function findDuplicates(){
}


/*
 * Kod popniżej służy wygenerowaniu testów i strony poglądaowej - nie modyfikujcie go!
 */

$testCases = [[[], []],[[1,2, "jan", "kowlaski", 2, "jan"], [2, "jan"]], [[3.4, "jablko", 'banan', 'banan'], ['banan']], [[1,2, 3, "jablko", 'banan'], []]];
$results = "";
foreach($testCases as $case){
    if(($funcValue = findDuplicates($case[0])) === $case[1]){
        $results .= "<tr class='success'><td> Ok </td><td>[".implode($case[0], ",")."] </td><td>[".implode($case[1], ",")."]</td><td>[".implode($funcValue, ",")."]</td></tr>";
    }
    else{
        $results .= "<tr class='danger'><td> Fail </td><td> [".implode($case[0], ",")."] </td><td>[".implode($case[1], ",")."]</td><td>[".implode($funcValue, ",")."]</td></tr>";
    }
}

echo("
<!DOCTYPE html>
<html lang='pl'>
  <head>
    <meta charset='utf-8'>
    <title>Znajdz duplikaty</title>
    <link href='./css/bootstrap.min.css' rel='stylesheet'>

  </head>

  <body>

    <div class='container'>
      <div class='jumbotron'>
        <h1>Znajdz duplikaty</h1>
        <p><a class='btn btn-lg btn-success' href='javascript:window.location.reload();' role='button'>Odświerz</a></p>
      </div>

      <div class='row'>
          <h1>Testy:</h1>
          <table class='table'>
            <thead>
              <tr>
                <th>Stan testu:</th>
                <th>Dane:</th>
                <th>Wartość spodziewana:</th>
                <th>Wartość otrzymana:</th>
              </tr>
            </thead>
            <tbody>
                $results
            </tbody>
          </table>
      </div>
    </div>
  </body>
</html>
");