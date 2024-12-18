<h2>Привет, <?php echo htmlspecialchars($_POST['name']); ?></h2>
<p>На почту <?php echo htmlspecialchars($_POST['email']); ?>будет отправлен ответ.</p>
<?php
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Mozilla')) {
    ?>
    <h3>Функция str_contains() возвращает true</h3>
    <p>Вы пользуетесь браузером Firefox.</p>
    <?php
} else {
    ?>
    <h3>Функция str_contains() возвращает false</h3>
    <p>Вы не пользуетесь браузером Firefox.</p>
    <?php
}
?>