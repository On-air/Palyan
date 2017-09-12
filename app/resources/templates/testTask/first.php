<?php
if($wrong_input) {
    echo "Неправильно заполнены поля<br>";
}
?>

<form action="/second" method="post">
    <p>Ваше имя: <input type="text" name="name" /></p>
    <p>Ваша фамилия: <input type="text" name="lastname" /></p>
    <p><input type="submit" /></p>
</form>