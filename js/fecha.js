function finMes(oTxt)
{
	var nMes = parseInt(oTxt, 10);
	var nRes = 0;
	switch (nMes){
	case 1: nRes = 31; break;
	case 2: nRes = 28; break;
	case 3: nRes = 31; break;
	case 4: nRes = 30; break;
	case 5: nRes = 31; break;
	case 6: nRes = 30; break;
	case 7: nRes = 31; break;
	case 8: nRes = 31; break;
	case 9: nRes = 30; break;
	case 10: nRes = 31; break;
	case 11: nRes = 30; break;
	case 12: nRes = 31; break;
	}
	return nRes;
}
//*******************************************
function cambia_dias(nombre_campo,nombre_contenedor,mes,nombre_mes,anho,dia_sel){	  
	if (mes){mes = '1';}else{mes = document.getElementsByName(nombre_mes).item(0).value;}
    var contenido='<select name='+nombre_campo+' class=textoinput>';
     
    finnal=31;
    if(mes == 2){
		finnal = 28;
		if(((document.getElementsByName(anho).item(0)) ? document.getElementsByName(anho).item(0).value : null ) %4==0 && !(document.getElementsByName(anho).item(0).value%100==0 && document.getElementsByName(anho).item(0).value%400!=0) ){finnal = 29;}
	}
    for(i=1;i<=finnal;i++){
   		if(i==dia_sel){contenido=contenido+'<option value='+i+' class=textoinput selected>'+i+'</option>';}
     	else{contenido=contenido+'<option value='+i+' class=textoinput>'+i+'</option>';}
    }
    contenido=contenido+'</select>';
		  
    if(navigator.appName.indexOf("Microsoft")!=-1){document.getElementsByName(nombre_contenedor).item(0).innerHTML = contenido;}
    else{
     	if(navigator.appName.indexOf("Netscape")!=-1)
   			{document.write(contenido);}
     	else{
			if(navigator.appName.indexOf("Opera")!=-1){document.write(contenido);}
    	}
    }
}
//******************************************
function muestrameses(mes_seleccionado,nombreMes,nombre_dias,nombre_contenedor,nombre_anho)
{   
	mes='<select name=\"'+nombreMes+'\" onchange=\"fCargarDias(document.getElementsByName(\''+nombre_dias+'\').item(0).value,document.getElementsByName(\''+nombreMes+'\').item(0).value,document.getElementsByName(\''+nombre_anho+'\').item(0).value,\''+nombre_dias+'\',\''+nombre_contenedor+'\')\" class=\"textoinput\">';
	meses =new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	for(i=-1;++i<12;)
	{	if(i+1==mes_seleccionado)
			mes=mes+'<option value='+(i+1)+' class=textoinput selected>'+meses[i]+'</option>';
		else
			mes=mes+'<option value='+(i+1)+' class=textoinput>'+meses[i]+'</option>';
	}
	mes=mes+'</select>';
	document.write(mes);
}
//******************************************
function sVentanaEmergenteSinBarra(direccion,nombre,ancho,alto)
{	strAux="win2=window.open(direccion,nombre,'scrollbars=no,status=no,left="+(window.screen.width-ancho)/2+",top="+(window.screen.height-alto)/2+", directories=no, toolbar=no,width="+ancho+",height="+alto+"');";
	eval(strAux);
}
//******************************************
function muestraanhos(anho_nombre,anho_seleccionado,nombreMes,nombre_dias,nombre_contenedor)
{
	anhos ='<select class=textoinput name='+anho_nombre+' onchange=\"if(navigator.appName.indexOf(\'Microsoft\')!=-1)cambia_dias(\''+nombre_dias+'\',\''+nombre_contenedor+'\',false,\''+nombreMes+'\',\''+anho_nombre+'\',document.getElementsByName(\''+nombre_dias+'\').item(0).value)\">';
	fecha_actual = new Date();
	for(i=fecha_actual.getFullYear()-1;++i<=fecha_actual.getFullYear()+65;)
		if(i==anho_seleccionado)
			anhos+='<option value=\"'+i+'\" class=textoinput selected>'+i+'</option>';
		else
			anhos+='<option value=\"'+i+'\" class=textoinput>'+i+'</option>';
	anhos+='</select>';
	document.write(anhos);
}
//******************************************
function muestraanhos2(anho_nombre,anho_seleccionado,nombreMes,nombre_dias,nombre_contenedor,intAnhoEmpieza)
{
	anhos ='<select class=textoinput name='+anho_nombre+' onchange=\"if(navigator.appName.indexOf(\'Microsoft\')!=-1)cambia_dias(\''+nombre_dias+'\',\''+nombre_contenedor+'\',false,\''+nombreMes+'\',\''+anho_nombre+'\',document.getElementsByName(\''+nombre_dias+'\').item(0).value)\">';
	fecha_actual = new Date();
	for(i=intAnhoEmpieza-1;++i<=fecha_actual.getFullYear()+65;)
		if(i==anho_seleccionado)
			anhos+='<option value=\"'+i+'\" class=textoinput selected>'+i+'</option>';
		else
			anhos+='<option value=\"'+i+'\" class=textoinput>'+i+'</option>';
	anhos+='</select>';
	document.write(anhos);
}
//*******************************************
function fCargarDias(intDia,intMes,intAnho,nombre_campo,nombre_contenedor){
	contenido='<select name='+nombre_campo+' class=textoinput>';
	if (intMes==2){finnal=28;}
	else{
		if (intMes==1 || intMes==3 || intMes==5 || intMes==7 || intMes==8 || intMes==10 || intMes==12){finnal=31;}
		else{finnal==30;}
	}
		
	for(i=1;i<=finnal;i++){
		if(i==intDia){contenido=contenido+'<option value='+i+' class=textoinput selected>'+i+'</option>';}
		else{contenido=contenido+'<option value='+i+' class=textoinput>'+i+'</option>';}
	}
	  contenido=contenido+'</select>';
	  document.getElementsByName(nombre_contenedor).item(0).innerHTML = contenido;
}
//*******************************************
function fEnviaDatos(valorDia,valorMes,valorAnho,NombreDia,NombreMes,NombreAnho,NombreContenedor){
	this.setTimeout("this.opener.document.getElementsByName(\""+NombreMes+"\").item(0).value ="+ valorMes,1,"javascript");
	this.setTimeout("this.opener.document.getElementsByName(\""+NombreAnho+"\").item(0).value ="+ valorAnho,1,"javascript");
	if(navigator.appName.indexOf("Microsoft")!=-1){
		this.opener.setTimeout("cambia_dias('"+NombreDia+"','"+NombreContenedor+"','asdf','"+NombreMes+"','"+NombreAnho+"',"+valorDia+")",1,"javascript");
	}else {
		this.setTimeout("this.opener.document.getElementsByName(\""+NombreDia+"\").item(0).value ="+ valorDia,1,"javascript");
	}
	this.setTimeout("self.close()",10,"javascript");
}