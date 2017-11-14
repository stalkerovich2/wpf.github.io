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
		<div  class="zaglav">Лабараторная работа 1</div>		
<h1>Цель:</h1>
<p>
Ознакомиться с основной структурой WPF проекта и создать приложение "калькулятор".
</p>
<p>Открыть Visual Studio и в меню <a  style="color: #ff6600;"><strong>File (Файл)</strong></a> выберем пункт <a  style="color: #ff6600;"><strong>New (Создать) -> Project... (Проект...)</strong></a>. Перед нами откроется диалоговое окно создания проекта, в котором мы выберем шаблон WPF Application:</p>
<div id="statya">
	<h3 id="r1">Рис. 1 Окно создания проекта</h3>
   <img id="img" src="../img/1.1.png">
</div>
<p>Укажем проекту какое-нибудь имя и нажмем кнопку OK. И Visual Studio создаст нам новый проект</p>
<div id="statya">
	<h3 id="r1">Рис. 2 Окно нового проекта</h3>
   <img id="img" src="../img/1.2.png">
</div>
<p>По умолчанию студия открывает создает и открывает нам два файла: файл декларативной разметки интерфейса MainWindow.xaml и файл связанного с разметкой кода MainWindow.xaml.cs. Файл MainWindow.xaml имеет два представления: визуальное - в режиме WYSIWIG отображает весь графический интерфейс данного окна приложения, и под ним декларативное объявление интерфейса в XAML. Если мы изменим декларативную разметку, например, определим там кнопку, то эти изменения отображаться в визуальном представлении.</p>
<h1>Структура проекта</h1>
<p>В структуре проекта WPF следует выделить следующие моменты. Во-первых, в проекте имеется файл App.xaml и связанный с ним файл кода App.xaml.cs - это глобальные файлы для всего приложения, позже мы о них поговорим подробнее. А пока только следует знать, что App.xaml задает файл окна программы, которое будет открываться при запуске приложения. Если вы откроете этот файл, то можете найти в нем строку StartupUri="MainWindow.xaml" - то есть в данном случае, когда мы запустим приложение, будет создаваться интерфейс из файла MainWindow.xaml.</p>
<p>Далее в структуре определены файл разметки MainWindow.xaml и файл связанного кода MainWindow.xaml.cs. Файл MainWindow.xaml и представляет определение окна приложение, которое мы увидим при запуске.</p>
<h1>Создание калькулятора</h1>
<p>Теперь создадим первое приложение. Перейдем к файлу MainWindow.xaml. Сейчас его разметка XAML, созданная по умолчанию, представляет следующее:
</p>
<div class="kodx">
<pre>
&lt;Window x:Class="FirstWpfApp.MainWindow"
xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
xmlns:local="clr-namespace:FirstWpfApp"
mc:Ignorable="d"
Title="MainWindow" Height="350" Width="525"&gt;
&lt;Grid&gt;      
&lt;/Grid&gt;
&lt;/Window&gt;
</pre>
</div>
<p>XAML в целом напоминает язык разметки HTML: здесь у нас сначала определен элемент верхнего уровня Window - окно приложения, в нем определено элемент Grid - контейнер верхнего уровня, в который мы можем добавлять другие элементы. Каждый элемент может иметь определенные атрибуты. Более подробно с языком XAML и элементами мы познакомимся позднее, а пока изменим эту разметку на следующую:</p>
<div class="kodx">
<pre>
&lt;Window x:Class="FirstWpfApp.MainWindow"
xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
Title="Калькулятор" Height="250" Width="300"&gt;
    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Grid.ColumnDefinitions&gt;
            &lt;ColumnDefinition /&gt;
            &lt;ColumnDefinition /&gt;
            &lt;ColumnDefinition /&gt;
            &lt;ColumnDefinition /&gt;
        &lt;/Grid.ColumnDefinitions&gt;
        &lt;TextBlock x:Name="textBlock" Grid.Column="0" Grid.ColumnSpan="4" /&gt;
        &lt;Button Grid.Column="0" Grid.Row="1">1&lt;/Button&gt;
        &lt;Button Grid.Column="1" Grid.Row="1">2&lt;/Button&gt;
        &lt;Button Grid.Column="2" Grid.Row="1">3&lt;/Button&gt;
        &lt;Button Grid.Column="3" Grid.Row="1">4&lt;/Button&gt;
        &lt;Button Grid.Column="0" Grid.Row="2">5&lt;/Button&gt;
        &lt;Button Grid.Column="1" Grid.Row="2">6&lt;/Button&gt;
        &lt;Button Grid.Column="2" Grid.Row="2">7&lt;/Button&gt;
        &lt;Button Grid.Column="3" Grid.Row="2">8&lt;/Button&gt;
        &lt;Button Grid.Column="0" Grid.Row="3">9&lt;/Button&gt;
        &lt;Button Grid.Column="1" Grid.Row="3">0&lt;/Button&gt;
        &lt;Button Grid.Column="2" Grid.Row="3">+&lt;/Button&gt;
        &lt;Button Grid.Column="3" Grid.Row="3">-&lt;/Button&gt;
        &lt;Button Grid.Column="0" Grid.Row="4">*&lt;/Button&gt;
        &lt;Button Grid.Column="1" Grid.Row="4">/&lt;/Button&gt;
        &lt;Button Grid.Column="2" Grid.Row="4">=&lt;/Button&gt;
        &lt;Button Grid.Column="3" Grid.Row="4">CLEAR&lt;/Button&gt;
        &lt;/Grid&gt;
            &lt;/Window&gt;
</pre>
</div>
<p>
Здесь мы задали массив кнопок как в обычном калькуляторе. После изменения разметки, визуальное представление интерфейса также изменится, и вы сможете там разглядеть подобие калькулятора. Теперь откроем файл логики, привязанной к данной разметке, MainWindow.xaml.cs. Сейчас он имеет следующий код:
</p>
<div class="kodc">
<pre>
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
namespace FirstWpfApp
{
public partial class MainWindow : Window
{
public MainWindow()
{
InitializeComponent();
}
}
}
</pre>
</div>
<p>И изменим его на следующий:</p>
<div class="kodc">
<pre>
using System;
using System.Windows;
using System.Windows.Controls;
namespace FirstWpfApp
{
    public partial class MainWindow : Window
    {
        string leftop = ""; // Левый операнд
        string operation = ""; // Знак операции
        string rightop = ""; // Правый операнд 
        public MainWindow()
        {
            InitializeComponent();
            // Добавляем обработчик для всех кнопок на гриде
            foreach (UIElement c in LayoutRoot.Children)
            {
                if (c is Button)
                {
                    ((Button)c).Click += Button_Click;
                }
            }
        }

        public Action&lt;object, RoutedEventArgs&gt; Click { get; }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            // Получаем текст кнопки
            string s = (string)((Button)e.OriginalSource).Content;
            // Добавляем его в текстовое поле
            textBlock.Text += s;
            int num;
            // Пытаемся преобразовать его в число
            bool result = Int32.TryParse(s, out num);
            // Если текст - это число
            if (result == true)
            {
                // Если операция не задана
                if (operation == "")
                {
                    // Добавляем к левому операнду
                    leftop += s;
                }
                else
                {
                    // Иначе к правому операнду
                    rightop += s;
                }
            }
            // Если было введено не число
            else
            {
                // Если равно, то выводим результат операции
                if (s == "=")
                {
                    Update_RightOp();
                    textBlock.Text += rightop;
                    operation = "";
                }
                // Очищаем поле и переменные
                else if (s == "CLEAR")
                {
                    leftop = "";
                    rightop = "";
                    operation = "";
                    textBlock.Text = "";
                }
                // Получаем операцию
                else
                {
                    // Если правый операнд уже имеется, то присваиваем его значение левому
                    // операнду, а правый операнд очищаем
                    if (rightop != "")
                    {
                        Update_RightOp();
                        leftop = rightop;
                        rightop = "";
                    }
                    operation = s;
                }
            }
        }
        // Обновляем значение правого операнда
        private void Update_RightOp()
        {
            int num1 = Int32.Parse(leftop);
            int num2 = Int32.Parse(rightop);
            // И выполняем операцию
            switch (operation)
            {
                case "+":
                    rightop = (num1 + num2).ToString();
                    break;
                case "-":
                    rightop = (num1 - num2).ToString();
                    break;
                case "*":
                    rightop = (num1 * num2).ToString();
                    break;
                case "/":
                    rightop = (num1 / num2).ToString();
                    break;
            }
        }
    }
}
</pre>
</div>
<p>Большая часть кода использует обычные выражения языка C#, за исключением отдельных моментов.</p>
<div class="btn_lab_and_lection"><a href="../projects/lr1.rar">Посмотреть результат</a></div>
<div class="btn_lab_and_lection"><a href="teoria_1_3.php">Перейти к теоретической части</a></div>
	</td>
    </tr>	
</table>
</body>
</html>