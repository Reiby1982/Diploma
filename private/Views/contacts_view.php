<h2>Контакты</h2>
<table class="contacts_1">
    <td width="300px">
        <ul class="position">
            <li>Главный по пляжу</li>
            <li>Спец по доскам</li>
            <li>Заместитель директора по ветру</li>
            <li>Отдел хорошего настроения</li>
            <li>Департамент ненапряга</li>
        </ul>
    </td>
    <td width="120px">
        <ul class="name" type="square">
            <li>Jonn</li>
            <li>Bill</li>
            <li>Sid</li>
            <li>Anastasia</li>
            <li>Kate</li>
        </ul>
    </td>
    <td width="150px">
        <ul class="adress" type="disc">
            <li><a href="mailto:Jonn@mail.ru">Jon@gmail.com</a></li>
            <li><a href="mailto:Bill@mail.ru">Bill@gmail.com</a></li>
            <li><a href="mailto:Sid@mail.ru">Sid@gmail.com</a></li>
            <li><a href="mailto:Anastasia@mail.ru">Anastasia@gmail.com</a></li>
            <li><a href="mailto:Kate@mail.ru">Kate@gmail.com</a></li>
        </ul>
    </td>
</table>
<br>
<form action="contacts.php" method="post">
    <table class="contacts_2">
        <tr>
            <th>
                <label for="text_field">Name</label>
            </th>
            <th colspan="2">
                <input id="Name" type="text" placeholder="Name" required name="Name">
            </th>
        </tr>
        <tr>
            <th>
                <label for="e_mail">E-mail</label>
            </th>
            <th colspan="2">
                <input id="e_mail" type="text" placeholder="e_mail" name="e_mail" required>
            </th>
        </tr>
        <tr>
            <th>
                <label for="text_area">Напишите нам!</label>
            </th>
            <th colspan="2">
                <textarea cols="22" rows="12" id="text_area" name="text_area"></textarea>
            </th>
        </tr>
        <tr>
            <th>
                <legend>Пол</legend>
            </th>
            <th>
                <label><input type="radio" name="sex">Мужской</label>
            </th>
            <th>
                <label><input type="radio" name="sex">Женский</label>
            </th>
        </tr>
        <tr>
            <th>
                <legend>Дата рождения</legend>
            </th>
            <th colspan="2"><input type="date" placeholder="дд.мм.гггг"></th>
        </tr>
        <tr>
            <th>
                <legend>Уровень вашего катания</legend>
            </th>
            <th colspan="2">
                <select> 
									<option value="1">Beginner</option>
									<option value="1">Intermediate</option>
									<option value="1">Competent</option>
									<option value="1">Top World Surfer</option>
								</select>
            </th>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit" value="Отправить">
            </th>
            <th>
                <input type="reset" value="Сбросить">
            </th>
        </tr>
    </table>
</form>
<br>
</div>
