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
		<div  class="zaglav">Стили</div>
<p>Стили – это коллекция значений свойств, которые могут быть применены к элементу. Они позволяют определить общий набор характеристик форматирования и применять их по всему приложению для обеспечения согласованности. Стили в WPF могут устанавливать любое свойство зависимостей. Их можно применять для стандартизации визуального поведения каких-либо элементов. Стили WPF поддерживают триггеры, которые позволяют изменять стиль элемента при изменении других свойств. Стили позволяют использовать шаблоны для переопределения стандартного визуального представления элементов управления.</p>	
<p>Стиль создается на базе класса Style, свойства которого приведены в <a href="#table1.1">табл. 1.</a></p>
<table>
<caption id="table1.1">Таблица 1. Свойства класса Style</caption> 
    <tr	style="background-color:#25587E;font-weight:bold;	color:#FFCE42;	text-align:center;">
        <td>Имя</td>
        <td>Описание</td>
    </tr>
    <tr>
        <td>BasedOn</td>
        <td>Представляет тип массива .NET на XAML</td>
    </tr>
    <tr>
        <td>Dispatcher</td>
        <td>Позволяет определять видимость типа класс (internal или public), обозначенного ключевым словом Class</td>
    </tr>
    <tr>
        <td>IsSealed</td>
        <td>Позволяет определять видимость члена типа (internal, public, private или protected) для любого именованного элемента корня. Именованный элемент определяется с использованием ключевого слова Name</td>
    </tr>
    <tr>
        <td>Resources</td>
        <td>Позволяет установить значение ключа для элемента XAML, которое должно быть помещено в элемент словаря</td>
    </tr>
    <tr>
        <td>Setters</td>
        <td>Позволяет указывать сгенерированное C# имя заданного элемента XAML</td>
    </tr>
    <tr>
        <td>TargetType</td>
        <td>Представляет null-ссылку</td>
    </tr>
	<tr>
        <td>Triggers</td>
        <td>Позволяет ссылаться на статический член типа</td>
    </tr>   
</table>
<p>Например, в приложении необходимо многократно использовать кнопки, которые имеют светло-голубой фон и голубую рамку.</p>	<div class="kodx">
<pre>
	&lt;Style x:Key="ButtonStyle" TargetType="Button"&gt;
    &lt;Setter Property="Background" Value="LightBlue"/&gt;
    &lt;Setter Property="BorderBrush" Value="Blue" /&gt;
	&lt;/Style&gt;
</pre></div>
<p>Имя стилю задается атрибутом x:Key ( ButtonStyle ). Атрибут TargetType определяет тип, для которого будет применяться стиль ( Button ). Каждый объект Setter устанавливает в элементе одно свойство, которое обязательно должно быть свойством зависимостей. Установка свойств производится с помощью атрибутов Property, который определяет имя свойства, и Value, которое задает значение свойства.</p>	
<p>В стиль можно добавить объект EventSetters, в котором привязывается события к определенному обработчику.</p>	
<p>Триггеры позволяют вносить изменения в стиль при выполнении определенных условий. Добавим в стиль для кнопки ButtonStyle триггер, который будет формировать красный фон при наведении указателя мыши на кнопку.</p><div class="kodx">
<pre>
	&lt;Style x:Key="ButtonStyle" TargetType="Button"&gt;
	&lt;Setter Property="Background" Value="LightBlue"/&gt;
	&lt;Setter Property="BorderBrush" Value="Blue" /&gt;
	&lt;Style.Triggers&gt;
	&lt;Trigger Property="IsMouseOver" Value="true"&gt;
	&lt;Setter Property="Background" Value="Red" /&gt;
	&lt;/Trigger&gt;
	&lt;/Style.Triggers&gt;
	&lt;/Style&gt;
</pre></div>
<p>В триггере должно быть указано идентифицирующее свойство (в нашем примере IsMouseOver ), за которым должно вестись наблюдение, и значение, которого следует ожидать (в нашем примере true ). Когда появляется необходимое значение, устанавливается свойство, которое определено объектом Setter. В приведенном примере при IsMouseOver = true, то есть наведении указателя мыши на кнопку, свойству Background присваивается значение Red, то есть фон кнопки становится красным. Когда указатель мыши покидает кнопку, условия срабатывания триггера нарушаются и фон кнопки переходит в прежнее состояние.</p>	
<p>Кроме триггера, ожидающего изменение свойства, имеются триггеры события ( EventTrigger ), которые ожидают возникновения определенного события.</p>
<div class="btn_lab_and_lection"><a href="laba3.php">Перейти к лабараторной работе 3</a></div>
	</td>
    </tr>	
</table>
</body>
</html>