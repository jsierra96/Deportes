
function ActualizaPro(cat,filtro){
	var sQueryString="";
	if(filtro=='equipo'){
		var nombre = document.formu.equi.value;
		sQueryString=cat+"&opcion="+nombre;
	}else{
		sQueryString=cat;
	}
	//alert(sQueryString);
	var objRequest = new XMLHttpRequest();
	var sURL = "ObtenerProducto.php?"+sQueryString;
	objRequest.open("GET", sURL, true);
	objRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	
	objRequest.onreadystatechange=function() {
		if (objRequest.readyState === 4 && objRequest.status === 200) {
			procRespTblJug(objRequest.responseText);
		}
	};
	objRequest.send();
}

function procRespTblJug(Comando){
	try{
		var oDatos = JSON.parse(Comando);
		var nodo = document.getElementById('producto');
		while(nodo.hasChildNodes()){
			nodo.removeChild(nodo.firstChild);
		}
		if(oDatos.successful){
			
		if(oDatos!=null){
			for(var i=0; i< oDatos.arraProdu.length; i++){
				var div1 = document.createElement('div');
			    div1.className="col-md-3 col-sm-6";
			    var figure = document.createElement('figure');
			    figure.className= "card card-product";
			    div1.appendChild(figure);
			    var div2 = document.createElement('div');
			    div2.className ="img-wrap";
			    var imagen = document.createElement("img"); 
                imagen.setAttribute("src", oDatos.arraProdu[i].imagen); 
                div2.appendChild(imagen);
                var figcaption = document.createElement('figcaption');
                figcaption.className ="info-wrap";
                var a = document.createElement('a');
                a.setAttribute("href","detallesProducto.php?clv="+oDatos.arraProdu[i].clave);
                a.className ="title t-J";
                a.innerHTML=oDatos.arraProdu[i].nombre;
                var p = document.createElement('p');
                p.className ="title";
                p.innerHTML = "Talla: "+oDatos.arraProdu[i].talla;
                var p1 = document.createElement('p');
                p1.className ="title";
                p1.innerHTML = "Equipo: "+oDatos.arraProdu[i].equipo;
                var span = document.createElement('span');
                span.className = "title";
                span.innerHTML = "Precio: $"+oDatos.arraProdu[i].precio+" MX";

			    figure.appendChild(div2);
			    figcaption.appendChild(a);
			    figcaption.appendChild(p);
			    figcaption.appendChild(p1);
			    figcaption.appendChild(span);
			    figure.appendChild(figcaption);
				nodo.appendChild(div1);
			}
		}
		}else{
			 var error = document.createElement('div');
			 error.className="error";
			 var ms = document.createElement('h2');
			 ms.innerHTML="No hubo coincidencias";
			 error.appendChild(ms);
			 nodo.appendChild(error);
		}
	}catch(excep){
		alert(excep.message);
	}
	
}
