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
		<div  class="zaglav">Метки</div>	
<p>Простейшим элементом управления содержимым является Label — метка. Как и любой другой элемент управления содержимым, она принимает одиночную порцию содержимого, которая размещается внутри нее. Отличительной чертой элемента Label является его поддержка мнемонических команд — нажатий клавиш, которые передают фокус соответствующему элементу управления.</p>
<p>Для поддержки этой функции в элементе Label добавлено свойство Target. Чтобы задать это свойство, необходимо воспользоваться выражением привязки, которое указывает на другой элемент управления. Ниже показан необходимый для этого синтаксис:</p>
<div class="kodx">
<pre>
&lt;StackPanel Margin="5"&gt;
&lt;Label Margin="0,0,0,5" Target="{Binding ElementName=txtA}">Login (нажмите _A):&lt;/Label&gt;
&lt;TextBox MinHeight="24" Name="txtA">&lt;/TextBox&gt;
&lt;Label Margin="0,5,0,5" Target="{Binding ElementName=txtB}">Password (нажмите _B):&lt;/Label&gt;
&lt;PasswordBox Name="txtB" MinHeight="24">&lt;/PasswordBox&gt;
&lt;/StackPanel&gt;
</pre>
</div>
<p>Символ подчеркивания в тексте метки указывает на клавишу быстрого доступа. (Если символ подчеркивания необходим в метке, нужно добавить два таких символа.) Все мнемонические команды работают при одновременном нажатии клавиши <Alt> и заданной клавиши быстрого доступа. Например, если в данном примере пользователь нажмет комбинацию <Alt+A>, то первая метка передаст фокус связанному с ней элементу управления — в данном случае txtА. Точно так же нажатие комбинации <Alt+B> приводит к передаче фокуса элементу txtB:</p>
<div id="statya">
	<h3 id="r1">Рис. 1 Окно приложения с использованием меток</h3>
   <img id="img" src="../img/r1_2_10.jpg">
</div>
<p>Если вам доводилось программировать с использованием Windows Forms, то вы, возможно, применяли для обозначения клавиши быстрого доступа символ амперсанда (&). В XAML для этой цели служит символ подчеркивания, поскольку символ амперсанда нельзя ввести в XML напрямую: вместо него приходится использовать неуклюжую комбинацию &amp;.</p>

<p>Обычно буквы клавиш быстрого доступа скрыты до тех пор, пока пользователь не нажмет &lt;Alt&gt; — тогда они отмечаются подчеркиванием. Однако это поведение зависит от настроек системы.</p>
<p>Если нужно лишь вывести содержимое без поддержки мнемонических команд, можно воспользоваться более облегченным элементом TextBlock. В отличие от элемента Label, TextBlock поддерживает перенос текста с помощью свойства TextWrapping.</p>
 
	</td>
    </tr>	
</table>
</body>
</html>