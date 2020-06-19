<?if(isset($_REQUEST['action'])) {
	include("ImageEditor.php");
	$imageEditor = new ImageEditor("fondo2.jpg", "/cianco/images/");
	$action = $_REQUEST['action'];
	if(($action=="resize") && (is_numeric($_REQUEST['width']) && is_numeric($_REQUEST['width']))) {
		if(520<$_REQUEST['width']) $w = 520;
		else $w = $_REQUEST['width'];
		if(300<$_REQUEST['height']) $h = 300;
		else $h = $_REQUEST['height'];
		$imageEditor->resize($w, $h);
	}
	$imageEditor->outputImage();
}else {?>
	<html>
	<head><title>Image Editor Test</title></head>
	<body>
		<table width="375" border="0" cellspacing="0" cellpadding="0">
			<form method="get" action="editar_imagen.php">
				<input type="hidden" name="action" value="resize">
				<tr><td class="main" id="black"><b>Resize</b></td></tr>
				<tr><td class="main" id="topborder">New Width: <input type="text" name="width" value="520"></td></tr>
				<tr><td class="main" id="topborder">New Height: <input type="text" name="height" value="300"></td></tr>
				<tr><td><input type="submit" value="Resize"></td></tr>
			</form>
		</table>
	</body>
	</html>
<?}?>