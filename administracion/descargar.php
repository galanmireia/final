<?
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
session_cache_limiter("must-revalidate");
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="descargado.xls"');
session_start();
?>
<?include("../lanb_rutas.php");
include("../lanb_ado.php");
include("../lanb_edukia.php");
include("lanb_sql.php");
if ($_SESSION["einstein_nivel"]=="1"){
AbreConexion ();
$strSelect = fSQLDatosSinDescargar ();
$objrow = EJECUTA_SELECT($strSelect);?>
<table>
<tr>
<td>Código</td>
<td><b>Pre-inscripción: FECHA</b></td>
<td><b>Pre-inscripción: APELLIDO 1</b></td>
<td><b>Pre-inscripción: APELLIDO 2</b></td>
<td><b>Pre-inscripción: NOMBRE</b></td>
<td><b>Pre-inscripción: DNI</b></td>
<td><b>Pre-inscripción: CALLE</b></td>
<td><b>Pre-inscripción: NÚMERO</b></td>
<td><b>Pre-inscripción: CIUDAD</b></td>
<td><b>Pre-inscripción: CP</b></td>
<td><b>Pre-inscripción: PROVINCIA</b></td>
<td><b>Pre-inscripción: PAIS</b></td>
<td><b>Pre-inscripción: TELÉFONO</b></td>
<td><b>Pre-inscripción: FAX</b></td>
<td><b>Pre-inscripción: EMPRESA</b></td>
<td><b>Pre-inscripción: SECCIÓN</b></td>
<td><b>Pre-inscripción: CALLE</b></td>
<td><b>Pre-inscripción: NÚMERO</b></td>
<td><b>Pre-inscripción: CIUDAD</b></td>
<td><b>Pre-inscripción: CP</b></td>
<td><b>Pre-inscripción: PROVINCIA</b></td>
<td><b>Pre-inscripción: PAIS</b></td>
<td><b>Pre-inscripción: TELÉFONO</b></td>
<td><b>Pre-inscripción: FAX</b></td>
<td><b>Pre-inscripción: E-MAIL</b></td>
<td><b>Pre-inscripción: DÍAS</b></td>
<td><b>Pre-inscripción: SOLICITAR BECA</b></td>
<td><b>Pre-inscripción: ALOJAMIENTO</b></td>
<td><b>Beca: RAZONES</b></td>
<td><b>Beca: MÉRITOS</b></td>
<td><b>Beca: BECA DESPLAZAMIENTO</b></td>
<td><b>Beca: BECA PERNOCTACIÓN</b></td>
<td><b>Alojamiento: CONFIRMACIÓN</b></td>
<td><b>Alojamiento: DATOS FISCALES</b></td>
<td><b>Alojamiento: HOTEL</b></td>
<!--<td><b>Alojamiento: BECA</b></td>-->
<td><b>Alojamiento: HABITACION(ES)</b></td>
<td><b>Alojamiento: DOBLE(S)</b></td>
<td><b>Alojamiento: INDIVIDUAL(ES)</b></td>
<td><b>Alojamiento: FECHA LLEGADA</b></td>
<td><b>Alojamiento: FECHA SALIDA</b></td>
<td><b>Alojamiento: TOTAL NOCHES</b></td>
<td><b>Alojamiento: IMPORTE TOTAL</b></td>
<td><b>Alojamiento: DESCUENTO</b></td>
<td><b>Alojamiento: TOTAL A PAGAR</b></td>
<td><b>Confirmaciones: DATOS INSCRIPCIÓN</b></td>
<td><b>Confirmaciones: FECHA CONFIRMACIÓN</b></td>
<td><b>Confirmaciones: ALOJAMIENTO</b></td>
<td><b>Confirmaciones: FECHA CONFIRMACIÓN</b></td>
</tr>
<?while($row=mysql_fetch_assoc($objrow)){
$intCodDatos = $row["t758_codigo"];
$strFecha = $row["t758_fecha"];
$strNombre = $row["t758_1_nombre"];
$strApellido1 = $row["t758_1_apellido1"];
$strApellido2 = $row["t758_1_apellido2"];
$strDNI = $row["t758_1_dni"];
$strCalle = $row["t758_1_calle"];
$strNum = $row["t758_1_numero"];
$strCiudad = $row["t758_1_ciudad"];
$strCP = $row["t758_1_cp"];
$strProvincia = $row["t758_1_provincia"];
$strPais = $row["t758_1_pais"];
$strTelefono = $row["t758_1_telefono"];
$strFax = $row["t758_1_fax"];
$strEmpresa = $row["t758_1_empresa"];
$strSeccion = $row["t758_1_seccion"];
$strCalleE = $row["t758_1_callee"];
$strNumE = $row["t758_1_numeroe"];
$strCiudadE = $row["t758_1_ciudade"];
$strCPE = $row["t758_1_cpe"];
$strProvinciaE = $row["t758_1_provinciae"];
$strPaisE = $row["t758_1_paise"];
$strTelefonoE = $row["t758_1_telefonoe"];
$strFaxE = $row["t758_1_faxe"];
$intBeca = $row["t758_1_beca"];
if ($intBeca == "1"){
$strBeca="BAI / SI / YES";
}else{
$strBeca="EZ / NO / NO";
}
$intAlojamiento = $row["t758_1_alojamiento"];
if ($intAlojamiento == "1"){
$strAlojamiento="BAI / SI / YES";
}else{
$strAlojamiento="EZ / NO / NO";
}
$strDias = $row["t758_1_dias"];
$strEmail = $row["t758_1_email"];
$strRazones = $row["t758_2_razones"];
$strMeritos = $row["t758_2_meritos"];
$intBeca1 = $row["t758_2_becadesplazamiento"];
if ($intBeca1 == "1"){
$strBecaDes="BAI / SI / YES";
}else{
$strBecaDes="EZ / NO / NO";
}
$intBeca2 = $row["t758_2_becapernoctacion"];
if ($intBeca2 == "1"){
$strBecaPer="BAI / SI / YES";
}else{
$strBecaPer="EZ / NO / NO";
}
$intAlojamiento3 = $row["t758_3_alojamiento"];
if ($intAlojamiento3 == "1"){
$strAlojamiento3="BAI / SI / YES";
}else{
$strAlojamiento3="EZ / NO / NO";
}
$strFiscales = $row["t758_3_datosfiscales"];
$strHotel = $row["t758_3_hotel"];
$strHabitaciones = $row["t758_3_habitaciones"];
$intDobles = $row["t758_3_dobles"];
$intIndividuales = $row["t758_3_individuales"];
$intLlegada = $row["t758_3_llegada"];
$intSalida = $row["t758_3_salida"];
$intNoches = $row["t758_3_noches"];
$intImporte = $row["t758_3_importe"];
$intDto = $row["t758_3_dto"];
$intTotal = $row["t758_3_total"];
$intBeca = $row["t758_3_becapernoctacion"];
if ($intBeca == "1"){
$strBeca_A="BAI / SI / YES";
}else{
$strBeca_A="EZ / NO / NO";
}
$intConfirmarDatos = $row["t758_confirmardatos"];
if ($intConfirmarDatos == "1"){
$strConfirmarDatos="BAI / SI / YES";
}else{
$strConfirmarDatos="EZ / NO / NO";
}
$intConfirmarAlojamiento = $row["t758_confirmaralojamiento"];
if ($intConfirmarAlojamiento == "1"){
$strConfirmarAlojamiento="BAI / SI / YES";
}else{
$strConfirmarAlojamiento="EZ / NO / NO";
}
$strFechaConfirmacionDatos = $row["t758_fechaconfirmaciond"];
$strFechaConfirmacionAlojamiento = $row["t758_fechaconfirmaciona"];?>
<tr>
<td><?echo $intCodDatos;?></td>
<td><?echo sObtenerFechaVer($strFecha);?></td>
<td><?echo $strApellido1;?></td>
<td><?echo $strApellido2;?></td>
<td><?echo $strNombre;?></td>
<td><?echo $strDNI;?></td>
<td><?echo $strCalle;?></td>
<td><?echo $strNum;?></td>
<td><?echo $strCiudad;?></td>
<td><?echo $strCP;?></td>
<td><?echo $strProvincia;?></td>
<td><?echo $strPais;?></td>
<td><?echo $strTelefono;?></td>
<td><?echo $strFax;?></td>
<td><?echo $strEmpresa;?></td>
<td><?echo $strSeccion;?></td>
<td><?echo $strCalleE;?></td>
<td><?echo $strNumE;?></td>
<td><?echo $strCiudadE;?></td>
<td><?echo $strCPE;?></td>
<td><?echo $strProvinciaE;?></td>
<td><?echo $strPaisE;?></td>
<td><?echo $strTelefonoE;?></td>
<td><?echo $strFaxE;?></td>
<td><?echo $strEmail;?></td>
<td><?echo $strDias;?></td>
<td><?echo $strBeca;?></td>
<td><?echo $strAlojamiento;?></td>
<td><?echo $strRazones;?></td>
<td><?echo $strMeritos;?></td>
<td><?echo $strBecaDes;?></td>
<td><?echo $strBecaPer;?></td>
<td><?echo $strAlojamiento3;?></td>
<td><?echo $strFiscales;?></td>
<td><?echo $strHotel;?></td>
<!--<td><?echo $strBeca_A;?></td>-->
<td><?echo $strHabitaciones;?></td>
<td><?echo $intDobles;?></td>
<td><?echo $intIndividuales;?></td>
<td><?echo $intLlegada;?></td>
<td><?echo $intSalida;?></td>
<td><?echo $intNoches;?></td>
<td><?echo $intImporte;?></td>
<td><?echo $intDto;?></td>
<td><?echo $intTotal;?></td>
<td><?echo $strConfirmarDatos;?></td>
<td><?echo sObtenerFechaVer($strFechaConfirmacionDatos);?></td>
<td><?echo $strConfirmarAlojamiento;?></td>
<td><?echo sObtenerFechaVer($strFechaConfirmacionAlojamiento);?></td>
</tr>
<?}?>
</table>
<?$strUpdate = fSQLCambiarBajados ();
$objrow = EJECUTA_SELECT($strUpdate);
CierraConexion();
}else{?>
<script>
window.opener=-1;
window.close();
</script>
<?}?>
