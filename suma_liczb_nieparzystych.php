<?php
/*
 * Mając poniższy schamat generowania liczb nieparzystych
 * 1:            1
 * 2:          3   5
 * 3:        7   9   11
 * 4:      13  15  17  19
 * 5:    ..  ..  ..  ..  ..
 * napisz funkcjię która zwróci sume liczb z danego rzędu.
 *
 * Pyrzykłady:
 * sumOdd(1) => 1
 * sumOdd(2) => 8
 */



function sumOdd($row)
{
    $numbers = [];//empty array to fill with numbers from picked row
    if($row == 1)
    {
        array_push($numbers,1);
    }
    else
    {
        for($i = 1; $i <= $row; $i++)//loop to generate other numbers, dependent on the number of row
        {
            $number = (2*$i - 1)+2;//generates odd number
            array_push($numbers,$number);
        }
    }
    $result = array_sum($numbers);
    return $result;

}


/*
 * Kod popniżej służy wygenerowaniu testów i strony poglądaowej - nie modyfikujcie go!
 */

$testCases = [[1, 1], [2, 8], [42, 1848]];
$results = "";
foreach($testCases as $case){
    if(($funcValue = sumOdd($case[0])) === $case[1]){
        $results .= "<tr class='success'><td> Ok </td><td> {$case[0]} </td><td>{$case[1]}</td><td>$funcValue</td></tr>";
    }
    else{
        $results .= "<tr class='danger'><td> Fail </td><td> {$case[0]} </td><td>{$case[1]}</td><td>$funcValue</td></tr>";
    }
}

echo("
<!DOCTYPE html>
<html lang='pl'>
  <head>
    <meta charset='utf-8'>
    <title>Suma liczb nieparzystych</title>
    <link href='./css/bootstrap.min.css' rel='stylesheet'>

  </head>

  <body>

    <div class='container'>
      <div class='jumbotron'>
        <h1>Suma liczb nieparzystych</h1>
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