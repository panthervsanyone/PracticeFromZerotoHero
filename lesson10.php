
<form action="" method="GET">
    <label>Задание №1</label><br>
    <label for="name">Введите ваше имя
        <input type="text" name="name">
    </label><hr>
    <label for="age">Ваш возраст
        <input type="text" name="age">
    </label><hr>
    <label for="message">Введите текст
        <textarea name="message"></textarea>
    </label>
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
        <label for="age1"> Задание №2
            <input type="text" name="age1">
        </label>
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
    <label for="login">Задание №3
        <input type="text" name="login">
    </label>
    <label for="pass">Введите пароль
        <input type="password" name="pass">
    </label>
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

