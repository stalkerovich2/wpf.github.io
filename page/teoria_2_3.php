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
		<div  class="zaglav">Элементы управления содержимым</div>	
<p><a  style="color: #ff6600;"><strong>Элемент управления содержимым</strong></a> — еще более специализированный вид элементов управления, который может хранить (и отображать) фрагмент содержимого. Технически элементы управления содержимым представляют собой элементы, которые могут содержать один вложенный элемент. Это ограничение на наличие лишь одного потомка и отличает элементы управления содержимым от контейнеров компоновки, которые могут содержать сколько угодно вложенных элементов.</p>
<p>Конечно, есть способ поместить в один элемент управления содержимым много различного содержимого — для этого нужно упаковать все в один контейнер, такой как StackPanel или Grid. Например, сам класс Window является элементом управления содержимым. Понятно, что окна обычно содержат много всякого содержимого, но все оно упаковано в один контейнер высокого уровня (обычно Grid).</p>
<p>
Все контейнеры компоновки WPF порождены от абстрактного класса Panel, который обеспечивает содержание нескольких элементов. Аналогично, все элементы управления содержимым порождены от абстрактного класса ContentControl. Иерархия классов приведена на рисунке:
</p>
<div id="statya">
	<h3 id="r1">Рис. 1 Иерархия классов</h3>
   <img id="img" src="../img/r1_3_2.png">
</div>
<p>Как показано на рисунке, некоторые распространенные элементы управления на самом деле являются элементами управления содержимым — к ним относятся, например, Label и ToolTip. Кроме того, все виды кнопок являются элементами управления содержимым, в том числе привычные Button, RadioButton и CheckBox. Существуют и более специализированные элементы управления, такие как ScrollViewer (позволяет создать прокручиваемую панель) и UserControl (позволяет повторно использовать пользовательскую группировку элементов управления). Даже класс Window, предназначенный для отображения всех окон приложения, сам является элементом управления содержимым.</p>
<p>И, наконец, имеется подмножество элементов управления содержимым, которое проходит через дополнительный уровень наследования — они порождены от класса HeaderedContentControl. Эти элементы имеют и область содержимого, и область заголовка, где можно выводить какую-то заглавную информацию. К ним относятся элементы GroupBox, TabItem (страница в TabControl) и Expander.</p>
<p>На рисунке не показано несколько элементов. Там нет элемента Frame, предназначенного для навигации, и нескольких элементов, которые применяются внутри других управляющих элементов (такие как текстовая панель и строка состояния)</p>
<h1>Свойство Content</h1>
<p>Аналогично тому, как класс Panel добавляет коллекцию Children для хранения вложенных элементов, класс ContentControl добавляет свойство Content, которое принимает единственный объект.</p>
<p>Свойство Content поддерживает объекты любых типов, но разделяет их на две группы и обрабатывает эти группы по-разному:</p>
<ul id="spisok">
	<li>
	Объекты, не порожденные от UIElement;
	</li>
	<li>
	Объекты, порожденные от UIElement.
	</li>
</ul>
<p><a  style="color: #ff6600;"><strong>Объекты, не порожденные от UIElement</strong></a> - элементы управления содержимым получают текст из таких элементов с помощью метода ToString(), а затем выводят этот текст.</p>
<p><a  style="color: #ff6600;"><strong>Объекты, порожденные от UIElement</strong></a> - это объекты (к которым относятся все визуальные элементы, входящие в WPF) выводятся внутри элемента управления содержимым с помощью метода UIElement.OnRender().</p>
<p>Текстовое содержимое можно размещать внутри элемента управления содержимым, т.к. синтаксический анализатор XAML преобразовывает его в строковый объект и использует для задания свойства Content. Однако строковое содержимое нельзя поместить непосредственно в компоновочный контейнер. Его нужно сначала упаковать в класс, порожденный от UIElement — например, TextBlock или Label.</p>
<p>А если вам захочется создать ну совсем уж экзотическую кнопку, можно поместить на нее и другие элементы управления содержимым: текстовые поля и даже другие кнопки (которые также могут содержать другие вложенные элементы). Вряд ли подобный интерфейс когдалибо пригодится, но это возможно.</p>
<p>Это та же модель содержимого, которая применяется для окон. Как и класс Button, класс Window допускает наличие одного вложенного элемента, который может быть текстом, произвольным объектом или элементом управления.</p>
<p>Одним из немногих элементов, которые не разрешены внутри элементов управления содержимым, является Window. Окно при создании проверяет, является ли оно контейнером самого верхнего уровня. Если оно размещено в другом элементе, объект Window генерирует исключение.</p>
<p>Кроме свойства Content, класс ContentControl не содержит почти ничего нового. В нем имеется свойство HasContent, которое возвращает true при наличии в элементе содержимого, и ContentTemplate, которое позволяет создать шаблон, указав элементу, как нужно отображать нераспознанный объект. Класс ContentTemplate позволяет более осмысленно выводить объекты, порожденные не от UIElement. Пользуясь значениями различных свойств, можно, вместо простого вызова ToString() для получения строки, организовать их в более сложную разметку.</p>
<div class="btn_lab_and_lection"><a href="../page/laba3.php">Перейти к лабараторной работе 3</a></div>
	</td>
    </tr>	
</table>
</body>
</html>