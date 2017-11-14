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
		<div  class="zaglav">Структура WPF</div>
<a  style="color: #ff6600;"><strong>WPF</strong></a>- система для построения клиентских Windows приложений для технологии Microsoft.NET с визуально привлекательными возможностями взаимодействия с пользователем. С помощью WPF можно создавать широкий спектр как автономных, так и размещенных в браузере приложений.
</p>
<p>В основе WPF лежит векторная система визуализации, не зависящая от разрешения и созданная с расчетом на возможности современного графического оборудования. WPF предоставляет средства для создания визуального интерфейса, включая язык XAML, элементы управления, привязку данных, макеты, двухмерную и трехмерную графику, анимацию, стили, шаблоны, документы, текст, мультимедиа и оформление.</p>
<p>Графической технологией, лежащей в основе WPF, является DirectX, в отличие от Windows Forms, где используется GDI/GDI+. Производительность WPF выше, чем у GDI+ за счёт использования аппаратного ускорения графики через DirectX.</p>
<p>WPF обеспечивает интерфейс пользователя высокого уровня и предоставляет следующие возможности:</p>
<ul id="spisok">
	<li>
	веб-подобную модель компоновки, которая обеспечивает размещение и упорядочивание элементов управления по их содержимому;
	</li>
	<li>
	многофункциональную модель рисования на базе графических примитивов (базовых форм, текстовых блоков, графических ингредиентов);
	</li>
	<li>
	модель с форматированным текстом, которая обеспечивает отображение форматированного стилизованного текста в любой части пользовательского интерфейса, комбинирования текста со списками, рисунками и другими интерфейсными элементами;
	</li>
	<li>задание анимации с помощью декларативных дескрипторов;</li>
	<li>поддержка аудиовизуальной среды для проигрывания любых аудио- и видеофайлов;</li>
	<li>стили и шаблоны, которые позволяют стандартизировать форматирование и управление визуализацией элементов управления, а также повторно использовать эти решения в различных местах проекта;</li>
	<li>команды, которые позволяют определять их в одном месте и многократно связывать с различными элементами управления в приложении;</li>
	<li>декларативный пользовательский интерфейс, который позволяет описывать содержимое окон или страниц с помощью языка XAML.</li>
</ul>
<div id="statya">
	<h3 id="r1">Рис. 1 Архитектура WPF</h3>
   <img id="img" src="../img/r1_1_3.jpg">
</div>
<p>Компонент <a  style="color: #ff6600;"><strong>PresentationFramework</strong></a> содержит типы WPF верхнего уровня, включая представление окна, панелей и других элементов управления. PresentationCore содержит базовые типы, такие как UIElement и Visual, от которых порождаются все формы и элементы управления. WindowsBase включает различные типы, которые могут использоваться за пределами WPF, в частности, компоненты DispatchObject и DependencyObject. Компонент milcore является ядром визуализации WPF. WindowsCodecs представляет собой низкоуровневый API-интерфейс для поддержки создания изображений. Direct 3D также является низкоуровневым API-интерфейсом, через который осуществляется визуализация всей графики в WPF. User32 используется для определения, какая программа получает тот или иной участок экрана.</p>
<p>Архитектура WPF определяет основные пространства имен для иерархии классов. Базовый набор элементов управления WPF определяет ключевые иерархии классов системы (<a href="#r2">Рис. 2</a>). На рис. 2 абстрактные классы изображены овалами, а конкретные классы – прямоугольниками.</p>
<div id="statya">
	<h3 id="r2">Рис. 2 Фундаментальные классы WPF</h3>
   <img  id="img" src="../img/r2_1_3.jpg">
</div>
<p>Большинство объектов в WPF являются производными от абстрактного класса DispatcherObject. WPF основана на системе обмена сообщениями, которые для пользовательского интерфейса формируются в одном потоке, который управляется и контролируется диспетчером. Класс DispatcherObject обеспечивает для каждого интерфейсного элемента приложения проверку выполнения в потоке и доступ к диспетчеру.</p>
<p>Классы WPF получают поддержку свойств зависимости за счет порождения от класса DependencyObject.</p>
<p>Класс Visual является единичным объектом, который инкапсулирует инструкции и подробности, а также базовую функциональность рисования. Интерфейсные элементы WPF для визуализации должны порождаться, в конечном счете, от класса Visual.p>
<p>Все пользовательские элементы управления являются потомками классов UIElement или FrameworkElement. Класс UIElement поддерживает такую функциональность как компоновка, ввод, фокус и события. Класс FrameworkElement добавляет к функциональности UIElement задание полей, выравнивание, поддержку связывания данных, анимацию и стили.</p>
<p>Класс Shape является базовым для построения таких геометрических форм как прямоугольник, эллипс, многоугольник, линия и путь.</p>
<p>Класс Control определяет элементы управления, которые могут взаимодействовать с пользователем. Это кнопки, списки, текстовые элементы.</p>
<p>Классы ContentControl и ItemsControl являются базовыми для элементов управления, которые могут иметь содержание единственное или коллекцию соответственно.</p>
<p>Класс Panel является базовым для всех контейнеров компоновки – элементов, которые могут содержать один или большее число дочерних элементов.</p>
<div class="btn_lab_and_lection"><a href="laba1.php">Перейти к лабараторной работе 1</a></div>
	</td>
    </tr>	
</table>
</body>
</html>