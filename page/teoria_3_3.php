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
		<div  class="zaglav">Команды</div>
<p>Командная модель WPF предоставляет следующие возможности:</p>
<ul id="spisok">
	<li>
	делегирование событий подходящим командам;
	</li>
	<li>
	поддержание включенного состояния элемента управления в синхронизированном виде с помощью состояния соответствующей команды.
	</li>
</ul>
<p>Модель команд включает следующие компоненты:</p>
<ul id="spisok">
	<li>
	команды, которые представляют задачу приложения, с механизмом слежения за их доступностью при выполнении программы;
	</li>
	<li>
	привязка команд, которая подразумевает соединение команды с логикой приложения, отвечающей за обслуживание определенной области пользовательского интерфейса;
	</li>
	<li>
	источник команды, которые её инициирует;
	</li>
	<li>
	целевые объекты команды – элементы приложения, для которых предназначена данная команда.
	</li>
</ul>
<p>
Классы команд WPF должны поддерживать интерфейс ICommand.</p><div class="kodx">
<pre>
	public interface ICommand
	{
	void Execute(object par);
	bool CanExecute(object par);
	event EventHandler CanExecuteChanged;
	}
</pre></div>
<p>Метод Execute() определяет реализацию команды в приложении. Это может быть код логики приложения или возбуждение события, обрабатываемого в другом классе приложения. Метод CanExecute() возвращает информацию о состоянии доступности команды. Методы Execute() и CanExecute() могут вызываться с параметром par, который используется для передачи дополнительной информации. Событие CanExecuteChanged вызывается при изменении состояния доступности команды. По этому событию вызывается метод CanExecute() и проверяется состояние команды.</p>
<p>В WPF существует библиотека базовых команд, которые доступны через статические свойства следующих статических классов:</p>
<ul id="spisok">
	<li>
ApplicationCommands – представлены общие команды, такие как Создать, Открыть, Копировать, Сохранить и др. ;
	</li>
	<li>
Navigation Commands – представлены команды для навигации;
	</li>
	<li>
Editing Commands – включает команды для редактирования документов;
	</li>
	<li>
Media Commands – объединяет команды для работы с мультимедиа.
	</li>
</ul>
<p>Для инициализации команды необходимо использовать источник команды, а для ответа на нее – привязку команды с переадресацией её выполнения обычному обработчику события.</p>
<p>Предположим, что источником команды Создать является кнопка New. С помощью свойства Command связываем кнопку с командой New.</p><div class="kodx">
<pre>
	&lt;Button Name="New" Content="Создать" Width="200" Command="New"/&gt;
</pre></div>
<p>Следующим шагом необходимо создать привязку команды к окну Window.</p><div class="kodx">
<pre>
	&lt;Window.CommandBindings&gt;
	&lt;CommandBinding Command="New" 
	Executed="CommandBinding_Executed" 
	CanExecute="CommandBinding_CanExecute"/&gt;
	&lt;/Window.CommandBindings&gt;
</pre></div>
<p>В привязке для объекта CommandBinding кроме команды New необходимо указать обработчики для методов Execute() и CanExecute() через соответствующие свойства Executed и CanExecute. Обработчик CommandBinding_Executed будет реализовывать бизнес-логику команды Создать, обработчик CommandBinding_CanExecute – проверять доступность команды.</p>
<p>При создании пользовательской команды целесообразно использовать класс RoutedCommand, который реализует интерфейс ICommand.</p>
<p>Для примера сконструируем команду Редактировать. Для этого создадим класс DataCommands.</p>
<div class="kodc">
<pre>
	public class DataCommands
	{
	private static RoutedCommand edit;
	public static RoutedCommand Edit
	{
	get { return DataCommands.edit; }
	}
	static DataCommands()
	{
	InputGestureCollection inputs = new InputGestureCollection();
	inputs.Add(new KeyGesture(Key.E, ModifierKeys.Control, "Ctrl+E"));
	Edit = new RoutedCommand("edit", typeof(DataCommands), inputs);
	}
	}
</pre></div>
<p>В классе DataCommands объявлены статические поле ( edit ) и свойство ( Edit ) экземпляра класса RoutedCommand. Статический конструктор создает экземпляр команды Создать ( Edit ), используя экземпляр ( inputs )) класса InputGestureCollection. Класс InputGestureCollection представляет упорядоченную коллекцию объектов KeyGesture, которые определяют "горячую" клавишу для вызова команды. В приведенном примере это комбинация клавиш "Ctrl+E". Далее необходимо установить для команды источник и привязать команду, как это было рассмотрено для команды из библиотеки .NET.</p>
<p></p>
	</td>
    </tr>	
</table>
</body>
</html>