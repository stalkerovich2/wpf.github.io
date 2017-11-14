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
		<div  class="zaglav">Шаблоны</div>
<p>При проектировании WPF-приложений окна или страницы являются контейнерами, в которых располагаются другие контейнеры и различные интерфейсные элементы (метки, текстовые блоки, кнопки, списки и другие элементы управления). Например, создается окно с одной кнопкой (<a href="#r1">Рис. 1</a>).</p>
<div id="statya">
	<h3 id="r1">Рис. 1 Окно с одной кнопкой</h3>
   <img id="img" src="../img/r1_4_1.jpg">
</div>
<p>XAML-документ описания созданного окна имеет следующий вид.</p><div class="kodx">
<pre>
	&lt;Window x:Class="WpfApplication1.MainWindow"
	xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
	xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
	Title="MainWindow" Height="200" Width="300"&gt;
	&lt;Grid&gt;
	&lt;Button Content="Кнопка" Width="100" Height="50"/&gt;
	&lt;/Grid&gt;
	&lt;/Window&gt;
</pre>
</div>
<p>В XAML-документе окна присутствуют три объекта: Window, Grid и Button. Данные элементы образуют логическое дерево окна (<a href="#r2">Рис. 2</a>)</p>
<div id="statya">
	<h3 id="r2">Рис. 2 Логическое дерево окна</h3>
   <img id="img" src="../img/r2_4_1.jpg">
</div>
<p>В WPF логическое дерево детализируется с помощью визуального дерева, которое представляет элементы логического дерева в виде более мелких фрагментов. Так кнопка на уровне визуального дерева инкапсулирована в виде прямоугольника, включающего границу (класс ButtonChrome ), содержание (класс ContentPresenter ) и блок с текстом (класс TextBlock на <a href="#r3">Рис. 3</a>).</p>
<p>В общем случае существует более одного способа для расширения логического дерева до визуального. Так элемент управления Button, являясь элементом управления содержимым, может включать любой другой элемент, что будет влиять на его визуальное дерево.</p>
<p>Визуальное дерево позволяет изменять некоторые его элементы с помощью стилей и создавать для элементов управления новые шаблоны.</p>
<p>В WPF существуют шаблоны элементов управления, шаблоны данных и специализированные шаблоны панели.</p>
<div id="statya">
	<h3 id="r3">Рис. 3  Визуальное дерево окна</h3>
   <img id="img" src="../img/r3_4_1.jpg">
</div>
<p>Шаблон элементов управления ControlTemplate применяется для задания представления и визуального поведения элементов управления.</p>
<p>Шаблон данных DataTemplate применяется для извлечения данных из объекта и их отображения в элементах управления содержимым.</p>
<p>Шаблоны панелей Hierarchical DataTemplate применяются для управления компоновкой элементов в элементах управления типа список.</p>
<h1>Шаблоны элементов управления</h1>
<p>Каждый элемент управления имеет свойство Template, которое определяет шаблон для его визуализации. Если данное свойство явно не задано, то применяется стандартный шаблон элемента управления, который определен в WPF. Для создания пользовательского шаблона элемента управления необходимо определить объект ControlTemplate.</p><div class="kodx">
<pre>
	&lt;ControlTemplate x:Key="КлючШаблона" TargetType="ТипЭлемента"&gt;
	... 
	&lt;/ControlTemplate&gt;
</pre></div>
<p>Атрибут x:Key определяет ключ по которому ссылаются на шаблон, а TargetType определяет тип элемента, для которого создается шаблон.</p>
<p>Простейший шаблон для кнопки представлен далее.</p><div class="kodx">
<pre>
	&lt;ControlTemplate x:Key="ButtonTemplate" TargetType="Button"&gt;
	&lt;Border BorderBrush="Blue" BorderThickness="3" 
	CornerRadius="25" Background="Azure" TextBlock.Foreground="Green"&gt;
	&lt;ContentPresenter HorizontalAlignment="Center" VerticalAlignment="Center"/&gt;
	&lt;/Border&gt;
	&lt;/ControlTemplate&gt;
</pre></div>
<p>Элемент ContentPresenter определяет место вставки содержимого элемента управления в контейнере (в примере контейнером является рамка – Border ).</p>
<p>Шаблон элемента управления можно разместить в коллекции ресурсов окна.</p><div class="kodx">
<pre>
	&lt;Window.Resources&gt;
	&lt;ControlTemplate x:Key="ButtonTemplate" TargetType="Button"&gt;
	...
	&lt;/ControlTemplate&gt;   
	&lt;/Window.Resources&gt;
</pre></div>
<p>Привязка шаблона к элементу управления производится заданием свойства Template данного элемента.</p><div class="kodx">
<pre>
	&lt;Grid&gt;
	&lt;Button Content="Кнопка" Width="100" Height="50" 
	Template="{StaticResource ButtonTemplate}"/&gt;
	&lt;/Grid&gt;
</pre></div>
<p>Свойство Template определяется расширением разметки для ссылки на статический ресурс ( StaticResource ) по ключу ресурса ( ButtonTemplate ). При запуске проекта кнопка будет иметь вид, представленный на <a href="#r4">Рис. 4</a></p>
<div id="statya">
	<h3 id="r4">Рис. 4 Представление кнопки с пользовательским шаблоном</h3>
   <img id="img" src="../img/r4_4_1.jpg">
</div>
<p>Вышеприведенный шаблон определяет статическое визуальное представление кнопки. Для добавления динамического визуального поведения кнопки можно использовать триггеры шаблонов. Добавим в шаблон триггер, который будет изменять заливку фона кнопки на красный цвет при наведении на неё указателя мыши, а также менять при этом цвет надписи на белый.</p><div class="kodx">
<pre>
	&lt;ControlTemplate x:Key="ButtonTemplate" TargetType="Button"&gt;
	&lt;Border Name="Border" BorderBrush="Blue" BorderThickness="3"
	CornerRadius="25" Background="Azure" TextBlock.Foreground="Green"&gt;
	&lt;ContentPresenter HorizontalAlignment="Center" VerticalAlignment="Center"/&gt;
	&lt;/Border&gt;
	&lt;ControlTemplate.Triggers&gt;
	&lt;Trigger Property="IsMouseOver" Value="true"&gt;
	&lt;Setter TargetName="Border" Property="Background" Value="Red" /&gt;
	&lt;Setter TargetName="Border" 
	Property="TextBlock.Foreground" Value="White" /&gt;
	&lt;/Trigger&gt;
	&lt;/ControlTemplate.Triggers&gt;
	&lt;/ControlTemplate&gt;
</pre></div>
<p>При наступлении события MouseOver свойство IsMouseOver принимает значение true, в результате чего срабатывает триггер и изменяются свойства Background и TextBlock.Foreground кнопки соответственно на Red и White. При установке свойств Background и TextBlock.Foreground в элементе TargetName указывается имя Border, которое присвоено элементу Border в шаблоне. На <a href="#r5">Рис. 5 </a> приведено представление кнопки при наведении на неё мыши.</p>
<div id="statya">
	<h3 id="r5">Рис. 5 Представление кнопки при наведении на неё мыши</h3>
   <img id="img" src="../img/r5_4_1.jpg">
</div>
<p>С помощью триггеров можно задать реакцию визуального поведения элементов управления на необходимые события.</p>
<h1>Шаблоны данных</h1>
<p>Шаблон данных – это часть XAML-разметки, которая определяет, как должен отображаться привязанный объект данных. Шаблон данных может включать любую комбинацию элементов и должен содержать одно или более выражение привязки.</p>
<p>Шаблоны данных поддерживают следующие элементы управления:</p>
<ul id="spisok">
	<li>
	элементы управления содержимым через свойство ContentTemplate, которое применяется для визуализации любого содержимого помещенного в Content ;
	</li>
	<li>
	списковые элементы управления через свойство ItemTemplate, для визуализации элементов из коллекции, указанной в качестве источника данных.
	</li>
</ul>
<p>Для примера разработаем шаблон данных для списка ListBox. В списке должны отображаться данные по сотруднику: фамилия, имя и отчество. Источником данных для списка listBoxEmployees является коллекция Employees, которая содержит классы Employee. Свойствами класса Employee являются:</p>
<ul id="spisok">
	<li>
	Surname – фамилия;
	</li>
	<li>
Name - имя;
	</li>
	<li>
	Patronymic – отчество.
	</li>
</ul>
<p>Шаблон данных для списка listBoxEmployees имеет следующий вид.</p><div class="kodx">
<pre>
	&lt;ListBox Name="listBoxEmployees" &gt;
	&lt;ListBox.ItemTemplate&gt;
	&lt;DataTemplate&gt;
	&lt;StackPanel Orientation="Horizontal"&gt;
	&lt;TextBlock Text="{Binding Path=Surname}" /&gt;
	&lt;TextBlock Text="{Binding Path=Name}" /&gt;
	&lt;TextBlock Text="{Binding Path=Patronymic}" /&gt;
	&lt;/StackPanel&gt;
	&lt;/DataTemplate&gt;
	&lt;/ListBox.ItemTemplate&gt;
	&lt;/ListBox&gt;
</pre></div>
<p>При запуске программы в окне выводится список, приведенный на <a href="#r6">Рис. 6 </a></p>
<div id="statya">
	<h3 id="r6">Рис. 6 Представление списка с пользовательским шаблоном данных</h3>
   <img id="img" src="../img/r6_4_1.jpg">
</div>
<p>Для многократного использования шаблона данных его можно задать в виде ресурса окна или приложения, указав ключ шаблона ( ListBoxEmployee ).</p><div class="kodx">
<pre>
	&lt;Application.Resources&gt;
	&lt;DataTemplate x:Key="ListBoxEmployee" &gt;
	... 
	&lt;/DataTemplate&gt;
	&lt;/Application.Resources&gt;
</pre></div>
<p>При этом в XAML-описании списка для свойства ItemTemplate задается расширение разметки на статический ресурс.</p><div class="kodx">
<pre>
	&lt;ListBox Grid.Row="1" Name="listBoxEmployees" 
	ItemTemplate="{StaticResource ListBoxEmployee}" /&gt;
</pre></div>
<p>Шаблоны данных являются эффективным инструментом для изменения визуального представления элементов управления.</p>
	</td>
    </tr>	
</table>


</body>
</html>