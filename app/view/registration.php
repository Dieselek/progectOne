

<?php $this->layout('layout', ['title' => 'Реєстрація'])?>
<link rel="stylesheet" href="css/formRegistr.css">

<form method="post" action="adduser">
    <h2>Реєстрація</h2>
    <input type="text" name="username" placeholder="ім'я">
    <input type="email" name="email" placeholder="Email">
    <input type="password"  name="password" placeholder="Пароль">
    <input type="submit" value="Реєстрація">
</form>
