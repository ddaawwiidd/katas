<?php
/*
 * Napisz funkcję która pobiera napis, a zwraca wszystkie pozycje (w postaci tabelki) na których w tym napisie wystepują duże litery (liczymi od 0!).
 *
 * Przykład_:
 * findCapitals("Ala Ma Kota") => [0, 4, 7]
 * findCapitals("a kot ma ale") => []
 * findCapitals("Lubie PLACKI 7") => [0, 6,7,8,9,10,11]
 */



function findCapitals($sentence)
{
    $positions = [];
    $letters = str_split($sentence);//turn each letter of string into array
    for($i = 0; $i < count($letters); $i++)//check which letters are uppercase
    {
        if(ctype_upper("$letters[$i]") == 1)
        {
           array_push($positions,"$i"); //put positions of those letters in array
        }
    }
    return $positions;


}


/*
 * Kod popniżej służy wygenerowaniu testów i strony poglądaowej - nie modyfikujcie go!
 */

$testCases = [["", []],["Ala Ma Kota", [0,4,7]], ["a kot ma ale",  []], ["Lubie PLACKI 7", [0,6,7,8,9,10,11]], ["CoDeRsLaB", [0,2,4,6,8]]];
$results = "";
foreach($testCases as $case){
    if(($funcValue = findCapitals($case[0])) == $case[1]){
        $results .= "<tr class='success'><td> Ok </td><td>{$case[0]}</td><td>[".implode($case[1], ",")."]</td><td>[".implode($funcValue, ",")."]</td></tr>";
    }
    else{
        $results .= "<tr class='danger'><td> Fail </td><td>{$case[0]}</td><td>[".implode($case[1], ",")."]</td><td>[".implode($funcValue, ",")."]</td></tr>";
    }
}

echo("
<!DOCTYPE html>
<html lang='pl'>
  <head>
    <meta charset='utf-8'>
    <title>Długość słów</title>
    <link href='./css/bootstrap.min.css' rel='stylesheet'>

  </head>

  <body>

    <div class='container'>
      <div class='jumbotron'>
        <h1>Długość słów</h1>
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