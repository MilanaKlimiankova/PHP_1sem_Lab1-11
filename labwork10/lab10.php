<html>
<head>
 <meta charset="utf-8">
 <title>Лабораторная работа 10</title>
 <link type="text/css" rel="stylesheet" href="style.css">
 <meta charset="utf-8" />
</head>
<body>
 <div class="title">
 <h1>
Лабораторная работа 10
 </h1>
<!-- 1.На  HTML-форме  вывести список  с единственным выбором,  в  которомперечисляются даты. При выборе датыв форме должна выводиться информация, какой праздник в этот день. -->
 <form method="post" action="task1.php">
 	<p>Выберите дату:<br><br>
 	<select name = 'task1'>
 	  <option value = '25dec'>25 декабря</option>
	  <option value = '31dec'>31 декабря</option>
	  <option value = '8mar'>8 марта</option>
	  <option value = '15mar'>15 марта</option>
	  <option value = '1may'>1 мая</option>
	  <option value = '1sep'>1 сентября</option>
	</select>
	<div id = 'holiday'></div></p>
	<input type = 'submit' value = 'Отправить' class='c'>
 </form>
<!-- 2. Необходимо создать форму с тестом (тему теста выбрать самостоятельно, у всех должна  быть  разная).  Обязательные  поля:  ФИО, email,  номер  телефона  (проверить регулярными выражениями). Необходимо использовать текстовые поля, переключатели radio и checkbox, а также многострочные текстовые поля, списки с единственным и множественным выбором. Ответы пользователя отправить на сервер, проверить, если поля заполнены верно, посчитать набранные баллы и вывести на новую страницу результатвместе с ответами пользователя (правильные ответы вывести текстом зеленого цвета, неправильные –красного), в противном случае вывести сообщение, где допущена ошибка при заполнении.ФИО пользователя записать в сессию. -->
 <form method="post" action="check.php">
	<p>Тест на внимательность</p>
	<p>ФИО:* <input name = 'name' placeholder="Иванов Иван Иванович" required><br>

	<p>E-mail:* <input name='email' placeholder="xxxxx@xxx.xx" pattern="^\w+([\.\w]+)*\w@\w((\.\w)*\w+)*\.\w{2,3}$" required><input name="spam" type="checkbox" checked> хочу получать уведомления по почте<br>

	<p>Номер телефона:* <input name = 'number' placeholder="(хх) ххх-хх-хх" pattern="\((\d{2})\)\s+(\d{3}-\d{2}-\d{2})" required><br>

	<p>Рассмотри изображение и ответь на вопросы:<br>
	<img src="1.jpg"></p>

	<p>1. Какое сейчас время года?
	<input name="quest1" type="radio" value="winter" checked>Зима 
	<input name="quest1" type="radio" value="spring">Весна 
	<input name="quest1" type="radio" value="summer">Лето 
	<input name="quest1" type="radio" value="autumn">Осень </p>
   
	<p>2. Конкретизируем вопрос – какой сейчас месяц? 
	<select name="quest2" >
	  <option value="Январь">Январь</option>
	  <option value="Февраль">Февраль</option>
	  <option value="Март">Март</option>
	  <option value="Апрель">Апрель</option>
	  <option value="Май">Май</option>
	  <option value="Июнь">Июнь</option>
	  <option value="Июль">Июль</option>
	  <option value="Август">Август</option>
	  <option value="Сентябрь">Сентябрь</option>
	  <option value="Октябрь">Октябрь</option>
	  <option value="Ноябрь">Ноябрь</option>
	  <option value="Декабрь">Декабрь</option>
	</select></p>

	<p>3. Есть ли в квартире водопровод? 
	<input name="quest3" type="radio" value="yes" checked>Да 
	<input name="quest3" type="radio" value="no">Нет </p>

	<p>4. В квартире живут только мальчик и его папа или есть еще кто-то? Если да, то кто? <br><br>
	<select size="7" multiple name="quest4[]">
	    <option disabled>Выберите один или несколько вариантов</option>
	    <option selected value='папа и мальчик'>Папа и мальчик</option>
	    <option value="мама">Мама</option>
	    <option value="девочка">Девочка</option>
	    <option value="дедушка">Дедушка</option>
	    <option value="бабушка">Бабушка</option>
    </select></p>

	<p>5. Кем работает папа? <input name = 'quest5'></p>

	<p>Оставьте отзыв о тесте: <br>
	<textarea name="quest6"></textarea></p>

	<input type = 'submit' value = 'Отправить' class = 'c'>
 </form>

</body>
</html>
