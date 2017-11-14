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
		<div  class="zaglav">Элементы управления</div>	
	<h1>Элементы управления содержимым</h1>
<p>Элементы управления предназначены для поддержки интерактивной связи с пользователем. Они могут принимать фокус и получать входные данные от клавиатуры или мыши.</p>
<p>Элементы управления содержимым являются специализированным типом элементов управления, которые могут хранить некоторое содержимое – один или несколько элементов. Все элементы управления содержимым являются наследниками класса ContentControl ( <a href="#r1">Рис. 1</a>).</p>
<div id="statya">
	<h3 id="r1">Рис. 1 Иерархия элементов управления содержимым</h3>
   <img id="img" src="../img/r1_2_2.jpg">
</div>
<p>Класс ContentControl наследуется от класса System.Windows.Control, который наделяет его и все дочерние классы базовыми характеристиками, которые:</p>
<ul id="spisok">
	<li>
	позволяют определять содержимое внутри элемента управления;
	</li>
	<li>
	позволяют определять порядок перехода с использованием клавиш табуляции;
	</li>
	<li>
	поддерживают рисование фона, переднего плана и рамки;
	</li>
	<li>поддерживают форматирование размера и шрифта текстового содержания.</li>
</ul>
<p>Элементы управления имеют фон и передний план. Фоном, как правило, является поверхность элемента управления, а передним планом – текст. Цвет этих двух областей в WPF определяется с помощью свойств Background и Foreground. Эти свойства используют кисти – объект Brush. Это обеспечивает заливку содержимого фона и переднего плана сплошным цветом (класс кисти SolidColorBrush ) или градиентным, например с помощью класса кисти LinearGradientBrush.</p>
<p>Для задания фона кнопки с помощью объекта Brush необходимо свойству Color кисти SolidColorBrush присвоить значение, например Blue – голубой.</p>
<div class="kodx">
<pre>
	&lt;Button&gt;Кнопка A
	&lt;Button.Background&gt;
	&lt;SolidColorBrush Color="Blue"&gt;&lt;/SolidColorBrush&gt;
	&lt;/Button.Background&gt;
	&lt;/Button&gt;
</pre>
</div>
<p>В технологии WPF возможно применение сокращений для задания некоторых свойств. Так задание цвета фона или переднего плана можно выполнить следующим способом:</p><div class="kodx">
<pre>
	&lt;Button Background="Black" Foreground="Red"&gt;Кнопка A&lt;/Button&gt;
</pre></div>
<p>При этом синтаксический анализатор WPF автоматически создаст объекты SolidColorBrush с использованием заданных цветов, и будет применять созданные объекты для фона и переднего плана.</p>
<p>Если необходимо использовать другой тип кисти, например градиентный – LinearGradientBrush, то следует создавать объект кисти самостоятельно:</p><div class="kodx">
<pre>
	&lt;Button&gt;Кнопка A
	&lt;Button.Background&gt;
	&lt;LinearGradientBrush&gt;
	&lt;LinearGradientBrush.GradientStops&gt;
	&lt;GradientStop Offset="0.0" Color="Blue"&gt;&lt;/GradientStop&gt;
	&lt;GradientStop Offset="1.0" Color="Red"&gt;&lt;/GradientStop&gt;
	&lt;/LinearGradientBrush.GradientStops&gt;
	&lt;/LinearGradientBrush&gt;
	&lt;/Button.Background&gt;
	&lt;/Button&gt;
</pre></div>
<p>С помощью кисти рисуется рамка вокруг элемента управления. Это реализуется с помощью свойств BorderBrush и BorderThickness. При этом свойство BorderBrush принимает выбранную кисть, а BorderThickness – ширину рамки:</p><div class="kodx">
<pre>
	&lt;Button Width="80" Height="30" Background="Red" 
	BorderBrush="Blue" BorderThickness="5"&gt;Кнопка A&lt;/Button&gt;
</pre></div>
<p>Технология WPF поддерживает прозрачность. Если на форме или странице расположить несколько элементов один поверх другого и для каждого из них задать различную степень прозрачности, то нижние элементы будут просматриваться через элементы, расположенные над ними. Это позволяет создавать многослойные анимационные объекты. Прозрачность можно задать двумя способами:</p>
<ul id="spisok">
	<li>
	с помощью свойства Opacity (непрозрачность), которое может принимать значение от 0 до 1. Значение 1 соответствует полностью непрозрачному цвету, а 0 – полностью прозрачному;
	</li>
	<li>
	с помощью полупрозрачного цвета через задание значения альфа-канала. Значение альфа-канала менее 255, является полупрозрачным.
	</li>
</ul>
<p>Класс Control, от которого наследуются все элементы управления, определяет набор свойств, связанных со шрифтами:</p>
<ul id="spisok">
	<li>
	FontFamily – имя шрифта для использования в элементе контроля;
	</li>
	<li>
	FontSize – размер ширфта в единицах, не зависящих от устройства (каждая из них представляет собой 1/96 дюйма);
	</li>
	<li>
	FontStyle – представляет наклон текста;
	</li>
	<li>
	FontWeight – вес текста;
	</li>
	<li>
	FontStretch – величина на которую растягивается или сжимается текст.
	</li>
</ul>
<p>При выборе шрифта переднего фона элемента управления необходимо указать полное имя семейства шрифтов:</p><div class="kodx">
<pre>
	&lt;Button FontFamily="Times New Roman" FontSize="18"&gt;Кнопка A&lt;/Button&gt;
</pre></div>
<p>При задании полужирного шрифта с наклоном необходимо задать следующие свойства:</p><div class="kodx">
<pre>
	&lt;Button FontFamily="Times New Roman" 
	FontSize="18" FontStyle="Italic" FontWeight="Bold"&gt; Кнопка A&lt;/Button&gt;
</pre></div>
<p>Многие элементы управления WPF являются элементами управления содержимым. Это элементы управления: Label, Button, CheckBox и RadioButton.</p>
<p>Метка – Label является простейшим элементом управления содержимым. Она принимает одиночную порцию содержимого, которую необходимо поместить внутри неё. Метка поддерживает мнемонические команды – клавишу быстрого доступа, передавая фокус связанному с ней элементу управления. Для поддержки этой функции используют свойство Target, которому присваивают выражение привязки. В выражении привязки необходимо указать другой элемент управления, на который будет переходить фокус при нажатии клавиши быстрого доступа.</p><div class="kodx">
<pre>
	&lt;Label Target="{Binding ElementName = txtA}"&gt;Выбор _А&lt;/Label&gt; 
	&lt;TextBox Name="txtA"&gt;Выбор текста&lt;/TextBox&gt;
</pre></div>
<p>Символ подчеркивания в тексте метки указывает на клавишу быстрого доступа. Все мнемонические команды работают при одновременном нажатии клавиши <Alt> и заданной клавиши быстрого доступа. В приведенном выше коде при нажатии комбинации <Alt+A> фокус перейдет на элемент управления TextBox с именем txtA.</p>
<p>В WPF определены три класса: Button, CheckBox и RadioButton, которые наследуются от класса ButtonBase.</p>
<p>Класс ButtonBase определяет событие Click и добавляет поддержку команд, которые позволяют подключить кнопки для высокоуровневых задач приложения. В классе ButtonBase имеется свойство ClickMode, которое определяет когда кнопка генерирует событие Click в ответ на действия мыши. Значением, используемым по умолчанию, является ClickMode.Release, которое означает, что событие будет сгенерировано как при нажатии, так и при отпускании кнопки мыши. Для ClickMode.Press – событие будет генерироваться только при нажатии кнопки мыши, ClickModeHover – когда указатель мыши будет наведен на кнопку и задержен на ней.
</p>
<p>Класс Button добавляет два свойства, доступные для записи: IsCancel и IsDefault.</p>
<p>При IsCancel = true кнопка будет работать как кнопка отмены окна и если нажать кнопку <Esc>, когда текущее окно находится в фокусе, то кнопка сработает.</p>
<p>Если IsDefault= true, то кнопка считается кнопкой по умолчанию.</p>
<p>Классы CheckBox и RadioButton наследуются от класса ToggleButton, который представляет кнопку, имеющую два состояния: нажата и отпущена. В классе имеются события Checked, Unchecked и Intermediate, которые генерируются при включении, выключении или переходе кнопки в неопределенное состояние.</p>
<p>Для кнопки CheckBox включение элемента управления означает отметку в нем флажка. Свойство IsChecked, наследуемое от класса ToggleButton, может принимать три значения: true (включено), false (выключено), null (неопределено, которое отображается в виде затененного окна, и используется для промежуточного состояния). Пример XAML-описания трех кнопок CheckBox приведен ниже.</p><div class="kodx">
<pre>
	&lt;CheckBox Height="16" Name="checkBox1" 
	Width="120" IsChecked="False" 
	ClickMode="Release"&gt;Выбор А&lt;/CheckBox&gt;
	&lt;CheckBox Height="16" Name="checkBox2" 
	Width="120" IsChecked="True" 
	ClickMode="Press"&gt;Выбор Б&lt;/CheckBox&gt;
	&lt;CheckBox Height="16" Name="checkBox3" 
	Width="120" IsChecked="{x:Null}" 
	ClickMode="Hover"&gt;Выбор В&lt;/CheckBox&gt;
</pre></div>
<p>Для кнопки RadioButton добавлено свойство GroupName, которое позволяет управлять расположением переключателей в группе. Из группы можно выбрать только один переключатель.</p><div class="kodx">
<pre>
	&lt;GroupBox Header="Группа радиокнопок" Height="100"
	Name="groupBox1" Width="200"&gt;
	&lt;StackPanel&gt;
	&lt;RadioButton Height="16" Name="radioButton2" 
	Width="120"&gt;Выбор Г&lt;/RadioButton&gt;
	&lt;RadioButton Height="16" Name="radioButton1" 
	Width="120"&gt;Выбор Д&lt;/RadioButton&gt;
	&lt;RadioButton Height="16" Name="radioButton3"  
	Width="120"&gt;Выбор Е&lt;/RadioButton&gt;
	&lt;/StackPanel&gt;
	&lt;/GroupBox&gt;
</pre></div>
<p>Контекстные окна указателя ToolTip позволяют выводить всплывающие окна, когда пользователь наводит указатель мыши на определенный элемент. Данные окна в WPF относятся к группе элементов управления содержимым и поэтому в них можно помещать любое допустимое содержимое. Для вывода контекстного окна указателя не обязательно использовать класс ToolTip. Можно воспользоваться свойством ToolTip элемента управления, например для кнопки:</p><div class="kodx">
<pre>
	&lt;Button ToolTip="Подсказка для кнопки А"&gt;&lt;/Button&gt;
</pre></div>
<p>Элемент управления ScrollViewer обеспечивает прокрутку содержимого и используется, в основном, для упаковки контейнеров компоновки. С помощью этого элемента можно создавать прокручивающиеся панели.</p>
<p>Элемент UserControl предназначен для создания пользовательских элементов контроля, в которых можно объединять нескольно элементов управления.</p>
<p>Элемент Windows является элементом управления содержимым и используется для создания всех окон приложения.</p>
<p>Элемент HeaderedContentControl наследуется от класса ContentControl. HeaderedContentControl является родительским классом для элементов управления, которые имеют кроме содержимого и область заголовка.</p>
<p>Элемент управления GroupBox является окном с заголовком и используется для группирования связанных элементов управления, например радиокнопок.</p>
<p>Элемент управления TabItem представляет страницу для класса TabControl. Данный элемент отображает вкладку, которая активна в данный момент на панели TabControl.</p>
<p>Элемент управления Expander позволяет показывать и скрывать определенную область содержимого.</p>
<h1>Текстовые элементы управления</h1>
<p>В WPF определены следующие текстовые элементы управления: TextBlock, TextBox, RichTextBox и PasswordBox. Элемент PasswordBox наследуется от класса Control, а элементы TextBox и RichTextBox - от класса TextBase.</p>
<p>Элемент TextBlock используется для небольшого текста. Элементы управления TextBox и RichTextBox являются наследниками класса TextBase. Элемент TextBox всегда хранит строку текста. Элемент RichTextBox может хранить содержимое FlowDocument, которое может содержать в себе сложную комбинацию элементов. Элемент управления PasswordBox содержит строку текста, используя элемент SecureString для защиты от некоторых видов атак.</p>
<p>Элемент управления TextBox, как правило хранит одну строку текста:</p><div class="kodx">
<pre>
	&lt;TextBox Name="txtA"&gt;Выбор текста&lt;/TextBox&gt;
</pre></div>
<p>Если необходимо создать многострочное представление, то свойству TextWrapping необходимо присвоить значение Wrap. Для многострочного элемента TextBox можно задать минимальное и максимальное количество строк, используя свойства MinLines и MaxLines.</p>
<h1>Элементы управления списками</h1>
<p>Элементы управления ListBox и ComboBox являются элементами управления списками. Эти элементы управления являются потомками класса ItemsControl через класс Selector.</p>
<p>Класс ItemsControl является базовым для всех элементов управления списками и предусматривает два способа заполнения списка элементов. В первом способе осуществляется добавление элемента прямо в коллекцию Items, при котором используется код или XAML. Во втором способе осуществляется привязка данных через задание свойства ItemsSource – источника данных (коллекции элементов). Класс Selector имеет свойства, позволяющие отслеживать выделенный в данный момент времени элемент ( SelectedItem ) списка или его позицию ( SelectedIndex ).</p>
<p>Для добавления элементов в ListBox можно вложить элементы ListBoxItem в элемент управления ListBox, как это показано для составления списка цветов (зеленый, голубой, желтый, красный):</p><div class="kodx">
<pre>
	&lt;ListBox&gt;
	&lt;ListBoxItem&gt;Зеленый&lt;/ListBoxItem&gt;
	&lt;ListBoxItem&gt;Голубой&lt;/ListBoxItem&gt;
	&lt;ListBoxItem&gt;Желтый&lt;/ListBoxItem&gt;
	&lt;ListBoxItem&gt;Красный&lt;/ListBoxItem&gt;
	&lt;/ListBox&gt;
</pre></div>
<p>Элемент управления ListBox хранит каждый вложенный объект в своей коллекции. При этом ListBoxItem может хранить не только строки, но и любой произвольный элемент.</p>
<p>Элемент управления ComboBox подобен ListBox, но для визуализации использует выпадающий список и пользователь может выбрать только один элемент из списка.</p>
<h1>Специализированные элементы управления</h1>
<p>В WPF имеются элементы управления, использующие диапазоны значений: ScrollBar, ProgressBar и Slider. Данные элементы управления являются наследниками класса RangeBase, в котором определены такие свойства как Value – текущее значение элемента управления, Minimum и Maximum – минимальное и максимальное допустимые значения./p>
<p>ScrollBar – элемент управления, предоставляющий полосу прокрутки с перемещаемым элементом, позиция которого соответствует определенному значению.</p>
<p>Элемент управления ProgressBar показывает ход выполнения длительной задачи.</p>
<p>Элемент управления Slider используется для задания числового значения путем перемещения бегунка на линейке прокрутки.</p>
<div class="btn_lab_and_lection"><a href="laba4.php">Перейти к лабараторной работе 4</a></div>
	</td>
    </tr>	
</table>


</body>
</html>