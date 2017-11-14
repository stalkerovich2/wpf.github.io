<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content1-type" content1="text/html; charset=windows-1251" /> 
<meta http-equiv="content1-type" content1="text/html; charset=utf8" />
<link href= "../css/style.css" rel="stylesheet">
<title>Главная</title>
    </head>
<body>
		<?php require("../inc/head.inc");?>
		<?php require("../inc/hleb.inc");?>
<table	class="table_verst">
    <tr>		
		<td class="menu">		
	<?php require("../inc/left_meny.inc");?>	
			</td>
        <td class="content1">
		<div  class="zaglav">Лабараторная работа 4</div>	
<h1>Цель:</h1>
<p>
Разработать форму с элементами управления, содержащими объекты разного типа.
</p>
<h1>Задание: создать 5 кнопок с разными оъектами внутри. 1 копка содержит "CheckBox",
2 кнопка "img", 3 кнопка "img" и "TextBox", 4 кнопка "TextBlock", 5 кнопка содержит:"CheckBox","img","TextBox","TextBlock".</h1>
<p>Добавьте в окно дизайнера проекта 5 кнопок (<a href="#r1">Рис. 1</a>), вписав <a  style="color: #ff6600;"><strong>в контейнер Grid</strong></a>следующий код:</p><div class="kodx">
<pre>
	&lt;StackPanel MinWidth="250"&gt;
	&lt;Button Margin="5" Padding="5"&gt;&lt;/Button&gt;
	&lt;Button Margin="5" Padding="5"&gt;&lt;/Button&gt;
	&lt;Button Margin="5" Padding="5"&gt;&lt;/Button&gt;
	&lt;Button Margin="5" Padding="5"&gt;&lt;/Button&gt;
	&lt;Button Margin="5" Padding="5"&gt;&lt;/Button&gt;
	&lt;/StackPanel&gt;
</pre></div>
<p>При помощи свойства  <a  style="color: #ff6600;"><strong>"Name"</strong></a> зададим имена каждой кнопке. Например:</p><div class="kodx">
<pre>
	 &lt;Button Name="btn1" .../&gt;
</pre></div>
<div id="statya">
	<h3 id="r1">Рис. 1 Кнопки</h3>
   <img id="img" src="../img/r1_lab3.png">
</div>
<p>Добавим во внутрь первой кнопки"<a  style="color: #ff6600;"><strong>btn1</strong></a>" объект <a  style="color: #ff6600;"><strong>"CheckBox"</strong></a>.</p><div class="kodx">
<pre>
	&lt;Button Name="btn1" Margin="5" Padding="5"&gt;
	&lt;CheckBox x:Name="checkBox" 
	Content=" объект CheckBox" HorizontalAlignment="Left"
	VerticalAlignment="Top"/&gt;
	&lt;/Button>
</pre></div>
<div id="statya">
	<h3 id="r2">Рис. 2 "CheckBox" внутри "btn1"</h3>
   <img id="img" src="../img/r2_lab3.png">
</div>
<p>Добавим изображение на 2 кнопку, но прежде чемэто сделать изображение необходимо добавить в ресурсы (<a  style="color: #ff6600;"><strong>Resources</strong></a>).</p>
<p>Скачиваем из интернет источника любую, понравившуюся картинку.</p>
<p>В окне <a  style="color: #ff6600;"><strong>"Образователь решений"</strong></a> двойным кликом нажимаем <a  style="color: #ff6600;"><strong>"Properties"</strong></a>.</p>
<div id="statya">
	<h3 id="r2">Рис. 3 Образователь решений</h3>
   <img id="img" src="../img/r3_lab3.png">
</div>
<p>В открывшемся окне выберите вкладку ресурсы ( <a href="#r1">Рис. 4</a>) и перенисите свое скаченное изображение в белую область. </p>
<div id="statya">
	<h3 id="r4">Рис. 4 Ресурсы</h3>
   <img id="img" src="../img/r4_lab3.png">
</div>
<p>После закройте окно, сохранив проделанные действия. В образователе решений должно появиться ваше изображение.</p>
<div id="statya">
	<h3 id="r5">Рис. 5 Добавленый ресурс в образователе решений</h3>
   <img id="img" src="../img/r5_lab3.png">
</div>
<p>После проделанных действий добавим 2 кнопке наше загруженное изображение:</p><div class="kodx">
<pre>
	&lt;Button Name="btn2" Margin="5" Padding="5"&gt;
	&lt;Image x:Name="image" Source="Resources/smile.jpg" Height="120" Width="150"/&gt;
	&lt;/Button>
</pre></div>
<p>В обозревателе решений выберите это изображение и в свойствах файла <a  style="color: #ff6600;"><strong>"Действие при сборке" выбрать пункт "Resourse"</strong></a>.  </p>
<div id="statya">
	<h3 id="r6">Рис. 6 Настройка картинки, как ресурса</h3>
   <img id="img" src="../img/r6_lab3.png">
</div>
<p>На 3 кнопку добавим "img" и "TextBox", заключив их в "StackPanel " для компановки наших вложенных объектов.</p>
<p>Самостоятельно добавьте в ресурсы "Resources" новое изображение.</p>
<p>Добавляем объекты на кнопку 3 "btn3":</p><div class="kodx">
<pre>
	&lt;Button Name="btn3" Margin="5" Padding="5"&gt;
	&lt;StackPanel&gt;
	&lt;Image x:Name="image2" Source="Resources/derevo.png" Height="50" Width="50"/&gt;
	&lt;TextBox>Дерево&lt;/TextBox&gt;
	&lt;/StackPanel&gt;
	&lt;/Button&gt;
</pre></div>
<p>На кнопке 4 добавим "TextBlock":</p><div class="kodx">
<pre>
	&lt;Button Name="btn4" Margin="5" Padding="5"&gt;
	&lt;TextBlock>Hello!!&lt;/TextBlock&gt;
	&lt;/Button>
</pre></div>
<p>В 5 кнопку добавить:"CheckBox","img","TextBox","TextBlock" самостоятельно. В ресурсы загрузить новую картинку. Если будет недостаточно места, то в свойствах <a  style="color: #ff6600;"><strong>"Title="MainWindow" Height="512.861" Width="525">"</strong></a> измените размер окна проекта.</p>
<h1>Заключение:</h1>
<p>Результатом лабораторной работы является разработанная форма с кнопками, содержащими разные типы объектов. Рассмотрена загрузка ресурсов в проект.</p>
<div class="btn_lab_and_lection"><a href="../projects/lr4.rar">Посмотреть результат</a></div>
<div class="btn_lab_and_lection"><a href="../page/teoria_2_2.php">Перейти к теоретической части</a></div>
	</td>
    </tr>	
</table>
</body>
</html>