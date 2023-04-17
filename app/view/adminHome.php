<?php $this->layout('layoutAdmin', ['title' => 'Адмінка Головна'])?>


<div class="content">
    <h1>Користувачі</h1>
    <h3><a href="#">Додати Користувача</a></h3>
    <table border="5" class="table">
        <td>ID</td>
        <td>Ім'я користувача</td>
        <td>Пошта</td>
        <td>Пароль</td>
        <td>Роль</td>
        <td>Статус</td>
        <td>Дії</td>
        <tr>
            <td>1</td>
            <td>Олександр</td>
            <td>User1@gmail.com</td>
            <td>qwerty</td>
            <td>
                <select>
                    <option><a href="#">Користувач</a></option>
                    <option><a href="#">Адмін</a></option>
                </select>
            </td>
            <td>
                <select>
                    <option><a href="#">Забанений</a></option>
                    <option><a href="#">Не забанений</a></option>
                </select>
            </td>
            <td><a href="#">Змінити</a></td>
            <td><a href="#">Видалити</a></td>
        </tr>
    </table>
</div>
