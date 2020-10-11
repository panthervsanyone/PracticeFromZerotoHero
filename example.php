<form action="" method="get">
    <p>Введите данные</p>
    <label>
        <input type="date" name="dateX">
        <input type="time" name="timeX">
    </label>
    <input type="submit" name="submitX">
</form>
<?php
if (isset($_REQUEST['submitX'])) {

    $dateTime = '2025-12-31T12:13:59';

    echo date('H:i:s d.m.Y', strtotime($dateTime));
}