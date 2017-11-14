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
		<div  class="zaglav">Лабараторная работа 2</div>	
<h1>Цель:</h1>
<p>
В процессе выполнения работы необходимо разработать страничное/оконное WPF приложение.
</p>
	<h1>Задание: Создать проект в соответствии с шаблоном "приложение WPF" и разработать интерфейс пользователя</h1>
<p>Для разработки приложения необходимо создать WPF-проект ( <a href="#r1">Рис. 1</a>). В окне " Создать проект " необходимо проверить установку <a  style="color: #ff6600;"><strong>библиотеки .NET Framework 4</strong></a> (1 – <a href="#r1">Рис. 1</a>), выбрать <a  style="color: #ff6600;"><strong>шаблоны Windows</strong></a> (2 – <a href="#r1">Рис. 1</a>), а среди имеющихся шаблонов задать Приложение WPF и в поле <a  style="color: #ff6600;"><strong>" Имя "</strong></a>  ввести имя проекта WpfApplProject.</p>
<div id="statya">
	<h3 id="r1">Рис. 1 Окно создания проекта</h3>
   <img id="img" src="../img/r1_lab1.png">
</div>
<p>После нажатия кнопки "ОК" будет сформирован шаблон проекта. При этом инструментальная система сгенерирует следующий XAML-документ:</p>
<div class="kodx">
<pre>
	&lt;Window x:Class="WpfApplProject.MainWindow"
	xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
	xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
	Title="MainWindow" Height="350" Width="525"&gt;
	&lt;Grid&gt;   
	&lt;/Grid&gt;
	&lt;/Window&gt;
</pre></div>
<p>Дизайнер проекта приведен на <a href="#r2">Рис. 2.</a></p>
<div id="statya">
	<h3 id="r2">Рис. 2 Окно дизайнера проекта</h3>
   <img id="img" src="../img/r2_lab1.png">
</div>
<p>В приведенном XAML-документе имеется один элемент верхнего уровня <a  style="color: #ff6600;"><strong>&lt;Window&gt;  </strong></a>. Дескриптор <a  style="color: #ff6600;"><strong>&lt;/Window&gt;</strong></a> завершает весь документ. В XAML-документе приведено имя класса MainWindow</p><div class="kodx">
<pre>
	x:Class="WpfApplProject.MainWindow
</pre></div>
<p>два пространства имен</p><div class="kodx">
<pre>
	xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
	xmlns:x=http://schemas.microsoft.com/winfx/2006/xaml
</pre></div>
<p>и три свойства:</p><div class="kodx">
<pre>
	Title="MainWindow" Height="350" Width="525"
</pre></div>
<p>Каждый атрибут соответствует определенному свойству класса Window. Приведенные атрибуты предписывают WPF создать окно с надписью MainWindow и размером 350х525 единиц. При компиляции и запуске проекта приложения на дисплей выводится окно, приведенное на <a href="#r3">Рис. 3.</a></p>
<div id="statya">
	<h3 id="r3">Рис. 3 Окно MainWindow проекта</h3>
   <img id="img" src="../img/r3_lab1.png">
</div>
<p>Когда выполняется компиляция приложения, XAML-файл, который определяет пользовательский интерфейс ( MainWindow.xaml ), транслируется в объявление типа CLR , которое объединяется с логикой приложения из файла класса отдельного кода ( MainWindow.xaml.cs ).</p>
<p>Метод InitializeComponent() генерируется во время компиляции приложения и в исходном коде не присутствует.</p>
<p>Для программного управления элементами управления, описанными в XAML-документе, необходимо задать XAML атрибут Name. Так для задания имени элементу Grid необходимо записать следующую разметку:</p><div class="kodx">
<pre>
	&lt;Grid Name="grid"&gt;
	&lt;/Grid&gt;
</pre></div>
<p>Страницы приложения можно размещать внутри окон и внутри других страниц. В WPF при создании страничных приложений контейнером наивысшего уровня могут быть следующие объекты:</p>
<ul id="spisok">
	<li>
	NavigationWindow, который представляет собой несколько видоизмененную версию класса Window ;
	</li>
	<li>
	Frame, находящийся внутри другого окна или другой страницы;
	</li>
	<li>
	Frame, обслуживаемый непосредственно в Internet Explorer.
	</li>
</ul>
<p>Для вставки страницы внутрь окна будем использовать класс Frame ( <a href="#r4">Рис. 4.</a>). Автоматически будет сгенерирован экземпляр класса Frame с фиксированными границами <a href="#r5">Рис. 5.</a>).</p>
<div id="statya">
	<h3 id="r4">Рис. 4 Выбор класса Frame в панели инструментов</h3>
   <img id="img" src="../img/r4_lab1.png">
</div>
<div id="statya">
	<h3 id="r5">Рис. 5  Фрейм с фиксированными границами</h3>
   <img id="img" src="../img/r5_lab1.jpg">
</div>
<p>В XAML-документ проекта будет добавлена следующая строка:</p><div class="kodx">
<pre>
	&lt;Frame Height="100" HorizontalAlignment="Left" 
	Name="frame1" VerticalAlignment="Top" Width="200" /&gt;
</pre></div>
<p>С учетом того, что создается страничное приложение размеры фрейма не нужно фиксировать, поэтому изменим описание свойств фрейма:</p><div class="kodx">
<pre>
	&lt;Frame Name="frame1" Margin="3" /&gt;
</pre></div>
<p>В результате фрейм заполнит всё окно ( <a href="#r6">Рис. 6.</a>):</p>
<div id="statya">
	<h3 id="r6">Рис. 6  Фрейм, заполняющий всё окно</h3>
   <img id="img" src="../img/r6_lab1.png">
</div>
<p>Созданный фрейм необходим для размещения в нем страницы WPF-приложения. Класс Page допускает наличие только одного вложенного элемента. Он не является элементом управления содержимым и наследуется от класса FrameworkElement. Класс Page имеет небольшой набор дополнительных свойств, которые позволяют настраивать его внешний вид, взаимодействовать с контейнером и использовать навигацию. Для перехода на другую страницу необходимо использовать навигацию.</p>
<p>Добавьте в проект начальную страницу. Для этого в Обозревателе решений щелкните правой кнопкой мыши на проекте WpfApplProject. В контекстном меню выберите пункт Добавить (1 – на <a href="#r7">Рис. 8.</a>), а в раскрывающимся меню - пункт Страница (2 на <a href="#r8">Рис. 7.</a>).</p>
<p>В окне Добавления нового элемента необходимо выбрать шаблон " Страница (WPF) " (1) и задать имя страницы PageMain (2 на  <a href="#r7">Рис. 8.</a>).</p>
<div id="statya">
	<h3 id="r8">Рис. 7  Окно Добавления нового элемента</h3>
   <img id="img" src="../img/r8_lab1.jpg">
</div>
<div id="statya">
	<h3 id="r7">Рис. 8  Окно Добавления нового элемента</h3>
   <img id="img" src="../img/r7_lab1.png">
</div>
<p>В дизайнере проекта сгенерируется страница PageMain.xaml ( <a href="#r9">Рис. 9</a>).</p>
<div id="statya">
	<h3 id="r9">Рис. 9  Дизайнер страницы PageMain.xaml</h3>
   <img id="img" src="../img/r9_lab1.png">
</div>
<p>В сгенерированной странице в качестве контейнера верхнего уровня используется Grid. Замените Grid на контейнер StackPanel.</p>
<p>Вернитесь в MainWindow.xaml и добавьте фрейму ссылку на созданную страницу <a  style="color: #ff6600;"><strong> Source="PageMain.xaml"</strong></a></p>
<div id="statya">
	<h3 id="r11">Рис. 10  Окно MainWindow</h3>
   <img id="img" src="../img/r11_lab1.png">
</div>
<p>Главная страница приложения в дизайнере представлена на <a href="#r10">Рис. 11</a></p>
<div id="statya">
	<h3 id="r10">Рис. 11  Главная страница WPF-приложения в дизайнере</h3>
   <img id="img" src="../img/r10_lab1.jpg">
</div>
<p></p><div class="kodx">
<pre>
	&lt;Hyperlink &gt;Текст Гиперссылки&lt;/Hyperlink&gt;
</pre></div>
<p>Класс Hyperlink имеет свойство NavigateUri. Данное свойство определяет на какую страницу будет переходить приложение при щелчке на соответствующей гиперссылке.В WPF гиперссылки являются не отдельными, а внутристроковыми потоковыми элементами, которые должны размещаться внутри другого поддерживающего их элемента. Это можно сделать, например в элементе TextBlock, который для гиперссылки является контейнером. Например:</p><div class="kodx">
<pre>
	&lt;TextBlock Margin="5"&gt;&lt;Hyperlink NavigateUri="page1.xaml"&gt;
	&lt;Run Text="Перейти на страничку главная"/>&lt;/Hyperlink&gt;
	&lt;/TextBlock&gt;
</pre></div>
<p>Создайте страницу <a  style="color: #ff6600;"><strong>tovar</strong></a>. Разместите на ней сдледующие элементы:<a  style="color: #ff6600;"><strong>ListBox, TextBox и Button</strong></a><a href="#r12">(Рис. 12).</a> </p>
<div id="statya">
	<h3 id="r12">Рис. 12  Страница Tovar  с новыми элементами</h3>
   <img id="img" src="../img/r12_lab1.png">
</div>
<p>Сделайте <a  style="color: #ff6600;"><strong>2й клик по кнопке " Добавить товар"</strong></a></p>
<p>Откроется обработчик. Впишите команды, выполняемые при нажатии, созданной кнопки<a href="#r13">(Рис. 13).</a>.</p>
<div id="statya">
	<h3 id="r13">Рис. 13  Обработчик</h3>
   <img id="img" src="../img/r13_lab1.png">
</div>
<div class="btn_lab_and_lection"><a href="../projects/lr2.rar">Посмотреть результат</a></div>
<div class="btn_lab_and_lection"><a href="../page/teoria_3_1.php">Перейти к теоретической части</a></div>
	</td>
    </tr>	
</table>


</body>
</html>