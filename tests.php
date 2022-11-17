<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab №1</title>
    <link rel="stylesheet", href="table.css">
</head>
<body>
<script>
    let x = new Date();
    let dynamicTime = ("0" + x.getHours()).slice(-2) + ":" + ("0" + x.getMinutes()).slice(-2) + ":" + ("0"+ x.getSeconds()).slice(-2);
</script>
<?php
date_default_timezone_set('Europe/Moscow');
if (session_id() === "") session_start();
$userT = microtime(true);
$count = 1;
$x = (int)$_POST['xCoordinate'];
$y = (float)str_replace(",", ".", $_POST['yCoordinate'], $count);
$r = (float)str_replace(",", ".", $_POST['radius'], $count);
if ((is_nan($x))||is_nan($y)||is_nan($r)||($y <= -5)||($y >= 5)||($r <= -2)||($r >= 5)) echo "wtf";
echo "<table border='1'>";
$scriptT = (float) (microtime(true) - $userT);
echo "<thead>
<tr>
<th> <h2>Х</h2></th>
<th> <h2>Y</h2></th>
<th> <h2>R</h2></th>
<th> <h2>Текущее время</h2></th>
<th> <h2>Время проверки</h2></th>
<th> <h2>Попадание</h2></th>
</tr>
</thead>";
$data = new Data($x, $y, $r, $userT);
$data -> setScriptTime($scriptT);
if (!isset($_SESSION['values'])) $_SESSION['values'] = array();
array_push($_SESSION['values'], $data);
echo "<br>";
echo "<br>";
echo "<br>";
foreach (array_reverse($_SESSION['values']) as $i=>$data) {
    $userTime = date("H:i:s", (int)$data->userTime);
    $userTime = "<script> document.writeln(dynamicTime) </script>";
    $scriptTime = number_format($data->scriptTime, 6, '.', ',')*1000000;
    echo "<tr>
    <td>$data->x</td>
    <td>$data->y</td>
    <td>$data->r</td>
    <td>$userTime</td>
    <td>$scriptTime мкс</td>";
    echo $data->checkHit() ? "<td>было</td> </tr>" : "<td>не было</td> </tr>";
}
class Data{
    public $x;
    public $y;
    public $r;
    public $userTime;
    public $scriptTime;

    function __construct($x, $y, $r, $userTime){
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
        $this->userTime = $userTime;
    }

    function setScriptTime($scriptTime){
        $this->scriptTime = $scriptTime;
    }

    function checkHit(){
        if ($this -> x >= 0 AND $this -> y >= 0) return $this -> x**2 + $this -> y**2 <= $this -> r**2/4;
        elseif ($this -> x <= 0 AND $this -> y >= 0) return $this -> x >= -$this -> r AND $this -> y <= $this -> r;
        elseif ($this -> x >= 0 AND $this -> y <= 0) return $this -> y >= $this -> x - $this -> r;
        elseif ($this -> x < 0 AND $this -> y < 0) return false;
        else return false;
    }
}
?>
</body>
</html>

