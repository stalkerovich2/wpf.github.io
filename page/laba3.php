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
		<div  class="zaglav">Лабараторная работа 3</div>		
<h1>Цель:</h1>
<p>
Разработать приложение с использованием стилей и анимации.
</p>
	<h1>Задание: Необходимо создать такие объекты как: ellipse в количестве 2х штук, 1 Rectangle и 2 button. Оформить внешний вид, созданных объектов. Задать анимацию движения окружностей при нажатии на кнопки.</h1>
<p>Добавьте в окно дизайнера проекта объект <a  style="color: #ff6600;"><strong>Rectangle</strong></a>, вписав <a  style="color: #ff6600;"><strong>в контейнер Grid</strong></a>следующий код:</p><div class="kodx">
<pre>
	&lt;Rectangle/&gt;
</pre></div>
<p>Для задания определенных параметров(размер, отступ, цвет заливки, цвет обводки), созданнго квадрата, нам необходимо создать стиль <a  style="color: #ff6600;"><strong>перед контейнером Grid</strong></a>.</p>
<div class="kodx">
<pre>
	&lt;Style TargetType="Rectangle"&gt;
	&lt;Setter Property="Shape.Stroke" Value="Blue"&gt;&lt;/Setter&gt;
	&lt;Setter Property="StrokeThickness" Value="5"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Fill" Value="Pink"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Width" Value="200"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Height" Value="200"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Margin" Value="392,135,400,134"&gt;&lt;/Setter&gt;
	&lt;/Style&gt;
</pre></div>
В результате мы получим вот такой квадрат ( <a href="#r1">Рис. 1</a>):
<div id="statya">
	<h3 id="r1">Рис. 1 Квадрат с примененными стилями</h3>
   <img id="img" src="../img/r1_lab2.png">
</div>
<p>Добавим в контейнер окружность"<a  style="color: #ff6600;"><strong>Ellipse</strong></a>". Зададим ему <a  style="color: #ff6600;"><strong>уникальный индентификатор</strong></a> : x:Name=<a  style="color: #ff6600;"><strong>"GradientElipse"</strong></a>.</p><div class="kodx">
<pre>
	&lt;Ellipse x:Name="GradientElipse"/&gt;
</pre></div>
<p>Т.к. наш градиент будет применяться только к конкретному объекту, создается уникальный индентификатор для его стиля:<a  style="color: #ff6600;"><strong>x:Name="NameStyle"</strong></a>.</p>
<p>Создаем стиль для окружности:</p><div class="kodx">
<pre>
	&lt;Style TargetType="Ellipse" x:Key="GradientElipse"&gt;
	&lt;Setter Property="Shape.Stroke" Value="{StaticResource gradient}"&gt;&lt;/Setter&gt;
	&lt;Setter Property="StrokeThickness" Value="4"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Fill" Value="{StaticResource gradient}"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Width" Value="200"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Height" Value="200"&gt;&lt;/Setter&gt;
	&lt;Setter Property="Margin" Value="392,135,400,134"&gt;&lt;/Setter&gt;
	&lt;/Style&gt;
</pre></div>
<p>В созданном стиле у нас появляется новый нюанс. Цвет градиента:<a  style="color: #ff6600;"><strong> &lt;Setter Property="Shape.Stroke" Value="{StaticResource gradient}"&gt;&lt;/Setter&gt;</strong></a>. В Вместо цвета, мы обращаемся к статическому ресурсу:<a  style="color: #ff6600;"><strong> Value="{StaticResource gradient}" </strong></a>. Наша задача создать этот ресурс, отвечающий за параметры градиентной заливки. Также не забудем добавить ему уникальный индентификатор.</p>
<p>Перед контейнероми со стилями создадим новый контейнер <a  style="color: #ff6600;"><strong>"&lt;LinearGradientBrush/&gt;"</strong></a>.</p><div class="kodx">
<pre>
	&lt;LinearGradientBrush x:Key="gradient"&gt;
	&lt;GradientStop Color="Purple" Offset="0.3"/&gt;
	&lt;GradientStop Color="Orange" Offset="0.86"/&gt;
	&lt;GradientStop Color="White" Offset="0.15"/&gt;
	&lt;/LinearGradientBrush&gt;
</pre></div>
<p>Окружность пока не видна, т.к. она расположилась под квадратом. Если нетерпится просмотреть результат, примененного стиля, то кликните 1 раз по квадрату, в его <a  style="color: #ff6600;"><strong>свойствах</strong></a> выберите вкладку <a  style="color: #ff6600;"><strong>"Внешний вид"</strong></a> , выбрать параметр <a  style="color: #ff6600;"><strong>"Visible"</strong></a> и выбрать в нем свойство <a  style="color: #ff6600;"><strong>"Hidden"</strong></a>. В результате мы получим такой круг ( <a href="#r1">Рис. 2</a>):</p>
<div id="statya">
	<h3 id="r2">Рис. 2 Градиентная окружность</h3>
   <img id="img" src="../img/r2_lab2.png">
</div>
<p>Аналогичным способом создайте зеленую окружность и так же разместитее под квадратом.</p>
<p>Поверх квадрата создадим 2 кнопки и зададим им стили.</p>
<p><a  style="color: #ff6600;"><strong>1 Кнопка "Показать градиентный шарик"</strong></a> будет иметь параметры:</p>
<ul id="spisok">
	<li>
	Уникальный индентификатор - "gradient_btn" ;
	</li>
	<li>
	Уникальный индентификатор стиля - "VivodgradientElips";
	</li>
	<li>
	Отступ от границ проекта - "418,150,424,219";
	</li>
	<li>
	Длинну - "150xp";
	</li>
	<li>
	Высоту - "100xp";
	</li>
	<li>
	Шрифт(FontWeight) - жирный(Bold); 
	</li>
	<li>
	Тип шрифта - "Segoe Print".
	
</ul>
<p></p>
<p><a  style="color: #ff6600;"><strong>2 Кнопка "Показать зеленый шарик"</strong></a> будет иметь параметры:</p>
<ul id="spisok">
	<li>
	Уникальный индентификатор - "greenElipse_btn" ;
	</li>
	<li>
	Уникальный индентификатор стиля - "VivodgreenElipse";
	</li>
	<li>
	Отступ от границ проекта - "418,270,424,147";
	</li>
	<li>
	Длинну - "150px";
	</li>
	<li>
	Высоту - "45xp";
	</li>
	<li>
	Шрифт(FontWeight) - жирный(Bold); 
	</li>
	<li>
	Тип шрифта - "Segoe Print".	
</ul>
<p>После проделанной работы мы должны видеть на экране основную форму нашей программы:</p>
<div id="statya">
	<h3 id="r3">Рис. 3 Форма программы</h3>
   <img id="img" src="../img/r3_lab2.png">
</div>
<p>Создав все необходимые объекты и применив к ним стили, добавим анимацию движения окружностям. При нажатии на одну из кнопок окружность будет выдвигаться из за квадрата.</p>
<p>Кликните <a  style="color: #ff6600;"><strong>2м щелчком по кнопке "Показать градиентный шарик"</strong></a>, откроется обработчик событий. В событии для кнопки введите следующий код:</p>
<div class="kodc">
<pre>
	private void Button_Click(object sender, RoutedEventArgs e)
	{
	var animation = new ThicknessAnimation();
	animation.From = new Thickness(392, 135, 400, 134);
	animation.To = new Thickness(256, 20, 20, 30);
	animation.Duration = TimeSpan.FromSeconds(5);
	GradientElipse.BeginAnimation(MarginProperty, animation);
	}
</pre>
</div>
<p>Проделайте самостоятельно тоже самое и со второй кнопкой. Запустите проект и посмотрите результат.</p>
<h1>Заключение:</h1>
<p>В данной лабараторной работе были рассмотрены способы стилизации объектов, что является очень удобным. Данный способ позволяет быстрее стилизовать большое количество объектов без повторения кода на каждый из них. Для придания более интересного представления приложения, рассмотрен один из способов анимации объектов.</p>
<div class="btn_lab_and_lection"><a href="../projects/lr3.rar">Посмотреть результат</a></div>
<div class="btn_lab_and_lection"><a href="../page/teoria_3_2.php">Перейти к теоретической части</a></div>
	</td>
    </tr>	
</table>


</body>
</html>