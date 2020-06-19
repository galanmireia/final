<?function sEscribir($istrTexto)
{
$strTexto="";
switch($_SESSION["einstein_idioma"]){
case "es":
switch($istrTexto){
case "5Septiembre": $strTexto="5 Septiembre";break;
case "6Septiembre": $strTexto="6 Septiembre";break;
case "7Septiembre": $strTexto="7 Septiembre";break;
case "8Septiembre": $strTexto="8 Septiembre";break;
case "Patrocinadores": $strTexto="Patrocinadores";break;
case "AlbertEinstein": $strTexto="Albert Einstein";break;
case "Alojamientos": $strTexto="Alojamientos";break;
case "Becas": $strTexto="Becas";break;
case "BuscadorNoticias": $strTexto="Buscador de noticias";break;
case "ComiteOrganizativo": $strTexto="Comit� Organizador";break;
case "ComoInscribirse": $strTexto="C�mo inscribirse";break;
case "ComoLlegarASanSebastian": $strTexto="C�mo llegar a<br>San Sebasti�n";break;
case "Contacto": $strTexto="Contacto";break;
case "Copyright": $strTexto="Copyright";break;
case "Culminacion": $strTexto="Culminaci�n de la relatividad";break;
case "DIPC": $strTexto="DIPC";break;
case "DossierDePrensa": $strTexto="Dossier de prensa";break;
case "ElPaisVasco": $strTexto="El Pa�s Vasco";break;
case "EnTotal": $strTexto="en total";break;
case "EventosParalelos": $strTexto="Eventos paralelos";break;
case "FormularioDeAcreditacion": $strTexto="Formulario de acreditaci�n";break;
case "GaleriaDeImagenes": $strTexto="Galer�a de im�genes";break;
case "Home": $strTexto="Home";break;
case "ImpactoDeLaObra": $strTexto="Impacto de la obra";break;
case "InformacionGeneral": $strTexto="Informaci�n general";break;
case "Inscripciones": $strTexto="Inscripciones";break;
case "Introduccion": $strTexto="Introducci�n";break;
case "Kutxaespacio": $strTexto="Exposici�n";break;
case "LaCiudad": $strTexto="La ciudad";break;
case "LaSede": $strTexto="La sede";break;
case "Links": $strTexto="Links";break;
case "LosCincoTrabajosDeEinstein": $strTexto="Los cinco trabajos de Einstein";break;
case "VerDiferido": $strTexto="Congreso online";break;
case "VerDiferidoURL": $strTexto="http://www.digitalak.com/einstein/einsteinesp.html";break;
case "Patrocinadores": $strTexto="Patrocinadores";break;
case "Ponentes": $strTexto="Ponentes";break;
case "Presentacion": $strTexto="Presentaci�n";break;
case "Programa": $strTexto="Programa";break;
case "SalaDePrensa": $strTexto="Sala de prensa";break;
case "Significado": $strTexto="Significado y transcendencia para la Sociedad Vasca";break;
case "SobreElEvento": $strTexto="Sobre el evento";break;
case "Subir": $strTexto="Top";break;
case "UltimasNoticias": $strTexto="�ltimas noticias";break;
case "VidayObra": $strTexto="Vida y Obra";break;
case "Visualizando": $strTexto="Visualizando";break;
case "Volver": $strTexto="Volver";break;
case "CAST": $strTexto="";break;
case "ENGL": $strTexto="";break;
case "EUSK": $strTexto="";break;
case "Ponentes": $strTexto="Ponentes";break;
case "Ponente1": $strTexto="Teor�a de la informaci�n qu�ntica: Retos y perspectivas.";break;
case "Ponente2": $strTexto="Condensados Bose-Einstein una nueva forma de materia";break;
case "Ponente3": $strTexto="Materia y Forma.";break;
case "Ponente4": $strTexto="1. Einstein y el Tiempo.<br>2. Agujeros negros.";break;
case "Ponente5": $strTexto="�Qu� es una teor�a unficada?";break;
case "Ponente6": $strTexto="El movimiento browniano y los motores moleculares.";break;
case "Ponente7": $strTexto="F�sica Pulsar y ensayos de Einstein.";break;
case "Ponente8": $strTexto="Einstein: Qui�n pens� que era y porqu� a�nsigue vivo hoy en d�a.";break;
case "Ponente9": $strTexto="Pasos hacia la materia compleja:<br>Informaci�n, auto-organizaci�n y adaptaci�n en sistemas qu�micos.";break;
case "Ponente10": $strTexto="<i>Einstein, Picasso:</i><br>, el Espacio, el tiempo y la belleza que causa estragos.";break;
case "Ponente11": $strTexto="Einstein y los cuantos de luz.";break;
case "Ponente12": $strTexto="Origen y evoluci�n del universo:<br>El reto de la cosmolog�a ";break;
case "Ponente13": $strTexto="Lo nano es diferente.";break;
case "Ponente14": $strTexto="Einstein y la filosof�a en el siglo XX.";break;
case "Ponente15": $strTexto="El gran sue�o de Einstein:<br>Una f�sica independiente.";break;
case "Ponente16": $strTexto="1. La confrontaci�n entre relatividad general y experimento.<br>2. �Ten�a raz�n Einstein?";break;
case "Ponente17": $strTexto="Relatividad, fotones y part�culas.";break;
case "Ponente18": $strTexto="Einstein y el mundo cu�ntico en la actualidad.";break;
case "Lunes5deSeptiembre": $strTexto="Lunes 5 de Septiembre";break;
case "Martes6deSeptiembre": $strTexto="Martes 6 de Septiembre";break;
case "Miercoles7deSeptiembre": $strTexto="Mi�rcoles 7 de Septiembre";break;
case "Jueves8deSeptiembre": $strTexto="Jueves 8 de Septiembre";break;
case "InfoGeneral_Introduccion":
$strTexto="<b>Presentaci�n</b>".
"<br><br>La <a href='http://dipc.ehu.es/' target='_blank'><u>Fundaci�n Donostia International Physics Center (DIPC)</u></a>, se suma, en el A�o Mundial de la F�sica, a las conmemoraciones del centenario del <i>Annus Mirabilis</i> de Albert Einstein.".
"<br><br>Este a�o es el centenario de un a�o asombroso para la ciencia universal: 1905. Un a�o en el que un desconocido funcionario de patentes en Berna, public� cinco trabajos que cambiar�an el curso de la f�sica, de la ciencia, y de la humanidad. La conmemoraci�n del <i>Annus Mirabilis</i> de Einstein resalta la importancia de la ciencia como motor del conocimiento y catalizador del desarrollo tecnol�gico y socioecon�mico.".
"<br><br>La figura de Einstein representa adem�s un excelente ejemplo para las nuevas generaciones. Su creatividad e intuici�n le guiaron en su sue�o de entender el Universo de otra manera.".
"<br><br>Estamos preparando una serie de actos conmemorativos del <i>Annus Mirabilis</i> de Einstein que pretenden poner en contacto a la sociedad con la actividad investigadora del m�s alto nivel. La invitamos a examinar nuestro <a href='index.php?pg=1&opcion=20' target='_parent'><u>programa</u></a>.".
"<br><br>Los investigadores invitados son parte de la elite mundial. Los actos programados incluir�n conferencias plenarias y tem�ticas, as� como exposiciones para presentar la figura de Einstein a los ni�os y j�venes.".
"<br><br>La inscripci�n para los actos ser� gratuita. La organizaci�n otorgar� un n�mero de becas para cubrir los gastos de asistencia".
"<br><br>Esperamos que disfrute en su d�a de los actos que estamos organizando, y de la ciudad de <a href='index.php?pg=1&opcion=21' target='_parent'><u>San Sebasti�n</u></a>".
"<br><br><b>Pedro Miguel Echenique ".
"<br>Presidente de DIPC</b>";break;
case "Menu_Patrocinadores":
$strTexto = "<table width=100% border=0><tr>".
"<td align=center><a href='http://www.ehu.es/' target='_blank'><img src=images/upv.jpg border=0><br>&nbsp;<u>Universidad del Pa�s Vasco</u></a></td>".
"<td align=center><a href='http://www.kutxa.net' target='_blank'><img src=images/kutxa.jpg border=0><br>&nbsp;<u>".sEscribir("Kutxa")."</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.hezkuntza.ejgv.euskadi.net' target='_blank'><img src=images/gob1.jpg border=0><br>&nbsp;<u>Gobierno Vasco<br>Departamento de Educacion, <br>Universidades e Investigaci�n</u></a></td>".
"<td align=center><a href='http://www.industria.ejgv.euskadi.net' target='_blank'><img src=images/gob2.jpg border=0><br>&nbsp;<u>Gobierno Vasco<br>Departamento de Industria,<br>Comercio y Turismo </u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.gipuzkoa.net' target='_blank'><img src=images/foro.jpg border=0><br>&nbsp;<u>Diputaci�n Foral de Gipuzkoa</u></a></td>".
"<td align=center><a href='http://www.donostia.org' target='_blank'><img src=images/ayunta.jpg border=0><br>&nbsp;<u>Ayuntamiento de San Sebasti�n.</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.csic.es' target='_blank'><img src=images/csic.gif border=0><br>&nbsp;<u>Consejo Superior de<br>Investigaciones Cient�ficas</u></a></td>".
"<td align=center><a href='http://www.naturgas.es' target='_blank'><img src=images/LogoNaturgas.jpg border=0><br>&nbsp;<u>Naturgas</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.fundacion.telefonica.com' target='_blank'><img src=images/LogoTelefonica.jpg border=0><br>&nbsp;<u>Fundaci�n Telef�nica</u></a></td>".
"<td align=center></td></tr></table>";break;
case "Info_PaisVasco":
$strTexto = "<b>El Pa�s Vasco</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Naturaleza:</b> ".
"<br>El Pa�s Vasco, territorio industrial y densamente poblado, cuenta con un importante Patrimonio Natural formado por ricos ecosistemas que cuentan con una especial protecci�n. Parques Naturales, Reservas de la Biosfera y Biotopos Protegidos.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Cultura:</b> ".
"<br>La vida cultural en el Pa�s Vasco est� en auge y es uno de los elementos dinamizadores de esta sociedad. Museos, monumentos, fiestas, eventos.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Ocio:</b> ".
"<br>La diversidad del Pa�s Vasco, permite escoger al visitante entre una completa y variada oferta de  ocio. Turismo activo, relax, compras.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Gastronom�a:</b> ".
"<br>La Cocina Vasca esta considerada como una de las de mayor prestigio internacional.".
"<br><br>Afirman quienes nos visitan que, ya sea en un merendero, restaurante, asador o sidrer�a, en el Pa�s Vasco se come muy bien. ".
"<br><br>La cocina tradicional basada en la calidad de sus productos es de sencilla elaboraci�n, de gran arraigo popular y en la que los productos del mar son los protagonistas, sin olvidar las carnes magras y sabrosas, los productos ligados a la tierra como las alubias o los derivados l�cteos como el queso y la cuajada. Estos y otros productos completan el sabrosos recetario de la gastronom�a tradicional".
"<br><br><table border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom> ".
"<img src='images/ico_info.jpg'> <b>Informaci�n:</b> ".
"<br><br>� Informaci�n general: <a href='http://www.paisvasco.com' target='_blank'><u>www.paisvasco.com</u></a> ".
"<br>� Informaci�n Gobierno Vasco: <a href='http://www.euskadi.net' target='_blank'><u>www.euskadi.net</u></a> ".
"<br>� Informaci�n Turismo: <a href='http://www.euskaditurismoa.net' target='_blank'><u>www.euskaditurismoa.net</u></a> ".
"</center></td></tr></table>";break;
case "Info_LaCiudad":
$strTexto= "<b>La ciudad</b> ".
"<br><br>Donostia-San Sebasti�n (<a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>ver mapa</u></a>) es la capital de Gipuzkoa y una de las ciudades m�s emblem�ticas del estado. Su privilegiada ubicaci�n y la belleza de su entorno, la han convertido durante muchos a�os en un importante centro tur�stico tanto a nivel nacional como internacional.".
"<br><br><center><img src='images/3.jpg'> &nbsp;&nbsp; <img src='images/4.jpg'></center> ".
"<br><br>La ciudad combina el pasado y la modernidad sin perder la esencia que siempre le ha caracterizado. Con el paso del tiempo, se han conservado tradiciones que hoy en d�a conviven sin dificultad con los mayores adelantos. As�, ofrece a sus visitantes el mejor escenario para el relax, el turismo y el ocio, sin dejar de ser un moderno centro de negocios con el <a href='index.php?pg=4&opcion=7'><u>Palacio de Congresos y Auditorio Kursaal </u></a>como protagonista..".
"<br><br>Todo aquel que llega a San Sebasti�n puede disfrutar de paseos por calles y playas; saborear los t�picos pintxos donostiarras en su Parte Vieja; visitar museos, el Aquarium, y numerosos centros culturales; relajarse con una sesi�n de Talasoterapia o con las magn�ficas vistas desde los dos montes que guardan la ciudad, Urgull e Igeldo; pasar una tarde entretenida de carreras de caballos en el Hip�dromo; o, indispensable, disfrutar de la excelente gastronom�a de la ciudad en cualquiera de sus rincones.".
"<br><br>Asimismo los que se acercan hasta aqu� por motivos de negocios, encuentran una ciudad hospitalaria con una inmejorable infraestructura de alojamientos, restaurantes y transportes.".
"<br><br>No hay que olvidar tampoco que por su privilegiado enclave Donostia es un punto de salida hacia otros lugares de inter�s del Pa�s Vasco y Francia, como Pamplona, Bilbao o Vitoria; Getaria, Hondarribia, Tolosa y el santuario de Ar�nzazu; San Juan o el Pa�s Vasco Franc�s con sus encantos.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Informaci�n sobre San Sebasti�n:</b>".
"<br>C.A.T. (Centro de Atracci�n y Turismo -Oficina de Turismo): en Reina Regente, s/n, cerca del Boulevard donostiarra, en el edificio del teatro Victoria Eugenia (tel�fono 943.481166).".
"<br><br>Information ".
"<br><br>Gipuzkoa: <a href='http://www.sansebastianturismo.com/index.htm' target='_blank'><u>www.sansebastianturismo.com</u></a>".
"<br><br><center><img src='images/5.jpg'> &nbsp;&nbsp; <img src='images/1.jpg'></center> ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Gastronom�a-D�nde Comer:</b>".
"<br>Si por algo se caracteriza Donostia-San Sebasti�n es por su fama y bien ganada tradici�n, de ciudad donde se come fenomenal. Pero eso no quiere decir que tengamos que disponer de grandes cantidades de dinero. Por poco dinero se pueden desgustar grandes manjares en los conocidos bares de pintxos o en las sidrer�as.".
"<br><br>De todas maneras si lo que desea es acudir a un buen restaurante, le ofrecemos una lista de los m�s afamados restaurantes de esta ciudad.".
"<br><br><table width=90% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td>".
"<table width=100% align=center border=0 cellspacing=0><tr><td class=textom width=50%> ".
"� <b>Arzak</b> (Juan Mari Arzak)<br>Alto de Miracruz, 21 <br>943.278465 - 943.285593	".
"<br><br>� <b>Akelarre</b> (Pedro Subijana)<br>Paseo Padre Orkolaga, 56<br>943.212052".
"<br><br>� <b>Martin Berasategi</b> (Martin Berasategi)<br>Loidi, 4 - Lasarte	943.366471".
"</td><td class=textom width=50%>".
"� <b>Casa Nicolasa</b> (Jos� Juan Castillo)<br>Aldamar, 4<br>943.421762, 943.420755".
"<br><br>� <b>Urepel</b> (Tom�s Almandoz)<br>Paseo Salamanca, 3<br>943.42.40.40".
"<br><br><b>� Panier Fleuri</b> (M� Jes�s Fombellida) <br>Paseo Salamanca,1	943.42.42.05 ".
"</td></tr></table></td></tr></table>".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b> Sidrer�as:</b> ".
"<br><br><table width=90% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom> ".
"<b>� ALBIZTUR</b>	Matia, 52 (Antiguo) Tel: 943 21 18 01 <br> Menu Especial: 15.63� - 21.04� Men� a la carta: 24� - 30� ".
"<br><br><b>� AMEZTI</b> P� Cristobal Balenciaga, 65 (Igeldo)<br>Tel: 943.21.73.23	 ".
"<br><br><b>� BARKAIZTEGI</b>	Camino Barkaiztegi, 42 (Martutene)<br>Tel: 943 45 55 01<br>  Men� a la carta: 22.50� ".
"<br><br><b>� DONOSTIARRA</b>	Embeltr�n, 5 (Parte Vieja)	Tel: 943 42 04 21 <br>Men� del d�a: 24.50�.	 Men� a la carta: 20� - 40�. ".
"<br><br><b>� GARBERA</b>	Ctro. Cial. Garbera Tel: 943:39.43.58 ".
"<br><br><b>� IGELDO</b>	P� Orkolaga, 8 (Igueldo) Tel: 943.21.32.51 Men� a la carta: 24�- 25� ".
"<br><br><b>� ITXAROPENA</b>	Embeltran 16 	Tel: 943.42.45.76<br> Men� de Sidreria: �21 ".
"<br><br><b>� IZAGIRRE</b>	Bidarte Berri A�orga	Tel: 943.36.14.70 ".
"<br><br><b>� KUKUA</b>	Avda. Alcalde Jose Elosegi, 21 (Gros)<br>Tel: 943 27 16 29	 Men� a la carta: 27� ".
"<br><br><b>� URKIOLA</b>	Camino de Igara, 37	Tel: 943.21.01.68	<br> Men� a la carta: 21� - 25� ".
"<br><br><b>� LA CEPA</b>	San Bartolom�, 30-32 (Centro) 	Tel: 943 46 03 33	Men� del d�a: 8� <br> Men� a la carta: 19� ".
"<br><br><b>� ZINGI - ZANGA</b>	Florida Kalea, 54 (Hernani) 	Tel: 943 33 03 97 ".
"</td></tr></table>".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Fiestas populares y Festivales </b> ".
"<br><br><b>� 20 Enero:</b> D�a de San Sebasti�n. El acontecimiento m�s importante para los donostiarras es el d�a de su patr�n. Se celebra la Tamborrada. Dura las 24 horas del d�a 20, desde las 0 a las 24 horas.".
"<br><br><b>� Carnavales:</b> Febrero".
"<br><br><b>� 23 Junio:</b> Fuegos en la noche de San Juan.".
"<br><br><b>� Julio:</b> Carreras de caballo en el hip�dromo de Zubieta.".
"<br><br><b>� Julio</b>, segunda quincena: Jazzaldia, Festivas Internacional de Jazz.".
"<br><br><b>� Agosto:</b> Quincena Musical".
"<br><br><b>� Semana Grande:</b> Agosto, la semana del 15 de agosto, de domingo a domingo. Se celebra la Semana Grande (Aste Nagusia) con el concurso internacional de fuegos artificiales cada noche a las 23:00, todo tipo de m�sica en las calles, actividades deportivas como la Cl�sica ciclista San Sebasti�n-San Sebasti�n, corridas de toros y un cargado programa de actividades.".
"<br><br><b>� Septiembre, del primer al segundo domingo:</b> Euskal Jaiak. Fiestas Vascas, programa lleno de actividades relacionadas con la cultura vasca, desde cantautores, grupos, conciertos de m�sica cl�sica, bailes, deporte rural, espect�culos, etc. Tanto el primer domingo como el segundo se celebran las famosas Estropadak (regatas de traineras) en la Bah�a de la Concha.".
"<br><br><b>� Septiembre, segunda quincena:</b> se celebra el Festival Internacional de Cine.".
"<br><br><b>� 21 Diciembre: </b> se celebra el d�a de Santo Tom�s, feria con fuerte influencia rural.".
"<br><br><center><img src='images/2.jpg'></center> ".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b> Gu�a de servicios  </b> ".
"<br><br>� <b>Ir de compras:</b> Tradicionalmente el comercio relacionado con la moda se situa en el Centro, donde se puede encontrar f�cilmente lo que se est� buscando en algunas de sus numerosas tiendas especializadas. Si desea adquirir artesan�a, accesorios, souvenirs, etc probar en la Parte Vieja. Para adquirir comida, existe tres grandes hipermercados fuera de la ciudad (Garbera, Alcampo y Carrefour, Garbera es el m�s cercano), pero se necesita coche.".
"<br><br>� <b>Recorrer la ciudad</b>".
"<br><br>� <b>Tren Txu-txu:</b> Salida y llegada Ayuntamiento, tiene un recorrido por la Concha, el Antiguo y el Centro de San Sebasti�n. Tel. 943.422973/669.114143. Fax 943.481172.".
"<br><br>� <b>Autob�s Tur�stico:</b> Tel. 630.708735.".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Informaci�n Complementaria:</b>".
"<br><br>� <b>Talasoterapia:</b> Termas La Perla (Paseo de la Concha, s/n, 943.458856). ".
"<br><br>� <b>Taxis:</b> ".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vallina (Tel: 943.404040) ".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Easo (Tel: 943.464646).".
"<br><br>� <b>Bancos:</b> Bancos y Cajas de Ahorro: El horario al p�blico de los bancos y cajas es de 8,30 a 14 horas. Los s�bados de 9 a 13 horas (excepto en verano). Algunas sucursales tambi�n abren en horario de tarde entre las 16 y 17,30 horas.".
"<br><br>� <b>Tel�fonos de inter�s:</b>".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emergencias (Sos Deiak): 112".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DYA (Ayuda en Carretera): 943.464622".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Farmacias: 943.429117".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radio Taxi Easo: 943.467666".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Renfe - Informaci�n:: 943.283599".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eusko Tren: 943.450131".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aeropuerto Hondarribia: 943.668500".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oficina de Turismo: 943.423101";break;
case "InfoGeneral_Kutxaespacio":
$strTexto="<b>Miramon. KutxaEspacio de la Ciencia</b>".
"<br><br>El KutxaEspacio de la Ciencia como centro de informaci�n y".
" divulgaci�n cient�fica tiene previsto organizar una exposici�n".
" paralela a la celebraci�n de los actos para conmemorar la".
" celebraci�n del <i>Annus Mirabilis</i> de Albert Einstein.".
"<br><center><img src='images/kutxaespacio.jpg'><br>".
"<br><table border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom>".
"<center><b>Miramon. KutxaEspacio de la Ciencia</b>".
"<br><br>Mikeletegi, 43. 20009 Donostia - San Sebasti�n. Gipuzkoa".
"<br><a href='http://www.miramon.org' target='_blank'><u>www.miramon.org</u></a>".
"<br>Informaci�n: 943-012478".
"<br>Reservas: 943-012917".
"</center></td></tr></table></center>";break;
case "InfoGeneral_ComoLlegar":
$strTexto="<b>C�mo llegar a San Sebasti�n</b><br><br>Donostia-San Sebasti�n es una ciudad costera del Golfo de Vizcaya ".
"(Mar Cant�brico, Oceano Atl�ntico) situada en el Pa�s Vasco en le ".
"territorio hist�rico de Gipuzkoa. Hay 20 km a la frontera vascofrancesa.".
"<br><br>(<a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>Ver mapa</u></a>) ".
"<br><br>Podemos llegar a San Sebasti�n por: ".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#tren'><u>Tren</u></a> ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#avion'><u>Avi�n</u></a> ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#carretera'><u>Carretera</u></a> ".
"<br><br><br><a name='tren'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Tren:</b>".
"<br><br>Desde <b>Madrid</b>, mediante <a href='http://www.renfe.es' target='_blank'><u>RENFE</u></a> se puede llegar a San Sebasti�n, ".
"o incluso hasta Ir�n o frontera con Francia. Tambi�n hay trenes que lo conectan con Barcelona. Se recomienda tomar un tren nocturno desde Madrid o Barcelona (sobre las 6 horas desde ".
"Madrid, 7 desde Barcelona).<br><br>Desde <b>Par�s</b> se puede tomar el TGV (Tren de Alta Velocidad ".
"perteneciente a la compa��a francesa <a href='http://www.sncf.fr' target='_blank'><u>SNCF</u></a>) hasta Hendaia/Hendaye, ".
"y combinarlo en sus �ltimos 20 km con el tren, llamado 'Topo' de ".
"la compa��a <a href='http://www.euskotren.es' target='_blank'><u>Eusko Tren</u></a>, que enlaza Hendaia con Donostia (ambas ".
"estaciones de tren est�n una en frente de la otra en Hendaia). ".
"Desde Bilbao o Pamplona es m�s aconsejable viajar en autob�s. ".
"<br><br> <img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Informaci�n:</b> ".
"<br><br><table align=center width=80% border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td><table><tr><td width='45%' class=textom valign=top> ".
"<b>RENFE</b><br>Estaci�n del Norte - P� de Francia<br>L�neas: Largo recorrido ".
"<br>Cercan�as: Irun - Brinkola<br>Tlf.: 902 24 02 02<br><a href='http://www.renfe.es' target='_blank'><u>www.renfe.es</u></a></td> ".
"<td width='55%' class=textom><b>EUSKOTREN</b><br>Estaci�n de Amara - Pl. Easo, s/n ".
"<br>L�neas: Hendaye (Francia) �<br>Donostia/San Sebasti�n - Lasarte (Topo)<br>".
"<br>Tf.: 902 54 32 10<br><a href='http://www.euskotren.es' target='_blank'><u>www.euskotren.es</u></a></td> ".
"</tr></table></td></tr></table><br><br><br><br> ".
"<a name='avion'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Avi�n:</b> ".
"<br><br>Desde <b>Madrid</b> hay dos vuelos diarios a San Sebasti�n. ".
"Desde <b>Barcelona</b> uno diario. El aeropuerto est� situado en ".
"Hondarribia/Fuenterrabia. Desde el aeropuerto se puede tomar ".
"tanto un autob�s tanto un taxi para llegar a Donostia. ".
"<br><br><img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Informaci�n:</b> ".
"<br><br><table width=80% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td class=textom><b>Aeropuerto de Donostia-San Sebasti�n (EAS)</b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Situaci�n: a 20 Km. de Donostia-San Sebasti�n y 5 Km. de Ir�n.<br>C/ Gabarrari 5 y 22. 20280 HONDARRIBIA. ".
"<br>Centralita: 943 66 85 00 ".
"<br>Iberia Informaci�n: 943.66.85.21 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"</td></tr></table>".
"<br><br><table width=80% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td class=textom><b>Aeropuerto de Biarritz</b> ".
"<br><br>Situaci�n: Route Nationale 10. 64600 Anglet (Francia)<br>Situado a 40 km de San Sebasti�n por autopista (45�).".
"<br>Tel. (+33) 5 59 43 83 83 ".
"<br>AIR FRANCE. Tel (+33) 820.820.820<br>Informaci�n sobre vuelos Tel. (+33) 836.68.10.48".
"<br><a href='http://www.airfrance.com' target='_blank'><u>www.airfrance.com</u></a> ".
"</td></tr></table>".
"<br><br><table width=80% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td class=textom><b>Aeropuerto de Bilbao </b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Situaci�n: a 10 Km. (6 millas) de Bilbao<br>Ctra. As�a-Erletxes, s/n - 48.150 Loiu".
"<br>Informaci�n general: 94 486 96 63/64".
"<br>Iberia Informaci�n: 943.66.85.21 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"</td></tr></table><br><br> ".
"<br><br><br><a name='carretera'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Carretera:</b> ".
"<br><br><b>> Automovil:</b> ".
"<br><br> ".
"Desde <b>Madrid</b> se recomienda coger la carretera N-I (Nacional ".
"Uno), v�a Burgos y Vitoria-Gasteiz; una alternativa a esta carretera ".
"consistir�a en tomar la autopista de peaje entre Burgos y Miranda ".
"de Ebro, y tomar otra autopista de pago entre Vitoria hasta Durango ".
"(direcci�n Bilbao) y despu�s por la autopista de pago A-8 hasta ".
"Donostia. Sobre 5 horas. ".
"<br><br> ".
"Desde <b>Barcelona</b> tomar la N-II hasta Zaragoza, despu�s dirigirse ".
"por la N-121 hasta Pamplona. Aunque sea una buena carretera la ".
"alternativa consiste en tomar la autopista de peaje. Sobre 6 horas. ".
"Desde Bilbao coger la autopista A-8 para llegar a Donostia-San ".
"Sebasti�n, se llega en una hora; o tomar la carretera nacional (2 ".
"o 3 horas dependiendo del tr�fico, intenso por lo general). Si no ".
"se tiene prisa, ser�a recomendable ir por la carretera nacional para ".
"poder visitar diversos pueblos de la costa vasca (Gernika, Lekeitio, ".
"Ondarroa, Mutriku, Getaria, Zumaia, Zarautz, Orio, etc). ".
"<br><br> Desde <b>Pamplona</b> coger la A-15 y la N-I para llegar a San Sebasti�n. ".
"Son sobre 45 minutos-1 hora. ".
"<br><br> Desde <b>Par�s</b> coger la autopista de pago A-10 hasta la frontera ".
"francoespa�ola (v�a Orleans, Tours, Poitiers, Bordeaux) y la autopista ".
"de pago A-8 desde la frontera a Donostia. Alternativas gratuitas ".
"ser�an la N-10 en Franc�a y la N-I una vez pasada la frontera. ".
"<br><br>N-1: Madrid-Ir�n ".
"<br><br><table align=center width=80% border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td><table><tr><td width='65%' class=textom valign=top> ".
"<b>Autopistas:</b><br>Autopista A-8: Bilbao-Ir�n<br>Autopista A-63: Par�s - Ir�n<br>Autov�a A �15 Pamplona San<br>Sebasti�n<br>Autov�a: Barcelona � Zaragoza ".
"</td><td width='35%' class=textom valign=top> ".
"<img src='images/ico_info.jpg'>&nbsp;&nbsp;Informaci�n: ".
"<br><a href='http://www.dgt.es' target='_blank'><u>www.dgt.es</u></a> ".
"<br><a href='http://www.trafico.euskadi.net' target='_blank'><u>www.trafico.euskadi.net</u></a> ".
"</td></tr></table></td></tr></table> ";break;
case "Registro_Como":
$strTexto = "<b>C�mo Inscribirse:</b>".
"<br><br><font color='#800000'>El plazo para la preinscripci�n ha finalizado. Si desea confirmar su asistencia al evento, por favor cont�ctenos en: <a href='mailto:tisa-congresos@infonegocio.com'><b><font color='#800000'>tisa-congresos@infonegocio.com</font></b></a></font>".
"<br><br>La inscripci�n al Congreso es gratuita.".
"<br><br><b>Se debe de formalizar seg�n se indica:</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Para inscribirse al Congreso es imprescindible rellenar el formulario de <u>pre-inscripci�n</u> y enviarlo a la Secretar�a T�cnica, antes del 31 de Mayo.</b>".
"<br><br>Deber� indicar los d�as que est� interesado en asistir, pudiendo elegir d�as sueltos, si as� lo desea.".
"<br><br>Una vez superado el plazo de recepci�n de pre-inscripciones, la Secretar�a T�cnica le remitir� su confirmaci�n de inscripci�n y le asignar� un n�mero de registro antes del 10 de Junio.".
"<br><br>Este tr�mite es necesario para inscribirse en Congreso, ya que la capacidad es limitada y se asignar� por estricto orden de inscripci�n.".
"<br><br>Cualquier modificaci�n, variaci�n  o cancelaci�n debe de realizarla por escrito y remitirlo a la Secretar�a T�cnica.".
"<br><br><b>ATENCI�N:</b> No se admitir�n inscripciones en la sede del congreso, ni antes ni durante el evento.".
"<br><br><b>TISA Congresos, S.L.</b>".
"<br><br>Ref. Congreso Einstein".
"<br>Avda. de la Libertad, 17-19, 5� ".
"<br>E-20004 Donostia-San Sebasti�n � Spain".
"<br>Tel. 34 943 42 54 20".
"<br>Fax:  34 943 42 21 24".
"<br>e-mail: <a href='mailto:tisa-congresos@infonegocio.com'><u>tisa-congresos@infonegocio.com</u></a>";break;
case "Registro_Becas":
$strTexto = "<b>Becas</b>".
"<br><br><font color='#800000'>El plazo para la solicitud de becas ha expirado el 31 de Marzo. Si por razones excepcionales tiene dificultades para acudir al acto, recomendamos que se dirija directamente al Coordinador: Unai Ugalde<a href='mailto:qppugmau@sq.ehu.es'></font> <b><font color='#800000'>qppugmau@sq.ehu.es</font></b></a>".
"<br><br>Las becas se otorgar�n entre todos los que las soliciten, por una comisi�n nombrada por el Comit� Organizador. ".
"<br><br>Las becas se otorgar�n para los d�as de asistencia al Congreso que Ud. haya indicado en el <br>Bolet�n de <u>pre-inscripci�n</u>.".
"<br><br>Se otorgar�n 200 becas de pernoctaci�n (para residentes de fuera de la Comunidad Aut�noma Vasca y Navarra, salvo casos justificados), dotadas de un m�ximo de 100 euros por cada d�a y 400 becas de desplazamiento (para residentes de fuera de San Sebasti�n y alrededores) dotadas de 25 euros por cada d�a".
"<br><br>Para optar a una beca, es imprescindible adjuntar junto con el formulario de  <u>pre-inscripci�n</u> una breve exposici�n (no m�s de 200 palabras) de las razones por las que Ud. se considera merecedor de la beca, puede hacer constar los m�ritos que crea oportunos (no m�s de 200 palabras) (rellenar solicitud de beca).".
"<br><br>Solo se podr� solicitar un tipo de beca.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>La fecha l�mite para la solicitud de una beca ser� el 31 de Marzo.</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>La fecha l�mite para otorgar las becas ser� el 31 de Mayo.</b>".
"<br><br>S�lo las inscripciones admitidas podr�n optar a beca. <br>Una vez examinadas las pre-inscripciones con petici�n de beca, la Secretar�a T�cnica del Congreso le comunicar� si la beca ha sido concedida o no.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>Tipos de Beca:</b>".
"<br><br><b>La Organizaci�n concede dos tipos de beca:  Pernoctaci�n y Desplazamiento.</b>".
"<br><br><b>Beca de Pernoctaci�n:</b>".
"<br><br>S�lo para aquellas personas que residan fuera de la Comunidad Aut�noma Vasca y Navarra y que pernocten en San Sebasti�n, salvo casos justificados.".
"<br><br>La reserva del alojamiento deber� realizarse con la Agencia de Viajes Oficial del Congreso. ".
"<br><br>Las becas de pernoctaci�n se conceder�n para las noches del 5 de Septiembre al 8 de Septiembre, ambos incluidos.<br><br>Los d�as para los cuales solicite la reserva hotelera deber�n coincidir con los d�as que Ud. ha indicado que asistir� en el Bolet�n de pre-inscripci�n.<br><br>El pago tendr� que realizarlo una vez le hayan comunicado si la beca se le ha concedido o no.".
"<br><br><b>Importe:</b>  El importe m�ximo es de 100 euros /noche. ".
"<br><br><b>Imprescindible rellenar bolet�n de alojamiento</b>".
"<br><br>La Organizaci�n se har� cargo de una cuant�a m�xima de 100 euros /noche, que ser� abonada directamente a la Agencia de Viajes Oficial del Congreso. ".
"<br><br>En caso de que el alojamiento elegido supere esta cantidad, Ud. deber� abonar la diferencia directamente a la Agencia de Viajes.".
"<br><br><b>Beca de Desplazamiento:</b>".
"<br><br>S�lo para aquellas personas que residan fuera de San Sebasti�n y alrededores. <br>La Organizaci�n se har� cargo de una cuant�a de 25 euros/d�a, que ser� abonado al finalizar el Congreso a cada asistente becado y que acredite en la Secretar�a T�cnica su asistencia.".
"<br><br><b>Importe:</b> El importe por d�a: 25 euros/d�a.";break;
case "Registro_Alojamiento":
$strTexto = "<b>Alojamientos</b>".
"<br><br>Para reservar alojamiento deber� rellenar el <a href='index.php?pg=14' target='_parent'><u>bolet�n de alojamiento</u></a>. ".
"<br><br>La Organizaci�n ha concertado precios especiales a trav�s de su Agencia de Viajes Oficial para el Congreso, en hoteles de diferentes categor�as, seg�n se detalla en el bolet�n de alojamiento.".
"<br><br>Para beneficiarse de estos precios especiales, y en caso que se le conceda la beca en concepto de alojamiento, solo se podr� realizar la reserva a trav�s de la Agencia de Viajes Oficial del Congreso.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>El 30 de junio es la fecha l�mite para realizar su reserva Hotelera, a partir de este d�a la Organizaci�n no se hace responsable ni de la disponibilidad de habitaciones ni de los precios de las mismas.</b>".
"<br><br>Una vez realizada la reserva Carlson Wagonlit Travel le confirmar� su reserva por escrito (v�a e-mail)  y le indicar� las formas posibles de pago.".
"<br><br>El cobro del alojamiento se har� efectivo a partir del 1 de Julio.".
"<br><br>Si se le ha concedido una beca de pernoctaci�n, la Agencia de Viajes Oficial Congreso, Carlson Wagonlit Travel, le confirmar� su alojamiento y en caso de que el hotel elegido supere los 100 euros/noche le comunicar� la diferencia  a pagar.".
"<br><br><b>Gastos de anulaci�n:</b>".
"<br><br><b>Hasta el 31 de Julio:</b> no existir�n gastos de anulaci�n.".
"<br><br><b>Del 1 al 31 de Agosto:</b> el importe de una noche en el Hotel elegido.".
"<br><br><b>A partir del 1 de Septiembre:</b> el 100% del importe pagado.".
"<br><br>Toda anulaci�n deber� de ser notificada  por escrito al e-mail de la Agencia de Viajes Oficial del Congreso.".
"<br><br><b>Para m�s informaci�n sobre alojamiento: </b>".
"<br><br>Agencia Oficial del Congreso:  ".
"<br><br>Carlson Wagonlit Travel".
"<br>Ms. Ma�en Echarri".
"<br>Fax: (34) 943 428041".
"<br>E-mail: mecharri@carlsonwagonlit.es".
"<br><br><b>Lista de Hoteles Concertados</b> <a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>ver mapa</u></a>".
"<br><br>Residencia Olarain".
"<br>Hotel Londres y de Inglaterra ****".
"<br>Hotel NH Ar�nzazu ****".
"<br>Hotel Amara Plaza ****".
"<br>Hotel Tryp Orly ****";break;
case "AlbertEinstein_VidaYObra":
$strTexto = "<b>Vida y Obra <br>ALBERT EINSTEIN: 1905/2005  </b> ".
"<br><br>Se va a cumplir pronto el centenario de un a�o asombroso para la ciencia universal: 1905. Cuando a�n resonaba cercano el eco de la extra�a y revolucionaria hip�tesis de los quanta formulada por Max Planck (1900), un perito t�cnico de tercera clase de la Oficina Suiza de Patentes en Berna, de nombre Albert Einstein, nacido en Ulm (Alemania) el 14 de marzo de 1879, enviaba a lo largo de 1905 <a href='#2'><u>cinco trabajos a la prestigiosa revista alemana Annalen der Physik, para su publicaci�n</u><sup><b>1</b></sup></a>.  Cinco trabajos que, como ha escrito el f�sico e historiador John Stachel, cambiaron la faz de la f�sica. Cualquiera de ellos hubiera bastado para consagrarle como uno de los grandes cient�ficos de su �poca. Todos juntos le sit�an en la cima universal, con Arqu�medes y con <a href='#2'><u>Newton</u><sup><b>2</b></sup></a>.Seg�n su bi�grafo Albrecht F�lsing, '<i>never before and never since has a single person enriched science by so much in such a short time as Einstein did in his Annus Mirabilis</i>.' ".
"<br><br>Cient�ficos y pensadores de todo el mundo van a celebrar este centenario durante el a�o 2005, declarado A�o Mundial de la F�sica. La Fundaci�n del Donostia Internacional Physics Center se unir� a estas conmemoraciones con un nutrido y selecto programa de conferencias, seminarios y exposiciones encaminados a acercar a todos la obra y el recuerdo de este personaje m�tico y universal, imaginativo y creador, de rostro ya familiar, violinista de pelo alborotado y ojos tristes, con quien tanto la ciencia como el humanismo tendr�n eterna deuda. ".
"<br><br>La revista TIME eligi� el 31 de Diciembre de 1999 a Albert Einstein como el personaje cient�fico y pensador del siglo XX, por delante de otros grandes como <b>Francis Crick</b> y <b>James Watson</b>, <a href='http://www.time.com/time/time100/scientist/profile/fleming.html' target='_blank'><b>Alexander Fleming</b></a>, <a href='http://www.time.com/time/time100/scientist/profile/freud.html' target='_blank'><b>Sigmund Freud</b></a>, <b>Kurt G�del</b>, <a href='http://www.time.com/time/time100/scientist/profile/hubble.html' target='_blank'><b>Edwin Hubble</b></a>, <a href='http://www.time.com/time/time100/scientist/profile/shockley.html' target='_blank'><b>William Shockley</b></a>, <a href='http://www.time.com/time/time100/scientist/profile/turing.html' target='_blank'><b>Alan Turing</b></a> y <a href='http://www.time.com/time/time100/scientist/profile/wittgenstein.html' target='_blank'><b>Ludwig Wittgenstein</b></a>.  ".
"<br><br><table><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Time.jpg' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein01.gif' height=200></td> ".
"</tr><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein02.gif' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein03.gif' height=200></td> ".
"</tr><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein04.gif' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein05.gif' height=200></td> ".
"</tr></table><br><br> ".
"La dualidad fue una constante en nuestro personaje. Su serena contemplaci�n del Universo contrast� con su inestable vida familiar. Apasionado sionista, tambi�n le preocuparon los derechos de los �rabes en el estado de Israel. Pacifista, apoy� sin dudarlo la acci�n militar contra Hitler. Advirti� a Roosevelt del peligro de que los nazis fabricaran la bomba at�mica y le inst� a adelantarse a ellos, pero terminada la guerra batall� contra el armamentismo nuclear. En medio de todas estas contradicciones, Einstein fue, empero, un hombre profundamente moral.  ".
"<br><br><hr><a name='2'></a> ".
"<b>1.</b> Un sexto trabajo de AE en ese a�o (mejorando y ampliando el segundo de la serie hist�rica), fue envia-do a finales de 1905 a Annalen, y publicado, igual que el quinto, en 1906.  ".
"<br><b>2.</b> Para mayor contundencia a�adamos, si preciso fuera, sus posteriores trabajos sobre gravitaci�n";break;
case "AlbertEinstein_5Trabajos":
$strTexto = "<b>Los cinco trabajos de Einstein</b> ".
"<br><br>El primero de esos trabajos lleva por t�tulo '<i>�ber einen die Erzeugung und Verwandlung des Lichtes betreffenden heuristischen Gesichtspunkt</i>' (<a href='#1'><u>'Sobre un punto de vista heur�stico acerca de la producci�n y transformaci�n de la luz'</u> <sup><b>1</b></sup></a>).  En �l explic� Einstein el efecto fotoel�ctrico mediante una interpretaci�n corpuscular de la luz. Es un trabajo fundamental en la g�nesis de la f�sica cu�ntica, y seg�n su propio autor, muy revolucionario. Cuestion� la validez de la teor�a electromagn�tica de Maxwell, basada en campos continuos, para dar cuenta de los fen�menos de emisi�n y transformaci�n de la luz y sugiri� la discretizaci�n de la energ�a luminosa en cuantos o corp�sculos de luz indivisibles. 'For his services to Theoretical Physics, and especially for his discovery of the law of the photoelectric effect', fue galardonado con el Premio Nobel en 1921.  ".
"<br><br>El segundo fue '<i>�ber die von der molekularkinetischen Theorie der W�rme geforderte Bewegung von in ruhenden Fl�ssigkeiten suspendierten Teilchen</i>' (<a href='#1'><u>'Sobre el movimiento de peque�as part�culas suspendidas en l�quidos en reposo exigido por la teor�a cin�tico-molecular del calor'</u> <sup><b>2</b></sup></a>).  En este trabajo Einstein mostr� los l�mites de la termodin�mica cl�sica, cuando las fluctuaciones estad�sticas visibles en el movimiento irregular de las part�culas en suspensi�n violan la segunda de sus leyes. Junto con su �ltimo trabajo de ese a�o titulado 'Zur Theorie der Brownschen Bewegung' (<a href='#1'><u>'Sobre la teor�a del movimiento browniano'</u> <sup><b>3</b></sup></a>),  Einstein sent� las bases del movimiento browniano (observado en 1827 por Robert Brown en los granos de polen suspendidos en agua), como resultado del bombardeo de las part�culas en suspensi�n por las mol�culas del fluido, con la propuesta radical de que es el desplazamiento medio, y no la err�tica velocidad, el observable a tener en cuenta experimentalmente. Vinculado a estos trabajos est� el cuarto, 'Eine neue Bes-timmung der Molek�ldimensionen' (<a href='#2'><u>'Una nueva determinaci�n de las dimensiones moleculares'</u> <sup><b>4</b></sup></a>),  basado en su tesis doctoral (Universidad de Z�rich, 1905). En �l suministr� un m�todo, basado en la hidrodin�mica y en la teor�a de la difusi�n, para estimar el n�mero de Avogadro y el tama�o de mol�culas de soluto en disoluciones dilu�das no disociadas. Todos estos resultados de Einstein llevar�an a Jean Perrin y colaboradores a nuevas medidas del n�mero de Avogadro, a la determinaci�n experimental de tama�os at�micos, y a desterrar para siempre el escepticismo de quienes dudaban de la realidad de los �tomos y mol�culas.  ".
"<br><br>El tercero de los trabajos es '<i>Zur Elektrodynamik Bewegter K�rper</i>' (<a href='#1'><u>'Sobre la electrodin�mica de los cuerpos en movimiento'</u> <sup><b>5</b></sup></a>),  que junto con el quinto '<i>Ist die Tr�gheit eines K�rpers von seinem Energieinhalt abh�ngig?</i>' (<a href='#1'><u>'�Depende la inercia de un cuerpo de su contenido de energ�a?'</u> <sup><b>6</b></sup></a>),  constituyen lo que hoy se llama teor�a de la relatividad especial. Se apoya esta relatividad especial en dos principios b�sicos: el principio de relatividad (la f�sica debe ser la misma en todos los sistemas inerciales), y el principio de constancia de la velocidad de la luz (la velocidad de la luz es is�tropa y de igual magnitud en todos los sistemas inerciales). Con esta teor�a, Einstein resolvi� el aparente conflicto entre el principio de relatividad y la electrodin�mica de Maxwell y Lorentz, que privilegia algunos sistemas de referencia. Ello le exigi� el abandono de la simultaneidad y del �ter lum�nico. El joven Einstein demol�a aqu� con claridad meridiana y la fuerza de una l�gica implacable los cimientos de la f�sica conocida, para erigir un nuevo esquema basado en un espacio-tiempo en el que pierden su absolutidad tanto el espacio como el tiempo. De modo inevitable desde sus principios de relatividad y constancia de la velocidad de la luz lleg� Einstein en el cuarto de los trabajos a la equivalencia masa-energ�a, traducida en la famosa f�rmula E = mc<sup>2</sup>, que �l expres� entonces en la forma 'variaci�n de la masa de un cuerpo igual a L/V2', donde L es su cambio de energ�a y V la velocidad de la luz, y cuya validez suger�a verificar en las sales de radio. En esa �poca a�n ignoraba su autor el descomunal poder del genio escondido en las entra�as de su sencilla f�rmula, que se manifestar�a a�os despu�s en las reacciones nucleares. ".
"<br><br><center><img src='images/trabajo1.gif' height=700> ".
"<br>Primer trabajo<br><b>Efecto fotoel�ctrico</b><br><br><br> ".
"<img src='images/trabajo2.gif' height=700> ".
"<br>Segundo trabajo (el cuarto y sexto guardan relaci�n con �ste) ".
"<br><b>Movimiento browniano</b><br><br><br><img src='images/trabajo3.gif' height=700> ".
"<br>Tercer trabajo <br><b>Relatividad Especial</b><br><br><br> ".
"<img src='images/trabajo5.gif' height=700><br>Quinto trabajo<br><b>Masa y energ�a</b><br><br> ".
"</center><br><br><br><hr> ".
"<a name='1'></a> ".
"<b>1.</b> Primer trabajo. Fechado en Berna, 17 de marzo de 1905. Recibido el 18 de marzo de 1905. Publicado el 9 de junio de 1905. Annalen der Physik 17 (1905): 132-148. ".
"<br><b>2.</b> Segundo trabajo. Fechado en Berna, mayo de 1905. Recibido el 11 de mayo de 1905. Publi-cado el 18 de julio de 1905. Annalen der Physik 17 (1905): 549-560. ".
"<br><b>3.</b> Tercero trabajo. Fechado en Berna, diciembre de 1905. Recibido el 19 de diciembre de 1905. Publicado el 8 febrero de 1906. Annalen der Physik 19 (1906): 371-381. ".
"<br><b>4.</b> Cuarto trabajo. Fechado en Berna, agosto de 1905. Recibido el 19 de agosto de 1905. Publi-cado el 8 de febrero de 1906. (Contiene un addendum recibido en enero de 1906.) Annalen der Physik 19 (1906): 289-306.  ".
"<br><b>5.</b> Quinto trabajo. Fechado en Berna, junio de 1905. Recibido el 30 de junio de 1905. Publicado el 26 de septiembre de 1905. Annalen der Physik 17 (1905): 891-921. ".
"<br><b>6.</b> Sexto trabajo. Fechado en Berna, septiembre de 1905. Recibido el 27 de septiembre de 1905. Publicado el 21 de noviembre de 1905. Annalen der Physik 18 (1905): 639-641. ";break;
case "AlbertEinstein_Culminacion":
$strTexto = "<b>Culminaci�n de la relatividad</b> ".
"<br><br>Einstein, al igual que Planck, am� los principios rectores de las leyes naturales. Aparte de los principios de relatividad y de constancia de la velocidad de la luz, unos a�os m�s tarde Einstein enunciaba el principio de equivalencia (un campo gravitatorio es indistinguible de una aceleraci�n del sistema de referencia) sobre el que hab�a de erigir su teor�a de la relatividad general, obra cumbre, por su originalidad y belleza, del pensamiento cient�fico de todos los tiempos. La empez� a elaborar en 1907 y la concluy� esencialmente en 1915. Obligado a renunciar al espacio-tiempo absoluto de su relatividad especial para dar cobijo a la gravedad, geometriz� �sta y derroc� la teor�a newtoniana de la gravitaci�n. Muchos a�os m�s tarde, en sus notas autobiogr�ficas, pedir�a humildemente perd�n a Newton por este atrevimiento que solo a otro genio comparable le estaba permitido.  ".
"<br><br>Como los griegos, y como Newton, Einstein crey� en la inmutabilidad de los cielos. Por ello se vio obligado a introducir en sus ecuaciones para el campo gravitatorio un nuevo t�rmino, llamado cosmol�gico, que simula una repulsi�n c�smica opuesta a la atracci�n gravitatoria entre los astros de  un Universo supuestamente est�tico y que impide su colapso. Al descubrirse la expansi�n del Universo (Hubble, 1929), Einstein se arrepinti� de haber introducido ese t�rmino, 'la mayor equivocaci�n' de su vida. Ir�nicamente, en los �ltimos a�os parece haber renacido de sus cenizas dicho t�rmino cosmol�gico, como explicaci�n m�s simple de la energ�a de vac�o responsable de la aceleraci�n observada en la expansi�n actual del Universo. ".
"<br><br>Persigui� Einstein in�tilmente durante la �ltima etapa de su vida la unificaci�n de la gravitaci�n con el electromagnetismo. No se conoc�an bien las otras fuerzas (d�biles y fuertes). Las cuatro interacciones hoy conocidas siguen resisti�ndose a la total unificaci�n, salvo si se rompe el esquema einsteinano y se pasa a un hipot�tico escenario de diez u once dimensiones con las teor�as de supercuerdas o la teor�a M. �Qui�n ser� en este nuevo milenio el genio encargado de pedir perd�n a Albert Einstein? ";break;
case "AlbertEinstein_ImpactoObra":
$strTexto = "<b>Impacto de la obra</b> ".
"<br><br>La influencia de la obra de Einstein en la f�sica ha sido y es enorme. Abarca desde lo m�s peque�o (modelo est�ndar de la fisica de part�culas elementales, con la teor�a de campos cu�nticos relativistas como marco) hasta lo m�s grande (la estructura del universo a gran escala, con la relatividad general dict�ndole a la cosmolog�a la geometr�a global y su evoluci�n din�mica), desde lo m�s simple (la raz�n giromagn�tica de un electr�n) hasta lo m�s complejo (colapso de una supernova), desde las energ�as m�s bajas (condensados Bose-Einstein a temperaturas de unos pocos nanokelvin) hasta las m�s altas (plasma quark-glu�n), desde las aplicaciones m�s ordinarias (Global Positioning System) hasta las t�cnicas m�s sofisticadas (�ptica at�mica no-lineal), etc. ".
"<br><br>El impacto de Einstein no se reduce a la f�sica y ciencias pr�ximas. Sus ideas han dejado tambi�n huella en la cultura moderna, desde la pl�stica a la poes�a. Asimismo han afectado a la teor�a del conocimiento y a la filosof�a. Einstein rechaz� una explicaci�n emp�rica del origen de los conceptos f�sicos, que consideraba libre creaci�n del esp�ritu humano. Pero el mero pensamiento l�gico no nos proporciona conocimiento del mundo exterior, que solo la experiencia nos da. Los conceptos ayudan sin embargo a ordenar las experiencias sensoriales, y hasta el presente la Naturaleza se nos ha mostrado siempre del lado de la simplicidad y belleza matem�tica. Con Leibniz y Planck, crey� y busc� siempre la armon�a preestablecida. En cuanto a la filosof�a, la teor�a de la relatividad oblig� a los fil�sofos a revisar sus reflexiones sobre el espacio, el tiempo y la materia, y m�s tarde, a posicionarse sobre el realismo local que impregn� la postura cr�tica de Einstein acerca de la f�sica cu�ntica y que los experim<br><br>entos parecen rebatir tozudamente (aunque no con la contundencia que ayudar�a a despejar dudas entre los m�s reacios a su abandono).  ".
"<br><br><b>Ciencia y sociedad</b> ".
"<br><br>La conmemoraci�n del <i>Annus Mirabilis</i> de Einstein debe hacernos recapacitar sobre la importancia de la ciencia no s�lo como motor del conocimiento, sino como catalizador del desarrollo tecnol�gico y socioecon�mico. Los pa�ses que aspiren a mejorar la calidad de vida de sus ciudadanos no pueden quedar al margen de una actividad cient�fica propia adecuada.  ".
"<br><br>La figura de Einstein representa un excelente ejemplo, para las nuevas generaciones, de lo que es la actividad del cient�fico. Einstein fue una figura poco convencional, cuya creatividad e intuici�n le guiaron en su sue�o de entender el Universo de otra manera.  ".
"<br><br>Vamos a celebrar el centenario de un destello de singular creatividad surgido de un desconocido funcionario de patentes, que sostuvo sus ideas revolucionarias con pasi�n, dedicaci�n, esfuerzo y brillantez. Einstein abri� nuevos horizontes en la f�sica y con ello cambi� el mundo de su tiempo. ".
"<br><br>Ser�a el mejor homenaje a su memoria la recuperaci�n social del entusiasmo por participar en la aventura colectiva de la ciencia. ";break;
case "AlbertEinstein_Significado":
$strTexto = "<b>Significado y transcendencia para la Sociedad Vasca</b> ".
"<br><br>Euskadi ha experimentado, desde el inicio del periodo democr�tico, una progresi�n sin precedentes en materia de desarrollo cient�fico y tecnol�gico. Este avance, de sobra conocido por todos, ha supuesto un considerable aumento en el gasto en materia de investigaci�n, que es ahora 24 veces superior al de hace 24 a�os.   ".
"<br><br>Este crecimiento de la actividad en ciencia y tecnolog�a ha servido para acercarnos a los niveles de nuestros hom�logos en Europa en algunos aspectos. Pero hay desarrollos indispensables que siguen pendientes, entre otros la internacionalizaci�n de nuestro sistema cient�fico, el establecimiento de centros de excelencia cient�fica, y, sobre todo, la asunci�n por parte de la sociedad de la actividad cient�fica como algo consubstancial al desarrollo y bienestar. Desde el momento que una sociedad deja de aprender y de generar conocimiento, comienza su declive.  ".
"<br><br>El dise�o de los actos programados para este evento conmemorativo del <i>Annus Mirabilis</i> de Einstein tiene como objetivo una toma de contacto de nuestra sociedad, de manera p�blicamente manifestada, con la actividad investigadora de alto nivel.  ".
"<br><br>Los investigadores invitados son una parte significatica de la �lite mundial en F�sica, y adem�s representan un grupo privilegiado de promotores cient�ficos en sus pa�ses. Basta con recalcar que el programa incluye varios Premios Nobel y profesores extranjeros que se encuentran en primera l�nea, as� como una nutrida participaci�n de destacados investigadores espa�oles. Sus presentaciones p�blicas, declaraciones, entrevistas y consejos dar�n cuenta de la importancia de reflotar el entusiasmo por el quehacer cient�fico en estos momentos.  ".
"<br><br>Los actos que se programar�n incluir�n no s�lo conferencias plenarias y tem�ticas, sino tambi�n exposiciones para presentar la figura de Einstein a los ni�os y j�venes.  ".
"<br><br>Al margen de los efectos sociales de este evento, cabe resaltar que las relaciones que se establecer�n con todos y cada uno de los ponentes ampliar�n la visibilidad de la realidad cient�fica de nuestro pa�s, y de nuestra voluntad por participar en el esfuerzo internacional por la promoci�n de la ciencia.  ".
"<br><br>Finalmente, los mismos contactos permitir�n contar con valiosas opiniones acerca de los nuevos planes de Ciencia que se estan dise�ando, as� como con el apoyo para la creaci�n de nuevos centros de excelencia. ".
"<br><br><b>Trascendencia del acto para Donostia-San Sebastian</b> ".
"<br><br>Puesto que todos los actos van a tener lugar en Donostia-San Sebastian, esto supone que la capital guipuzcoana ser� el centro de atenci�n en esos d�as de buena parte de los medios de comunicaci�n. Adem�s, se espera que aproximadamente 300 personas se desplacen de otros puntos de la CAV para el evento, y unas 100-150 de otras comunidades. ".
"<br><br>Todos los conferenciantes tendr�n un trato preferente en nuestra capital, con el consiguiente resultado de publicidad indirecta que llevar�n a sus ciudades de origen. ".
"<br><br>As� mismo, la publicidad que se conseguir� a trav�s de la p�gina web, tambi�n redundar� en una importante difusi�n de las actividades que se desarrollar�n en la ciudad. ".
"<br><br>Del mismo modo que la celebraci�n reivindica un claro posicionamiento de nuestro pa�s a favor del conocimiento cient�fico, el foco desde el que se va a proyectar esta disposici�n ser� Donostia, contribuyendo a que gane paulativamente terreno como ciudad de ciencia. ".
"<br><br>La comunidad universitaria de Donostia contar� con una extraordinaria oportunidad para participar en el acto. Cabe tambi�n resaltar la importancia que el evento tendr� para el Campus de Ibaeta, que alberga Facultades con s�lida tradici�n investigadora, como la Facultad de Qu�mica de la UPV/EHU. La Escuela Superior de Ingenieros de TECNUN tambi�n contar� con un acto importante en su entorno pr�ximo. ".
"<br><br>Los miembros destacados de estos organismos podr�n establecer contactos directos con los ponentes invitados.";break;
case "De1600a1730Documentacion": $strTexto = "De <font class=textom2>16:00</font> a <font class=textom2>17:30</font>. <b>Entrega de documentaci�n</b>.<br>Sala de C�mara. Centro Kursaal.";break;
case "Lunes5deSeptiembre_1730": $strTexto = "Acreditaciones";break;
case "Lunes5deSeptiembre_1800": $strTexto = "<b>Inauguraci�n Oficial</b>.";break;
case "Lunes5deSeptiembre_1830": $strTexto = "<b>Conferencia inaugural</b> <a href='index.php?pg=7&ponente=14' target='einstein_ponente'><font class=textomna2>C. Cohen-Tannoudji </font></a>. <i>Condensados Bose-Einstein una nueva forma de materia</i>";break;
case "Lunes5deSeptiembre_1930": $strTexto = "<b>Concierto de C�mara.</b><br><i>Piezas favoritas de Einstein.</i>";break;
case "Lunes5deSeptiembre_2100": $strTexto = "<b>C�ctel de Bienvenida en el Foyer del Auditorio-Centro Kursaal Elkargunea.</b>";break;
case "Martes6deSeptiembre_900": $strTexto = "Entrega de documentaci�n.";break;
case "Martes6deSeptiembre_930": $strTexto = "Einstein y el Tiempo.";break;
case "Martes6deSeptiembre_1015": $strTexto = "<b>TBA</b> <i>Gravitaci�n y Agujeros Negros.</i>";break;
case "Martes6deSeptiembre_1100": $strTexto = "Pausa-Caf�.";break;
case "Martes6deSeptiembre_1133": $strTexto = "Einstein y los fen�menos de difusi�n que cambiaron el curso de las relaciones Humanas.";break;
case "Martes6deSeptiembre_1130": $strTexto = "Origen y evoluci�n del universo: el reto de la cosmolog�a ";break;
case "Martes6deSeptiembre_1215": $strTexto = "Materia y Forma.";break;
case "Martes6deSeptiembre_1300": $strTexto = "Resumen y debate.";break;
case "Martes6deSeptiembre_1330": $strTexto = "Fin de sesi�n.";break;
case "Martes6deSeptiembre_1800": $strTexto = "<i>Lo nano es diferente</i>.";break;
case "Martes6deSeptiembre_1845": $strTexto = "<i>Pasos hacia la materia compleja: informaci�n , autoensamblaje y adaptaci�n en sistemas qu�micos</i>.";break;
case "Martes6deSeptiembre_1930": $strTexto = "<i>Movimiento browniano y los motores moleculares</i>.";break;
case "Martes6deSeptiembre_2015": $strTexto = "<b>Fin de Sesi�n</b>.";break;
case "Miercoles7deSeptiembre_900": $strTexto = "Entrega de documentaci�n.";break;
case "Miercoles7deSeptiembre_930": $strTexto = "Teor�a de la informaci�n qu�ntica: Retos y perspectivas";break;
case "Miercoles7deSeptiembre_1015": $strTexto = "Relatividad, fotones y part�culas";break;
case "Miercoles7deSeptiembre_1100": $strTexto = "Resumen y debate.";break;
case "Miercoles7deSeptiembre_1130": $strTexto = "Pausa-Caf�.";break;
case "Miercoles7deSeptiembre_1215": $strTexto = "Continuaci�n Debate.";break;
case "Miercoles7deSeptiembre_1300": $strTexto = "Fin de Sesi�n.";break;
case "Miercoles7deSeptiembre_1700": $strTexto = "�Qu� es una teor�a unficada?";break;
case "Miercoles7deSeptiembre_1800": $strTexto = "<i>F�sica de los pulsares y ensayos de Einstein</i>.";break;
case "Miercoles7deSeptiembre_1830": $strTexto = "<b>Pausa</b>";break;
case "Miercoles7deSeptiembre_1845": $strTexto = "�Ten�a raz�n Einstein?";break;
case "Miercoles7deSeptiembre_1930": $strTexto = "Einstein y el mundo cu�ntico en la actualidad.";break;
case "Miercoles7deSeptiembre_2015": $strTexto = "Fin de Sesi�n.";break;
case "Jueves8deSeptiembre_900": $strTexto = "Entrega de documentaci�n.";break;
case "Jueves8deSeptiembre_930": $strTexto = "Einstein y los cuantos de luz.";break;
case "Jueves8deSeptiembre_1015": $strTexto = "La confrontaci�n entre relatividad general y experimento.";break;
case "Jueves8deSeptiembre_1100": $strTexto = "Pausa-Caf�.";break;
case "Jueves8deSeptiembre_1130": $strTexto = "Einstein y la filosof�a en el siglo XX.";break;
case "Jueves8deSeptiembre_1215": $strTexto = "Resumen y debate.";break;
case "Jueves8deSeptiembre_1300": $strTexto = "Fin de sesi�n.";break;
case "Jueves8deSeptiembre_1800": $strTexto = "Einstein: Qui�n pens� que era y porqu� a�n sigue  vivo hoy en d�a.";break;
case "Jueves8deSeptiembre_1845": $strTexto = "Einstein, Picasso: espacio, tiempo y la belleza que causa estragos.";break;
case "Jueves8deSeptiembre_1930": $strTexto = "El gran sue�o de Einstein: Una f�sica independiente.";break;
case "Jueves8deSeptiembre_2015": $strTexto = "Clausura.";break;
case "Jueves8deSeptiembre_2100": $strTexto = "C�ctel en el vest�bulo del Auditorium.";break;
case "Programa_Introduccion":
$strTexto = "<b>Introducci�n</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> Se ha dise�ado un amplio programa con ponencias por la ma�ana y por la tarde repartidas a lo largo de los 4 d�as que dura el Congreso. ".
"<br><br><img src='images/ico_bolita_on2.jpg'> Usted puede consultar el programa pulsando una fecha determinada y puede consultar el abstract y curriculum de cada ponente.";break;
case "Programa_LaSede":
$strTexto = "<b>Palacio de Congresos y Auditorio Kursaal</b> ".
"<br><br>El Palacio de Congresos y Auditorio Kursaal es desde el verano de 1999, fecha de su inauguraci�n, no s�lo un complejo arquitect�nico ".
"emblem�tico en San Sebasti�n sino tambi�n un espacio polivalente moderno y dotado de la m�s innovadora tecnolog�a. ".
"<br><br><center><img src='images/cubossombra.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/cubosbrillan.jpg'></center> ".
"<br><br>El Kursaal es una obra singular de Rafael Moneo que ha recibido el Premio Mies van der Rohe de la Comisi�n Europea y el Parlamento Europeo al mejor edificio de Europa y el Premio FAD de Arquitectura, ".
"el m�s importante de los que se conceden en el estado en esta disciplina. Por ello el KURSAAL es hoy en d�a el edificio m�s premiado de Europa. ".
"<br><br>El Kursaal, un conjunto arquitect�nico formado por dos cubos de vidrio transl�cido dise�ado por el arquitecto estatal m�s reconocido en el mundo, es a la vez Palacio de Congresos y Auditorio. Se ".
"trata de un equipamiento de vanguardia, definido y planteado con coherencia en el que confluye la tecnolog�a m�s avanzada y destinado a responder eficazmente a las necesidades del organizador m�s exigente. ".
"<br><br><br><br><b>Palacio de Congresos y Auditorio Kursaal</b><br><br><center><img src='images/donostia.jpg'></center> ".
"<br><br>Rafael Moneo, que dirigi� personalmente las obras, es el profesional de la arquitectura m�s reclamado hoy en el �mbito internacional para la realizaci�n de proyectos de gran envergadura en todo el mundo. ".
"<br><br>Las dos 'rocas' varadas de cristal e inclinadas 5 grados en su plano vertical y 3 grados en el horizontal que constituyen el Kursaal, responden a una clara intenci�n del arquitecto: <i>'perpetuar la presencia de la geograf�a y, en la medida de lo posible, subrayar ".
"el arm�nico maridaje entre lo natural y lo artificial'</i>. Este edificio talism�n de San Sebasti�n es un espl�ndido ejercicio de riesgo: su <i>'foyer'</i> principal, de 22 metros de altura por 12 de ancho y 60 de profundidad con escalinatas a�reas, vestido de cedro canadiense y luminoso cristal tiene la contundencia y elegancia de las obras de Moneo. ".
"<br><br><table align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom><center> ".
"<b>Palacio de Congresos y Auditorio Kursaal</b><br><br>Avda. de Zurriola, 1 . 20002 Donostia-San Sebasti�n.<br>Tfno.: 943 00 30 00 . Fax: 943 00 30 01<br>E-mail:<a href='mailto:kursaal@kursaal.org'><u>kursaal@kursaal.org</u></a><br><a href='http://www.kursaal.org' target='_blank'><u>http://www.kursaal.org</u></a> ".
"</center></td></tr></table>";break;
case "Ponente_A_Lehn":
$strTexto = "<b>Pasos hacia la materia compleja:<br>Informaci�n, auto-organizaci�n y adaptaci�n en sistemas qu�micos</b>".
"<br><br>Desde la materia dividida a la condensada, la organizada, la viva o hasta la inteligente, el universo ha evolucionado hacia una materia cada vez m�s compleja a trav�s de un proceso de auto organizaci�n. ".
"<br><br>Se puede establecer un paralelismo entre la formaci�n de la estructura a gran escala del universo y a nivel de materia molecular. La auto organizaci�n del universo resulta de la acci�n de las fuerzas gravitacionales mientras que la auto organizaci�n de la materia molecular, inerte y viva, puede considerarse el resultado de fuerzas electromagn�ticas que generan y operan dentro de una infinita de diversidad de posibles combinaciones estructurales.".
"<br><br>La qu�mica, como ciencia de la estructura y transformaci�n de la materia, juega un papel primordial para llegar a entender los procesos a trav�s de los cuales tiene lugar la auto organizaci�n de la materia. De hecho, reside en el n�cleo del mundo biol�gico, el nivel m�s alto de materia compleja como la conocemos.".
"<br><br>La qu�mica ha evolucionado desde la qu�mica molecular, que controla la combinaci�n y recombinaci�n de �tomos en mol�culas cada vez m�s complejas, a la qu�mica supramolecular, que utiliza las fuerzas intermoleculares para generar sistemas supramoleculares informados y procesos  de implementaci�n de informaci�n molecular llevados a cabo por interacciones electromagn�ticas.".
"<br><br>La qu�mica supramolecular est� investigando los sistemas que experimentan auto organizaci�n, es decir, sistemas capaces de generar espont�neamente estructuras supramoleculares funcionales bien definidas a trav�s del  autoensamblaje de sus componentes, en base a la informaci�n molecular almacenada en la estructura covalente de sus componentes y le�da a nivel supramolecular a trav�s de algoritmos interactivos espec�ficos, actuando de este modo como sistemas qu�micos programados.".
"<br><br>As�, la qu�mica desempe�a un papel principal en la progresiva elaboraci�n de una ciencia de la materia informada, organizada, evolutiva, una ciencia de la materia compleja.".
"<br><br>� Lehn, J.-M., Supramolecular Chemistry: Concepts and Perspectives, VCH Weinheim, 1995. ".
"<br>� Lehn, J.-M., in Supramolecular Chemistry: Where It Is and Where It Is Going (R. Ungaro, E. Dalcanale, eds.), Kluwer, Dordrecht, 1999, pp. 287-304. ".
"<br>� Lehn, J.-M., Chem. Eur. J., 1999, 5, 2455. ".
"<br>� Lehn, J.-M., Chem. Eur. J., 2000, 6, 2097. ".
"<br>� Lehn, J.-M., Proc. Natl. Acad. Sci. USA., 2002, 99, 4763.";break;
case "Ponente_C_Lehn":
$strTexto = "<b>ISIS, Universit� Louis Pasteur, Strasbourg y Coll�ge de France, Paris</b>".
"<br><br>Jean-Marie Lehn naci� en Rosheim, Francia, en 1939. En 1970 empez� como profesor de Qu�mica en la University Louis Pasteur en Estrasburgo y desde 1979 es profesor en Coll�ge de France en Par�s. En 1968, su investigaci�n condujo a la fabricaci�n de mol�culas con forma de jaula que conten�an una cavidad en la que se pod�an introducir otras especies qu�micas del tama�o y forma apropiados, igual que una llave que encaja en una cerradura. Empez� as�, su trabajo sobre las bases qu�micas del reconocimiento molecular (es decir, la forma en que una mol�cula receptora reconoce y une selectivamente un sustrato) que es b�sico en los procesos biol�gicos.  En 1987, el doctor Lehn recibi� el Premio Nobel de Qu�mica con Cram y Pedersen por estos estudios. ".
"<br><br>Despu�s de varios a�os su trabajo ha llevado a la definici�n de un nuevo campo de la qu�mica, lo que �l denomina la qu�mica supramolecular. �sta trata de entidades complejas formadas por la asociaci�n de dos o m�s especies qu�micas unidas por fuerzas intermoleculares, mientras la qu�mica molecular estudia las caracter�sticas de entidades construidas con �tomos unidos por enlaces covalentes.<br><br>Su investigaci�n se ha ampliado desde el reconocimiento molecular hasta la cat�lisis supramolecular y los procesos de transporte, adem�s de extenderse al dise�o de dispositivos moleculares, la electr�nica y la fot�nica molecular. Actualmente se ha centrado en el dise�o de sistemas programados que experimenten auto organizaci�n a trav�s de la uni�n espont�nea pero dirigida de los componentes apropiados formando estructuras supramoleculares funcionales bien definidas.".
"<br><br>Autor de m�s de 750 publicaciones cient�ficas, el Dr. Lehn es miembro de varias academias e instituciones y ha recibido numerosos reconocimientos y premios internacionales..";break;
case "Ponente_A_Cirac":
$strTexto = "<b>Teor�a de la informaci�n cu�ntica: Retos y perspectivas</b>".
"<br><br>El procesamiento de informaci�n y comunicaci�n cu�ntica es un campo de investigaci�n multidisciplinar cuyo objetivo es usar alguna de las desconcertanes propiedades de la mec�nica cu�ntica para procesar y transmitir informaci�n de un modo efectivo. Por el momento existen muy pocos sistemas en los que se pueda probar las principales ideas de la computaci�n cu�ntica, probablemente la aplicaci�n m�s importante en este campo. Por un lado tenemos sistemas de �ptica cu�ntica, normalmente �tomos o iones, que interaccionan con campos l�ser y son atrapados por fuerzas electromagn�ticas. Por otro lado nos encontramos con dispositivos en estado s�lido (por ejemplo, puntos cu�nticos o dispositivos superconductores) que pueden controlarse electr�nicamente. En esta charla revisar� los conceptos b�sicos del campo de la Informaci�n Cu�ntica y mostrar� c�mo poner en pr�ctica alguna de las ideas usando �tomos, iones y fotones. Tambi�n debatiremos las perspectivas en el �rea del control de los sistema de �ptica cu�ntica para alcanzar el objetivo final de construir un dispositivo a escala.";break;
case "Ponente_C_Cirac":
$strTexto = "<b>Max-Planck Institute for Quantum Optics, Garching.</b>".
"<br><br>El profesor Cirac se licenci� en F�sica y obtuvo el doctorado en la Universidad Complutense de Madrid (1998, 1991). Su carrera profesional incluye puestos en University of Colorado, Innsbruck, Technical University of Munich y el Max-Planck Institute for Quantum Optics, en el que trabaja como director ejecutivo.<br><br>Es autor de 175 publicaciones y ha obtenido numerosos premios. Tambi�n es miembro de la American Physical Society y miembro correspondiente de las Academias de Ciencias espa�ola y austriaca. ";break;
case "Ponente_A_Clifford":
$strTexto = "<b>La confrontaci�n entre relatividad general y experimento.</b>".
"<br><br>Revisaremos la prueba experimental de la Relatividad General de Einstein. Ensayos del Principio de equivalencia de Einstein apoyan los postulados del espacio-tiempo curvo, mientras experimentos realizados en el sistema solar confirman ampliamente la relatividad general de campo d�bil. El p�lsar binario proporciona pruebas de la desviaci�n onda gravitacional y la relatividad general de campo fuerte. Describiremos experimentos  que se est�n desarrollando y otros previstos, como el experimento del gir�scopo Stanford, una prueba con sat�lite del Principio de Equivalencia y pruebas de gravedad a corta distancia para buscar dimensiones extra-espaciales.".
"<br><br>Recientemente,  Observatorios de ondas gravitacionales por interferometr�a l�ser y un futuro interfer�metro espacial podr�an aportar nuevas pruebas a trav�s de las propiedades de las ondas gravitacionales.".
"<br><br><b>�Ten�a raz�n Einstein?</b>".
"<br><br>�C�mo se sostiene la m�s celebrada teor�a cient�fica del siglo XX bajo el exigente examen de sondas planetarias, radiotelescopios y relojes at�micos? Despu�s de 100 a�os, �ten�a raz�n Einstein?<br>En esta conferencia recorreremos la historia de las pruebas sobre la gravedad, desde las mediciones en 1919 de la curvatura de la luz hasta las de los a�os 80 de un sistema de estrella de doble neutr�n en descomposici�n que revela la acci�n de las ondas gravitatorias. Mostraremos como una revoluci�n en astronom�a y tecnolog�a llev� al renacimiento de la relatividad general en los a�os 60 y a un programa sistem�tico para intentar verificar sus predicciones. Tambi�n demostraremos el importante papel que juega la relatividad general en la vida cotidiana.";break;
case "Ponente_C_Clifford":
$strTexto = "<b>Washington University.</b>".
"<br><br>Clifford Will es profesor de F�sica y miembro del McDonnell Center for the Space Sciences de la Washington University en St. Louis.Se licenci� en Matem�ticas Aplicadas y F�sica Te�rica en la McMaster University en 1968 y obtuvo el doctorado en F�sica en California Institute of Technology en 1971. Fue miembro Enrico Fermi de University of Chicago (1972-74) y profesor ayudante de F�sica en Stanford University (1974-81). De 1975 a 1979 fue miembro de Alfred P. Sloan Foundation. En 1981 entr� en Washington University como profesor asociado, en 1985 pas� a ser profesor titular de F�sica y desde 1991 hasta 2002 fue Director del departamento.<br><br>En 1986, la American association of Physics Teachers le concedi� el 46� premio anual Richtmyer Memorial Lecture y en 1989 fue elegido miembro de la American Physical Society.<br><br>En reconocimiento a su trabajo te�rico sobre el p�lsar binario Hulse-Taylor fue invitado de la Fundaci�n Nobel a la ceremonia de los Premios Nobel en 1993 en homenaje a los descubrimientos de Joseph Taylor y Russel Hulse. Entre 1996 y 1997 fue miembro J. William Fulbright  y de la Fundaci�n Guggenheim y en 1996 fue nombrado Alumno Distinguido de Ciencias en la McMaster University.<br><br>En 2001 le eligieron miembro de la American Academy of Arts and Sciences y en 2004 recibi� el premio de miembros de la St. Louis Academy of Sciences.Ha publicado m�s de 160 art�culos cient�ficos, incluyendo 13 art�culos importantes. Adem�s, es autor de muchos trabajos divulgativos y de dos libros. ";break;
case "Ponente_A_Galindo":
$strTexto = "<b>Einstein y el Tiempo</b>".
"<br><br>Muchos avances cient�ficos y tecnol�gicos han estado vinculados a los adelantos en la precisi�n con que se ha ido midiendo el tiempo. Hoy se dispone de relojes con precisi�n de un segundo en 20 millones de a�os; adem�s, la generaci�n en estos �ltimos a�os de pulsos ultracortos de radiaci�n XUV y el desarrollo de t�cnicas para medir su duraci�n con resoluci�n del orden del attosegundo muestran que el paso de la femtoqu�mica a la attof�sica empieza a ser una realidad.  ".
"<br><br>El tiempo f�sico, cuya definici�n omiti� el gran Newton diciendo que es de todos bien conocido, estuvo en el n�cleo de la revoluci�n cient�fica protagonizada por Albert Einstein con sus principios de relatividad. Con la teor�a de la relatividad especial propuesta por Einstein en su <i>Annus Mirabilis</i> de 1905, el tiempo absoluto, verdadero y matem�tico de Newton dio entrada a inn�meros tiempos, uno por cada inercial. La simultaneidad pas� a ser relativa, y tambi�n la duraci�n, que se dilat� con el movimiento. El tiempo relativista transcurre m�s lentamente en relojes m�viles, y esto permite 'viajar al futuro'.  Pero la gravitaci�n quedaba fuera de esta relatividad restringida para la que la amalgama espacio-tiempo manten�a su absolutidad. Entre 1907 y 1915 Einstein consigue acomodar la gravedad y erige sobre el principio de equivalencia su relatividad general. En ella Einstein predice que el espacio-tiempo se curva bajo el efecto de la materia-energ�a, y en particular el tiempo experimenta una dilataci�n gravitacional a a�adir a la debida al movimiento. ".
"<br><br>Las teor�as relativistas de Einstein no s�lo son de la m�xima importancia para los f�sicos, sino que tambi�n est�n presentes en nuestra vida. Cuando usamos el GPS (Global Positioning System) para saber en qu� lugar e instante precisos nos hallamos, estamos aprovech�ndonos de una tecnolog�a que no puede ignorar ni la dilataci�n del tiempo relativista ni la gravitacional. De lo contrario, el GPS fallar�a en su misi�n al cabo de unos minutos y los aterrizajes en condiciones de visibilidad cero no ser�an seguros. Finalmente, cuando el hombre sue�a con viajar a mundos lejanos, volver al pasado, o visitar el futuro, tarde o temprano termina acudiendo a las deformaciones del espacio-tiempo que le ofrece en principio la teor�a einsteniana de la gravedad en condiciones extremas.  ".
"<br><br>Pretendemos con esta charla acercar estas cuestiones al ciudadano curioso. Es el mejor recuerdo a la memoria de quien cambi� la f�sica y nos leg�, como su obra cumbre, la m�s bella creaci�n del esp�ritu cient�fico de todos los tiempos: la teor�a einsteniana de la gravitaci�n.  ";break;
case "Ponente_C_Galindo":
$strTexto = "<b>Universidad Complutense, Madrid</b>".
"<br><br>Nacido en la villa de Zaid�n (Huesca) en 1934 Alberto Galindo ha sido Licenciado en Ciencias Exactas por la Facultad de Ciencias de la Universidad de Zaragoza  y Doctor en F�sicas por la Universidad Central de Madrid. Entre 1963-67 fue Catedr�tico de F�sica Matem�tica de la Universidad de Zaragoza y desde 1967, Catedr�tico de F�sica Te�rica de la Universidad Complutense de Madrid. ".
"<br>El Profesor Galindo ha sido investigador en diversos centros: Junta de Energ�a Nuclear, Courant Institute of Mathematical Sciences (New York University), International Centre for Theoretical Physics (Trieste),Centre Europ�en pour la Recherche Nucl�aire (CERN, Gen�ve), Institut des Hautes �tudes Scientifiques (Bures-sur-Yvette), D�partement de Physique Math�matique (Universit� de Dijon), Institut f�r Theoretische Physik (Wien Universit�t), Department of Physics (Princeton University), Coll�ge de France (Par�s), Department of Physics (University of California in Los Angeles), Donostia International Physics Center (San Sebasti�n). ".
"<br>Es autor de trabajos sobre An�lisis funcional, Teor�a de grupos y �lgebras de Lie, Mec�nica cu�ntica, Teor�a de campos, Part�culas elementales, Sistemas integrables, Grupos cu�nticos y Informaci�n cu�ntica. ".
"<br>El Profesor Galindo es autor de libros, entre los que destacan: M�todos Matem�ticos de la F�sica (con L. Abellanas, Imprenta Octavio y F�lez, Zaragoza 1973), Mec�nica Cu�ntica (con P. Pascual, Editorial Alhambra, Madrid 1978), Soluciones Exactas en Relatividad General. Colapso Gravitacional y Agujeros Negros (con L. M�s, Editorial de la Universidad Complutense, Madrid 1983), Espacios de Hilbert. (Geometr�a, Operadores, Espectros)  (con L. Abellanas, EUDEMA, Madrid 1988), Mec�nica Cu�ntica I, II (con P. Pascual, EUDEMA, Madrid 1989), Problemas de Mec�nica Cu�ntica (con P. Pascual, EUDEMA, Madrid 1989), M�todos de C�lculo (en Serie Schaum, con L. Abellanas, McGraw-Hill, Madrid 1990), Quantum Mechanics I, II (con P. Pascual, Springer Verlag, Berlin 1990, 1991),  F�sica y Qu�mica 1  (con J. M. Savir�n, A. Moreno, J.M. Pastor, A. Bened�, McGraw-Hill, Madrid 1995), F�sica 2  (con A. Moreno, A. Bened�, P. Varela, McGraw-Hill, Madrid 1998) ".
"<br>El Profesor Galindo ha recibido diversas distinciones y premios: Acad�mico Electo de la Academia de Ciencias Exactas, F�sico-Qu�micas y Naturales de Zaragoza, Acad�mico Numerario de la Real Academia de Ciencias Exactas, F�sicas y Naturales de Madrid, Fundador y primer Director del Grupo Interuniversitario de F�sica Te�rica (GIFT), Miembro del primer Consejo Cient�fico del Erwin Schr�dinger International Institute of Mathematical Physics de Viena, Miembro de la Academia Europ�a, Premio Nacional de Investigaci�n en F�sica 1977, Premio Nacional de Investigaci�n 'Santiago Ram�n y Cajal' 1985, Premio Arag�n 1991 a la Investigaci�n Cient�fico-T�cnica.";break;
case "Ponente_A_Gerald":
$strTexto = "En publicaciones y en cartas que parcialmente no se hab�an publicado, Albert Einstein presentaba sus propias ideas acerca de lo que �l era y de cu�les eran sus contribuciones. Esas ideas suyas, por supuesto, hay que respetarlas. Pero lo que sucede es que no eran suficientes; a trav�s de los a�os, los eruditos a�adieron unas cuantas cosas m�s e arrojaron luz sobre el resto. La atenci�n tambi�n se centrar� en los antiguos pero recientemente conocidos enfrentamientos entre la Relatividad, lo que se ha denominado 'la Dictadura de la Relatividad', y el Absolutismo.";break;
case "Ponente_C_Gerald":
$strTexto = "<b>Harvard University</b>".
"<br><br>Gerald Holton es Profesor Investigador de F�sica y Profesor Investigador de Historia de la Ciencia en Harvard University, miembro de la American Physical Society, de la American Philosophical Society, de la American Academy of Arts and Sciences, y de otras muchas sociedades europeas muy conocidas. Fue presidente de la History of Science Society, y de la Comisi�n Nacional de EE.UU para la UNESCO. Entre los libros que ha publicado se encuentran Thematic Origins of Scientific Thought: Kepler to Einstein, y Einstein, History and Other Passions. Fue el fundador editor de la revista trimestral Daedalus, y fue miembro de la Comisi�n Editorial de Collected Papers of Albert Einstein. Entre los galardones que ha recibido se encuentran la medalla Sarton, Profesor electo Herbert Spencer por la Oxford University, y Profesor electo Jefferson por el National Endowment for the Humanities.<br>A petici�n de los herederos de Albert Einstein, comenz� y durante muchos a�os supervis� el proyecto para convertir la correspondencia y los manuscritos no publicados de Einstein en un archivo adecuado para la investigaci�n.";break;
case "Ponente_A_Sheldon":
$strTexto = "<b>�Qu� es una teor�a unificada?</b>".
"<br><br>Einstein pas� la �ltima parte de su vida en una b�squeda infructuosa de lo que �l llamaba teor�a del campo unificado: un sistema de ecuaciones que describiera no s�lo la gravitaci�n y el electromagnetismo sino tambi�n la esencia at�mica en si misma. Destinos similares aguardaban a Schroedinger, Heisenberg, y durante un tiempo a Wolfgang Pauli Hoy conocemos un gran reto m�s. Nuestro modelo est�ndar ofrece una descripci�n bastante completa de todos los fen�menos de las part�culas elementales, pero no puede describir la gravedad. La teor�a de las supercuerdas ofrece una teor�a cu�ntica de la gravedad que puede ser compatible con el modelo est�ndar pero que no tiene (y quiz� no puede tener) respuesta para preguntas como por qu� los quarks y leptones tienen las masas y combinaciones que han sido observadas. �Nos acercar� el siglo XXI a la realizaci�n del sue�o de Einstein? �Puede haber una teor�a del todo?";break;
case "Ponente_C_Sheldon":
$strTexto = "<b>Boston University.</b>".
"<br><br>Nacido en Nueva York en 1932 y educado en colegios p�blicos, Glashow estudi� en la Cornell University y se doctor� en Harvard University. Despu�s de varios a�os en Niels Bohr Institue, Cal Tech, Stanford University y en la University of California , en Berkeley, se incorpor� a la facultad de Harvard en 1966, donde permaneci� en la c�tedra Higgins de F�sica hasta 2000. Actualmente es profesor de universidad y ocupa la c�tedra Metcalf de Ciencia en la Boston University. ".
"<br><br>El profesor Glashow es autor de tres libros y m�s de 300 art�culos especializados y divulgativos. Es miembro de American Philosophical Society, The American Academy of Arts and Sciences, y las Academias Nacionales de Ciencias de EE UU, Rusia, Corea y Costa Rica.<br><br>En 1979, el profesor Glashow comparti� el premio Nobel de F�sica por sus contribuciones a la teor�a unificada de las interacciones d�biles y electromagn�ticas.";break;
case "Ponente_A_Dudley":
$strTexto = "<b>El movimiento browniano y los motores moleculares</b>".
"<br><br>En su art�culo de 1905 sobre el movimiento browniano, Einstein igualaba una 'fuerza sistem�tica', la fuerza de arrastre Stokes sobre part�culas en suspensi�n coloidal con la fuerza fluctuante aleatoria generada por el movimiento t�rmino de mol�culas solventes.  Tambi�n abord� la difusi�n de una forma nueva, como un proceso Markoviano.  Estas estrategias le permitieron reconciliar el movimiento browniano con la segunda ley de la termodin�mica y adem�s le llev� a varios medios de determinar el n�mero de Avogrado, consiguiendo resultados constantes que confirmaron la realidad de las mol�culas. <br><br> Hoy en d�a estrategias similares aclaran la aparentemente parad�jica operaci�n de 'motores moleculares', tales como una enzima movi�ndose a lo largo de una cadena plantilla de ADN mientras cataliza su replicaci�n.  Uno de estos motores de enzimas 'quema' cientos de mol�culas de adenosina trifosfato por segundo.  Sin embargo, esta potencia qu�mica es �nfima si la comparamos con la potencia de ruido t�rmico aleatorio  encontrada por el motor movi�ndose a trav�s del agua.   La diferencia es de nueve �rdenes de magnitud.  Adem�s, las enzimas realizan miles de tareas qu�micas muy espec�ficas con notable eficiencia. <br>El objetivo de esta charla es rendir homenaje al legado de Einstein enfatizando la forma en que sus ideas se han materializado en los actuales modelos de motores de enzimas. Las fluctuaciones brownianas permiten a las enzimas explorar r�pidamente un amplio rango de configuraciones y de ese modo explotar aquellas que hacen posible que las fuerzas qu�micas  reaccionen.  As�, es el ruido t�rmico del movimiento browniano el que permite a las enzimas rectificar la difusi�n y producir los movimientos moleculares dirigidos esenciales para los procesos biol�gicos.";break;
case "Ponente_C_Dudley":
$strTexto = "<b>Harvard University.</b>".
"<br><br>Dudley Herschbach naci� en San Jose, California  en 1932, se licenci� en Matem�ticas en 1954 y obtuvo un m�ster en Qu�mica en 1955 en la Stanford University. En 1956 consigui� un m�ster en F�sica y el doctorado en F�sica-Qu�mica en 1958 en Harvard.<br><br> En 1963 volvi� como profesor de Qu�mica a Harvard, donde ocup� la c�tedra Baird de Ciencias (1976-2003). Ahora es profesor investigador em�rito. Su docencia incluye cursos de postgrado de mec�nica cu�ntica, cin�tica qu�mica, espectroscopia molecular y teor�a de la colisi�n, as� como cursos para estudiantes universitarios de qu�mica f�sica y qu�mica general para principiantes, su reto m�s importante. Actualmente est� impartiendo un seminario para principiantes sobre motores moleculares y un 'mini-curso' de postgrado sobre varios temas de f�sica qu�mica. Est� comprometido con varios programas para mejorar la ense�anza de ciencias hasta los 16 a�os y el conocimiento general  sobre ciencia. Es presidente del Consejo de Administraci�n del Servicio de Ciencia, que publica Science News y dirige el Intel Science Talent Search y el Intel International Science and Engineering Fair. <br><br>El profesor Herschbach es miembro de varias academias e instituciones y ha recibido numerosos reconocimientos y premios internacionales. Su investigaci�n actual se centra en los m�todos de orientar mol�culas para estudios de estereodin�mica de colisi�n, medios de decelerar y capturar mol�culas para estudiar qu�mica a longitud de onda deBroglie, transformaciones moleculares causadas por la ata presi�n, un enfoque a escala dimensional para interacciones de muchas part�culas fuertemente relacionadas y an�lisis te�rico de motores moleculares, en especial los sistemas de enzimas-ADN.";break;
case "Ponente_A_Hewish":
$strTexto = "<b>F�sica Pulsar y ensayos de Einstein</b>".
"<br><br>Los p�lsares son estrellas formados durante el colapso gravitacional de explosi�n de estrellas, que contienen neutrones a densidades de 100.000 billones de toneladas por metro c�bico. Rodeados por intensos campos gravitacionales y girando a m�s de 600 revoluciones por segundo, se convierten en relojes astron�micos muy precisos en ambientes ideales para ensayos de precisi�n de la relatividad general. Adem�s, la comprensi�n del comportamiento de los pulsares implica la f�sica de los l�quidos cu�nticos, la magneto-hidromec�nica relativista y la generaci�n de radiaci�n constante de plasmas relativistas. EL descubrimiento de los pulsares en 1967 impuls� la investigaci�n en diferentes �reas de la astrof�sica. Resumiremos los progresos en este excitante campo.<br>CV: Antony Hewish naci� en Fowey, Cornwall, en 1924. Tras un a�o en la Universidad de Cambridge, combati� durante tres a�os en la guerra (de 1943 a 1946) en el Royal Aircraft Establishment, Farnborough. Regres� a Cambridge y se licenci� en 1948, uni�ndose al equipo de Martin Ryle para comenzar a investigar sobre radio astronom�a. Particip� en las innovadoras prospecciones celestes de las radio galaxias de Ryle y m�s tarde dise�� una gran antena de elementos m�ltiples en fase para medir los tama�os angulares de los cu�sares usando el centelleo provocado por viento solar.  Fue durante este trabajo, en 1967, cuando descubri� los pulsares con su estudiante Jocelyn Bell-Burnell. En 1974 fue galardonado con el Premio Nobel de F�sica 8compartido con Ryle) por su papel en este descubrimiento.  Entre 1982 y 1987, Hewish fue director del Observatorio de radio Astronom�a Mullard de Cambridge. Se retir� de su puesto acad�mico de profesor de Radioastronom�a en 1989. A lo largo de toda su carrera se dedic� a la ense�anza de la f�sica.";break;
case "Ponente_C_Hewish":
$strTexto = "<br><br>Antony Hewish naci� en Fowey, Cornwall, en 1924. Tras un a�o en la Cambridge University, estuvo tres a�os durante la guerra (de 1943 a 1946) en el Royal Aircraft Establishment, Farnborough. Regres� a Cambridge y se licenci� en 1948, uni�ndose al equipo de Martin Ryle para comenzar a investigar sobre radio astronom�a. Particip� en las innovadoras prospecciones celestes de las radio galaxias de Ryle y m�s tarde dise�� una gran antena de elementos m�ltiples en fase para medir los tama�os angulares de los cu�sares usando el centelleo provocado por viento solar. Fue durante este trabajo, en 1967, cuando descubri� los pulsares con su estudiante Jocelyn Bell-Burnell.  En 1974 fue galardonado con el Premio Nobel de F�sica (compartido con Ryle) por su papel en este descubrimiento. <br>Entre 1982 y 1987, Hewish fue director del Mullard Radio Astronomy Observatory de Cambridge. Se retir� de su puesto acad�mico de profesor de Radioastronom�a en 1989. A lo largo de toda su carrera se dedic� a la ense�anza de la f�sica.";break;
case "Ponente_A_Miller":
$strTexto = "<b>Einstein, Picasso<br>el Espacio, el Tiempo y la belleza que causa estragos.</b>".
"<br><br>El cient�fico y el artista m�s importantes del siglo XX vivieron su etapa de mayor creatividad casi simult�neamente y en circunstancias muy similares. Me centrar� en sus obras maestras: la teor�a especial de la relatividad de Einstein y Las se�oritas de Avignon de Picasso.  Cuando produjeron estas impresionantes obras, ni Einstein ni Picasso encajaban a�n en las distinguidas figuras de ancianos que despu�s se hicieron tan populares: estaban en la veintena, eran desconocidos, rebeldes y propensos a meterse en problemas (su belleza personal y creativa provocaba desconcierto).Ambos reaccionaron al remolino de la vanguardia.  Para Picasso incluy� los nuevos inventos para reproducir pel�culas, la fotograf�a y los avances en ciencia y filosof�a.  Einstein se sumergi� en problemas tecnol�gicos tan fundamentales como el dise�o de dinamos el�ctricos y la coordinaci�n de horarios de tren.<br>Detr�s de las muchas similitudes entre sus vidas y circunstancias y lo que tuvieron que soportar para crear sus obras maestras se esconde una clave unificadora.  Tanto Einstein como Picasso llegaron a la mayor�a de edad en el momento exacto de la historia en que empez� a revelarse que las formas cl�sicas e intuitivas de entender el espacio y el tiempo no eran correctas.  Ambos trabajaron el mismo tema: la naturaleza del espacio y el tiempo, y en concreto, la simultaneidad.";break;
case "Ponente_C_Miller":
$strTexto = "<b>University College, London</b>".
"<br><br>Arthur I. Miller es profesor de Historia y Filosof�a de la Ciencia en University College London. Ha intervenido en numerosos programas de radio y televisi�n y ha le�do e impartido conferencias sobre la historia y la filosof�a de la ciencia moderna, la ciencia cognitiva, la creatividad cient�fica y la relaci�n entre arte y ciencia. Entre sus muchos libros se encuentran: Albert Einstein's Special Theory of Relativity, Sixty-Two Years of Uncertainty, e Insights of Genius: Imagery and Creativity in Science and Art";break;
case "Ponente_A_Rebolo":
$strTexto = "<b>Origen y evoluci�n del universo: los retos de la Cosmolog�a</b>".
"<br><br>Las observaciones de la distribuci�n a gran escala de galaxias en el universo, de explosiones de supernovas en galaxias muy lejanas y mediciones de alta sensibilidad de la anisotrop�a del fondo c�smico de microondas (la radiaci�n f�sil del universo) respaldan firmemente el hecho de que el cosmos est� dominado por formas ex�ticas de materia y energ�a.<br> La principal forma de materia en el universo, cinco veces m�s abundante que la materia ordinaria, parece ser de una naturaleza interactiva muy d�bil. Se est�n llevando a cabo grandes esfuerzos en los laboratorios para identificar la part�cula responsable. La forma dominante de energ�a, la denominada energ�a del vac�o, est� relacionada con la constante cosmol�gica sugerida por Einstein en sus ecuaciones de la relatividad general y es responsable de una expansi�n acelerada del universo en estos momentos. Revisaremos recientes avances en la comprensi�n de estos componentes cruciales y su papel en la evoluci�n del universo.";break;
case "Ponente_C_Rebolo":
$strTexto = "<b>Instituto de Astrof�sica de Canarias (CSIC)</b>".
"<br><br>Nacido en Cartagena, Espa�a, en 1961, es Licenciado en Ciencias F�sicas por la Universidad de Granada y Doctor en Astrof�sica por la Universidad de La Laguna. Actualmente es Profesor de Investigaci�n del Consejo Superior de Investigaciones Cient�ficas en el Instituto de Astrof�sica de Canarias (IAC) y Profesor Asociado del Max Planck Institute f�r Astronomie. ".
"<br><br>Ha sido Responsable de la Division Cientifica del IAC y ha recibido los premios de 'Rey Jaime I' y 'Canarias' de Investigaci�n y el 'Iberdrola' de Ciencia y Tecnolog�a. ".
"<br><br>Dirige varios proyectos sobre el origen de los elementos qu�micos, el Fondo C�smico de Microondas, los planetas gigantes y las enanas marrones. Co-autor de m�s de 130 publicaciones cient�ficas  en revistas con �rbitro que suman m�s de 3000 citas. ".
"Pertenece a los Cuadros Directivos de la Asociaci�n Europea para Investigaci�n en Astrof�sica y de la Red Europea de Coordinaci�n de la Astronomia Optica e Infrarroja Acad�mico Correspondiente de la Real Academia de Ciencias de Espa�a.";break;
case "Ponente_A_Rohrer":
$strTexto = "<b>Lo nano es diferente</b> ".
"<br><br>La miniaturizaci�n de los componentes electr�nicos ha sido la clave para su acelerada invasi�n en un mundo que controla electr�nicamente desde la vida diaria hasta las m�s avanzadas aventuras cient�ficas, un mundo de inform�tica de alta velocidad y que abraza las comunicaciones como nunca antes lo hab�a hecho. La miniaturizaci�n progresiva a trav�s de la nanotecnolog�a provocar� sin duda un nivel sin precedentes de difusi�n de la tecnolog�a electr�nica a toda la sociedad y a todo el mundo.<br><br>Pero la nano ciencia y tecnolog�a no son simplemente la continuaci�n de la miniaturizaci�n de la escala micro a la nano respectivamente. Lo nano es diferente. La transici�n de micro a nano es un paso perjudicial, una continuaci�n discontinua, en muchas maneras: en el tama�o de los componentes, en las tecnolog�as, en las anal�ticas, en las propiedades de los materiales y en conceptos. La nano ciencia y nano tecnolog�a se encuentran en la confluencia entre las propiedades y el comportamiento de la mec�nica cu�ntica y la cl�sica. En ellas tambi�n confluyen m�ltiples campos como la f�sica y tecnolog�a de la materia condensada, la qu�mica macromolecular y la biolog�a. La nanomec�nica y la nanoqu�mica est�n forjando nuevos caminos entre el mundo virtual de procesamiento de datos de todos tipos (incluyendo los procesamientos mec�nicos, qu�micos y t�rmicos) y el mundo real de sensaciones y actuaciones, provocando una onda invasora de tecnolog�as de procesamiento, sensaciones y actuaciones nuevas e integradas.<br><br>Es esta diferencia la que plantea los grandes retos en la era nano y la que supone la promesa para la nano ciencia y la tecnolog�a de que se convertir� en la piedra angular del mundo cient�fico y tecnol�gico de este siglo.";break;
case "Ponente_C_Rohrer":
$strTexto = "".
"<br><br>Heinrich Rohrer estudi� F�sica Experimental en Swiss Federal Institute of Technology Zurich (ETHZ). En 1963, despu�s de dos a�os de estudios post-doctorales en EE UU, se uni� al IBM Zurich Research Laboratory. En 1986 fue galardonado con el Premio Nobel de F�sica por su trabajo sobre. Dej� IBM en 1997 y recibi� varios nombramientos en Suiza, Jap�n y Espa�a.";break;
case "Ponente_A_Ron":
$strTexto = "<b>Einstein y la Filosof�a en el Siglo XXI</b>".
"<br><br>Se considera a Albert Einstein como el cient�fico m�s importante del siglo XX y uno de los m�s importantes de todos los tiempos, pero su influencia no se manifiesta tan s�lo en la ciencia, tambi�n en la filosof�a, en especial en la epistemolog�a y la metodolog�a. En mi intervenci�n abordar� los siguientes temas: 1) la influencia que la filosof�a tuvo en Einstein durante sus a�os m�s productivos y su interacci�n en aquel momento con algunos fil�sofos (como Mach o Schlick); 2) c�mo su 'filosof�a de la ciencia' cambio de acuerdo (y de forma coherente con) la evoluci�n de sus intereses y puntos de vista cient�ficos; 3) c�mo han influido sus contribuciones cient�ficas, en particular la relatividad general y especial, en la filosof�a del siglo XX, poniendo especial atenci�n  en los fil�sofos brit�nicos de entre 1910 y 1930, Jos� Ortega y Gasset, los miembros del C�rculo de Viena y otros relacionados con este movimiento, como Hans Reichenbach y Karl Popper.";break;
case "Ponente_C_Ron":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>".
"<br><br>El Dr. S�nchez-Ron naci� en Madrid en 1949, se licenci� en f�sica en la Universidad Complutense de Madrid en 1971 y se doctor� en University College London. Actualmente es profesor de Historia de la Ciencia en la Universidad Complutense en madrid.. Miembro de la Real Academia Espa�ola (2003) y de la Academia Europea de Ciencias y Artes (Academia Scientiarum et Artium Europaea; 2003). <br>El Dr. S�nchez-Ron es autor de m�s de 20 libros, entre ellos El origen y desarrollo de la relatividad (1983), La Espa�a posible de la Segunda Rep�blica. La oferta a Einstein de una c�tedra extraordinaria en la Universidad Central (Madrid 1933), en colaboraci�n con Thomas F. Glick (1983), El poder de la ciencia (1992), Miguel Catal�n. Su obra y su mundo (1994), editor con Paul Forman de National Military Establishments and the Advancement of Science and Technology (1996), Cincel, martillo y piedra. Historia de la ciencia en Espa�a (siglos XIX y XX) (1999), El mundo de Marie Curie (2000), El Siglo de la Ciencia (2000), por el cual recibi� el Premio de Humanidades Jos� Ortega y Gasset. <br>Tambi�n es autor de numerosos art�culos, el m�s reciente 'Larmor versus general relativity', Einstein Studies (1999); 'Einstein, general relativity and the field concept', en Relativity and Gravitation in General (1999); y 'International relations in Spanish physics from 1900 to the Cold War', Historical Studies in the Physical and Biological Sciences 33 (2002).";break;
case "Ponente_A_Stachel":
$strTexto = "<b>El gran sue�o de Einstein: Una f�sica independiente del fondo</b>".
"<br><br>Los te�ricos del campo cu�ntico han pasado los �ltimos sesenta a�os en un intento infructuoso de cuantificar la relatividad general usando m�todos de  la teor�a del campo cu�ntico (relatividad especial). M�s recientemente, te�ricos de la cuerdas han intentado inventar una TOE (Teor�a del Todo), de la que se derivase la relatividad general (o un facs�mile razonable de �sta). Tanto la teor�a del campo cu�ntico est�ndar como la teor�a de las cuerdas est�ndar se han apoyado en la presencia de una estructura  espacio-tiempo de fondo fijo de cuatro dimensiones (o m�s, en el caso de la teor�a de la cuerdas). La relatividad general es el primer ejemplo de una teor�a f�sica  completamente independiente del fondo en la cual las estructuras espacio-tiempo se convierten en entidades din�micas. Si los intentos actuales para crear una t�cnica de cuantizaci�n  independiente del fondo y aplicarla a la teor�a general tienen �xito, la b�squeda de una f�sica independiente del fondo se ver� como el mayor sue�o de Einstein.";break;
case "Ponente_C_Stachel":
$strTexto = "<b>Boston University.</b>".
"<br><br>John Stachel hizo su tesis doctoral sobre la relatividad general. Fue profesor auxiliar de F�sica en Lehigh University desde 1959 hasta 1961 y en la University of Pittsburgh de 1961 a 1962, en donde fue asociado de investigaci�n en f�sica entre 1962 y 1964. Desde entonces es miembro del Departamento de F�sica de Boston University. Actualmente es profesor em�rito de F�sica. Ha sido miembro invitado de la facultad en otras instituciones como Princeton University;  University of California en Berkeley; King's College, Londres; University of Paris VI, Center for Advanced Studies of the IPN, M�xico City, Institute for Theoretical Physics, Varsovia, y Max-Planck-Institute for the History of Science, Berlin. <br>Ahora dirige el Boston University Center for Einstein Studies, que a patrocinado una serie de conferencias sobre historia de la relatividad general, los primero a�os de Einstein, etc. Es co-editor (con Don Howard) de la serie Einstein Studies, de la cual se han publicado nueve vol�menes, cuatro directamente relacionados con la historia de la relatividad general. <br>Adem�s de haber escrito casi cien art�culos sobre f�sica te�rica y la historia y filosof�a de la ciencia, el profesor Stachel es el fundador de The Collected Papers of Albert Einstein. Tambi�n ha editado El a�o milagroso de Einstein, una edici�n inglesa comentada sobre los art�culos de Einstein de 1905, que ha sido traducida a media docena de lenguas. Es el autor de Einstein From 'B' to 'Z', una colecci�n de sus art�culos sobre Einstein y Going Critical, una colecci�n en dos vol�menes de sus art�culos sobre otros temas, est� en la imprenta.<br>El profesor Stachel tambi�n es editor de, entre otros, Conceptual Problems of Quantum Gravity - Proceedings of the 1988 Osgood Hill Conference (con Abhay Ashtekar) y gran parte de su trabajo actual est� relacionado con este tema. ";break;
case "Ponente_A_Cohen":
$strTexto = "<b>Condensados Bose-Einstein una nueva forma de materia</b>".
"<br><br>Nuestra habilidad para manipular con luz l�ser los �tomos ha aumentado considerablemente durante las �ltimas d�cadas. Los m�todos de enfriamiento y captura l�ser combinados con la captura magn�tica y el enfriamiento evaporativo permiten enfriar gases at�micos a temperaturas muy bajas en la escala nanokelvin y alcanzar el r�gimen de degeneraci�n cu�ntica en el que la distancia media entre los �tomos es menor que la longuitud de onda de Broglie. Las ondas at�micas de Broglie se solapan e interfieren, dando lugar a nuevas situaciones en las que un n�mero macrosc�pico de �tomos se condensa en el mismo estado cu�ntico. Estas ondas de materia macrosc�pica muestran propiedades tan sorprendentes como la coherencia o la superfluided, Describiremos recientes avances en este campo y mostraremos como es posible observar en sistemas tan diluidos, casi 100000 veces m�s diluidos que el aire, efectos que hasta ahora s�lo hab�an sido investigados en la materia condensada.";break;
case "Ponente_C_Cohen":
$strTexto = "<b>Coll�ge de France and Laboratoire Kastler Brossel</b>".
"<br><br>Claude Cohen-Tannoudji naci� en 1933 y se doctor� en 1962 en Ecole Normale Sup�rieure en Par�s. Fue profesor en University of Paris de 1964 a 1973. Desde 1973, es profesor de F�sica At�mica y Molecular en el Coll�ge de France en Par�s. ".
"<br><br><br>El profesor Cohen-Tannoudji ha escrito 3 libros y ha publicado aproximadamente 200 art�culos te�ricos y experimentales que versan sobre temas relacionados con f�sica at�mica y �ptica cu�ntica: bombeo �ptico y  cambios de luz, enfoque del �tomo vestido para entender el comportamiento de los �tomos en RF (radio frecuencia) intensa o campos �pticos, efectos de interferencia cu�ntica, fluorescencia de resonancia, correlaciones de fotones, interpretaci�n f�sica de correcciones radioactivas, fuerzas radioactivas, enfriamiento y captura l�ser, condensaci�n Bose-Einstein, etc. <br><br>El profesor Cohen-Tannoudji ha recibido numerosas reconocimientos, entre ellos el Premio Nobel de F�sica en 1997 compartido con Steven Philips y Steven Chu.";break;
case "Ponente_A_Yndurain":
$strTexto = "<b>Relatividad, fotones y part�culas</b>".
"<br><br>En el a�o 1905, Albert Einstein produjo tres art�culos b�sicos para el desarrollo de la ciencia del siglo XX: un art�culo sobre el movimiento Browniano, que proporcionaba un m�todo extremadamente preciso para as� contar �tomos y que permiti� establecer definitivamente la estructura corpuscular de la materia;  ".
"<br><br>Un art�culo en que desarroll� la teor�a de la relatividad, algunas de cuyas consecuencias analizaremos; y, finalmente, un art�culo en el que estableci� que la luz (que hasta entonces se hab�a considerado como una vibraci�n se comportaba, en el efecto fotoel�ctrico, como part�culas, a las que �l llam� sl Lichtquanten y que son en la actualidad conocidas como sl fotones.  ".
"<br><br>Este �ltimo descubrimiento, tal vez el m�s fundamental, llev� entre otras ".
"cosas al desarrollo de la mec�nica cu�ntica. ".
"<br><br>Discutiremos la intuici�n brillante de Einstein en la formulaci�n de la teor�a de la relatividad, superando a Lorentz y Poincar�; y la introducci�n del concepto de fot�n, propuesta a�n m�s audaz, ya que implica que algo --la luz-- puede ser a la vez onda y part�cula, una paradoja que s�lo pudo aclararse veinte a�os despu�s con el principio de incertidumbre de Heisenberg. ".
"<br><br>Consideraremos algunos de los efectos de los descubrimientos de Einstein: entre ellos, de la ecuaci�n E=mc^2, tal vez la m�s famosa de la f�sica; y del entrejuego de relatividad y mec�nica cu�ntica, que, para las interacciones electromagn�ticas, ha producido la teor�a m�s precisa que el ser humano haya sido capaz de crear. ".
"Esta teor�a, conocida como sl electrodin�mica cu�ntica, es tan exacta que sus c�lculos implican, para las interacciones mediadas por fotones, una precisi�n en el acuerdo entre teor�a  y experimento de hasta once  cifras significativas.";break;
case "Ponente_C_Yndurain":
$strTexto = "<b>Universidad Aut�noma, Madrid</b>".
"<br><br>Nacido en Benavente (Zamora), 23 Dic. 1940, se licenci� y doctor� en  Matem�ticas y por la Universidad de Zaragoza en1962 y 1964 respectivamente. Es Catedr�tico de F�sica Te�rica desde 1968, y desde 1972 la ocupa en la  Universidad Aut�noma de Madrid, de la que ha sido Decano y Vicerrector. ".
"<br><br>Ha sido Associated Researcher, Fellow,  Profesor Visitante o Profesor en las siguientes instituciones: Universidades de Par�s (Orsay), Central de Venezuela, Groningen, Marsella, Michigan, La Plata,  New York University; as� como  en el Centro Interamericano de F�sica Te�rica en Bogot�, Instituto E. Schr�dinger (Viena), el Centre d�Energie Nucl�aire de Saclay, NIKHEF (Amsterdam), Brookhaven National Laboratory (USA) y CERN (entre otros). ".
"<br><br>Ha sido miembro por invitaci�n de la New York Academy of Sciences y de la American Association for the Advancement of Science, miembro del High Energy Physics Board de la Sociedad Europea de F�sica (seis a�os), y miembro del Comit� de Pol�tica Cient�fica del CERN (seis a�os). Dos veces elegido por el Senado para el Consejo de Universidades. ".
"<br><br>El Profesor Yndurain cuenta con numerosos nombramientos y distincciones, entre las que destacan, su nombramiento como Miembro fundador de la Sociedad Europea de F�sica, ".
"Miembro de la Real Academia de Ciencias de Espa�a y de la Academia Europaea. ".
"Desde junio, 2002, Presidente de la Secci�n de F�sica y Qu�mica de la RACE. Desde febrero, 2004, Secretario General del Instituto de Espa�a. ".
"Miembro de la World Innovation Foundation, Londres. ".
"<br><br>Cavalliere Ufficiale nell�Ordine al Merito de la Rep�blica Italiana; Premio a la investigaci�n cient�fica de la Real Academia de Ciencias; Medalla de Oro  de la Real Sociedad Espa�ola de F�sica;designado Hu�sped Distinguido de la Universidad de La Plata,Argentina. ".
"<br><br>Es Autor de libros cient�ficos:Quantum Chromodynamics, Springer Verlag (1983),traducido al Ruso: Kvantovaya Khromodinamika, Ediciones Mir, 1986. Segunda edici�n corregida y aumentada: The Theory of Quark and Gluon Interactions, Springer Verlag, (1993). Tercera edici�n en lengua inglesa, corregida y aumentada: Springer Verlag, (1999). Mec�nica Cu�ntica, Alianza Editorial (1988); segunda edici�n, 2003 (Ed. Ariel). ".
"Mec�nica Cu�ntica Relativista, Alianza Editorial (1990); Edici�n inglesa, corregida y aumentada: Relativistic Quantum Mechanics: with an Introduction to Field Theory, Springer Verlag 1996. ".
"<br><br>Autor o coautor de m�s de cien trabajos cient�ficos, la mayor�a en F�sica de Altas Energ�as y de Part�culas Elementales, y algunos en F�sica Matem�tica, F�sica de la Materia Condensada y en F�sica Nuclear. ".
"Autor de varios art�culos de divulgaci�n, en Investigaci�n y Ciencia, Arbor, La Revista de Occidente, etc., y en contribuciones a libros con autor�a colectiva. ".
"<br><br>Autor de libros de divulgaci�n: Teor�as unificadas y constituyentes fundamentales de la materia, Espasa Calpe, 1988; Electrones, neutrinos y quarks, Ed. Cr�tica, 2001; y de la colecci�n de ensayos Los desaf�os de la ciencia, Ed. Cr�tica, 2003. ".
"<br><br>Autor del  libro de especulaci�n �Qui�n Anda Ah�?, Ed. Debate, 1997, premio 'La Golondriz' 1998 al humor inteligente.";break;
case "Ponente_A_Zeilinger":
$strTexto = "<b>Einstein y el mundo cu�ntico en la actualidad</b> ".
"<br><br>Einstein critic� la F�sica Cu�ntica sobre todo por el nuevo papel que jugaba la suerte en los sucesos cu�nticos individuales y por el conflicto entre el enredo cu�ntico y una visi�n del mundo local realista. Actualmente, la aleatoriedad y el enredo se han convertido en elementos esenciales de una nueva tecnolog�a de la informaci�n usada en sistemas cu�nticos individuales. En esta conferencia hablaremos de los �ltimos experimentos en criptograf�a cu�ntica y teleportaci�n cu�ntica. En la criptograf�a cu�ntica basada en el enredo, la aleatoriedad de los sucesos individuales sirve para crear una clave segura. En teleportaci�n cu�ntica, el enredo proporciona un canal cu�ntico para transferir el estado del original. Teniendo en cuenta que los resultados de los experimentos confirman totalmente las predicciones cu�nticas, las cuestiones filos�ficas planteadas por Einstein a�n esperan soluci�n. Se sugiere que la noci�n de informaci�n desempe�a un papel esencial en las bases de la teor�a cu�ntica.";break;
case "Ponente_C_Zeilinger":
$strTexto = "<b>University of Vienna</b>".
"<br><br>Anton Zeilinger naci� en Viena en 1945. Estudi� F�sica y matem�ticas en su ciudad natal y se doctor� con la tesis 'Neutron Depolarization in Dysprosium Single Crystals' bajo la tutela del profesor H.Rauch. Ha ocupado distintos puestos en varios pa�ses, entre los que destacan su estancia como investigador en el Laue-Langevin Institute en Grenoble Francia (1974-1989), MIT (1977-1983), University of Munich (1988-1989) y University of Innsbruck (1990-1999). Actualmente y desde1999, est� en el Department of Experimental Physics en Vienna. Su trabajo sobre teletransportaci�n ha sido elogiado en muchas ocasiones.<br><br>El profesor Zeilinger es miembro de Austrian Academy of Sciences,  American Physical Society y Academia Scientiarum et Artium Europaea. Su curr�culum vitae se puede consultar en  www.quantum.univie.ac.at/zeilinger/.";break;
case "Ponente_A_Pascual":
$strTexto = "<b>Einstein y los quanta de luz</b>".
"<br><br>Se pretende discutir de firma elemental las dos contribuciones m�s importantes de Albert Einstein sobre los quanta de luz. ".
"<br><br>La primera es el famoso trabajo del a�o 1905 en que se explica el efecto fotoel�ctrico (cuando se ilumina una placa met�lica con radiaci�n electromagn�tica, el metal emite electrones) concluyendo que la radiaci�n electromagn�tica monocrom�tica de una determinada frecuencia se comporta como si constara de un n�mero finito de cuantos de energ�a, localizados e independientes, de magnitud igual a la constante de Planck multiplicada por la frecuencia. En el a�o 1921 en la nominaci�n del Premio Nobel de F�sica se dice: 'Por sus servicios a la F�sica Te�rica, y especialmente por su descubrimiento de la ley del efecto fotoel�ctrico.' ".
"<br><br>La segunda gran contribuci�n de Einstein fue publicada el a�o 1917 en un trabajo en el que estudia el equilibrio t�rmico de un gas at�mico en interacci�n con la radiaci�n electromagn�tica en el que lograba relaciones entre los coeficientes de emisi�n espont�nea e inducida y el de absorci�n inducida. En este trabajo encontr� que para la emisi�n inducida de los quanta de luz que se produc�an con una energ�a determinada ten�an un momento igual a su energ�a dividida por la velocidad de la luz. Este trabajo es reconocido hoy d�a como la base te�rica del l�ser.";break;
case "Ponente_C_Pascual":
$strTexto = "<b>Universidad Central, Barcelona</b> ".
"<br><br>Pedro Pascual naci� en Sevilla el 27-04-1934. ".
"<br>Licenciado y doctor en F�sicas. ".
"<br><br>Catedr�tico de F�sica Te�rica desde 1963 hasta 2000, en las Universidades de Valencia y Barcelona. ".
"<br>Ha trabajado en la Universidad de Chicago (22 meses), en el CERN (25 meses) y en la Universidad de Marsella (5 meses). ".
"<br>Director del GIFT (Grupo Interuniversitario de F�sica Te�rica) (1970-74) ".
"<br>Primer gestor del Plan Nacional de Altas Energ�as (1984-89) ".
"<br>Miembro del 'Committee for the European Development of Science and Technology' (CODEST). Comit� consultivo general de la Comisi�n de las Comunidades Europeas (1986-92) ".
"<br>Asesor Cient�fico de la Secretar�a de estado de Universidades e Investigaci�n (1988-93) ".
"<br>Primer Coordinador General de la Comisi�n Nacional Evaluadora de la Actividad Investigadora (1989-93) ".
"<br>Consultor Cient�fico de Iberdrola S. A. (1992-2002) ".
"<br>Creador, Director-Gerente de la 'Fundaci�n Centro de Ciencias de Benasque' (1995- ) ".
"<br>Primer Organizador y Presidente del Jurado de la 'Distinci� de la Generalitat de Catalunya per a la Promoci� de la Recerca'. (2000-03) ".
"<br><br>Su principal campo de trabajo es la teor�a cu�ntica de campos, en la que ha publicado numerosos trabajos. ".
"<br>Los libros m�s importantes que ha publicado son:  ".
"<br>'Mec�nica Cu�ntica'. A. Galindo y P. Pascual. Editorial Alhambra. P�gs. XV + 749 p�ginas. Madrid, 1978. ".
"<br>'QCD: Renormalization for the Practitioner'. P. Pascual y R. Tarrach. Lecture Notes in Physics, 194. Springer Verlag. 277 p�ginas. Berl�n, 1984. ".
"<br>'Problemas de Mec�nica Cu�ntica'. A. Galindo y P. Pascual. Editorial Eudema. 615 p�gs. Madrid, 1989. ".
"<br>'Mec�nica Cu�ntica'. A. Galindo y P. Pascual. Editorial Eudema. Vol. I, 501 p�ginas y Vol. II, 441 p�ginas. Madrid, 1989. Es una versi�n ampliada y corregida de la obra que figura en primer lugar. Existe una traducci�n inglesa 'Quantum Mechanics'. A. Galindo and P. Pascual. Springer-Verlag. Vol. I XVI+417 and Vol. II XVI+374. Berl�n, 1990. Los derechos de traducci�n de esta obra al italiano fueron comprados por la editorial Nichola Zanichelli. ".
"<br><br>Entre las distinciones recibidas: ".
"<br>Medalla de la Real Sociedad Espa�ola de F�sica al M�rito Investigador. (1973) ".
"<br>Premio Nacional de Investigaci�n Cient�fica 'Santiago Ram�n y Cajal 1985'.  ".
"<br>Medalla 'Narc�s Monturiol' al m�rito cient�fico y tecnol�gico (1986) ".
"<br>La revista 'Cambio 16' le nombr� 'Cient�fico del A�o'. (1987) ".
"<br>Nombramiento de 'Doctor Honoris Causa' por la Universidad de Valencia. (1987) ".
"<br>Concesi�n de la 'Gran Cruz de la Orden Civil de Alfonso X el Sabio'. (1995) ".
"<br>'Medalla d�Or al M�rit Cient�fic de la Fundaci� Catalana per la Recerca'. (1996) ".
"<br>'Insignia de Ouro da Universidade'. Universidad de Santiago de Compostela. (1999)";break;
case "Ponente_C_Lucas":
$strTexto = "<b></b>".
"<br><br>El profesor Lucas naci� en 1936 en Lieja (B�lgica). Se doctor� en F�sica de Materia Condensada en la University of Lieja en 1966. Como miembro investigador de la Belgian National Science Foundation, especializado en F�sica Superficial, tuvo un puesto posdoctoral en el Battelle Institute, COlumbus, Ohio (67-68), y fue Investigador Visitante en ICTP, Trieste (71) y ESA, Nordwijk (72). El profesor Lucas ha tenido la c�tedra de F�sica en Namur UNiversity desde 1974 (se retir� en 2002). Ha pasado periodos sab�ticos en IBM Yorktown (78) e IBM Almaden (87). En 1985 recibi� el premio belga Francqui, por sus contribuciones a la espectroscopia electr�nica de la excitaci�n de estados s�lidos, y en 2001 el premio Wernaers, por las contribuciones originales a la ense�anza de la biolog�a estructural. Es miembro de la American Physical Society, miembro de la Acad�mie Royale de Belgique, de la Academia Europaea y de la European Academy of Sciences, Arts and Letters.";break;
case "Ponente_A_Lucas":
$strTexto = "<b>Einstein y los fen�menos de difusi�n que cambiaron el curso de las relaciones humanas</b>".
"<br><br>La ecuaci�n de la difusi�n lineal, con la que el nombre de Einstein est� especialmente relacionada, constituye un 'garabato' matem�tico esencial en la base de algunos descubrimientos que han cambiado el mundo. Muchos de esos descubrimientos, elegidos entre muchas situaciones hist�ricas, se repasar�n en esta conferencia: la primera comunicaci�n global mediante el tel�grafo, la edad de la tierra, el tama�o de los �tomos, el modo en el que se replica el ADN y la bomba at�mica.";break;
case "Ponente_C_Flores":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>".
"<br><br>Nacido en Cartagena(1939) . Ingeniero de Caminos(1963), F�sico (1966) y Doctor en Ingenier�a(1970) . Catedr�tico de F�sica de la Materia Condensada (1975 ,Universidad Aut�noma de Madrid ) . Director de Depar-tamento y Director del Instituto de Cienciade Materiales  en la UAM( periodos alternativos entre 1980 y '004) .<br><br>Ha publicado m�s de 320 art�culos en revistas internacionales y varios libros . Ha dirigido 22 tesis doctorales . .<br><br>Ha recibido las siguientes distinciones: .<br><br>Medalla de Oro de la Real Sociedad Espa�ola de F�sica(1991) ; Fellowship de la American Physical Society (1987) ; Premio Iberdrola (1993) ; Premio Nacional de F�sica Blas Cabrera (2001) ; Medalla del Colegio de Ingeniero de Caminos (2004) .<br><br>Tambi�n ha sido 'Laurel de la Regi�n de Murcia' (1994) ,  'Premio Alumbre' Fundaci�n Emma Egea , 2002) y 'Premio La Verdad de Murcia en Ciencias '.(2003) ";break;
case "Ponente_A_Flores":
$strTexto = "<b>Materia y Forma.</b>".
"<br><br>En el 'a�o milagroso'  de Einstein (1905) , cinco de sus publicaciones cambiaron la direcci�n de la F�sica del siglo XX . Si bien su trabajo sobre la teor�a de la relatividad , y su discusi�n de los conceptos de tiempo y espacio , aparece en la mente popular como el m�s revolucionario , sus contribuciones sobre la hip�tesis cu�ntica de la radiaci�n y sobre el car�c-ter at�mico de la materia (movimiento browniano) preparan el camino hacia la F�sica del nuevo siglo . Junto a estos art�culos , sus contribuciones posteriores a la estad�stica Bose-Einstein  prefiguran lo que terminar�a por dar 'forma' a nuestra manera de entender la 'materia' condensada .<br><br> Ilustrar� este desarrollo con algunos ejemplos (superconductividad y superfluidez) que podemos entender como una transici�n de fase de un gas de bosones . Tambi�n discutir� c�mo nuestra 'forma' actual de entender la 'materia' condensada utiliza profusamente las simulaciones num�ricas mecano-cu�nticas : en este sentido pondr� alg�n ejemplo para mostrar c�mo empezamos a unir lo macrosc�pico con lo at�mico al nivel de la nanotecnolog�a .";break;
case "Menu_ComiteOrganizador":
$strTexto="<b>Comit� Organizador</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Presidente: </b>Alberto Galindo (Catedr�tico de F�sica Te�rica de la Universidad Complutense de Madrid).".					
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Copresidentes: </b>Pedro Miguel Echenique (Presidente del DIPC), Juan Colmenero (Director General del DIPC)".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Coordinadores: </b> Unai Ugalde (Universidad del Pa�s Vasco), Juan Jos� Iruin (Universidad del Pa�s Vasco)";break;
case "Menu_Contacto":
$strTexto= "<b>SECRETARIA TECNICA: TISA CONGRESOS</b>".
"<br><br>Ref. Congreso Einstein ".
"<br>Avda. de la Libertad, 17-5� - 20004 Donostia-San Sebasti�n ".
"<br>Tel. 943 425420 ".
"<br>Fax 943 422124 ".
"<br>e-mail: <a href='mailto:tisa-congresos@infonegocio.com'><u>tisa-congresos@infonegocio.com</u></a> ";break;
case "GobiernoVasco": $strTexto="Gobierno Vasco";break;
case "Kutxa": $strTexto="Kutxa";break;
case "UPV": $strTexto="UPV";break;
case "Diputacion": $strTexto="Diputaci�n";break;
case "Ayuntamiento": $strTexto="Ayuntamiento";break;
}
break;
case "eu":
$strTexto= "Euskera";
switch($istrTexto){
case "CAST": $strTexto="";break;
case "ENGL": $strTexto="";break;
case "EUSK": $strTexto="";break;
case "5Septiembre": $strTexto="Irailak 5";break;
case "6Septiembre": $strTexto="Irailak 6";break;
case "7Septiembre": $strTexto="Irailak 7";break;
case "8Septiembre": $strTexto="Irailak 8";break;
case "AlbertEinstein": $strTexto="Albert Einstein";break;
case "Alojamientos": $strTexto="Ostatua";break;
case "Becas": $strTexto="Bekak";break;
case "ComiteOrganizativo": $strTexto="Antolakuntza Batzordea";break;
case "ComoInscribirse": $strTexto="Nola izena eman";break;
case "ComoLlegarASanSebastian": $strTexto="Donostia bisitatzen";break;
case "Contacto": $strTexto="Kontaktua";break;
case "Copyright": $strTexto="Copyright";break;
case "Culminacion": $strTexto="Erlatibitatearen gailurra";break;
case "DIPC": $strTexto="DIPC";break;
case "DossierDePrensa": $strTexto="Prentsa dossierra";break;
case "ElPaisVasco": $strTexto="Euskadi";break;
case "EnTotal": $strTexto="guztira";break;
case "EventosParalelos": $strTexto="Parallel events";break;
case "FormularioDeAcreditacion": $strTexto="Prentsa Formularioa";break;
case "GaleriaDeImagenes": $strTexto="Galeria eta irudiak";break;
case "Home": $strTexto="Home";break;
case "ImpactoDeLaObra": $strTexto="Bere lanaren inpaktua";break;
case "InformacionGeneral": $strTexto="Informazio orokorra";break;
case "Inscripciones": $strTexto="Izena emateak";break;
case "Introduccion": $strTexto="Sarrera";break;
case "Kutxaespacio": $strTexto="Erakusketa";break;
case "LaCiudad": $strTexto="Hiria";break;
case "LaSede": $strTexto="Egoitza";break;
case "Links": $strTexto="Linkak";break;
case "LosCincoTrabajosDeEinstein": $strTexto="Einsteinen bost lanak";break;
case "VerDiferido": $strTexto="Kongresua online";break;
case "VerDiferidoURL": $strTexto="http://www.digitalak.com/einstein/einsteineus.html";break;
case "Patrocinadores": $strTexto="Babesleak";break;
case "Ponentes": $strTexto="Hizlariak";break;
case "Presentacion": $strTexto="Aurkezpena";break;
case "Programa": $strTexto="Programa";break;
case "SalaDePrensa": $strTexto="Prentsa aretoa";break;
case "Significado": $strTexto="Gertaeraren garrantzia Euskal Gizartearentzat";break;
case "SobreElEvento": $strTexto="Erakusketa";break;
case "Subir": $strTexto="Gora";break;
case "UltimasNoticias": $strTexto="Azken Berria";break;
case "UsuarioIncorrecto": $strTexto="Usuario incorrecto";break;
case "Visualizando": $strTexto="Ikusten";break;
case "VidayObra": $strTexto="Bizitza eta Obra";break;
case "CAST": $strTexto="CAST";break;
case "ENGL": $strTexto="ENGL";break;
case "EUSK": $strTexto="EUSK";break;
case "Ponentes": $strTexto="Hizlariak";break;
case "Ponente1": $strTexto="Informazio Kuantikoaren Teoria: Erronkak eta ikuspegiak.";break;
case "Ponente2": $strTexto="Bose-Einstein kondentsatuak, materia modu berri bat.";break;
case "Ponente3": $strTexto="Materia eta Forma.";break;
case "Ponente4": $strTexto="1. Einstein eta denbora.<br>2. Zulo beltzak.";break;
case "Ponente5": $strTexto="Zer da teoria bateratu bat?";break;
case "Ponente6": $strTexto="Mugimendu browndarra eta motor molekularrak.";break;
case "Ponente7": $strTexto="Pulsar Fisika eta Einsteinen entseguak.";break;
case "Ponente8": $strTexto="Einstein: bera nor zer erakutsi zuena eta oraindik ere hain bizirik dagoena.";break;
case "Ponente9": $strTexto="Materia konplexuranzko pausoak:<br>Informazioa, auto-antolakuntza eta egokitzapena sistema kimikoetan.";break;
case "Ponente10": $strTexto="<i>Einstein, Picasso</i><br>Espazioa, denbora eta kalte handia eragiten dituen edertasuna.";break;
case "Ponente11": $strTexto="Einstein eta argi kuantuak.";break;
case "Ponente12": $strTexto="Unibertsoaren jatorria eta bilakaera:<br>Kosmologiaren Erronkak.";break;
case "Ponente13": $strTexto="Nanoa dena desberdina da.";break;
case "Ponente14": $strTexto="Einstein eta XX. Mendeko Filosofia.";break;
case "Ponente15": $strTexto="Einsteinen amets handia: fondotik independentea den fisika.";break;
case "Ponente16": $strTexto="1. Erlatibitate orokorraren eta esperimentuen arteko alderaketa.<br>2. Einsteinek arrazoi al zuen?";break;
case "Ponente17": $strTexto="Erlatibitatea, fotoiak eta partikulak.";break;
case "Ponente18": $strTexto="Einstein eta egungo mundu kuantikoa.";break;
case "Ponente19": $strTexto="Einstein eta giza erlazioen bilakaera aldatu zuten difusio fenomenoak.";break;
case "InfoGeneral_Introduccion":
$strTexto="<b>Aurkezpena</b> ".
"<br><br><a href='http://dipc.ehu.es/' target='_blank'><u>Donostia Internacional Physics Center (DIPC) Fundazioak</u></a> Fisikaren Munduko Urtean, Albert Einsteinen <i>Annus Mirabilis</i>aren mendeurrenaren ospakizunekin bat egiten du.".
"<br><br>Urte honetan betetzen da zientzia unibertsalarentzat urte harrigarria izan zen 1905.urtearen mendeurrena. Bernako patenteen funtzionario ezezagun batek urte horretan fisikaren, zientziaren eta gizateriaren norabidea aldatuko zuten bost lan argitaratu zituen. Einsteinen <i>Annus Mirabilis</i>aren ospakizunak zientziaren garrantzia azpimarratzen du ezagutzaren motor gisa eta garapen teknologiko eta sozio-ekonomikoko katalizatzaile gisa.".
"<br><br>Einsteinen irudia gainera belaunaldi berrientzat eredu bikaina da. Bere sorkuntza eta intuizioak gidatu zuten Unibertsoa beste modu batean Ulertzeko ametsean.".
"<br><br>Einsteinen <i>Annus Mirabilis</i>a ospatzeko ekitaldiak prestatzen ari gara eta gizartea mailarik altueneko ikerketarekin kontaktuan jartzeko helburua dugu. Gure <a href='http://www.elansys.net/einstein/index.php?pg=1&opcion=20' target='_parent'><u>programa</u></a> aztertzera gonbidatzen zaitugu.".
"<br><br>Gomendaturiko ikerlariak munduko elitekoak dira. Programaturiko ekintzek osoko konferentziak eta gaikakoak biltzen dituzte, bai eta haurrei eta gazteei Einsteinen irudia aurkezteko erakusketak ere.".
"<br><br>Ekintzetan izen-ematea doanik da. Antolakuntzak beka-kopuru bat emango du bertaratzeko gastuak estaltzeko.".
"<br><br>Espero dugu bere garaian antolatzen ari garen ekintzez gozatuko duzula, bai eta <a href='index.php?pg=1&opcion=21' target='_parent'><u>Donostiako hiriaz</u></a> ere.".
"<br><br><b>Pedro Miguel Echenique".
"<br>DIPCeko lehendakaria</b>";break;
case "Info_PaisVasco":
$strTexto = "<b>Euskadi</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Natura:</b> ".
"<br>Euskadik, lurralde industriala izan eta dentsitate handiko populazioa duenak, babes berezia duten ekosistema aberatsek osaturiko Ondare Natural garrantzitsua du. Parke naturalak, biosferaren erreserbak eta biotopo babestuak.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Kultura:</b> ".
"<br>Euskadiko kultura-bizitza gorakadan dago eta gizarte honen elementu dinamizatzaileetariko bat da. Museoak, monumentuak, jaiak, gertakariak.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Aisia:</b> ".
"<br>Euskadiren dibertsitateak bisitariari aisialdirako eskaintza osatu eta ugariaren artean hautatzeko aukera ematen dio. Turismo aktiboa, lasaitasuna, erosketak.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Gastronomia:</b> ".
"<br>Euskadiko sukaldaritza nazioartean ospe handienetarikoa duenatzat jotzen da.".
"<br><br>Bisitatzera etortzen direnek baieztatzen dute, nahiz eta askaldegian, jatetxean, erretegian edo sagardotegian izan, Euskadin oso ondo jaten dela.".
"<br><br>Bere produktuen kalitatean oinarritzen den sukaldaritza tradizionalak prestaketa sinplea du, herritarren artean ondo errotua dagoena eta itsasoko produktuak dituena protagonista, haragiak gihar eta zaporetsuak, lurrari loturiko produktuak, babarrunak kasu, edo gazta eta mamia bezalako esnekiak ahaztu gabe. Produktu horiek eta beste hainbatek osatzen dute gastronomia tradizionalaren errezeta-liburu gozoa.".
"<br><br><table border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom> ".
"<img src='images/ico_info.jpg'> <b>Informazioa:</b> ".
"<br><br>� Informazio orokorra: <a href='http://www.paisvasco.com' target='_blank'><u>www.paisvasco.com</u></a> ".
"<br>� Eusko Jaurlaritzaren informazioa: <a href='http://www.euskadi.net' target='_blank'><u>www.euskadi.net</u></a> ".
"<br>� Turismoko informazioa: <a href='http://www.euskaditurismoa.net' target='_blank'><u>www.euskaditurismoa.net</u></a> ".
"</center></td></tr></table>";break;
case "Info_LaCiudad":
$strTexto= "<b>Hiria</b> ".
"<br><br>Donostia-San Sebasti�n (<a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>Ikus mapa</u></a>) Gipuzkoako hiriburua eta estatuko hiririk enblematikoenetariko bat da. Bere kokapen pribilegiatuak eta inguruko edertasunak urte askotan zehar gune turistiko garrantzitsu bihurtu dute hala estatuan nola nazioartean.".
"<br><br><center><img src='images/3.jpg'> &nbsp;&nbsp; <img src='images/4.jpg'></center> ".
"<br><br>Hiriak iragana eta modernitatea bateratzen ditu beti bere ezaugarri izan den esentzia galdu gabe. Denborak aurrera egin ahala, gaur egun aurrerapenik handienekin batera bizi diren tradizioak gorde dira. Horrela bada, bere bisitariei lasaitasunerako, turismorako eta aisiarako eszenatokirik onena eskaintzen die, negozio-gune garrantzitsu izateari utzi gabe <a href='index.php?pg=4&opcion=7'><u>Kursaal Kongresu Jauregia - Auditorioa</u></a> duela protagonista.".
"<br><br>Donostiara iristen diren guztiek eman ditzakete paseoak kaleetatik eta hondartzetatik; bere Alde Zaharreko pintxo tipikoez gozatu; museoak, Aquarima eta hainbat kultura-zentro bisitatu; Talasoterapiako sesio batekin edo hiria gordetzen duten Urgull eta Igeldo bi mendietatik ikusten diren ikuspegi zoragarriekin lasaitu; arratsalde entretenitu bat pasa Hipodromoan zaldi-lasterketetan edo, ezinbestekoa dena, hiriko gastronomia bikainaz gozatu edozein txokotan.".
"<br><br>Era berean, honaino negozio-arrazoiengatik hurbiltzen direnek alojamendu-, jatetxe- eta garraio-azpiegitura ezin hobeko hiria begitsu bat topatzen dute.".
"<br><br>Ez da ahaztu behar bere kokapen pribilegiatuagatik Donostia Euskadiko eta Frantziako interesa duten beste puntu batzuetarako irteera-puntua dela, adibidez, Iru�a, Bilbo edo Gasteiz; Getaria, Hondarribia, Tolosa eta Arantzazuko santutegia; San Joan edo hainbesteko xarma duen Iparraldeko Euskal Herria.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Donostiari buruzko informazioa:</b>".
"<br>Kultur eta Turismo Ekintzetxea: Erregina Erregentearen kalea, z/g, Boulevardretik gertu, Victoria Eugenia antzokiaren eraikinean (telefonoa 943.481166).".
"<br><br>Informazioa  ".
"<br><br>Gipuzkoa: <a href='http://www.sansebastianturismo.com/index.htm' target='_blank'><u>www.sansebastianturismo.com</u></a>".
"<br><br><center><img src='images/5.jpg'> &nbsp;&nbsp; <img src='images/1.jpg'></center> ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Gastronomia-Non jan:</b>".
"<br>Donostia-San Sebastianek ezaugarriren bat badu bikain jaten den hiriaren ongi merezitako fama eta tradizioa da. Baina horrek ez du esan nahi diru asko behar dugunik. Diru gutxigatik jaki gozoak dasta ditzakegu pintxo-taberna ezagunetan edo sagardotegietan.".
"<br><br>Edozein moduz, zuk nahi duzuna jatetxe on batera joatea bada, hiri honetako jatetxe ospetsuenen zerrenda bat eskaintzen dizugu.".
"<br><br><table width=90% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td>".
"<table width=100% align=center border=0 cellspacing=0><tr><td class=textom width=50%> ".
"� <b>Arzak</b> (Juan Mari Arzak)<br>Mirakruzeko gaina, 21 <br>943.278465 - 943.285593	".
"<br><br>� <b>Akelarre</b> (Pedro Subijana)<br>Aita Orkolaga Pasealekua, 56<br>943.212052".
"<br><br>� <b>Martin Berasategi</b> (Martin Berasategi)<br>Loidi, 4 - Lasarte	943.366471".
"</td><td class=textom width=50%>".
"� <b>Casa Nicolasa</b> (Jos� Juan Castillo)<br>Aldamar, 4<br>943.421762, 943.420755".
"<br><br>� <b>Urepel</b> (Tom�s Almandoz)<br>Salamanka Pasealekua, 3<br>943.42.40.40".
"<br><br><b>� Panier Fleuri</b> (M� Jes�s Fombellida) <br>Salamanka Pasealekua,1	943.42.42.05 ".
"</td></tr></table></td></tr></table>".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Sagardotegiak:</b> ".
"<br><br><table width=90% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom> ".
"<b>� ALBIZTUR</b>	Matia, 52 (Antiguo) Tel: 943 21 18 01 <br> Menu bereziak: 15-63� - 21-04� Kartako menua: 24� - 30� ".
"<br><br><b>� AMEZTI</b> Kristobal Balenziaga Pasealekua, 65 (Igeldo)<br>Tel: 943.21.73.23	 ".
"<br><br><b>� BARKAIZTEGI</b>	Barkaiztegi Bidea, 42 (Martutene)<br>Tel: 943 45 55 01<br>  Karta: 22.50� ".
"<br><br><b>� DONOSTIARRA</b>	Embeltran, 5 (Alde Zaharra)	Tel: 943 42 04 21 <br>Eguneko menua: 24.50�.	Kartako menua: 20� - 40�. ".
"<br><br><b>� GARBERA</b>	Garberako Zentro Komertziala  Tel: 943:39.43.58 ".
"<br><br><b>� IGELDO</b>	Orkolaga Pasealekua, 8 (Igueldo) Tel: 943.21.32.51 Kartako menua: 24�- 25� ".
"<br><br><b>� ITXAROPENA</b>	Embeltran 16 	Tel: 943.42.45.76<br> Sagardotegiko menua: 21� ".
"<br><br><b>� IZAGIRRE</b>	Jose Elosegi Alkatearen hiribidea	Tel: 943.36.14.70 ".
"<br><br><b>� KUKUA</b>	Avda. Alcalde Jose Elosegi, 21 (Gros)<br>Tel: 943 27 16 29	 Kartako menua: 27� ".
"<br><br><b>� URKIOLA</b>	Igara Bidea, 37	Tel: 943.21.01.68	<br> Karta: 21� - 25� ".
"<br><br><b>� LA CEPA</b>	San Bartolome, 30-32 (Zentroa) 	Tel: 943 46 03 33	Eguneko menua: 8� <br> Kartako menua: 19� ".
"<br><br><b>� ZINGI - ZANGA</b>	Florida Kalea, 54 (Hernani) 	Tel: 943 33 03 97 ".
"</td></tr></table>".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Festak eta jaialdiak </b> ".
"<br><br><b>� Urtarrilak 20:</b> San Sebastian eguna. Donostiarrentzako gertakaririk garrantzitsuena beren patroiarena da. Danborrada ospatzen da. Urtarrilaren 20ko 24 orduak irauten ditu. 0etatik 24ak arte.".
"<br><br><b>� Ihauteriak: </b> Otsaila".
"<br><br><b>� Ekainak 23:</b> San Joan gaueko suak.".
"<br><br><b>� Uztaila: </b> Zaldi-lasterketak Zubietako hipodromoan".
"<br><br><b>� Uztaila:</b> Bigarren hamabostaldia: Jazzaldia, Nazioarteko Jazz Jaialdia.".
"<br><br><b>� Abuztua:</b> Musika Hamabostaldia.".
"<br><br><b>� Aste Nagusia: </b> Abuztua, abuztuaren 15eko astea, igandetik igandera. Aste Nagusia gauero nazioarteko su artifizialen lehiaketarekin ospatzen da 23:00etan, kaleetan mota guztietako musikarekin, Donostia-Donostia Klasika Ziklista bezalako kirol-jarduerekin, zezen-korridekin eta jarduerez betetako programarekin.".
"<br><br><b>� Iraila, lehenengotik bigarren igandera: </b> Euskal Jaiak. Euskal kulturarekin erlazionaturiko jarduerekin beteriko programa: kantautoreak, taldeak, musika klasikoko kontzertuak, dantzak, herri-kirolak, ikuskizunak, etab. Lehenengo igandean nahiz bigarrenean ospatzen dira Estropada ezagunak Kontxako Badian.".
"<br><br><b>� Iraila, bigarren hamabostaldia: </b> Zinemaldia ospatzen da.".
"<br><br><b>� Abenduak 21: </b> Santo Tomas eguna ospatzen da, landako eragin nabaria duen azoka.".
"<br><br><center><img src='images/2.jpg'></center> ".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b> Zerbitzu-gida </b> ".
"<br><br>� <b>Erosketak egitea:</b> Tradizionalki modarekin erlazionaturiko merkatalgoa erdigunean dago eta bilatzen ari garena erraz aurki dezakegu bere denda espezializatuetariko batzuetan. Artisautza, oroigarriak edo antzekoak erosi nahi baduzu, saia zaitez Alde Zaharrean. Janaria erosteko, hiritik kanpo badaude hipermerkatu handiak (Garbera, Alcampo eta Pryca, Garbera da gertuena dagoena), baina autoa behar da.".
"<br><br>� <b>Hiria miatu</b>".
"<br><br>� <b>Txu-txu trena:</b> Udaletxetik irteten da eta bertara iristen da eta Kontxatik, Antiguotik eta Donostiako erdigunetik pasatzen da. Tel. 943.422973/669.114143. Fax 943.481172".
"<br><br>� <b>Autobus turistikoa: </b> Tel. 630.708.735.".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Informazio osagarria</b>".
"<br><br>� <b>Talasoterapia</b> La Perla termak (Kontxako pasealekua, z/g, 943.458856). ".
"<br><br>� <b>Taxiak:</b> ".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vallina (Tel: 943.404040) ".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Easo (Tel: 943.464646).".
"<br><br>� <b>Bankuak eta Aurrezki Kutxak: </b>Bankuen eta Kutxen publikoarentzako ordutegia 8:30etatik 14:00etara da. Larunbatetan 9:00etatik 13:00ak arte (udan ezik). Zenbait sukurtsalek arratsaldez ere irekitzen dute 16:00etatik 17:30etara.".
"<br><br>� <b>Telefono interesgarriak:</b>".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Larrialdiak (Sos Deiak): 112".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DYA (Errepideko laguntza): 943.464622".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Farmaziak: 943.429117".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Easo Irrati Taxiak: 943.467666".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Renfe - Informazioa: 943.283599".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eusko Tren:  943.450131".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hondarribiko Aireportua:  943.668500".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turismo-bulegoa:  943.423101";break;
case "InfoGeneral_Kutxaespacio":
$strTexto="<b>Miramon. Zientziaren KutxaGunea</b>".
"<br>Zientziaren KutxaGuneak, zientzia-informazioko eta hedakuntzako zentro gisa, ospakizun-ekintzen aldi berean erakusketa bat antolatuko du Albert Einsteinen <i>Annus Mirabilis</i>aren mendeurrena ospatzeko.".
"<br><br><center><img src='images/kutxaespacio.jpg'><br>".
"<br><table border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom>".
"<center><b>Miramon. Zientziaren KutxaGunea</b>".
"<br><br>Mikeletegi, 43. 20009 Donostia - San Sebasti�n. Gipuzkoa".
"<br><a href='http://www.miramon.org' target='_blank'><u>www.miramon.org</u></a>".
"<br>Informazioa: 943-012478".
"<br>Erreserbak: 943-012917".
"</center></td></tr></table></center>";break;
case "InfoGeneral_ComoLlegar":
$strTexto="<b>Donostia bisitatzen</b>".
"<br><br>Donostia-San Sebastian Bizkaiko Golkoko kostaldeko hiri bat da, Euskadin, Gipuzkoako lurralde historikoan kokatzen dena. Iparraldeko mugatik 20 km-ra dago.".
"<br><br>(<a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>Ikusi mapa</u></a>) ".
"<br><br>Donostiara honako garraiobideetan irits zaitezke ".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#tren'><u>Trenez</u></a> ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#avion'><u>Hegazkinez</u></a> ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#carretera'><u>Errepidez</u></a> ".
"<br><br><br><a name='tren'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Trenez: </b>".
"<br><br>Madriletik,<a href='http://www.renfe.es' target='_blank'><u>RENFE</u></a>rekin Donostiara irits daiteke edo bai eta Iru�a edo Frantziako mugara ere. Badaude Bartzelonara iristen diren trenak ere. Madriletik edo Bartzelonatik gaueko tren bat hartzea gomendatzen da (6ak inguruan Madriletik, 7tan Bartzelonatik).".
"<br><br>Paristik <a href='http://www.sncf.fr' target='_blank'><u>TGV</u></a>(Frantziako SNCF konpainiako Abiadura Handiko Trena) har daiteke Hendaia/Hendayeraino, eta bere azken 20 kilometroetan Eusko Tren konpainiako Topo deituriko trenarekin lotu, Hendaia Donostiarekin lotzen baitu (Hendaian bi geltokiak bata bestearen aurrean daude). Bilbotik edo Iru�atik komenigarriagoa da autobusez bidaiatzea.".
"<br><br> <img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Information:</b> ".
"<br><br><table align=center width=80% border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td><table><tr><td width='45%' class=textom valign=top> ".
"<b>RENFE</b><br>Iparraldeko geltokia - Frantzia Pasealekua <br>Lineak: Ibilbide luzea ".
"<br>Aldirikoak: Irun - Brinkola <br>Tel.: 902 24 02 02<br><a href='http://www.renfe.es' target='_blank'><u>www.renfe.es</u></a></td> ".
"<td width='55%' class=textom><b>EUSKOTREN</b><br>Amarako geltokia - Easo Plaza, a/g ".
"<br>Lineak: Hendaye (Frantzia) - <br>Donostia/San Sebasti�n - Lasarte (Topoa) )<br>Donostia - Bilbo ".
"<br>Tf.: 902 54 32 10<br><a href='http://www.euskotren.es' target='_blank'><u>www.euskotren.es</u></a></td> ".
"</tr></table></td></tr></table><br><br><br><br> ".
"<a name='avion'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Hegazkinez: </b> ".
"<br><br>Madriletik Donostiara egunero bi hegaldi daude. Bartzelonatik egunero bat. Aireportua Hondarribia/Fuenterrabian dago. Aireportutik autobus edo taxi bat har daiteke Donostiara iristeko.".
"<br><br><img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Informazioa: </b> ".
"<br><br><table width=80% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td class=textom><b>Donostia-San Sebastiango Aireportua </b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Kokapena: Donostia-San Sebastiandik 20 km-ra eta Irundik 5 km-ra.<br>Gabarrari kalea 5 eta 22. 20280 HONDARRIBIA.".
"<br>Telefonogunea: 943 66 85 00 ".
"<br>Iberia Informazioa:  943.66.85.21 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"<br><br><b>Bilboko aireportua</b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Kokapena: Bilbotik 10 km-ra <br>Ctra. As�a-Erletxes, s/n - 48.150 LOIU. ".
"<br>Informazioa: 94 486 96 63/64 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"<br><br><b>Biarritzeko aireportua</b><br> ".
"<br>Kokapena:  Route Nationale 10. 64600 Anglet (Francia).<br>. Donostiatik 40 km-ra autobidez 45'.".
"<br>Informazioa: Tel. (+33)5 59 43 83 83".
"<br>Aireko konpainiak:".
"<br>AIR FRANCE. Tel: (+33)820.820.820".
"<br>Hegaldiei buruzko informazioa Tel: (+33)836.68.10.48".
"<br><a href='http://www.airfrance.com' target='_blank'><u>www.airfrance.com</u></a> ".
"<br><br>REGIONAL, European Air Line.".
"<br>Tel: (+33)820.820.820".
"<br><br>RYANAIR".
"<br>Tel: (+33)559.438.393".
"<br><a href='http://www.ryanair.com' target='_blank'><u>www.ryanair.com</u></a> ".
"</td></tr></table><br><br> ".
"<br><a name='carretera'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Errepidez:</b> ".
"<br><br><b>> Autoz:</b> ".
"<br><br> ".
"<b>Madriletik</b>, N-II errepidea hartu Zaragoza bitarte, ondoren N 121etik Iru�arantz joan. Nahiz eta errepide ona izan beste aukera ordainpeko autobidea hartzea da. 6 ordu inguru. Bilbotik A-8 autobidea hartu Donostia-San Sebastineraino iritsi arte, ordubetean iristen da; edo errepide nazionala hartu (2 edo 3 ordu, trafikoaren arabera, normalean astuna izan ohi da). Presarik ez izanez gero, komeniko litzateke errepide nazionaletik joatea Euskadiko kostako herri desberdinak bisitatu ahal izateko (Gernika, Lekeitio, Ondarroa, Mutriku, Getaria, Zumaia, Zarautz, Orio, etab.).".
"<br><br><b>Bartzelonatik</b> take the N-II to Zaragoza, then take the N-121 to Pamplona. The road is good, but there is an alternative route by toll motorway. Approx. 6 hours. From Bilbao take the A-8 motorway to San Sebastian. The journey takes about one hour; alternatively take the national road (2 or 3 hours depending on the traffic, which is generally heavy). If you're not in a hurry, the national road is more scenic and you can stop in the various coastal towns on the way, such as Guernica, Lekeitio, Ondarroa, Mutriku, Getaria, Zumaia, Zarautz, Orio, etc. ".
"<br><br><b>Iru�atik</b> A-15 autobidea eta N-I errepidea hartu Donostiara. 45 minutu-1 ordu inguru".
"<br><br><b>Paristik</b> A-10 ordainpeko autobidea hartu Frantziaren eta Espainiaren arteko mugara iritsi bitarte (Orleans, Tours, Poitiers, Bordeaux) eta A-8 ordainpeko autobidea mugatik Donostiara. Doako aukerak izango lirateke Frantzian N-10 errepidea eta, behin muga pasatuta, N-I errepidea".
"<br><br>N-1: Madril-Irun".
"<br><br><table align=center width=80% border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td><table><tr><td width='65%' class=textom valign=top> ".
"<b>Autobideak: </b><br>A-8 autobidea: Bilbo-Irun <br>A-63 autobidea: Paris - Irun <br>A -15 autobia: Iru�a-Donostia <br>Autobia: Bartzelona - Zaragoza.".
"</td><td width='35%' class=textom valign=top> ".
"<img src='images/ico_info.jpg'>&nbsp;&nbsp;Informazioa:".
"<br><a href='http://www.dgt.es' target='_blank'><u>www.dgt.es</u></a> ".
"<br><a href='http://www.trafico.euskadi.net' target='_blank'><u>www.trafico.euskadi.net</u></a> ".
"</td></tr></table></td></tr></table> ";break;
case "Registro_Como":
$strTexto = "<b>Nola izena eman:</b>".
"<br><br><font color='#800000'>Izen-emateko epea amaitu da. Ekitaldira etorriko zarela ziurtatu nahi baduzu, mesedez jarri gurekin harremanetan honako posta elektronikoko helbidean: <a href='mailto:tisa-congresos@infonegocio.com'><b><font color='#800000'>tisa-congresos@infonegocio.com</font></b></a></font>".
"<br><br>Kongresuan izen-ematea doakoa da.".
"<br><br><b>Ondoren adierazten den moduan formalizatu behar da:</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>Kongresuan izena emateko ezinbestekoa da aurrez <u>izen-emateko</u> orria bete eta Idazkaritza Teknikora bidaltzea maiatzak 31 baino lehen.</b><br><br>Kongresura zein egunetan joateko asmoa duzun adierazi beharko zenuke, nahi izanez gero egun soltek aukeratuz.<br><br>Aurrez izen-emateko epea amaitu ondoren, Idazkaritza Teknikoak jakinaraziko dizu zure izen-ematea onartu dela eta erregistro-zenbaki bat esleituko dizu ekainaren 10a baino lehen.<br><br>Izapide hori beharrezkoa da Kongresuan izen-emateko, edukiera mugatua baita eta izen emateko orden zorrotzaren arabera esleituko dira. Edozein aldaketa edo ezeztapen idatziz egin eta Idazkaritza Teknikora bidali beharko da.".
"<br><br><b>OHARRA:</b>Kongresuaren egoitzan ez dira izen-emateak onartuko, ez Kongresua baino lehen, ez eta hasi ondoren ere.".
"<br><br><b>TISA Congresos, S.L.</b>".
"<br><br>Erref. Einstein Kongresua".
"<br>Askatasunaren Hiribidea, 17-19, 5. sol.".
"<br>E-20004 Donostia-San Sebasti�n".
"<br>Tel. 34 943 42 54 20".
"<br>Fax:  34 943 42 21 24".
"<br>Helbide-elektronikoa: <a href='mailto:tisa-congresos@infonegocio.com' target='_blank'><u>tisa-congresos@infonegocio.com</u></a>";break;
case "Registro_Becas":
$strTexto = "<b>Bekak</b>".
"<br><br><font color='#800000'>Bekak eskatzeko epea martxoaren 31n amaitu da. Aparteko arrazoiengatik ekitaldira etortzeko zailtasunak badauzkazu, zuzenean Koordinatzailearekin (Unai Ugalde <a href='mailto:qppugmau@sq.ehu.es'><b><font color='#800000'>qppugmau@sq.ehu.es</font></b></a>) harremanetan jartzea gomendatzen dizugu.</font>".
"<br><br>Bekak eskatzen dituzten guztien artean esleituko ditu Batzorde antolatzaileak izendaturiko batzorde batek.<br><br>Bekak aurrez <u>izen-emateko orrian</u> norberak adierazi diren egunetarako emango dira. <br><br>Gaua igarotzeko 200 beka emango dira (Euskal Autonomia Erkidegotik eta Nafarroatik kanpo bizi diren pertsonentzat, kasu justifikatuetan ezik), egun bakoitzeko 100 eurokoa gehienez ere, eta joan-etorrietarako 400 beka (Donostiatik eta inguruetatik kanpo bizi diren pertsonentzat), egun bakoitzeko 25 euroko zenbatekoarekin. <br><br>Beka bat lortzeko aukera izateko ezinbestekoa da izena aurretik emateko inprimakiarekin batera beka zergatik merezi duzula uste duzunaren azalpen labur bat bidaltzea (gehienez 200 hitz), egoki deritzozun merituak aipa ditzakezu (gehienez 200 hitz) ".
"<br><br>Mota bateko beka bakarrik eskatu ahal izango da.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>Beka eskatzeko gehieneko data martxoaren 31 izango da.<br><br>Bekak esleitzeko gehieneko data maiatzaren 31 izango da.</b>".
"<br><br>Onarturiko izen-emateek bakarrik izango dute beka lortzeko aukera.<br>Behin beka-eskaera duten aurreko izen emateak azterturik, Kongresuko Idazkaritza Teknikoa jakinaraziko dizu beka esleitu zaizun ala ez.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>Beka-motak:".
"<br><br>Antolakuntzak bi beka-mota ematen ditu: Gaua igarotzekoa eta Joan-etorrikoa.".
"<br><br>Gaua igarotzeko beka:</b>".
"<br><br>Euskal Autonomia Erkidegotik eta Nafarroatik kanpo bizi diren eta gaua Donostian igarotzen duen pertsonentzat, kasu justifikatuetan ezik. Alojamenduaren erreserba Kongresuaren agentzia ofizialean egin beharko da.".
"<br><br>Gaua igarotzeko bekak irailaren 5etik 8rako gauetarako emango dira, biak barne.".
"<br><br>Hoteleko erreserba egiten duzun egunek aurrez izen-emateko orrian etorriko zarela adierazi duzun egunekin bat etorri beharko dute.<br><br>Ordainketa beka emango zaizun ala ez jakinarazi zaizunean egin beharko duzu. <br><br>Zenbatekoa: gehieneko zenbatekoa 100 eruo/ gaua da. Ezinbestekoa da ostatu hartzeko orria betetzea. <br><br>Antolakuntzak gehienez ere 100 euro/gaueko zenbatekoa hartuko du bere gain eta zuzenean Kongresuaren agentzia ofizialari ordainduko zaio. <br><br>Aukeraturiko alojamenduak zenbateko hori gaindituko balu, zuk ordaindu beharko duzu diferentzia zuzenean Agentzian.".
"<br><br><b>Joan-etorriko beka:</b>".
"<br><br>Donostiatik eta inguruetatik kanpo bizi diren pertsonentzat bakarrik.<br>Antolakuntzak 25 euro/eguneko <b>zenbatekoa</b> hartuko du bere gain eta Kongresua amaitzerakoan beka duen eta bertaratu dela Idazkaritza Teknikoan egiaztatzen duen bekadun bakoitzari ordainduko zaio.".
"<br><br><b>Zenbatekoa:</b> Eguneko zenbatekoa: 25 euro/egun.";break;
case "Registro_Alojamiento":
$strTexto = "<b>Ostatua</b>".
"<br><br>Ostatua erreserbatzeko ostatu <a href='index.php?pg=14' target='_parent'><u>hartzeko orria</u></a> bete beharko duzu.<br><br>Antolakuntzak prezio bereziak adostu ditu Kongresurako Bidaia-Agentzia Ofizialaren bitartez, maila desberdinetako hoteletan, ostatu hartzeko orrian adierazten den moduan. <br><br>Prezio berezi horiek aprobetxatu ahal izateko, eta ostatu hartzeko beka bat ematen bazaizu, erreserba Kongresuko Bidaia-Agentzia Ofizialaren bitartez bakarrik egin ahal izango duzu. <br><br><b><img src='images/ico_bolita_on2.jpg'>Ekainak 30a da hoteleko erreserba egiteko gehieneko epea, egun horretatik aurrera Antolakuntza ez da gelarik egongo denaren edo horiek izango duten prezioaren arduradun izango. </b><br><br>Ostatu hartzeko erreserba egin ondoren, Kongresuko Bidaia-Agentzia Ofiziala den Carlson Wagonlit Travelek erreserba idatziz (posta elektronikoz) konfirmatuko dizu eta ordaintzeko moduak adieraziko dizkizu. <br>Ostatua uztailaren 1etik aurrera kobratuko da. <br><br>Gaua igarotzeko beka bat eman badizute, Kongresuko Bidaia-Agentzia Ofiziala den Carlson Wagonlit Travelek zure ostatua konfirmatuko dizu eta aukeraturiko hotelak 100 euro/gau gaindituko balituzke ordaindu beharreko diferentzia jakinaraziko dizu. <br><br><b>Deuseztapen-gastuak: <br><br>Uztailak 31 bitarte:</b> ez da duseztapen-gasturik egongo. <br><br><b>Abuztuaren 1etik 31ra:</b> aukeraturiko Hoteleko gau bateko zenbatekoa. <br><br><b>Irailaren 1etik aurrera:</b> ordainduriko zenbatekoaren %100. <br><br>Deuseztapen guztiak idatziz jakinarazi beharko zaizkio Kongresuko Bidaia-Agentzia Ofizialari posta elektronikoz. ".
"<br><br><b>Ostatuari buruzko informazio gehiagorako:</b>".
"<br><br>Carlson Wagonlit Travel".
"<br>Ms. Ma�en Echarri".
"<br>Faxa: (34) 943 428041".
"<br>Helbide elektronikoa: mecharri@carlsonwagonlit.es".
"<br><br>Hitzartutako Hotelen zerrenda <a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>mapa ikusi</u></a>".
"<br><br>Residencia Olarain ".
"<br>Hotel Londres y de Inglaterra **** ".
"<br>Hotel NH Ar�nzazu ****".
"<br>Hotel Amara Plaza ****".
"<br>Hotel Tryp Orly ****";break;
case "AlbertEinstein_VidaYObra":
$strTexto = "<b>Bizitza eta Obra ".
"<br>Albert Einstein: 1905/2005</b> ".
"<br><br>Zientzia unibertsalarentzat miresgarria izan zen urte baten mendeurrenaren atarian gaude: 1905. Oraindik Max Planck-ek (1900) quanta iraultzaileen inguruan formulaturiko hipotesien oihartzuna nabaria zen. 1905. urtea, hirugarren mailako peritu batek, Suitzatik, Bernako Patenteen bulegotik, Alemaniako aldizkari ospetsuenera 'Annalen der Physik' artikuluak bidaltzen zituen bertan argitaratzeko. Albert Einstein zen, 1879-an jaioa Alemaniako Ulm herrian. Bost lan izan ziren, John Stachel fisikari eta historialariak esan bezala, fisikaren aurpegia aldatu zutenak. Hauetako bakar bat nahikoa izango zen bere garaiko fisikari ospetsu bezala kontsakratzeko. Denak kontuan hartuta ordea, gailur unibertsalean kokatzen dute, Arkimedes eta Newtonekin. Albert F�sing, bere biografoaren arabera, 'never before and never since has a single person enriched science by so much in such short time as Einstein did in his <i>Annus Mirabilis</i>'. 'Einsteinek <i>Annus Mirabilis</i> -ean egin zuena, zientzia hainbeste eta hain denbora gutxian aberastea, ez zuen sekula pertsona bakar batek inoiz egin ordura arte eta ezta harrezkero ere'.".
"<br><br>Mundu osoko zientzialari eta pentsatzaileek, 2005-ean mendeurren hau ospatuko dute, Munduko Fisikaren urtea deklaratua izan baita.  Donostia Physics Center fundazioak oroitzapen hauekin bat egingo du egitarau bikain eta oparo batekin: konferentziak, mintegiak eta esposizioak. Hauen helburua, jadanik ezaguna egiten zaigun ile harroez eta begi tristez jantziriko, biolina hainbeste maite zuen pertsonaia mitikoaren lanera eta oroitzapenera hurbiltzea izango da, nolabait, zientziak eta gizateriak, pertsonaia honekin duen betiereko zorra zenbatekoa den ezagutzeko.".
"<br><br>TIME aldizkariak 2001-ean Albert Einstein izendatu zuen XX. mendeko pertsonaia, zientzialari eta pentsalaria, Francis Crick, James Watson, Alexander Fleming, Sigmund Freud, Kurt G�del, Edwin Hubble, Willian Shockley, Alan Turing eta Ludwig Wittgenstein bezalako pertsonaien artetik.".
"<br><br><i>'1905 marks the year�</i>".
"<br><br><table><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Time.jpg' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein01.gif' height=200></td> ".
"</tr><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein02.gif' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein03.gif' height=200></td> ".
"</tr><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein04.gif' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein05.gif' height=200></td> ".
"</tr></table><br><br>Dualtasuna iraunkorra izan zen gure pertsonaiarentzat. Unibertsoaren kontenplazio bareak ez zuen zer ikusirik bere familia bizitza ezegonkorrarekin. Sionista sutsua izan arren, beti kezkatu zuten, Israelen arabiarrek zituzten eskubideek. Bakezalea izan arren, dudarik egin gabe babestu zuen Hitler-en kontrako ekintza militarra. Naziek bonba atomikoa egiteko zuten gaitasunaz hitz egin zion Roosevelti, eta hauei aurre hartzeko estutu zuen, baina gerra amaitu zenean, arma nuklearren kontrako borrokalari sutsua izan zen. Kontraesan guzti hauen erdian, ordea, Einstein guztiz morala izan zen.<br> ";break;
case "AlbertEinstein_5Trabajos":
$strTexto = "<b>Einsteinen bost lanak</b> ".
"<br><br>Lan guzti hauetan lehenengoak, '�ber einen die Erzeugung und Verwandlung des Lichts betreffenden heuristischen Gesichtspunkt' zuen izenburutzat. ('Ikuspegi heuristiko batetik, argiaren ekoizpen eta transformazioari buruz)1. Bertan, Einsteinek, efektu fotoelektrikoaren azalpen bat eman zuen, argiaren izaera korpuskularra erabiliaz. Fisika kuantikoaren genesian oinarrikoa den lan bat da honako hau, oso iraultzailea egilearen hitzetan. Eremu jarraituetan oinarrituriko argia igorri eta transformatzeko Maxwell-en teoria elektromagnetikoa zalantzan jarri zuen eta argi energia modu diskretu batean erabili zuen, argi kuantu edo korpuskulu zatiezinak proposatuaz. 'For his services to Theorical Physics, and especially for his discovery of law of the photoelectric effect', 1921-ean Nobel saria eman zioten.".
"<br><br>Bigarrena '�ber die von der molekularkinetischen Theori der W�rme geforderte Bewegung von in ruhenden Fl�ssigkeiten suspendierten Teilchen' izan zen. ('Beroaren teoria zinetiko-molekularrak exijituta, pausagunean dauden likidoetan esekita dauden partikula txikiei buruz')2. Lan honetan, Einsteinek, esekita dauden partikulen mugimendu irregularrek sortzen dituzten fluktuazio estatistikoek, termodinamika klasikoaren bigarren legea hausten dutela ohartu zen eta horrela teoria hauen mugak agerian utzi zituen. Urte horretan argitaratu zuen bosgarren lanarekin batera 'Zur Theorie der Brownschen Bewegung', ('Mugimendu browniarraren teoriari buruz')3, Einsteinek mugimendu browniarraren oinarriak ezarri zituen (Robert Brown-ek 1927-an uretan esekitako polen aleak aztertzen behatutako fenomenoa). Fluidoen molekulek jasaten duten, esekita dauden partikulen bonbardaketaren ondorioa azaltzeko, esperimentaki, bataz besteko desplazamendua kontuan hartzeko eta abiadura alde batetara uzteko proposamen egin zuen. Lan hauek Jean Perrin frantsesari, Avogadroren zenbakiaren kalkulu berriak egiteko bidea ireki zioten, baita esperimentalki atomoen neurriak kalkulatzeko aukera ere. Gainera, atomoa eta molekuletan sinesten ez zutenen ideiak betirako uxatu ziren.".
"<br><br>Bostgarren lana 'Zur Eletrodynamik Bewegter K�rper'('Mugimenduan dauden gorputzen elektrodinamikari buruz') izan zen, laugarren lanarekin batera 'Ist der Tr�gheit eines K�rpers von seinem Energieinhalt abh�ngig?' ('Gorputz baten inertziak, ba al du bere energiarekiko menpekotasunik?') egun erlatibitatearen teoria berezia bezala ezagutzen duguna osatzen dute. Erlatibitate bereziaren teoria hau bi printzipiotan oinarritzen da: erlatibitatearen printzipioa (fisikak berdina izan behar du erreferentzia sistema inertzial guztietan) eta argiaren abiaduraren balio konstantearen printzipioa (argiaren abiadura isotropoa da eta magnitude berdina du erreferentzia sistema inertzial guztietan). Teoria honekin, Lorentz-en erlatibitatearen printzipioa eta Maxwell-en elektrodinamikaren artean zegoen itxurazko gatazka konpondu zuen, non erreferentzia sistema batzuk abantailak zituzten. Guzti honek, aldiberekotasuna eta argiaren eterra baztertzea exijitu zuen. A.E. gazteak, argi eta garbi, logikaren indar gogorrarekin,  bertan behera utzi zituen orduan ezagunak ziren fisikaren oinarriak, espazio-denbora berrietan oinarrituriko eskemak eraikitzeko, non espazioak eta denborak bere balio absolutuak galtzen dituzten. Halabeharrez, erlatibitatearen printzipioa eta argiaren abiaduraren balio konstantearen printzipioen ondorioz, bere laugarren lanean masa eta energiaren arteko baliokidetasunera iritsi zen. Formula famatu honetan laburtzen da E = m.c2, nahiz eta berak orduan 'gorputzaren masaren aldaketa  L/v2' zela esan zuen, non L gorputzak igorritako erradiazio elektromagnetiko den eta v argiaren abiadura diren. Irrati gelak erabiltzea proposatzen zuen teoria honen baliotasuna frogatzeko. Garai hartan, egileak ez zuen formula xume honek bere erraietan gordetzen zuen botere neurrigabea ezagutzen, urte batzuk beranduago, kontrolik gabeko erreakzio nuklearren bidez kanporatua izango zena alegia.".
"<br><br><center><img src='images/trabajo1.gif' height=700><br>Lehenengo lana. <br>Efektu fotoelektrikoa.".
"<br><br><center><img src='images/trabajo2.gif' height=700><br>Bigarren lana (bosgarrenaren gaia antzekoa da). <br>Mugimendu browniarra.".
"<br><br><center><img src='images/trabajo3.gif' height=700><br>Hirugarren lana. <br>Erlatibitate berezia.".
"<br><br><center><img src='images/trabajo5.gif' height=700><br>Bostgarren lana. <br>Masa eta energia.";break;
case "AlbertEinstein_Culminacion":
$strTexto = "<b>Erlatibitatearen Gailurra</b>".
"<br><br>Einsteinek, Planck-ek bezala, lege naturalen printzipio nagusiak maitatu zituen. Aipatutako bi printzipioetaz gain, urte batzuk geroago, Einsteinek baliokidetasun printzipioa (Eremu grabitatorio bat eta erreferentzia sistema baten azelerazio bat bereiztu ezinak direla) enuntziatu zuen, hau oinarritzat harturik erlatibitate orokorraren teoria eraiki zuen. Bere originaltasuna eta edertasuna kontuan harturik garai guztietako pentsamendu zientifikoaren maila goreneko lana da. 1907-an hasi eta funtsean 1915-ean bukatu zuen. Grabitateari leku bat egin nahian, espazio-denbora absolutuari uko egiteko beharrarekin, berau geometrizatu zuen eta Newtonen grabitazioaren teoriari lekua irabazi zion. Urte asko beranduago, bere nota autobiografikoetan, Newtoni barkamena eskatu zion, bera bezalako jenio bati bakarrik zegokion tamaina horretako atrebentziagatik.".
"<br><br>Grekoek eta Newtonek bezala, Einsteinek zeruen aldaketa ezean sinetsi zuen. Hori dela eta eremu grabitatorioaren ekuazioetan berez ateratzen ez zitzaion gai bat (kosmologikoa) sartzera behartua sentitu zen. Gai honek, erakarpen grabitatorioaren kontra egiten duen aldarapena simulatzen du eta kolapsoa ekidin ustezko unibertso estatiko batean. Unibertsoaren espantsioa deskubritu zenean (Hubble, 1929), Einstein gai hau gehitzeaz damutu zen, bere 'bizitzako oker handiena' bezala onartuaz. Ironikoki, badirudi azken aldian berriro ere bogan jartzen ari dela aipatu konstante kosmologikoa, unibertsoaren espantsioan behatzen den azelerazioaren esplikazio sinple gisa.".
"<br><br>Alperrik pasa zituen Einsteinek bere azken urteak grabitatea eta elektromagnetismoaren bateratzearen bila. Beste indarrak (ahulak eta bortitzak) ez ziren ondo ezagutzen. Gaur ezagunak diren lau elkarrekintzek, erabateko bateratzearen kontra borrokan jarraitzen dute, baldin eta Einsteinen eskema hautsi eta hamar edo hamaika dimentsioko eszenatoki hipotetiko batetara pasatzen ez bagara, super-soken teoriekin edo M teoriekin. Zein izango da milurteko honetan Einstein-i barkamena eskatzeaz arduratuko den jenioa? ";break;
case "AlbertEinstein_ImpactoObra":
$strTexto = "<b>Bere Lanaren Inpaktua</b>".
"<br><br>Einsteinen lanaren inpaktua izugarria izan da eta izango da. Txikienetik hasi (oinarrizko partikulen fisikaren teoria estandarra, eremu kuantiko erlatibisten teoriaren markoan) eta handienera (unibertsoaren teoria eskala handian, non erlatibitate orokorrak markatzen dion kosmologiari nolakoa izango den bere geometria globala eta bere eboluzio dinamikoa) doa, bestalde sinpleenetik (elektroi baten arrazoi giromagnetikoa) konplexuenera (super nova baten kolapsoa). Energia baxuenak (Bose-Einstein kondentsatuak nanokelvin gutxi batzuetako tenperaturan) ere ez ditu ahazten eta noski ezta altuenak (quark-gluoi plasma) ere. Aplikazio ohikoenekin (Global Positioning system) ere aritu zen, baina baita teknika sofistikatuenekin (optika atomiko ez-lineala) ere, etab.".
"<br><br>A.E.-en inpaktua, ez da fisikara eta zientziara bakarrik mugatzen. Bere ideiek, aztarnak utzi dituzte kultura modernoan, plastikatik hasi eta poesiaraino. Era berean ezagutzaren teoria eta filosofia ere eragin ditu. Einsteinek, uko egin zien kontzeptu fisikoen sorrera enpirikoei, giza espirituaren sormen libretzat zituelako. Dena dela, pentsamendu logiko hutsak, ez digu kanpoko munduaren ezagutza ekartzen, hori esperientziak bakarrik ematen digu. Hala ere, kontzeptuek, zentzumenaren bitartez jasotzen ditugun esperientziak ordenatzen laguntzen digute, eta orain arte, natura beti agertu da sinplezia eta edertasun matematikoaren alde. Leibniz eta Planck lagun harturik, beti bilatu eta sinetsi zuen aurrez ezarritako armonian. Filosofiari buruz, esan beharra dago, erlatibitatearen teoriak, filosofo guztiek, unibertsoarekiko zituzten ideiak birplanteatzera bultzatu zituela. Denbora, materia eta beranduago, esperimentuek setati kontra egiten dioten, Einsteinek errealismo lokalez bete zuen fisika kuantikoaren inguruan jarrera bat hartzera bultzatuak izan ziren. (nahiz eta ez zuten egin, hau baztertzeko gogorik ez zutenak konbentzitzeko adina indar)".
"<br><br><b>Zientzia eta Gizartea</b> ".
"<br><br>Einstein-en <i>Annus Mirabilis</i>-aren oroitzapenak, zientziak duen garrantziaz pentsa arazi behar digu. Ez bakarrik ezagutzaren motor bezala, baita garapen teknologikoaren eta sozio-ekonomikoaren katalizatzaile bezala. Beraien biztanleen bizi kalitatea hobetu nahi duten herriek, ezin diote uko egin, bertan egingo den jarduera zientifiko egoki bati.".
"<br><br>Einsteinen irudia, paregabeko adibide bat da, generazio berriek jarduera zientifiko bat zer den jakin dezaten. Einstein ez zen ohiko pertsonai bat izan, bere sormena eta intuizioa izan baitzituen gidari, unibertsoa beste modu batera ulertzera bultzatuko zuten ametsetan.".
"<br><br>Bere ideiak, pasioa, ardura eta esfortzuarekin modu bikainean defendatu zituen patenteetan lan egiten zuen funtzionario ez ezagun batek izan zuen argiz eta sormenez beteriko urte baten mendeurrena ospatzera goaz. Einsteinek bide berriak ireki zituen fisikaren munduan eta modu horretan bere garaiko mundua aldatu zuen.".
"<br><br>Bere oroitzapenari omenaldirik onena, gizartea berriro ere, zientziaren abentura kolektiboan barneratzea izango litzateke.";break;
case "AlbertEinstein_Significado":
$strTexto = "<b>Gertaeraren Garrantzia Euskal Gizartearentzat </b>".
"<br><br>Euskadik, demokraziaren aroa hasi zenetik, aurrekaririk gabeko aurrerapen bat izan du zientzia eta teknologiaren arloan. Guztiok ongi ezagutzen dugun aurrerapen hau, hein handi batean ikerkuntzan egin den gastuaren ondorio zuzena da. Gastu hau duela 24 urte baina 24 aldiz handiagoa da.".
"<br><br>Jarduera zientifiko eta teknologikoen aurrerapen honek, zenbait alorretan, Europako gure kideen mailatik hurbil jarri gaitu. Dena dela, lan asko dago egiteke, besteak beste, gure sistema zientifikoaren internazionalizazioa, bikaintasun zientifikoa duten zentroen ezarpena eta batez ere, gizarteak jarduera zientifikoa, garapena eta ongizateari lotuta dagoela onartzea. Unibertsitateak eta bereziki EHU/UPV-k bere gain hartu behar du lan hau, gizartearen berritzea bere lan duen instituzio bezala. Gizarte baten gainbehera, ikasteari eta ezagutza sortzeari uzten dion momentuan hasten da.".
"<br><br>Einsteinen <i>Annus Mirabilis</i>-aren oroitzapenerako diseinatu diren ekitaldiek, goi mailako ikerkuntza eta gure gizartearen artean harremanak sortzeko helburu garbia dute. Gonbidatuak izan diren ikerlariak, mundu mailan elitean dauden fisikariak dira eta gainera, beraien herrialdeetan fisika bultzatzen duten talde pribilegiatu baten partaide dira. Nahikoa da, zenbait Nobel sari eta atzerriko lehen mailako zenbait irakasle programan daudela esatea, estatuko ikerlari askoren partehartzea ere izango delarik. Hauen aurkezpen publikoek, deklarazio, elkarrizketa eta kontseiluek, argi eta garbi utziko dute, momentu honetan, zientziaren inguruko grina berriro ere bogan jartzearen garrantzia.".
"<br><br>Programatuta dauden ekitaldietan, osoko konferentziek tokia izango dute, baina baita Einsteinen irudia gazte eta haurrei aurkeztuko dien erakusketa batek ere. ".
"<br><br>Ekintza honek gizartean sortuko dituen ondorioez gain, bertan parte hartuko duten guztien artean sortuko diren harremanek, geure herriak bizi duen errealitate zientifikoaren mirak zabalduko dizkigu eta baita zientziaren nazioarteko promozioan gure parte hartzeko borondatea ere.".
"<br><br>Azkenik, kontaktu guzti hauek, baliagarriak izango dira zientziaren inguruan diseinatzen ari diren plan berrien inguruan iritzi baliotsuak jasotzeko eta baita bikaintasun zentroak sortzeko babesak lortzeko ere.".
"<br><br><br><b>Ekitaldiaren Garrantzia Donostiarentzat</b>".
"<br><br>Ekitaldi guztiak Donostian izango dira. Honek esanahi garbi bat du, Gipuzkoako hiriburua izango da egun askotan zehar, komunikabide ugariren helburu. Honetaz gain, Euskal Autonomi Erkidegotik 300 pertsona hurbilduko dira ekitaldira eta 100-150 bitarte beste erkidego batzuetatik.".
"<br><br>Hizlari guztiek, aparteko tratua jasoko dute gure hiriburuan, hori dela eta beraien jatorriko herrietan  egingo duten zeharkako publizitate guztiaren emaitzak kontuan hartu beharrekoak dira.".
"<br><br>Era berean, web orriaren bidez ere lortuko da publizitatea egitea, honek ere hirian burutuko diren ekintzen mesedean difusio lan garrantzitsua egingo baitu.".
"<br><br>Guzti honek, gure herria ezagutza zientifikoaren alde kokatzen dela aldarrikatzen duen neurrian, mezu honen igorlea, Donostia izango da, zientziaren hiria izateko bidean, pixkanaka lekua irabazten joango delarik.".
"<br><br>Donostiako komunitate unibertsitarioak, paregabeko aukera izango du ekitaldian parte hartzeko. Kontuan hartu behar da, Ibaetako kanpusean ekitaldi honek izango duen garrantzia, bertan baitaude, ikerkuntzan eskarmentu handia duten fakultateak, UPV/EHU-ko kimikako fakultatea kasu. TECNUN Goi mailako Ingeniari Eskolak ere izango du ekitaldi garrantzitsurik bere inguru hurbilean.".
"<br><br>Erakunde hauetako kide nabariek hizlari gonbidatuekin harreman zuzenak izateko aukera izango dute.";break;
case "De1600a1730Documentacion": $strTexto = "<font class=textom2>16:00</font> - <font class=textom2>17:30</font>. <b>Dokumentazio-banaketa</b>.<br>Ganbera-gela. Kursaal Zentroa.";break;
case "Lunes5deSeptiembre": $strTexto="Astelehena, irailak 5";break;
case "Martes6deSeptiembre": $strTexto="Asteartea, irailak 6";break;
case "Miercoles7deSeptiembre": $strTexto="Asteazkena, irailak 7";break;
case "Jueves8deSeptiembre": $strTexto="Osteguna, irailak 8";break;
case "Lunes5deSeptiembre_1730": $strTexto = "Kontrol puntua";break;
case "Lunes5deSeptiembre_1800": $strTexto = "<b>Irekiera Ofiziala.</b>";break;
case "Lunes5deSeptiembre_1830": $strTexto = "<b>Inaugurazioko hitzaldia. <a href='index.php?pg=7&ponente=14' target='einstein_ponente'><font class=textomna2>C. Cohen-Tannoudji.</font></a></b><br><i>Bose-Einstein kondentsatuak: Materia modu berri bat.</i>";break;
case "Lunes5deSeptiembre_1930": $strTexto = "<b>Ganbera-kontzertua</b> <br><i>Einsteinen gustukoenak</i>.";break;
case "Lunes5deSeptiembre_2100": $strTexto = "<b>Ongi-etorriko koktela Centro Kursaal Elkarguneko auditorioko sarreran.</b>";break;
case "Martes6deSeptiembre_900": $strTexto = "Dokumentazio-banaketa.";break;
case "Martes6deSeptiembre_930": $strTexto = "Einstein eta Denbora.";break;
case "Martes6deSeptiembre_1015": $strTexto = "<b>Open Spot</b> <i>Gravitation and Black Holes</i>.";break;
case "Martes6deSeptiembre_1100": $strTexto = "Kaferako atsedenaldia.";break;
case "Martes6deSeptiembre_1130": $strTexto = "Unibertsoaren jatorria eta bilakaera: kosmologiaren erronka.";break;
case "Martes6deSeptiembre_1133": $strTexto = "Einstein eta giza erlazioen bilakaera aldatu zuten difusio fenomenoak.";break;
case "Martes6deSeptiembre_1215": $strTexto = "Materia eta Forma.";break;
case "Martes6deSeptiembre_1300": $strTexto = "<b>Laburpena eta eztabaida.<b>";break;
case "Martes6deSeptiembre_1330": $strTexto = "Saioaren amaiera.";break;
case "Martes6deSeptiembre_1800": $strTexto = "<i>Nanoa dena desberdina da</i>.";break;
case "Martes6deSeptiembre_1845": $strTexto = "<i>Materia konplexuranzko pausoak: Informazioa, auto-antolakuntza eta egokitzapena sistema kimikoetan</i>.";break;
case "Martes6deSeptiembre_1930": $strTexto = "<i>Mugimendu Browndarra eta motor molekularrak.</i>";break;
case "Martes6deSeptiembre_2015": $strTexto = "<b>Saioaren amaiera.</b>";break;
case "Miercoles7deSeptiembre_900": $strTexto = "Dokumentazio-banaketa.";break;
case "Miercoles7deSeptiembre_930": $strTexto = "Informazio kuantikoaren teoria: erronkak eta ikuspegiak.";break;
case "Miercoles7deSeptiembre_1015": $strTexto = "Erlatibitatea, fotoiak eta partikulak.";break;
case "Miercoles7deSeptiembre_1100": $strTexto = "Laburpena eta eztabaida.";break;
case "Miercoles7deSeptiembre_1130": $strTexto = "Kaferako atsedenaldia.";break;
case "Miercoles7deSeptiembre_1215": $strTexto = "<b>Eztabaidaren jarraipena.<b>";break;
case "Miercoles7deSeptiembre_1300": $strTexto = "Saioaren amaiera.";break;
case "Miercoles7deSeptiembre_1700": $strTexto = "<i>Zer da teoria bateratu bat?</i>.";break;
case "Miercoles7deSeptiembre_1800": $strTexto = "<i>Pulsar fisika eta Einsteinen entseguak</i>.";break;
case "Miercoles7deSeptiembre_1830": $strTexto = "<b>Atsedenaldia</b>";break;
case "Miercoles7deSeptiembre_1845": $strTexto = "Einsteinek arrazoi al zuen?";break;
case "Miercoles7deSeptiembre_1930": $strTexto = "Einstein eta egungo mundu kuantikoa.";break;
case "Miercoles7deSeptiembre_2015": $strTexto = "Saioaren amaiera.";break;
case "Jueves8deSeptiembre_900": $strTexto = "Dokumentazio-banaketa.";break;
case "Jueves8deSeptiembre_930": $strTexto = "Einstein eta argi kuantuak.";break;
case "Jueves8deSeptiembre_1015": $strTexto = "Erlatibitate orokorraren eta esperimentuen arteko alderaketa.";break;
case "Jueves8deSeptiembre_1100": $strTexto = "Kaferako atsedenaldia.";break;
case "Jueves8deSeptiembre_1130": $strTexto = "Einstein eta XX. mendeko filosofia.";break;
case "Jueves8deSeptiembre_1215": $strTexto = "<b>Laburpena eta eztabaida.<b>";break;
case "Jueves8deSeptiembre_1300": $strTexto = "Saioaren amaiera.";break;
case "Jueves8deSeptiembre_1800": $strTexto = "Einstein: bera nor zer erakutsi zuena eta oraindik ere hain bizirik dagoena.";break;
case "Jueves8deSeptiembre_1845": $strTexto = "Einstein, Picasso: espazioa, denbora eta kalte handia eragiten dituen edertasuna.";break;
case "Jueves8deSeptiembre_1930": $strTexto = "Einsteinen amets handia: Fondotik independentea den fisika.";break;
case "Jueves8deSeptiembre_2015": $strTexto = "<b>Itxiera<b>.";break;
case "Jueves8deSeptiembre_2100": $strTexto = "Koktela Auditorioko sarreran.";break;
case "Programa_Introduccion":
$strTexto = "<b>Sarrera</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> Programa zabal bat diseinatu da txostenekin goizetik eta arratsaldetik, Kongresuak irauten duen 4 egunetan zehar banatuta.".
"<br><br><img src='images/ico_bolita_on2.jpg'> Programa data jakinean sakatuz ikus dezakezu, bai eta txostengile bakoitzaren curriculumaren laburpena ere.";break;
case "Programa_LaSede":
$strTexto = "<b>Kursaal Kongresu Jauregia - Auditorioa</b> ".
"<br><br>Kursaal Kongresu Jauregi eta Auditorioa 1999ko udan inauguratu zenetik Donostiako arkitektura-konplexu enblematikoa izateaz gain erabilera anitzeko espazioa eta teknologiarik berriena duena ere bada.".
"<br><br><center><img src='images/cubossombra.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/cubosbrillan.jpg'></center> ".
"<br><br>Kursaala Rafael Moneoren obra singularra da eta Europako Batzordearen eta Europako Parlamentuaren Europako eraikin onenaren Mies van der Rohe Saria eta Arkitekturako FAD saria, estatuan diziplina horretan eskaintzen diren garrantzitsuena, jaso ditu. Horregatik KURSAAL egun Europako eraikinik sarituena da.".
"<br><br>Munduan gehien ezagutzen den arkitektoak diseinaturiko multzo arkitektonikoa den Kursaala aldi berean Kongresu Jauregia eta Auditorioa da. Abangoardiako ekipamendua du, teknologiarik aurreratuenarekin bat egiten duen koherentziarekin definitua eta planteatua eta antolatzaile zorrotzenaren beharrei modu eraginkorrean erantzutera zuzendua.".
"<br><br><br><b>Kursaal Kongresu Jauregia - Auditorioa</b><br><br><center><img src='images/donostia.jpg'></center> ".
"<br><br>Rafael Moneo, pertsonalki lanak zuzendu zituena, egun mundu guztian tamaina handiko proiektuak egiteko nazioarteko mailan gehien bilatzen den arkitekturako profesionala da.".
"<br><br>Kristalez hondartutako eta beren plano bertikalean 5 gradu eta horizontalean 3 gradu inklinatuta dauden Kursaalaren bi 'harkaitzek' arkitektoaren intentzio argiari erantzuten diote: 'geografiaren presentzia betikotzea eta, ahal den neurrian, naturala denaren eta artifiziala denaren uztartze harmonikoa azpimarratzea'. Donostiako eraikin-talisman hori arrisku ariketa bikaina da: bere 'foyer' nagusiak, altueran 22 metro, zabaleran 12 eta sakoneran 60 metro ditu eta, aireko eskalinatak izateaz gain zedro kanadarrarekin eta kristal argidunekin jantzia dago, Moneoren lanen dotoretasuna du.".
"<br><br><table align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom><center> ".
"<b>Kursaal Kongresu Jauregia - Auditorioa </b><br><br>Zurriola hiribidea, 1 . 20002 Donostia-San Sebasti�n.<br>Tel.: 943 00 30 00 . Faxa: 943 00 30 01<br>Helbide elektronikoa:<a href='mailto:kursaal@kursaal.org'><u>kursaal@kursaal.org</u></a><br><a href='http://www.kursaal.org' target='_blank'><u>http://www.kursaal.org</u></a> ".
"</center></td></tr></table>";break;
case "Ponente_A_Lehn":
$strTexto = "<b>Materia konplexuranzko pausoak:<br>Informazioa, auto-antolakuntza eta egokitzapena sistema kimikoetan</b>".
"<br><br>Materia zatitutik kondentsatura, antolatura, bizira edo adimentsura, unibertsoa geroz eta konplexuagoa den materia baterantz garatu da auto-antolakuntzako prozesu baten bitartez.".
"<br><br>Paralelismo bat egin daiteke unibertsoaren eskala handiko egituraren eta materia molekularraren mailako formazioaren artean. Unibertsoaren auto-antolakuntza grabitazio-indarretatik sortzen da, materia molekularraren auto-antolakuntza, bizigabea eta bizia, aldiz, esan daiteke egitura-konbinazio posibleen dibertsitate infinituaren barruan sortzen eta eragiten duten indar elektromagnetikoen emaitza dela.".
"<br><br>Kimikak, materiaren egituraren eta transformazioaren zientzia gisa, ezinbesteko papera du materiaren auto-antolakuntza eragiten duten prozesuak ulertzera iristeko. Izan ere, mundu biologikoaren nukleoan dago, materia konplexuaren mailarik gorenena ezagutzen dugun moduan.".
"<br><br>Kimikak bilakaera bat jasan du kimika molekularretik, geroz eta konplexuagoak diren molekuletako atomoen konbinazioa eta birkonbinazioa kontrolatzen duenetik, kimika supramolekularrera, molekulen arteko indarrak informatutako sistema supramolekularrak eta elkarrekintza elektromagnetiko bidez aurrera eramandako molekula-informazioko inplementazioko prozesuak sortzeko erabiltzen dituenera.".
"<br><br>Kimika supramolekularra auto-antolakuntza izaten duten sistemak ikertzen ari da, hau da, beren osagaien automihiztaduraren bitartez ondo definituriko egitura supramolekularrak berez sortzeko gai diren sistemak, beren osagaien egitura kobalentean pilaturiko molekula-informazioan oinarriturik eta algoritmo interaktibo espezifikoen bitartez maila supramolekularrean irakurriz, modu horretan sistema kimiko programatu gisa jardunaz".
"<br><br>Horrela bada, kimikak paper nagusia du pixkanaka gaiaren inguruko informatua eta antolatua dagoen eta garatzen ari den zientzia bat sortzean, materia konplexuaren zientzia sortzean.".
"<br><br>� Lehn, J.-M., Supramolecular Chemistry: Concepts and Perspectives, VCH Weinheim, 1995. ".
"<br>� Lehn, J.-M., in Supramolecular Chemistry: Where It Is and Where It Is Going (R. Ungaro, E. Dalcanale, eds.), Kluwer, Dordrecht, 1999, pp. 287-304. ".
"<br>� Lehn, J.-M., Chem. Eur. J., 1999, 5, 2455. ".
"<br>� Lehn, J.-M., Chem. Eur. J., 2000, 6, 2097. ".
"<br>� Lehn, J.-M., Proc. Natl. Acad. Sci. USA., 2002, 99, 4763.";break;
case "Ponente_C_Lehn":
$strTexto = "<b>ISIS, Universit� Louis Pasteur, Strasbourg and Coll�ge de France, Paris.</b> ".
"<br><br>Jean-Marie Lehn Rosheimen (Frantzia) jaio zen 1939an. 1970ean Kimikako irakasle gisa hasi zen Estrasburgoko University Louis Pasteurren eta 1979az geroztik Parisko Coll�ge de Francen irakasle da. 1968an, bere ikerketak tamaina eta forma egokiko beste espezie kimikoak sar zitezkeen barrunbe bat zuten kaiola formako molekulak sortzea bideratu zuen, sarrailan sartzen den giltzaren moduan. Horrela hasi zuen bere 'errekonozimendu molekularraren' oinarri kimikoei buruzko lana (hau da, molekula jasotzaile batek substratu bat selektiboki errekonozitu eta batzen duen modua), hori oinarrizkoa baita prozesu biologikoetan. 1987an, Lehn doktoreak Kimikako Nobel Saria jaso zuen Cram-ekin eta Pederson-ekin ikerketa horiengatik.".
"<br><br>Urte batzuk ondoren bere lanak kimikaren barruan eremu berri bat definitzera eraman du, berak 'kimika supramolekularra' deitzen duena. Molekulen arteko indarrek elkartutako bi espezie kimiko edo gehiagoren elkartzeak sortutako entitate konplexuak dira, kimika molekularrak, aldiz, lotura kobalentez lotutako atomoekin eraikitako entitateen ezaugarriak aztertzen ditu.".
"<br><br>Bere ikerketa zabaldu egin da molekula errekonozimendutik katalisi supramolekularrera eta garraio-prozesuetara, gailu molekularren, elektronikaren eta fotonika molekularraren diseinura zabaltzeaz gain. Gaur egun bat-batean baina modu zuzenduan batuz ondo definituriko egitura supramolekular funtzionalak osatzen dituzten osagai egokien bitartez auto-antolakuntza jasaten duten sistema 'programatuen' diseinuan jarduten du gehienbat.".
"<br><br>750 zientzia-argitalpen baino gehiagoren egilea den Lehn doktorea hainbat akademia eta erakundetako kide da eta nazioarteko hainbat errekonozimendu eta sari jaso ditu.";break;
case "Ponente_A_Cirac":
$strTexto = "<b>Informazio Kuantikoaren Teoria: Erronkak eta ikuspegiak</b> ".
"<br><br>Informazio kuantikoa prozesatzea eta komunikatzea diziplinarteko ikerketa-eremua da eta helburua du mekanika kuantikoaren zenbait propietate erabiltzea informazioa modu oso eraginkorrean transmititzeko. Orain arte konputazio kuantikoaren ideia nagusiak proba ditzaketen sistema oso gutxi daude eta ziurrenik konputazio kuantikoa izango da eremu honetako aplikaziorik garrantzitsuenetarikoa. Alde batetik, optika kuantikoko sistemak dauzkagu, normalean atomoak edo ioiak, laser  eremuekin elkarrekintzan jarduten dutenak eta indar elektromagnetikoek harrapatzen dituztenak. Beste aldean, elektronikoki kontrola daitezkeen egoera solidoko gailuekin (adibidez, puntu kuantikoak edo gailu supergidariak) topatzen gara. Hitzaldi honetan Informazio Kuantikoko eremuko oinarrizko kontzeptuak berrikusiko ditut, atomoak, ioiak eta fotoiak erabiliz zenbait ideia praktikan nola jarri erakutsiko dut. Optika kuantikoko sistemak kontrolatzeko eremuko ikuspegiak ere aipatuko ditut eskalako gailu bat eraikitzeko helburuarekin.";break;
case "Ponente_C_Cirac":
$strTexto = "<b>Max-Planck Institute for Quantum Optics, Garching.</b>".
"<br><br>Cirac irakaslea fisikan lizentziatu zen eta Madrilgo Unibertsitate Konplutentsean n lortu zuen doktoratua (1988,1991). Bere ibilbide profesionalean postuak izan ditu University of Coloradon (Innsbruck), Technical University of Munichen eta Max-Plank Institute for Quantum Opticsen, orain bertako zuzendari exekutiboa da.".
"<br><br>Cirac irakaslea 175 argitalpenen egilea da eta hainbat sari irabazi ditu. American Physical Societyko kidea eta Espainiako eta Austriako zientzia akademietako kidea da.";break;
case "Ponente_A_Clifford":
$strTexto = "<b>Einsteinek arrazoi al zuen?</b> ".
"<br><br>Nola ospatzen da XX. mendeko teoria zientifikorik ospatuena sonda planetarioen, irratiteleskopioen eta erloju atomikoen azterketa zorrotzaren azpian? 100 urte ondoren, Einsteinek arrazoi al zuen?".
"<br><br>Hitzaldi honetan erlatibitatea probatzearen historia kontatzen dugu, argiaren kurbaren 1919ko neurketetatik 1980ko hamarkadako deskonposizioan dagoen neutroi bikoitzeko izarraren sistema baten neurketetaraino adierazten dute grabitate-uhinen ekintza. Erakutsiko dugu nola astronomiako eta teknologiako iraultza batek 1960ko hamarkadan erlatibotasun orokorra sortzea eta horren aurreikuspenak egiaztatzen saiatzeko programa sistematiko bat eragin zituen. Baita ere frogatuko dugu erlatibotasun orokorrak funtzio garrantzitsua duela eguneroko bizitzan.";break;
case "Ponente_C_Clifford":
$strTexto = "<b>Washington University.</b>".
"<br><br>Clifford Will Fisikako irakaslea eta St. Louisko Washington Universityko McDonnel Center for the Space Sciences-eko kidea da.".
"<br><br>Matematika aplikatuetan eta Fisika teorikoan lizentziatu zen McMaster Universityn 1968an eta Fisikan doktoratu zen California Institute of Technologyn 1971n, University of Chicagoko Enrico Fermi kidea (1972-1974) eta Stanford Universityn Fisikako irakasle-laguntzailea (1974-1981) izan zen. 1975etik 1979ra, Alfred P. Sloan Foundationeko kide izan zen. 1975etik 1979ra Alfred P. Sloan Foundation-eko kidea izan zen. 1981ean Washington Universityan sartu zen irakasle-laguntzaile gisa eta 1985ean Fisikako irakasle titularra izatera pasatu zen eta 1991-2002 artean Departamentuko Zuzendaria izan zen.".
"<br><br>1986an American Association of Physics Teachers-ek 46. urteroko Richrmyer Physical Lecturer saria eman zion eta 1989an American Physical Societyko kide egin zuten.".
"<br><br>Hulse-Taylor Pulsar Binarioaren inguruko lan teorikoaren errekonozimendu gisa Nobel Fundaziak 1993ko Nobel Sarien ekitaldira gonbidatu zuen Joseph Taylor eta Russel Hulse omentzeko. 1996-1997an J. William Fulbrighteko eta Guggenheim Fundazioko kide zen eta 1996an Ikasle agurgarria izendatu zuen McMaster Universityn.".
"<br><br>2001ean American Academy of Arts and Sciences-eko kide aukeratu zuten eta 2004an St. Louis Academy of Sciences-eko kideen saria jaso zuen.In 2001 he was elected a Fellow of the American Academy of Arts and Sciences, and in 2004 he received the Fellows award of the St. Louis Academy of Sciences.".
"<br><br>Zientziako 160 artikulu baino gehiago argitaratu ditu, 13 artikulu garrantzitsu barne. gainera, zabalkundeko lan askoren eta bi libururen egilea da.";break;
case "Ponente_A_Galindo":
$strTexto = "<b>Einstein eta denbora</b>".
"<br><br>Zientziako eta teknologiako aurrerapen askok izan dute zerikusia denbora neurtzeko zehaztasunaren aurrerapenekin. Gaur egun 20 milioi urtetan segundo bateko zehaztasuneko erlojuak dauzkagu; gainera, azken urte hauetako XUV erradiazioko pultsu ultralaburren belaunaldia eta beren iraupena attosegundoko erresoluzioarekin neurtzeko teknikak garatzeak azaltzen dute femtokimikatik attofisikara pasatzea errealitate bihurtzen ari dela.".
"<br><br><br>Denbora fisikoa, horren definizioan Newton handia saihestu zuen esanez guztiok oso ondo ezagutzen dugula, Albert Einstein protagonista izan zuen zientzia-iraultzaren nukleoa izan zen erlatibotasun-printzipioekin. Einsteinek bere 1905eko <i>Annus Mirabilis</i>ean proposatu zuen erlatibotasunaren teoria bereziarekin, Newtonen denbora absolutu, benetako eta matematikoak zenbatu gabeko denborei lekua utzi ziela, inertzial bakoitzeko bati. Aldiberekotasuna erlatiboa izatera pasatu zen, bai eta iraupena ere, mugimenduarekin zabaldu egin baitzen. Denbora erlatibista geldoago joaten da erloju mugikorretan eta horrek 'etorkizunera bidaiatzea' ahalbidetzen du. Baina grabitazioa amalgamarentzat espazio-denborak bere osotasuna mantentzen zuen erlatibotasun mugatu horretatik kanpo geratzen zen. 1907 eta 1915 artean Einsteinek grabitatea egokitzea lortu zuen eta baliokidetasun-printzipioaren gainean eraiki zuen bere erlatibotasun orokorra. Bertan Einsteinek aurreikusten du espazio denbora kurbatu egiten dela materia-energiaren eraginpean eta bereziki denbora grabitazioan zabaldu egiten dela dagokion mugimendua gehitzerakoan.".
"<br><br><br>Einsteinen erlatibotasun-teoriek berebiziko garrantzia dute baina ez fisikoentzako bakarrik, gure bizitzan ere aurkitzen ditugu. GPSa (Global Positioning System) erabiltzen dugunean zein leku eta momentu zehatzetan gauden jakiteko denboraren zabaltasuna erlatibista eta grabitazionala baztertzen ez dituen teknologia batez baliatzen ari gara. Ez balitz horrela, GPSak minutu batzuk ondoren ez luke bere helburua beteko eta ikuspenik gabeko lurrartzeak ez lirateke seguruak izango. Azkenik, gizonak urrutiko mundura joatearekin, iraganera bueltatzearekin edo etorkizuna bisitatzearekin amets egiten duenean, lehenago edo beranduago Einsteinen muturreko baldintzetako grabitatearen teoriaren printzipioak eskaintzen dion espazio-denboraren deformazioetara jotzen du.".
"<br><br><br>Hitzaldi honekin lortu nahi duguna da gai horiek hiritar ikusnahiari hurbiltzea. Fisika aldatu zuenari eta, bere obrarik onena bezala, garai guztietako zientzia-espirituko sorkuntzarik ederrena den Einsteinen grabitazioaren teoria utzi zigunaren oroimenik onena da.";break;
case "Ponente_C_Galindo":
$strTexto = "<b>Universidad Complutense, Madrid</b> ".
"<br><br>Alberto Galindo Huescako villa de Zaid�nen jaio zen 1934an eta Zaragozako Unibertsitateko Zientzietako Unibertsitatean Zientzia Zehatzetan lizentziatu zen eta Madrilgo Unibertsitate Zentraleko doktore da. 1963-1967 artean Fisika Matematikako katedraduna izan zen eta 1967az geroztik Madrilgo Unibertsitate Konplutentseko Fisika Teorikoko katedraduna da.".
"<br><br>Galindo irakaslea hainbat zentrotan ikertzen aritu da: Energia Nuklearreko Batzordea, Courant Institute of Mathemetical Sciences (New York University), International Centre for Theoretical Physics (Trieste), Centre Europ�en pour la Recherche Nucl�aire (CERN, Gen�ve), Institut des Hautes �tudes Scientifiques (Bures-sur-Yvette), D�partement de Physique Math�matique (Universit� de Dijon), Institut f�r Theoretische Physik (Wien Universit�t), Department of Physics (Princeton University), Coll�ge de France (Paris), Department of Physics (University of California in Los Angeles), Donostia International Physics Center (Donostia).".
"<br><br>Analisi funtzionalei, Taldeen teoriaren eta Lie-ren algebrei, Mekanika kuantikoari, Eremuen teoriari, Oinarrizko partikulen, Sistema integragarriei, Talde kuantikoen eta Informazio kuantikoari buruzko lanen egilea da.".
"<br><br>Galindo irakasleak hainbat liburu idatzi ditu eta honakoak dira azpimarragarrienak: M�todos Matem�ticos de la F�sica (L. Abellanas-ekin, Imprenta Octavio y F�lez, Zaragoza 1973), Mec�nica Cu�ntica (P. Pascual-ekin, Alambra argitaletxea, Madril 1978), Soluciones Exactas en Relatividad General. Colapso Gravitacional y Agujeros Negros (L. M�s-ekin, Editorial de la Universidad Complutense, Madril 1983), Espacios de Hilbert. (Geometr�a, Operadores, Espectros)  (L. Abellanas-ekin, EUDEMA, Madril 1988), Mec�nica Cu�ntica I, II (P. Pascual-ekin, EUDEMA, Madril 1989), Problemas de Mec�nica Cu�ntica (P. Pascual-ekin, EUDEMA, Madril 1989), M�todos de C�lculo (Serie Schaum-en, L. Abellanas-ekin, McGraw-Hill, Madril 1990), Quantum Mechanics I, II (P. Pascual-ekin, Springer Verlag, Berlin 1990, 1991),  F�sica y Qu�mica 1  (J. M. Savir�n-ekin, A. Moreno-rekin, J.M. Pastor-ekin eta A. Bened�-rekin, McGraw-Hill, Madril 1995), F�sica 2  (A. Moreno-rekin, A. Bened�-rekin, P. Varela-rekin, McGraw-Hill, Madril 1998). Galindo irakasleak hainbat sari jaso ditu: Zaragozako Zientzia Zehatz, Fisiko-Kimiko eta Naturalen Akademiako akademiko aukeratua, Madrilgo Zientzia Zehatzen, Fisikoen eta Naturalen akademiko numerarioa, Fisika Teorikoaren Unibertsitatearteko Taldearen (GIFT) sortzailea eta lehenengo zuzendaria, Vienako Erwin Sch�dinger International Institute of Mathematical Physics-eko lehenengo Zientzia-Batzordeko kidea, Europako Akademiako kidea, 1977ko Fisikako Estatuko Ikerketa Saria, 1985eko 'Santiago Ramon y Cajal' Estatuko Ikerketa Saria, 1991ko Zientzia-Teknikako Ikerketako Aragoi Saria.";break;
case "Ponente_A_Gerald":
$strTexto = "Argitalpenetan eta gutunen argitaraturiko zatietan, Albert Einsteinek bere bera nor zenaren eta bere ekarpen garrantzitsuak zein zirenaren inguruko bere ideiak azaltzen zituen. Bere ideia horiek errespetatu egin behar dira, noski. Baina gauza da ez zirela nahikoak; urtetan zehar, jakintsuek beste batzuk gehitu eta gainerakoak argitzen lagundu zuten. Arreta Erlatibitatearen, berriki 'Erlabititatearen diktadura' deitu denaren eta Absolutismoaren arteko eztabaida zahar baina orain entzutetsua denean jarriko da.";break;
case "Ponente_C_Gerald":
$strTexto = "<b>Harvard University</b> ".
"<br><br>Gerald Holton Fisikako irakasle ikertzailea eta Zientziaren Historiako irakasle ikerlaria da Harvard Universityn eta American American Physical Society, American Philosophical Society, American Academy of Arts and Sciences eta Europako beste hainbat elkarte ezagunetako kide da. History of Science Societyko eta UNESCOrako AEBetako Batzorde Nazionaleko lehendakaria izan zen. Argitaratu dituen liburuen artean honakoak daude: Thematic Origins of Scientific Thought: Kepler to Einstein, eta Einstein, History and Other Passions. Daedalus hiruhileroko aldizkariko sortzaile eta editore eta Collected Papers of Albert Einstein argitalpen-batzordeko kide izan zen. Jaso dituen sarien artean honakoak daude: Sarton domina, Oxford Universityko Herbert Spencer irakasle hautetsia eta National Endowment for the Humanitieseko Jefferson irakasle hautetsia.".
"<br><br>Albert Einsteinen oinordekoek hala eskatuta, argitaratu gabeko Albert Einsteinen gutun eta eskuizkribuak ikerketarako artxibo bihurtzeko proiektua hasi eta urte askotan zehar gainbegiratu zuen.";break;
case "Ponente_A_Sheldon":
$strTexto = "<b>Zer da teoria bateratu bat?</b>".
"<br><br>Einsteinek bere bizitzaren azken erdia berak eremu bateratuaren teoria deitzen zuenaren alferrikako bilaketan pasa zuen: grabitazioaz eta elektromagnetismoaz gain esentzia atomikoa ere deskribatuko zuen ekuazio-sistema bat. Patu bera izan zuten Schroedinger-ek, Heisenberg-ek eta denbora batean Wolfgang Pauli-k. Gaur egun erronka handi bat gehiago ezagutzen dugu. Gure eredu estandarrak oinarrizko partikulen fenomenoaren deskribapen nahiko osatu eta zuzena eskaintzen du, baina ezin du grabitatea deskribatu. Supersoken teoriak eredu estandarrarekin bateragarria izan daitekeen grabitatearen teoria kuantiko bat eskaintzen du baina ez die (eta agian ezin du) galdera batzuei erantzunik ematen, adibidez, quarkek eta leptoiek dauzkaten behatu diren masak eta konbinaketak. XXI. mendeak Einsteinen ametsa betetzera hurbilduko al gaitu? Guztiaren Teoria bat egon al daiteke?";break;
case "Ponente_C_Sheldon":
$strTexto = "<b>Boston University</b>".
"<br><br>New Yorken jaio zen 1932an eta eskola publikoetan ikasi ondoren Cornell Universityra joan zen unibertsitatera eta Harvard Universityn doktoratu zen. Niels Bohr Intituten, Cal Techen, Stanford Universityn eta Berkeleyko University of Californian hainbat urte pasatu ondoren Harvardeko fakultateko partaide egin zen 1966an eta bertan jarraitu zuen Fisikako Higgins katedran 2000 urtea arte. Gaur egun Boston Universityn zientziako irakaslea da eta Metcalf Zientzia-katedra dauka.".
"<br><br>Glashow irakasleak hiru liburu eta 300 artikulu espezializatu eta zabalkundekoak baino gehiago idatzi ditu. American Philosophical Societyko The American Academy of Arts and Sciences eta AEBko, Errusiako, Koreako eta Kosta Ricako Zientziako Akademia Nazionaletako kide da.".
"<br><br>1979an Glashow irakasleak Fisikako Nobel Saria banatu zuen elkarrekintza ahul eta elektromagnetikoen teoria bateratuari egindako ekarpenengatik.";break;
case "Ponente_A_Dudley":
$strTexto = "<b>Mugimendu browndarra eta motor molekularrak</b>".
"<br><br>Bere 1905eko mugimendu browniarrari buruzko artikuluan Einsteinek 'indar sistematiko' bat, Stokes esekidura koloidalaren gaineko partikulen arraste-indarra molekula fidagarria azken mugimenduak sortzen duen indar fluktuatzaile aleatorioarekin berdindu zuen. Difusioa modu berri batean ere jorratu zuen, prozesu Markoviar bat bezala. Estrategia horiek ahalbidetu zioten mugimendu browniarra termodinamikaren bigarren legearekin bateratzea, bai eta Avogadroren zenbakia zehazteko hainbat bidetara eraman ere, molekulen errealitatea baieztatu zuten emaitza konstanteak lortuz.".
"<br><br>Gaur egun antzeko estrategiek argitzen dute 'motor molekularren' itxurazko eragiketa paradoxikoa, adibidez, bere erreplikazioa katalizatzen duen bitartean ADN-ereduko kate batean zehar mugitzen den entzima bat. Horrelako entzima batek adenosina trifosfatuko ehunka molekula 'erretzen' ditu segundoko. Hala eta guztiz ere, botere kimiko hori txiki txikia da uretan mugitzen den motorrean aurkituriko soinu termiko aleatorioarekin alderatzen badugu. Desberdintasuna bederatzi magnitude-ordenakoa da. Gainera, entzimek milaka zeregin kimiko betetzen dituzte eraginkortasun nabariarekin.".
"<br><br>Hitzaldi honetan nire helburua da Einsteinen legatuari omenaldi bat egitea bere ideiak egungo entzima-motorretan gauzatu diren modua azpimarratuz. Fluktuazio browniarrek entzimei azkar konfigurazio-multzo zabal bat aztertzeko aukera ematen diete eta modu horretan indar kimikoek erreakzionatzea ahalbidetzen dutenak lehertzekoa. Horrela bada, mugimendu browniarraren soinu termikoa da entzimei hedatzea zuzentzea eta prozesu biologikoetarako ezinbestekoak diren gidaturiko mugimendu molekularrak sortzea ahalbidetzen diena.";break;
case "Ponente_C_Dudley":
$strTexto = "<b>Harvard University</b>".
"<br><br>Dudley Herschbach San Josen (California) jaio zen 1932an eta 1954an Matematiketan lizentziatu zen eta 1955ean Standford Universityn Kimikako master bat lortu zuen,. 1956an Fisikan master bat lortu zuen eta 1958an Fisika-Kimikako doktoretza Harvarden.".
"<br><br>1963an Harvardera bueltatu zen Kimikako irakasle gisa eta Zientzietako Baird katedra okupatu zuen (1967-2003). Gaur egun Ikerketako irakasle emeritua da. Bere irakaskuntza-lanetan mekanika kuantikoko, zinetika kimikoko, espektroskopia molekularreko eta talkaren teoriaren graduatuondoko ikastaroak biltzen ditu, bai eta unibertsitateko ikasleentzako kimika fisikoko eta hasiberrientzako kimika orokorreko ikastaroak ere, bere erronkarik garrantzitsuena. Gaur egun hasiberrientzako motore molekularrei buruzko ikastaro bat eta fisika kimikoko hainbat gaiei buruzko graduatuondoko 'mini-ikastaro' bat ematen ditu. 16 urte bitartekoen zientzia-irakaskuntza buruzko ezagutza orokorra hobetzeko hainbat ahaleginetan parte hartzen du. Science News argitaratzen duen eta Intel Science Talent Search-a eta Intel International Science and Engineering Fair-a zuzentzen duen Zientzia-Zerbitzuko Administrazio Kontseiluko lehendakaria da.".
"<br><br>Heischbach hainbat akademia eta erakundetako kide da eta nazioarteko hainbat errekonozimendu eta sari jaso ditu. Bere egungo ikerketa molekulak talka estereodinamikoko ikerketetara orientatzeko metodoetan, Broglieren uhin-longitudeko kimika aztertzeko molekulak geldotu eta harrapatzeko baliabideetan, presio altuak eragindako transformazio molekularretan, oso erlazionaturik dauden partikula askoren elkarrekintzetarako eskalako ikuspegietan eta motore molekularren analisi teorikoan, bereziki ADN-entzimen sistemetan jartzen du arreta.";break;
case "Ponente_A_Hewish":
$strTexto = "<b>Pulsar Fisika eta Einsteinen entseguak</b>".
"<br><br>Pulsarrak metro kubikoko 100.000 bilioi tonatako dentsitatean neutroiak dauzkaten izarren grabitazio-kolapsoan osatutako izarrak dira. Grabitazio-eremu intentsuek inguratzen dituzte eta segundoko 600 erreboluzio baino gehiagotan jiratzen dute eta erlatibotasun orokorraren entsegu zehatzetarako giro idealetako erloju astronomiko oso zehatzak bihurtzen dira. Gainera, pulsarren jarrera ulertzeak likido kuantikoak, magneto-hidromekanika erlatibista eta plasma erlatibisten erradiazio konstantea sortzea eskatzen ditu. 1967an pulsarrak aurkitu izanak astrofisikako hainbat arlotako ikerketa bultzatu zuen. Eremu ernagarri horren aurrerapenak laburtuko ditugu.";break;
case "Ponente_C_Hewish":
$strTexto = "Antony Hewish Fowey-n (Cornwall) jaio zen 1924an. Cambridgeko Unibertsitatean urtebete pasa ondoren, hiru urtetan (1943tik 1946ra) gerran parte hartu zuen Royal Aircraft Establishment-ean (Farnborough). Cambridgera bueltatu zen eta 1948an lizentziatu zen Martin Ryle-ren taldearekin bat eginez radio astronomiari buruz ikertzen hasteko. Ryle-ren erradio galaxien izar-prospekzio berritzaileetan parte hartu zuen eta beranduago faseko hainbat elementu zituen antena handi bat diseinatu zuen kuasarren angelu-tamainak neurtzeko eguzki-haizeak eragindako dirdira erabiliz. Lan horretan zehar, 1967an, aurkitu zituen pulsarrak bere ikasle Jocelyn Bell-Burnell-ekin. 1974an Fisikako Nobel Saria jaso zuen (Ryle-rekin banatua) aurkikuntza horretan izan zuen paperagatik. ".
"<br><br>1982 eta 1987 artean Hewish Cambridgeko Mullard Erradio Astronomiako Behategiko zuzendari izan zen. Erradio astronomiako irakasle postutik 1989an erretiratu zen. Bere karrera guztian zehar fisika irakasten jardun zuen.";break;
case "Ponente_A_Miller":
$strTexto = "<b>Einstein, Picasso<br>Espazioa, denbora eta kalte handia eragiten dituen edertasuna.</b>".
"<br><br>XX. mendeko zientzialari eta artista garrantzitsuenek beren sorkuntza handieneko aldia ia batean eta egoera oso antzekoan izan zuten. Beren maisulanetan jarriko dut arreta: Einsteinen erlatibotasunaren teoria berezia eta Picassoren Avignoneko andere�oak. Ikaragarrizko obra horiek sortu zituztenean, Einstein edo Picasso oraindik ez ziren gero hain ospetsuak egin ziren adineko gizon ospetsuak: hogei urte inguru zituzten, ezezagunak ziren, menderakaitzak eta arazoak izan ohi zituzten (beren buruen eta sorkuntzen edertasunak harridura eragiten zuen).".
"<br><br>Biek izan zuten abangoardiaren zurrunbiloaren aurreko erreakzioa. Picassorentzako pelikulak erreproduzitzeko aurkikuntza berriak, argazkigintza eta zientziako eta filosofiako aurrerapenak ekarri zituen. Einstein oinarrizkoak ziren arazo teknologikoetan murgildu zen, dinamo elektrikoen diseinua eta treneko ordutegien koordinazioa kasu.".
"<br><br>Beren bizitzen eta egoeren eta beren maisulanak sortzeko jasan behar izan zutenaren artean dauden antzekotasun ugarien artean gako bateratzaile bat ezkutatzen da. Einsteinek nahiz Picassok adin nagusitasuna lortu zuten momentuan historian hasi ziren ikusten espazioa eta denbora ulertzeko modu klasiko eta intuitiboak ez zirela zuzenak. Biek gai berarekin lan egin zuten: espazioaren eta denboraren izaera eta, zehazki, aldiberekotasuna.";break;
case "Ponente_C_Miller":
$strTexto ="<b>University College, London</b>".
"<br><br>Arthur I. Miller Zientziaren Historia eta Filosofiako irakaslea da University College Londonen. Irrati-programa askotan parte hartu du eta zientzia modernoari, zientzia kognitiboari, zientzia-sorkuntzari eta artearen eta zientziaren arteko erlazioari buruzko hitzaldiak irakurri eta eman ditu. Bere liburu ugarien artean honakoak daude: Albert Einstein's Special Theory of Relativity, Sixty-Two Years of Uncertainty, e Insights of Genius: Imagery and Creativity in Science and Art";break;
case "Ponente_A_Rebolo":
$strTexto = "<b>Unibertsoaren jatorria eta bilakaera: Kosmologiaren erronkak</b> ".
"<br><br>Unibertsoan galaxiek duten banaketa eta oso urruneko galaxietan supernoben leherketen behaketek eta mikrouhinen fondo kosmikoaren (unibertsoaren erradiazio fosila) anisotropiaren sentsibilitate altuaren neurketek indarrez babesten dute kosmosa materiaren eta energiaren forma exotikoek menderatzen dutela.".
"<br><br>Unibertsoko materia-forma nagusia, materia arrunta baino bost aldiz ugariagoa dena, badirudi izaera interaktibo oso ahulekoa dela. Ahalegin handiak egiten ari dira laborategietan partikula arduraduna identifikatzeko. Energia-modu nagusia, hutsaren energia deitzen dena, Einsteinek bere erlatibotasun orokorraren ekuazioetan iradokitzen zuen konstante kosmologikoarekin erlazionatua dago eta momentu honetan unibertsoaren zabaltze azkartuaren eragilea da. Osagai gako horiek ulertzean berriki izandako aurrerapenak eta unibertsoaren bilakaeran izan duten papera berrikusiko dugu.";break;
case "Ponente_C_Rebolo":
$strTexto = "<b>Instituto de Astrof�sica de Canarias (CSIC)</b>".
"<br><br>Cartagenan (Espainia) jaio zen 1961ean eta Zientzia Fisikoetan lizentziatua da Granadako Unibertsitatean eta Astrofisikako doktorea La Lagunako Unibertsitatean. Gaur egun Canariasko Instituto de Astrof�sicako (IAC) Zientzia-Ikerketen Batzorde Nagusiko Ikerketa irakaslea da eta Max Planck Institute f�r Astronomieko irakasle elkartua.".
"<br><br>IACko zientzia-dibisioko arduraduna izan da eta ikerketako 'Rey Jaime I' eta 'Canarias' eta Zientzia eta Teknologiako 'Iberdrola' sariak jaso ditu.".
"<br><br>Elementu kimikoen jatorriari, Mikrouhinen fondo kosmikoari, planeta ikaragarriei eta marroi nanoei buruzko hainbat proiektu zuzentzen ditu. 3000 aipamen baino gehiago batzen dituzten arbitroa duten aldizkarietako 130 zientzia-argitalpen baino gehiagoren baterako egilea izan da. Europako Astrofisikako Ikerketen Elkarteko eta Astronomia Optiko eta Infragorriaren Koordinazioko Europako Sareko zuzendaritza-koadroko kide da bai eta Real Academia e Ciencias de Espa�akoa ere.";break;
case "Ponente_A_Rohrer":
$strTexto = "<b>Nanoa dena desberdina da.</b> ".
"<br><br>Osagai elektronikoak miniaturizatzea gakoa izan da eguneroko bizitza nahiz abentura zientifikoak kontrolatzen dituen mundua lehenbailehen inbaditzeko, abiadura azkarreko informatikaren mundua eta komunikazioak orain arte inoiz egin ez zuen bezala besarkatzen dituen mundua inbaditzeko. Nanoteknologiaren bitartezko pixkanakako miniaturizazioak zalantzarik gabe aurrekaririk izan ez duen teknologia elektronikoa gizarte eta mundu guztiari zabaltzea eragingo du.".
"<br><br>Baina nanozientziak txikiena, azkarrena, merkeena eta indartsuena baino gehiago eskaintzen du. Nanoa dena desberdina da. Nanozientzia eta nanoteknologia mekanika kuantikoaren eta klasikoaren arteko propietateen eta jarreraren arteko elkargunean daude. Horietan ere materia kondentsatuaren fisika eta teknologia, kimika makromolekularra eta biologia bezalako eremu desberdinek bat egiten dute. Nanomekanika eta nanokimika bide berriak irekitzen ari dira mota guztietako datuen (mekanikoak, kimikoak eta termikoak barne) prozesamenduaren mundu 'birtualaren' eta sentsazioen eta jardueren mundu 'errealaren' artean, prozesamendu teknologiak, sentsazioak eta jarduera berriak eta integratuak inbaditzen dituen uhin bat eraginez.".
"<br><br>Hori da eskala nanometrikoko zientziarako eta teknologiarako promesak suposatzen duen desberdintasuna eta mende honetako zientzia- eta teknologia-munduaren muina bihurtuko dena.";break;
case "Ponente_C_Rohrer":
$strTexto = "<br><br>Heinrich Rohrer-ek Fisika Esperimentala ikasi zuen Swiss Federal Institute of Technology Zurichen (ETHZ). 1963an, AEBetan bi urte pasa ondoren graduatuondoko ikasketak egiten, IBM Zurich Research laboratoryan sartu zen. 1986an Fisikako Nobel Saria jaso zuen kanaleko mikroskopioa kontrolatzeari buruzko lanagatik. 1997an IBM utzi zuen eta Suitzan, Japonian eta Espainian hainbat izendapen jaso zituen.";break;
case "Ponente_A_Ron":
$strTexto = "<b>Einstein eta XX. Mendeko Filosofia</b>".
"<br><br>Albert Einstein hartzen da XX. mendeko zientzialaririk garrantzitsuena eta garai guztietako garrantzitsuenetariko bat bezala, baina bere eragina ez da zientzian bakarrik antzematen, bai eta filosofian ere, batez ere epistemologian eta metodologian. Nire parte-hartzean ondorengo gaiak jorratuko ditut: 1) filosofiak Einsteinengan izan zuen eragina bere urterik produktiboenetan eta momentu hartan zenbait filosofoekin izan zuen elkarrekintza (adibidez, Mach edo Schlick); 2) nola bere 'zientziaren filosofia' bere zientzia-interes eta ikuspegien bilakaeraren arabera (eta horiekiko modu koherentean) aldatu zen; 3) zein eragin izan duten bere zientziako ekarpenek, bereziki erlatibotasun orokorrak eta bereziak, XX. mendeko filosofian, arreta berezia jarriz 1910 eta 1930 bitarteko Britainia Handiko filosofoei, Ortega y Gasset-i, Vienako Zirkuluko kideei eta mugimendu horrekin erlazionaturiko beste batzuei, adibidez, Hans Reichenbach-i eta Karl Popper-i.";break;
case "Ponente_C_Ron":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>".
"<br><br>Sanchez-Ron doktorea Madrilen jaio zen 1949an, fisikan lizentziatu zen Madrilgo Unibertsitate Konplutentsean 1971n eta UNiversity College Londonen doktoratu zen. Gaur egun Zientziaren Historiako irakaslea da Madrilgo Unibertsitate Konplutentsean. Real Academia Espa�olako (2003) eta Academia Europea de Ciencias y Arteseko (Academia Scientiarum et Artium Europaea, 2003) kidea da.".
"<br><br>Sanchez-Ron doktorea 20 liburu baino gehiagoren egilea da, horien artean El origen y desarrollo de la relatividad (1983), La Espa�a posible de la Segunda Rep�blica. La oferta a Einstein de una c�tedra extraordinaria en la Universidad Central (Madril 1933), Thomas F. Glick-ekin lankidetzan (1983), El poder de la ciencia (1992), Miguel Catal�n. Su obra y su mundo (1994), Paul Forman-ekin National Military Establishments and the Advancement of Science and Technologyren editorea (1996), Cincel, martillo y piedra. Historia de la ciencia en Espa�a (siglos XIX y XX) (1999), El mundo de Marie Curie (2000), El Siglo de la Ciencia (2000), azken lan horrengatik jaso zuen Giza Zientzien Ortega y Gasset Saria.".
"<br><br>Artikulu ugari ere idatzi ditu, berrienak 'Larmor versus general relativity', Einstein Studies (1999); 'Einstein, general relativity and the field concept', Relativity and Gravitation in General lanean (1999); eta 'International relations in Spanish physics from 1900 to the Cold War', Historical Studies in the Physical and Biological Sciences 33 (2002).";break;
case "Ponente_A_Stachel":
$strTexto = "<b>Einsteinen amets handia: fondotik independentea den fisika</b>".
"<br><br>Eremu kuantikoko teorikoek azkeneko hirurogei urteak erlatibotasun orokorra eremu kuantikoaren (erlatibotasun berezia) metodoak erabiliz kuantifikatzeko alferrikako ahaleginean eman dituzte. Berrikiago, sokaren teorilariak gero bertatik erlatibotasun orokorra (edo horren bidezko faksimile bat) ondorioztatu ahal izateko TOE (Guztiaren Teoria) bat asmatzen saiatu dira. Hala eremu kuantikoaren teoria estandarra nola soken teoria estandarra lau dimentsiotako (edo soken teoriaren kasuan gehiagotakoa) fondo finkoa duen espazio-denborako egitura baten presentzian sostengatu dira. Erlatibotasun orokorra da fondotik guztiz independentea den teoria fisiko baten lehenengo adibidea non espazio-denborako egiturak entitate dinamiko bihurtzen diren. Egungo fondotik independentea den kuantifikazio-teknika bat sortzeko eta teoria orokorrari aplikatzeko ahaleginek arrakasta badute, fondotik independentea den fisika baten bilaketa Einsteinen ametsik handiena bezala ikusiko da";break;
case "Ponente_C_Stachel":
$strTexto = "<b> Boston University.</b>".
"<br><br>John Stachelek bere doktoretza tesia erlatibitate orokorrari buruz egin zuen. Fisikako irakasle laguntzailea izan zen Lehigh Universityn 1959tik 1996 arte eta University of Pittsburghen 1961etik 1962ra, non fisikako ikerketako kide elkartua izan zen 1962 eta 1964 artean. Ordutik Boston Universityko Fisikako Departamentuko kide da. Fakultateko kide gonbidatua izan da Princeton University, Berkeleyko University of California, Londresko King�s Colege, University of Paris VI, Mexikoko Center for Advanced Studies of the IPN, Varsoviako Institute for Theoretical Physics eta Berlingo Max-Planck-Insitute for the History of Science bezalako beste erakunde batzuetan.".
"<br><br>Orain erlatibotasun orokorraren historiari, Einsteinen lehengo urteei eta beste hainbat gaiei buruzko hitzaldiak babestu dituen Boston University Center for Einstein Studies zuzentzen du. Don Howard-ekin batera Einstein Studies seriearen baterako editorea da eta jada bederatzi liburuki argitaratu dira, lau erlatibotasun orokorraren historiarekin zuzen erlazionatuak.".
"<br><br>Fisika teorikoari eta zientziaren historia eta filosofiari buruzko ia ehun artikulu idazteaz gain Stachel irakaslea The Collected Papers of Albert Einsteinen sortzailea da. Einstein's Miraculous Year ere argitaratu du, Einsteinen 1905eko artikuluen edizio ingeles komentatua, eta dozena bat hizkuntzatara itzuli da. Einstein From 'B' to 'Z', Einsteini buruzko bere artikuluen bilduma baten egilea da eta Going Critical, beste gaiei buruzko artikuluen bi liburukitako bilduma inprentan dago.".
"<br><br>Stachel irakaslea, besteak beste, Conceptual Problems of Quantum Gravity - Proceedings of the 1988 Osgood Hill Conferenceko (Abhay Ashtekar-ekin) editorea ere bada eta bere egungo lanaren zati handi bat gai horrekin erlazionatua dago. ".
"<br><br>Horretaz gain, 'Marx's Critical Concept of Science-ren' eta 'Science and Capitalism-en,' azterlanak idatzi ditu eta gaur egun langileen mugimendu garaikideen arazoekin izan dituen inplikazioak aztertzen ditu. ".
"<br><br>Berriki berari eskainitako Festschift batekin ohoratu dute.";break;
case "Ponente_A_Cohen":
$strTexto = "<b>Bose-Einstein kondentsatuak, materia modu berri bat</b>".
"<br><br>Laser argiarekin atomoak manipulatzeko gaitasuna nabarmen handitu da azken hamarkadetan. Hozteko eta harrapatzeko laser-metodoak harrapaketa magnetikoarekin eta lurrunketa-hoztearekin konbinatzeak gas atomikoak nanokelvin eskalako oso tenperatura baxuetan hoztu eta atomoen arteko batezbesteko distantzia Broglieren uhin-longitudea baino txikiagoa den degenerazio kuantikoko erregimena lortzea ahalbidetzen dute. Broglieren uhin atomikoak gainjarri egiten dira eta interferitu egiten dute, atomo kopuru mikroskopiko bat egoera kuantiko berean kondentsatzen den egoera berriak eraginez. Materia mikroskopikoko uhin horiek koherentzia edo superfluidotasuna bezain harrigarriak diren propietateak azaltzen dituzte. Eremu horretako azken aurrerapenak deskribatuko ditugu bai eta sistema hain diluituetan, ia airea baino 100.000 aldiz diluituagoak daudenetan, orain arte materia kondentsatuan bakarrik ikertu diren eraginak behatu ere.";break;
case "Ponente_C_Cohen":
$strTexto = "<b>Coll�ge de France and Laboratoire Kastler Brossel.</b> ".
"<br><br>Claude Cohen-Tannoudji 1933an jaio zen eta 1962an doktoratu zen Parisko Ecole Normale Sup�rieurean. University of Parisko irakaslea izan zen 1964tik 1973ra. 1973az geroztik Parisko Coll�ge de Franceko Fisika Atomiko eta Molekularreko irakaslea da.".
"<br><br>Cohen-Tannoudji irakasleak 3 liburu eta fisika atomikoarekin eta otika kuantikoarekin zerikusia duten gaiei buruzko 200 artikulu teoriko eta esperimental inguru idatzi ditu: ponpaketa optikoa, argi-aldaketak, atomo jantziaren ikuspegia atomoen EF (erradiofrekuentzia) intentsuko edo eremu optikoetako jarrera ulertzeko, interferentzia kuantikoaren efektuak, erresonantziaren fluoreszentzia, fotoien korrelazioak, zuzenketa erradioaktiboen interpretazio fisikoa, indar erradioaktiboak, laser bidezko hoztea eta harrapatzea, Bose-Einstein kondentsazioa, etab.".
"<br><br>Cohen-Tannoudji irakasleak hainbat errekonozimendu jaso ditu, horien artean Fisikako Nobel Saria 1997an Steven Phips-ekin eta Steven Chu-rekin banatuta.";break;
case "Ponente_A_Yndurain":
$strTexto = "<b>Erlatibitatea, fotoiak eta partikulak</b>".
"<br><br>1905ean, Albert Einsteinek XX. mendeko zientziaren garapenerako oinarrizko hiru artikulu idatzi zituen: mugimendu browndarrari buruzko artikulua bat, atomoak kontatzeko metodo oso zehatz bat ematen zuena eta materiaren egitura behin betiko ezartzea ahalbidetu zuena; erlatibitatearen teoria garatu zuen artikulu bat, eta horren ondorio batzuk aztertuko ditugu; eta azkenik, argiak (ordura arte bibraziotzat hartu zena), efektu fotoelektrikoan, partikula gisa jokatzen zuela ezartzen zuen artikulua eta berak partikula horiei Lichtquanten deitu zien eta egun fotoi gisa ezagutzen direnak dira. Azken aurkikuntza horrek, agian oinarrizkoenak, beste gauza batzuen artean, mekanika kuantikoa garatzea eragin zuen.".
"<br><br>Einsteinek erlatibitatearen teoria formulatzerakoan, Lorentz eta Poincar� gaindituz, izan zuen intuizio bikaina eztabaidatuko dugu; eta fotoiaren kontzeptua sartzea, oraindik ere proposamen ausartagoa izan zena, esaten baitu zerbait -argia- aldi berean uhina eta partikula izan daitekeela, hogei urte beranduago Heisenberg-en ziurgabetasunaren printzipioarekin bakarrik argitu ahal izan zen paradoxa.".
"<br><br>Einsteinen aurkikuntzen eragin batzuk jorratuko ditugu, horien artean, E=mc^2 ekuazioarena, agian fisikako garrantzitsuena; eta erlatibitatearen eta mekanika kuantikoaren arteko jokoarena, elkarrekintza elektromagnetikoentzat gizakia sortzeko gai izan den teoriarik zehatzena sortu baitu, hain zehatza da ezen bere kalkuluek, fotoika neurtutako elkarrekintzetarako, hamaika zifra esanguratsutarainoko teoriaren eta esperimentuaren arteko adostasuneko zehaztasuna inplikatzen dute.";break;
case "Ponente_C_Yndurain":
$strTexto = "<b>Universidad Aut�noma, Madrid.</b> ".
"<br><br>Benaventen (Zamora) jaio zen 1940ko abenduaren 23an eta Matematiketan lizentziatu eta doktoratu zen Zaragozako Unibertsitatean 1962an eta 1964an, hurrenez hurren. Fisika Teorikoko katedraduna da 1968az geroztik eta Madrilgo Unibertsitate Autonomoko katedra du1972az geroztik, bertako dekano eta errektoreorde izan ondoren.".
"<br><br>Ondorengo erakundeetan Associeted Reseracher, Fellow, Irakasle-bisitari edo irakasle izan da: Parisko Unibertsitateak (Orsay), Venezuelako Centrala, Groningen, Marseilla, Michigan, La Plata, New York University; bai eta Bogotako Centro Interamericano de Fisika Teorican, E. Sch�dinger Institutuan (Viena), Centre d�Energie Nucl�aire de Saclay, NIKHEFean (Amsterdam), Brookhaven National Laboratoryan (AEB) eta CERNen (besteak beste).".
"<br><br>New York Academy of Sciences eta American Association for the Advancement of Scienceko kide gonbidatua izan da, Europako Fisikako Sozietateko High Energy Physics Boardeko kide (sei urtez) eta CERNeko Zientzia-Politikako Batzordeko kide (sei urtez).".
"<br><br>Yndurain irakasleak hainbat izendapen eta sari ditu eta horien artean azpimarratzekoak dira Europako Fisikako Sozietateko Kide Sortzaile gisa izendatua izatea. Real Academia de Ciencias de Espa�ako eta Academia Eupaeako kidea.".
"<br><br>Italiako Errepublikako Cavaliere Ufficiale nell�Ordine al Merito; Real Academia de Cienciaseko zientzia-ikerketaren Saria; Real Socieda Espa�ola de F�sicako Urrezko Medaila; La Platako (Argentina) Unibertsitateko ostalari agurgarri izendatua.".
"<br><br>Honako zientzia-liburuen egilea da: Quantum Chromodynamics, Springer Verlag (1983), errusierara itzulia: Kvantovaya Khromodinamika, Mir argitaletxea, 1986. Bigarren edizio zuzendu eta zabaldua: The Theory of Quark and Gluon Interactions, Springer Verlag, (1993). Ingelesezko hirugarren edizioa, zuzendua eta zabaldua: Springer Verlag, (1999). Mec�nica Cu�ntica, Alianza argitaletxea (1988); bigarren edizioa, 2003 (Ariel argitaletxea). ".
"<br><br>Mec�nica Cu�ntica Relativista, Alianza argitaletxea (1990); Ingelesezko edizioa, zuzendua eta zabaldua: Relativistic Quantum Mechanics: with an Introduction to Field Theory, Springer Verlag 1996.".
"<br><br>Zientziako ehun lan baino gehiagoren egilea edo baterako egilea da, gehienak Energia Altuen eta Oinarrizko Partikulen Fisikakoak eta batzuk Fisika Matematikakoak, Materia Kondentsatuaren Fisikakoak eta Fisika Nuklearrekoak. Zabalkundeko hainbat artikuluren egilea da Investigacion y Ciencia, Arbor, La Revista de Occidente eta beste hainbat aldizkaritan eta egile kolektiboak dituzten liburuetan ere egin ditu ekarpenak.".
"<br><br>Zabalkundeko liburuen egilea:Teor�as unificadas y constituyentes fundamentales de la materia, Espasa Calpe, 1988; Electrones, neutrinos y quarks, Cr�tica argitaletxea, 2001; y Los desaf�os de la ciencia entsegu-bildumarena, Cr�tica argitaletxea, 2003. ".
"<br><br>�Qui�n Anda Ah� ?, Debate argitaletxea, 1997, 1998ko 'La Golondriz' umore adimentsuaren saria irabazi zuen espekulazio-liburuaren egilea.";break;
case "Ponente_A_Zeilinger":
$strTexto = "<b>Einstein eta egungo mundu kuantikoa.</b>".
"<br><br>Einsteinek fisika kuantikoa kritikatu zuen, batez ere zorteak gertakari kuantiko indibidualetan zuen paper berriagatik eta endredo kuantikoaren eta tokiko munduaren ikuspegi errealistaren arteko gatazkagatik. Gaur egun, ausazkotasuna eta endredoa sistema kuantiko indibidualetan erabiltzen den informazioaren teknologia berrian ezinbesteko elementuak bihurtu dira. Hitzaldi honetan kriptografia kuantikoko eta teleportazio kuantikoko azken esperimentuetaz hitz egingo dugu. Endredoan oinarritzen den teleportazio kuantikoan, gertakari indibidualen aleatoriotasunak gako seguru bat sortzeko balio du. Teleportazio kuantikoan, endredoak jatorrizkoaren egoera transferitzeko kanal kuantiko bat eskaintzen du. Kontuan izanik esperimentuen emaitzek guztiz egiaztatzen dituztela aurreikuspen kuantikoak, Einsteinek planteatu zituen galdera filosofikoak oraindik erantzunaren zain daude. Esaten da informazioaren ideiak ezinbesteko papera duela teoria kuantikoaren oinarrietan.";break;
case "Ponente_C_Zeilinger":
$strTexto = "<b>University of Vienna</b> ".
"<br><br>Anton Zeilinger Vienan jaio zen 1945ean. Fisika eta Matematikak ikasi zituen bere jaioterrian eta 'Neutron Depolarization in Dysprosium Single Crystals' tesiarekin doktoratu zen H. Rauch irakaslearen tutoretzapean. Postu desberdinak izan ditu hainbat herrialdetan eta horien artean aipatzekoa da ikerlari gisa Grenobleko (Frantzia) Laue-Langebin Institutean (1974-1989), MITen (1977-1983), University of Munichen (1988-1989) eta University of Innsbrucken (1977-1983) egin zituen egonaldiak. 1999tik egun bitarte Vienako Department of Experimental Physicsen dago. Bere teletransportazioari buruzko lana askotan goraipatu dute.".
"<br><br>Zeilinger irakaslea Austrian Academi of Scienceseko, American Physical Societyko eta Academia Scientiaum eta Artium Europaeako kide da. Bere curriculuma ondorengo helbidean kontsulta daiteke.<br><br><a href='http://www.quantum.univie.ac.at/zeilinger' target='_blank'>www.quantum.univie.ac.at/zeilinger/.</a>";break;
case "Ponente_A_Pascual":
$strTexto = "<b>Einstein eta argi kuantuak</b>".
"<br><br>Albert Einsteinen argi-kuantari buruzko ekarpenik garrantzitsuenak eztabaidatu nahi dira.".
"<br><br>Lehenengoa 1905eko lan ezaguna da, bertan efektu fotoelektrikoa azaltzen du (plaka metaliko bat erradiazio elektromagnetikoarekin argiztatzen denean metalak elektroiak igortzen ditu) eta ondorioztatzen du frekuentzia jakin baten erradiazio elektromagnetiko monokromatikoa energia-kuanten kopuru finitu batek, lokalizatuak eta independenteak, Planck-en konstantea frekuentziarekin biderkatuta lortzen denaren magnitude berekoak, osatuko balu bezala dela. 1921ean, Fisikako Nobel Sarien izendapenetan, honakoa esan zuten: Fisika teorikoari eskaini dion zerbitzuagatik eta bereziki efektu fotoelektrikoaren legea aurkitu izanagatik".
"<br><br>Einsteinen bigarren ekarpen handia 1917an argitaratu zen erradiazio elektromagnetikoarekin elkarrekintzan dagoen gas atomiko baten oreka termikoa ikertzen duen lan bat da, non igorpen espontaneo eta induzituaren eta absortzio induzituaren koefizienteen arteko erlazioak lortzen zituen. Lan horretan aurkitu zuen energia jakin batekin sortzen ziren argi kuantak induzituta igortzeko beren energia argiaren abiadurarekin zatituta lortzen zela. Lan hori gaur egun laserraren oinarri teoriko gisa aitortzen da.";break;
case "Ponente_C_Pascual":
$strTexto = "<b>Universidad Central, Barcelona</b> ".
"<br><br>Pedro Pascual Sevillan jaio zen 1934ko apirilaren 27an.<br>Fisikan lizentziatua eta doktorea da.<br>Fisika Teorikoko katedraduna izan zen 1963tik 2000 bitarte, Valentziako eta Bartzelonako <br>Unibertsitateetan.<br>Chicagoko Unibertsitatean (22 hilabete), CERNean (25 hilabete) eta Marsellako Unibertsitatean (5 hilabete) lan egin du.<br>GIFTeko (Fisika Teorikoko Unibertsitatearteko Taldea) zuzendaria (1970-1974)<br>Energia Altuen Estatuko Planaren lehenengo kudeatzailea (1984-1989)<br> 'Committee for the European Development of Science and Technology'ko (CODEST) kidea. Europako Erkidegoetako Batzordearen aholku-batzordea (1986-1992)<br>Ikerketa-Jarduera Balioztatzen duen Estatuko Batzorde Orokorraren lehenengo koordinatzailea (1989-1993)<br>Iberdrola S. A.ren zientzia-aholkularia (1992-2002)<br> 'Centro de CIencias de Benasque' Fundazioko sortzaile, zuzendari-kudeatzailea (1995- )<br> 'Distinci� de la Generalitat de Catalunya per a la Promoci� de la Recerca'ko lehenengo antolatzailea eta epaimahaiko lehendakaria (2000-2003)<br>Bere lan-eremu nagusia eremuen teoria kuantikoa da eta horren inguruan hainbat lan argitaratu ditu.<br>Argitaratu dituen libururik garrantzitsuenak honakoak dira:<br> 'Mec�nica Cu�ntica'. A. Galindo y P. Pascual. Alambra argitaletxea. XV orrialde + 749 orrialde. Madril, 1978.<br> 'QCD: Renormalization for the Practitioner'. P. Pascual y R. Tarrach. Lecture Notes in Physics, 194. Springer Verlag. 277 orrialde. Berlin, 1984.<br> 'Problemas de Mec�nica Cu�ntica'. A. Galindo y P. Pascual. Eudema argitaletxea. 615 or. Madril, 1989.<br> 'Mec�nica Cu�ntica'. A. Galindo y P. Pascual. Eudema argitaletxea. I. liburukia, 501 orrialde eta II. liburukia, 441 orrialde. Madril, 1989. Aipaturiko lehenengo obraren bertsio zabaldu eta zuzendua da. Badago ingeleseko itzulpena: 'Quantum Mechanics'. A. Galindo and P. Pascual. Springer-Verlag. I. liburukia XVI+417 eta II. Liburukia XVI+374. Berlin, 1990. Italierara itzutlzeko eskubideak Nichola Zanichelli argitaletxeak erosi zituen. <br><br>Jasotako sarien artean honakoak aurkitzen dira:<br>Real Sociedad Espa�ola de F�sicaren Ikerketa-Merituko medaila. (1973)<br> 'Santiago Ramon y Cajal 1985' Estatuko Zientzia-Ikerketako Saria.<br> 'Cambio 16' aldizkariak 'urteko zientzialari' izendatu zuen. (1987)<br> 'Honoris Causa Doktore' izendatu zuen Valentziako Unibertsitateak. (1987)<br> 'Alfontso X.a jakintsuaren Ordena Zibilaren Gurutze Handia' eman zioten. (1995)<br> 'Medalla d'Or al M�rit Cient�fic de la Fundaci� Catalana per la Recerca'. (1996)<br> 'Insignia de Ouro da Universidade'. Santiago de Konpostelako Unibertsitatea. (1999)";break;
case "Ponente_C_Lucas":
$strTexto = "<b>Universit� de Namur, Belgium</b>.".
"<br><br>Lucas irakaslea 1936an jaio zen Liejan (Belgika). Materia Kondentsatuen Fisikan doktoratu zen University of Li�gen 1966an. Belgian National Science Foundationeko Kide Ikerlari gisa, Azalerako Fisiketan espezializatu, Battelle Instituten, (Columbus, Ohio) doktoretza ondorengo postu bat izan zuen (67-68) eta Ikerlari Bisitariko postua ICTPn, Triesten (71) eta ESAn, Nordwijk (72). Lucas irakaslea izan da Namur Universityko Fisikako katedraduna 1974az geroztik (2002an erretiratu zen). Urte sabatikoak pasa ditu Yorktowneko IBMn (78) eta Almadengo IBMn (87). 1985ean Belgikako Francqui saria jaso zuen, egoera solidoen kitzikapenen elektroi-espektroskopioari egindako ekarpenengatik eta 2001ean Wernaers saria, biologia estrukturalaren irakaskuntzari egindako ekarpen orijinalengatik. American Physical Societyko kide da, Acad�mie Royale de Belgiquekoa, Academia Europaeakoa eta European Acaemy of Sciences, Arts and Lettersekoa.";break;
case "Ponente_A_Lucas":
$strTexto = "<b>Einstein eta giza erlazioen bilakaera aldatu zuten difusio fenomenoak</b>".
"<br><br>Difusio linealaren ekuazioa, bereziki Einsteinen izenarekin lotzen dena, oinarrizko matematikako 'zirriborroa' izan da mundua aldatu duten hainbat aurkikuntzen oinarrian. Horietariko asko, egoera historiko askoren artean aukeraturikoak, hitzaldi honetan gogoratuko ditugu: lehenengo komunikazio globala telegrafoarekin, lurrak zenbat urte dituen, atomoen tamaina, DNA erreplikatzen den modua eta bonba atomikoa.";break;
case "Ponente_C_Flores":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>.".
"<br><br>Cartagenan jaio zen (1939). Bideetako<br>Ingeniaria (1963), Fisikaria (1966) eta <br>Ingeniaritzan doktorea da (1970). Materia<br>Kondentsatuaren Fisikako Katedraduna (1975,<br><br>Universidad Aut�noma de Madrid). UAMeko <br><br>Departamentuko Zuzendaria eta Materialen <br><br>Zientziako Institutuko Zuzendaria (1980 eta <br><br>2004 arteko epe alternatiboak).<br><br>320 artikulu baino gehiago argitaratu ditu <br><br>nazioarteko aldizkarietan, bai eta hainbat liburu ere.<br><br>22 doktorego-tesi zuzendu ditu.<br><br>Honako sariak jaso ditu:<br><br>Real Sociedad Espa�ola de F�sicaren Urrezko Domina (1991);<br><br> American Physical Societyren Fellowshipa (1987);<br><br> Iberdrola Saria (1993);<br><br> Blas Cabrera Fisikako Premio Nazionala (2001);<br><br> Bideetako Ingeniarien Elkargoaren domina (2004);<br><br> 'Laurel de la Regi�n de Murcia' (1994); <br><br> 'Premio Alumbre' (Fundaci�n Emma Egea, 2002) eta 'Premio la Verdad de Murcia en Ciencias' (2003) ere izan da.";break;
case "Ponente_A_Flores":
$strTexto = "<b>Materia eta Forma</b>".
"<br><br>Einsteinen '<i>Annus Mirabilis</i>ean' (1905) bere argitalpenetariko bostek XX. mendeko fisikaren norabidea aldatu zuten. Nahiz eta erlatibitateari buruzko bere lana eta denboraren eta espazioaren kontzeptuei buruzko eztabaida guztion buruan iraultzaileena bezala azaltzen den, erradiazioaren hipotesi kuantikoei eta materiaren izaera atomikoari (mugimendu browndarra) buruzko ekarpenekin mende berriko fisikarako bidea ireki zuten. Artikulu horiekin batera, Bose-Einstein estatistikari ondoren egin zizkion ekarpenek gure 'materia' kondentsatua ulertzeko moduari 'forma' ematen dionaren lehen irudia egin zuen.".
"<br><br>Garapen hori bosoien gasaren trantsizio-aldi gisa uler ditzakegun adibide batzuekin irudikatuko dut (supereroankortasuna eta superfluidotasuna). Egun simulazio numeriko mekano-kuantikoetan nabarmen erabiltzen den 'materia' kondentsatua ulertzeko 'modua' ere komentatuko dut. Ildo horretan, nanoteknologia-mailan mikroskopikoa dena atomikoa denarekin batzen nola hasi garen azaltzeko adibide batzuk jarriko ditut. ";break;
case "Menu_Patrocinadores":
$strTexto = "<table width=100% border=0><tr>".
"<td align=center><a href='http://www.ehu.es/' target='_blank'><img src=images/upv.jpg border=0><br>&nbsp;<u>Euskal Herriko Unibertsitatea</u></a></td>".
"<td align=center><a href='http://www.kutxa.net' target='_blank'><img src=images/kutxa.jpg border=0><br>&nbsp;<u>".sEscribir("Kutxa")."</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.hezkuntza.ejgv.euskadi.net' target='_blank'><img src=images/gob1.jpg border=0><br>&nbsp;<u>Eusko Jaurlaritza<br>Hezkuntza, Unibertsitate<br> eta Ikerketa Saila</u></a></td>".
"<td align=center><a href='http://www.industria.ejgv.euskadi.net' target='_blank'><img src=images/gob2.jpg border=0><br>&nbsp;<u>Eusko Jaurlaritza<br>Industria, Merkataritza<br> eta Turismo Saila</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.gipuzkoa.net' target='_blank'><img src=images/foro.jpg border=0><br>&nbsp;<u>Gipuzkoako Foru Aldundia</u></a></td>".
"<td align=center><a href='http://www.donostia.org' target='_blank'><img src=images/ayunta.jpg border=0><br>&nbsp;<u>Donostiako Udala</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.csic.es' target='_blank'><img src=images/csic.gif border=0><br>&nbsp;<u>Ikerketa Zientifikoko<br>Kontseilu Gorena</u></a></td>".
"<td align=center><a href='http://www.naturgas.es' target='_blank'><img src=images/LogoNaturgas.jpg border=0><br>&nbsp;<u>Naturgas</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.fundacion.telefonica.com' target='_blank'><img src=images/LogoTelefonica.jpg border=0><br>&nbsp;<u>Fundaci�n Telef�nica</u></a></td>".
"<td align=center></td></tr></table>";break;
case "Menu_ComiteOrganizador":
$strTexto="<b>Antolakuntza Batzordea</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Lehendakaria: </b> Alberto Galindo (Madrileko Complutense Unibertsitateko Fisika Teorikako Katedraduna).".					
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Lehendakarikidea: </b>Pedro Miguel Echenique (DIPC-eko Lehendakaria), Juan Colmenero (DIPC-eko Zuzendari Orokorra) ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Koordinatzaileak:</b> Unai Ugalde (Euskal Herriko Unibertsitatea), Juan Jos� Iruin (Euskal Herriko Unibertsitatea)";break;
case "Menu_Contacto":
$strTexto= "<b>IDAZKARITZA TEKNIKOA: TISA CONGRESOS</b>".
"<br><br>Erref. Einstein Kongresua".
"<br>Askatasunaren Hiribidea,  17-5. sol. - 20004 Donostia-San Sebasti�n".
"<br>Tel. 943 425420 ".
"<br>Faxa. 943 422124 ".
"<br>Helbide elektronikoa: <a href='mailto:tisa-congresos@infonegocio.com'><u>tisa-congresos@infonegocio.com</u></a> ";break;
case "GobiernoVasco": $strTexto="Basque Government";break;
case "Kutxa": $strTexto="Kutxa";break;
case "UPV": $strTexto="University of the basque country";break;
case "Diputacion": $strTexto="Provincial Government of Gipuzkoa";break;
case "Ayuntamiento": $strTexto="San Sebastian City Council";break;
}
break;
case "uk":
switch($istrTexto){
case "CAST": $strTexto="";break;
case "ENGL": $strTexto="";break;
case "EUSK": $strTexto="";break;
case "5Septiembre": $strTexto="September 5";break;
case "6Septiembre": $strTexto="September 6";break;
case "7Septiembre": $strTexto="September 7";break;
case "8Septiembre": $strTexto="September 8";break;
case "AlbertEinstein": $strTexto="Albert Einstein";break;
case "Alojamientos": $strTexto="Accommodation";break;
case "Becas": $strTexto="Grants";break;
case "ComiteOrganizativo": $strTexto="Organising Committee";break;
case "ComoInscribirse": $strTexto="How to Register";break;
case "ComoLlegarASanSebastian": $strTexto="Visiting <br>San Sebastian";break;
case "Contacto": $strTexto="Contact";break;
case "Copyright": $strTexto="Copyright";break;
case "Culminacion": $strTexto="Culmination of Relativity";break;
case "DIPC": $strTexto="DIPC";break;
case "DossierDePrensa": $strTexto="Dossier de prensa";break;
case "ElPaisVasco": $strTexto="The basque country";break;
case "EnTotal": $strTexto="at all";break;
case "EventosParalelos": $strTexto="Parallel events";break;
case "FormularioDeAcreditacion": $strTexto="Formulario de acreditaci�n";break;
case "GaleriaDeImagenes": $strTexto="Galer�a de im�genes";break;
case "Home": $strTexto="Home";break;
case "ImpactoDeLaObra": $strTexto="Impact of the Work";break;
case "InformacionGeneral": $strTexto="General information";break;
case "Inscripciones": $strTexto="Registration";break;
case "Introduccion": $strTexto="Introduction";break;
case "Kutxaespacio": $strTexto="Exhibition";break;
case "LaCiudad": $strTexto="The City";break;
case "LaSede": $strTexto="The Venue";break;
case "Links": $strTexto="Links";break;
case "LosCincoTrabajosDeEinstein": $strTexto="Einstein's Papers";break;
case "VerDiferido": $strTexto="Congress<br>online";break;
case "VerDiferidoURL": $strTexto="http://www.digitalak.com/einstein/einsteineng.html";break;
case "Patrocinadores": $strTexto="Sponsors";break;
case "Ponentes": $strTexto="Speakers";break;
case "Presentacion": $strTexto="Presentation";break;
case "Programa": $strTexto="Programme";break;
case "SalaDePrensa": $strTexto="Press room";break;
case "Significado": $strTexto="Significado y transcendencia para la Sociedad Vasca";break;
case "SobreElEvento": $strTexto="Sobre el evento";break;
case "Subir": $strTexto="Top";break;
case "UltimasNoticias": $strTexto="�ltimas noticias";break;
case "UsuarioIncorrecto": $strTexto="Usuario incorrecto";break;
case "VidayObra": $strTexto="Life and Work";break;
case "Visualizando": $strTexto="Viewing";break;
case "Volver": $strTexto="Back";break;
case "CAST": $strTexto="CAST";break;
case "ENGL": $strTexto="ENGL";break;
case "EUSK": $strTexto="EUSK";break;
case "Ponentes": $strTexto="Speakers";break;
case "Ponente1": $strTexto="Quantum Information Theory: Challanges and Perspectives.";break;
case "Ponente2": $strTexto="Bose Einstein Condensates.: a New Form of Matter ";break;
case "Ponente3": $strTexto="Matter and Form.";break;
case "Ponente4": $strTexto="1.Einstein and time. <br>2.Black Holes";break;
case "Ponente5": $strTexto="What is Unifield Theory?";break;
case "Ponente6": $strTexto="Brownian Motion and Molecular Motors";break;
case "Ponente7": $strTexto="Pulsar Physics and testing Einstein.";break;
case "Ponente8": $strTexto="Einstein as Inventor of Physics and of Self.";break;
case "Ponente9": $strTexto="Steps Towards Complex Matter: Information, Self Organization and Adaptation in Chemical Systems.";break;
case "Ponente10": $strTexto="Einstein, Picasso: Space, Time and the Beauty that Causes Havoc.";break;
case "Ponente11": $strTexto="Einstein and the Light Quanta.";break;
case "Ponente12": $strTexto="Origin and Evolution of the Universe: the challenges of Cosmology.";break;
case "Ponente13": $strTexto="Nano is Different.";break;
case "Ponente14": $strTexto="Einstein and Phylosophy in the 20th Century.";break;
case "Ponente15": $strTexto="Einstein�s Greatest Dream � A Background � Independent Physics.";break;
case "Ponente16": $strTexto="1. The Confrontation between General Relativity and Experiment<br>2. Was Einstein Right?";break;
case "Ponente17": $strTexto="Relativity, Photons and Particles.";break;
case "Ponente18": $strTexto="Einstein and the Quantum World Today.";break;
case "Ponente19": $strTexto="Einstein and Diffusion Phenomena that Changed the Course of Human Affairs.";break;
case "InfoGeneral_Introduccion":
$strTexto="<b>Presentation</b> ".
"<br><br>The <a href='http://dipc.ehu.es/' target='_blank'><u>Donostia International Physics Center</u></a> Foundation (DIPC), in the World Year of Physics, is taking part in the commemorations to mark the centenary of Albert Einstein�s <i>Annus Mirabilis</i>.".
"<br><br>This year is the centenary of an astonishing year for universal science: 1905. A year in which an unknown patent civil servant in Berne, published five pieces of work that changed the course of physics, science, and humanity. The commemoration of Einstein�s <i>Annus Mirabilis</i> stresses the importance of science as a driving force for knowledge and a catalyst for technological and socio-economic development.".
"<br><br>The figure of Einstein also represents an excellent example for the younger generations. His creativity and intuition guided him in his dream of understanding the universe in a different way.".
"<br><br>We are preparing a series of events to commemorate Einstein�s <i>Annus Mirabilis</i> that aim to inform society about research activity at the very highest level. We�d like to invite you to study our <a href='index.php?pg=1&opcion=20' target='_parent'><u>programme</u></a>".
"<br><br>The guest researchers form part of the world elite. The events we have programmed will include plenary and thematic lectures, as well as exhibitions to introduce Einstein�s figure to children and young people.".
"<br><br>Registration for the events will be free of charge. The organisers will be awarding a number of grants to cover the costs of attending the events.".
"<br><br><b>Pedro Miguel Echenique ".
"<br>President of DIPC</b>";break;
case "Info_PaisVasco":
$strTexto = "<b>The basque country</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Nature:</b> ".
"<br>The basque Country is a densely populated industrial region, but it also has extensive natural resources, with rich ecosystems that enjoy special protection. Nature parks, biosphere reserves and protected biotopes ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Culture:</b> ".
"<br>Basque cultural life is currently thriving and become one of the major galvanising elements of this society. Museums, monuments, festivals and other events. ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Leisure:</b> ".
"<br>The diversity of the region allows visitors to the basque Country to choose from a complete and varied range of leisure activities. Active tourism, relaxation, shopping. ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Eating out:</b> ".
"<br>Basque cuisine is considered to be one of the best in the world. ".
"<br><br>Visitors agree on the excellent food to be had in merenderos, restaurants, asadores and sidrer�as. ".
"<br><br>Traditional Basque cooking entails relatively simple preparation of high quality products. Seafood is one of the staples, but other favourites include lean tasty meat dishes, beans, dairy produce such as cheese and junket and many other delicacies.".
"<br><br><table border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom> ".
"<img src='images/ico_info.jpg'> <b>Information:</b> ".
"<br><br>� General information: <a href='http://www.paisvasco.com' target='_blank'><u>www.paisvasco.com</u></a> ".
"<br>� Basque Government: <a href='http://www.euskadi.net' target='_blank'><u>www.euskadi.net</u></a> ".
"<br>� Tourist Information: <a href='http://www.euskaditurismoa.net' target='_blank'><u>www.euskaditurismoa.net</u></a> ".
"</center></td></tr></table>";break;
case "Info_LaCiudad":
$strTexto= "<b>The City</b> ".
"<br><br>Donostia-San Sebasti�n (<a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>see map</u></a>) is the capital of Gipuzkoa and one of the most striking cities in Spain. Its remarkable position on the shores of the Bay of Biscay and the beauty of the surrounding area, have long drawn tourists from Spain and abroad.".
"<br><br><center><img src='images/3.jpg'> &nbsp;&nbsp; <img src='images/4.jpg'></center> ".
"<br><br>The city combines past and present without losing any of the essence that has always characterised it. With the passing of time, traditions have been preserved which today live happily alongside major new developments. It's an ideal location for relaxing, sightseeing and having fun, but it�s also a modern business centre whose most outstanding symbol is <a href='index.php?pg=4&opcion=7'><u>the Kursaal Conference Centre and Auditorium.</u></a>.".
"<br><br>Take a walk through the city streets or along one of the city�s beaches; taste the pintxos (tapas) typical of the Old Quarter; visit museums, the aquarium, and numerous arts centres; relax with a thalassotherapy session or take in the magnificent views from the two hills overlooking the bay, Urgull and Igeldo; spend an entertaining afternoon at the race course; or enjoy the excellent cuisine to be had anywhere in the city.".
"<br><br>And business visitors will find a hospitable city with an unmatched infrastructure of accommodation, restaurants and transport.".
"<br><br>San Sebastian is also an ideal starting point for travelling to other spots in the basque Country and France, such as Pamplona, Bilbao and Vitoria; Getaria, Hondarribia, Tolosa and the sanctuary at Aranzazu; the charm of St Jean de Luz in the French Basque Country.".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Information on San Sebastian:</b>".
"<br>C.A.T. (Centro de Atracci�n y Turismo - Tourist Office): at Calle Reina Regente, close to the Boulevard, in the Victoria Eugenia Theatre building (tel. 943.481166).".
"<br><br>Information ".
"<br><br>Gipuzkoa: <a href='http://www.sansebastianturismo.com/index.htm' target='_blank'><u>www.sansebastianturismo.com</u></a>".
"<br><br><center><img src='images/5.jpg'> &nbsp;&nbsp; <img src='images/1.jpg'></center> ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Eating out-Where to Eat:</b>".
"<br>On thing San Sebastian is rightly famous for is the wonderful quality of its food. And you don't have to spend a fortune, either. For a modest price, you can sample some exquisite delicacies in tapas bars and sidrer�as. ".
"<br><br>However, if you want to give yourself a treat, here's a list of some of the most famous restaurants in the city and their chefs. ".
"<br><br><table width=90% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td>".
"<table width=100% align=center border=0 cellspacing=0><tr><td class=textom width=50%> ".
"� <b>Arzak</b> (Juan Mari Arzak)<br>Alto de Miracruz, 21 <br>943.278465 - 943.285593	".
"<br><br>� <b>Akelarre</b> (Pedro Subijana)<br>Paseo Padre Orkolaga, 56<br>943.212052".
"<br><br>� <b>Martin Berasategi</b> (Martin Berasategi)<br>Loidi, 4 - Lasarte	943.366471".
"</td><td class=textom width=50%>".
"� <b>Casa Nicolasa</b> (Jos� Juan Castillo)<br>Aldamar, 4<br>943.421762, 943.420755".
"<br><br>� <b>Urepel</b> (Tom�s Almandoz)<br>Paseo Salamanca, 3<br>943.42.40.40".
"<br><br><b>� Panier Fleuri</b> (M� Jes�s Fombellida) <br>Paseo Salamanca,1	943.42.42.05 ".
"</td></tr></table></td></tr></table>".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b> Sidrer�as (Cider houses):</b> ".
"<br><br><table width=90% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom> ".
"<b>� ALBIZTUR</b>	Matia, 52 (Antiguo) Tel: 943 21 18 01 <br> Special menus: 15.63� - 21.04� � la carte Menu: 24-30� ".
"<br><br><b>� AMEZTI</b> P� Cristobal Balenciaga, 65 (Igeldo)<br>Tel: 943.21.73.23	 ".
"<br><br><b>� BARKAIZTEGI</b>	Camino Barkaiztegi, 42 (Martutene)<br>Tel: 943 45 55 01<br>  � la carte: 22.50� ".
"<br><br><b>� DONOSTIARRA</b>	Embeltr�n, 5 (Old Quarter)	Tel: 943 42 04 21 <br>Menu of the Day: 24.50�.	 � la carte Menu: 20� - 40�. ".
"<br><br><b>� GARBERA</b>	Ctro. Cial. Garbera Tel: 943:39.43.58 ".
"<br><br><b>� IGELDO</b>	P� Orkolaga, 8 (Igueldo) Tel: 943.21.32.51 � la carte: 24�- 25� ".
"<br><br><b>� ITXAROPENA</b>	Embeltran 16 	Tel: 943.42.45.76<br> Sidrer�a set menu: 21� ".
"<br><br><b>� IZAGIRRE</b>	Bidarte Berri A�orga	Tel: 943.36.14.70 ".
"<br><br><b>� KUKUA</b>	Avda. Alcalde Jose Elosegi, 21 (Gros)<br>Tel: 943 27 16 29	 � la carte: 27� ".
"<br><br><b>� URKIOLA</b>	Camino de Igara, 37	Tel: 943.21.01.68	<br> � la carte: 21� - 25� ".
"<br><br><b>� LA CEPA</b>	San Bartolom�, 30-32 (Centre) 	Tel: 943 46 03 33	Menu of the Day: 8� <br> � la carte: 19� ".
"<br><br><b>� ZINGI - ZANGA</b>	Florida Kalea, 54 (Hernani) 	Tel: 943 33 03 97 ".
"</td></tr></table>".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Fiestas and Festivals </b> ".
"<br><br><b>� 20 January:</b> St. Sebastian's Day. For local people, the most important event in the calendar is their local patron saint's day, when the famous 'Tamborrada' or drum tattoo, is celebrated right through the day from midnight to midnight.".
"<br><br><b>� Carnavales [Mardi Gras]:</b> February".
"<br><br><b>� 23 June.</b> Bonfire's on St. John's Eve.".
"<br><br><b>� July:</b> Horse races at the racecourse in Zubieta.".
"<br><br><b>� July</b>, second fortnight: Jazzaldia, International Jazz Festival .".
"<br><br><b>� August:</b> Music Fortnight".
"<br><br><b>� 'Semana Grande':</b> August, the week of 15 August, from Sunday to Sunday. The Semana Grande or Aste Nagusia (Big Week) fiesta runs from Sunday to Sunday of the week of 15 August, with an international firework contest every night at 11 pm, all kinds of music in the streets, sports events, including the Cl�sica San Sebastian-San Sebastian cycle race, bullfights and a well-stocked range of other events.".
"<br><br><b>� September, first Sunday to second Sunday:</b> Euskal Jaiak. Basque fiestas, with a programme full of activities related to Basque culture, including singer-songwriters, groups, classical music, dance, rural sports, spectacles, etc. The famous Estropadak (boat races) are held on both the first and second Sunday in the La Concha bay.".
"<br><br><b>� September, second fortnight:</b> International Film Festival.".
"<br><br><b>� 21 December: </b> St. Thomas' Day, with a market with a strong rural atmosphere.".
"<br><br><center><img src='images/2.jpg'></center> ".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b> Guide to Services </b> ".
"<br><br>� <b>Shopping:</b> Traditionally, shoppers in search of clothes tend to gravitate towards the centre, where the numerous specialist shops can meet all your needs. For craftwork, accessories, souvenirs, etc., try the Old Quarter. If you want to buy food, there are three large hypermarkets outside the city (Garbera, Alcampo and Pryca - Garbera is the nearest), but you'll need a car to get there.".
"<br><br>� <b>Touring the City</b>".
"<br><br>� <b>Txu-txu Train:</b> Deaprts from the City Hall, travels along the La Concha Bay, El Antiguo and the centre of San Sebasti�n before returning to the City Hall. Tel. 943.422973/669.114143. Fax 943.481172.".
"<br><br>� <b>Tourist Bus.</b> Tel. 630.708735.".
"<br><br><br><img src='images/ico_bolita_on2.jpg'> <b>Additional Information</b>".
"<br><br>� <b>Thalassotherapy:</b> Termas La Perla (Paseo de la Concha, s/n, 943.458856). ".
"<br><br>� <b>Taxis:</b> ".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vallina (Tel: 943.404040) ".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Easo (Tel: 943.464646).".
"<br><br>� <b>Banks:</b> Banks open on weekdays from 8.30 am to 2 pm. Saturdays from 9 am to 1 pm (except for summer months). Some branches also open from 4 pm to 5.30 pm ".
"<br><br>� <b>Useful phone numbers:</b>".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emergencies (Sos Deiak): 112".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DYA (Road Assistance): 943.464622".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacies: 943.429117".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radio Taxi Easo: 943.467666".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Renfe - Information:: 943.283599".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eusko Tren: 943.450131".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hondarribia Airport: 943.668500".
"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tourist Office: 943.423101";break;
case "InfoGeneral_Kutxaespacio":
$strTexto="<b>Miramon. Kutxa Science Museum</b>".
"<br>The Kutxa Science Museum as a scientific information and educational centre plans to organise a parallel exhibition to the events being held to commemorate Albert Einstein�s <i>Annus Mirabilis</i>.".
"<br><br><center><img src='images/kutxaespacio.jpg'><br>".
"<br><table border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom>".
"<center><b>Miramon. Kutxa Science Museum</b>".
"<br><br>Mikeletegi, 43. 20009 Donostia - San Sebasti�n. Gipuzkoa".
"<br><a href='http://www.miramon.org' target='_blank'><u>www.miramon.org</u></a>".
"<br>Information: 943-012478".
"<br>Bookings: 943-012917".
"</center></td></tr></table></center>";break;
case "InfoGeneral_ComoLlegar":
$strTexto="<b>Visiting San Sebastian</b>".
"<br><br>The seaside city of San Sebastian (Donostia in Basque) stands on the shores of the Bay of Biscay. It is the capital of the basque territory of Gipuzkoa and lies just 20 km from the French border. ".
"<br><br>(<a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>See Map</u></a>) ".
"<br><br>You can reach San Sebastian by: ".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#tren'><u>Rail</u></a> ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#avion'><u>Air</u></a> ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<a href='index.php?pg=4&opcion=10#carretera'><u>Road</u></a> ".
"<br><br><br><a name='tren'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Rail:</b>".
"<br><br><a href='http://www.renfe.es' target='_blank'><u>RENFE</u></a> has train services from Madrid to San Sebastian and also to Irun, on the French border. There are also connecting trains to Barcelona. From Madrid and Barcelona we recommend taking an overnight train (around 6 hours from Madrid, and 7 from Barcelona). ".
"<br><br>From Paris take the <a href='http://www.sncf.fr' target='_blank'><u>TGV</u></a> to Hendaye, then transfer to <a href='http://www.euskotren.es' target='_blank'><u>Eusko Tren</u></a>'s 'Mole' (Topo) train for the last 20 km leg to San Sebastian (the two stations in Hendaye stand side by side). If you�re coming from Bilbao or Pamplona, you�re better off getting a coach. ".
"<br><br> <img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Information:</b> ".
"<br><br><table align=center width=80% border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td><table><tr><td width='45%' class=textom valign=top> ".
"<b>RENFE</b><br>Estaci�n del Norte - P� de Francia<br>Lines: Long distance ".
"<br>Suburban: Irun - Brinkola<br>Tel.: 902 24 02 02<br><a href='http://www.renfe.es' target='_blank'><u>www.renfe.es</u></a></td> ".
"<td width='55%' class=textom><b>EUSKOTREN</b><br>Estaci�n de Amara - Pl. Easo, s/n ".
"<br>Lines: Hendaye (Francia) �<br>Donostia/San Sebasti�n - Lasarte (Topo)<br>".
"<br>Tf.: 902 54 32 10<br><a href='http://www.euskotren.es' target='_blank'><u>www.euskotren.es</u></a></td> ".
"</tr></table></td></tr></table><br><br><br><br> ".
"<a name='avion'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Air:</b> ".
"<br><br>There are two flights a day from Madrid to San Sebastian and one from Barcelona. The airport is situated in Hondarribia [Fuenterrabia]. Take a bus or taxi from the airport to San Sebastian. ".
"<br><br><img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Information:</b> ".
"<br><br><table width=80% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td class=textom><b>San Sebasti�n Airport (EAS)</b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Location: a 20 Km. from Donostia-San Sebasti�n and 5 Km. from Ir�n.<br>C/ Gabarrari 5 y 22. 20280 HONDARRIBIA. ".
"<br>Switchboard: 943 66 85 00 ".
"<br>Iberia Information: 943.66.85.21 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"<br><br><b>Bilbao Airport</b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Location: a 10 Km. from Bilbao and 100 Km. from San Sebasti�n.<br>Ctra. As�a-Erletxes, s/n - 48.150 LOIU. ".
"<br>Information: 94 486 96 63/64 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"<br><br><b>Biarritz Airport</b><br> ".
"<br>Location: Route Nationale 10. 64600 Anglet (Francia).<br>. 40 km. from San Sebasti�n 45' by highway ".
"<br>Information: Tel. (+33)5 59 43 83 83".
"<br>Air lines:".
"<br>AIR FRANCE. Tel: (+33)820.820.820".
"<br>Fly information: Tel: (+33)836.68.10.48".
"<br><a href='http://www.airfrance.com' target='_blank'><u>www.airfrance.com</u></a> ".
"<br><br>REGIONAL, European Air Line.".
"<br>Tel: (+33)820.820.820".
"<br><br>RYANAIR".
"<br>Tel: (+33)559.438.393".
"<br><a href='http://www.ryanair.com' target='_blank'><u>www.ryanair.com</u></a> ".
"</td></tr></table><br><br> ".
"<br><a name='carretera'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Road:</b> ".
"<br><br><b>> By car:</b> ".
"<br><br> ".
"From <b>Madrid</b>, take the N-I national road via Burgos and Vitoria-Gasteiz; an alternative to this road is to take the toll motorway from Burgos to Miranda de Ebro, another toll motorway from Vitoria to Durango (towards Bilbao) and finally the A-8 toll motorway to San Sebastian. Journey takes about 5 hours. ".
"<br><br>From <b>Barcelona</b> take the N-II to Zaragoza, then take the N-121 to Pamplona. The road is good, but there is an alternative route by toll motorway. Approx. 6 hours. From Bilbao take the A-8 motorway to San Sebastian. The journey takes about one hour; alternatively take the national road (2 or 3 hours depending on the traffic, which is generally heavy). If you're not in a hurry, the national road is more scenic and you can stop in the various coastal towns on the way, such as Guernica, Lekeitio, Ondarroa, Mutriku, Getaria, Zumaia, Zarautz, Orio, etc. ".
"<br><br>From <b>Pamplona</b> take the A-15 and the N-I to San Sebastian. Journey time is around 45 minutes-1 hour. ".
"<br><br>From <b>Paris</b> take the A-10 toll motorway to the Spanish border (via Orleans, Tours, Poitiers, Bordeaux) and from there the A-8 toll motorway to San Sebastian. Free alternatives are the N-10 in France and the N-I from the border on. ".
"<br><br>N-1: Madrid-Irun ".
"<br><br><table align=center width=80% border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td><table><tr><td width='65%' class=textom valign=top> ".
"<b>Motorways:</b><br>A-8 toll motorway: Bilbao-Irun <br>A-63 toll motorway: Paris - Irun <br>A-15 free motorway Pamplona San Sebastian <br>Motorway: Barcelona � Zaragoza ".
"</td><td width='35%' class=textom valign=top> ".
"<img src='images/ico_info.jpg'>&nbsp;&nbsp;Information: ".
"<br><a href='http://www.dgt.es' target='_blank'><u>www.dgt.es</u></a> ".
"<br><a href='http://www.trafico.euskadi.net' target='_blank'><u>www.trafico.euskadi.net</u></a> ".
"</td></tr></table></td></tr></table> ";break;
case "Registro_Como":
$strTexto = "<b>How to Register</b>".
"<br><br><font color='#800000'>The Pre-registration deadline has expired. If you wish to be considered for attendance to the event, please contact: <a href='mailto:tisa-congresos@infonegocio.com'><b><font color='#800000'>tisa-congresos@infonegocio.com</font></b></a></font>".
"<br><br>Registration at the Congress is free.".
"<br><br><b>It must be formalised as follows:</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>To register for the Congress you must fill in the <u>pre-registration form</u> and send it to the Technical Secretariat, before the 31st of May.</b>".
"<br><br>You must point out the days that you are interested in attending, and you can choose non-consecutive days, if you wish.".
"<br><br>Once the deadline for receiving pre-registrations is over, the Technical Secretariat will send you your <u>pre-registration form</u> confirmation and will allocate you a registration number before the 10th of June.".
"<br><br>This formality is necessary for registering at the Congress, as the number of places is limited and will be allocated strictly following the order in which registrations were made.".
"<br><br>Any modification, variation or cancellation must be made in writing and sent to the Technical Secretariat.".
"<br><br><b>PLEASE NOTE:</b> No registrations will be accepted at the venue for the congress, either before or during the event.".
"<br><br><b>TISA Congresos, S.L.</b>".
"<br><br>Ref. Congreso Einstein".
"<br>Avda. de la Libertad, 17-19, 5� ".
"<br>E-20004 Donostia-San Sebasti�n � Spain".
"<br>Tel. 34 943 42 54 20".
"<br>Fax:  34 943 42 21 24".
"<br>e-mail: <a href='mailto:tisa-congresos@infonegocio.com.'><u>tisa-congresos@infonegocio.com</u></a>";break;
case "Registro_Becas":
$strTexto = "<b>Grants</b>".
"<br><br><font color='#800000'>The deadline for applying for grants expired on 31 March. If for exceptional reasons you have difficulties in attending the event, we recommend that you contact the Coordinator, Unai Ugalde, directly at</font> <a href='mailto:qppugmau@sq.ehu.es'><b><font color='#800000'>qppugmau@sq.ehu.es</font></b></a>" .
"<br><b<Grants will be provided to people from among all those who apply for them by a committee named by the Organising Committee. ".
"<br><br>The grants will be provided for the days that you will be attending the Congress that you have stated on the <u>pre-registration</u> form.".
"<br><br>200 overnight grants will be provided (for people who live outside the Basque Autonomous Community and Navarre, except in justified cases), worth a maximum of 100 euros per day and 400 travel grants (for people who live outside San Sebasti�n and the surrounding area) worth 25 euros per day".
"<br><br>To apply for a grant, you must attach a short exposition (no more than 200 words) of the reasons why you feel you deserve the grant along with the pre-registration form. You can state whatever merits you think are appropriate (no more than 200 words)".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>The deadline for applying for a grant will be the 31st of March.</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>The deadline for awarding grants will be the 31st of May.</b>".
"<br><br>Only those registrations that are accepted will be eligible for grants".
"<br><br>Once the pre-registrations who have applied for a grant have been examined, the Congress Technical Secretariat will inform you whether the grant has been awarded or not.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>Types of grants:</b>".
"<br><br><b>The Organisation awards two types of grants:  Overnight and Travel.</b>".
"<br><br><b>Overnight Grant:</b>".
"<br><br>These are only for people who live outside the Basque Autonomous Community and Navarre and who stay overnight in San Sebasti�n, except in justified cases. ".
"<br><br>Accommodation must be booked with the Congress Official Travel Agency.".
"<br><br>Overnight grants will be provided for the nights of the 5th of September to the 8th of September, inclusive.".
"<br><br>The days that you have requested your hotel reservation for must match the days that you have stated that you will be attending on the pre-registration form.".
"<br><br>Payment will have to made once you have been informed whether the grant has been awarded or not.".
"<br><br><b>Amount:</b>  The maximum amount is 100 euros /night. You must fill in the <a href='index.php?pg=14' target='_parent'><u>accommodation form</u></a>.".
"<br><br>The Organisers will pay a maximum amount of 100 euros /night, which will be paid directly to the Congress Official Travel Agency.".
"<br><br>If the accommodation you have chosen costs more than this amount, you will have to pay the difference directly to the Travel Agency ".
"<br><br><b>Travel Grant:</b>".
"<br><br>This is only for those people who live outside of San Sebasti�n and its surrounding area. The Organisers will pay a sum of 25 euros/day, which will be paid, once the Congress is over, to each grant holder who has attended the Congress and who can provide evidence that they have done so at the Technical Secretariat.".
"<br><br><b>Amount:</b> the amount per day: 25 euros/day";break;
case "Registro_Alojamiento":
$strTexto = "<b>Accommodation</b>".
"<br><br>To book accommodation you must fill in the <u>accommodation form</u>".
"<br><br>The Organisers have agreed on special prices at hotels with various categories through their Official Travel Agency for the Congress, as shown on the accommodation form.".
"<br><br>To take advantage of these special prices, if you are awarded a grant for accommodation, you can only book through the Congress Official Travel Agency.".
"<br><br><img src='images/ico_bolita_on2.jpg'><b>The 30th of June is the deadline for reserving a hotel. After this date the Organisers refuse to accept any responsibility for the availability of rooms or for their prices.</b>".
"<br><br>Once you have booked your accommodation, Carlson Wagonlit Travel will confirm your booking in writing (by e-mail) and will let you know the possible methods of payment.".
"<br><br>Accommodation will be charged from the 1st of July onwards.".
"<br><br>If you have been awarded an overnight grant, the Congress Official Travel Agency, Carlson Wagonlit Travel, will confirm your accommodation and if the hotel you have chosen costs more than 100 euros/night, will inform you of the difference you have to pay.".
"<br><br><b>Cancellation charges:</b>".
"<br><br><b>Up to the 31st of July:</b> there will be no charges for cancellations.".
"<br><br><b>From the 1st to the 31st of August</b>: the cost of one night at the hotel you have chosen.".
"<br><br><b>From the 1st of September:</b> 100% of the sum paid".
"<br><br>All cancellations must be notified in writing to the Congress Official Travel Agency�s e-mail address.".
"<br><br><b>For further information about accommodation:</b>".
"<br><br>Congress Official Agency: ".
"<br><br>Carlson Wagonlit Travel".
"<br>Ms. Ma�en Echarri".
"<br>Fax: (34) 943 428041".
"<br>E-mail: mecharri@carlsonwagonlit.es".
"<br><br>List of hotels with specially arranged prices <a href=javascript:ventana('index.php?pg=12',510,593,'no','einstein_mapa')><u>see map</u></a>".
"<br><br>Residencia Olarain".
"<br>Hotel Londres y de Inglaterra **** ".
"<br>Hotel NH Ar�nzazu ****".
"<br>Hotel Amara Plaza ****".
"<br>Hotel Tryp Orly ****";break;
case "AlbertEinstein_VidaYObra":
$strTexto = "<b>Life And Work ".
"<br>ALBERT EINSTEIN: 1905/2005</b> ".
"<br><br>The year 2005 will mark the centenary of a momentous year for science, 1905. At that time, when the wake of the revolutionary quantum hypothesis formulated by Max Planck (1900) was still rocking the minds of physicists, a third level technical clerk of the Swiss Patent Office at Bern, called Albert Einstein, born in Ulm (Germany) on march 14 1879, sent five manuscripts to the prestigious German journal Annalen der Physik for publication. Five papers that changed the face of physics, as noted by the physicist and historian John Stachel. Any one of them would have sufficed to distinguish him as one of the great scientists of his period. All of them jointly, however, raised him to the summit along with Archimedes and Newton. According to his biographer Albrecht F�lsing �never before and never since has a single person enriched science by so much in such a short time as Einstein did in his <i>Annus Mirabilis</i>'. ".
"<br><br>Scientists and thinkers around the world will celebrate this centenary during 2005, a year that has been declared as the World Year of Physics. Donostia International Physics Center will take part in these commemorative events with a rich and select programme of lectures, seminars and exhibitions. All events combined aim at bringing to society the work and memory of an unequalled creative figure who became familiar to us as the violinist with muddled hair and sad eyes, and to whom science and humanism will eternally owe a tribute. ".
"<br><br>In December 1999, TIME magazine elected Albert Einstein as the thinker and scientist of the 20th century, in preference to other great candidates as <b>Francis Crick</b> and <b>James Watson, Alexander Fleming, Sigmund Freud, Kurt G�del, Edwin Hubble, William Shockley, Alan Turing</b> <b>and Ludwig Wittgenstein.</b> ".
"<br><br>Duality was a constant in our character. His calm contemplation of the universe contrasted with his unstable family life. Though a passionate Zionist, he showed concern for the rights of arabs in Israel. Though a pacifist, he undoubtedly supported military action against Hitler. He warned Roosevelt of the danger posed by the imminent development of nuclear weapons by the nazis and persuaded him to get there first, but after the end of the war, battled against the nuclear arms race. In the midst of these contradictions, Einstein was, nonetheless, a deeply moral man. ".
"<br><br><table><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Time.jpg' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein01.gif' height=200></td> ".
"</tr><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein02.gif' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein03.gif' height=200></td> ".
"</tr><tr> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein04.gif' height=200></td> ".
"<td valign='top' width='50%' align=center><img src='images/Einstein05.gif' height=200></td> ".
"</tr></table><br><br> ";break;
case "AlbertEinstein_5Trabajos":
$strTexto = "<b>Einstein's Five Papers</b> ".
"<br><br>The first of those five works was entitled ��ber  einen die Erzeugung und Verwandlung des Lichts betreffenden heuristischen Gesichtspunkt� (On a Heuristic Point of View Concerning the Production and Transformation of Light). In it Einstein explained the photoelectric effect through a corpuscular interpretation of light. It is a fundamental contribution to the genesis of quantum physics, and, according to its author, very revolutionary. It questioned the validity of Maxwell�s electromagnetic theory, based on continuous fields, to account for the phenomena of light emission and transformation, and suggested the discretization of the energy of light into quanta or indivisible light corpuscles. �For his services to Theoretical Physics, and especially for his discovery of the law of the photoelectric effect� he was awarded the 1921 Nobel Prize in Physics. ".
"<br><br>The second paper was ��ber die von der molekularkinetischen Theorie der W�rme geforderte Bewegung von in ruhenden Fl�ssigkeiten suspendierten Teilchen� (On the Movement of Small Particles Suspended in Stationary Liquids Required by the Molecular-Kinetic Theory of Heat). In this work, Einstein showed the limits of classical thermodynamics, when observable statistical fluctuations in the irregular movement of particles in suspension violate the second law.  ".
"<br><br>With the last manuscript of that year entitled �Zur Theorie der Brownschen Bewegung� (On the Theory of Brownian Motion) he settled the physical and mathematical basis of brownian  motion,  as a result of the continuous bombardment of suspended particles by the fluid molecules. Here he made the radical proposal that the parameter to be taken into account experimentally is the mean displacement, and not the erratic speed. Related to these two papers is the fourth one, �Eine neue Bestimmung der Molek�ldimensionen� (A New Determination of Molecular Dimensions), built on his doctoral thesis (Z�rich University 1905). In it Einstein gave a method, based on hydrodynamics and the diffusion theory, to estimate Avogadro�s number and the size of solute molecules in diluted solutions. This set of works would encourage the Frenchman Jean Perrin to new measurements of Avogadro�s number and the experimental determination of atomic sizes, thus providing strong support of the reality of atoms and molecules as tangible entities. ".
"<br><br>The fifth work is �Zur Elektrodynamik Bewegter K�rper� (On the Electrodynamics of Moving Bodies) which along with the fifth, �Ist die Tr�gheit eines K�rpes von seinem Energieinhalt abh�ngig?� (Does the Inertia of a Body Depend upon its Energy Content?) constitute what is now called the special theory of relativity. This special relativity is founded on two basic principles: the principle of relativity (Physics is the same in all inertial systems), and the principle of constancy of the speed of light (the velocity of light is isotropic and the same in all inertial systems). With this theory, Einstein resolved the apparent conflict between the relativity principle and the electrodynamics of Maxwell and Lorentz, which gives priority to some reference systems. This forced him to abandon the concepts of simultaneity and the ether. The young Albert Einstein clearly demolished with implacable logic the foundations of known physics, to erect a new framework based on the space-time concept, in which both space and time lose their absoluteness. From his relativity principles Einstein inevitably reached in his fifth work the equivalence of matter and energy, translated into the famous formula E=mc2 which he then expressed as �variation of the mass of a body equal to L/V2�, where L is its energy change and V the speed of light, the validity of which he suggested might be tested with radium salts. At that time, the author still ignored the overwhelming power of the genius hidden within his simple formula. It would later emerge in nuclear reactions.".
"<br><br><center><img src='images/trabajo1.gif' height=700>".
"<br><br><center><img src='images/trabajo2.gif' height=700>".
"<br><br><center><img src='images/trabajo3.gif' height=700>".
"<br><br><center><img src='images/trabajo5.gif' height=700>";break;
case "AlbertEinstein_Culminacion":
$strTexto = "<b>Culmination of Relativity</b>".
"<br><br>Similarly to Planck, Einstein loved the ruling principles underlying natural laws. A few years after the principles of relativity and constancy of the speed of light, Einstein stated the principle of equivalence (a gravitational field is indistinguishable from an acceleration of the reference system) on which he would later erect his theory of general relativity. On account of its originality and beauty, it is a masterpiece at the summit of scientific thought of all time. He started to draft it in 1907 and essentially concluded it in 1915. Obliged to renounce to the absolute space-time of special relativity in order to incorporate gravity, he provided a geometrical interpretation of the latter, thereby overthrowing Newtonian gravitational theory. Many years later, in his autobiographical notes, he humbly begged Newton for forgiveness for an affront which could only be allowed from a comparable genius. ".
"<br><br>In the line of the ancient Greeks and Newton, Einstein believed in the immutability of the heavens. He was thereby compelled to incorporate in his equations for the gravitational field a new term which simulated cosmic repulsion, opposite to gravitational attraction between bodies in a supposedly static Universe, and which prevents it from collapse. When the expansion of the Universe was discovered (Hubble, 1929), Einstein repented of having introduced the new term, �the biggest blunder of his life�. Ironically, it seems to have a new lease of life in the last few years, as a simpler explanation of the vacuum energy responsible for the acceleration observed in the present expansion of the Universe. ".
"<br><br>Einstein pursued the unification of gravitation end electromagnetism in vain during the last period of his life. Other forces (weak and strong) were not well known at the time. The four interactions now known still resist unification, unless the einsteinian framework is replaced by a hypothetical scenario of 11 dimensions with superstring theories or M theory. It is a wonder to guess who will be the genius to beg forgiveness to Albert Einstein in the present millennium.";break;
case "AlbertEinstein_ImpactoObra":
$strTexto = "<b>Impact of the Work</b>".
"<br><br>The influence of Einstein�s work on physics has been enormous. It spans from the smallest (standard model of elementary particle physics, with the theory of relativistic quantum fields as a framework) to the largest (the structure of the Universe, with general relativity ruling the global geometry and dynamic evolution in cosmology). From the simplest (the gyromagnetic ratio of the electron) to the most complex (the collapse of a supernova). From the lowest energies (Bose-Einstein condensates at temperatures as low as a few nanoKelvin) to the highest (the quark-gluon plasma). From the commonest application (global positioning system) to the most sophisticated techniques (non-linear atomic optics). Etc. ".
"<br><br>Einstein�s impact is not restricted to physics and associated disciplines. His ideas have also made a mark on modern culture from art to poetry. They have shaped the theory of knowledge and philosophy as well. Einstein rejected an empirical explanation for the origin of physical concepts, which he considered a free creation of the human mind. But mere logical thinking does not provide us with knowledge of the external world, which only experience gives us. Nevertheless, concepts help organise sensory experiences and, so far, Nature has always appeared on the side of simplicity and mathematical beauty.  ".
"<br><br>Along with Leibniz and Planck, he believed and sought a pre-established harmony. In the realm of philosophy, relativity theory forced philosophers to revise their conception of space, time and matter, and later, to take party on the local realism which impregnated the critical position of Einstein on quantum physics. Experimental results appear to stubbornly reject this position (albeit without the strength required to convince sceptics). ".
"<br><br><b>Science and Society</b> ".
"<br><br>The celebration of Albert Einstein�s <i>Annus Mirabilis</i> should help us reconsider the importance of science, not only as a driving force of knowledge, but as a catalyst of technological and social change. Those countries which aim to improve the quality of life of their citizens cannot afford to leave an adequate exercise of scientific activity aside. ".
"<br><br>Einstein is an excellent example of a scientist for new generations. He was an unconventional character whose creativity and intuition guided him through the dream of understanding the Universe differently. ".
"<br><br>We will celebrate the century of a unique burst of creativity which sprang from an unknown patent officer who defended his revolutionary ideas with passion, dedication, effort and brilliance. Einstein opened new horizons in physics and along with this, he changed the world of his time. ".
"<br><br>The best tribute to his memory would be the recovery of social enthusiasm for the collective adventure of science.";break;
case "De1600a1730Documentacion": $strTexto = "<font class=textom2>16:00</font> - <font class=textom2>17:30</font>. <b>Documentation</b>.<br>Chamber Hall. Kursaal Centre.";break;
case "Lunes5deSeptiembre": $strTexto="Monday September 5";break;
case "Martes6deSeptiembre": $strTexto="Tuesday September 6";break;
case "Miercoles7deSeptiembre": $strTexto="Wednesday September 7";break;
case "Jueves8deSeptiembre": $strTexto="Thursday September 8";break;
case "Lunes5deSeptiembre_1730": $strTexto = "Registration Control";break;
case "Lunes5deSeptiembre_1800": $strTexto = "<b>Official Opening.</b>";break;
case "Lunes5deSeptiembre_1830": $strTexto = "<b>Opening lecture.</b> <a href='index.php?pg=7&ponente=14' target='einstein_ponente'><font class=textomna2>C. Cohen-Tannoudji.</font></a> <br><i>Bose-Einstein Condensates: A New Form of Matter</i>.";break;
case "Lunes5deSeptiembre_1930": $strTexto = "<b>Chamber Concert</b> <br><i>Einstein's Favourite Pieces</i>.";break;
case "Lunes5deSeptiembre_2100": $strTexto = "<b>Welcome reception in the foyer of the Auditorium-Kursaal Centre.</b>";break;
case "Martes6deSeptiembre_900": $strTexto = "Documentation.";break;
case "Martes6deSeptiembre_930": $strTexto = "Einstein and Time.";break;
case "Martes6deSeptiembre_1015": $strTexto = "<b>Open Spot</b> <i>Gravitation and Black Holes</i>.";break;
case "Martes6deSeptiembre_1100": $strTexto = "Coffee Break.";break;
case "Martes6deSeptiembre_1130": $strTexto = "The Origin and Evolution of the Universe: the Challenge of Cosmology.";break;
case "Martes6deSeptiembre_1133": $strTexto = "Einstein and the Diffusion Phenomena that Changed the Course of Human Relations.";break;
case "Martes6deSeptiembre_1215": $strTexto = "Matter and Form.";break;
case "Martes6deSeptiembre_1300": $strTexto = "Summary and debate.";break;
case "Martes6deSeptiembre_1330": $strTexto = "End of Session.";break;
case "Martes6deSeptiembre_1800": $strTexto = "<i>Nano is Different</i>.";break;
case "Martes6deSeptiembre_1845": $strTexto = "<i>Steps Towards Complex Matter: Information, Self-Organization and Adaptation in Chemical Systems</i>.";break;
case "Martes6deSeptiembre_1930": $strTexto = "<i>Brownian Movement and Molecular Motors</i>.";break;
case "Martes6deSeptiembre_2015": $strTexto = "<b>End of Session</b>.";break;
case "Miercoles7deSeptiembre_900": $strTexto = "Documentation.";break;
case "Miercoles7deSeptiembre_930": $strTexto = "Quantum Information Theory: Challanges and Perspectives";break;
case "Miercoles7deSeptiembre_1015": $strTexto = "Relativity, Photons and Particles.";break;
case "Miercoles7deSeptiembre_1100": $strTexto = "Summary and debate.";break;
case "Miercoles7deSeptiembre_1130": $strTexto = "Coffee Break.";break;
case "Miercoles7deSeptiembre_1215": $strTexto = "Continuation of Debate.";break;
case "Miercoles7deSeptiembre_1300": $strTexto = "End of Session.";break;
case "Miercoles7deSeptiembre_1700": $strTexto = "<i>What is Unified Theory?</i>.";break;
case "Miercoles7deSeptiembre_1800": $strTexto = "<i>Pulsar Physics and Einstein�s Tests</i>.";break;
case "Miercoles7deSeptiembre_1830": $strTexto = "<b>Break</b>";break;
case "Miercoles7deSeptiembre_1845": $strTexto = "Was Einstein Right?.";break;
case "Miercoles7deSeptiembre_1930": $strTexto = "Einstein and the Quantum World Today.";break;
case "Miercoles7deSeptiembre_2015": $strTexto = "End of Session.";break;
case "Jueves8deSeptiembre_900": $strTexto = "Documentation.";break;
case "Jueves8deSeptiembre_930": $strTexto = "Einstein and Light Quanta.";break;
case "Jueves8deSeptiembre_1015": $strTexto = "The Confrontation between General Relativity and Experiment.";break;
case "Jueves8deSeptiembre_1100": $strTexto = "Coffee Break.";break;
case "Jueves8deSeptiembre_1130": $strTexto = "Einstein and Philosophy in the Twentieth Century.";break;
case "Jueves8deSeptiembre_1215": $strTexto = "Summary and Discussion.";break;
case "Jueves8deSeptiembre_1300": $strTexto = "End of Session.";break;
case "Jueves8deSeptiembre_1800": $strTexto = "Einstein: Who he thought he was and why he lives on today.";break;
case "Jueves8deSeptiembre_1845": $strTexto = "Einstein, Picasso: Space, Time and the Beauty that Wreaks Havoc.";break;
case "Jueves8deSeptiembre_1930": $strTexto = "Einstein's Greatest Dream: Independent Physics.";break;
case "Jueves8deSeptiembre_2015": $strTexto = "Closing Ceremony.";break;
case "Jueves8deSeptiembre_2100": $strTexto = "Cocktail at the Foyer of the Auditorium.";break;
case "Programa_Introduccion":
$strTexto = "<b>Introduction</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> We have designed a wide-ranging programme, with lectures in the morning and afternoon throughout the 4-day conference. ".
"<br><br><img src='images/ico_bolita_on2.jpg'> You can consult the programme by clicking on a date. You can also see the abstract and CV of each speaker.";break;
case "Programa_LaSede":
$strTexto = "<b>Kursaal Congress Centre and Auditorium</b> ".
"<br><br>Since the Kursaal Congress Centre and Auditorium opened in summer 1999, it has not only been an emblematic architectural complex in San Sebasti�n but has also provided a modern multipurpose space fitted out with the most innovative technology.".
"<br><br><center><img src='images/cubossombra.jpg'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/cubosbrillan.jpg'></center> ".
"<br><br>The Kursaal is an extraordinary project by Rafael Moneo that has received the European Commission and the European Parliament Mies van der Rohe Award for the best building in Europe, as well as the FAD Architecture Award, which is the most important national award presented in this discipline. Because of this the KURSAAL is now the building that has won most awards in Europe.".
"<br><br>The Kursaal, an architectural structure formed by two translucent glass cubes designed by the most highly renowned Spanish architect in the world, is both a Congress Centre and an Auditorium. It provides cutting-edge facilities, defined and designed coherently that combine the very latest technology, and it aims to provide an effective response to the needs of the most demanding organiser. ".
"<br><br><br><b>Kursaal Congress Centre and Auditorium</b><br><br><center><img src='images/donostia.jpg'></center> ".
"<br><br>Rafael Moneo, who personally supervised the building work, is currently the most in-demand professional architect internationally for projects of great importance all over the world. ".
"<br><br>The two beached glass 'rocks' that tilt 5 degrees on their vertical plane and 3 degrees horizontally to form the Kursaal, are a response to the architect�s clear intention: 'to perpetuate the presence of geography and, as far as possible, to stress the harmonious combination of natural and artificial elements'. This building, that is a symbol of San Sebasti�n, is a magnificent exercise in risk: its main <i>'foyer'</i>, 22 metres high, 12 meters wide and 60 metres deep, with staircases that rise up in the air, is covered in Canadian cedar and luminous glass and has the forceful presence and elegance that is typical of Moneo�s work. ".
"<br><br><table align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom><center> ".
"<b>Kursaal Congress Centre and Auditorium </b><br><br>Avda. de Zurriola, 1 . 20002 Donostia-San Sebasti�n.<br>Tel.: 943 00 30 00 . Fax: 943 00 30 01<br>E-mail:<a href='mailto:kursaal@kursaal.org'><u>kursaal@kursaal.org</u></a><br><a href='http://www.kursaal.org' target='_blank'><u>http://www.kursaal.org</u></a> ".
"</center></td></tr></table>";break;
case "Ponente_A_Lehn":
$strTexto = "<b>Steps Towards Complex Matter:<br>Information, Self-Organization and Adaptation in Chemical Systems</b> ".
"<br><br>From divided to condensed, organized, living and up to thinking matter, the universe has evolved towards a progressive complexification of matter, through a process of self-organization. ".
"<br><br>One may draw a parallel between structure formation on the grand scale of the universe and on the level of molecular matter. Self-organization of the universe results from the operation of gravitational forces whereas self-organization of molecular matter, non-living and living, may be considered to result from electromagnetic forces generating and operating on an infinite diversity of possible structural combinations. ".
"<br><br>Chemistry, as the science of the structure and transformation of matter, has a major role to play in the understanding of the processes by which self-organization of matter may take place. Furthermore, it lies at the core of the biological world, the highest level of complex matter as we know it. ".
"<br><br>Chemistry has developed from molecular chemistry, mastering the combination and recombination of atoms into increasingly complex molecules, to supramolecular chemistry, harnessing intermolecular forces for the generation of informed supramolecular systems and processes through the implementation of molecular information carried by electromagnetic interactions. ".
"<br><br>Supramolecular chemistry is actively exploring systems undergoing self-organization, i.e. systems capable of spontaneously generating well-defined functional supramolecular architectures by self-assembly from their components, on the basis of the molecular information stored in the covalent framework of the components and read out at the supramolecular level through specific interactional algorithms, thus behaving as programmed chemical systems. ".
"<br><br>Chemistry thus plays a major role in the progressive elaboration of a science of informed, organized, evolutive matter, a science of complex matter. ".
"<br><br>� Lehn, J.-M., Supramolecular Chemistry: Concepts and Perspectives, VCH Weinheim, 1995. ".
"<br>� Lehn, J.-M., in Supramolecular Chemistry: Where It Is and Where It Is Going (R. Ungaro, E. Dalcanale, eds.), Kluwer, Dordrecht, 1999, pp. 287-304. ".
"<br>� Lehn, J.-M., Chem. Eur. J., 1999, 5, 2455. ".
"<br>� Lehn, J.-M., Chem. Eur. J., 2000, 6, 2097. ".
"<br>� Lehn, J.-M., Proc. Natl. Acad. Sci. USA., 2002, 99, 4763.";break;
case "Ponente_C_Lehn":
$strTexto = "<b>ISIS, Universit� Louis Pasteur, Strasbourg and Coll�ge de France, Paris.</b> ".
"<br><br>Jean-Marie Lehn was born in Rosheim, France in 1939. In 1970 he became Professor of Chemistry at the University Louis Pasteur in Strasbourg and since 1979 he is Professor at the Coll�ge de France in Paris. In 1968 his research led to the fabrication of cage-like molecules that contain a cavity into which another chemical species of appropriate size and shape may be included, like a key fits into a lock. With this began his work on the chemical basis of 'molecular recognition' (i.e. the way in which a receptor molecule recognizes and selectively binds a substrate), which also plays a fundamental role in biological processes. For these studies Dr. Lehn received the Nobel Prize in Chemistry in 1987 with Cram and Pedersen. ".
"<br><br>Over the years his work led to the definition of a new field of chemistry, which he has named 'supramolecular chemistry'. It deals with the complex entities formed by the association of two or more chemical species held together by intermolecular forces, whereas molecular chemistry studies the features of the entities constructed from atoms linked by covalent bonds. ".
"<br><br>His research broadened from molecular recognition towards supramolecular catalysis and transport processes. It also extended to the design of molecular devices, molecular electronics and photonics. More recently he concentrates his efforts on the design of 'programmed' systems that undergo self-organization by spontaneous but directed assembly of suitable components into well-defined functional supramolecular architectures. ".
"<br><br>Author of more than 750 scientific publications, Dr. Lehn is a member of many academies and institutions and has received numerous international honors and awards.";break;
case "Ponente_A_Cirac":
$strTexto = "<b>Quantum Information Theory: Challanges and Perspectives</b> ".
"<br><br>Quantum information processing and communication is a multidisciplinary field of research in which the goal is to use some of the intriguing properties of quantum mechanics in order to process and transmit information in a very efficient way. For the moment, there are very few systems on which one can test the main ideas of quantum computing, perhaps the most important application in this field. On the one hand, we have quantum optical systems, typically atoms or ions, which interact with laser fields and that are trapped by electromagnetic forces. On the other, we have solid state devices (quantum dots or superconductor devices, for example) which can be electronically controlled. In this talk I will revise the basic concepts in the field of Quantum Information, showing how to implement some of the ideas using atoms, ions and photons. I will also discuss the perspectives in the field of taming and controlling quantum optical systems in order to reach the ultimate goal of constructing a scalable device.";break;
case "Ponente_C_Cirac":
$strTexto = "<b>Max-Planck Institute for Quantum Optics, Garching.</b>".
"<br><br>Professor Cirac obtained his degree in Physics and his PhD at Universidad Complutense in Madrid (1988, 1991). His professional career includes positions at the University of Colorado, Innsbruck, Technical University of Munich and the Max-Planck Institute for Quantum Optics, where he is now Managing Director. ".
"<br><br>Professor Cirac is author of 175 publications and has numerous awards. He is also a Fellow of the American Physical Society, and Corresponding Member of the Spanish and Austrian Academies of Sciences. ";break;
case "Ponente_A_Clifford":
$strTexto = "<b>The Confrontation Between General Relativity and Experiment</b> ".
"<br><br>We revies the experimental evidence for Einstein�s General Relativity. Tests of the Einstein Equivalence Principle support the postulates of curved spacetime, while solar-system experiments strongly confirm weak-field general relativity. The Binary Pulsar provides tests of gravitational-wave damping and of strong-field general relativity. We describe ongoing and future experiments, such as the Stanford Gyroscope experiment, a satellite test of the Equivalence principle, and tests of gravity at short distance to look for extra spatial dimensiona. ".
"<br><br>Recently operational laser interferometric gravitational-wave observatories, and a future space interferometer, may provide new tests via the properties of gravitational waves. ".
"<br><br><b>Was Einstein Right?</b>".
"<br><br>How has the most celebrated scientific theory of the 20th century held up Ander the exacting scrutiny of planetary probes, radio telescopes, and atomic clocks? After 100 years, was Einstein right? ".
"<br><br>In this lecture, we relate the story of testing relativity, from the 1919 measurements of the bending of light to the 1980s measurements of a decaying double-neutron-star system that reveal the action of gravity waves. We will show how a revolution in astronomy and technology led to a renaissance of general relativity in the 1960s, and to a systematic program to try to verify its predictions. We will also demonstrate how general relativity plays an important role in daily life.";break;
case "Ponente_C_Clifford":
$strTexto = "<b>Washington University.</b>".
"<br><br>Clifford Will is professor of Physics, and member of the McDonnell Center for the Space Sciences at Washington University in St. Louis. ".
"A B.Sc in Applied Mathematics and Theoretical Physics from McMaster University in 1968, and a PhD. In physics from the California Institute of Technology in 1971, he was an Enrico Fermi Fellow at the University of Chicago (1972-74), and an Assistant Professor of Physics at Stanford University (1974-81). From 1975 to 1979, he was an Alfred P. Sloan Foundation Fellow. In 1981 he joined Washington University as Associate Professor, in 1985 became Full Professor of Physics, and from 1991-2002, served as Chairman of the Department. ".
"In 1986 he was selected by the American association of Physics Teachers to be the 46th annual Richrmyer Memorial Lecturer, and in 1989 was elected a Fellow of the American Physical Society. ".
"In recognition of his theoretical work related to the Hulse-Taylor Binary Pulsar, he was an invited guest of the Nobel Foundation at the 1993 Nobel Prize Ceremonies honouring discoverers Joseph Taylor and Russel Hulse. During 1996-97, he was both a J. William Fulbright Fellow and a Guggenheim Foundation Fellow, and in 1996, he was named Distinguished Alumnus in the Sciences by McMaster University. ".
"In 2001 he was elected a Fellow of the American Academy of Arts and Sciences, and in 2004 he received the Fellows award of the St. Louis Academy of Sciences. ".
"He has published over 160 scientific articles, including 13 major review articles. In addition, he has authored many popular and semi-popular papers and two books. ";break;
case "Ponente_A_Galindo":
$strTexto = "<b>Einstein and Time</b>".
"<br><br>Many scientific and technological advances have been linked to developments in the precision with which we can measure time. Clocks now exist which are accurate to within one second per 20 million years; moreover, with the generation of ultrashort bursts of XUV radiation and the development of techniques for measuring their duration to within attoseconds, we are now clearly beginning to move from the femtochemical to the attophysical. ".
"<br><br>Physical time�for which the great Newton offered no definition on the grounds that it was �well known to all��formed the core of the scientific revolution that came with Albert Einstein and his principle of relativity. With the theory of special relativity, first propounded by Einstein in 1905�his <i>Annus Mirabilis</i>�Newton's absolute, true and mathematical time gave way to innumerable different times, one for every inertial frame. Simultaneity became relative, as did duration, which dilated with movement. Relativist time runs more slowly on moving clocks, and this makes it possible to �travel to the future�.  But gravitation remained outside this restricted relativity and thus the space-time amalgam retained its absoluteness. Between 1907 and 1915 Einstein managed to accommodate gravity into his ideas, building his general relativity on the principle of equivalence. In it Einstein taught that space-time curved under the effect of matter-energy; specifically, time experienced a gravitational dilation to add to that resulting from movement. ".
"<br><br>Einstein relativist theories are not only of the greatest importance for physicists, they also impinge on aspects of our everyday life. When we use a GPS (Global Positioning System) exactly where (and when) we are, we are making use of a technology which cannot ignore either the relativist or the gravitational dilation of time. If it did, the GPS would fail after just a few minutes and planes would be unable to land safely in conditions of zero visibility. And finally, whenever man dreams of travelling to distant worlds, returning to the past, or visiting the future, sooner or later he ends up coming back to those warps in space-time which�in principle�Einstein's theory of gravity holds out under extreme conditions.".
"<br><br>This talk is intended to give interested members of the public a closer view of these questions. It is the best tribute that can be paid to the man who changed physics and left us as his outstanding work that most beautiful creation ever to be born out of the scientific spirit: Einstein's theory of gravity.";break;
case "Ponente_C_Galindo":
$strTexto = "<b>Universidad Complutense, Madrid</b> ".
"<br><br>Born in Villa de Zaid�n (Huesca) in 1934, Alberto Galindo obtained his primary degree in exact sciences from the Science School of the Universidad de Zaragoza and went on to gain a PhD in physics from the Universidad Central de Madrid. From 1963 to 67 he held the post of professor of principles of relativity at the Universidad de Zaragoza and from 1967, he was the professor of theoretical physics at the Universidad Complutense, Madrid.".
"<br><br>Prof. Galindo has worked as a researcher in several centres: Junta de Energ�a Nuclear, Courant Institute of Mathematical Sciences (New York University), International Centre for Theoretical Physics (Trieste),Centre Europ�en pour la Recherche Nucl�aire (CERN, Gen�ve), Institut des Hautes �tudes Scientifiques (Bures-sur-Yvette), D�partement de Physique Math�matique (Universit� de Dijon), Institut f�r Theoretische Physik (Wien Universit�t), Department of Physics (Princeton University), Coll�ge de France (Par�s), Department of Physics (University of California in Los Angeles), Donostia International Physics Center (San Sebasti�n).".
"<br><br>He has written works on functional analysis, theory of Lie groups and algebras, quantum mechanics, theory of fields, elementary particles, integrated systems, quantum groups and quantum information.".
"<br><br>Profesor Galindo is the author of several books, including: M�todos Matem�ticos de la F�sica (with L. Abellanas, Imprenta Octavio y F�lez, Zaragoza 1973), Mec�nica Cu�ntica (with P. Pascual, Editorial Alhambra, Madrid 1978), Soluciones Exactas en Relatividad General. <br>Colapso Gravitacional y Agujeros Negros (with L. M�s, Editorial de la Universidad Complutense, Madrid 1983), Espacios de Hilbert. <br>Geometr�a, Operadores, Espectros) (with L. Abellanas, EUDEMA, Madrid 1988), Mec�nica Cu�ntica I, II (with P. Pascual, EUDEMA, Madrid 1989), Problemas de Mec�nica Cu�ntica (with P. Pascual, EUDEMA, Madrid 1989), M�todos de C�lculo (in Serie Schaum, with L. Abellanas, McGraw-Hill, Madrid 1990), Quantum Mechanics I, II (with P. Pascual, Springer Verlag, Berlin 1990, 1991),  F�sica y Qu�mica 1  (with J. M. Savir�n, A. Moreno, J.M. Pastor, A. Bened�, McGraw-Hill, Madrid 1995), F�sica 2  (with A. Moreno, A. Bened�, P. Varela, McGraw-Hill, Madrid 1998)".
"<br><br>Profesor Galindo has received a number of distinctions and prizes: elected member of the Academia de Ciencias Exactas, F�sico-Qu�micas y Naturales de Zaragoza, permanent member of the Real Academia de Ciencias Exactas, F�sicas y Naturales de Madrid, founder and first director of the Grupo Interuniversitario de F�sica Te�rica (Interuniversity Group for Theoretical Physics - GIFT), member of the first scientific council of the Erwin Schr�dinger International Institute for Mathematical Physics, Vienna, member of the European Academy, winner of the National Prize for Physics Research 1977, National �Santiago Ram�n y Cajal� Prize for Research 1985, Aragon Prize 1991 for scientific and technical  research.";break;
case "Ponente_A_Gerald":
$strTexto = "In publications and partly unpublished letters, Albert Einstein gavehis own ideas who he thought he was, and what his important contributions were.  These ideas of his must of course be respected. But it turns out that they were insufficient; over the years, scholarship has added a good deal more and illuminated the rest. Attention will be given also to old but newly famous confrontations between Relativity, what has been recently called 'the Dictatorship of Relativism,' and Absolutism.";break;
case "Ponente_C_Gerald":
$strTexto = "<b>Harvard University</b> ".
"<br><br>Is Research Professor of Physics and Research Professor of History of Science at Harvard University, Fellow of the American Physical Society, the American Philosophical Society, the American Academy of Arts and Sciences, and several European learned societies. He served as President of the History of Science Society, and on the U.S. National Commission for UNESCO. His book publications include Thematic Origins of Scientific Thought: Kepler to Einstein, and Einstein, History and Other Passions. He was the Founding Editor of the quarterly journal Daedalus, and was member of the Editorial Committee of Collected Papers of Albert Einstein. His honors include the Sarton Medal, selection as the Herbert Spencer Lecturer at Oxford University, and as the Jefferson Lecturer by the National Endowment for the Humanities. ".
"<br><br>At the request of the Albert Einstein estate, he initiated and for several years supervised the conversion of Einstein�s largely unpublished correspondence and manuscripts into an archive suitable for scholarly study.";break;
case "Ponente_A_Sheldon":
$strTexto = "<b>What Is a Unified Theory?</b>".
"<br><br>Einstein spent the last half of his life in a fruitless quest for what he called a unified field theory: a system of equations that would describe not only gravitation and electromagnetism, but also �atomic matter� itself. Similar fates awaited Schroedinger, Heisenberg, and for a time Wolfgang Pauli. Today we know a great deal more. Our standard model offers a rather complete and correct description of all elementary-particle phenomena, but it cannot describe gravity. Superstring theory offers a quantum theory of gravity that may be compatible with the standard model, but it has not (and perhaps cannot) answer such questions as why quarks and leptons have their observed masses and mixings. Will the 21st century bring us any closer to the realization of Einstein�s dream? Can there be a Theory of Everything?";break;
case "Ponente_C_Sheldon":
$strTexto = "<b>Boston University</b>".
"<br><br>Born in New York City in 1932 and educated in its public schools, Glashow attended college at Cornell University and received his PhD from Harvard University. After several years at the Niels Bohr Institue, Cal Tech, Stanford University, and the University of California at Berkeley, he joined the faculty at Harvard in 1966, where he remained as Higgins Professor of Physics until 2000. He is presently University Professor and Metcalf Professor of Science at Boston University. ".
"<br><br>Professor Glashow is the author of three books and over 300 professional and popular articles. He is a member of the American Philosophical Society, The American Academy of Arts and Sciences, and the National Academies of Science of the USA, Russia, Korea and Costa Rica. ".
"<br><br>In 1979 Professor Glashow shared the Nobel Prize in Physics for his contributions toward a unified theory of the weak and electromagnetic interactions. ";break;
case "Ponente_A_Dudley":
$strTexto = "<b>Brownian Motion and Molecular Motors</b>".
"<br><br>In his 1905 paper on Brownian motion, Einstein balanced a 'systematic force,' the Stokes drag force on particles in a colloidial suspension, with the random, fluctuating force generated by thermal motion of solvent molecules.  He also treated diffusion in a new way, as a Markovian process.  These strategies enabled him to reconcile Brownian motion with the second law of thermodynamics and also led to several means of determining Avogadro's number, yielding consistent results that confirmed the reality of molecules.  ".
"<br><br>Today kindred strategies elucidate the seemingly paradoxical operation of 'molecular 'motors,' such as a enzyme moving along a DNA template strand while catalyzing its replication.  A typical such enzyme motor 'burns' hundreds of molecules of adenosine triphosphate per second.  However, this chemical power is miniscule compared with the random thermal noise power encountered by the motor in traveling through water.  The discrepancy is about nine orders of magnitude.  Yet enzymes perform myriad and highly specific chemical tasks with remarkable efficiency. ".
"<br><br>In this talk, my aim is to offer homage to Einstein's legacy by emphasizing how his ideas have been incarnated in current models for enzyme motors. Brownian fluctuations allow enzymes to rapidly explore a vast range of configurations and thereby to exploit those that enable chemical forces to induce reaction.  Thus, it is the thermal noise of Brownian motion that permits enzymes to retify diffusion and produce the directed molecular motions essential for biological processes.";break;
case "Ponente_C_Dudley":
$strTexto = "<b>Harvard University</b>".
"<br><br>Was born in San Jose, California (1932) and received his B.S. degree in Mathematics (1954) and M.S. in Chemistry (1955) at Stanford University, followed by an A.M. degree in Physics (1956) and Ph.D. in Chemical Physics (1958) at Harvard. ".
"<br><br>In 1963 he returned to Harvard as Professor of Chemistry where he became Baird Professor of Science (1976-2003). He is now a Research Professor (Emeritus). His teaching includes graduate courses in quantum mechanics, chemical kinetics, molecular spectroscopy, and collision theory, as well as undergraduate courses in physical chemistry and general chemistry for freshmen, his most challenging assignment. Currently he gives a freshman seminar course on Molecular Motors and an informal graduate 'minicourse' on topics in chemical physics. He is engaged in several efforts to improve K-16 science education and public understanding of science. He serves as Chair of the Board of Trustees of Science Service, which publishes Science News and conducts the Intel Science Talent Search and the Intel International Science and Engineering Fair. ".
"<br><br>Professor Herschbach is a member of many academies and institutions and has received numerous international honors and awards. His current research is devoted to methods of orienting molecules for studies of collision stereodynamics, means of slowing and trapping molecules in order to examine chemistry at long deBroglie wavelengths, molecular transformations induced by high-pressure, a dimensional scaling approach to strongly correlated many-particle interactions, and theoretical analysis of molecular motors, particularly enzyme-DNA systems.";break;
case "Ponente_A_Hewish":
$strTexto = "<b>Pulsar Physics and testing Einstein</b>".
"<br><br>Formed during the gravitational collapse of exploding stars, pulsars are stars ".
"<br><br>containing neutron matter at densities of 100,000 billion tonnes per cubic ".
"metre. Surrounded by intense gravitational fields, and spinning at up to 600 ".
"revolutions per second, pulsars provide highly accurate astronomical clocks in ".
"<br><br>ideal environments for precision tests of general relativity. In addition, ".
"understanding the behaviour of pulsars involves the physics of quantum ".
"liquids, relativistic magneto-hydromechanics, and the generation of coherent ".
"radiation by relativistic plasmas. The discovery of pulsars in 1967 stimulated ".
"<br><br>research in many different branches of astrophysics and progress in this ".
"exciting field will be summarised. ".
"<br><br>CV: Antony Hewish was born in Fowey, Cornwall, in 1924. After one year at ".
"Cambridge University he carried out three years war service, from 1943-46, at ".
"the Royal Aircraft Establishment, Farnborough. Returning to Cambridge he ".
"completed his degree course in 1948, and joined Martin Ryle's team to start ".
"research in radio astronomy. He was involved with Ryle's pioneering sky ".
"surveys of radio galaxies and later designed a large phased-array antenna to ".
"measure the angular sizes of quasars using scintillation induced by the solar ".
"wind. It was during this work, in 1967, that he discovered pulsars, with ".
"his student Jocelyn Bell-Burnell, In 1974 he was awarded the Nobel Prize for ".
"Physics (jointly with Ryle) for his role in this discovery. During 1982-87 ".
"Hewish was Director of the Mullard Radio Astronomy Observatory at Cambridge. ".
"He formally retired from his academic post as Professor of Radioastronomy in ".
"1989. Throughout his career at Cambridge he was involved with teaching ".
"physics.";break;
case "Ponente_C_Hewish":
$strTexto = "Was born in Fowey, Cornwall, in 1924. After one year at Cambridge University he carried out three years war service, from 1943-46, at the Royal Aircraft Establishment, Farnborough. Returning to Cambridge he completed his degree course in 1948, and joined Martin Ryle�s team to start research in radio astronomy. He was involved with Ryle�s pioneering sky surveys of radio galaxies and later designed a large phased-array antenna to measure the angular sizes of quasars using scintillation induced by the solar wind. It was during this work, in 1967, that he discovered pulsars, with his student Jocelyn Bell-Burnell. In 1974, Professor Hewish was awarded the Nobel Prize for Physics (jointly with Ryle) for his role in this discovery. ";break;
case "Ponente_A_Miller":
$strTexto = "<b>Einstein, Picasso Space, Time, and the Beauty That Causes Havoc.</b>".
"<br><br>The most important scientist of the twentieth century, and its most important artist, went through their periods of greatest creativity almost simultaneously and in remarkably similar circumstances. I will focus on their greatest breakthroughs: Einstein's special theory of relativity and Picasso's Les Demoiselles d'Avignon.  When they produced these astonishing works, Einstein and Picasso were not the distinguished elderly figures that later became so familiar: they were in their twenties, unknown, feisty, dirt-poor, and prone to getting into trouble - their personal and creative beauty caused havoc. ".
"<br><br>They both responded to the tidal wave of the avant-garde.  For Picasso this included the newly invented medium of moving pictures, photography, and cutting-edge science and philosophy.  Einstein immersed himself in such key technological problems as the design of electric dynamos and the co-ordination of train schedules. ".
"<br><br>Behind the many similarities in their lives and circumstances, and in what they had to endure in order to produce such masterpieces, lies a greater, unifying point.  Einstein and Picasso both came of age at the exact moment in history when it was first becoming apparent that classical, intuitive ways of understanding space and time are not adequate.  They were both working on the same problem: the nature of space and time and, more particularly, simultaneity.";break;
case "Ponente_C_Miller":
$strTexto = "<b>University College, London</b>".
"<br><br>Arthur I. Miller is Professor of History and Philosophy of Science at University College London. He has appeared on numerous TV and radio programs, ahd has written and lectured widely on the history and philosophy of modern science, cognitive science, scientific creativity and the relation between art and science. His many books include Albert Einstein's Special Theory of Relativity, Sixty-Two Years of Uncertainty, and Insights of Genius: Imagery and Creativity in Science and Art.";break;
case "Ponente_A_Rebolo":
$strTexto = "<b>Origin and Evolution of the Universe: the Challenges of Cosmology</b> ".
"<br><br>Observations of the large scale distribution of galaxies in the Universe, of supernova explosions in very distant galaxies and high-sensitivity measurements of the anisotropy of the Cosmic Microwave Background - the relict radiation from the Early Universe�strongly support the idea that the Cosmos is dominated by exotic forms of matter and energy.".
"<br><br>The major form of matter in the Universe, five times more abundant than ordinary matter, appears to be of a very weakly interactive nature. Major efforts are being undertaken in  laboratories to identify the particle responsible. The dominant form of energy, the so-called vacuum energy, is related to the cosmological constant suggested by Einstein in his equations for General Relativity and responsible for an accelerated expansion of the Universe at present. Recent advances in our understanding of these crucial   components and their role in the evolution of the Universe will be reviewed.";break;
case "Ponente_C_Rebolo":
$strTexto = "<b>Instituto de Astrof�sica de Canarias (CSIC)</b>".
"<br><br>Born in Cartagena, Spain in 1961, he gained his primary degree in physical sciences from the Universidad de Granada and a PhD in astrophysics from the Universidad de La Laguna. He is currently the Research Lecturer of the Higher Council for Scientific Research in the Instituto de Astrof�sica de Canarias (IAC) and Associate Lecturer of the Max Planck Institute f�r Astronomie. ".
"<br><br>He was the head of the Scientific Division of the IAC and received the �King Jaime I� and �Canarias� prizes for Research and the �Iberdrola� Prize for Science and Technology.".
"<br><br>He directs several projects on the origin of chemical elements, the Cosmic Microwave Background, giant planets and brown dwarves. He has co-authored more than 130 scientific publications in refereed journals, totalling over 3000 citations.".
"<br><br>He is a member of the governing boards of the European Association for Research in Astronomy and the European Optical Infrared Coordination Network for Astronomy and a corresponding member of the Real Academia de Ciencias de Espa�a.";break;
case "Ponente_A_Rohrer":
$strTexto = "<b>Nano is Different</b> ".
"<br><br>Miniaturization of electronic components has been the key to their ever-accelerating pervasiveness in a world of electronic control in daily life to most advanced scientific adventures, of high speed computing, and of world embracing communications as never before. Increased miniaturization through nanotechnology will undoubtedly bring about an unprecedented level of diffusion of electronic technology throughout society and the world.".
"<br><br>But nano science and -technology is not simply a continuation of miniaturization from the micro to the nano scale, respectively. Nano is different. The transition from micro to nano is a disruptive step, a discontinuous continuation, in many ways: in component size, in technologies, in analytics, in material properties, and in concepts. Nano science and -technology stand at the confluence of classical and quantum mechanical properties and behavior and of a multiplicity of fields such as condensed matter physics and technology, macromolecular chemistry, and biology. Nano-mechanics and nano-chemistry are forging new pathways between the 'virtual' world of data processing of all kinds, including mechanical, chemical and thermal processing, and the 'real' world of sensing and actuation, bringing about a pervasive wave of new, integrated processing, sensing, and actuation technologies.".
"<br><br>It is this difference that poses the grand challenges in the nano age and that carries the promise for nano science and -technology to become a most important cornerstone of the science and technology world in this century.";break;
case "Ponente_C_Rohrer":
$strTexto = "Heinrich Rohrer studied Experimental Physics at the Swiss Federal Institute of Technology Zurich (ETHZ). In 1963, after two years as Post-doc in the USA, he joined the IBM Zurich Research Laboratory. Prof. Rohrer was awarded the Nobel Prize in Physics in 1986 for his work on Scanning Tunneling Microscopy. He retired from IBM in 1997 and took various science appointments in Switzerland, Japan and Spain.";break;
case "Ponente_A_Ron":
$strTexto = "<b>Einstein and philosophy in the 20th century</b>".
"<br><br>Albert Einstein is acknowledged as the greatest scientist of the 20th century and one the greatest of all times, but his influence did not manifest itself on science but also on philosophy, and most specially on epistemology and methodology. In my intervention I will discuss the following themes: 1) the influence that philosophy had on Einstein during his most productive years, and how he interacted at that time with some philosophers (such as Mach or Schlick); 2) how his 'philosophy of science' changed following �and coherently with� the evolution of his scientific interests and points of view; 3) how his scientific contributions, mostly in special and general relativity, influenced 20th century philosophy, paying special attention to British philosophers circa 1910-1930, Jos� Ortega y Gasset, as well as members of the Vienna Circle and others related to this movement, mainly Hans Reichenbach and Karl Popper.";break;
case "Ponente_C_Ron":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>".
"<br><br>Born in Madrid in 1949, Dr. S�nchez-Ron obtained his first degree in physics from Universidad Complutense, Madrid (1971). He obtained his PhD at University College London. He is now full professor in History of Science at Universidad Complutense in Madrid. Member of the Real Academia Espa�ola (2003) and of the Academia Europea de Ciencias y Artes (Academia Scientiarum et Artium Europaea; 2003). ".
"<br><br>Dr. S�nchez-Ron is author of more than 20 books, among them El origen y desarrollo de la relatividad (1983), La Espa�a posible de la Segunda Rep�blica. La oferta a Einstein de una c�tedra extraordinaria en la Universidad Central (Madrid 1933), in collaboration with Thomas F. Glick (1983), El poder de la ciencia (1992), Miguel Catal�n. Su obra y su mundo (1994), editor with Paul Forman of National Military Establishments and the Advancement of Science and Technology (1996), Cincel, martillo y piedra. Historia de la ciencia en Espa�a (siglos XIX y XX) (1999), El mundo de Marie Curie (2000), El Siglo de la Ciencia (2000), for which he received the Jos� Ortega y Gasset Prize of Humanities.  ".
"<br><br>He is also author of numerous articles, most recently, 'Larmor versus general relativity', Einstein Studies (1999); 'Einstein, general relativity and the field concept', in Relativity and Gravitation in General (1999); and 'International relations in Spanish physics from 1900 to the Cold War', Historical Studies in the Physical and Biological Sciences 33 (2002).";break;
case "Ponente_A_Stachel":
$strTexto = "<b>Einstein�s Greatest Dream� A Background-Independent Physics</b>".
"<br><br>Quantum field theorists have spent the last sixty years in a fruitless attempt to quantize general relativity using the methods of (special-relativistic) quantum field theory. More recently, string theorists have attempted to invent a TOE (Theory of Everything), out of which general relativity� or a reasonable facsimile thereof� would emerge as a by-product. Both standard quantum field theory and standard string theory have depended crucially on the presence of a fixed, given background space-time structure of four (or more, in the case of string theory) dimensions. General relativity is the first example of a completely background-independent physical theory, in which the space-time structures themselves become dynamical entities. If current attempts to create a background-independent quantization technique and apply it to general relativity are successful, the quest for a background-independent physics will be seen as Einstein�s greatest dream.";break;
case "Ponente_C_Stachel":
$strTexto = "<b> Boston University.</b>".
"<br><br>Did his doctoral work on a topic in general relativity. He was an instructor of Physics at Lehigh University from 1959 to 1961 and the University of Pittsburgh from 1961 to 1962, and Research Associate in Physics at the latter school from 1962 to 1964. Since then, he has been a member of the Physics Department of Boston University. He is currently Profesor Emeritus of Physics. He has been a guest faculty member at a number of other institutions including Princeton University; The University of California at Berkeley; King�s College, London; the University of Paris VI, the Center for Advanced Studies of the IPN, M�xico City, the Institute for Theoretical Physics, Warsaw, and the Max-Planck-Institute for the History of Science, Berlin. ".
"<br><br>He currently directs the Boston University Center for Einstein Studies, which has sponsored a series of conferences on the history of general relativity, Einstein�s early years, etc; and co-edits (with Don Howard) the Center�s series of Einstein Studies, nine volumes of which have been published, four directly concerned with the history of general relativity. ".
"<br><br>In addition to about a hundred articles on topics in theoretical physics and the history and philosophy of science, Professor Stachel was the founding editor of The Collected Papers of Albert Einstein. He also edited Einstein�s Miraculous Year, an annotated English edition of all of Einstein�s 1905 papers, which has been translated into over half a dozen languages. He is the author of Einstein From �B� to �Z�, a collection of his own writings about Einstein; and Going Critical, a two-volume collection of his papers on other topics, is in press. ".
"<br><br>Professor Stachel is also editor of, among other books, Conceptual Problems of Quantum Gravity - Proceedings of the 1988 Osgood Hill Conference (with Abhay Ashtekar), and much of his current work is concerned with this topic. ".
"<br><br>He has also written studies of 'Marx�s Critical Concept of Science' and |'Science and Capitalism,' and is currently concerned with their implications for problems of the contemporary labor movement. ".
"<br><br>He was recently honored by a Festschrift dedicated to him.";break;
case "Ponente_A_Cohen":
$strTexto = "<b>Bose Einstein Condensates : a New Form of Matter</b>".
"<br><br>Our ability to manipulate atoms with laser light has considerably increased during the last few decades. Laser cooling and trapping methods, combined with magnetic trapping and evaporative cooling, allow now atomic gases to be cooled at very low temperatures, in the nanokelvin range, and to reach the quantum degenerate regime where the mean distance between atoms becomes smaller than the de Broglie wavelength. The atomic de Broglie waves then overlap and interfere, giving rise to new situations where a macroscopic number of atoms condense in the same quantum state. These macroscopic matter waves exhibit fascinating properties such as coherence or superfluidity. Recent developments in this field will be described and it will be shown how it is possible to observe on such dilute systems, about 100000 more dilute than air, effects which, up to now, have been investigated only in condensed matter.";break;
case "Ponente_C_Cohen":
$strTexto = "<b>Coll�ge de France and Laboratoire Kastler Brossel.</b> ".
"<br><br>Claude Cohen-Tannoudji was born in 1933. He completed his Ph.D. in 1962 at Ecole Normale Sup�rieure in Paris. He then held a position of Professor at the University of Paris from 1964 to 1973. Since 1973, he is Professor of Atomic and Molecular Physics at the Coll�ge de France in Paris. ".
"<br><br>Professor Cohen-Tannoudji has written 3 books and published approximately 200 theoretical and experimental papers dealing with various problems of atomic physics and quantum optics: optical pumping and light shifts, dressed atom approach for understanding the behaviour of atoms in intense RF or optical fields, quantum interference effects, resonance fluorescence, photon correlations, physical interpretation of radiative corrections, radiative forces, laser cooling and trapping, Bose-Einstein condensation, etc. ".
"<br><br>Professor Cohen-Tannoudji has received many distinctions, among them the 1997 Nobel Prize in Physics shared with Steven Phillips and Steven Chu.";break;
case "Ponente_A_Yndurain":
$strTexto = "<b>Relativity, Photons and Particles</b>".
"<br><br>In 1905, Albert Einstein wrote three articles which would prove to be fundamental for the development of twentieth century science: an article on Brownian movement, which offered an extremely precise method for counting atoms and made it possible to definitively establish the corpuscular structure of matter; an article in which he developed his theory of relativity, some consequences of which we will analyse here; and finally, an article in which he established that light (which until then had been considered to be wave motion) behaved, in its photoelectric effect, as particles, which he called Lichtquanten�what we now call photons.".
"<br><br>One of the results of this last (and perhaps most important) discovery, was the development of quantum mechanics.".
"<br><br>We shall discuss Einstein's brilliant intuition in formulating the theory of relativity and going beyond Lorentz and Poincar�; and the introduction of the concept of the photon, an even more audacious proposal, since it meant that something�light�can be at the same time a wave and a particle, a paradox which would only be clarified twenty years later with Heisenberg's Uncertainty Principle.".
"<br><br>We will consider some of the effects of Einstein's discoveries: among them perhaps the most famous equation in physics, E=mc�; and the interplay of relativity and quantum mechanics, which, for electro-magnetic interactions, has produced the most precise theory which humankind has yet managed to create. ".
"<br><br>This theory, known as quantum electrodynamics, is so exact that for interactions involving photons, its calculations involve a precision of up to eleven significant figures in the agreement between theory and experiment.";break;
case "Ponente_C_Yndurain":
$strTexto = "<b>Universidad Aut�noma, Madrid.</b> ".
"<br><br>Born in Benavente (Zamora), 23 December 1940. Received his primary degree and PhD in Mathematics from the Universidad de Zaragoza in 1962 and 1964 respectively. He has been a Professor of Theoretical Physics since 1968, and since 1972 the holds the same chair in the Universidad Aut�noma de Madrid, where he has been Dean and Vice-rector.".
"<br><br>He has been Associate Researcher, Fellow, Visiting Lecturer and Lecturer in the following institutions: University of Paris (Orsay), Central University of Venezuela, University of Groningen, Marseilles, Michigan, La Plata, New York University; and in the Inter-American Centre for Theoretical Physics in Bogot�, E. Schr�dinger Institute (Vienna), the Centre d�Energie Nucl�aire de Saclay, NIKHEF (Amsterdam), Brookhaven National Laboratory (USA) and CERN (among others).".
"<br><br>Has was an invited member of the New York Academy of Sciences and the American Association for the Advancement of Science, member of the High Energy Physics Board of the European Physics Society (six years), and Member of the Committee on Scientific Policy of the CERN (six years). ".
"<br><br>Professor Yndurain has gained numerous appointments and distinctions, among which the most important are his appointment as founding member of the European Physical Society, member of the Real Academia de Ciencias de Espa�a and the Academia Europaea.".
"<br><br>He is a Cavalliere Ufficiale nell�Ordine al Merito of the Italian Republic; His awards include the prize for scientific research from the Real Academia de Ciencias and the gold medal of the Real Sociedad Espa�ola de F�sica. He was named Distinguished Guest of the Universidad de La Plata, Argentina.".
"<br><br>He has written a number of books on science: Quantum Chromodynamics, Springer Verlag (1983),translated into Russian: Kvantovaya Khromodinamika, Mir Publications, 1986. Second edition corrected and enlarged: The Theory of Quark and Gluon Interactions, Springer Verlag, (1993). Third edition in English, corrected and enlarged: Springer Verlag, (1999). Mec�nica Cu�ntica, Alianza Editorial (1988); second edition, 2003 (Ed. Ariel). Mec�nica Cu�ntica Relativista, Alianza Editorial (1990); English edition, corrected and enlarged: Relativist Quantum Mechanics: with an Introduction to Field Theory, Springer Verlag 1996.".
"<br><br>He has been the author or co-author of more than one hundred scientific works, most on high energy and elementary particle physics, and some on mathematical physics, condensed matter physics and nuclear physics.".
"<br><br>He has written a number of educational articles, in Investigaci�n y Ciencia, Arbor, La Revista de Occidente, etc., and in contributions to books with collective authorship. ".
"<br><br>He has written several educational books: Teor�as unificadas y constituyentes fundamentales de la materia, Espasa Calpe, 1988; Electrones, neutrinos y quarks, Ed. Cr�tica, 2001; and a collection of essays Los desaf�os de la ciencia, Ed. Cr�tica, 2003. ".
"<br><br>He was the author of the speculative book �Qui�n Anda Ah�?, Ed. Debate, 1997, which won the �La Golondriz� prize 1998 for intelligent humour.";break;
case "Ponente_A_Zeilinger":
$strTexto = "<b>Einstein and the Quantum World today </b>".
"<br><br>Einstein criticized Quantum Physics most notably for the new role played by chance in individual quantum events and for the conflict of quantum entanglement with a local realistic world view. Today, randomness and entanglement have become essential elements of a new information technology utilizing individual quantum systems. In the talk this we discuss on the basis of recent experiments in quantum cryptography and quantum teleportation. In entanglement-based quantum cryptography the randomness of the individual events serves to create the secure key. In quantum teleportation entanglement provides the quantum channel to transfer the state of the original. As the experimental results fully confirm all quantum predictions, the philosophical issues raised by Einstein still await the full resolution. It is suggested to assume that the notion of information plays an essential role in the foundations of quantum theory.";break;
case "Ponente_C_Zeilinger":
$strTexto = "<b>University of Vienna</b> ".
"<br><br>Was born in Vienna in 1945. He studied Physics and Mathematics in his home town and received his PhD on Neutron Depolarization in Dysprosium Single Crystals under the supervision of Prof. H. Rauch. He has covered positions in many countries, but his stays as a researcher in the Laue-Langevin Institute in Grenoble France (1974-1989), MIT (1977-1983), University of Munich (1988-1989) and University of Innsbruck (1990-1999) are most notable. He is currently at the Department of Experimental Physics in Vienna, since 1999. His work on teletransportation has been widely acclaimed. ".
"<br><br>Professor Zeilinger is full member of the Austrian Academy of Sciences, fellow of the American Physical Society and member of Academia Scientiarum et Artium Europaea. His full curriculum vitae can be consulted at <a href='http://www.quantum.univie.ac.at/zeilinger' target='_blank'>www.quantum.univie.ac.at/zeilinger/.</a>";break;
case "Ponente_A_Pascual":
$strTexto = "<b>Einstein and Light Quanta</b>".
"<br><br>The lecture is intended to offer a simple discussion of Albert Einstein's two most outstanding contributions in the area of light quanta. ".
"<br><br>The first was his famous work of 1905 in which he explained the photoelectric effect (when a light is shone on a metal plate with electromagnetic radiation, the metal emits electrons) by concluding that monochromatic electromagnetic radiation at a certain frequency acts as if it consisted of a finite number of localised and independent energy quanta, of a magnitude equal to Planck's constant multiplied by the frequency. In 1921 Einstein received the Nobel Prize for Physics �for his services to Theoretical Physics, and especially for his discovery of the law of the photoelectric effect.� ".
"<br><br>Einstein's second great contribution was published in 1917 in a work in which he examined the thermal equilibrium of an atomic gas in interaction with the electromagnetic radiation and established a relation between the coefficients of spontaneous and induced emission and the coefficient of induced absorption. He discovered that for the induced emission of the light quanta produced with a given energy they had a momentum equal to their energy divided by the speed of light. This work is now recognised as the theoretical basis of the laser. ";break;
case "Ponente_C_Pascual":
$strTexto = "<b>Universidad Central, Barcelona</b> ".
"<br><br>Was born in Seville on 27 April 1934.".
"<br><br>He holds a primary degree and a PhD in Physics.".
"<br><br>Professor of Theoretical Physics from 1963 to 2000, at the Universidad de Valencia and Universidad de Barcelona.".
"<br><br>Worked at the University of Chicago (22 months), at the CERN (25 months) and at the Universit� de Marseilles (5 months).".
"<br><br>Director of the GIFT (Grupo Interuniversitario de F�sica Te�rica) (1970-74)".
"<br><br>First administrator of the National High Energy Plan (1984-89)".
"<br><br>Member of the �Committee for the European Development of Science and Technology� (CODEST), general advisory committee to the Commission of the European Communities (1986-92)".
"<br><br>Scientific Advisor to the Secretary of State for Universities and Research (1988-93)".
"<br><br>First Coordinator General of the National Commission for the Assessment of Research Activity (1989-93)".
"<br><br>Scientific Consultant to Iberdrola S. A.. (1992-2002)".
"<br><br>Creator and Managing Director of the �Fundaci�n Centro de Ciencias de Benasque� (1995- )".
"<br><br>First Organiser and Chairman of the Jury of the �Distinci� de la Generalitat de Catalunya per a la Promoci� de la Recerca�. (2000-03)".
"<br><br>His primary field of investigation is the quantum theory of fields, on which he has published numerous works.".
"<br><br>His most important published books include: ".
"<br><br>�Mec�nica Cu�ntica�. A.. Galindo and P. Pascual. Editorial Alhambra. Pages. XV + 749 pages. Madrid, 1978.".
"<br><br>�QCD: Renormalization for the Practitioner�. P. Pascual and R. Tarrach. Lecture Notes in Physics, 194. Springer Verlag. 277 pages. Berlin, 1984.".
"<br><br>�Problemas de Mec�nica Cu�ntica�. A. Galindo and P. Pascual. Editorial Eudema. 615 pages. Madrid, 1989.".
"<br><br>�Mec�nica Cu�ntica�. A. Galindo and P. Pascual. Editorial Eudema. Vol. I, 501 pages and Vol. II, 441 pages. Madrid, 1989. This is an extended and corrected version of the first work above. The book also exists in English translation - �Quantum Mechanics�. A. Galindo and P. Pascual. Springer Verlag. Vol. I XVI + 417 and Vol. II XVI + 374. Berlin, 1990. The rights of the Italian translation of this work were bought by the publisher Nichola Zanichelli. ".
"<br><br><br>Among other distinctions he has received: ".
"<br><br>Medal of the Real Sociedad Espa�ola de F�sica for Merit in Research. (1973)".
"<br><br>National �Santiago Ram�n y Cajal 1985� Prize for Scientific Research. ".
"<br><br>�Narc�s Monturiol� medal for scientific and technological merit (1986)".
"<br><br>Named �Scientist of the Year� by the magazine �Cambio 16�. (1987)".
"<br><br>Honorary doctorate from the Universidad de Valencia. (1987)".
"<br><br>Awarded the �Gran Cruz de la Orden Civil de Alfonso X el Sabio�. (1995)".
"<br><br>Awarded the �Medalla d�Or al M�rit Cient�fic de la Fundaci� Catalana per la Recerca�. (1996) ".
"<br><br>Awarded the �Insignia de Ouro da Universidade�. Universidad de Santiago de Compostela. (1999)";break;
case "Ponente_C_Flores":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>.".
"<br><br>Born in Cartagena (1939). ".
"<br><br>Degree in Civil Engineering (1963), Physics (1966) and PhD in Engineering (1970) ".
"<br><br>Professor of Condensed Matter Physics (1975 ), Universidad Aut�noma de Madrid ".
"<br><br>Head of Department and Director of the Instituto de Ciencia de Materiales at the UAM (alternate periods between 1980 and 2004).".
"<br><br>Has published over 320 articles in international journals and several books. ".
"<br><br>Has directed 22 PhD theses. ".
"<br><br>Has received the following awards: Gold Medal of the Real Sociedad Espa�ola de F�sica (1991); Fellowship of the American Physical Society (1987); Iberdrola Prize (1993); Blas Cabrera National Physics Prize (2001); Medal of the Colegio de Ingeniero de Caminos (2004) Also awarded the �Laurel of the Region of Murcia� (1994), �Alumbre Prize� (Fundaci�n Emma Egea , 2002) and �La Verdad de Murcia Science Prize� (2003)";break;
"<br><br>He was the author of the speculative book �Qui�n Anda Ah�?, Ed. Debate, 1997, which won the �La Golondriz� prize 1998 for intelligent humour.";break;
case "Ponente_A_Lucas":
$strTexto = "<b>Einstein and Diffusion Phenomena that Changed the Course of Human Affairs</b>".
"<br><br>The linear diffusion equation, to which Einstein's name is particularly attached via his celebrated study of the Brownian motion, constitutes the essential mathematical 'scribble' at the basis of a number of world-changing discoveries. Several of these, chosen from a great variety of historical situations, will be reviewed in this lecture: the early global communication by telegraph, the age of the earth, the size of atoms, the atomic bomb and the mode of DNA replication.";break;
case "Ponente_C_Lucas":
$strTexto = "<b>Universit� de Namur, Belgium</b> ".
"<br><br>Professor Lucas was born in 1936, in Li�ge, Belgium. He obtained his PhD in Condensed Matter Physics from the University of Li�ge in 1966. As a Research Associate of the Belgian National Science Foundation, specializing in Surface Physics, he held a postdoctoral position at Battelle Institute, Columbus, Ohio (67-68), and Visiting Scientist positions at ICTP, Trieste (71) and ESA, Nordwijk (72). Professor Lucas has held a chair of Physics at Namur University since 1974 (retired since 2002). He has spent sabbaticals at IBM Yorktown (78), and IBM Almaden (87). He has been awarded the 1985 Belgian Francqui Prize, for contributions to electron spectroscopy of solid state excitations, and the 2001 Wernaers Prize, for original contributions to the teaching of structural biology. He is Fellow of the American Physical Society, Member of the Acad�mie Royale de Belgique, of the Academia Europaea and of the European Academy of Sciences, Arts and Letters.";break;
case "Ponente_A_Flores":
$strTexto = "<b>Matter and Form</b>".
"<br><br>Five of the texts published by Einstein in his <i>Annus Mirabilis</i> of 1905 altered the direction of twentieth century physics. Although his theory of relativity and his discussion of concepts of time and space are popularly viewed as his most revolutionary work, his contribution to the quantum hypothesis on radiation and the atomic nature of matter (Brownian movement) paved the way for the physics of the new century. Together with these articles, his later contributions to Bose-Einstein statistics prefigured the way we would eventually understand condensed �matter�. ".
"<br><br>I will illustrate this development with some examples (superconductivity and superfluidity) which we can consider as a phase transition of a boson gas. I will also discuss how our current way of understanding condensed �matter� draws extensively on quantum-mechanical numerical simulations: in this regard I will provide some examples to show how we are beginning to bring together the macroscopic and the atomic in nanotechnologies.";break;
case "Menu_Patrocinadores":
$strTexto = "<table width=100% border=0><tr>".
"<td align=center><a href='http://www.ehu.es/' target='_blank'><img src=images/upv.jpg border=0><br>&nbsp;<u>University of the basque country</u></a></td>".
"<td align=center><a href='http://www.kutxa.net' target='_blank'><img src=images/kutxa.jpg border=0><br>&nbsp;<u>".sEscribir("Kutxa")."</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.hezkuntza.ejgv.euskadi.net' target='_blank'><img src=images/gob1.jpg border=0><br>&nbsp;<u>Basque Government<br>Departament of Education,<br>Universities and Research </u></a></td>".
"<td align=center><a href='http://www.industria.ejgv.euskadi.net' target='_blank'><img src=images/gob2.jpg border=0><br>&nbsp;<u>Basque Government<br>Departament of Industry,<br>Commerce and Tourism </u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.gipuzkoa.net' target='_blank'><img src=images/foro.jpg border=0><br>&nbsp;<u>".sEscribir("Diputacion")."</u></a></td>".
"<td align=center><a href='http://www.donostia.org' target='_blank'><img src=images/ayunta.jpg border=0><br>&nbsp;<u>".sEscribir("Ayuntamiento")."</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.csic.es' target='_blank'><img src=images/csic.gif border=0><br>&nbsp;<u>Consejo Superior de<br>Investigaciones Cient�ficas</u></a></td>".
"<td align=center><a href='http://www.naturgas.es' target='_blank'><img src=images/LogoNaturgas.jpg border=0><br>&nbsp;<u>Naturgas</u></a></td></tr>".
"<tr><td colspan=2 height=5></td></tr>".
"<tr><td align=center><a href='http://www.fundacion.telefonica.com' target='_blank'><img src=images/LogoTelefonica.jpg border=0><br>&nbsp;<u>Fundaci�n Telef�nica</u></a></td>".
"<td align=center></td></tr></table>";break;
case "Menu_ComiteOrganizador":
$strTexto="<b>Organising Committee</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Chairman:</b> Alberto Galindo (Professor of Theoretical Physics at the Universidad Complutense de Madrid)".					
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Co-chairmen: </b>Pedro Miguel Echenique (President of DIPC), Juan Colmenero (Director General of DIPC) ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Coordinators:</b> Unai Ugalde (University of the basque country), Juan Jos� Iruin (University of the basque country)";break;
case "Menu_Contacto":
$strTexto= "<b>TECHNICAL SECRETARY: TISA CONGRESOS</b>".
"<br><br>Ref. Congreso Einstein ".
"<br>Avda. de la Libertad, 17-5� - 20004 Donostia-San Sebasti�n ".
"<br>Tel. 943 425420 ".
"<br>Fax 943 422124 ".
"<br>e-mail: <a href='mailto:tisa-congresos@infonegocio.com'><u>tisa-congresos@infonegocio.com</u></a> ";break;
case "GobiernoVasco": $strTexto="Basque Government";break;
case "Kutxa": $strTexto="Kutxa";break;
case "UPV": $strTexto="University of the basque country";break;
case "Diputacion": $strTexto="Provincial Government of Gipuzkoa";break;
case "Ayuntamiento": $strTexto="San Sebastian City Council";break;
}
break;
}
return $strTexto;
}?>
