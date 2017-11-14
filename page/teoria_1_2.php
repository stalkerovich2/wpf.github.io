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
		<div  class="zaglav">Основные сведения о языке XAML</div>
<p>
Построение пользовательских интерфейсов для WPF- и Silverlight-приложений
 осуществляется с применением языка расширенной разметки приложений XAML 
 (Extensible Application Markup Language). XAML-документ содержит разметку, 
 описывающую внешний вид и поведение окна или страницы приложения, а связанные с 
 ним файлы кода C# - логику приложения. Язык XAML обеспечивает разделение процесса дизайна
 приложения (графической части) и разработки бизнес-логики (программного кода) между
 дизайнерами и разработчиками. WPF XAML является подмножеством языка XML и позволяет описывать 
 WPF-содержимое таких элементов как векторная графика, 
элементы управления и документы.
</p>
<p>XAML базируется на языке расширенной разметки XML 
(Extensible Markup Language) и его синтакс определяется следующими правилами: </p>
<ul id="spisok">
	<li>
	каждый элемент XAML-документа отображается на некоторый <a title="Описанием объекта является класс, а объект представляет экземпляр этого класса. Можно еще провести следующую аналогию. У нас у всех есть некоторое представление о человеке - наличие двух рук, двух ног, головы, пищеварительной, нервной системы, головного мозга и т.д.  Есть некоторый шаблон - этот шаблон можно назвать классом. Реально же существующий человек (фактически экземпляр данного класса) является объектом этого класса. " style="color: #ff6600;"><strong>экземпляр класса</strong></a> 
	.NET. Имя такого элемента в точности 
	соответствует имени класса. Например, элемент < Button > 
	служит для WPF инструкцией для построения объекта класса Button;
	</li>
	<li>
	элементы XAML можно вкладывать друг в друга.
	Вложение элементов разметки обычно отображает вложенность элементов интерфейса;
	</li>
	<li>
	свойства класса определяются с помощью атрибутов или с помощью вложенных <a title="Лексическая единица (слово, словосочетание) информационно-поискового языка, служащая для описания основного смыслового содержания документа или формулировки запроса при поиске документа (информации) в информационно-поисковой системе. Дескриптор однозначно ставится в соответствие группе ключевых слов естественного языка, отобранных из текста, относящегося к определённой области знаний." style="color: #ff6600;"><strong>дескрипторов</strong></a> со специальным синтаксисом.
	</li>
</ul>
<p>Язык XAML характеризуется самоописанием. Каждый элемент в XAML-документе представляет имя типа
 (такие как Button, Window или Page ) в рамках заданного <a title="Пространство имен XAML — это расширенная версия пространства имен XML. При указании пространства имен XAML используется синтаксис пространства имен XML: соблюдается принцип использования URI-адресов в качестве идентификаторов пространств имен, использование префиксов, позволяющих указать несколько пространств имен с общим исходным кодом разметки и т. п. Основное нововведение в определении пространства имен XML, используемом в XAML, заключается в том, что пространство имен XAML неявно задает область уникальности используемой разметки и при этом влияет на возможное дополнение сущностей разметки определенными пространствами имен CLR и указанными в них сборками." style="color: #ff6600;"><strong>пространства имен</strong></a>. 
 Атрибуты элементов используются для задания свойств 
( Name, Height, Width и т.п.) и событий ( Click, Load и т.д.) соответствующих объектов.</p>
<p>При создании WPF-приложения MyFirstWpfProject VisualStudio генерирует следующий XAML-документ.</p>
<div class="kodx">
<pre>
	&lt;Window x:Class="MyFirstWpfProject.MainWindow"
	xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
	xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
	Title="MainWindow" Height="350" Width="525"&gt;
	&lt;Grid&gt;     
	&lt;/Grid&gt;
	&lt;/Window&gt;
</pre>
</div>
<p>
XAML-документ WPF-приложения MyFirstWpfProject начинается с дескриптора < Window...>.
 Все дескрипторы XAML-документа начинаются символами <a style="color: #ff6600;"><</a>, а завершаются символами <a style="color: #ff6600;">></a>. 
 Любой XAML-документ состоит из XAML-элементов. Каждый XAML-документ (XAML-элемент) начинается 
 открывающимся дескриптором (например < Window >), за которым следует содержимое документа 
 (например, текстовая строка или другие XAML-элементы). В открывающем дескрипторе могут присутствовать 
 описания атрибутов (например, Class, xmlns, Title, Height, Width и др.). XAML-документ (XAML-элемент) 
 должен завершаться закрывающимся дескриптором (например, /> или < /Window >). Текст XAML-документа должен 
 содержать один корневой элемент – элемент верхнего уровня вложенности. В XAML-документе WPF-приложения 
 MyFirstWpfProject таким элементом является < Window >. 
В корневой элемент могут быть добавлены другие XAML-элементы. В рассматриваемом XAML-документе это элемент < Grid >.
</p>
<p>
В процессе компиляции XAML-документа WPF-приложения синтаксический анализатор переводит XAML файлы в файлы языка двоичной разметки приложений BAML 
( Binary Application Markup Language ), которые затем встраиваются в виде ресурсов в сборку проекта. Для построения классов WPF-приложения синтаксический 
анализатор использует пространство имен, которое определено в корневом дескрипторе XAML-документа.
</p>
<p>
Пространство имен в XAML-документе задается с помощью атрибута xmlns. В приведенном выше документе объявлено два базовых пространства имен:
</p>
<ul id="spisok">
	<li>
	xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation" – это базовое пространство имен WPF, которое
	охватывает все классы WPF, включая элементы управления, которые применяются при построении пользовательского интерфейса.
	Так как данное пространство имен объявлено без префикса, то оно распространяется на весь XAML-документ;
	</li>
	<li>
	xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml" – пространство имен XAML. Оно включает различные свойства утилит XAML,
	которые позволяют влиять на то, как XAML-документ следует интерпретировать. Данное пространство имен отображается на префикс x.
	Этот префикс можно помещать перед именем элемента ( x:ИмяЭлемента ).
	</li>
</ul>
<p>
Второе пространство имен используется для включения специфичных для XAML лексем – "ключевых слов". В <a href="#table1.1">табл. 1</a> приведены наиболее часто используемые ключевые слова XAML.
</p>
<br>
<table>
<caption	id="table1.1">Таблица 1. Ключевые слова XAML</caption> 
    <tr	style="background-color:#25587E;font-weight:bold;	color:#FFCE42;	text-align:center;">
        <td>Ключевое слово</td>
        <td>Назначение</td>
    </tr>
    <tr>
        <td>x:Array</td>
        <td>Представляет тип массива .NET на XAML</td>
    </tr>
    <tr>
        <td>x:ClassModifier</td>
        <td>Позволяет определять видимость типа класс (internal или public), обозначенного ключевым словом Class</td>
    </tr>
    <tr>
        <td>x:FieldModifier</td>
        <td>Позволяет определять видимость члена типа (internal, public, private или protected) для любого именованного элемента корня. Именованный элемент определяется с использованием ключевого слова Name</td>
    </tr>
    <tr>
        <td>x:Key</td>
        <td>Позволяет установить значение ключа для элемента XAML, которое должно быть помещено в элемент словаря</td>
    </tr>
    <tr>
        <td>x:Name</td>
        <td>Позволяет указывать сгенерированное C# имя заданного элемента XAML</td>
    </tr>
    <tr>
        <td>x:Null</td>
        <td>Представляет null-ссылку</td>
    </tr>
	<tr>
        <td>x:Static</td>
        <td>Позволяет ссылаться на статический член типа</td>
    </tr>
	<tr>
        <td>x:Type</td>
        <td>XAML-эквивалент операции C# typeof (вызывает System.Type на основе указанного имени)</td>
    </tr>
	<tr>
        <td>x:TypeArgument</td>
        <td>Позволяет устанавливать элемент как обобщенный тип с определенными параметрами</td>
    </tr>
    <tr>
</table>
<p>
В WPF-приложениях кроме базовых применяют специальные, необязательные пространства имен:
</p>
<ul id="spisok">
	<li>
	http://schemas.openxmlformats.org/markup-compatibility/2006 - пространство имен XAML,
	связанное с проблемой совместимости разметки с рабочей средой. Данное пространство имен 
	используется для информирования синтаксического анализатора XAML о том, какую информацию необходимо обработать, а какую – проигнорировать;
	</li>
	<li>
	http://schemas.microsoft.com/expression/blend/2008 - пространство имен XAML, поддерживаемое программами Expression Blend и Visual Studio.
	Данное пространство имен используется для установки размеров графической панели для страницы.
	</li>
</ul>
<p>
В атрибуты объекта Window могут быть добавлены следующие XAML-описания.
</p>
<div class="kodx">
<pre>
	xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" 
	xmlns:d="http://schemas.microsoft.com/expression/blend/2008" 
	mc:Ignorable="d" d:DesignHeight="300" d:DesignWidth="600"
</pre>
</div>
<p>
Данное XAML-описание объявляет необязательные пространства имен с префиксами mc и d. Свойства DesignHeight и DesignWidth находятся в пространстве имен, помеченном префиксом d. Данные свойства определяют, 
что во время разработки проекта приложения в дизайнере Visual Studio окно должно иметь размеры 300x600. 
Свойство Ignorable находится в пространстве имен, помеченном префиксом mc, и информирует синтаксический анализатор о том, что он должен игнорировать часть XAML-документа, помеченные префиксом d.
</p>
<p>
В XAML-документе WPF-приложения часто возникает необходимость обеспечить доступ к каким-либо другим пространствам имен проекта. В этом случае необходимо определить новый префикс и задать пространство имен.
Если в проекте имеется пространство имен MyFirstWpfProject.Commands, то подключение его к XAML-документу WPF-приложения будет иметь следующий вид (command – используется в качестве префикса).
</p><div class="kodx">
<pre>
	xmlns:command="clr-namespace: MyFirstWpfProject.Commands"
</pre></div>
<p>Префикс (command) используется для ссылки на пространство имен в XAML-документе. Лексеме clr-namespace присваивается название пространства имен .NET в сборке.</p>
<p>Для описания класса в XAML-документе используется атрибут Class. Строка XAML-документа</p>
<div class="kodx">
<pre>
	&lt;Window x:Class="MyFirstWpfProject.MainWindow" ...&gt;
</pre>
</div>
<p>
предписывает создать класс MyFirstWpfProject.MainWindow на базе класса Window. Префикс x атрибута Class определяет то, что данный атрибут помещается в пространство имен XAML. 
Класс MainWindow генерируется автоматически во время компиляции. Для части класса автоматически генерируется код (частичный (partial) класс):
</p>
<div class="kodc">
<pre>
	namespace MyFirstWpfProject
	{
	/// &lt;summary&gt;
	/// Логика взаимодействия для MainWindow.xaml
	/// &lt;/summary&gt;
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
<p>
Когда выполняется компиляция приложения, XAML-файл, который определяет пользовательский интерфейс ( MainWindow.xaml ),
транслируется в объявление типа CLR , которое объединяется с логикой приложения из файла класса отдельного кода ( MainWindow.xaml.cs ).
</p>
<p>
Метод InitializeComponent() генерируется во время компиляции приложения и в исходном коде не присутствует.
</p>
<p>
Для программного управления элементами управления, описанными в XAML-документе необходимо для элемента управления задать XAML атрибут Name. Так для задания имени элементу Grid необходимо записать следующую разметку:
</p>
<div class="kodx">
<pre>
	&lt;Grid Name="grid"&gt; 
	&lt;/Grid&gt;
</pre>
</div>
<p>Простые свойства задаются в XAML-документе в соответствии со следующим синтаксисом:</p>
<div class="kodx">
<pre>
	ИмяСвойства ="значение"
</pre>
</div>
<p>
Например, Name = "grid1"
</p>
<p>
При необходимости задать свойство, которое является полноценным объектом, используются сложные свойства в соответствии с синтаксисом "свойство-элемент":
</p>
<div class="kodx">
<pre>
	Родитель.ИмяСвойства
</pre>
</div>
<p>Например, для контейнера StackPanel нам необходимо задать градиентную кисть для заливки панели, что определяется атрибутом Background. Это реализуется с помощью дескрипторов </p>
<div class="kodx">
<pre>
	&lt;StackPanel.Background&gt; . . . &lt;/StackPanel.Background&gt;
</pre> 
</div>
<p>
Для задания значения свойства из выделенного класса используется расширение разметки, которое обеспечивает расширение грамматики XAML 
новой функциональностью. Расширения разметки могут использоваться во вложенных дескрипторах или в XAML-атрибутах. Когда это используется в атрибутах, 
то необходимо применять фигурные скобки {...}.
Расширения разметки используют следующий синтаксис:
</p><div class="kodx">
<pre>
	{КлассРасширенияРазметки  Аргумент }
</pre></div>
<p>
Расширения разметки реализуются классами, дочерними от класса System.Windows.Markup.MarkupExtention. Базовый класс MarkupExtention имеет метод ProvideValue(),
 который предоставляет нужное значение для атрибута. Например, для задания атрибуту Foreground объекта Button статического свойства, 
 определенного в другом классе, необходимо создать следующее XAML-описание.
</p><div class="kodx">
<pre>
	&lt;Button Foreground="{x:Static SystemColors.ActiveCaptionBrush}"    /&gt;
</pre></div>
<p>
При компиляции синтаксический анализатор создаст экземпляр класса Static Extention, затем вызовет метод ProvideValue(), который извлечет нужное значение и установит его для свойства Foreground.
</p>
<p>
Расширения разметки могут использоваться как вложенные свойства.
</p>
<p>
Присоединенные свойства описывают свойства, которые могут применяться к нескольким элементам управления, но которые определены в другом классе. 
В WPF-приложениях присоединенные свойства часто используются для управления компоновкой элементов интерфейса. Синтаксис присоединенных свойств следующий.
</p><div class="kodx">
<pre>
	ОпределяющийТип.ИмяСвойства
</pre></div>
<p>
Например, если необходимо расположить кнопку в нулевой строке сетки, то необходимо сделать следующее XAML-описание.
</p><div class="kodx">
<pre>
	&lt;Button . .. Grid.Row="0" &gt;
	....
	&lt;/Button&gt;
</pre></div>
<p>
Здесь присоединенным свойством является Grid.Row, то есть свойство Row элемента Grid, которое не является свойством объекта Button. 
Свойство Row присоединяется к свойствам объекта Button, поскольку данный объект располагается в контейнере Grid.
</p>
<p>
Атрибуты объектов могут использоваться для присоединения обработчиков событий, используя следующий синтаксис.
</p><div class="kodx">
<pre>
	ИмяСобытия = "ИмяМетодаОбработчикаСобытия"
</pre></div>
<p>
Например, для кнопки событию её нажатия Click можно установить обработчик события Exit_Click.
</p><div class="kodx">
<pre>
	&lt;Button Name="Exit" Content="Выход" Click="Exit_Click" /&gt;
</pre></div>
<p>
Определяя в XAML-описании обработчик Exit_Click, необходимо в коде класса иметь метод с корректной сигнатурой. Ниже приведен код, который генерируется автоматически при создании описания обработчика события в XAML-описании.
</p><div class="kodx">
<pre>
	private void Exit_Click(object sender, RoutedEventArgs e)
	{
	. . . . .
	}
</pre></div>

	</td>
    </tr>	
</table>


</body>
</html>