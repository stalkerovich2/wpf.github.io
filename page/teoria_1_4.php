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
		<div  class="zaglav">Файлы отделенного кода</div>
<p>
При создании нового проекта WPF в дополнение к создаваемому файлу MainWindow.xaml создается также файл отделенного кода MainWindow.xaml.cs, где, как предполагается, должна находится логика приложения связанная с разметкой из MainWindow.xaml. Файлы XAML позволяют нам определить интерфейс окна, но для создания логики приложения, например, для определения обработчиков событий элементов управления, нам все равно придется воспользоваться кодом C#.
</p>
<p>По умолчанию в разметке окна используется атрибут x:Class. Атрибут x:Class указывает на класс, который будет представлять данное окно и в который будет компилироваться код в XAML при компиляции. То есть во время компиляции будет генерироваться класс XamlApp.MainWindow, унаследованный от класса System.Windows.Window.</p>
<p>Кроме того в файле отделенного кода MainWindow.xaml.cs, который Visual Studio создает автоматически, мы также можем найти класс с тем же именем - в данном случае класс XamlApp.MainWindow. Класс XamlApp.MainWindow определяется как частичный с модификатором partial. А через метод InitializeComponent() класс MainWindow вызывает скомпилированный ранее код XAML, разбирает его и по нему строит графический интерфейс окна.</p>
<h1>Взаимодействие кода C# и XAML</h1>
<p>В приложении часто требуется обратиться к какому-нибудь элементу управления. Для этого надо установить у элемента в XAML свойство Name.</p>
<p>Еще одной точкой взаимодействия между xaml и C# являются события. С помощью атрибутов в XAML мы можем задать события, которые будут связанны с обработчиками в коде C#.</p>
<p>Например, в разметке главного окна определим два элемента: кнопку и текстовое поле.</p>
<div class="kodx">
<pre>
&lt;Window x:Class="XamlApp.MainWindow"
xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
xmlns:local="clr-namespace:XamlApp"
mc:Ignorable="d"
Title="MainWindow" Height="350" Width="525"&gt;
&lt;Grid x:Name="grid1"&gt;
&lt;TextBox x:Name="textBox1" Width="150" Height="30" VerticalAlignment="Top" Margin="20" /&gt;
&lt;Button x:Name="button1"  Width="100" Height="30" Content="Кнопка" Click="Button_Click" /&gt;
&lt;/Grid&gt;
&lt;/Window&gt;
</pre>
</div>
<p>И изменим файл отделенного кода, добавив в него обработчик нажатия кнопки:</p>
<div class="kodc">
<pre>
using System.Windows;
 
namespace XamlApp
{
public partial class MainWindow : Window
{
public MainWindow()
{
InitializeComponent();
}
private void Button_Click(object sender, RoutedEventArgs e)
{
string text = textBox1.Text;
if (text != "")
{
MessageBox.Show(text);
}
}
}
}
</pre>
</div>
<p>Определив имена элементов в XAML, затем мы можем к ним обращаться в коде c#: string text = textBox1.Text.</p>
<p>При определении имен в XAML надо учитывать, что оба пространства имен "http://schemas.microsoft.com/winfx/2006/xaml/presentation" и "http://schemas.microsoft.com/winfx/2006/xaml" определяют атрибут Name, который устанавливает имя элемента. Во втором случае атрибут используется с префиксом x: x:Name. Какое именно пространство имен использовать в данном случае, не столь важно, а следующие определения имени x:Name="button1" и Name="button1" фактически будут равноценны.</p>
	</td>
    </tr>	
</table>


</body>
</html>