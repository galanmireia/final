<?function sContenidoAdmin (){
if(isset($_GET["pg"])){$intPg=$_GET["pg"];}else{$intPg="";}
if (isset($_SESSION["einstein_user"]) && $_SESSION["einstein_user"] != ""){
if ($_SESSION["einstein_nivel"]=="1"){
switch ($intPg){
case "1":sValidarUsuarioContrasenna();break;
case "2":sEstructuraAdmin();break;
case "3":sBienvenido();break;
case "4":sListaDescargas();break;
case "5":sFechasLimites();break;
case "6":sGuardarFechas();break;
default:sLoginPass ();break;
}
}elseif ($_SESSION["einstein_nivel"]=="2" || $_SESSION["einstein_nivel"]=="3"){
switch ($intPg){
case "1":sValidarUsuarioContrasenna();break;
case "2":sEstructuraAdmin();break;
case "3":sBienvenido();break;
default:sLoginPass ();break;
}
}
}else{
switch ($intPg){
case "1":sValidarUsuarioContrasenna();break;
default:sLoginPass ();break;
}
}
}
function fValidarPalabra($strHitza){
if (strpos($strHitza,"'")!=0 || strpos($strHitza,"=")!=0 || strpos($strHitza,"/")!=0 || strpos($strHitza,"%")!= 0 || strpos($strHitza,".")!=0 || strpos($strHitza,",")!=0) {
return true;
}else{
return false;
}
}
function sValidarUsuarioContrasenna (){
$sw=1;
if(isset($_POST["txtUser"])){$strUser=$_POST["txtUser"];}else{$strUser="";}
if(isset($_POST["txtPass"])){$strPass=$_POST["txtPass"];}else{$strPass="";}
$strMensaje = sEscribir("UsuarioIncorrecto");
$IrA="index.php";
if ($strUser=="" || $strPass==""){ $sw=0;}
if (fValidarPalabra($strUser) || fValidarPalabra($strPass)){$sw=0;}
AbreConexion ();
if ($sw==1){
$strSelect=fSQLConfirmarUsuario($strUser,$strPass);
$objrow=EJECUTA_SELECT($strSelect);
if(mysql_num_rows($objrow)==0){$sw=0;}
else{
$row=mysql_fetch_assoc($objrow);
$_SESSION["einstein_user"]=$row["t760_codigo"];
$_SESSION["einstein_nivel"]=$row["t760_nivel"];
}
}else{$sw=0;}
if ($sw==1) {
if ($_SESSION["einstein_nivel"] == ""){?>
<script>location.href("../index.php");</script>
<?}elseif($_SESSION["einstein_nivel"] == "1" || $_SESSION["einstein_nivel"] == "2"){?>
<script>
intIzquierda=(screen.width-986)/2;
intArriba=(screen.height-631)/2;
window.open("index.php?pg=2","_parent","screenX="+intIzquierda+",screenY="+intArriba+",left="+intIzquierda+",top="+intArriba+",resizeable=no,directories=no,height=602,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,width=976");
</script>
<?}elseif($_SESSION["einstein_nivel"] == "3"){?>
<script>window.open("../noticias/index.php","_parent");</script>
<?}
}else{?>
<script>
<?if ($strMensaje != ""){?>
alert("<?echo $strMensaje;?>");
<?}?>
location.href='<?echo $IrA;?>';
</script>
<?}
CierraConexion();
}
function sGuardarFechas (){
AbreConexion ();
for ($i=1;$i<=3;$i++){
$strFecha1 = $_POST["txtFecha1".$i];
$strFecha2 = $_POST["txtFecha2".$i];
$strFecha3 = $_POST["txtFecha3".$i];
$strUpdate = fSQLModificarFechas ($i,$strFecha1,$strFecha2,$strFecha3);
$objrow = EJECUTA_SELECT($strUpdate);
}
CierraConexion();?>
<script>location.href='index.php?pg=5';</script>
<?}?>
