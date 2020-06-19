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
case "AlbertEinstein": $strTexto="Albert Einstein";break;
case "Alojamientos": $strTexto="Alojamientos";break;
case "Becas": $strTexto="Becas";break;
case "BuscadorNoticias": $strTexto="Buscador de noticias";break;
case "ComiteOrganizativo": $strTexto="Comit� Organizador";break;
case "ComoInscribirse": $strTexto="Como inscribirse";break;
case "ComoLlegarASanSebastian": $strTexto="Como llegar a<br>San Sebasti�n";break;
case "Contacto": $strTexto="Contacto";break;
case "Copyright": $strTexto="Copyright";break;
case "Culminacion": $strTexto="Culminaci�n de la relatividad";break;
case "DIPC": $strTexto="DIPC";break;
case "DossierDePrensa": $strTexto="Dossier de prensa";break;
case "ElPaisVasco": $strTexto="El Pa�s Vasco";break;
case "EventosParalelos": $strTexto="Eventos paralelos";break;
case "FormularioDeAcreditacion": $strTexto="Formulario de acreditaci�n";break;
case "GaleriaDeImagenes": $strTexto="Galer�a de im�genes";break;
case "Home": $strTexto="Home";break;
case "ImpactoDeLaObra": $strTexto="Impacto de la obra";break;
case "InformacionGeneral": $strTexto="Informaci�n general";break;
case "Inscripciones": $strTexto="Inscripciones";break;
case "Introduccion": $strTexto="Introducci�n";break;
case "Kutxaespacio": $strTexto="Kutxaespacio";break;
case "LaCiudad": $strTexto="La ciudad";break;
case "LaSede": $strTexto="La sede";break;
case "Links": $strTexto="Links";break;
case "LosCincoTrabajosDeEinstein": $strTexto="Los cinco trabajos de Einstein";break;
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
case "CAST": $strTexto="CAST";break;
case "ENGL": $strTexto="ENGL";break;
case "EUSK": $strTexto="EUSK";break;
case "Lunes5deSeptiembre": $strTexto="Lunes 5 de Septiembre";break;
case "Martes6deSeptiembre": $strTexto="Martes 6 de Septiembre";break;
case "Miercoles7deSeptiembre": $strTexto="Mi�rcoles 7 de Septiembre";break;
case "Jueves8deSeptiembre": $strTexto="Jueves 8 de Septiembre";break;
case "InfoGeneral_Introduccion":
$strTexto="<b>Presentaci�n</b>".
"<br><br>La Fundaci�n Donostia International Physics Center, le da la bienvenida a la informaci�n sobre los actos conmemorativos del centenario del <i>Annus mirabilis</i> de Albert Einstein que estamos organizando para los d�as 5 a 8 de Septiembre de 2005.".
"<br><br>En esa fecha se cumplir� el centenario de un a�o asombroso para la ciencia universal: 1905. Un a�o en el que surgi� un destello de singular creatividad por parte de un desconocido funcionario de patentes en Berna, que public� cinco trabajos que cambiar�an el curso de la f�sica, de la ciencia, y de la humanidad. La conmemoraci�n del <i>annus mirabilis</i> de Einstein resalta la importancia de la ciencia como motor del conocimiento y catalizador del desarrollo tecnol�gico y socioecon�mico.".
"<br><br>La figura de Einstein representa adem�s un excelente ejemplo para las nuevas generaciones. Fue una figura poco convencional, cuya creatividad e intuici�n le guiaron en su sue�o de entender el Universo de otra manera. ".
"<br><br>Estamos preparado una serie de actos conmemorativos del <i>annus mirabilis</i> de Einstein que pretenden poner en contacto a la sociedad con la actividad investigadora del m�s alto nivel. Le invitamos e examinar nuestro programa (link al programa).".
"<br><br>Los investigadores invitados son parte de la �lite mundial en F�sica, y adem�s representan un grupo privilegiado de investigadores, historiadores y fol�sofos en sus pa�ses.".
"<br><br>Los actos programados incluir�n conferencias plenarias y tem�ticas, as� como exposiciones para presentar la figura de Einstein a los ni�os y j�venes. ".
"<br><br>La inscripci�n para los actos ser� gratuita. La organizaci�n otorgar� un n�mero de becas para cubrir los gastos de asistencia. ".
"<br><br>Esperamos que disfrute en su d�a de los actos que estamos organizado, y de la Ciudad de San Sebastian (link), la m�s bella, sin duda,  de las capitales de Euskadi (link). ".
"<br><br><b>Pedro Miguel Etxeniqe ".
"<br>Presidente de DIPC</b>";break;
case "Info_PaisVasco":
$strTexto = "<b>The basque Country</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Nature:</b> ".
"<br>The basque country is a densely populated industrial region, but it also has extensive natural resources, with rich ecosystems that enjoy special protection. Nature parks, biosphere reserves and protected biotopes ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Culture:</b> ".
"<br>Basque cultural life is currently thriving and become one of the major galvanising elements of this society. Museums, monuments, festivals and other events. ".
"<br><br><img src='images/ico_bolita_on2.jpg'> <b>Leisure:</b> ".
"<br>The diversity of the region allows visitors to the basque country to choose from a complete and varied range of leisure activities. Active tourism, relaxation, shopping. ".
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
"<b>� ALBIZTUR</b>	Matia, 52 (Antiguo) Tel: 943 21 18 01 <br> Special menus: �15.63 - �21.04 � la carte Menu: �24-30 ".
"<br><br><b>� AMEZTI</b> P� Cristobal Balenciaga, 65 (Igeldo)<br>Tel: 943.21.73.23	 ".
"<br><br><b>� BARKAIZTEGI</b>	Camino Barkaiztegi, 42 (Martutene)<br>Tel: 943 45 55 01<br>  � la carte: �22.50 ".
"<br><br><b>� DONOSTIARRA</b>	Embeltr�n, 5 (Old Quarter)	Tel: 943 42 04 21 <br>Menu of the Day: �24.50.	 � la carte Menu: �20 - �40. ".
"<br><br><b>� GARBERA</b>	Ctro. Cial. Garbera Tel: 943:39.43.58 ".
"<br><br><b>� IGELDO</b>	P� Orkolaga, 8 (Igueldo) Tel: 943.21.32.51 � la carte: �24- �25 ".
"<br><br><b>� ITXAROPENA</b>	Embeltran 16 	Tel: 943.42.45.76<br> Sidrer�a set menu: �21 ".
"<br><br><b>� IZAGIRRE</b>	Bidarte Berri A�orga	Tel: 943.36.14.70 ".
"<br><br><b>� KUKUA</b>	Avda. Alcalde Jose Elosegi, 21 (Gros)<br>Tel: 943 27 16 29	 � la carte: �27 ".
"<br><br><b>� URKIOLA</b>	Camino de Igara, 37	Tel: 943.21.01.68	<br> � la carte: �21 - �25 ".
"<br><br><b>� LA CEPA</b>	San Bartolom�, 30-32 (Centre) 	Tel: 943 46 03 33	Menu of the Day: �8 <br> � la carte: �19 ".
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
$strTexto="<b>Miramon. KutxaEspacio de la Ciencia</b>".
"<br><br>El KutxaEspacio de la Ciencia como centro de informaci�n y".
"divulgaci�n cient�fica tiene previsto organizar una exposici�n".
"paralela a la celebraci�n de los actos para conmemorar la".
"celebraci�n del Annus Mirabilis de Albert Einstein.".
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
"<br><br>(Ver mapa) ".
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
"<br>L�neas: Hendaye (Francia) �<br>Donostia/San Sebasti�n - Lasarte (Topo)<br>Donostia � Donostia /San Sebasti�n - Bilbao ".
"<br>Tf.: 902 54 32 10<br><a href='http://www.euskotren.es' target='_blank'><u>www.euskotren.es</u></a></td> ".
"</tr></table></td></tr></table><br><br><br><br> ".
"<a name='avion'></a> ".
"<img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Avi�n:</b> ".
"<br><br>Desde <b>Madrid</b> hay dos vuelos diarios a San Sebasti�n. ".
"Desde <b>Barcelona</b> uno diario. El aeropuerto est� situado en ".
"Hondarribia/Fuenterrabia. Desde el aeropuerto se puede tomar ".
"tanto un autob�s tanto un taxi para llegar a <font class='textomnv'>Donostia</font>. ".
"<br><br><img src='images/ico_info.jpg'>&nbsp;&nbsp;<b>Informaci�n:</b> ".
"<br><br><table width=80% align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0> ".
"<tr><td class=textom><b>Aeropuerto de Donostia-San Sebasti�n (EAS)</b><br><b>A.E.N.A. Aeropuertos Espa�oles y Navegaci�n A�rea.</b> ".
"<br><br>Situaci�n: a 20 Km. de Donostia-San Sebasti�n y 5 Km. de Ir�n.<br>C/ Gabarrari 5 y 22. 20280 HONDARRIBIA. ".
"<br>Centralita: 943 66 85 00 ".
"<br>Iberia Informaci�n: 943.66.85.21 ".
"<br><a href='http://www.iberia.es' target='_blank'><u>www.iberia.es</u></a> ".
"</td></tr></table><br><br> ".
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
case "AlbertEinstein_VidaYObra":
$strTexto = "<b>ALBERT EINSTEIN: 1905/2005  </b> ".
"<br><br>Se va a cumplir pronto el centenario de un a�o asombroso para la ciencia universal: 1905. Cuando a�n resonaba cercano el eco de la extra�a y revolucionaria hip�tesis de los quanta formulada por Max Planck (1900), un perito t�cnico de tercera clase de la Oficina Suiza de Patentes en Berna, de nombre Albert Einstein, nacido en Ulm (Alemania) el 14 de marzo de 1879, enviaba a lo largo de 1905 <a href='#2'><u>cinco trabajos a la prestigiosa revista alemana Annalen der Physik, para su publicaci�n</u><sup><b>1</b></sup></a>.  Cinco trabajos que, como ha escrito el f�sico e historiador John Stachel, cambiaron la faz de la f�sica. Cualquiera de ellos hubiera bastado para consagrarle como uno de los grandes cient�ficos de su �poca. Todos juntos le sit�an en la cima universal, con Arqu�medes y con <a href='#2'><u>Newton</u><sup><b>2</b></sup></a>.Seg�n su bi�grafo Albrecht F�lsing, '<i>never before and never since has a single person enriched science by so much in such a short time as Einstein did in his annus mirabilis</i>.' ".
"<br><br>Cient�ficos y pensadores de todo el mundo van a celebrar este centenario durante el a�o 2005, declarado A�o Mundial de la F�sica. La Fundaci�n del Donostia Internacional Physics Center se unir� a estas conmemoraciones con un nutrido y selecto programa de conferencias, seminarios y exposiciones encaminados a acercar a todos la obra y el recuerdo de este personaje m�tico y universal, imaginativo y creador, de rostro ya familiar, violinista de pelo alborotado y ojos tristes, con quien tanto la ciencia como el humanismo tendr�n eterna deuda. ".
"<br><br>La revista TIME eligi� el 31 de Diciembre de 1999 a Albert Einstein como el personaje cient�fico y pensador del siglo XX, por delante de otros grandes como Francis Crick y James Watson, <a href='http://www.time.com/time/time100/scientist/profile/fleming.html' target='_blank'><b>Alexander Fleming</b></a>, <a href='http://www.time.com/time/time100/scientist/profile/freud.html' target='_blank'><b>Sigmund Freud</b></a>, Kurt G�del, <a href='http://www.time.com/time/time100/scientist/profile/hubble.html' target='_blank'><b>Edwin Hubble</b></a>, <a href='http://www.time.com/time/time100/scientist/profile/shockley.html' target='_blank'><b>William Shockley</b></a>, <a href='http://www.time.com/time/time100/scientist/profile/turing.html' target='_blank'><b>Alan Turing</b></a> y <a href='http://www.time.com/time/time100/scientist/profile/wittgenstein.html' target='_blank'><b>Ludwig Wittgenstein</b></a>.  ".
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
$strTexto = "<b>Los trabajos de Einstein en 1905</b> ".
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
"<br><b>3.</b> Sexto trabajo. Fechado en Berna, diciembre de 1905. Recibido el 19 de diciembre de 1905. Publicado el 8 febrero de 1906. Annalen der Physik 19 (1906): 371-381. ".
"<br><b>4.</b> Cuarto trabajo. Fechado en Berna, agosto de 1905. Recibido el 19 de agosto de 1905. Publi-cado el 8 de febrero de 1906. (Contiene un addendum recibido en enero de 1906.) Annalen der Physik 19 (1906): 289-306.  ".
"<br><b>5.</b> Tercer trabajo. Fechado en Berna, junio de 1905. Recibido el 30 de junio de 1905. Publicado el 26 de septiembre de 1905. Annalen der Physik 17 (1905): 891-921. ".
"<br><b>6.</b> Quinto trabajo. Fechado en Berna, septiembre de 1905. Recibido el 27 de septiembre de 1905. Publicado el 21 de noviembre de 1905. Annalen der Physik 18 (1905): 639-641. ";break;
case "AlbertEinstein_Culminacion":
$strTexto = "<b>Culminaci�n de la relatividad</b> ".
"<br><br>Einstein, al igual que Planck, am� los principios rectores de las leyes naturales. Aparte de los principios de relatividad y de constancia de la velocidad de la luz, unos a�os m�s tarde Einstein enunciaba el principio de equivalencia (un campo gravitatorio es indistinguible de una aceleraci�n del sistema de referencia) sobre el que hab�a de erigir su teor�a de la relatividad general, obra cumbre, por su originalidad y belleza, del pensamiento cient�fico de todos los tiempos. La empez� a elaborar en 1907 y la concluy� esencialmente en 1915. Obligado a renunciar al espacio-tiempo absoluto de su relatividad especial para dar cobijo a la gravedad, geometriz� �sta y derroc� la teor�a newtoniana de la gravitaci�n. Muchos a�os m�s tarde, en sus notas autobiogr�ficas, pedir�a humildemente perd�n a Newton por este atrevimiento que solo a otro genio comparable le estaba permitido.  ".
"<br><br>Como los griegos, y como Newton, Einstein crey� en la inmutabilidad de los cielos. Por ello se vio obligado a introducir en sus ecuaciones para el campo gravitatorio un nuevo t�rmino, llamado cosmol�gico, que simula una repulsi�n c�smica opuesta a la atracci�n gravitatoria entre los astros de  un Universo supuestamente est�tico y que impide su colapso. Al descubrirse la expansi�n del Universo (Hubble, 1929), Einstein se arrepinti� de haber introducido ese t�rmino, 'la mayor equivocaci�n' de su vida. Ir�nicamente, en los �ltimos a�os parece haber renacido de sus cenizas dicho t�rmino cosmol�gico, como explicaci�n m�s simple de la energ�a de vac�o responsable de la aceleraci�n observada en la expansi�n actual del Universo. ".
"<br><br>Persigui� Einstein in�tilmente durante la �ltima etapa de su vida la unificaci�n de la gravitaci�n con el electromagnetismo. No se conoc�an bien las otras fuerzas (d�biles y fuertes). Las cuatro interacciones hoy conocidas siguen resisti�ndose a la total unificaci�n, salvo si se rompe el esquema einsteinano y se pasa a un hipot�tico escenario de diez u once dimensiones con las teor�as de supercuerdas o la teor�a M. �Qui�n ser� en este nuevo milenio el genio encargado de pedir perd�n a Albert Einstein? ";break;
case "AlbertEinstein_ImpactoObra":
$strTexto = "<b>Impacto de la obra de Einstein</b> ".
"<br><br>La influencia de la obra de Einstein en la f�sica ha sido y es enorme. Abarca desde lo m�s peque�o (modelo est�ndar de la fisica de part�culas elementales, con la teor�a de campos cu�nticos relativistas como marco) hasta lo m�s grande (la estructura del universo a gran escala, con la relatividad general dict�ndole a la cosmolog�a la geometr�a global y su evoluci�n din�mica), desde lo m�s simple (la raz�n giromagn�tica de un electr�n) hasta lo m�s complejo (colapso de una supernova), desde las energ�as m�s bajas (condensados Bose-Einstein a temperaturas de unos pocos nanokelvin) hasta las m�s altas (plasma quark-glu�n), desde las aplicaciones m�s ordinarias (Global Positioning System) hasta las t�cnicas m�s sofisticadas (�ptica at�mica no-lineal), etc. ".
"<br><br>El impacto de Einstein no se reduce a la f�sica y ciencias pr�ximas. Sus ideas han dejado tambi�n huella en la cultura moderna, desde la pl�stica a la poes�a. Asimismo han afectado a la teor�a del conocimiento y a la filosof�a. Einstein rechaz� una explicaci�n emp�rica del origen de los conceptos f�sicos, que consideraba libre creaci�n del esp�ritu humano. Pero el mero pensamiento l�gico no nos proporciona conocimiento del mundo exterior, que solo la experiencia nos da. Los conceptos ayudan sin embargo a ordenar las experiencias sensoriales, y hasta el presente la Naturaleza se nos ha mostrado siempre del lado de la simplicidad y belleza matem�tica. Con Leibniz y Planck, crey� y busc� siempre la armon�a preestablecida. En cuanto a la filosof�a, la teor�a de la relatividad oblig� a los fil�sofos a revisar sus reflexiones sobre el espacio, el tiempo y la materia, y m�s tarde, a posicionarse sobre el realismo local que impregn� la postura cr�tica de Einstein acerca de la f�sica cu�ntica y que los experim<br><br>entos parecen rebatir tozudamente (aunque no con la contundencia que ayudar�a a despejar dudas entre los m�s reacios a su abandono).  ".
"<br><br><b>Ciencia y sociedad</b> ".
"<br><br>La conmemoraci�n del <i>annus mirabilis</i> de Einstein debe hacernos recapacitar sobre la importancia de la ciencia no s�lo como motor del conocimiento, sino como catalizador del desarrollo tecnol�gico y socioecon�mico. Los pa�ses que aspiren a mejorar la calidad de vida de sus ciudadanos no pueden quedar al margen de una actividad cient�fica propia adecuada.  ".
"<br><br>La figura de Einstein representa un excelente ejemplo, para las nuevas generaciones, de lo que es la actividad del cient�fico. Einstein fue una figura poco convencional, cuya creatividad e intuici�n le guiaron en su sue�o de entender el Universo de otra manera.  ".
"<br><br>Vamos a celebrar el centenario de un destello de singular creatividad surgido de un desconocido funcionario de patentes, que sostuvo sus ideas revolucionarias con pasi�n, dedicaci�n, esfuerzo y brillantez. Einstein abri� nuevos horizontes en la f�sica y con ello cambi� el mundo de su tiempo. ".
"<br><br>Ser�a el mejor homenaje a su memoria la recuperaci�n social del entusiasmo por participar en la aventura colectiva de la ciencia. ";break;
case "AlbertEinstein_Significado":
$strTexto = "<b>Significado del evento para la sociedad vasca</b> ".
"<br><br>Euskadi ha experimentado, desde el inicio del periodo democr�tico, una progresi�n sin precedentes en materia de desarrollo cient�fico y tecnol�gico. Este avance, de sobra conocido por todos, ha supuesto un considerable aumento en el gasto en materia de investigaci�n, que es ahora 24 veces superior al de hace 24 a�os.   ".
"<br><br>Este crecimiento de la actividad en ciencia y tecnolog�a ha servido para acercarnos a los niveles de nuestros hom�logos en Europa en algunos aspectos. Pero hay desarrollos indispensables que siguen pendientes, entre otros la internacionalizaci�n de nuestro sistema cient�fico, el establecimiento de centros de excelencia cient�fica, y, sobre todo, la asunci�n por parte de la sociedad de la actividad cient�fica como algo consubstancial al desarrollo y bienestar. Desde el momento que una sociedad deja de aprender y de generar conocimiento, comienza su declive.  ".
"<br><br>El dise�o de los actos programados para este evento conmemorativo del <i>annus mirabilis</i> de Einstein tiene como objetivo una toma de contacto de nuestra sociedad, de manera p�blicamente manifestada, con la actividad investigadora de alto nivel.  ".
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
case "Lunes5deSeptiembre_17:30": $strTexto = "Acreditaciones";break;
case "Lunes5deSeptiembre_1800": $strTexto = "Presentation and Official Opening.<br><b>Juan Jos� Ibarretxe</b> President of the basque country";break;
case "Lunes5deSeptiembre_1830": $strTexto = "Inaugural Lecture. C. <a href='index.php?pg=7&ponente=14' target='einstein_ponente'><font class=textomna2>Cohen-Tannoudji</font></a>. <i>Bose Einstein Condensates: a New Form of Matter</i>";break;
case "Lunes5deSeptiembre_1930": $strTexto = "<b>Chamber Concert</b> <i>Einstein�s favourites, with sparkles of his life and times</i>.";break;
case "Lunes5deSeptiembre_2100": $strTexto = "<b>Cocktail at the Foyer of the Auditorium</b>.";break;
case "Martes6deSeptiembre_900": $strTexto = "Acreditaciones.";break;
case "Martes6deSeptiembre_930": $strTexto = "Einstein y el Tiempo.";break;
case "Martes6deSeptiembre_1015": $strTexto = "<b>TBA</b> <i>Gravitaci�n y Agujeros Negros.</i>";break;
case "Martes6deSeptiembre_1100": $strTexto = "Caf�.";break;
case "Martes6deSeptiembre_1130": $strTexto = "El Universo.";break;
case "Martes6deSeptiembre_1215": $strTexto = "Materia y Forma.";break;
case "Martes6deSeptiembre_1300": $strTexto = "Resumen y Discusi�n.";break;
case "Martes6deSeptiembre_1800": $strTexto = "(Nobel 1986) <i>Small is Beautiful and Powerful</i>.";break;
case "Martes6deSeptiembre_1845": $strTexto = "(Nobel 1987) <i>Steps Towards Complex Matter: Information, Self-Organization and Adaptation in Chemical Systems</i>.";break;
case "Martes6deSeptiembre_1930": $strTexto = "(Nobel 1986) <i>Brownian Motion and Molecular Motors</i>.";break;
case "Martes6deSeptiembre_2015": $strTexto = "<b>Fin de Sesi�n</b>.";break;
case "Miercoles7deSeptiembre_900": $strTexto = "Acreditaciones.";break;
case "Miercoles7deSeptiembre_930": $strTexto = "Computaci�n Cu�ntica.";break;
case "Miercoles7deSeptiembre_1015": $strTexto = "Relatividad, Fotones y Part�culas";break;
case "Miercoles7deSeptiembre_1100": $strTexto = "Caf�.";break;
case "Miercoles7deSeptiembre_1130": $strTexto = "<b>TBA</b> <i>Unificaci�n de Fuerzas</i>.";break;
case "Miercoles7deSeptiembre_1215": $strTexto = "Resumen y Discusi�n.";break;
case "Miercoles7deSeptiembre_1800": $strTexto = "(Nobel 1974) <i>Pulsars and General Relativity</i>.";break;
case "Miercoles7deSeptiembre_1845": $strTexto = "Relativity.";break;
case "Miercoles7deSeptiembre_1930": $strTexto = "Einstein and the Quantum World.";break;
case "Miercoles7deSeptiembre_2015": $strTexto = "Fin de Sesi�n.";break;
case "Jueves8deSeptiembre_900": $strTexto = "Acreditaciones.";break;
case "Jueves8deSeptiembre_930": $strTexto = "Einstein y los quanta.";break;
case "Jueves8deSeptiembre_1015": $strTexto = "Einstein is still right.";break;
case "Jueves8deSeptiembre_1100": $strTexto = "Caf�.";break;
case "Jueves8deSeptiembre_1130": $strTexto = "Einstein y la Matem�tica del siglo XX.";break;
case "Jueves8deSeptiembre_1215": $strTexto = "Resumen y Discusi�n.";break;
case "Jueves8deSeptiembre_1800": $strTexto = "Einstein as Inventor of Physics and of Self.";break;
case "Jueves8deSeptiembre_1845": $strTexto = "Einstein and Picasso.";break;
case "Jueves8deSeptiembre_1930": $strTexto = "Einstein the citizen.";break;
case "Jueves8deSeptiembre_2015": $strTexto = "Acto de Clausura.";break;
case "Jueves8deSeptiembre_2100": $strTexto = "Coctel en el Foyer del Auditorio.";break;
case "Programa_Introduccion":
$strTexto = "<b>The Programme</b>".
"<br><br>The celebration of Einstein's Annus Mirabilis consists of a series of lectures by carefully selected speakers who are at the forefront of physics today. ".
"<br><br>A morning session will be directed at physics students and teachers who wish to become acquainted with modern concepts and developments. ".
"<br><br>The evening session will stage lectures by world leading speakers, many of whom are Nobel prize winners, on technical, philosophical and human aspects of Einstein's work and figure. These are directed at the general public.";break;
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
"el arm�nico maridaje entre lo natural y lo artificial'</i>. Este edificiotalism�n de San Sebasti�n es un espl�ndido ejercicio de riesgo: su <i>'foyer'</i> principal, de 22 metros de altura por 12 de ancho y 60 de profundidad con escalinatas a�reas, vestido de cedro canadiense y luminoso cristal tiene la contundencia y elegancia de las obras de Moneo. ".
"<br><br><table align=center border=1 bordercolor='FFCC00' cellpadding=5 cellspacing=0><tr><td class=textom><center> ".
"<b>Palacio de Congresos y Auditorio Kursaal</b><br><br>Avda. de Zurriola, 1 . 20002 Donostia-San Sebasti�n.<br>Tfno.: 943 00 30 00 . Fax: 943 00 30 01<br>E-mail:<a href='mailto:kursaal@kursaal.org'><u>kursaal@kursaal.org</u></a><br><a href='http://www.kursaal.org' target='_blank'><u>http://www.kursaal.org</u></a> ".
"</center></td></tr></table>";break;
case "Ponente_A_Lehn":
$strTexto = "<b>Steps Towards Complex Matter:</b> ".
"<br>Information, Self-Organization and Adaptation in Chemical Systems ".
"<br><br>ISIS, Universit� Louis Pasteur, Strasbourg and Coll�ge de France, Paris ".
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
$strTexto = "Jean-Marie Lehn was born in Rosheim, France in 1939. In 1970 he became Professor of Chemistry at the University Louis Pasteur in Strasbourg and since 1979 he is Professor at the Coll�ge de France in Paris. In 1968 his research led to the fabrication of cage-like molecules that contain a cavity into which another chemical species of appropriate size and shape may be included, like a key fits into a lock. With this began his work on the chemical basis of 'molecular recognition' (i.e. the way in which a receptor molecule recognizes and selectively binds a substrate), which also plays a fundamental role in biological processes. For these studies Dr. Lehn received the Nobel Prize in Chemistry in 1987 with Cram and Pedersen. ".
"<br><br>Over the years his work led to the definition of a new field of chemistry, which he has named 'supramolecular chemistry'. It deals with the complex entities formed by the association of two or more chemical species held together by intermolecular forces, whereas molecular chemistry studies the features of the entities constructed from atoms linked by covalent bonds. ".
"<br><br>His research broadened from molecular recognition towards supramolecular catalysis and transport processes. It also extended to the design of molecular devices, molecular electronics and photonics. More recently he concentrates his efforts on the design of 'programmed' systems that undergo self-organization by spontaneous but directed assembly of suitable components into well-defined functional supramolecular architectures. ".
"<br><br>Author of more than 750 scientific publications, Dr. Lehn is a member of many academies and institutions and has received numerous international honors and awards.";break;
case "Ponente_A_Cirac":
$strTexto = "<center>Quantum Information Theory: Challanges and Perspectives ".
"<br>Ignacio Cirac<br>Max-Planck Institute for Quantum Optics, Garching.".
"<br>E-mail: <a href='mailto:Ignacio.Cirac@mpq.mpg.de'>Ignacio.Cirac@mpq.mpg.de</a><br><a href='http://www.mpg.mpq.de' tagert='_blank'><b>http://www.mpg.mpq.de</b></a> </center> ".
"<br><br>Quantum information processing and communication is a multidisciplinary field of research in which the goal is to use some of the intriguing properties of quantum mechanics in order to process and transmit information in a very efficient way. For the moment, there are very few systems on which one can test the main ideas of quantum computing, perhaps the most important application in this field. On the one hand, we have quantum optical systems, typically atoms or ions, which interact with laser fields and that are trapped by electromagnetic forces. On the other, we have solid state devices (quantum dots or superconductor devices, for example) which can be electronically controlled. In this talk I will revise the basic concepts in the field of Quantum Information, showing how to implement some of the ideas using atoms, ions and photons. I will also discuss the perspectives in the field of taming and controlling quantum optical systems in order to reach the ultimate goal of constructing a scalable device.";break;
case "Ponente_C_Cirac":
$strTexto = " Professor Cirac obtained his degree in Physics and his PhD at Universidad Complutense in Madrid (1988, 1991). His professional career includes positions at the University of Colorado, Innsbruck, Technical University of Munich and the Max-Planck Institute for Quantum Optics, where he is now Managing Director. ".
"<br><br>Professor Cirac is author of 175 publications and has numerous awards. He is also a Fellow of the American Physical Society, and Corresponding Member of the Spanish and Austrian Academies of Sciences. ";break;
case "Ponente_A_Clifford":
$strTexto = "<center>The Confrontation Between General Relativity and Experiment ".
"<br><br>Clifford M. Will <br>McDonell Center for Space Sciences, Department of Physics.  ".
"<br>Washington University.  <br>St Louis, USA</center> ".
"<br><br>We revies the experimental evidence for Einstein�s General Relativity. Tests of the Einstein Equivalence Principle support the postulates of curved spacetime, while solar-system experiments strongly confirm weak-field general relativity. The Binary Pulsar provides tests of gravitational-wave damping and of strong-field general relativity. We describe ongoing and future experiments, such as the Stanford Gyroscope experiment, a satellite test of the Equivalence principle, and tests of gravity at short distance to look for extra spatial dimensiona. ".
"<br><br>Recently operational laser interferometric gravitational-wave observatories, and a future space interferometer, may provide new tests via the properties of gravitational waves. ".
"<center><br><br>Was Einstein Right?<br>Clifford M. Will<br>McDonell Center for Space Sciences, Department of Physics. <br>Washington University. St Louis, USA</center> ".
"<br><br>How has the most celebrated scientific theory of the 20th century held up Ander the exacting scrutiny of planetary probes, radio telescopes, and atomic clocks? After 100 years, was Einstein right? ".
"<br><br>In this lecture, we relate the story of testing relativity, from the 1919 measurements of the bending of light to the 1980s measurements of a decaying double-neutron-star system that reveal the action of gravity waves. We will show how a revolution in astronomy and technology led to a renaissance of general relativity in the 1960s, and to a systematic program to try to verify its predictions. We will also demonstrate how general relativity plays an important role in daily life.";break;
case "Ponente_C_Clifford":
$strTexto = " Clifford Will is professor of Physics, and member of the McDonnell Center for the Space Sciences at Washington University in St. Louis. ".
"A B.Sc in Applied Mathematics and Theoretical Physics from McMaster University in 1968, and a PhD. In physics from the California Institute of Technology in 1971, he was an Enrico Fermi Fellow at the University of Chicago (1972-74), and an Assistant Professor of Physics at Stanford University (1974-81). From 1975 to 1979, he was an Alfred P. Sloan Foundation Fellow. In 1981 he joined Washington University as Associate Professor, in 1985 became Full Professor of Physics, and from 1991-2002, served as Chairman of the Department. ".
"In 1986 he was selected by the American association of Physics Teachers to be the 46th annual Richrmyer Memorial Lecturer, and in 1989 was elected a Fellow of the American Physical Society. ".
"In recognition of his theoretical work related to the Hulse-Taylor Binary Pulsar, he was an invited guest of the Nobel Foundation at the 1993 Nobel Prize Ceremonies honouring discoverers Joseph Taylor and Russel Hulse. During 1996-97, he was both a J. William Fulbright Fellow and a Guggenheim Foundation Fellow, and in 1996, he was named Distinguished Alumnus in the Sciences by McMaster University. ".
"In 2001 he was elected a Fellow of the American Academy of Arts and Sciences, and in 2004 he received the Fellows award of the St. Louis Academy of Sciences. ".
"He has published over 160 scientific articles, including 13 major review articles. In addition, he has authored many popular and semi-popular papers and two books. ";break;
case "Ponente_A_Galindo":
$strTexto = "<center>Einstein y el Tiempo</center> ".
"<br><br>Muchos avances cient�ficos y tecnol�gicos han estado vinculados a los adelantos en la precisi�n con que se ha ido midiendo el tiempo. Hoy se dispone de relojes con precisi�n de un segundo en 20 millones de a�os; adem�s, la generaci�n en estos �ltimos a�os de pulsos ultracortos de radiaci�n XUV y el desarrollo de t�cnicas para medir su duraci�n con resoluci�n del orden del attosegundo muestran que el paso de la femtoqu�mica a la attof�sica empieza a ser una realidad.  ".
"<br><br>El tiempo f�sico, cuya definici�n omiti� el gran Newton diciendo que es de todos bien conocido, estuvo en el n�cleo de la revoluci�n cient�fica protagonizada por Albert Einstein con sus principios de relatividad. Con la teor�a de la relatividad especial propuesta por Einstein en su Annus Mirabilis de 1905, el tiempo absoluto, verdadero y matem�tico de Newton dio entrada a inn�meros tiempos, uno por cada inercial. La simultaneidad pas� a ser relativa, y tambi�n la duraci�n, que se dilat� con el movimiento. El tiempo relativista transcurre m�s lentamente en relojes m�viles, y esto permite 'viajar al futuro'.  Pero la gravitaci�n quedaba fuera de esta relatividad restringida para la que la amalgama espacio-tiempo manten�a su absolutidad. Entre 1907 y 1915 Einstein consigue acomodar la gravedad y erige sobre el principio de equivalencia su relatividad general. En ella Einstein predice que el espacio-tiempo se curva bajo el efecto de la materia-energ�a, y en particular el tiempo experimenta una dilataci�n gravitacional a a�adir a la debida al movimiento. ".
"<br><br>Las teor�as relativistas de Einstein no s�lo son de la m�xima importancia para los f�sicos, sino que tambi�n est�n presentes en nuestra vida. Cuando usamos el GPS (Global Positioning System) para saber en qu� lugar e instante precisos nos hallamos, estamos aprovech�ndonos de una tecnolog�a que no puede ignorar ni la dilataci�n del tiempo relativista ni la gravitacional. De lo contrario, el GPS fallar�a en su misi�n al cabo de unos minutos y los aterrizajes en condiciones de visibilidad cero no ser�an seguros. Finalmente, cuando el hombre sue�a con viajar a mundos lejanos, volver al pasado, o visitar el futuro, tarde o temprano termina acudiendo a las deformaciones del espacio-tiempo que le ofrece en principio la teor�a einsteniana de la gravedad en condiciones extremas.  ".
"<br><br>Pretendemos con esta charla acercar estas cuestiones al ciudadano curioso. Es el mejor recuerdo a la memoria de quien cambi� la f�sica y nos leg�, como su obra cumbre, la m�s bella creaci�n del esp�ritu cient�fico de todos los tiempos: la teor�a einsteniana de la gravitaci�n.  ";break;
case "Ponente_C_Galindo":
$strTexto = "".
"<br>Nacido en Huesca en 1934 Alberto Galindo ha sido Licenciado en Ciencias Exactas por la Facultad de Ciencias de la Universidad de Zaragoza  y Doctor en F�sicas por la Universidad Central de Madrid. Entre 1963-67 fue Catedr�tico de F�sica Matem�tica de la Universidad de Zaragoza y desde 1967, Catedr�tico de F�sica Te�rica de la Universidad Complutense de Madrid. ".
"El Prof. Galindo ha sido investigador en diversos centros: Junta de Energ�a Nuclear, Courant Institute of Mathematical Sciences (New York University), International Centre for Theoretical Physics (Trieste),Centre Europ�en pour la Recherche Nucl�aire (CERN, Gen�ve), Institut des Hautes �tudes Scientifiques (Bures-sur-Yvette), D�partement de Physique Math�matique (Universit� de Dijon), Institut f�r Theoretische Physik (Wien Universit�t), Department of Physics (Princeton University), Coll�ge de France (Par�s), Department of Physics (University of California in Los Angeles), Donostia International Physics Center (San Sebasti�n). ".
"Es autor de trabajos sobre An�lisis funcional, Teor�a de grupos y �lgebras de Lie, Mec�nica cu�ntica, Teor�a de campos, Part�culas elementales, Sistemas integrables, Grupos cu�nticos y Informaci�n cu�ntica. ".
"El Prof. Galindo es autor de libros, entre los que destacan: M�todos Matem�ticos de la F�sica (con L. Abellanas, Imprenta Octavio y F�lez, Zaragoza 1973), Mec�nica Cu�ntica (con P. Pascual, Editorial Alhambra, Madrid 1978), Soluciones Exactas en Relatividad General. Colapso Gravitacional y Agujeros Negros (con L. M�s, Editorial de la Universidad Complutense, Madrid 1983), Espacios de Hilbert. (Geometr�a, Operadores, Espectros)  (con L. Abellanas, EUDEMA, Madrid 1988), Mec�nica Cu�ntica I, II (con P. Pascual, EUDEMA, Madrid 1989), Problemas de Mec�nica Cu�ntica (con P. Pascual, EUDEMA, Madrid 1989), M�todos de C�lculo (en Serie Schaum, con L. Abellanas, McGraw-Hill, Madrid 1990), Quantum Mechanics I, II (con P. Pascual, Springer Verlag, Berlin 1990, 1991),  F�sica y Qu�mica 1  (con J. M. Savir�n, A. Moreno, J.M. Pastor, A. Bened�, McGraw-Hill, Madrid 1995), F�sica 2  (con A. Moreno, A. Bened�, P. Varela, McGraw-Hill, Madrid 1998) ".
"El Prof. Galindo ha recibido diversas distinciones y premios: Acad�mico Electo de la Academia de Ciencias Exactas, F�sico-Qu�micas y Naturales de Zaragoza, Acad�mico Numerario de la Real Academia de Ciencias Exactas, F�sicas y Naturales de Madrid, Fundador y primer Director del Grupo Interuniversitario de F�sica Te�rica (GIFT), Miembro del primer Consejo Cient�fico del Erwin Schr�dinger International Institute of Mathematical Physics de Viena, Miembro de la Academia Europ�a, Premio Nacional de Investigaci�n en F�sica 1977, Premio Nacional de Investigaci�n 'Santiago Ram�n y Cajal' 1985, Premio Arag�n 1991 a la Investigaci�n Cient�fico-T�cnica.";break;
case "Ponente_A_Gerald":
$strTexto = "'Einstein as Inventor of Physics and of Self' ".
"<br>Gerald Holton<br><br>The astonishing multitude of Einstein�s scientific contributions in different fields of physics tends to make one lose sight of the unifying themes that motivated most of his work. Similarly, quite apart from his scientific research, the enormous variety of accounts of his life and thoughts, including on religion, hides attention that basically they are also guided by some unifying themes. We shall show the extent to which these two sets of themes are in fact essentially the same ones, dominating both his work and his life.";break;
case "Ponente_C_Gerald":
$strTexto = "Gerald Holton is Research Professor of Physics and Research Professor of History of Science at Harvard University, Fellow of the American Physical Society, the American Philosophical Society, the American Academy of Arts and Sciences, and several European learned societies. He served as President of the History of Science Society, and on the U.S. National Commission for UNESCO. His book publications include Thematic Origins of Scientific Thought: Kepler to Einstein, and Einstein, History and Other Passions. He was the Founding Editor of the quarterly journal Daedalus, and was member of the Editorial Committee of Collected Papers of Albert Einstein. His honors include the Sarton Medal, selection as the Herbert Spencer Lecturer at Oxford University, and as the Jefferson Lecturer by the National Endowment for the Humanities. ".
"<br><br>At the request of the Albert Einstein estate, he initiated and for several years supervised the conversion of Einstein�s largely unpublished correspondence and manuscripts into an archive suitable for scholarly study.";break;
case "Ponente_A_Sheldon":
$strTexto = "What Is a Unified Theory?<br>Sheldon Lee Glashow ".
"<br><br>Einstein spent the last half of his life in a fruitless quest for what he called a unified field theory: a system of equations that would describe not only gravitation and electromagnetism, but also �atomic matter� itself. Similar fates awaited Schroedinger, Heisenberg, and for a time Wolfgang Pauli. Today we know a great deal more. Our standard model offers a rather complete and correct description of all elementary-particle phenomena, but it cannot describe gravity. Superstring theory offers a quantum theory of gravity that may be compatible with the standard model, but it has not (and perhaps cannot) answer such questions as why quarks and leptons have their observed masses and mixings. Will the 21st century bring us any closer to the realization of Einstein�s dream? Can there be a Theory of Everything?";break;
case "Ponente_C_Sheldon":
$strTexto = "Born in New York City in 1932 and educated in its public schools, Glashow attended college at Cornell University and received his PhD from Harvard University. After several years at the Niels Bohr Institue, Cal Tech, Stanford University, and the University of California at Berkeley, he joined the faculty at Harvard in 1966, where he remained as Higgins Professor of Physics until 2000. He is presently University Professor and Metcalf Professor of Science at Boston University. ".
"<br><br>Professor Glashow is the author of three books and over 300 professional and popular articles. He is a member of the American Philosophical Society, The American Academy of Arts and Sciences, and the National Academies of Science of the USA, Russia, Korea and Costa Rica. ".
"<br><br>In 1979 Professor Glashow shared the Nobel Prize in Physics for his contributions toward a unified theory of the weak and electromagnetic interactions. ";break;
case "Ponente_A_Dudley":
$strTexto = "Brownian Motion and Molecular Motors<br>Dudley Herschbach ".
"<br>Department of Chemistry and Chemical Biology<br>Harvard University, Cambridge, Massachusetts, U.S.A. ".
"<br><br>In his 1905 paper on Brownian motion, Einstein balanced a 'systematic force,' the Stokes drag force on particles in a colloidial suspension, with the random, fluctuating force generated by thermal motion of solvent molecules.  He also treated diffusion in a new way, as a Markovian process.  These strategies enabled him to reconcile Brownian motion with the second law of thermodynamics and also led to several means of determining Avogadro's number, yielding consistent results that confirmed the reality of molecules.  ".
"<br><br>Today kindred strategies elucidate the seemingly paradoxical operation of 'molecular 'motors,' such as a enzyme moving along a DNA template strand while catalyzing its replication.  A typical such enzyme motor 'burns' hundreds of molecules of adenosine triphosphate per second.  However, this chemical power is miniscule compared with the random thermal noise power encountered by the motor in traveling through water.  The discrepancy is about nine orders of magnitude.  Yet enzymes perform myriad and highly specific chemical tasks with remarkable efficiency. ".
"<br><br>In this talk, my aim is to offer homage to Einstein's legacy by emphasizing how his ideas have been incarnated in current models for enzyme motors. Brownian fluctuations allow enzymes to rapidly explore a vast range of configurations and thereby to exploit those that enable chemical forces to induce reaction.  Thus, it is the thermal noise of Brownian motion that permits enzymes to retify diffusion and produce the directed molecular motions essential for biological processes.";break;
case "Ponente_C_Dudley":
$strTexto = "Dudley Herschbach was born in San Jose, California (1932) and received his B.S. degree in Mathematics (1954) and M.S. in Chemistry (1955) at Stanford University, followed by an A.M. degree in Physics (1956) and Ph.D. in Chemical Physics (1958) at Harvard. ".
"<br><br>In 1963 he returned to Harvard as Professor of Chemistry where he became Baird Professor of Science (1976-2003). He is now a Research Professor (Emeritus). His teaching includes graduate courses in quantum mechanics, chemical kinetics, molecular spectroscopy, and collision theory, as well as undergraduate courses in physical chemistry and general chemistry for freshmen, his most challenging assignment. Currently he gives a freshman seminar course on Molecular Motors and an informal graduate 'minicourse' on topics in chemical physics. He is engaged in several efforts to improve K-16 science education and public understanding of science. He serves as Chair of the Board of Trustees of Science Service, which publishes Science News and conducts the Intel Science Talent Search and the Intel International Science and Engineering Fair. ".
"<br><br>Professor Herschbach is a member of many academies and institutions and has received numerous international honors and awards. His current research is devoted to methods of orienting molecules for studies of collision stereodynamics, means of slowing and trapping molecules in order to examine chemistry at long deBroglie wavelengths, molecular transformations induced by high-pressure, a dimensional scaling approach to strongly correlated many-particle interactions, and theoretical analysis of molecular motors, particularly enzyme-DNA systems.";break;
case "Ponente_A_Hewish":
$strTexto = "Lecture Title:  'Pulsar Physics and testing Einstein' ".
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
$strTexto = "Antony Hewish was born in Fowey, Cornwall, in 1924. After one year at Cambridge University he carried out three years war service, from 1943-46, at the Royal Aircraft Establishment, Farnborough. Returning to Cambridge he completed his degree course in 1948, and joined Martin Ryle�s team to start research in radio astronomy. He was involved with Ryle�s pioneering sky surveys of radio galaxies and later designed a large phased-array antenna to measure the angular sizes of quasars using scintillation induced by the solar wind. It was during this work, in 1967, that he discovered pulsars, with his student Jocelyn Bell-Burnell. In 1974, Professor Hewish was awarded the Nobel Prize for Physics (jointly with Ryle) for his role in this discovery. ".
"<br><br>During 1982-87  Professor Hewish was Director of the Mullard Radio Astronomy Observatory at Cambridge. He formally retired from his academic post as Professor of Radioastronomy in 1989. Throughout his career at Cambridge he was involved with teaching physics.";
case "Ponente_A_Miller":
$strTexto = "<center><b><i>Einstein, Picasso<br>Space, Time, and the Beauty That Causes Havoc</i> ".
"<br></b><br>Department of Science & Technology Studies ".
"<br>University College London<br>Gower Street<br>London WC1E 6BT ".
"<br>UK</center><br><br>The most important scientist of the twentieth century, and its most important artist, went through their periods of greatest creativity almost simultaneously and in remarkably similar circumstances. I will focus on their greatest breakthroughs: Einstein's special theory of relativity and Picasso's Les Demoiselles d'Avignon.  When they produced these astonishing works, Einstein and Picasso were not the distinguished elderly figures that later became so familiar: they were in their twenties, unknown, feisty, dirt-poor, and prone to getting into trouble - their personal and creative beauty caused havoc. ".
"<br><br>They both responded to the tidal wave of the avant-garde.  For Picasso this included the newly invented medium of moving pictures, photography, and cutting-edge science and philosophy.  Einstein immersed himself in such key technological problems as the design of electric dynamos and the co-ordination of train schedules. ".
"<br><br>Behind the many similarities in their lives and circumstances, and in what they had to endure in order to produce such masterpieces, lies a greater, unifying point.  Einstein and Picasso both came of age at the exact moment in history when it was first becoming apparent that classical, intuitive ways of understanding space and time are not adequate.  They were both working on the same problem: the nature of space and time and, more particularly, simultaneity.";break;
case "Ponente_C_Miller":
$strTexto = "Arthur I. Miller is Professor of History and Philosophy of Science at University College London. He has appeared on numerous TV and radio programs, ahd has written and lectured widely on the history and philosophy of modern science, cognitive science, scientific creativity and the relation between art and science. His many books include Albert Einstein's Special Theory of Relativity, Sixty-Two Years of Uncertainty, and Insights of Genius: Imagery and Creativity in Science and Art.";break;
case "Ponente_A_Rebolo":
$strTexto = "<center><b>Origin and Evolution of the Universe: the challenges of Cosmology ".
"<br>Rafael Rebolo Lopez</b></center> ".
"<br><br>Observations of the large scale  distribution of galaxies in the Universe, of supernova explosions in very distant galaxies and high sensitivity measurements of the anisotropy  of the Cosmic Microwave Background - the relict radiation from the Early Universe -  strongly support that the Cosmos is  dominated by  exotic forms of matter and energy. ".
"<br><br>The major form of matter in the Universe, five times more abundant than ordinary matter,  appears to be of a very weakly interactive ".
"nature. Major efforts are conducted in  laboratories to identify the ".
"particle responsible. The dominant form of energy, the so-called vacuum  energy, is related to the  cosmological constant  suggested by Einstein in his equations for General Relativity and responsible for an accelerated expansion of  the Universe ".
"at present. Recent advances in our understanding of these crucial   components and their role in the evolution of the  Universe will be reviewed.";break;
case "Ponente_C_Rebolo":
$strTexto = "Nacido en Cartagena, Espa�a, en 1961, es Licenciado en Ciencias F�sicas por la Universidad de Granada y Doctor en Astrof�sica por la Universidad de La Laguna. Actualmente es Profesor de Investigaci�n del Consejo Superior de Investigaciones Cient�ficas en el Instituto de Astrof�sica de Canarias (IAC) y Profesor Asociado del Max Planck Institute f�r Astronomie. ".
"<br><br>Ha sido Responsable de la Division Cientifica del IAC y ha recibido los premios de 'Rey Jaime I' y 'Canarias' de Investigaci�n y el 'Iberdrola' de Ciencia y Tecnolog�a. ".
"<br><br>Dirige varios proyectos sobre el origen de los elementos qu�micos, el Fondo C�smico de Microondas, los planetas gigantes y las enanas marrones. Co-autor de m�s de 130 publicaciones cient�ficas  en revistas con �rbitro que suman m�s de 3000 citas. ".
"Pertenece a los Cuadros Directivos de la Asociaci�n Europea para Investigaci�n en Astrof�sica y de la Red Europea de Coordinaci�n de la Astronomia Optica e Infrarroja Acad�mico Correspondiente de la Real Academia de Ciencias de Espa�a.";break;
case "Ponente_A_Rohrer":
$strTexto = "<b>The Magic and Power of Small</b> ".
"<br><br>Miniaturization of electronic components has been the key to their ever-accelerating pervasiveness in a world of electronic control of daily life to most advanced scientific adventures, of high speed computing, and of world embracing communications as never before. Increased miniaturization through nanotechnology will undoubtedly bring about an unprecedented level of diffusion of electronic technology throughout society and the world. ".
"<br><br>But nanoscience promises much more than just smaller, faster, cheaper � and more powerful. Nano is different. Nanoscience and -technology stand at the confluence of classical and quantum mechanical properties and behavior and of a multiplicity of fields such as condensed matter physics and technology, macromolecular chemistry, and biology. Nano-mechanics and nano-chemistry are forging new pathways between the 'virtual' world of data processing of all kinds, including mechanical, chemical and thermal, and the 'real' world of sensing and actuation, bringing about a pervasive wave of new, integrated processing, sensing, and actuation technologies. ".
"<br><br>It is this difference that carries the promise for science and technology on the nanometer scale, and which will see it become a most important cornerstone of the science and technology world in this century.";break;
case "Ponente_C_Rohrer":
$strTexto = "Heinrich Rohrer studied Experimental Physics at the Swiss Federal Institute of Technology Zurich (ETHZ). In 1963, after two years as Post-doc in the USA, he joined the IBM Zurich Research Laboratory. Prof. Rohrer was awarded the Nobel Prize in Physics in 1986 for his work on Scanning Tunneling Microscopy. He retired from IBM in 1997 and took various science appointments in Switzerland, Japan and Spain.";break;
case "Ponente_A_Ron":
$strTexto = "<center><b>EINSTEIN AND PHILOSOPHY IN THE 20th CENTURY ".
"<br><br>Jos� M. S�nchez-Ron<br>Universidad Aut�noma de Madrid</b></center> ".
"<br><br>Albert Einstein is acknowledged as the greatest scientist of the 20th century and one the greatest of all times, but his influence did not manifest itself on science but also on philosophy, and most specially on epistemology and methodology. In my intervention I will discuss the following themes: 1) the influence that philosophy had on Einstein during his most productive years, and how he interacted at that time with some philosophers (such as Mach or Schlick); 2) how his 'philosophy of science' changed following �and coherently with� the evolution of his scientific interests and points of view; 3) how his scientific contributions, mostly in special and general relativity, influenced 20th century philosophy, paying special attention to British philosophers circa 1910-1930, Jos� Ortega y Gasset, as well as members of the Vienna Circle and others related to this movement, mainly Hans Reichenbach and Karl Popper.";break;
case "Ponente_C_Ron":
$strTexto = "Born in Madrid in 1949, Dr. S�nchez-Ron obtained his first degree in physics from Universidad Complutense, Madrid (1971). He obtained his PhD at University College London. He is now full professor in History of Science at Universidad Complutense in Madrid. Member of the Real Academia Espa�ola (2003) and of the Academia Europea de Ciencias y Artes (Academia Scientiarum et Artium Europaea; 2003). ".
"<br><br>Dr. S�nchez-Ron is author of more than 20 books, among them El origen y desarrollo de la relatividad (1983), La Espa�a posible de la Segunda Rep�blica. La oferta a Einstein de una c�tedra extraordinaria en la Universidad Central (Madrid 1933), in collaboration with Thomas F. Glick (1983), El poder de la ciencia (1992), Miguel Catal�n. Su obra y su mundo (1994), editor with Paul Forman of National Military Establishments and the Advancement of Science and Technology (1996), Cincel, martillo y piedra. Historia de la ciencia en Espa�a (siglos XIX y XX) (1999), El mundo de Marie Curie (2000), El Siglo de la Ciencia (2000), for which he received the Jos� Ortega y Gasset Prize of Humanities.  ".
"<br><br>He is also author of numerous articles, most recently, 'Larmor versus general relativity', Einstein Studies (1999); 'Einstein, general relativity and the field concept', in Relativity and Gravitation in General (1999); and 'International relations in Spanish physics from 1900 to the Cold War', Historical Studies in the Physical and Biological Sciences 33 (2002).";break;
case "Ponente_A_Stachel":
$strTexto = "Einstein�s Greatest Dream� A Background-Independent Physics <br>".
"<br><br>Quantum field theorists have spent the last sixty years in a fruitless attempt to quantize general relativity using the methods of (special-relativistic) quantum field theory. More recently, string theorists have attempted to invent a TOE (Theory of Everything), out of which general relativity� or a reasonable facsimile thereof� would emerge as a by-product. Both standard quantum field theory and standard string theory have depended crucially on the presence of a fixed, given background space-time structure of four (or more, in the case of string theory) dimensions. General relativity is the first example of a completely background-independent physical theory, in which the space-time structures themselves become dynamical entities. If current attempts to create a background-independent quantization technique and apply it to general relativity are successful, the quest for a background-independent physics will be seen as Einstein�s greatest dream.";break;
case "Ponente_C_Stachel":
$strTexto = "Did his doctoral work on a topic in general relativity. He was an instructor of Physics at Lehigh University from 1959 to 1961 and the University of Pittsburgh from 1961 to 1962, and Research Associate in Physics at the latter school from 1962 to 1964. Since then, he has been a member of the Physics Department of Boston University. He is currently Profesor Emeritus of Physics. He has been a guest faculty member at a number of other institutions including Princeton University; The University of California at Berkeley; King�s College, London; the University of Paris VI, the Center for Advanced Studies of the IPN, M�xico City, the Institute for Theoretical Physics, Warsaw, and the Max-Planck-Institute for the History of Science, Berlin. ".
"<br><br>He currently directs the Boston University Center for Einstein Studies, which has sponsored a series of conferences on the history of general relativity, Einstein�s early years, etc; and co-edits (with Don Howard) the Center�s series of Einstein Studies, nine volumes of which have been published, four directly concerned with the history of general relativity. ".
"<br><br>In addition to about a hundred articles on topics in theoretical physics and the history and philosophy of science, Professor Stachel was the founding editor of The Collected Papers of Albert Einstein. He also edited Einstein�s Miraculous Year, an annotated English edition of all of Einstein�s 1905 papers, which has been translated into over half a dozen languages. He is the author of Einstein From �B� to �Z�, a collection of his own writings about Einstein; and Going Critical, a two-volume collection of his papers on other topics, is in press. ".
"<br><br>Professor Stachel is also editor of, among other books, Conceptual Problems of Quantum Gravity - Proceedings of the 1988 Osgood Hill Conference (with Abhay Ashtekar), and much of his current work is concerned with this topic. ".
"<br><br>He has also written studies of 'Marx�s Critical Concept of Science' and |'Science and Capitalism,' and is currently concerned with their implications for problems of the contemporary labor movement. ".
"<br><br>He was recently honored by a Festschrift dedicated to him.";break;
case "Ponente_A_Cohen":
$strTexto = "<center><b>Bose Einstein Condensates : a New Form of Matter</b> ".
"<br>-------<br>Claude COHEN-TANNOUDJI ".
"<br><br>Coll�ge de France and Laboratoire Kastler Brossel ".
"<br>Ecole Normale Sup�rieure, Paris, France<br>-------</center> ".
"<br><br>Our ability to manipulate atoms with laser light has considerably increased during the last few decades. Laser cooling and trapping methods, combined with magnetic trapping and evaporative cooling, allow now atomic gases to be cooled at very low temperatures, in the nanokelvin range, and to reach the quantum degenerate regime where the mean distance between atoms becomes smaller than the de Broglie wavelength. The atomic de Broglie waves then overlap and interfere, giving rise to new situations where a macroscopic number of atoms condense in the same quantum state. These macroscopic matter waves exhibit fascinating properties such as coherence or superfluidity. Recent developments in this field will be described and it will be shown how it is possible to observe on such dilute systems, about 100000 more dilute than air, effects which, up to now, have been investigated only in condensed matter.";break;
case "Ponente_C_Cohen":
$strTexto = "Claude Cohen-Tannoudji was born in 1933. He completed his Ph.D. in 1962 at Ecole Normale Sup�rieure in Paris. He then held a position of Professor at the University of Paris from 1964 to 1973. Since 1973, he is Professor of Atomic and Molecular Physics at the Coll�ge de France in Paris. ".
"<br><br>Professor Cohen-Tannoudji has written 3 books and published approximately 200 theoretical and experimental papers dealing with various problems of atomic physics and quantum optics: optical pumping and light shifts, dressed atom approach for understanding the behaviour of atoms in intense RF or optical fields, quantum interference effects, resonance fluorescence, photon correlations, physical interpretation of radiative corrections, radiative forces, laser cooling and trapping, Bose-Einstein condensation, etc. ".
"<br><br>Professor Cohen-Tannoudji has received many distinctions, among them the 1997 Nobel Prize in Physics shared with Steven Phillips and Steven Chu.";break;
case "Ponente_A_Yndurain":
$strTexto = "'Relatividad, fotones y part�culas' ".
"<br><br>En el a�o 1905, Albert Einstein produjo tres art�culos b�sicos para el desarrollo de la ciencia del siglo XX: un art�culo sobre el movimiento Browniano, que proporcionaba un m�todo extremadamente preciso para as� contar �tomos y que permiti� establecer definitivamente la estructura corpuscular de la materia;  ".
"un art�culo en que desarroll� la teor�a de la relatividad, algunas de cuyas consecuencias analizaremos; y, finalmente, un art�culo en el que estableci� que la luz (que hasta entonces se hab�a considerado como una vibraci�n se comportaba, en el efecto fotoel�ctrico, como part�culas, a las que �l llam� sl Lichtquanten y que son en la actualidad conocidas como sl fotones.  ".
"Este �ltimo descubrimiento, tal vez el m�s fundamental, llev� --entre otras  ".
"cosas-- al desarrollo de la mec�nica cu�ntica. ".
"<br><br>Discutiremos la intuici�n brillante de Einstein en la formulaci�n de la teor�a de la relatividad, superando a Lorentz y Poincar�; y la introducci�n del concepto de fot�n, propuesta a�n m�s audaz, ya que implica que algo --la luz-- puede ser a la vez onda y part�cula, una paradoja que s�lo pudo aclararse veinte a�os despu�s con el principio de incertidumbre de Heisenberg. ".
"<br><br>Consideraremos algunos de los efectos de los descubrimientos de Einstein: entre ellos, de la ecuaci�n E=mc^2, tal vez la m�s famosa de la f�sica; y del entrejuego de relatividad y mec�nica cu�ntica, que, para las interacciones electromagn�ticas, ha producido la teor�a m�s precisa que el ser humano haya sido capaz de crear. ".
"Esta teor�a, conocida como sl electrodin�mica cu�ntica, es tan exacta que sus c�lculos implican, para las interacciones mediadas por fotones, una precisi�n en el acuerdo entre teor�a  y experimento de hasta once  cifras significativas.";break;
case "Ponente_C_Yndurain":
$strTexto = "Nacido en Benavente (Zamora), 23 Dic. 1940, se licenci� y doctor� en  Matem�ticas y por la Universidad de Zaragoza en1962 y 1964 respectivamente. Es Catedr�tico de F�sica Te�rica desde 1968, y desde 1972 la ocupa en la  Universidad Aut�noma de Madrid, de la que ha sido Decano y Vicerrector. ".
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
$strTexto = "<b>'Einstein and the Quantum World today'</b> ".
"<br>Prof. Anton Zeilinger<BR>University of Vienna ".
"<br><br>Einstein criticized Quantum Physics most notably for the new role played by chance in individual quantum events and for the conflict of quantum entanglement with a local realistic world view. Today, randomness and entanglement have become essential elements of a new information technology utilizing individual quantum systems. In the talk this we discuss on the basis of recent experiments in quantum cryptography and quantum teleportation. In entanglement-based quantum cryptography the randomness of the individual events serves to create the secure key. In quantum teleportation entanglement provides the quantum channel to transfer the state of the original. As the experimental results fully confirm all quantum predictions, the philosophical issues raised by Einstein still await the full resolution. It is suggested to assume that the notion of information plays an essential role in the foundations of quantum theory.";break;
case "Ponente_C_Zeilinger":
$strTexto = "Anton Zeilinger was born in Vienna in 1945. He studied Physics and Mathematics in his home town and received his PhD on Neutron Depolarization in Dysprosium Single Crystals under the supervision of Prof. H. Rauch. He has covered positions in many countries, but his stays as a researcher in the Laue-Langevin Institute in Grenoble France (1974-1989), MIT (1977-1983), University of Munich (1988-1989) and University of Innsbruck (1990-1999) are most notable. He is currently at the Department of Experimental Physics in Vienna, since 1999. His work on teletransportation has been widely acclaimed. ".
"<br><br>Professor Zeilinger is full member of the Austrian Academy of Sciences, fellow of the American Physical Society and member of Academia Scientiarum et Artium Europaea. His full curriculum vitae can be consulted at <a href='http://www.quantum.univie.ac.at/zeilinger' target='_blank'>www.quantum.univie.ac.at/zeilinger/.</a>";break;
case "Ponente_A_Pascual":
$strTexto = "<b>T�tulo de la conferencia:</b> 'Einstein y los quanta de luz' ".
"<br><br>Se pretende discutir de firma elemental las dos contribuciones m�s importantes de Albert Einstein sobre los quanta de luz. ".
"<br><br>La primera es el famoso trabajo del a�o 1905 en que se explica el efecto fotoel�ctrico (cuando se ilumina una placa met�lica con radiaci�n electromagn�tica, el metal emite electrones) concluyendo que la radiaci�n electromagn�tica monocrom�tica de una determinada frecuencia se comporta como si constara de un n�mero finito de cuantos de energ�a, localizados e independientes, de magnitud igual a la constante de Planck multiplicada por la frecuencia. En el a�o 1921 en la nominaci�n del Premio Nobel de F�sica se dice: 'Por sus servicios a la F�sica Te�rica, y especialmente por su descubrimiento de la ley del efecto fotoel�ctrico.' ".
"<br><br>La segunda gran contribuci�n de Einstein fue publicada el a�o 1917 en un trabajo en el que estudia el equilibrio t�rmico de un gas at�mico en interacci�n con la radiaci�n electromagn�tica en el que lograba relaciones entre los coeficientes de emisi�n espont�nea e inducida y el de absorci�n inducida. En este trabajo encontr� que para la emisi�n inducida de los quanta de luz que se produc�an con una energ�a determinada ten�an un momento igual a su energ�a dividida por la velocidad de la luz. Este trabajo es reconocido hoy d�a como la base te�rica del l�ser.";break;
case "Ponente_C_Pascual":
$strTexto = "<b>Curriculum vitae abreviado</b> ".
"<br>Pedro Pascual naci� en Sevilla el 27-04-1934. ".
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
case "Ponente_C_Flores":
$strTexto = "<br><br>Born in Cartagena (1939). ".
"<br><br>Degree in Civil Engineering (1963), Physics (1966) and PhD in Engineering (1970) ".
"<br><br>Professor of Condensed Matter Physics (1975 ), Universidad Aut�noma de Madrid ".
"<br><br>Head of Department and Director of the Instituto de Ciencia de Materiales at the UAM (alternate periods between 1980 and 2004).".
"<br><br>Has published over 320 articles in international journals and several books. ".
"<br><br>Has directed 22 PhD theses. ".
"<br><br>Has received the following awards: Gold Medal of the Real Sociedad Espa�ola de F�sica (1991); Fellowship of the American Physical Society (1987); Iberdrola Prize (1993); Blas Cabrera National Physics Prize (2001); Medal of the Colegio de Ingeniero de Caminos (2004) Also awarded the �Laurel of the Region of Murcia� (1994), �Alumbre Prize� (Fundaci�n Emma Egea , 2002) and �La Verdad de Murcia Science Prize� (2003)";break;
case "Ponente_A_Flores":
$strTexto = "�Matter and Form�".
"<br><br><center>F. Flores<br>Universidad Aut�noma de Madrid .<br>Spain.</center>".
"<br><br>Five of the texts published by Einstein in his annus mirabilis of 1905 altered the direction of twentieth century physics. Although his theory of relativity and his discussion of concepts of time and space are popularly viewed as his most revolutionary work, his contribution to the quantum hypothesis on radiation and the atomic nature of matter (Brownian movement) paved the way for the physics of the new century. Together with these articles, his later contributions to Bose-Einstein statistics prefigured the way we would eventually understand condensed �matter�. ".
"<br><br>I will illustrate this development with some examples (superconductivity and superfluidity) which we can consider as a phase transition of a boson gas. I will also discuss how our current way of understanding condensed �matter� draws extensively on quantum-mechanical numerical simulations: in this regard I will provide some examples to show how we are beginning to bring together the macroscopic and the atomic in nanotechnologies.";break;
case "Menu_ComiteOrganizador":
$strTexto="<b>Organising Committee</b>".
"<br><br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Chairman:</b> Alberto Galindo (Professor of Theoretical Physics at the Universidad Complutense de Madrid)".					
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Co-chairmen: </b>Pedro Miguel Echenique (President of DIPC), Juan Colmenero (Director of the DIPC) ".
"<br><img src='images/ico_bolita_on2.jpg'>&nbsp;&nbsp;<b>Coordinators:</b> Unai Ugalde, Juan Jos� Iruin (DIPC)";break;
case "Menu_Contacto":
$strTexto= "<b>TECHNICAL SECRETARY: TISA CONGRESOS</b>".
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
case "CAST": $strTexto="GAZT";break;
case "ENGL": $strTexto="ENGL";break;
case "EUSK": $strTexto="EUSK";break;
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
case "Becas": $strTexto="Information about Greants";break;
case "ComiteOrganizativo": $strTexto="Organising Committee";break;
case "ComoInscribirse": $strTexto="Registration";break;
case "ComoLlegarASanSebastian": $strTexto="Visiting <br>San Sebastian";break;
case "Contacto": $strTexto="Contact";break;
case "Copyright": $strTexto="Copyright";break;
case "Culminacion": $strTexto="Culmination of Relativity";break;
case "DIPC": $strTexto="DIPC";break;
case "DossierDePrensa": $strTexto="Dossier de prensa";break;
case "ElPaisVasco": $strTexto="The basque country";break;
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
case "CAST": $strTexto="CAST";break;
case "ENGL": $strTexto="ENGL";break;
case "EUSK": $strTexto="EUSK";break;
case "InfoGeneral_Introduccion":
$strTexto="<b>Presentation</b> ".
"<br><br>The <a href='http://dipc.ehu.es/' target='_blank'><u>Donostia International Physics Center</u></a> Foundation (DIPC), in the world year of physics, is taking part in the commemorations to mark the centenary of Albert Einstein�s Annus Mirabilis.".
"<br><br>This year is the centenary of an astonishing year for universal science: 1905. A year in which an unknown patent civil servant in Berne, published five pieces of work that changed the course of physics, science, and humanity. The commemoration of Einstein�s annus mirabilis stresses the importance of science as a driving force for knowledge and a catalyst for technological and socio-economic development.".
"<br><br>The figure of Einstein also represents an excellent example for the younger generations. His creativity and intuition guided him in his dream of understanding the universe in a different way.".
"<br><br>We are preparing a series of events to commemorate Einstein�s annus mirabilis that aim to inform society about research activity at the very highest level. We�d like to invite you to study our <a href='http://www.elansys.net/einstein/index.php?pg=1&opcion=20' target='_parent'><u>programme</u></a>".
"<br><br>The guest researchers form part of the world elite. The events we have programmed will include plenary and thematic lectures, as well as exhibitions to introduce Einstein�s figure to children and young people.".
"<br><br>Registration for the events will be free of charge. The organisers will be awarding a number of grants to cover the costs of attending the events.".
"<br><br>Pedro Miguel Echenique ".
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
"<b>� ALBIZTUR</b>	Matia, 52 (Antiguo) Tel: 943 21 18 01 <br> Special menus: �15.63 - �21.04 � la carte Menu: �24-30 ".
"<br><br><b>� AMEZTI</b> P� Cristobal Balenciaga, 65 (Igeldo)<br>Tel: 943.21.73.23	 ".
"<br><br><b>� BARKAIZTEGI</b>	Camino Barkaiztegi, 42 (Martutene)<br>Tel: 943 45 55 01<br>  � la carte: �22.50 ".
"<br><br><b>� DONOSTIARRA</b>	Embeltr�n, 5 (Old Quarter)	Tel: 943 42 04 21 <br>Menu of the Day: �24.50.	 � la carte Menu: �20 - �40. ".
"<br><br><b>� GARBERA</b>	Ctro. Cial. Garbera Tel: 943:39.43.58 ".
"<br><br><b>� IGELDO</b>	P� Orkolaga, 8 (Igueldo) Tel: 943.21.32.51 � la carte: �24- �25 ".
"<br><br><b>� ITXAROPENA</b>	Embeltran 16 	Tel: 943.42.45.76<br> Sidrer�a set menu: �21 ".
"<br><br><b>� IZAGIRRE</b>	Bidarte Berri A�orga	Tel: 943.36.14.70 ".
"<br><br><b>� KUKUA</b>	Avda. Alcalde Jose Elosegi, 21 (Gros)<br>Tel: 943 27 16 29	 � la carte: �27 ".
"<br><br><b>� URKIOLA</b>	Camino de Igara, 37	Tel: 943.21.01.68	<br> � la carte: �21 - �25 ".
"<br><br><b>� LA CEPA</b>	San Bartolom�, 30-32 (Centre) 	Tel: 943 46 03 33	Menu of the Day: �8 <br> � la carte: �19 ".
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
"<br>The Kutxa Science Museum as a scientific information and educational centre plans to organise a parallel exhibition to the events being held to commemorate Albert Einstein�s Annus Mirabilis.".
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
"<br>Lines: Hendaye (Francia) �<br>Donostia/San Sebasti�n - Lasarte (Topo)<br>Donostia � Donostia /San Sebasti�n - Bilbao ".
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
$strTexto = "Registration at the Congress is free.".
"<br><br>It must be formalised as follows:".
"<br><br>To register for the Congress you must fill in the pre-registration form and send it to the Technical Secretariat, before the 31st of May.".
"<br><br>You must point out the days that you are interested in attending, and you can choose non-consecutive days, if you wish.".
"<br><br>Once the deadline for receiving pre-registrations is over, the Technical Secretariat will send you your registration confirmation and will allocate you a registration number before the 10th of June.".
"<br><br>This formality is necessary for registering at the Congress, as the number of places is limited and will be allocated strictly following the order in which registrations were made.".
"<br><br>Any modification, variation or cancellation must be made in writing and sent to the Technical Secretariat.".
"<br><br>PLEASE NOTE: No registrations will be accepted at the venue for the congress, either before or during the event.".
"<br><br><b>TISA Congresos, S.L.</b>".
"<br><br>Ref. Congreso Einstein".
"<br>Avda. de la Libertad, 17-19, 5� ".
"<br>E-20004 Donostia-San Sebasti�n � Spain".
"<br>Tel. 34 943 42 54 20".
"<br>Fax:  34 943 42 21 24".
"<br>e-mail: tisa-congresos@infonegocio.com";break;
case "Registro_Becas":
$strTexto = "<br>Grants will be provided to people from among all those who apply for them by a committee named by the Organising Committee. ".
"<br>The grants will be provided for the days that you will be attending the Congress that you have stated on the pre-registration form.".
"<br>200 overnight grants will be provided (for people who live outside the Basque Autonomous Community and Navarre, except in justified cases), worth a maximum of 100 euros per day and 400 travel grants (for people who live outside San Sebasti�n and the surrounding area) worth 25 euros per day".
"<br>To apply for a grant, you must attach a short exposition (no more than 200 words) of the reasons why you feel you deserve the grant along with the pre-registration form. You can state whatever merits you think are appropriate (no more than 200 words) (fill in grant application).  ".
"<br>The deadline for applying for a grant will be the 31st of March.".
"<br>The deadline for awarding grants will be the 31st of May.".
"<br>Only those registrations that are accepted will be eligible for grants".
"<br>Once the pre-registrations who have applied for a grant have been examined, the Congress Technical Secretariat will inform you whether the grant has been awarded or not.".
"<br>Types of grants:".
"<br>The Organisation awards two types of grants:  Overnight and Travel.".
"<br>Overnight Grant:".
"<br>These are only for people who live outside the Basque Autonomous Community and Navarre and who stay overnight in San Sebasti�n, except in justified cases. ".
"<br>Accommodation must be booked with the Congress Official Travel Agency.".
"<br>Overnight grants will be provided for the nights of the 5th of September to the 8th of September, inclusive.".
"<br>The days that you have requested your hotel reservation for must match the days that you have stated that you will be attending on the pre-registration form.".
"<br>Payment will have to made once you have been informed whether the grant has been awarded or not.".
"<br>Amount:  The maximum amount is 100 euros /night. You must fill in the accommodation form. ".
"<br>The Organisers will pay a maximum amount of 100 euros /night, which will be paid directly to the Congress Official Travel Agency.".
"<br>If the accommodation you have chosen costs more than this amount, you will have to pay the difference directly to the Travel Agency ".
"<br>Travel Grant:".
"<br>This is only for those people who live outside of San Sebasti�n and its surrounding area. The Organisers will pay a sum of 25 euros/day, which will be paid, once the Congress is over, to each grant holder who has attended the Congress and who can provide evidence that they have done so at the Technical Secretariat.".
"<br>Amount: the amount per day: 25 euros/day";break;
case "Registro_Alojamiento":
$strTexto = "<br>To book accommodation you must fill in the accommodation form".
"<br>The Organisers have agreed on special prices at hotels with various categories through their Official Travel Agency for the Congress, as shown on the accommodation form.".
"<br>To take advantage of these special prices, if you are awarded a grant for accommodation, you can only book through the Congress Official Travel Agency.".
"<br>The 30th of June is the deadline for reserving a hotel. After this date the Organisers refuse to accept any responsibility for the availability of rooms or for their prices.".
"<br>Once you have booked your accommodation, Carlson Wagonlit Travel will confirm your booking in writing (by e-mail) and will let you know the possible methods of payment.".
"<br>Accommodation will be charged from the 1st of July onwards.".
"<br>If you have been awarded an overnight grant, the Congress Official Travel Agency, Carlson Wagonlit Travel, will confirm your accommodation and if the hotel you have chosen costs more than 100 euros/night, will inform you of the difference you have to pay.".
"<br>Cancellation charges:".
"<br>Up to the 31st of July: there will be no charges for cancellations.".
"<br>From the 1st to the 31st of August: the cost of one night at the hotel you have chosen.".
"<br>From the 1st of September: 100% of the sum paid".
"<br>All cancellations must be notified in writing to the Congress Official Travel Agency�s e-mail address.".
"<br>For further information about accommodation: ".
"<br>Congress Official Agency: ".
"<br>Carlson Wagonlit Travel".
"<br>Ms. Ma�en Echarri".
"<br>Fax: (34) 943 428041".
"<br>E-mail: mecharri@carlsonwagolit.es".
"<br>List of hotels with specially arranged prices".
"<br>Residencia Olarain".
"<br>Hotel Londres y de Inglaterra **** (It overlooks the square)".
"<br>Hotel NH Ar�nzazu ****".
"<br>Hotel Amara Plaza ****".
"<br>Hotel Tryp Orly ****";break;
case "AlbertEinstein_VidaYObra":
$strTexto = "<b>Life And Work ".
"<br>ALBERT EINSTEIN: 1905/2005</b> ".
"<br><br>The year 2005 will mark the centenary of a momentous year for science, 1905. At that time, when the wake of the revolutionary quantum hypothesis formulated by Max Planck (1900) was still rocking the minds of physicists, a third level technical clerk of the Swiss Patent Office at Bern, called Albert Einstein, born in Ulm (Germany) on march 14 1879, sent five manuscripts to the prestigious German journal Annalen der Physik for publication. Five papers that changed the face of physics, as noted by the physicist and historian John Stachel. Any one of them would have sufficed to distinguish him as one of the great scientists of his period. All of them jointly, however, raised him to the summit along with Archimedes and Newton. According to his biographer Albrecht F�lsing �never before and never since has a single person enriched science by so much in such a short time as Einstein did in his annus mirabilis'. ".
"<br><br>Scientists and thinkers around the world will celebrate this centenary during 2005, a year that has been declared as the World Year of Physics. Donostia International Physics Center will take part in these commemorative events with a rich and select programme of lectures, seminars and exhibitions. All events combined aim at bringing to society the work and memory of an unequalled creative figure who became familiar to us as the violinist with muddled hair and sad eyes, and to whom science and humanism will eternally owe a tribute. ".
"<br><br>In December 1999, TIME magazine elected Albert Einstein as the thinker and scientist of the 20th century, in preference to other great candidates as Francis Crick and James Watson, Alexander Fleming, Sigmund Freud, Kurt G�del, Edwin Hubble, William Shockley, Alan Turing and Ludwig Wittgenstein. ".
"<br><br>Duality was a constant in our character. His calm contemplation of the universe contrasted with his unstable family life. Though a passionate Zionist, he showed concern for the rights of arabs in Israel. Though a pacifist, he undoubtedly supported military action against Hitler. He warned Roosevelt of the danger posed by the imminent development of nuclear weapons by the nazis and persuaded him to get there first, but after the end of the war, battled against the nuclear arms race. In the midst of these contradictions, Einstein was, nonetheless, a deeply moral man. ".
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
"</tr></table><br><br> ";break;
case "AlbertEinstein_5Trabajos":
$strTexto = "<b>Einstein's Five Papers</b> ".
"<br><br>The first of those five works was entitled ��ber  einen die Erzeugung und Verwandlung des Lichts betreffenden heuristischen Gesichtspunkt� (On a Heuristic Point of View Concerning the Production and Transformation of Light). In it Einstein explained the photoelectric effect through a corpuscular interpretation of light. It is a fundamental contribution to the genesis of quantum physics, and, according to its author, very revolutionary. It questioned the validity of Maxwell�s electromagnetic theory, based on continuous fields, to account for the phenomena of light emission and transformation, and suggested the discretization of the energy of light into quanta or indivisible light corpuscles. �For his services to Theoretical Physics, and especially for his discovery of the law of the photoelectric effect� he was awarded the 1921 Nobel Prize in Physics. ".
"<br><br>The second paper was ��ber die von der molekularkinetischen Theorie der W�rme geforderte Bewegung von in ruhenden Fl�ssigkeiten suspendierten Teilchen� (On the Movement of Small Particles Suspended in Stationary Liquids Required by the Molecular-Kinetic Theory of Heat). In this work, Einstein showed the limits of classical thermodynamics, when observable statistical fluctuations in the irregular movement of particles in suspension violate the second law.  ".
"<br><br>With the last manuscript of that year entitled �Zur Theorie der Brownschen Bewegung� (On the Theory of Brownian Motion) he settled the physical and mathematical basis of brownian  motion,  as a result of the continuous bombardment of suspended particles by the fluid molecules. Here he made the radical proposal that the parameter to be taken into account experimentally is the mean displacement, and not the erratic speed. Related to these two papers is the fourth one, �Eine neue Bestimmung der Molek�ldimensionen� (A New Determination of Molecular Dimensions), built on his doctoral thesis (Z�rich University 1905). In it Einstein gave a method, based on hydrodynamics and the diffusion theory, to estimate Avogadro�s number and the size of solute molecules in diluted solutions. This set of works would encourage the Frenchman Jean Perrin to new measurements of Avogadro�s number and the experimental determination of atomic sizes, thus providing strong support of the reality of atoms and molecules as tangible entities. ".
"<br><br>The third work is �Zur Elektrodynamik Bewegter K�rper� (On the Electrodynamics of Moving Bodies) which along with the fifth, �Ist die Tr�gheit eines K�rpes von seinem Energieinhalt abh�ngig?� (Does the Inertia of a Body Depend upon its Energy Content?) constitute what is now called the special theory of relativity. This special relativity is founded on two basic principles: the principle of relativity (Physics is the same in all inertial systems), and the principle of constancy of the speed of light (the velocity of light is isotropic and the same in all inertial systems). With this theory, Einstein resolved the apparent conflict between the relativity principle and the electrodynamics of Maxwell and Lorentz, which gives priority to some reference systems. This forced him to abandon the concepts of simultaneity and the ether. The young Albert Einstein clearly demolished with implacable logic the foundations of known physics, to erect a new framework based on the space-time concept, in which both space and time lose their absoluteness. From his relativity principles Einstein inevitably reached in his fifth work the equivalence of matter and energy, translated into the famous formula E=mc2 which he then expressed as �variation of the mass of a body equal to L/V2�, where L is its energy change and V the speed of light, the validity of which he suggested might be tested with radium salts. At that time, the author still ignored the overwhelming power of the genius hidden within his simple formula. It would later emerge in nuclear reactions.".
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
"<br><br>The celebration of Albert Einstein�s annus mirabilis should help us reconsider the importance of science, not only as a driving force of knowledge, but as a catalyst of technological and social change. Those countries which aim to improve the quality of life of their citizens cannot afford to leave an adequate exercise of scientific activity aside. ".
"<br><br>Einstein is an excellent example of a scientist for new generations. He was an unconventional character whose creativity and intuition guided him through the dream of understanding the Universe differently. ".
"<br><br>We will celebrate the century of a unique burst of creativity which sprang from an unknown patent officer who defended his revolutionary ideas with passion, dedication, effort and brilliance. Einstein opened new horizons in physics and along with this, he changed the world of his time. ".
"<br><br>The best tribute to his memory would be the recovery of social enthusiasm for the collective adventure of science.";break;
case "Lunes5deSeptiembre": $strTexto="Monday September 5";break;
case "Martes6deSeptiembre": $strTexto="Tuesday September 6";break;
case "Miercoles7deSeptiembre": $strTexto="Wednesday September 7";break;
case "Jueves8deSeptiembre": $strTexto="Thursday September 8";break;
case "Lunes5deSeptiembre_1730": $strTexto = "Registration Control";break;
case "Lunes5deSeptiembre_1800": $strTexto = "Presentation and Official Opening.<br><b>Juan Jos� Ibarretxe</b> President of The basque Country";break;
case "Lunes5deSeptiembre_1830": $strTexto = "Inaugural Lecture. <a href='index.php?pg=7&ponente=14' target='einstein_ponente'><font class=textomna2>C. Cohen-Tannoudji.</font></a> <br><i>Bose Einstein Condensates: a New Form of Matter</i>";break;
case "Lunes5deSeptiembre_1930": $strTexto = "<b>Chamber Concert</b> <br><i>Einstein�s favourites, with sparkles of his life and times</i>.";break;
case "Lunes5deSeptiembre_2100": $strTexto = "<b>Cocktail at the Foyer of the Auditorium</b>.";break;
case "Martes6deSeptiembre_900": $strTexto = "Registration Control.";break;
case "Martes6deSeptiembre_930": $strTexto = "Einstein and Time.";break;
case "Martes6deSeptiembre_1015": $strTexto = "<b>Open Spot</b> <i>Gravitation and Black Holes</i>.";break;
case "Martes6deSeptiembre_1100": $strTexto = "Coffee Break.";break;
case "Martes6deSeptiembre_1130": $strTexto = "Origin and Evolution of the Universe: the challenges of Cosmology.";break;
case "Martes6deSeptiembre_1215": $strTexto = "Matter and Form.";break;
case "Martes6deSeptiembre_1300": $strTexto = "Summary and Discussion.";break;
case "Martes6deSeptiembre_1800": $strTexto = "<i>The Magic and Power of Small</i>.";break;
case "Martes6deSeptiembre_1845": $strTexto = "<i>Steps Towards Complex Matter: Information, Self-Organization and Adaptation in Chemical Systems</i>.";break;
case "Martes6deSeptiembre_1930": $strTexto = "<i>Brownian Motion and Molecular Motors</i>.";break;
case "Martes6deSeptiembre_2015": $strTexto = "<b>End of Session</b>.";break;
case "Miercoles7deSeptiembre_900": $strTexto = "Registration Control.";break;
case "Miercoles7deSeptiembre_930": $strTexto = "Quantum Information Theory: Challanges and Perspectives";break;
case "Miercoles7deSeptiembre_1015": $strTexto = "Relativity, Photons and Particles";break;
case "Miercoles7deSeptiembre_1100": $strTexto = "Coffee Break.";break;
case "Miercoles7deSeptiembre_1130": $strTexto = "<i>Black Holes</i>.";break;
case "Miercoles7deSeptiembre_1215": $strTexto = "Summary and Discussion.";break;
case "Miercoles7deSeptiembre_1700": $strTexto = "<i>What is Unified Theory?</i>.";break;
case "Miercoles7deSeptiembre_1800": $strTexto = "<i>Pulsar Physics and Testing Einstein</i>.";break;
case "Miercoles7deSeptiembre_1830": $strTexto = "<b>Break</b>";break;
case "Miercoles7deSeptiembre_1845": $strTexto = "Was Einstein Right?.";break;
case "Miercoles7deSeptiembre_1930": $strTexto = "Einstein and the Quantum World Today.";break;
case "Miercoles7deSeptiembre_2015": $strTexto = "End of Session.";break;
case "Jueves8deSeptiembre_900": $strTexto = "Registration Control.";break;
case "Jueves8deSeptiembre_930": $strTexto = "Einstein and  the Light Quanta.";break;
case "Jueves8deSeptiembre_1015": $strTexto = "The Confrontation between General Relativity and Experiment.";break;
case "Jueves8deSeptiembre_1100": $strTexto = "Coffee Break.";break;
case "Jueves8deSeptiembre_1130": $strTexto = "Einstein and Phylosophy in the 20th Century.";break;
case "Jueves8deSeptiembre_1215": $strTexto = "Summary and Discussion.";break;
case "Jueves8deSeptiembre_1800": $strTexto = "Einstein: Who he thought he was, and why he is still so alive today.";break;
case "Jueves8deSeptiembre_1845": $strTexto = "Einstein, Picasso: Space, Time and the Beauty that Causes Havoc.";break;
case "Jueves8deSeptiembre_1930": $strTexto = "Einstein�s Greatest Dream: A Background-Independent Physics.";break;
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
$strTexto = "<b>Steps Towards Complex Matter: </b>".
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
"<br><b>Information, Self-Organization and Adaptation in Chemical Systems.</b> ".
"<br>Jean-Marie Lehn was born in Rosheim, France in 1939. In 1970 he became Professor of Chemistry at the University Louis Pasteur in Strasbourg and since 1979 he is Professor at the Coll�ge de France in Paris. In 1968 his research led to the fabrication of cage-like molecules that contain a cavity into which another chemical species of appropriate size and shape may be included, like a key fits into a lock. With this began his work on the chemical basis of 'molecular recognition' (i.e. the way in which a receptor molecule recognizes and selectively binds a substrate), which also plays a fundamental role in biological processes. For these studies Dr. Lehn received the Nobel Prize in Chemistry in 1987 with Cram and Pedersen. ".
"<br><br>Over the years his work led to the definition of a new field of chemistry, which he has named 'supramolecular chemistry'. It deals with the complex entities formed by the association of two or more chemical species held together by intermolecular forces, whereas molecular chemistry studies the features of the entities constructed from atoms linked by covalent bonds. ".
"<br><br>His research broadened from molecular recognition towards supramolecular catalysis and transport processes. It also extended to the design of molecular devices, molecular electronics and photonics. More recently he concentrates his efforts on the design of 'programmed' systems that undergo self-organization by spontaneous but directed assembly of suitable components into well-defined functional supramolecular architectures. ".
"<br><br>Author of more than 750 scientific publications, Dr. Lehn is a member of many academies and institutions and has received numerous international honors and awards.";break;
case "Ponente_A_Cirac":
$strTexto = "<b>Quantum Information Theory: Challanges and Perspectives</b> ".
"<br><br>Quantum information processing and communication is a multidisciplinary field of research in which the goal is to use some of the intriguing properties of quantum mechanics in order to process and transmit information in a very efficient way. For the moment, there are very few systems on which one can test the main ideas of quantum computing, perhaps the most important application in this field. On the one hand, we have quantum optical systems, typically atoms or ions, which interact with laser fields and that are trapped by electromagnetic forces. On the other, we have solid state devices (quantum dots or superconductor devices, for example) which can be electronically controlled. In this talk I will revise the basic concepts in the field of Quantum Information, showing how to implement some of the ideas using atoms, ions and photons. I will also discuss the perspectives in the field of taming and controlling quantum optical systems in order to reach the ultimate goal of constructing a scalable device.";break;
case "Ponente_C_Cirac":
$strTexto = "<b>Max-Planck Institute for Quantum Optics, Garching.</b>".
"<br>Professor Cirac obtained his degree in Physics and his PhD at Universidad Complutense in Madrid (1988, 1991). His professional career includes positions at the University of Colorado, Innsbruck, Technical University of Munich and the Max-Planck Institute for Quantum Optics, where he is now Managing Director. ".
"<br><br>Professor Cirac is author of 175 publications and has numerous awards. He is also a Fellow of the American Physical Society, and Corresponding Member of the Spanish and Austrian Academies of Sciences. ";break;
case "Ponente_A_Clifford":
$strTexto = "<b>The Confrontation Between General Relativity and Experiment</b> ".
"<br><br>We revies the experimental evidence for Einstein�s General Relativity. Tests of the Einstein Equivalence Principle support the postulates of curved spacetime, while solar-system experiments strongly confirm weak-field general relativity. The Binary Pulsar provides tests of gravitational-wave damping and of strong-field general relativity. We describe ongoing and future experiments, such as the Stanford Gyroscope experiment, a satellite test of the Equivalence principle, and tests of gravity at short distance to look for extra spatial dimensiona. ".
"<br><br>Recently operational laser interferometric gravitational-wave observatories, and a future space interferometer, may provide new tests via the properties of gravitational waves. ".
"<center><br><br>Was Einstein Right?<br>McDonell Center for Space Sciences, Department of Physics. <br>Washington University. St Louis, USA</center> ".
"<br><br>How has the most celebrated scientific theory of the 20th century held up Ander the exacting scrutiny of planetary probes, radio telescopes, and atomic clocks? After 100 years, was Einstein right? ".
"<br><br>In this lecture, we relate the story of testing relativity, from the 1919 measurements of the bending of light to the 1980s measurements of a decaying double-neutron-star system that reveal the action of gravity waves. We will show how a revolution in astronomy and technology led to a renaissance of general relativity in the 1960s, and to a systematic program to try to verify its predictions. We will also demonstrate how general relativity plays an important role in daily life.";break;
case "Ponente_C_Clifford":
$strTexto = "<b>Washington University.</b>".
"<br>Clifford Will is professor of Physics, and member of the McDonnell Center for the Space Sciences at Washington University in St. Louis. ".
"A B.Sc in Applied Mathematics and Theoretical Physics from McMaster University in 1968, and a PhD. In physics from the California Institute of Technology in 1971, he was an Enrico Fermi Fellow at the University of Chicago (1972-74), and an Assistant Professor of Physics at Stanford University (1974-81). From 1975 to 1979, he was an Alfred P. Sloan Foundation Fellow. In 1981 he joined Washington University as Associate Professor, in 1985 became Full Professor of Physics, and from 1991-2002, served as Chairman of the Department. ".
"In 1986 he was selected by the American association of Physics Teachers to be the 46th annual Richrmyer Memorial Lecturer, and in 1989 was elected a Fellow of the American Physical Society. ".
"In recognition of his theoretical work related to the Hulse-Taylor Binary Pulsar, he was an invited guest of the Nobel Foundation at the 1993 Nobel Prize Ceremonies honouring discoverers Joseph Taylor and Russel Hulse. During 1996-97, he was both a J. William Fulbright Fellow and a Guggenheim Foundation Fellow, and in 1996, he was named Distinguished Alumnus in the Sciences by McMaster University. ".
"In 2001 he was elected a Fellow of the American Academy of Arts and Sciences, and in 2004 he received the Fellows award of the St. Louis Academy of Sciences. ".
"He has published over 160 scientific articles, including 13 major review articles. In addition, he has authored many popular and semi-popular papers and two books. ";break;
case "Ponente_A_Galindo":
$strTexto = "<b>Einstein and Time</b>".
"<br><br>Many scientific and technological advances have been linked to developments in the precision with which we can measure time. Clocks now exist which are accurate to within one second per 20 million years; moreover, with the generation of ultrashort bursts of XUV radiation and the development of techniques for measuring their duration to within attoseconds, we are now clearly beginning to move from the femtochemical to the attophysical. ".
"<br><br>Physical time�for which the great Newton offered no definition on the grounds that it was �well known to all��formed the core of the scientific revolution that came with Albert Einstein and his principle of relativity. With the theory of special relativity, first propounded by Einstein in 1905�his annus mirabilis�Newton's absolute, true and mathematical time gave way to innumerable different times, one for every inertial frame. Simultaneity became relative, as did duration, which dilated with movement. Relativist time runs more slowly on moving clocks, and this makes it possible to �travel to the future�.  But gravitation remained outside this restricted relativity and thus the space-time amalgam retained its absoluteness. Between 1907 and 1915 Einstein managed to accommodate gravity into his ideas, building his general relativity on the principle of equivalence. In it Einstein taught that space-time curved under the effect of matter-energy; specifically, time experienced a gravitational dilation to add to that resulting from movement. ".
"<br><br>Einstein relativist theories are not only of the greatest importance for physicists, they also impinge on aspects of our everyday life. When we use a GPS (Global Positioning System) exactly where (and when) we are, we are making use of a technology which cannot ignore either the relativist or the gravitational dilation of time. If it did, the GPS would fail after just a few minutes and planes would be unable to land safely in conditions of zero visibility. And finally, whenever man dreams of travelling to distant worlds, returning to the past, or visiting the future, sooner or later he ends up coming back to those warps in space-time which�in principle�Einstein's theory of gravity holds out under extreme conditions.".
"<br><br>This talk is intended to give interested members of the public a closer view of these questions. It is the best tribute that can be paid to the man who changed physics and left us as his outstanding work that most beautiful creation ever to be born out of the scientific spirit: Einstein's theory of gravity.";break;
case "Ponente_C_Galindo":
$strTexto = "<b>Universidad Complutense, Madrid</b> ".
"<br>Born in Huesca in 1934, Alberto Galindo obtained his primary degree in exact sciences from the Science School of the Universidad de Zaragoza and went on to gain a PhD in physics from the Universidad Central de Madrid. From 1963 to 67 he held the post of professor of principles of relativity at the Universidad de Zaragoza and from 1967, he was the professor of theoretical physics at the Universidad Complutense, Madrid.".
"<br><br>Prof. Galindo has worked as a researcher in several centres: Junta de Energ�a Nuclear, Courant Institute of Mathematical Sciences (New York University), International Centre for Theoretical Physics (Trieste),Centre Europ�en pour la Recherche Nucl�aire (CERN, Gen�ve), Institut des Hautes �tudes Scientifiques (Bures-sur-Yvette), D�partement de Physique Math�matique (Universit� de Dijon), Institut f�r Theoretische Physik (Wien Universit�t), Department of Physics (Princeton University), Coll�ge de France (Par�s), Department of Physics (University of California in Los Angeles), Donostia International Physics Center (San Sebasti�n).".
"<br><br>He has written works on functional analysis, theory of Lie groups and algebras, quantum mechanics, theory of fields, elementary particles, integrated systems, quantum groups and quantum information.".
"<br><br>Prof. Galindo is the author of several books, including: M�todos Matem�ticos de la F�sica (with L. Abellanas, Imprenta Octavio y F�lez, Zaragoza 1973), Mec�nica Cu�ntica (with P. Pascual, Editorial Alhambra, Madrid 1978), Soluciones Exactas en Relatividad General. Colapso Gravitacional y Agujeros Negros (with L. M�s, Editorial de la Universidad Complutense, Madrid 1983), Espacios de Hilbert. (Geometr�a, Operadores, Espectros)  (with L. Abellanas, EUDEMA, Madrid 1988), Mec�nica Cu�ntica I, II (with P. Pascual, EUDEMA, Madrid 1989), Problemas de Mec�nica Cu�ntica (with P. Pascual, EUDEMA, Madrid 1989), M�todos de C�lculo (in Serie Schaum, with L. Abellanas, McGraw-Hill, Madrid 1990), Quantum Mechanics I, II (with P. Pascual, Springer Verlag, Berlin 1990, 1991),  F�sica y Qu�mica 1  (with J. M. Savir�n, A. Moreno, J.M. Pastor, A. Bened�, McGraw-Hill, Madrid 1995), F�sica 2  (with A. Moreno, A. Bened�, P. Varela, McGraw-Hill, Madrid 1998)".
"<br><br>Prof. Galindo has received a number of distinctions and prizes: elected member of the Academia de Ciencias Exactas, F�sico-Qu�micas y Naturales de Zaragoza, permanent member of the Real Academia de Ciencias Exactas, F�sicas y Naturales de Madrid, founder and first director of the Grupo Interuniversitario de F�sica Te�rica (Interuniversity Group for Theoretical Physics - GIFT), member of the first scientific council of the Erwin Schr�dinger International Institute for Mathematical Physics, Vienna, member of the European Academy, winner of the National Prize for Physics Research 1977, National �Santiago Ram�n y Cajal� Prize for Research 1985, Aragon Prize 1991 for scientific and technical  research.";break;
case "Ponente_A_Gerald":
$strTexto = "<b>Einstein as Inventor of Physics and of Self</b> ".
"<br>The astonishing multitude of Einstein�s scientific contributions in different fields of physics tends to make one lose sight of the unifying themes that motivated most of his work. Similarly, quite apart from his scientific research, the enormous variety of accounts of his life and thoughts, including on religion, hides attention that basically they are also guided by some unifying themes. We shall show the extent to which these two sets of themes are in fact essentially the same ones, dominating both his work and his life.";break;
case "Ponente_C_Gerald":
$strTexto = "<b>Harvard University</b> ".
"<br>Is Research Professor of Physics and Research Professor of History of Science at Harvard University, Fellow of the American Physical Society, the American Philosophical Society, the American Academy of Arts and Sciences, and several European learned societies. He served as President of the History of Science Society, and on the U.S. National Commission for UNESCO. His book publications include Thematic Origins of Scientific Thought: Kepler to Einstein, and Einstein, History and Other Passions. He was the Founding Editor of the quarterly journal Daedalus, and was member of the Editorial Committee of Collected Papers of Albert Einstein. His honors include the Sarton Medal, selection as the Herbert Spencer Lecturer at Oxford University, and as the Jefferson Lecturer by the National Endowment for the Humanities. ".
"<br><br>At the request of the Albert Einstein estate, he initiated and for several years supervised the conversion of Einstein�s largely unpublished correspondence and manuscripts into an archive suitable for scholarly study.";break;
case "Ponente_A_Sheldon":
$strTexto = "<b>What Is a Unified Theory?</b>".
"<br><br>Einstein spent the last half of his life in a fruitless quest for what he called a unified field theory: a system of equations that would describe not only gravitation and electromagnetism, but also �atomic matter� itself. Similar fates awaited Schroedinger, Heisenberg, and for a time Wolfgang Pauli. Today we know a great deal more. Our standard model offers a rather complete and correct description of all elementary-particle phenomena, but it cannot describe gravity. Superstring theory offers a quantum theory of gravity that may be compatible with the standard model, but it has not (and perhaps cannot) answer such questions as why quarks and leptons have their observed masses and mixings. Will the 21st century bring us any closer to the realization of Einstein�s dream? Can there be a Theory of Everything?";break;
case "Ponente_C_Sheldon":
$strTexto = "<b>Boston University</b>".
"Born in New York City in 1932 and educated in its public schools, Glashow attended college at Cornell University and received his PhD from Harvard University. After several years at the Niels Bohr Institue, Cal Tech, Stanford University, and the University of California at Berkeley, he joined the faculty at Harvard in 1966, where he remained as Higgins Professor of Physics until 2000. He is presently University Professor and Metcalf Professor of Science at Boston University. ".
"<br><br>Professor Glashow is the author of three books and over 300 professional and popular articles. He is a member of the American Philosophical Society, The American Academy of Arts and Sciences, and the National Academies of Science of the USA, Russia, Korea and Costa Rica. ".
"<br><br>In 1979 Professor Glashow shared the Nobel Prize in Physics for his contributions toward a unified theory of the weak and electromagnetic interactions. ";break;
case "Ponente_A_Dudley":
$strTexto = "<b>Brownian Motion and Molecular Motors</b>".
"<br><br>In his 1905 paper on Brownian motion, Einstein balanced a 'systematic force,' the Stokes drag force on particles in a colloidial suspension, with the random, fluctuating force generated by thermal motion of solvent molecules.  He also treated diffusion in a new way, as a Markovian process.  These strategies enabled him to reconcile Brownian motion with the second law of thermodynamics and also led to several means of determining Avogadro's number, yielding consistent results that confirmed the reality of molecules.  ".
"<br><br>Today kindred strategies elucidate the seemingly paradoxical operation of 'molecular 'motors,' such as a enzyme moving along a DNA template strand while catalyzing its replication.  A typical such enzyme motor 'burns' hundreds of molecules of adenosine triphosphate per second.  However, this chemical power is miniscule compared with the random thermal noise power encountered by the motor in traveling through water.  The discrepancy is about nine orders of magnitude.  Yet enzymes perform myriad and highly specific chemical tasks with remarkable efficiency. ".
"<br><br>In this talk, my aim is to offer homage to Einstein's legacy by emphasizing how his ideas have been incarnated in current models for enzyme motors. Brownian fluctuations allow enzymes to rapidly explore a vast range of configurations and thereby to exploit those that enable chemical forces to induce reaction.  Thus, it is the thermal noise of Brownian motion that permits enzymes to retify diffusion and produce the directed molecular motions essential for biological processes.";break;
case "Ponente_C_Dudley":
$strTexto = "<b>Harvard University</b>".
"<br>Was born in San Jose, California (1932) and received his B.S. degree in Mathematics (1954) and M.S. in Chemistry (1955) at Stanford University, followed by an A.M. degree in Physics (1956) and Ph.D. in Chemical Physics (1958) at Harvard. ".
"<br><br>In 1963 he returned to Harvard as Professor of Chemistry where he became Baird Professor of Science (1976-2003). He is now a Research Professor (Emeritus). His teaching includes graduate courses in quantum mechanics, chemical kinetics, molecular spectroscopy, and collision theory, as well as undergraduate courses in physical chemistry and general chemistry for freshmen, his most challenging assignment. Currently he gives a freshman seminar course on Molecular Motors and an informal graduate 'minicourse' on topics in chemical physics. He is engaged in several efforts to improve K-16 science education and public understanding of science. He serves as Chair of the Board of Trustees of Science Service, which publishes Science News and conducts the Intel Science Talent Search and the Intel International Science and Engineering Fair. ".
"<br><br>Professor Herschbach is a member of many academies and institutions and has received numerous international honors and awards. His current research is devoted to methods of orienting molecules for studies of collision stereodynamics, means of slowing and trapping molecules in order to examine chemistry at long deBroglie wavelengths, molecular transformations induced by high-pressure, a dimensional scaling approach to strongly correlated many-particle interactions, and theoretical analysis of molecular motors, particularly enzyme-DNA systems.";break;
case "Ponente_A_Hewish":
$strTexto = "<b>'Pulsar Physics and testing Einstein'</b>".
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
$strTexto = "Was born in Fowey, Cornwall, in 1924. After one year at Cambridge University he carried out three years war service, from 1943-46, at the Royal Aircraft Establishment, Farnborough. Returning to Cambridge he completed his degree course in 1948, and joined Martin Ryle�s team to start research in radio astronomy. He was involved with Ryle�s pioneering sky surveys of radio galaxies and later designed a large phased-array antenna to measure the angular sizes of quasars using scintillation induced by the solar wind. It was during this work, in 1967, that he discovered pulsars, with his student Jocelyn Bell-Burnell. In 1974, Professor Hewish was awarded the Nobel Prize for Physics (jointly with Ryle) for his role in this discovery. ".
"<br><br>During 1982-87  Professor Hewish was Director of the Mullard Radio Astronomy Observatory at Cambridge. He formally retired from his academic post as Professor of Radioastronomy in 1989. Throughout his career at Cambridge he was involved with teaching physics.";break;
case "Ponente_A_Miller":
$strTexto = "<b>Einstein, Picasso Space, Time, and the Beauty That Causes Havoc.</b>".
"<br><br>The most important scientist of the twentieth century, and its most important artist, went through their periods of greatest creativity almost simultaneously and in remarkably similar circumstances. I will focus on their greatest breakthroughs: Einstein's special theory of relativity and Picasso's Les Demoiselles d'Avignon.  When they produced these astonishing works, Einstein and Picasso were not the distinguished elderly figures that later became so familiar: they were in their twenties, unknown, feisty, dirt-poor, and prone to getting into trouble - their personal and creative beauty caused havoc. ".
"<br><br>They both responded to the tidal wave of the avant-garde.  For Picasso this included the newly invented medium of moving pictures, photography, and cutting-edge science and philosophy.  Einstein immersed himself in such key technological problems as the design of electric dynamos and the co-ordination of train schedules. ".
"<br><br>Behind the many similarities in their lives and circumstances, and in what they had to endure in order to produce such masterpieces, lies a greater, unifying point.  Einstein and Picasso both came of age at the exact moment in history when it was first becoming apparent that classical, intuitive ways of understanding space and time are not adequate.  They were both working on the same problem: the nature of space and time and, more particularly, simultaneity.";break;
case "Ponente_C_Miller":
$strTexto = "<b>University College, London</b>".
"Arthur I. Miller is Professor of History and Philosophy of Science at University College London. He has appeared on numerous TV and radio programs, ahd has written and lectured widely on the history and philosophy of modern science, cognitive science, scientific creativity and the relation between art and science. His many books include Albert Einstein's Special Theory of Relativity, Sixty-Two Years of Uncertainty, and Insights of Genius: Imagery and Creativity in Science and Art.";break;
case "Ponente_A_Rebolo":
$strTexto = "<b>Origin and Evolution of the Universe: the Challenges of Cosmology</b> ".
"<br><br>Observations of the large scale distribution of galaxies in the Universe, of supernova explosions in very distant galaxies and high-sensitivity measurements of the anisotropy of the Cosmic Microwave Background - the relict radiation from the Early Universe�strongly support the idea that the Cosmos is dominated by exotic forms of matter and energy.".
"<br><br>The major form of matter in the Universe, five times more abundant than ordinary matter, appears to be of a very weakly interactive nature. Major efforts are being undertaken in  laboratories to identify the particle responsible. The dominant form of energy, the so-called vacuum energy, is related to the cosmological constant suggested by Einstein in his equations for General Relativity and responsible for an accelerated expansion of the Universe at present. Recent advances in our understanding of these crucial   components and their role in the evolution of the Universe will be reviewed.";break;
case "Ponente_C_Rebolo":
$strTexto = "<b>Instituto de Astrof�sica de Canarias (CSIC)</b>".
"Born in Cartagena, Spain in 1961, he gained his primary degree in physical sciences from the Universidad de Granada and a PhD in astrophysics from the Universidad de La Laguna. He is currently the Research Lecturer of the Higher Council for Scientific Research in the Instituto de Astrof�sica de Canarias (IAC) and Associate Lecturer of the Max Planck Institute f�r Astronomie. ".
"<br><br>He was the head of the Scientific Division of the IAC and received the �King Jaime I� and �Canarias� prizes for Research and the �Iberdrola� Prize for Science and Technology.".
"<br><br>He directs several projects on the origin of chemical elements, the Cosmic Microwave Background, giant planets and brown dwarves. He has co-authored more than 130 scientific publications in refereed journals, totalling over 3000 citations.".
"<br><br>He is a member of the governing boards of the European Association for Research in Astronomy and the European Optical Infrared Coordination Network for Astronomy and a corresponding member of the Real Academia de Ciencias de Espa�a.";break;
case "Ponente_A_Rohrer":
$strTexto = "<b>The Magic and Power of Small</b> ".
"<br><br>Miniaturization of electronic components has been the key to their ever-accelerating pervasiveness in a world of electronic control of daily life to most advanced scientific adventures, of high speed computing, and of world embracing communications as never before. Increased miniaturization through nanotechnology will undoubtedly bring about an unprecedented level of diffusion of electronic technology throughout society and the world. ".
"<br><br>But nanoscience promises much more than just smaller, faster, cheaper � and more powerful. Nano is different. Nanoscience and -technology stand at the confluence of classical and quantum mechanical properties and behavior and of a multiplicity of fields such as condensed matter physics and technology, macromolecular chemistry, and biology. Nano-mechanics and nano-chemistry are forging new pathways between the 'virtual' world of data processing of all kinds, including mechanical, chemical and thermal, and the 'real' world of sensing and actuation, bringing about a pervasive wave of new, integrated processing, sensing, and actuation technologies. ".
"<br><br>It is this difference that carries the promise for science and technology on the nanometer scale, and which will see it become a most important cornerstone of the science and technology world in this century.";break;
case "Ponente_C_Rohrer":
$strTexto = "Heinrich Rohrer studied Experimental Physics at the Swiss Federal Institute of Technology Zurich (ETHZ). In 1963, after two years as Post-doc in the USA, he joined the IBM Zurich Research Laboratory. Prof. Rohrer was awarded the Nobel Prize in Physics in 1986 for his work on Scanning Tunneling Microscopy. He retired from IBM in 1997 and took various science appointments in Switzerland, Japan and Spain.";break;
case "Ponente_A_Ron":
$strTexto = "<b>Einstein and philosophy in the 20th century</b>".
"<br><br>Albert Einstein is acknowledged as the greatest scientist of the 20th century and one the greatest of all times, but his influence did not manifest itself on science but also on philosophy, and most specially on epistemology and methodology. In my intervention I will discuss the following themes: 1) the influence that philosophy had on Einstein during his most productive years, and how he interacted at that time with some philosophers (such as Mach or Schlick); 2) how his 'philosophy of science' changed following �and coherently with� the evolution of his scientific interests and points of view; 3) how his scientific contributions, mostly in special and general relativity, influenced 20th century philosophy, paying special attention to British philosophers circa 1910-1930, Jos� Ortega y Gasset, as well as members of the Vienna Circle and others related to this movement, mainly Hans Reichenbach and Karl Popper.";break;
case "Ponente_C_Ron":
$strTexto = "<b>Universidad Aut�noma de Madrid</b>".
"<br>Born in Madrid in 1949, Dr. S�nchez-Ron obtained his first degree in physics from Universidad Complutense, Madrid (1971). He obtained his PhD at University College London. He is now full professor in History of Science at Universidad Complutense in Madrid. Member of the Real Academia Espa�ola (2003) and of the Academia Europea de Ciencias y Artes (Academia Scientiarum et Artium Europaea; 2003). ".
"<br><br>Dr. S�nchez-Ron is author of more than 20 books, among them El origen y desarrollo de la relatividad (1983), La Espa�a posible de la Segunda Rep�blica. La oferta a Einstein de una c�tedra extraordinaria en la Universidad Central (Madrid 1933), in collaboration with Thomas F. Glick (1983), El poder de la ciencia (1992), Miguel Catal�n. Su obra y su mundo (1994), editor with Paul Forman of National Military Establishments and the Advancement of Science and Technology (1996), Cincel, martillo y piedra. Historia de la ciencia en Espa�a (siglos XIX y XX) (1999), El mundo de Marie Curie (2000), El Siglo de la Ciencia (2000), for which he received the Jos� Ortega y Gasset Prize of Humanities.  ".
"<br><br>He is also author of numerous articles, most recently, 'Larmor versus general relativity', Einstein Studies (1999); 'Einstein, general relativity and the field concept', in Relativity and Gravitation in General (1999); and 'International relations in Spanish physics from 1900 to the Cold War', Historical Studies in the Physical and Biological Sciences 33 (2002).";break;
case "Ponente_A_Stachel":
$strTexto = "<b>Einstein�s Greatest Dream� A Background-Independent Physics</b>".
"<br><br>Quantum field theorists have spent the last sixty years in a fruitless attempt to quantize general relativity using the methods of (special-relativistic) quantum field theory. More recently, string theorists have attempted to invent a TOE (Theory of Everything), out of which general relativity� or a reasonable facsimile thereof� would emerge as a by-product. Both standard quantum field theory and standard string theory have depended crucially on the presence of a fixed, given background space-time structure of four (or more, in the case of string theory) dimensions. General relativity is the first example of a completely background-independent physical theory, in which the space-time structures themselves become dynamical entities. If current attempts to create a background-independent quantization technique and apply it to general relativity are successful, the quest for a background-independent physics will be seen as Einstein�s greatest dream.";break;
case "Ponente_C_Stachel":
$strTexto = "<b> Boston University.</b>".
"Did his doctoral work on a topic in general relativity. He was an instructor of Physics at Lehigh University from 1959 to 1961 and the University of Pittsburgh from 1961 to 1962, and Research Associate in Physics at the latter school from 1962 to 1964. Since then, he has been a member of the Physics Department of Boston University. He is currently Profesor Emeritus of Physics. He has been a guest faculty member at a number of other institutions including Princeton University; The University of California at Berkeley; King�s College, London; the University of Paris VI, the Center for Advanced Studies of the IPN, M�xico City, the Institute for Theoretical Physics, Warsaw, and the Max-Planck-Institute for the History of Science, Berlin. ".
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
"Claude Cohen-Tannoudji was born in 1933. He completed his Ph.D. in 1962 at Ecole Normale Sup�rieure in Paris. He then held a position of Professor at the University of Paris from 1964 to 1973. Since 1973, he is Professor of Atomic and Molecular Physics at the Coll�ge de France in Paris. ".
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
"Was born in Vienna in 1945. He studied Physics and Mathematics in his home town and received his PhD on Neutron Depolarization in Dysprosium Single Crystals under the supervision of Prof. H. Rauch. He has covered positions in many countries, but his stays as a researcher in the Laue-Langevin Institute in Grenoble France (1974-1989), MIT (1977-1983), University of Munich (1988-1989) and University of Innsbruck (1990-1999) are most notable. He is currently at the Department of Experimental Physics in Vienna, since 1999. His work on teletransportation has been widely acclaimed. ".
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
case "Ponente_A_Flores":
$strTexto = "<b>Matter and Form</b>".
"<br><br>Five of the texts published by Einstein in his annus mirabilis of 1905 altered the direction of twentieth century physics. Although his theory of relativity and his discussion of concepts of time and space are popularly viewed as his most revolutionary work, his contribution to the quantum hypothesis on radiation and the atomic nature of matter (Brownian movement) paved the way for the physics of the new century. Together with these articles, his later contributions to Bose-Einstein statistics prefigured the way we would eventually understand condensed �matter�. ".
"<br><br>I will illustrate this development with some examples (superconductivity and superfluidity) which we can consider as a phase transition of a boson gas. I will also discuss how our current way of understanding condensed �matter� draws extensively on quantum-mechanical numerical simulations: in this regard I will provide some examples to show how we are beginning to bring together the macroscopic and the atomic in nanotechnologies.";break;
case "Menu_Patrocinadores":
$strTexto = "<table width=100% border=0><tr>".
"<td align=center><a href='http://www.ehu.es/' target='_blank'><img src=images/upv.jpg border=0><br>&nbsp;<u>University of the basque country</u></a></td>".
"<td align=center><a href='http://www.kutxa.net' target='_blank'><img src=images/kutxa.jpg border=0><br>&nbsp;<u>".sEscribir("Kutxa")."</u></a></td></tr>".
"<tr><td align=center><a href='http://www.hezkuntza.ejgv.euskadi.net' target='_blank'><img src=images/gob1.jpg border=0><br>&nbsp;<u>Basque Government<br>Departament of Education,<br>Universities and Research </u></a></td>".
"<td align=center><a href='http://www.industria.ejgv.euskadi.net' target='_blank'><img src=images/gob2.jpg border=0><br>&nbsp;<u>Basque Government<br>Departament of Industry,<br>Commerce and Tourism </u></a></td></tr>".
"<tr><td align=center><a href='http://www.gipuzkoa.net' target='_blank'><img src=images/foro.jpg border=0><br>&nbsp;<u>".sEscribir("Diputacion")."</u></a></td>".
"<td align=center><a href='http://www.donostia.org' target='_blank'><img src=images/ayunta.jpg border=0><br>&nbsp;<u>".sEscribir("Ayuntamiento")."</u></a></td></tr></table>";break;
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
