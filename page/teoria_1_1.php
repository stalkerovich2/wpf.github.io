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


		<div  class="zaglav">Появление WPF</div>
	
<p>	
Платформа .NET принесла с собой небольшую лавину новых технологий. Появился совершенно новый способ написания веб-приложений (ASP.NET),
 совершенно новый способ подключения к базам данных (ADO.NET), новые безопасные к типам языки (C# и VB.NET) и управляемая исполняющая среда (CLR). 
Не последнее место занимала и технология Windows Forms — библиотека классов для построения Windows-приложений.
</p>
<p>	
С годами в Microsoft разработали многочисленные инструменты для создания пользовательского интерфейса (C/C++/Windows API, VB6, MFC и т.д.), предназначенные
для построения настольных приложений. Каждый из этих программных инструментов предлагает кодовую базу для представления основных аспектов приложения с графическим интерфейсом,
включая главные окна, диалоговые окна, элементы управления, системы меню и т.п. В начальном выпуске платформы
.NET API-интерфейс Windows Forms быстро стал предпочтительной моделью разработки пользовательских интерфейсов, благодаря его простой, но очень мощной объектной модели.
</p>
<p>	
Хотя с помощью Windows Forms было успешно разработано множество полноценных настольных приложений, следует признать,
что его программная модель довольно ассиметрична. Просто говоря, сборки System.Windows.Forms.dll и System.Drawing.dll
не обеспечивают прямой поддержки многих дополнительных технологий для построения полноценного настольного приложения.
</p>
<p>	
Например, чтобы построить стилизованную блестящую кнопку, придется создать специальный элемент управления и нарисовать каждый аспект этой новой кнопки(во всех разных состояниях), используя низкоуровневую модель рисования. 
Хуже того, обычные окна разрезаются на отдельные области, и каждому элементу управления
 отводится собственная такая область. В результате не существует такого хорошего способа рисования в одном элементе управления (например, эффекта свечения под кнопки), 
 чтобы он распространялся на область, принадлежащую другому элементу. И не стоит даже думать о создании анимационных эффектов вроде вращающегося текста,
 мерцающих кнопок, сворачивающихся окон или активных предварительных просмотров, потому что каждая деталь должна быть нарисована вручную.
 </p>
<p>	
	В <a href="../doc.html" style="color: #ff6600;"><strong>Windows Presentation Foundation (WPF)</strong></a>  эта ситуация изменилась за счет ввода модели с совершенно другим устройством. Хотя платформа WPF включает знакомые стандартные элементы управления, она рисует каждый текст, 
	контур и фон самостоятельно. В результате WPF может предоставить намного более мощные средства, 
	которые позволяют изменить визуализацию любой части экранного содержимого. С помощью этих средств
	можно изменить стиль обычных элементов управления, таких как кнопки, часто даже без написания кода.
	Кроме того, можно применять трансформации объектов для вращения, растяжения, масштабирования и сдвига
	любой части пользовательского интерфейса, и даже использовать встроенную систему анимации WPF, чтобы делать все это прямо на глазах пользователя. 
	И поскольку механизм WPF визуализирует содержимое окна как часть одной операции, он может обрабатывать неограниченное количество слоев перекрывающихся элементов, 
	даже имеющих нерегулярную форму и частичную прозрачность.
</p>

<p>
В основе WPF лежит мощная инфраструктура, основанная на <a title="набор API, разработанных для решения задач, связанных с программированием под Microsoft Windows. " style="color: #ff6600;"><strong>DirectX </strong></a>— API-интерфейсе графики с аппаратным ускорением, который обычно используется в современных компьютерных играх. 
Это означает возможность применения развитых графических эффектов, не платя за это производительностью, как это было в Windows Forms.
</p>

<p>
Фактически даже становятся доступными такие расширенные средства, как поддержка видеофайлов и трехмерное содержимое. Используя эти средства 
(при наличии хорошего инструмента графического дизайна), можно создавать 
бросающиеся в глаза пользовательские интерфейсы и визуальные эффекты, которые были просто невозможны в Windows Forms.
Хотя новейшие средства видео, анимации и 3-D часто привлекают максимум внимания в WPF, важно о
</p>
<p>
Хотя новейшие средства видео, анимации и 3-D часто привлекают максимум внимания в WPF, важно отметить, что WPF можно применять для построения обычных Windows-приложений со стандартными элементами управления и привычным внешним видом.
Фактически использовать стандартные элементы управления в WPF так же легко, как и в Windows Forms. Более того, WPF расширяет средства, адресованные именно бизнес-разработчикам, включая значительно усовершенствованную модель привязки данных, 
набор классов для печати содержимого и управления очередями печати, а также средства работы с документами для отображения огромных объемов форматированного текста. 
Доступна даже модель для построения приложений на основе страниц, которые гладко работают в Internet Explorer и могут запускаться с веб-сайта — и все это без привычных предупреждений о безопасности или надоедливых приглашений к установке.
</p>

	</td>
    </tr>	
</table>


</body>
</html>