<?php
/*
 * Napisz funkcję która sprawdza czy słowo jest palindromem (funkcja ma nie zwracać uwagi na wielkosc liter). Ma zwracać wartość boolean.
 *
 * Przykłady
 * palindrom("ala") => true
 * palindrom("Ala") => true
 * palinfrom("pomarańcz") => false
 */

function palinfrom($word)
{

    if(ctype_alpha($word) == 1)
    {
        $temp = strtolower($word);
        $wordReverse = strrev($temp);
        if($temp == $wordReverse)
        {
            return true;
        }
        else{
            return false;
        }
    }
    else
    {
        return false;
    }

}


/*
 * Kod popniżej służy wygenerowaniu testów i strony poglądaowej - nie modyfikujcie go!
 */

$testCases = [["", false],["Ala", true], ["Pomarańcz",  false], ["abba", true], ["abcdDCBA", true]];
$results = "";
foreach($testCases as $case){
    if(($funcValue = palinfrom($case[0])) === $case[1]){
        $results .= "<tr class='success'><td> Ok </td><td>{$case[0]}</td><td>{$case[1]}</td><td>$funcValue</td></tr>";
    }
    else{
        $results .= "<tr class='danger'><td> Fail </td><td>{$case[0]}</td><td>{$case[1]}</td><td>$funcValue</td></tr>";
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