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
		<div  class="zaglav">Компановка</div>
<p>
При проектировании пользовательского интерфейса приложения необходимо сформировать в окне или странице требуемые элементы управления и задать нужные свойства, т.е. провести организацию содержимого. Этот процесс называется <a  style="color: #ff6600;"><strong>компоновкой</strong></a>.
</p>
<p>В WPF компоновка осуществляется с использованием различных контейнеров. Каждый контейнер обладает своей собственной логикой компоновки – некоторые укладывают элементы последовательно в строки, другие организуют их в сетку невидимых ячеек.</p>
<p>Окно и страница в WPF может содержать только один элемент - контейнер. В контейнер можно поместить различные элементы пользовательского интерфейса и другие контейнеры. Компоновка в WPF определяется типом используемого контейнера. Контейнеры компоновки WPF– это панели, порожденные от абстрактного класса System.Windows.Controls.Panel. Для компоновки в приложениях используются следующие классы:</p>
<ul id="spisok">
	<li>
	Grid и UniformGrid – размещают элементы в строки и колонки в соответствии с невидимой таблицей;
	</li>
	<li>
	StackPanel – размещает элементы в горизонтальные и вертикальные стопки. Этот контейнер часто используется для организации небольших участков более крупного и сложного окна;
	</li>
	<li>
	WrapPanel – размещает элементы управления в доступном пространстве, по одной строке или колонке;
	</li>
	<li>DockPanel - размещает элементы управления относительно одного из своих внешних краев;</li>
	<li>Frame – аналогичен StackPanel, но является предпочтительным способом упаковки содержимого для переходов на страницы.</li>
</ul>
<p>Grid является наиболее мощным контейнером в WPF. Большая часть всего, что можно сделать с помощью других контейнеров компоновки, можно выполнить в Grid. Grid является идеальным инструментом для разделения окна (страницы) на более мелкие области, которыми можно будет управлять с помощью других панелей.</p>
<p>Grid распределяет элементы по сетке невидимых строк и столбцы. В одну ячейку сетки целесообразно помещать один элемент, который при необходимости может быть сам другим контейнером компоновки, в котором можно создать собственную группу элементов управления.</p>
<p>Панель StackPanel является одним из простейших контейнеров компоновки. Данная панель укладывает свои дочерние элементы в одну строку или колонку.</p>
<p>Контейнер UniformGrid, в отличие от Grid, требует установки только количества строк и столбцов и формирует ячейки одинакового размера, которые занимают всё доступное пространство окна (страницы) или элемента внешнего контейнера.</p>
<p>WrapPanel в зависимости от свойства Orientation упорядочивает элементы управления горизонтально ( Horizontal ) или вертикально ( Vertical ), заполняя текущий размер панели. При горизонтальном расположении элементы управления могут переноситься на следующую строку, а при вертикальном – на следующий столбец.</p>
<p>Панель DockPanel осуществляет пристыковку элементов управления к одной из своих сторон в зависимости от значения свойства Dock, которое может принимать значения Left, Right, Top или Bottom. Так если элемент управления был пристыкован к верхней части DockPanel, то он растягивается и будет занимать всю ширину панели, принимая такую высоту, какая определена параметром MaxHeight.</p>
<p>Frame является элементом управления содержимым, который предоставляет возможность перехода к содержимому и его отображения. Frame можно разместить внутри другого содержимого, как и другие элементы управления и элементы. Содержимое может быть любым типом объекта .NET Framework и файлов HTML. Обычно Frame используется для упаковки содержимого определяющего переходы на страницы.</p>
<p>Свойства компоновки определяются контейнером, но дочерние элементы также оказывают на неё определенное влияние. Панели компоновки работают в согласии со своими дочерними элементами благодаря следующим свойствам:</p>
<ul id="spisok">
	<li>
	HorizontalAlignment и VerticalAlignment – определяет, как дочерний элемент позиционируется внутри компоновки, когда имеется дополнительное пространство по горизонтали/вертикали;
	</li>
	<li>
	Margin – добавляет пустое пространство вокруг элемента;
	</li>
	<li>
	MinWidth и MaxWidth – устанавливает максимальные размерности для элемента;
	</li>
	<li>Width и Height – явно устанавливает размеры элемента.</li>
</ul>
<p>В WPF существуют контейнеры, которые располагают элементы управления в соответствии заданными координатами, заданными размерами. Это контейнеры Canvas и InkCanvas. Данные контейнеры в большей степени предназначены для визуализации графических примитивов и фигур.</p>



	</td>
    </tr>	
</table>


</body>
</html>