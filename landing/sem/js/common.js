var W3CDOM = (document.createElement && document.getElementsByTagName);

document.getElementsByClassName = function(className, container){
   var data = tags = [];
   var obj = document.getElementById("wrapper");
   var node = aux = null;
	var strClassName = className.replace(/\-/g, "\\-");
    var pattern = new RegExp("(^|\\s)" + strClassName + "(\\s|$)");
	if(container) node = (typeof(container) == "object") ? container : document.getElementById(container);
	else node = (obj) ? obj : document;
	aux = node.getElementsByTagName("*");
	tags = (document.all) ? node.all : aux;
   for(var i=0;i<tags.length;i++) { if(pattern.test(tags[i].className)) data.push(tags[i]);}
   return data;
}

var e = {
	addEvent : function(obj, evType, fn, useCapture){
		if (obj.addEventListener){
			obj.addEventListener(evType, fn, useCapture);
			return true;
		}else if (obj.attachEvent){
			var r = obj.attachEvent("on"+evType, fn);
			return r;
		}else {
			return false;
		}
	}
}

var formsValidations = {

	validaConsultaForm: function(){
		var errorTxt = "";
		if (document.getElementById("name").value == "" ) errorTxt += "(!) El campo 'Nombre' es obligatorio|\n" ;
		
		if (document.getElementById("mail").value == "" ) errorTxt += "(!) El campo 'Email' es obligatorio|\n";
			else{
				if(!regularExpressions.isValidEmail(document.getElementById("mail").value))
				errorTxt += "(!) El formato del campo 'Email' no es correcto |\n";
			}
		if (document.getElementById("phone").value == "" ) errorTxt += "(!) El campo 'Teléfono' es obligatorio|\n";
			else if(!regularExpressions.esNumero(document.getElementById("phone").value)) errorTxt += "(!) El formato del campo 'Teléfono' no es correcto|\n";
		
		if(document.getElementById("coments").value == "" ) errorTxt += "(!) El campo 'Consulta' es obligatorio|\n";
		
		if (errorTxt != "") {
			alert(errorTxt);
			return false;
		}
		
	}
	 	
}


var regularExpressions = {
	isValidEmail:function (str){
		var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return (filter.test(str));
	},
	esNif:function(c){
		if(!/^[0-9]{8}([A-Za-z]{1})$/.test(c)) return false
		var letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
		return (c.substr(8,9).toUpperCase()==letras.charAt(c.substr(0,8)%23)) ;
	},
	esCadena:function(c) { return /^[0-9A-Za-z-\/Ññ?É?ÓÚáéíóúÜüÄäËë?ïÖö´,'/\\t\n\r\s]+$/.test(c); },
	esAlfabetico:function(c){return /^([a-zA-Z])+$/.test(c);},
	esNumero:function(c){return /^[0-9]+$/.test(c);},
	esTelefono:function(c){return /^[0-9\s\+\-)(]+$/.test(c)},
	esCodigoPostal:function(c){return /^([0-4]{1}[1-9]{1}|10|20|30|40|50|51|52)([0-9]{3})+$/.test(c);},
	esFecha:function(c){

		if(!/^([0-2]{1}[1-9]{1}|10|20|30|31)\/(0[1-9]{1}|10|11|12)\/([0-9]{4})+$/.test(c))return false;

		var fch=c.split("/")

		var bisiesto=((fch[2] % 4 == 0 && fch[2] % 100 != 0) || (fch[2] % 400 == 0))? 29 : 28;

		var diasMes=[31,bisiesto,31,30,31,30,31,31,30,31,30,31];

		if(fch[0]>diasMes[fch[1]-1]) return false;

		return true;

	}
}


var load={
	existeId:function(cid){
		if(document.getElementById(cid)) return true;
		return false;
	},
	setEvents:function(){
		
		if(load.existeId("envia")) document.getElementById("envia").onsubmit = formsValidations.validaConsultaForm;
		/*if(load.existeId("envia")) behaviours.msgExito();*/
		
		
	}
}

if(W3CDOM) e.addEvent(window, "load", load.setEvents, false);