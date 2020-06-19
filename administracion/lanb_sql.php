<?function fSQLConfirmarUsuario($strUser,$strPass){
$strSelect = " select t760_codigo, t760_nivel from t760_usuario where UPPER(t760_user) = UPPER('".$strUser."') and UPPER(t760_pass) = UPPER('".$strPass."') ";
return $strSelect;
}
function fSQLListaDescargados (){
$strSelect = " select t758_fechadescarga, count(t758_codigo) as CUANTOS ".
" from t758_datos where t758_confirmardatos=1 or t758_confirmaralojamiento=1 group by t758_fechadescarga desc";
return $strSelect;
}
function fSQLDatosSinDescargar (){
$strSelect = " select t758_codigo,t758_pass,t758_1_nombre,t758_1_apellido1,t758_1_apellido2,t758_1_dni,t758_1_calle,t758_1_numero,t758_1_ciudad,t758_1_cp,t758_1_provincia,t758_1_pais,t758_1_telefono,t758_1_fax ".
" ,t758_1_empresa,t758_1_seccion,t758_1_callee,t758_1_numeroe,t758_1_ciudade,t758_1_cpe,t758_1_provinciae,t758_1_paise,t758_1_telefonoe,t758_1_faxe ".
" ,t758_1_email, t758_1_beca, t758_1_alojamiento,t758_1_dias,t758_fecha,t758_2_razones,t758_2_meritos,t758_3_alojamiento,t758_2_becadesplazamiento,t758_2_becapernoctacion ".
" ,t758_3_nombre,t758_3_apellido1,t758_3_apellido2,t758_3_dni,t758_3_calle,t758_3_numero,t758_3_ciudad,t758_3_cp,t758_3_provincia,t758_3_pais,t758_3_telefono,t758_3_fax ".
" ,t758_3_empresa,t758_3_seccion,t758_3_callee,t758_3_numeroe,t758_3_ciudade,t758_3_cpe,t758_3_provinciae,t758_3_paise,t758_3_telefonoe,t758_3_faxe,t758_3_becapernoctacion ".
" ,t758_3_email,t758_3_datosfiscales,t758_3_hotel,t758_3_llegada,t758_3_salida,t758_3_noches,t758_3_dobles,t758_3_individuales,t758_3_habitaciones,t758_3_importe,t758_3_dto,t758_3_total ".
" ,t758_confirmardatos,t758_confirmaralojamiento,t758_fechaconfirmaciond,t758_fechaconfirmaciona ".
" from t758_datos where t758_bajado = 0 and (t758_confirmardatos=1 or t758_confirmaralojamiento=1)";
return $strSelect;
}
function fSQLDatosSinDescargar2 (){
$strSelect = " select t758_codigo,t758_pass,t758_1_nombre,t758_1_apellido1,t758_1_apellido2,t758_1_dni,t758_1_calle,t758_1_numero,t758_1_ciudad,t758_1_cp,t758_1_provincia,t758_1_pais,t758_1_telefono,t758_1_fax ".
" ,t758_1_empresa,t758_1_seccion,t758_1_callee,t758_1_numeroe,t758_1_ciudade,t758_1_cpe,t758_1_provinciae,t758_1_paise,t758_1_telefonoe,t758_1_faxe ".
" ,t758_1_email, t758_1_beca, t758_1_alojamiento,t758_1_dias,t758_fecha,t758_2_razones,t758_2_meritos,t758_3_alojamiento,t758_2_becadesplazamiento,t758_2_becapernoctacion ".
" ,t758_3_nombre,t758_3_apellido1,t758_3_apellido2,t758_3_dni,t758_3_calle,t758_3_numero,t758_3_ciudad,t758_3_cp,t758_3_provincia,t758_3_pais,t758_3_telefono,t758_3_fax ".
" ,t758_3_empresa,t758_3_seccion,t758_3_callee,t758_3_numeroe,t758_3_ciudade,t758_3_cpe,t758_3_provinciae,t758_3_paise,t758_3_telefonoe,t758_3_faxe,t758_3_becapernoctacion ".
" ,t758_3_email,t758_3_datosfiscales,t758_3_hotel,t758_3_llegada,t758_3_salida,t758_3_noches,t758_3_dobles,t758_3_individuales,t758_3_habitaciones,t758_3_importe,t758_3_dto,t758_3_total ".
" ,t758_confirmardatos,t758_confirmaralojamiento,t758_fechaconfirmaciond,t758_fechaconfirmaciona ".
" from t758_datos where t758_fechadescarga <= t758_fechaconfirmaciond ";
return $strSelect;
}
function fSQLFechasLimite (){
$strSelect = " select t761_fecha1, t761_fecha2, t761_fecha3, t761_tipo from t761_limite";
return $strSelect;
}
function fSQLModificarFechas ($intCodFecha,$strFecha1,$strFecha2,$strFecha3){
$strUpdate = " update t761_limite set t761_fecha1 = '".$strFecha1."',t761_fecha2 = '".$strFecha2."',t761_fecha3 = '".$strFecha3."' where t761_codigo = ". $intCodFecha;
return $strUpdate;
}
function fSQLCambiarBajados (){
$strFecha = fObtenerFechaHoy();
$strUpdate = " update t758_datos set t758_bajado = 1, t758_fechadescarga='".$strFecha."' where t758_bajado = 0 and (t758_confirmardatos=1 or t758_confirmaralojamiento=1) ";
return $strUpdate;
}?>
