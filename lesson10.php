
<form action="" method="GET">
        <input type="text" name="name">
        <input type="text" name="age">
        <textarea name="message"></textarea>
    <input type="submit" name="submit1">
</form>

<?php
if (isset($_REQUEST['submit1'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $message = strip_tags($_REQUEST['message']);
    echo "Привет, $name, $age <br> Твое сообщение: $message";
    }
?>


<?php
if (!isset($_REQUEST['age1'])){

?>
    <form action="" method="get">
        <input type="text" name="age1">
        <input type="submit">
    </form>
<?php
    }
?>

<?php
if (isset($_REQUEST['age1'])){
    $age1 = strip_tags($_REQUEST['age1']);
    echo 'Ваш возраст: ' . $age1;
}
?>

<form action="" method="GET">
    <input type="text" name="login">
    <input type="password" name="pass">
    <input type="submit" name="submit2">
</form>

<?php
if (isset($_REQUEST['submit2'])){
    $login = 'qwerty';
    $pass = 'qwerty';
    $formLogin = trim($_REQUEST['login']);
    $formPass = trim($_REQUEST['pass']);
    if ($login == $formLogin && $pass == $formPass){
        echo 'Доступ разрешен';
    }else
        echo 'Доступ запрещен';

}

?>

