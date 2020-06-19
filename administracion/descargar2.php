<?session_start();
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: filename=\"tricks.xls\"");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<?include("../lanb_rutas.php");
include("../lanb_ado.php");
include("../lanb_edukia.php");
include("lanb_sql.php");
if ($_SESSION["einstein_nivel"]=="1"){
AbreConexion ();
$strSelect = fSQLDatosSinDescargar ();
$objrow = EJECUTA_SELECT($strSelect);?>
<table align="center" width="100%" height="100%"  CELLPADDING=0 CELLSPACING=0 topmargin=0 leftmargin=0 border=0>
<tr>
<td>Código</td>
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
<td><b>Beca: ALOJAMIENTO</b></td>
<td><b>Alojamiento: APELLIDO 1</b></td>
<td><b>Alojamiento: APELLIDO 2</b></td>
<td><b>Alojamiento: NOMBRE</b></td>
<td><b>Alojamiento: DNI</b></td>
<td><b>Alojamiento: CALLE</b></td>
<td><b>Alojamiento: NÚMERO</b></td>
<td><b>Alojamiento: CIUDAD</b></td>
<td><b>Alojamiento: CP</b></td>
<td><b>Alojamiento: PROVINCIA</b></td>
<td><b>Alojamiento: PAIS</b></td>
<td><b>Alojamiento: TELÉFONO</b></td>
<td><b>Alojamiento: FAX</b></td>
<td><b>Alojamiento: EMPRESA</b></td>
<td><b>Alojamiento: SECCIÓN</b></td>
<td><b>Alojamiento: CALLE</b></td>
<td><b>Alojamiento: NÚMERO</b></td>
<td><b>Alojamiento: CIUDAD</b></td>
<td><b>Alojamiento: CP</b></td>
<td><b>Alojamiento: PROVINCIA</b></td>
<td><b>Alojamiento: PAIS</b></td>
<td><b>Alojamiento: TELÉFONO</b></td>
<td><b>Alojamiento: FAX</b></td>
<td><b>Alojamiento: E-MAIL</b></td>
<td><b>Alojamiento: DATOS FISCALES</b></td>
<td><b>Alojamiento: HOTEL</b></td>
<td><b>Alojamiento: BECA</b></td>
<td><b>Alojamiento: HABITACION(ES)</b></td>
<td><b>Alojamiento: DOBLE(S)</b></td>
<td><b>Alojamiento: INDIVIDUAL(ES)</b></td>
<td><b>Alojamiento: FECHA LLEGADA</b></td>
<td><b>Alojamiento: FECHA SALIDA</b></td>
<td><b>Alojamiento: TOTAL NOCHES</b></td>
<td><b>Alojamiento: IMPORTE TOTAL</b></td>
<td><b>Alojamiento: DESCUENTO</b></td>
<td><b>Alojamiento: TOTAL A PAGAR</b></td>
</tr>
<?while($row=mysql_fetch_assoc($objrow)){
$intCodDatos = $row["t758_codigo"];
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
$intAlojamiento2 = $row["t758_2_alojamiento"];
if ($intAlojamiento2 == "1"){
$strAlojamiento2="BAI / SI / YES";
}else{
$strAlojamiento2="EZ / NO / NO";
}
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
$strNombre_A = $row["t758_3_nombre"];
$strApellido1_A = $row["t758_3_apellido1"];
$strApellido2_A = $row["t758_3_apellido2"];
$strDNI_A = $row["t758_3_dni"];
$strCalle_A = $row["t758_3_calle"];
$strNum_A = $row["t758_3_numero"];
$strCiudad_A = $row["t758_3_ciudad"];
$strCP_A = $row["t758_3_cp"];
$strProvincia_A = $row["t758_3_provincia"];
$strPais_A = $row["t758_3_pais"];
$strTelefono_A = $row["t758_3_telefono"];
$strFax_A = $row["t758_3_fax"];
$strEmpresa_A = $row["t758_3_empresa"];
$strSeccion_A = $row["t758_3_seccion"];
$strCalleE_A = $row["t758_3_callee"];
$strNumE_A = $row["t758_3_numeroe"];
$strCiudadE_A = $row["t758_3_ciudade"];
$strCPE_A = $row["t758_3_cpe"];
$strProvinciaE_A = $row["t758_3_provinciae"];
$strPaisE_A = $row["t758_3_paise"];
$strTelefonoE_A = $row["t758_3_telefonoe"];
$strFaxE_A = $row["t758_3_faxe"];
$strEmail_A = $row["t758_3_email"];
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
}?>
<tr>
<td><?echo $intCodDatos;?></td>
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
<td><?echo $strAlojamiento2;?></td>
<td><?echo $strApellido1_A;?></td>
<td><?echo $strApellido2_A;?></td>
<td><?echo $strNombre_A;?></td>
<td><?echo $strDNI_A;?></td>
<td><?echo $strCalle_A;?></td>
<td><?echo $strNum_A;?></td>
<td><?echo $strCiudad_A;?></td>
<td><?echo $strCP_A;?></td>
<td><?echo $strProvincia_A;?></td>
<td><?echo $strPais_A;?></td>
<td><?echo $strTelefono_A;?></td>
<td><?echo $strFax_A;?></td>
<td><?echo $strEmpresa_A;?></td>
<td><?echo $strSeccion_A;?></td>
<td><?echo $strCalleE_A;?></td>
<td><?echo $strNumE_A;?></td>
<td><?echo $strCiudadE_A;?></td>
<td><?echo $strCPE_A;?></td>
<td><?echo $strProvinciaE_A;?></td>
<td><?echo $strPaisE_A;?></td>
<td><?echo $strTelefonoE_A;?></td>
<td><?echo $strFaxE_A;?></td>
<td><?echo $strEmail_A;?></td>
<td><?echo $strFiscales;?></td>
<td><?echo $strHotel;?></td>
<td><?echo $strBeca_A;?></td>
<td><?echo $strHabitaciones;?></td>
<td><?echo $intDobles;?></td>
<td><?echo $intIndividuales;?></td>
<td><?echo $intLlegada;?></td>
<td><?echo $intSalida;?></td>
<td><?echo $intNoches;?></td>
<td><?echo $intImporte;?></td>
<td><?echo $intDto;?></td>
<td><?echo $intTotal;?></td>
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
