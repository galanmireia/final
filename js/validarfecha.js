var months = new Array(1,2,3,4,5,6,7,8,9,10,11,12);
var daysInMonth = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
//****************************************************
function getDays(month, year) {
    if (1 == month)
        return ((0 == year % 4) && (0 != (year % 100))) ||
                (0 == year % 400) ? 29 : 28;
    else
       return daysInMonth[month];
}
//****************************************************
function fValidarDia(vdtmData){
	F=Date();
	var intdelim1 = vdtmData.indexOf("/");
	var intdelim2 = vdtmData.lastIndexOf("/");
	if ((vdtmData.length)>10){alert(fM("FechaFormatoDDMMAAAA"));return false;}
	if ((vdtmData.length)<10){alert(fM("FechaFormatoDDMMAAAA"));return false;}
	if (intdelim1 == -1 || intdelim2 == -1){alert(fM("FechaFormatoDDMMAAAA"));return false;}
	if (intdelim1 != -1 && intdelim1 == intdelim2){alert(fM("FechaFormatoDDMMAAAA"));return false;}
	intEguna = parseInt(vdtmData.substring(0,2),10);		
	intHilabete = vdtmData.substring(3,5);
	intUrtea =vdtmData.substring(6,vdtmData.length);
	
	if (isNaN(intEguna) || isNaN(intHilabete) ||isNaN(intUrtea)){alert(fM("FechaFormatoDDMMAAAA"));return false;}
	if  (intHilabete < 1 || intHilabete >12){alert("El mes tiene que estar entre el 1 y el 12.");return false;}
	var intMaxDia = getDays(intHilabete-1,intUrtea);
	if (intEguna < 1 || intEguna > intMaxDia){alert("El día tiene que estar entre el  1 y el "+intMaxDia+".");return false;}
	return true;
}
//****************************************************
function fValidarFechas(vdtmData1,vdtmData2){
	alert (vdtmData1 + " < " + vdtmData2);
	var intdelim1 = vdtmData1.indexOf("/");
	var intdelim2 = vdtmData1.lastIndexOf("/");

	if (vdtmData1.indexOf("-") != -1){alert(fM("FechaFormatoDDMMAAAA"));return;}
	if (intdelim1 != -1){
		var intUrtea1 = parseInt(vdtmData1.substring(0,4),10);		
		var intHilabetea1 = vdtmData1.substring(5,7);
		var intEguna1 =vdtmData1.substring(8,vdtmData1.length);
	}else{
		var intUrtea1 = parseInt(vdtmData1.substring(0,4),10);		
		var intHilabetea1 = vdtmData1.substring(5,7);
		var intEguna1 =vdtmData1.substring(8,vdtmData1.length);
	}
	intdelim1 = vdtmData2.indexOf("/");
	intdelim2 = vdtmData2.lastIndexOf("/");
	if (vdtmData2.indexOf("-") != -1){
		intdelim1 = vdtmData2.indexOf("-");
		intdelim2 = vdtmData2.lastIndexOf("-");
	}
	if (intdelim1 != -1){
		var intUrtea2 = parseInt(vdtmData2.substring(0,4),10);		
		var intHilabetea2 = vdtmData2.substring(5,7);
		var intEguna2 =vdtmData2.substring(8,vdtmData2.length);
	}else{
		var intUrtea2 = parseInt(vdtmData2.substring(0,4),10);		
		var intHilabetea2 = vdtmData2.substring(5,7);
		var intEguna2 =vdtmData2.substring(8,vdtmData2.length);
	}
	if (intUrtea1 > intUrtea2){alert("La segunda fecha tiene que ser mayor que la primera");return false;}
	else{
		if (intUrtea1 == intUrtea2){
			if (intHilabetea1 > intHilabetea2){
				alert("La segunda fecha tiene que ser mayor que la primera");
				return false;
			}else{
				if (intHilabetea1 == intHilabetea2){
					if (intEguna1>intEguna2){
						alert("La segunda fecha tiene que ser mayor que la primera");
						return false;
					}
				}
			}
		}
	}
	return true;
}

