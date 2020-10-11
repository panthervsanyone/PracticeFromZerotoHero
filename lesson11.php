<?php

echo date('Y.m.d H:i:s').'<br>';

echo date('Y.m.d',mktime(0,0,0,9,1)).'<br>';

echo date('D',mktime(0,0,0,10,11,2020)).'<br>';

$day = date('w',mktime(0,0,0,10,11,2020));
$week = ['sun','mon','tue','wed','thu','fri','sat'];
echo $week[$day];

$arr = explode('-','31-12-2020');
print_r($arr);
echo '<br>';

echo time().'<br>';

echo mktime(0,0,0,3,1,2025).'<br>';

echo mktime(0,0,0,12,31).'<br>';

echo time() - mktime(13,12,59,3,15,2000).'<br>';

echo (time() - mktime(7,0,0))/3600 .'<br>';

echo date('Y.m.d H:i:s').'<br>';

echo date('Y.m.d',mktime(0,0,0,12,31,2025)).'<br>';

echo date('d.m.Y',mktime(0,0,0,12,31,2025)).'<br>';

echo date('d.m.y',mktime(0,0,0,12,31,2013)).'<br>';

echo date('H:i:s',mktime(12,59,31)).'<br>';

echo date('d.m.Y',mktime(0,0,0,2,12,2025)).'<br>';

$month = ['jan','feb','mar','apr','may','june','july','aug','sep','oct','nov'];
echo date('M',mktime(0,0,0,$month)).'<br>';

echo date('t').'<br>';
?>

<form action="" method="get">
    <p>Введите год</p>
    <label>
        <input type="number" size="4" name="year" min="999" max="10000"/>
    </label>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_REQUEST['submit'])){
    $year = strip_tags($_REQUEST['year']);
    if ($year % 4 || ($year % 100 == 0 && $year % 400 !=0)){
        echo $year . ' Обычный год'.'<br>';
    }else echo $year . ' Високосный год'.'<br>';
}
?>

<form action="" method="get">
    <p>Введите дату</p>
    <label>
        <input type="date" name="date">
    </label>
    <input type="submit" name="submit1">
</form>

<?php
if (isset($_REQUEST['submit1'])){

    $dateForm = $_REQUEST['date'];
    $explodeDate = explode('-', $dateForm);
    $dayOfTheWeek = mktime(0, 0, 0, $explodeDate[1], $explodeDate[2], $explodeDate[0]);
    echo date('D', $dayOfTheWeek) . '<br>';
    echo date('M',$dayOfTheWeek) . '<br>';
}
?>

<?php
$data = strtotime('2020-12-31');
$reData = date('d.m.Y',$data);
echo $reData.'<br>';
?>

<form action="" method="get">
    <p>Введите даты</p>
    <label>
        <input type="date" name="date1">
        <input type="date" name="date2">
    </label>
    <input type="submit" name="submit2">
</form>

<?php
if (isset($_REQUEST['submit2'])) {
    $date1 = $_REQUEST['date1'];
    $date2 = $_REQUEST['date2'];
    $date1Explode = explode('-',$date1);
    $date2Explode = explode('-',$date2);
    $date1Timestamp = mktime(0,0,0,$date1Explode[1],$date1Explode[2],$date1Explode[0]);
    $date2Timestamp = mktime(0,0,0,$date2Explode[1],$date2Explode[2],$date2Explode[0]);
    if ($date1Timestamp > $date2Timestamp){
        echo $date1 .' Первая дата больше'.'<br>';
    }elseif ($date1Timestamp < $date2Timestamp) {
        echo $date2 . ' Вторая дата больше'.'<br>';
    }else echo 'Одна и та же дата'.'<br>';

}
?>


<?php
$dateTime = '2025-12-31T12:13:59';
echo date('H:i:s d.m.Y',strtotime($dateTime)).'<br>';
?>

<?php
$dateRandom = date_create('2020-10-12');
date_modify($dateRandom,'2 days');
date_modify($dateRandom,'1 month');
date_modify($dateRandom,'1 month 3 days');
date_modify($dateRandom,'-3 days');
echo date_format($dateRandom,'Y-m-d').'<br>';








