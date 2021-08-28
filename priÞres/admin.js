function editFailed(x){alert('dsl, erruer');}
function ajaxxme(fonction,fichierphp,requete,z){
	// if(typeof(z)!='undefined')menu[-1]=z;
	var create='';var complete='';var interactive='';var loaded='';var loading='';var success='';var uninitialized='';var xyz='';
	for(var i=0;i<fonction.length;i=i+2)
		switch(fonction[i]){
			case 'onCreate':create=fonction[i+1];break;
			case 'onUninitialized':uninitialized=fonction[i+1];break;
			case 'onLoading':loading=fonction[i+1];break;
			case 'onLoaded':loaded=fonction[i+1];break;
			case 'onInteractive':interactive=fonction[i+1];break;
			case 'onXYZ':xyz=fonction[i+1];break;
			case 'onComplete':complete=fonction[i+1];break;
			case 'onSuccess':success=fonction[i+1];break;
			default:break;
		}
		// alert(success);
	var url=fichierphp;
	var pars=requete;
	
	var myAjax=new Ajax.Request(url,{method:'post',postBody:pars,onCreate:create,onComplete:complete,onInteractive:interactive,onLoaded:loaded,onloading:loaded,onSuccess:success,onFailure:editFailed,onUninitialized:uninitialized,onXYZ:xyz,});
}
	function load_info(evt) {
		var files = evt.target.files; // FileList object

		// files is a FileList of File objects. List some properties.
		var output = [];
		for (var i = 0, f; f = files[i]; i++) {
		  output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
					  f.size, ' bytes, last modified: ',
					  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
					  '</li>');
		}
		document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
	  }
   function load_appear(evt) {
    var files = evt.target.files; // FileList object
	
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*') ) {
		if (!f.type.match('audio.*') && !f.type.match('video.*')){aa(f.type);continue;}
		// if (!f.type.match('video.*')||!f.type.match('audio.*')){alert('ppp');continue;}
		else{aa('ee');load_info(evt);
			var reader = new FileReader();reader.onload = (function(theFile) {
			return function(e){	if(files.length==1){drop.lastChild.src=e.target.result;removeClass(drop,'trblT');addClass(drop,'tailleT');removeCss(drop,'width!height');addCss(drop,'width:200px;height:100px;');chrono=setTimeout("drop.lastChild.setAttribute('controls','true');rangerHtml(drop);clearTimeout(chrono);",2000);drop.title=escape(theFile.name);}
								else{alert('ppp');var span = document.createElement('span');span.innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
									document.getElementById('list').insertBefore(span, null);}
};})(f);reader.readAsDataURL(f);
		}
        continue;
      }else if(drop.className.match('image')){aa('ee');load_info(evt);
var reader = new FileReader();reader.onload = (function(theFile) {
return function(e){	if(files.length==1){drop.src=e.target.result;drop.title=escape(theFile.name);}
					else{var span = document.createElement('span');span.innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
						document.getElementById('list').insertBefore(span, null);}
};})(f);
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
	  }
    }
  }
  // function drop_text(evt) {var oTarg = window.event.srcElement;var oData = window.event.dataTransfer;drag_text();oTarg.innerText += oData.getData("text");addText(drop,oData.getData("text"));drop.onmouseout=function(){drop.style.lineHeight='1em';};drop.className=drop.className.replace(/trblT/gi,'');drop.onmouseover=function(){drop.style.lineHeight=drop.scrollHeight+'px';};drop.style.width=oData.getData("text").length*8+'px';}
  // function drop_test(evt) {var oTarg = window.event.srcElement;var oData = window.event.dataTransfer;drag_text();oTarg.innerText += oData.getData("text");addText(drop,oData.getData("text"));drop.onmouseout=function(){drop.style.lineHeight='1em';};drop.className=drop.className.replace(/trblT/gi,'');drop.onmouseover=function(){drop.style.lineHeight=drop.scrollHeight+'px';};drop.style.width=oData.getData("text").length/2+'em';}
  function drop_text(evt,x) {var oTarg = window.event.srcElement;var oData = window.event.dataTransfer;drag_text();oTarg.innerText += oData.getData("text");addText(drop,oData.getData("text"));drop.firstChild.src=oData.getData("text");drop.onmouseout=function(){removeCss(this,'line-height!height');setTimeout(cleanCss(this.firstChild),1000);};drop.className=drop.className.replace(/trblT/gi,'');drop.onmouseover=function(){addCss(this,'line-height:'+this.scrollHeight+'px;height:150px;');this.firstChild.style.display='block';};drop.style.width=oData.getData("text").length/2+'em';rangerHtml(drop);alert('ii');}
  function dropp(evt) {
  // VRAIABLE dropZone À METTRE EN PLACE DANS AU MOMENT VOULU
  // var dropZone = document.getElementById('drop_zone');
  // dropZone.addEventListener('dragover', handleDragOver, false);
  // dropZone.addEventListener('drop', handleFileSelect, false);
  
    evt.stopPropagation();
    evt.preventDefault();

    var files = evt.dataTransfer.files; // FileList object.

    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {alert(f.type);
      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                  '</li>');
    }
    document.getElementById('output_list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }

  function dragg_copy(evt) {
    evt.stopPropagation();
    evt.preventDefault();
    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
  }
  function drage_text(evt) {var oData = window.event.dataTransfer;oData.dropEffect = "move";}
  function drag_text(evt) {
      // Cancel default action.
      var oEvent = window.event;
      oEvent.returnValue = false; }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
function canvas_titre(x,y){
	if(typeof(y)!='undefined'){
		var cpt=document.createElement('canvas');
		 cpt.setAttribute('id','canvass');
		var cptbis=cpt.getContext('2d');
		
		// alert(menu[x-1].innerHTML.substring(0,menu[x-1].innerHTML.indexOf('<img')));
		
		
		// cptbis.strokeStyle="red";
		// cptbis.moveTo(150,0);
		// cptbis.lineTo(150,500);
		// cptbis.stroke();
		
		cptbis.font='30px book antica';
		cptbis.textAlign='center';
		cptbis.fillStyle = "goldenrod";
		cptbis.fillText(y,150,50);
		var gradient=cptbis.createLinearGradient(0, 10, 200, 0);
		gradient.addColorStop("0","red");
		gradient.addColorStop(".4","red");
		gradient.addColorStop(".5","goldenrod");
		gradient.addColorStop(".6","green");
		gradient.addColorStop("1","red");
		// cptbis.fillStyle=gradient;
		cptbis.strokeStyle=gradient;
		// cptbis.fillText(menu[x-1].innerHTML.substring(0,menu[x-1].innerHTML.indexOf('<')),200,10);
		cptbis.strokeText(y,150, 50);
		cptbis.strokeText(y,150, 50);
		cptbis.strokeText(y,150, 50);

		x.insertBefore(cpt,x.firstChild);
	}
	else if(typeof(x)=='undefined')
		canvass.parentNode.removeChild(canvass);
		// else alert('erreur, il faut entrer au moins un paramètre dans la fonction canvas_titre()');
}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
//x est la cible
//y l'objet au dessus de x
// z est un string, soit c'est une fonction soit c'est le nom d'un evenement ex: onmouseup.
// zz est le nom d'un evenement ex: onmouseup
  function clickover(x,y,z,zz){
		if(typeof zz!='undefined')var cpt='x.'+zz+'='+z+';';
		else if(typeof z!='undefined'&&!z.match('function'))var cpt='x.'+z+'=';
		tmp=y;y.onmousedown=function(){this.style.zIndex=-1;};
		y.onmouseout=function(){this.setAttribute('style');};
		// setTimeout(y.removeAttribute('style'),200);
		
		if(typeof z!='undefined'){
			if(typeof zz!='undefined')eval(cpt);
			else if(x.onclick!=null){ x.onmouseup=z; } 
			if(!z.match('function'))eval(cpt+'x.onclick;');
		}else x.onmouseup=x.onclick;
		x.onclick='';
	}
	
  function yesOrNo(){
	var cpt=document.createElement('div');
	cpt.style.display='block';
	ctntab[ctntab.length]=addHtml(cpt,'span');
	ctntab[ctntab.length-1].innerHTML='oui';
	ctntab[ctntab.length-1].onclick=function(){fix.removeChild(yesorno);option.innerHTML='true';};
	ctntab[ctntab.length]=addHtml(cpt,'span');ctntab[ctntab.length-1].innerHTML='non';ctntab[ctntab.length-1].onclick=function(){fix.removeChild(yesorno);option.innerHTML='false';};
	cpt.id='yesorno';
	fix.appendChild(cpt);
  }
  function aa(x,y){
if(boolaa){boolaa=!boolaa;
chronoa=setTimeout("aaaaaa.parentNode.style.display='none';aaaaaa.parentNode.style.opacity=0;clearTimeout(chronoa);boolaa=true;",1000);
aaaaaa.parentNode.style.opacity=1;
aaaaaa.parentNode.style.display='block';
if(typeof x=='string'||typeof x=='number'||typeof x=='boolean')aaaaaa.innerHTML=x;else aaaaaa.innerHTML=typeof x;
cpta++;
aaaaaa0.innerHTML=cpta;}else setTimeout("aa('"+x+"',"+y+")",1000);
}
function do_a(x,y){if(y==-1)cpta=0;
		var cpt=document.createElement('div');
		cpt.setAttribute('className','opacityT');
		cpt.setAttribute('style','display:none;position:fixed;top:0;right:0;height:100px;width:250px;background:rgba(165,130,80,.4);border-radius:5px;z-index:1000000;');
		var cptbis=document.createElement('span');
		cptbis.setAttribute('style','float:left;background:red;padding:0 3px;color:white;font-weight:900;');
		cptbis.id='aaaaaa0';
		cpt.appendChild(cptbis);
		var cptbis=document.createElement('span');
		cptbis.setAttribute('style','line-height:100px;width:100%;display:block;font-size:1.5em;color:purple;border:none;text-align:center;');
		cptbis.id='aaaaaa';
		cptbis.innerHTML='oui';
		cpt.appendChild(cptbis);
		document.getElementsByTagName("body")[0].appendChild(cpt);
	
}
function addClose(x,y,z){
var cpt=document.createElement('span');
addText(cpt,'X');addClass(cpt,'close');
x.appendChild(cpt);cpt.param=y;
cpt.onclick=function(){
	this.parentNode.removeChild(this.param);
if(typeof z=='undefined'){}else{ if(z=='displayx'||z=='displayy'){  eval(z.substring(z.length-1)).innerHTML='';eval(z.substring(z.length-1)).setAttribute('style','');aa('oui: '+ eval(z.substring(z.length-1)).style.cssText); eval(z.substring(z.length-1)).className= eval(z.substring(z.length-1)).className.replace(/up/gi,'');

}};
bool0=true;
}
}
function addCss(x,y,z){if(typeof y=='string')if(typeof z=='undefined'){getCss(x,x.style.cssText+y);}else{getCss(x,x.style.cssText+y+':'+z+';');}else{var cpt=''; for(var i=0;i<y.length;i++)cpt+=y[i]+':'+z[i]+';';getCss(x,x.style.cssText+cpt);}}
function getCss(x,y){x.setAttribute('style',y);}
function cleanCss(x){try{if(typeof x.match(/html.*/))x.style.cssText='';} catch(e){for(var i=0;i<x.length;i++)x[i].style.cssText='';}}
function rmvH(x){x.parentNode.removeChild(x);}
function removeCss1(x,y){y=x.cssText.exec(y);y=x.cssText.substring(0,y)+x.cssText.substring(x.indexOf(y)+y.length);}
// créer une fonction removeCss pour y supprmier le css de plusieurs conteneurs, de même pour la fonction addCss
// faire aussi une fonction clearCss pour supprimer tout le style css d'un conteneur
// function cleanCss(x){if(typeof x.match(/html.*/))alert('matched');else alert('non');}
function removeCss(x,y){y=y.split('!');//alert('o '+x.style.cssText+'\nx:'+x+' \ny: '+y);
for(var i=0;i<y.length;i++)//alert(y[i]+' à: '+x.style.cssText.indexOf(y[i])+'\nsur: '+x.style.cssText.length);
	if(x.style.cssText.indexOf(y[i])!=-1){
		var cpt=x.style.cssText.indexOf(y[i]);
		var c=x.style.cssText;
		var k=0;
		while((a=x.style.cssText.substring(cpt+y[i].length+k,cpt+y[i].length+k+1))!=';')k++;k++;
		var cptbis=cpt+y[i].length+k;
		x.style.cssText=x.style.cssText.substring(0,cpt)+x.style.cssText.substring(cptbis);
}else alert(x.style.cssText.indexOf(y[y.length-1])+'\n'+y[y.length-1]+'\n'+x.style.cssText);
// alert('a '+x.style.cssText+'\n'+x+' xxx '+y);
}
function rangerHtml(x){
	removeClass(x,'tailleT');addClass(x,'panel_ready tailleT');var cpt=addHtml(x,'span');aa('bon');cpt.innerHTML='>';addClass(cpt,'panel_etape_ranger');cpt.param=true;
	cpt.onmousedown=function(){if(this.param){
		this.param=false;
		// alert(this.parentNode.className+'param '+this.parentNode.param+' xxx '+this.parentNode.style.cssText);
		this.parentNode.param=this.parentNode.style.cssText;
		removeCss(this.parentNode,'height!width!left');
		addCss(this.parentNode,'width:100% !important;height:75px;left:10px;');
	}else{this.param=true;getCss(this.parentNode,this.parentNode.param);}}}
function actInFrame(x){
var y=(x.contentWindow || x.contentDocument);
alert(y);
if (y.document)y=
y.document;return y;}
function crushHtml(x,y){if(typeof y=='string')y=document.createElement(y);if(typeof x=='string'){$(x).innerHTML='';$(x).appendChild(y);}else{ x.innerHTML='';x.appendChild(y);}if(typeof z=='undefined')return y;}
// function addHtml(x,y,z,zz,zzZ){if(typeof y=='string')y=document.createElement(y);if(typeof x=='string')$(x).appendChild(y);else x.appendChild(y);if(typeof z=='undefined')return y;else if(z!=''){addText(y,z);}else if(typeof zz!='undefined'){if(zz!='')addAtt(y,zz);if(typeof zzZ=='undefined'){return y;alert('o');}alert('ooo');}else return y; }
function geTHtml(x,y,z,zz){if(typeof(y)=='undefined'){return document.createElement(x);}else{x.innerHTML='';if(typeof y=='string')y=document.createElement(y);if(typeof x=='string')$(x).appendChild(y);else x.appendChild(y);if(typeof z=='undefined')return y;else if(z!=''&&z!='*'){addText(y,z);}if(typeof zz!='undefined'&&zz!='')addAtt(y,zz);}}
function getHtml(x,y,z,zz){if(typeof(y)=='undefined'){return document.createElement(x);}else{x.innerHTML='';if(typeof y=='string')y=document.createElement(y);if(x!='')if(typeof x=='string')$(x).appendChild(y);else x.appendChild(y);if(typeof z=='undefined')return y;else if(z!=''&&z!='*'){addText(y,z);}if(typeof zz!='undefined'&&zz!='')addAtt(y,zz);return y;}}
function addHtml(x,y,z,zz){if(typeof y=='string')y=document.createElement(y);if(typeof x=='string')document.getElementById(x).appendChild(y);else x.appendChild(y);if(typeof z=='undefined')return y;else if(z!=''&&z!='*'){addText(y,z);}if(typeof zz!='undefined'&&zz!='')addAtt(y,zz);}
function cutpastH(x,y,z,zz,zzz){alert(x.firstChild.nodeName);

}
function toast(x,y,z){
		if(!EV(z)){z=tag('body')[0];}
		// alert(z);
		var a=document.createElement('div');
		a.id='restoreAjax';
		addAtt(a,'style==position:fixed;box-sizing:border-box;overflow:hidden;');
		if(EV(y)){
				var toast_id="toast"+y;
				switch(y){
				case 0:addAtt(a,'id==restoreAjax!!class=='+toast_id);
				break;
				//si numéro
				// case:addAtt(a,'id==toast'+y+'class==toast');
				// break;
				//si nom
				// case"":toast_id=y;addAtt(a,'id=='+y+'class==toast');
				// break;
				default:break;
				}
				if(!EV(z))addHtml(z,a);else alert('manque le paramètre z');
		}else {var toast_id="toast";addAtt(a,'id==restoreAjax!!class==toast');
		tag('body')[0].insertBefore(a,tag('body')[0].firstChild);
		}
		getText(a,x);
		// alert(restoreAjax);
		setTimeout(function(){tag('body')[0].removeChild(clas('toast')[0]);},5000);		
}
function restore_ajax(x){alert(x);
		var a=document.createElement('div');
		addHtml(a,'div',x,'id==restoreAjax');
		tag('body')[0].insertBefore(a,tag('body')[0].firstChild);
		setTimeout("tag('body')[0].removeChild(restoreAjax.parentNode)",5000);	
}
function addFHtml(x,y,z,zz,zzz){alert(x.firstChild.nodeName);
	if(typeof y=='string')
		y=document.createElement(y);
	if(typeof x=='string')
		$(x).insertBefore(y,$(x).firstChild);
	else 
		x.insertBefore(y,x.firstChild);
	if(typeof z=='undefined')
		return y;
		else if(z!=''&&z!='*')
			{addText(y,z);}
			if(typeof zz=='undefined')return y;
			else if(zz!='')
				addAtt(y,zz);
			if(typeof zzz=='undefined')return y;
}
function addHtmll(x,y,z,zz,zzz){
	if(typeof y=='string')
		y=document.createElement(y);
	if(typeof x=='string')
		$(x).appendChild(y);
	else 
		x.appendChild(y);
	if(typeof z=='undefined')
		return y;
		else if(z!=''&&z!='*')
			{addText(y,z);}
			if(typeof zz=='undefined')return y;
			else if(zz!='')
				addAtt(y,zz);
			if(typeof zzz=='undefined')return y;
}
function getText(x,y){x.innerHTML=y;}
function addText(x,y){x.innerHTML+=y;}
function addAtt(x,y){for(var i=0;i<y.split('!!').length;i++)x.setAttribute(y.split('!!')[i].split('==')[0],y.split('!!')[i].split('==')[1]);}
function getId(x,y){x.className=y;}
function addId(x,y){x.className+=' '+y;}
function getClass(x,y){x.className=y;}
function addClass(x,y){x.className+=' '+y;}
function clearHtml(x){x.innerHTML='';x.removeAttribute('style');}
function clearhtmlLevel(x){for(var i=0;i<x.childNodes.length;i++)if(!x.childNodes[i].nodeName.match('#.*')){x.childNodes[i].innerHTML='';x.childNodes[i].removeAttribute('style');}}
// function removeClass(x,y){x.className='';}
function rmvAtt(x,y){if(typeof(y)!='undefined')if(typeof(x[0])!='undefined'){for(var i=0;i<x.length;i++)if(x[i].hasAttribute(y))x[i].removeAttribute(y);}else{x.removeAttribute(y);}else alert('il manque le deuxieme parametre');}
function removeClass(x,y){x.className=x.className.replace(y,'');}
function getId(x,y){x.id=y;}
function preSib(x,y){//alert(x.previousSibling.previousSibling.nodeName);
		if(typeof(y)!='undefined'){while(x.previousSibling.nodeName!=y.toUpperCase())
		if(x.previousSibling.nodeName=='#text')
				x=x.previousSibling.previousSibling;
		else x=x.previousSibling;
		return x.previousSibling;}else{ while(x.previousSibling.nodeName=='#text')x=x.previousSibling;return x.previousSibling;}}
function nexSib(x,y){
		if(typeof(y)!='undefined'){while(x.nextSibling.nodeName!=y.toUpperCase())x=x.nextSibling;return x.nextSibling;}else{ while(x.nextSibling.nodeName=='#text')x=x.nextSibling;return x.nextSibling;}}
// function nexSib(){if(typeof(y)!='undefined'){while(x.nextSibling.nodeName!=y.toUpperCase())x=x.nextSibling;return x.nextSibling;}else{ while(x.nextSibling.nodeName=='#text')x=x.nextSibling;return x.nextSibling;}}}
function startLoad(){addCss(mask,'display:block;');addCss(ajax_load,'display:block;');}
function endLoad(){cleanCss(new Array(mask,ajax_load));}
function tag(x,y){if(typeof y=='undefined')return document.getElementsByTagName(x);
else return y.getElementsByTagName
(x);}
function clas(x,y){if(typeof y=='undefined')return document.getElementsByClassName(x);
else return y.getElementsByClassName(x);}
function writeit(x,y,z,zz){var k=1;if(typeof(z)=='undefined')z=0;alert(zz);
if(typeof(y)!='undefined'){
	
}
			
}
function writeitt(x,y,z,zz){var k=1;if(typeof(z)=='undefined')z=0;alert(zz);
if(typeof(y)!='undefined'){
x.y=y;
x.z=z+1;
// alert(dumpp.x+' x '+dumpp.y+' x '+dumpp.z);
			if(y[z]=='&'){		k=y.substring(z,(z+y.substring(z).indexOf(';')+1)).length;x.innerHTML+=y.substring(z,(z+y.substring(z).indexOf(';')+1));	}
			else				x.innerHTML+=y.substring(z,z+1);
			setTimeout('writeit("'+x.param+'");',1);
}else{
// alert(dumpp.x+' x '+dumpp.y+' x '+dumpp.z);
			if(x.y[x.z]=='&'){		k=x.y.substring(x.z,(x.z+x.y.substring(x.z).indecptOf(';')+1)).length;x.innerHTML+=x.y.substring(x.z,(x.z+x.y.substring(x.z).indecptOf(';')+1));	}
			else					x.innerHTML+=x.y.substring(x.z,x.z+1);
			if(x.z<x.y.length)chrono=setTimeout('clearTimeout(chrono);writeit();',10);
			x.z=x.z+1;
}
			
}
//x: où on dois ajouter le span
//y: le conteneur que l'on doit vider
//z: l'option choisie:erase ou empty ('era' ou 'emp')
function close(x,y,z){alert(typeof(z));
	addHtml(x,'span','X','class==closeit!!title==fermer');
plus.getElementsByClassName('closeit')[0].param0=x;	plus.getElementsByClassName('closeit')[0].param1=y;	plus.getElementsByClassName('closeit')[0].param2=z;
	plus.getElementsByClassName('closeit')[0].addEventListener("click", function(event){alert('lmkml');this.param1.className='';this.param1.innerHTML='';}, false);
			// plus.getElementsByClassName('closeit')[0].addEventListener("click", function(){alert('lmkml');this.param1.className='';this.param1.innerHTML='';}, false);
		// Event.observe(plus.getElementsByClassName('closeit')[0],'click',function(){plus.className='';plus.firstChild.innerHTML='';},true);
		// alert(plus.getElementsByClassName('closeit')[0].EventListener);
	
}
function closee(x,y,z,zz){x.innerHTML='';
	addHtml(x,'span','X','class==closeit!!title==fermer');
	// alert(x.firstChild);
	x.firstChild.onclick=function(){
		alert('o');
		if(typeof x=='string'){
				$(x).innerHTML='';
				if(typeof $(y)!='undefined'){if(typeof z=='undefined')$(y).style.display='none';else eval(z);}
			if(typeof zz!='undefined'){if(zz=='both'){$(x).parentNode.removeChild($(x));$(y).parentNode.removeChild($(y));}if(zz=='close')$(x).parentNode.removeChild($(x));}
		}else{
				x.innerHTML='';
				if(typeof y!='undefined'){if(typeof z!='undefined')eval(z);else y.style.display='none';}
				if(typeof zz!='undefined'){if(zz=='both'){x.parentNode.removeChild(x);y.parentNode.removeChild(y);}if(zz=='close')x.parentNode.removeChild(x);}
		}
	}
}
function inArray(needle, haystack) {
		var length = haystack.length;
		for(var i = 0; i < length; i++) {
			if(haystack[i] == needle) return true;
		}
		return false;
}
function EV(x) {if(typeof(x)!='undefined')return true;else return false;};function TO(x) {if(typeof(x)!='undefined')return true;else return false;};
function getcolor(x){
		var color={'bleu':'#0000FF','rouge':'#FF0000','doree':'#CCCC00','beige':'#FFCC99','noire':'#000000','verte':'#00CC00'};
		// alert(color['bleu']);
		return(color[x]);
}



























function allowDrop(ev)
{
ev.preventDefault();
}
var geocoder;
var map;
function iniCarte() {//alert(document.getElementById('map-canvas'));
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
    zoom: 8,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

