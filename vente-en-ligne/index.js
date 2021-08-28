function rmv_livredor_signe(){alert('fonction a faire');}
function addEns(){
		if(document.forms['ecrire'].titre.value!=''&&document.forms['ecrire'].pseudo.value!=''&&document.forms['ecrire'].texte.value!="")
				ajaxxme(new Array('onCreate',function(){tag('span',message_comments)[0].click();document.forms['ecrire'].titre.value='';document.forms['ecrire'].texte.value='';document.forms['ecrire'].pseudo.value='';},'onSuccess',function(x){if(x.responseText=='1'){alert('ok');toast('message enregistré avec succès');}else{alert('non'); toast(x.responseText+"une erreur sest produite<br/>message non-envoyé");}},'onFailure',function(x){alert('Une erreure est survenue');})
						,'lpd.php','pseudo='+document.forms['ecrire'].pseudo.value+'&texte='+tag('textarea',message_comments)[0].value+'&enseignementCommentaire='+document.forms['ecrire'].titre.value
				);
		else alert('Veuillez entrer votre pseudonyme un titre et votre commentaire');
				
// return false;
}
function addComs(){alert('ok');
		var ht=getHtml('div');
		// addHtml(clas('commentaires',cptHTML.parentNode.parentNode.parentNode)[0],ht);
		clas('commentaires',cptHTML.parentNode.parentNode.parentNode)[0].insertBefore(ht,clas('commentaires',cptHTML.parentNode.parentNode.parentNode)[0].firstChild);
		addHtml(ht,'span',document.forms['ecrire'].pseudo.value);
		addHtml(ht,'span',document.forms['ecrire'].heure.value);
		addHtml(ht,'div',document.forms['ecrire'].texte.value);
}
function init(){
		// document.getElementById('__yael_once').parenNode.removeChild(document.getElementById('__yael_once'));
		// alert(document.getElementsByTagName('code')[0]);
		// boolaa=true;aaaaaa='';
		// aa('just ok');
		// alert('ok');
		// alert(document.forms['ecrire'].pseudo.value);
		// for(var i=tag("script",tag("head")[0]).length-1;i>=0;i--)
				// if(tag("script",tag("head")[0])[i].src!="index.js"||tag("script",tag("head")[0])[i].src!="admin.js"||tag("script",tag("head")[0])[i].src!="prototype.js"){
						// tag("head")[0].removeChild(tag("script",tag("head")[0])[i]);
						// alert(tag("script",tag("head")[0]).length+"\nok\n"+i+"\n"+tag("script",tag("head")[0])[i]);
				// }
		if(typeof(livredor)!='undefined')
				document.forms['ecrire'].onsubmit=function(){return livreor(this);};
				
		if(typeof(enseignement)!='undefined'){
				
				for(var i=0;i<clas('repondre').length;i++){
				
						// if(typeof(tag('a',clas('repondre')[i])[0])!='undefined'){alert('ok');
								// tag('a',clas('repondre')[i])[0].onclick=function(x){
										// cptHTML=x.target;clas('commentaires',cptHTML.parentNode.parentNode.parentNode)[0].style.display='block';
										// this.parentNode.parentNode.parentNode.onmouseout=function(x){if(x.target.className.indexOf('commentaires')==0){rmvAtt(clas('commentaires',this)[0],'style');this.onmouseout=function(){};}};
								// };
						// }
						tag('input',clas('repondre')[i])[0].onclick=function(x){	cptHTML=x.target;
								
								message_comments.texte.value='';message_comments.titre.value='';message_comments.pseudo.value='';
								getClass(message_comments,'see enseignement_msg');
								document.forms['ecrire'].onsubmit=function(){
										if(document.forms['ecrire'].pseudo.value!=''&&document.forms['ecrire'].texte.value!=""){
												ajaxxme(new Array(
														'onCreate',function(){//alert(tag('span',message_comments)[0].onclick);
																tag('span',message_comments)[0].click();
																tag('span',clas('repondre',cptHTML.parentNode.parentNode.parentNode)[0])[0].innerHTML=parseInt(tag('span',clas('vote',cptHTML.parentNode.parentNode.parentNode)[0])[0].innerHTML)+1;
																document.forms['ecrire'].titre.value='';document.forms['ecrire'].texte.value='';document.forms['ecrire'].pseudo.value='';
														}
														,'onSuccess',function(x){if(x.responseText=='1'){toast('message enregistré avec succès');addComs();alert(x.responseText);}else toast('message non-enregistré :'+x.responseText);},'onFailure',function(x){alert('Une erreure est survenue');})
												,'lpd.php','pseudo='+document.forms['ecrire'].pseudo.value+'&texte='+tag('textarea',message_comments)[0].value+'&enseignementTexte='+tag('b',cptHTML.parentNode.parentNode.parentNode)[1].innerHTML
												);
										}else alert('Veuillez entrer votre pseudonyme et votre commentaire');
												
								return false;
								};
								// alert(document.forms['ecrire'].onsubmit);
						}
						// alert(document.forms['ecrire'].onsubmit);
						// charge le onsubmit du formulaire de message pour mettre..
						message_comments.previousSibling.onmousedown=function(){
						}
				}
				for(var i=0;i<clas('vote').length;i++){
						tag('input',clas('vote')[i])[0].onclick=function(x){cptHTML=x.target;//alert('kkk');
								ajaxxme(new Array('onSuccess',function(x){if(x.responseText=='1'){//alert('ok');
												//mettre +1 au fieldset aimer ce commentaire
												tag('span',clas('vote',cptHTML.parentNode.parentNode.parentNode)[0])[0].innerHTML=parseInt(tag('span',clas('vote',cptHTML.parentNode.parentNode.parentNode)[0])[0].innerHTML)+1;
										}else {alert('o');restore_ajax(x.responseText);}
								},'onFailure',function(x){alert('Une erreure est survenue');}),'lpd.php','ip='+ip+'&enseignementVote='+tag('b',cptHTML.parentNode.parentNode.parentNode)[1].innerHTML);
						}
				}
				for(var i=0;i<clas('retirer').length;i++){
						tag('input',clas('retirer')[i])[0].onclick=function(x){cptHTML=x.target;alert(x);
								ajaxxme(new Array('onSuccess',function(x){if(x.responseText=='1'){
												//mettre +1 au fieldset retrait demandé
												tag('span',clas('retirer',cptHTML.parentNode.parentNode.parentNode)[0])[0].innerHTML=parseInt(tag('span',clas('retirer',cptHTML.parentNode.parentNode.parentNode)[0])[0].innerHTML)+1;
										}else alert(x.responseText);
								},'onFailure',function(x){alert('Une erreure est survenue');}),'lpd.php','ip='+ip+'&enseignementRetirer='+tag('b',cptHTML.parentNode.parentNode.parentNode)[1].innerHTML);
						}
				}
		
		}
		if(typeof(ppanier)!='undefined'){
				tag('div',affiche_article)[0].addEventListener('click',function(e){Event.stop(e);},false);
				// for(var i=0;i<clas('panier').length;i++)
				ppanier.onclick=function(x){addarticle(this,x);}
				// for(var i=0;i<clas('afficher').length;i++)
						// clas('afficher')[i].onclick=function(x){affarticle(this.parentNode.parentNode);}
				// for(var i=0;i<clas('id').length;i++){clas('id')[i].param=clas('id')[i].innerHTML;}
				// for(var i=0;i<clas('prix').length;i++){
						// clas('prix')[i].param=clas('prix')[i].innerHTML;
						// alert(clas('prix')[i].param);
				// }
				if(typeof(clas('grotte')[0])!='undefined'){
						// var lll=addHtmll(clas('type',clas('grotte')[0])[0],'select','<option value="off" SELECTED>Choisissez une grotte</option><option value="'+clas('qtty',clas('grotte')[0])[0].name.substring(5)+'">'+clas('l',clas('grotte')[0])[0].innerHTML+'</option>','onchange==clas("idee",this.parentNode.parentNode)[0].innerHTML=clas("taille",this.parentNode.parentNode)[0].param[this.selectedIndex].innerHTML;if(this.value!="off")see(document.getElementById("grotte"+this.value));else removeClass(clas("see",clas("taille",this.parentNode.parentNode)[1])[0],"see");');
						// tag('select',clas('taille',clas('grotte')[0])[1])[0].id='grotte'+clas('qtty',clas('grotte')[0])[0].name.substring(5);
						// clas('taille',clas('grotte')[0])[0].param=new Array('',clas('idee',clas('grotte')[0])[0]);
						// for(var i=clas('grotte').length-1;i>0;i--){
								// addHtml(lll,'option',clas('l',clas('grotte')[i])[0].innerHTML,'value=='+clas('qtty',clas('grotte')[i])[0].name.substring(5));
								// addHtml(	clas('taille',clas('grotte')[0])[1]	,	tag('select',clas('taille',clas('grotte')[i])[1])[0],'','id==grotte'+clas('qtty',clas('grotte')[i])[0].name.substring(5));
								// clas('taille',clas('grotte')[0])[0].param[clas('taille',clas('grotte')[0])[0].param.length]=addHtmll(	clas('taille',clas('grotte')[0])[1]	,	clas('idee',clas('grotte')[i])[0],'','id==grotte'+clas('qtty',clas('grotte')[i])[0].name.substring(5));
								// rmvH(clas('grotte')[i]);

						// }
				}
				// le_panier.onsubmit=function(){paniersub();};
				
				// articles_choix.innerHTML=tfoot.innerHTML;
				// rmvH(tfoot);
				// addClass(articles,'see');
		}
		if(typeof(diapo_intro)!='undefined'){
				tmp=tag('article',diapo_intro);
				tmpbis=tag('figure',tmp[0]);
				// diapo_intro.style.height=tag('img',tmpbis)[0].screenHeight;
				diapo_intro.param=0;
				getClass(tmp[0],'see');
				// alert(tag('img',tmpbis[0])[0]+"\n"+tag('img',tmpbis[0])[0].offsetHeight);
				getCss(diapo_intro,'height:'+parseInt(tag('img',tmpbis[0])[0].offsetHeight+60)+'px;');
				// getClass(tmpbis[0],'diapo');
				// setTimeout("see(tmp[parseInt(diapo_intro.param)+1]);diapo_intro.param=parseInt(diapo_intro.param)+1;alert('ok');",10000);
				// resetDiapo();
				// chrono=setInterval("diapo_intro.param=(diapo_intro.param+1)%tmp.length;see(tmp[diapo_intro.param]);",11000);
				timer=new Timer(function(){diapo_intro.param=(diapo_intro.param+1)%tmp.length;see(tmp[diapo_intro.param]);timer.restart();timer.kill();timer.resume();},20000);
				for(var i=0;i<tag('article',diapo_intro).length;i++){
						tag('article',diapo_intro)[i].onmouseover=function(){timer.pause();};
						tag('article',diapo_intro)[i].onmouseout=function(){timer.resume();};
				}
				// for(var i=0;i<tag('img',diapo_intro).length;i++){
						// tag('img',diapo_intro)[i].onmouseover=function(){timer.pause();};
						// tag('img',diapo_intro)[i].onmouseout=function(){timer.resume();};
				// }
						diapo_intro.onmousemouse=function(){alert('ok');};
		}
		for(var i=0;i<tag('a',tag('footer')[0]).length;i++)
				tag('a',tag('footer')[0])[i].onclick=function(){
						// headergmap.contentDocument.getElementById('carte').click();
						see(document.getElementById(this.href.substring(this.href.indexOf('#!')+2)));
				};
		if(location.href.indexOf('#')!=-1){
								// alert('ok');
				for(var i=0;i<tag('a',tag('footer')[0]).length;i++)
						if(tag('a',tag('footer')[0])[i].href.indexOf(location.href.substring(location.href.indexOf('#')+1))	!=	-1){
								tag('a',tag('footer')[0])[i].click();
								// alert(tag('a',tag('footer')[0])[i].onclick);
						} 
		}
		if(	clas('zoomable').length!=0)
				for(var i=0;i<clas('zoomable').length;i++){//alert('k');
						clas('zoomable')[i].param=clas('zoomable')[i].className;
						clas('zoomable')[i].addEventListener('mouseover',function(x){zoom_image(zoom_img,this.src,x);if(EV(articles))getText(tag('figcaption',fix)[0],clas('descr',this.parentNode.parentNode)[0].innerHTML);else getText(tag('figcaption',fix)[0],this.alt);},false);
						clas('zoomable')[i].addEventListener('mouseout',function(x){zoom_image(zoom_img);fix.removeAttribute('style');},false);
						clas('zoomable')[i].addEventListener('click',function(x){if(fix.style.paddingRight=='200px')fix.style.paddingRight='400px';else fix.style.paddingRight='200px';},false);
				}
}
function send_msg_livredor() {
		tag("footer")[0].style.marginBottom="200px";
		addClass(message_comments,"see");
		message_comments.texte.value='';message_comments.titre.value='';message_comments.pseudo.value='';
		message_comments.onsubmit=function(){if(message_comments.pseudo.value==''||message_comments.titre.value==''||message_comments.texte.value=='')return false;};
}
function send_msg_enseignement() {
		message_comments.info0.value=date_enseignement.innerHTML;
		message_comments.action="index.php?menu=enseignements";
		tag("footer")[0].style.marginBottom="200px";
		addClass(message_comments,"see");
		message_comments.texte.value='';message_comments.titre.value='';message_comments.pseudo.value='';
		message_comments.onsubmit=function(){if(message_comments.pseudo.value==''||message_comments.texte.value=='')return false;};
		
}
function articles_select(x) {
// alert();
// alert(x.selectedIndex);
// alert(tag('option',x)[x.selectedIndex]);
		if(!tag('option',x)[x.selectedIndex].hasAttribute('selected'))
				for(var i=0;i<tag('tr',tag('tbody')[0]).length;i++)
						if(clas('typy',tag('tr',tag('tbody')[0])[i])[0].innerHTML==x.value) if(clas('typy',tag('tr',tag('tbody')[0])[i])[0].innerHTML=='grotte') getClass(tag('tr',tag('tbody')[0])[i],'grotte');else getClass(tag('tr',tag('tbody')[0])[i],'');
						else getClass(tag('tr',tag('tbody')[0])[i],'hid');
		else	for(var i=0;i<tag('tr',tag('tbody')[0]).length;i++)	if(clas('typy',tag('tr',tag('tbody')[0])[i])[0].innerHTML=='grotte') getClass(tag('tr',tag('tbody')[0])[i],'grotte');else getClass(tag('tr',tag('tbody')[0])[i],'');
		// alert('ok');
}
function Timer(callback, delay) {
    var timerId, start, remaining = delay;
	var memorie=delay;
    this.pause = function() {//alert(remaining+"\n"+(new Date() - start));
        window.clearTimeout(timerId);
        remaining -= new Date() - start;//alert(remaining);
		};

    this.resume = function() {
        start = new Date();//alert(remaining);
        timerId = window.setInterval(callback, remaining);//ooo.innerHTML=remaining;
    };
	this.restart=function(){start = new Date();remaining=memorie;}
	this.kill=function(){window.clearTimeout(timerId);}

	// tmp[0].onmouseover=function(){timer.pause();};tmp[0].onmouseout=function(){timer.resume();alert('ok');};
	// tmp[1].onmouseover=function(){timer.pause();};tmp[1].onmouseout=function(){timer.resume();};
    this.resume();
}

function panier_modif(x){//alert(hid.length);		
		addCss(x,"display:none");
		nexSib(x).value="Actualiser la commande";
		if(typeof(hid)!="undefined")hid.parentNode.removeChild(hid);
				// alert(tag("tr").length);
		for(var i=0;i<tag('tr').length-1;i++)
		{		tag("a",panier_table)[i].style.display="block";
				clas("action",panier_table)[i].removeAttribute("readonly");
		}
		
		var date=new Date();
		date.setTime(date.getTime()+(1*24*3600*1000));
		var expire=";expires="+date.toGMTString();
		for(var i=0;i<tag('tr',tag('tbody')[0]).length;i++){
				addClass(clas('action',tag('tr',tag('tbody')[0])[i])[0],"actionn");
				clas('action',tag('tr',tag('tbody')[0])[i])[0].onchange=function(){
						if(this.hasAttribute('class'))this.removeAttribute('class');
						// alert("panier["+clas('idee',x.parentNode.parentNode)[0].innerHTML+"]="+this.value+expire+"; path=/");
						document.cookie="panier["+clas('idee',x.parentNode.parentNode)[0].innerHTML+"]="+this.value+expire+"; path=/";
				};
		}
}
function paniersubb(x){
		
}
function paniersub(){//alert(articles.param);		
						var tmp='';
						if(typeof(articles)!='undefined')
								for(a in articles.param)
										if(articles.param.hasOwnProperty(a)){
												//alert(a+"\n\n"+articles.param[a]);
												tmp+=a+"=>"+articles.param[a]+',';
										}
						else
								for(a in panier_table.param)
										if(panier_table.param.hasOwnProperty(a))
												tmp+=a+"=>"+panier_table.param[a]+',';
						tmp=tmp.substring(0,tmp.length-1);
						// tmp=tmp.replace(/,,/g,',');
						panier.value='$a=array('+tmp+');';
						panierz.value=tmp;
						panierzz.value=tmp;
						// alert(panier.value);
						// alert(document.cookie);
}
function rmvarticle(x,y){		
								var date=new Date();
								date.setTime(date.getTime()-(1*24*3600*1000));
								var expire=";expires="+date.toGMTString();
								// toast(x.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.innerHTML);
								// alert("panier["+x.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.innerHTML+"]="+0+expire+"; path=/");
								document.cookie="panier["+x.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.innerHTML+"]="+0+expire+"; path=/";
								// alert(document.cookie);
								x.parentNode.parentNode.parentNode.removeChild(x.parentNode.parentNode);
								// alert(x.previousSibling.previousSibling.value);
								// alert("panier["+parseInt(x.parentNode.previousSibling.previousSibling.innerHTML)+"]="+x.previousSibling.previousSibling.value+expire+"; path=/");
}
function get_article_commentaire(){
		toast('fonction ajax == recupérer commentaires internautes');
}
function affarticle(x){//alert(x);
		if(tag('td',x)[tag('td',x).length-1].className=='dispo')var dispo='Disponible';else var dispo='Epuisé';
		// var tmp=addHtmll(addHtmll(tag('body')[0],'aside','','id==affiche_article'),'div');
		tag('img',affiche_article)[0].src=tag('img',x)[0].src.replace(/min\//,'');
		tag('img',affiche_article)[0].alt=tag('img',x)[0].alt;
		tag('img',affiche_article)[0].title=tag('img',x)[0].title;
		getText(tag('h2',affiche_article)[0],clas('l',x)[0].innerHTML);
		// ajaxxme(new Array('onSuccess',function(x){alert(x);
														// addText(tag('q',affiche_article)[0],clas('l',x)[0].nodeValue);
												// }
				// ),'rmvcookie.php','id='+clas('id',x)[0].nodeValue+'&
		// );
		getText(tag('p',affiche_article)[0],clas('descr',x)[0].innerHTML);
		getText(tag('span',tag('span',affiche_article)[1])[0],' '+clas('l',x)[0].innerHTML);
		getText(tag('span',tag('span',affiche_article)[1])[1],'0');
		// alert(x.innerHTML);
		// alert(clas('type',x)[0]);
		getText(tag('span',affiche_article)[6],'<strong>Type</strong>: '+clas('type',x)[0].innerHTML);
		// getText(tag('span',affiche_article)[7],'<strong>Disponibilité</strong>: '+tag('span',clas('dispo',x)[0])[0].innerHTML+' article en stock');
		// getText(tag('span',affiche_article)[7],'<strong>Disponibilité</strong>: '+dispo);
		// alert(clas('taille',x)[0].lastChild);
		// alert(clas('taille',x)[0].selectedIndex);
		if(tag('select',x).length==0)getText(tag('span',affiche_article)[8],'<strong>Dimensions</strong>: '+clas('taille',x)[0].innerHTML);
		else if(typeof(clas('numero',x))=='undefined')getText(tag('span',affiche_article)[8],'<strong>Taille</strong>: '+tag('option',clas('taille',x)[1].lastChild)[clas('taille',x)[1].lastChild.selectedIndex].innerHTML);
		// alert(clas('taille',x)[0].lastChild);
		getText(tag('span',affiche_article)[9],'<strong>Prix</strong>: '+clas('prix',x)[0].innerHTML);
		// alert(clas('taille',x)[0].lastChild);
		affiche_article.style.display='flex';
		// alert('fin');
}
function addarticle(x,y){		
								
								// alert("panier["+nexSib(x).innerHTML+"]="+preSib(x).innerHTML+expire+"; path=/");
								if(typeof(y)=='undefined')var y=0;
								// alert(preSib(x).max);
								if(qqtyy.value!=0&&qqtyy.value<=parseInt(preSib(x).innerHTML)){
										var date=new Date();
										date.setTime(date.getTime()+(5*24*3600*1000));
										var expire=";expires="+date.toGMTString();
										document.cookie="panier["+nexSib(x).innerHTML+"]="+preSib(x).innerHTML+expire+"; path=/";
										// if(x.parentNode.previousSibling.previousSibling.innerHTML.indexOf('|')!=-1)
												// document.cookie="panier["+parseInt(nexSib(x).innerHTML)+"]="+preSib(x).innerHTML+expire+"; path=/";
										// else	document.cookie="panier["+parseInt(nexSib(x).innerHTML)+"]="+preSib(x).innerHTML+expire+"; path=/";
										// alert(parseInt(x.parentNode.previousSibling.previousSibling));
										// alert(expire);
										// alert(preSib(x).value);
										// alert("panier["+parseInt(x.parentNode.previousSibling.previousSibling.innerHTML)+"]="+x.previousSibling.value+expire+"; path=/");
										// date.setTime(date.getTime()-(5*24*3600*1000));
										// document.cookie="panier[NAN]="+preSib(x).value+expire+"; path=/";
										alert("panier["+nexSib(x).innerHTML+"]="+preSib(x).innerHTML+"; path=/");
										alert(document.cookie);
										
										
										
								}else{
										// alert(ic+"Veuillez entrer une quantité à ajouter au panier:\n\n'"+clas('l',x.parentNode.parentNode)[0].innerHTML+"'");
										toast("Veuillez entrer une quantité pour de:<br/>"+namme.innerHTML+"'\n\n à ajouter au panier");
								}
								toast('Ajout panier confirmé');
}
function select_img(x){var r=x.selectedIndex;
		xx=clas('image',x.parentNode.parentNode)[0].lastChild;
		x=clas('opt_img',x.parentNode.parentNode)[0];
		// alert(r);
		// alert(x.innerHTML.split(';')[r]);
		// alert(xx.src.substring(0,xx.src.lastIndexOf('/')));
		if(r!=0)	xx.src=xx.src.substring(0,xx.src.lastIndexOf('/')+1)+x.innerHTML.split(';')[r-1]+'.JPG';
		else		xx.src=xx.src.substring(0,xx.src.lastIndexOf('-'))+'.JPG';
		// alert(clas('image',x.parentNode.parentNode)[0].lastChild.src);
		// alert(clas('image',x.parentNode.parentNode)[0].lastChild.src.lastIndexOf('/'));
}
function giveformnum(x){var r='';

		// if(x.length%2==0)
				for(var i=0;i<=(x.length-2);i+=2){
						var rr=i+2;
						r+=x.substring(i,i+2)+' ';
				}
		// alert(r);
		return r;
}
function indicatifPhone(x){//alert(z.length);
		
				switch(x){
						case"cotedivoire":return'00225';break;
						case"guinee":return'00224';break;
						case"guineeb":return'00245';break;
						case"burkina":return'00226';break;
						case"ghana":return'00233';break;
						case"mali":return'00223';break;
						case"nigeria":return'00234';break;
						default:break;
				}return "00000";
				
}
function indicatifPays(x,y,z){//alert(z.length);
		
		var m="Une erreur s'est produite :\nSoit, vous n'avez pas entré le bon code indicatif pays,\n ..l'indicatif "+x.value+" : "+y+" est incorrecte.\nSoit le numéro de téléphone: "+giveformnum(z)+" est incorrecte\n";
		paiement.param='';
		if(y.length>4){
				switch(x.value){
						case"cotedivoire":if(y.replace(' ','')!='00225'||z.replace(' ','').length!=8){paiement.param=m;return false;}break;
						case"guinee":if(y.replace(' ','')!='00224'||z.replace(' ','').length!=9){paiement.param=m;return false;}break;
						case"guineeb":if(y.replace(' ','')!='00245'||z.replace(' ','').length!=7){paiement.param=m;return false;}break;
						case"burkina":if(y.replace(' ','')!='00226'||z.replace(' ','').length!=8){paiement.param=m;return false;}break;
						case"ghana":if(y.replace(' ','')!='00233'||z.replace(' ','').length!=10){paiement.param=m;return false;}break;
						case"mali":if(y.replace(' ','')!='00223'||z.replace(' ','').length!=8){paiement.param=m;return false;}break;
						case"nigeria":if(y.replace(' ','')!='00234'||z.replace(' ','').length!=11){paiement.param=m;return false;}break;
						default:break;
				}return true;
		}else{paiement.param='Veuillez entrer un numéro de téléphone mobile money pour valider votre réservation.'; return false;}
				
}
function giveIndicatifPays(x,y){//alert('ooo');
		switch(tag('option',x)[x.selectedIndex].value){
				case"cotedivoire":x.param='00225';y.param=8;retraite.telephone.placeholder=x.param+'08010103';break;
				case"guinee":x.param='00224';y.param=9;retraite.telephone.placeholder=x.param+' 621 010103';break;
				case"guineeb":x.param='00245';y.param=7;retraite.telephone.placeholder=x.param+' 322 01 01';break;
				case"burkina":x.param='00226';y.param=8;retraite.telephone.placeholder=x.param+' 60 00 0101';break;
				case"ghana":x.param='00233';y.param=10;retraite.telephone.placeholder=x.param+' 035 2001019';break;
				case"mali":x.param='00223';y.param=8;retraite.telephone.placeholder=x.param+' 7013 0101';break;
				case"nigeria":x.param='00234';y.param=7;retraite.telephone.placeholder=x.param+' 0101 020 0303';break;
				default:break;
		}var t='';//alert(x.param);
		// while(t.length<retraite.telephone.param)t+=Math.floor((Math.random() * 9) + 1);
		// alert(retraite.pays.param+"\n"+retraite.telephone.param+"\n"+t);
		// retraite.telephone.placeholder=retraite.pays.param+t;
		if(tag('option',x)[x.selectedIndex].value!='cotedivoire')addClass(retraite.telci,'see');
		else getClass(retraite.telci,'');
}
function money(x){
		x=x+'';
		if(x.length<4)return x+' Fcfa';
		else if(x.length<7)return x.substring(0,x.length-3)+'.'+x.substring(x.length-3)+' Fcfa';
}
function taille_(x){//alert(indicatif+"\n"+x);
		
		if(x.value!='0'){		clas("panier",x.parentNode.parentNode)[0].access=true;}
		else clas("panier",x.parentNode.parentNode)[0].access=false;
		if(x.param[x.selectedIndex].indexOf("dispo")!=-1)
				clas("qtty",x.parentNode.parentNode)[0].max=x.param[x.selectedIndex].substring(5);
		if(clas("prix",x.parentNode.parentNode)[0].innerHTML.indexOf("x selon comman")!=-1)clas("prix",x.parentNode.parentNode)[0].innerHTML="x Fcfa<br/>Prix selon commande.";else clas("prix",x.parentNode.parentNode)[0].innerHTML=money(x.value);
		getClass(tag("td",x.parentNode.parentNode)[tag("td",x.parentNode.parentNode).length-1],x.param[x.selectedIndex]);
		if(x.selectedIndex-1>0)
				getText(clas("id",x.parentNode.parentNode)[0],"|"+tag("span",clas("idee",x.parentNode.parentNode)[0])[x.selectedIndex-1].innerHTML);
		else	addClass(x.parentNode.parentNode.lastChild,'choisir_taille');
		// alert(x.value);
		if(x.value=='0')	addClass(clas('panier',x.parentNode.parentNode)[0].parentNode,'choisir_taille');
}
function phone_verif(x,indicatif){//alert(indicatif+"\n"+x);
		if(x.value.indexOf(indicatif)!=-1)
				if(x.value.length==(indicatif.length+x.value.length))
						return'';
				else return"Numéro de téléphone entrée: incorrecte\n"+x.value.length+"=="+(indicatif.length+x.value.length);
		else if(x.value.length==x.value.length)
				return'';
				else return"Numéro de téléphone entrée: incorrecte\n";
}
function email_verif(x){
		return'';
}
function num_verif(x){
		return'';
}
function retraite_a(x){var alertt='';

		// if(montant.innerHTML==''){
		
				if(typeof(clas('type')[0])!='undefined'){
						if(clas('type')[0].checked){getText(montant,money(49000*nombre.value));
								// alert(week.date.value+"\n"+tag('input',dates).length);
								if(document.forms['spir'].date.value!='on')alertt+='Veuillez choisir une date dans le cadre gauche.\n\n';
						}
						if(clas('type')[1].checked){getText(montant,money(14000*nombre.value));
								// alert(week.date.value+"\n"+tag('input',dates).length);
								if(document.forms['spir'].date.value!='on')alertt+='Veuillez choisir une date dans le cadre gauche.\n\n';
						}
				}
				if(tag('h2',retraite_descr)[0].innerHTML.indexOf('eek')!=-1||clas('type')[1].checked){getText(montant,money(14000*nombre.value));
						// alert(week.date.value+"\n"+tag('input',dates).length);
						if(typeof(week.date)=='undefined'){toast("Désolé, il n'y a aucune date à laquelle s'inscrire.");alertt+="Désolé, il n'y a aucune date à laquelle s'inscrire.\n\n";}
						else if(week.date.value!='on')alertt+='Veuillez choisir une date dans le cadre gauche.\n\n';
				}
				if(tag('h2',retraite_descr)[0].innerHTML.indexOf('ocatio')!=-1)getText(montant,money(10000*nombre.value));
				// retraite.montant.value=parseInt(montant.innerHTML.replace('.',''))*nombre.value;
				
		// }else{ getText(montant,money(49000*nombre.value));retraite.montant.value=49000*nombre.value;}
		
		var tmp=tag('fieldset',retraite)[0].childNodes;
		for(var i=0;i<tmp.length;i++){//alert(tmp[i].name+"\n"+tmp[i].nodeName);
				if(tmp[i].nodeName=='INPUT')
						if(tmp[i].value==''&&tmp[i].type!='submit'||(tmp[i].name=='nombre'&&tmp[i].value==0))
								switch(tmp[i].name){case'nombre':alertt+="Veuillez entrer un nombre d'inscripts svp\n\n";break;case'date2':if(retraite.date1.value=='')alertt+="Veuillez entrer une date d'arrivée\n";if(retraite.date2.value=='')alertt+="Veuillez entrer une date d'arrivé\n\n";break;case'id':if(typeof(x)=='undefined')alertt+="Veuillez choisir le type de retraite souhaité (à gauche)\n\n";break;case 'nom':case'email':case'telephone':alertt+="Veuillez remplir tous les champs du formulaire svp ("+tmp[i].name+")\n\n";break;default:break;}
						else if(tmp[i].name=='telephone'&&!indicatifPays(indicatifp,retraite.pays.param,retraite.telephone.value))
								alertt+=paiement.param+'\n';
								
				if(tmp[i].nodeName=='SELECT')
						if(tmp[i].selectedIndex==0)
								alertt+="Veuillez remplir tous les champs du formulaire svp ("+tmp[i].name+")\n\n";
		}
		if(alertt!='')alert(alertt);
		else {
				addClass(retraite_descr,'done');
				addHtml(tag('fieldset',document.forms['retraite'])[0],'input','*',"type==submit!!value==Valider!!name==retraite_validation");
				for(var i=0;i<tag('input',retraite).length;i++)
						if(tag('input',retraite)[i].name!='retraite_validation')
								tag('input',retraite)[i].setAttribute('readonly','');
				addClass(retraite,'retraite');
				if(x.id=='payer'){
						retraite.telephone.value=retraite.pays.param+retraite.telephone.value;
						see(paiement);phone_compte_user.param=retraite.telephone.param;
				}else{
						see(retraite.retraite_validation);
						unsee(payer);
						unsee(reserve);
						addClass(retraite.retraite_validation,'actionn');
				}
		}
}


function zoom_image(x,y,z){if(typeof(z)=='undefined'){x.parentNode.removeAttribute('class');x.src='';getText(tag('figcaption',fix)[0],'');}else{
x.src=y.replace('min/','');if(z.clientX<400)getClass(x.parentNode,' zright');addClass(x.parentNode,'zoomed');}}
function resetDiapo(){setTimeout("resetClass(tmp[parseInt(diapo_intro.param)]);resetDiapo();",10000);}
function resetClass(x,y){aaaaaa=x;x.removeAttribute('class');if(typeof(y)!='undefined'){aaaaaaa=y;setTimeout("getClass(aaaaaa,aaaaaaa)",1);}else setTimeout("getClass(aaaaaa,'see')",1);}
function ret(x){//alert(clas('ret_info')[0].innerHTML);alert(clas('ret_info')[1].innerHTML);
		if(x=='ouverte')see(clas('ret_info')[0]);
		else see(clas('ret_info')[1]);
		see(document.getElementById(x));
		retraite.param=x;retraite.type=x;
		if(retraite.param=='ouverte')getText(montant,money(10000));
		if(retraite.param=='fermee')getText(montant,money(50000));retraite.montant.value=parseInt(montant.innerHTML.replace('.',''))*nombre.value;
		ajaxxme(new Array('onCreate',function(){
						if(paiement.hasAttribute('style'))paiement.removeAttribute('style');
						getHtml(document.forms['spir'],'img','','src==images/loading.gif!!alt==chargement!!style==margin-left:45%;width:75px;');
				},'onSuccess',function(x){
						getText(document.forms['spir'],x.responseText);
				}
		),'lpd.php','type='+x);
}
function sel(x){nombre.setAttribute('max',tag('span',x)[0].innerHTML);nombre.removeAttribute('readonly');nombre.value=0;if(clas('sel',x.parentNode).length!=0)if(typeof(y)=='undefined')clas('sel',x.parentNode)[0].removeAttribute('class');else getClass(clas('sel',x.parentNode)[0],y);addClass(x,'sel');}
function seeee(x){if(clas('see',$(x).parentNode).length!=0)if(typeof(y)=='undefined')clas('see',$(x).parentNode)[0].removeAttribute('class');else getClass(clas('see',x.parentNode)[0],y);addClass(x,'see');}
function see(x){//alert(clas('see',$(x).parentNode).length+"\n"+x);
if(clas('see',x.parentNode).length!=0)if(typeof(y)=='undefined')removeClass(clas('see',x.parentNode)[0],'see');addClass(x,'see');}
function unsee(x){addClass(x,'unsee');}
function cal(x,y){date_retraite.value=x;y.style.color='silver';y.style.background='gold';}
function resett(){
								// var date=new Date();
								// date.setTime(0);
								// var expire=";expires="+date.toGMTString();
								// alert(document.cookie);
								ajaxxme(new Array('onSuccess',function(){alert("ajaxxme response:\n"+document.cookie);}),'rmvcookie.php','ok=ok');
								// document.cookie="panier[]=klj";
}

























function admin(){
		// upl.onchange=function(){tag('img',complement)[0].src='';alert('ok');};
}
function admin_ssmenu(x){//alert(tag('option',x)[x.selectedIndex].innerHTML);
		// addEventListener();
		if(!inArray(x.value,new Array('fermee','ouverte',''))){
				if(inArray(tag('option',x)[x.selectedIndex].innerHTML,new Array('retraite ouverte','retraite fermee','weekend du rosaire')))ssmenu.param='retraite';
				else ssmenu.param='article';
				if(x.value=='bibles'||x.value=='livret P.D')user_name[0].value='publication';
				getText($('ajouter_'+ssmenu.param),tag('input',$(ssmenu.param))[0].parentNode.innerHTML);
				tag('input',nom[0])[0].value=x.value;
				if(!inArray(x.value,new Array('statue','tableau/icone','bibles','livret P.D')))addClass(taille[0],'unsee');
				if(!inArray(x.value,new Array('livret P.D')))addClass(autre[0],'unsee');
				if(tag('option',x)[x.selectedIndex].innerHTML!='croix')addClass(coloris[0],'unsee');
				if(tag('option',x)[x.selectedIndex].innerHTML!='bibles')addClass(couverture[0],'unsee');
				if(tag('option',x)[x.selectedIndex].innerHTML!='livret P.D'){addClass(auteur[0],'unsee');}
				if(tag('option',x)[x.selectedIndex].innerHTML!='statue')addClass(materiaux[0],'unsee');
		}else{
				// user_name
				switch(tag('option',x)[x.selectedIndex].value){
						case'ouverte':getText(admin_titre,"Retraite spirituelle ouverte");break;
						case'fermee':getText(admin_titre,"Retraite spirituelle ouverte");break;
						case'rosaire':getText(admin_titre,"Week-end du Rosaire");break;
						case'location':getText(admin_titre,"Location d'espace de repos spirituel");break;
				}
				getText(ajouter_retraite,retraite.innerHTML);
				user_name[0].value=tag('option',x)[x.selectedIndex].value;
				place[0].onchange=function(){if(this.value>0)addClass(this.parentNode,'ok')};
				date[0].onchange=function(){//alert((new Date(this.value)-1)+"\n"+(new Date()-1)+"\n"+((new Date(this.value)-1)-(new Date()-1)));
						if(((new Date(this.value)-1)-(new Date()-1))>0)addClass(this.parentNode,'ok');
				};
		}
}
function valider(x,y){
		if(y.value.length>2)
				ajaxxme(new Array('onSuccess',function(x){//toast(x.responseText);
						getText(choix_admin,x.responseText);
						for(var i=0;i<tag('div',choix_admin).length;i++)
								tag('div',choix_admin)[i].onclick=function(){
										if(typeof(tag('span',nexSib(this))[2])!='undefined'){
												nombre.value=tag('span',nexSib(this))[2].innerHTML;
												id_retraite.value=tag('span',nexSib(this))[3].innerHTML;
										}
										mod.value=tag('span',nexSib(this))[1].innerHTML;id.value=tag('span',nexSib(this))[0].innerHTML;
										getText(choix_admin,'');
								};
						}
				),'lpd.php','admin_val='+x+'&valeur='+y.value);
}
function modifier(x,y){
		if(y.value.length>2)
				ajaxxme(new Array('onSuccess',function(x){
// alert(typeof(choix));
getText(choix_admin,x.responseText);
for(var i=0;i<tag('div',choix_admin).length;i++)
		tag('div',choix_admin)[i].onclick=function(){
				id.value=tag('span',this)[0].innerHTML;
				mod.value=tag('span',this)[1].innerHTML;
				if(article_mod.value=='actif'){
						var j='';if(tag('span',this)[2].innerHTML==1)j="!!checked==checked";
						var jj='';if(tag('span',this)[2].innerHTML==0)jj="!!checked==checked";
						getHtml(tag('fieldset',modifierr)[1],addHtmll(getHtml('span')  ,  getHtml('','input','',"value==1!!name==actif!!type==radio"+j),'Activer'));
						addText(tag('fieldset',modifierr)[1],'Activer');
						addHtml(tag('fieldset',modifierr)[1],addHtmll(getHtml('span')  ,  getHtml('','input','',"value==0!!name==actif!!type==radio"+jj),'Désactiver'));
						addText(tag('fieldset',modifierr)[1],'Désactiver');
						getText(tag('legend',tag('fieldset',modifierr)[1])[0],"Cochez pour activer ou désactiver l'article.");
				}else{	//var tt=getHtml(tag('fieldset',modifierr)[1],'legend');tt=addHtmll(tag('fieldset',modifierr)[1],'input','',"value==0!!name==stock!!type==number");
						// alert(y.form.stock);
						// alert(y.form.stock.parentNode);
						if(choix.hasAttribute('class'))choix.removeAttribute('class');
						getClass(y.form.stock.parentNode,'see');
						y.form.stock.value=tag('span',this)[2].innerHTML;
						if(clas('id_options_article',this).length!=0){
								y.form.id_options_article.value=clas('id_options_article',this)[0].innerHTML;
						}
						imgss.value=tag('span',this)[3].innerHTML;
						// alert(id_options_article[0]);
						// alert(y.form.id_options_article);
						// alert(y.form.id_options_article.value);
						// alert(clas('vendus',this)[0]+"\n");
						// alert(vendus[0].innerHTML);
						venduss.value=clas('vendus',this)[0].innerHTML;
						venduss.value=clas('vendus',this)[0].innerHTML;
						addClass(y.form.stock.parentNode,'see');
						// getText(tag('legend',tag('fieldset',ajouter_retraite)[1])[0],'Entrez le stock souhaité');
						// tt.value=tag('span',this)[2].innerHTML;
						addClass(choix,'see');
						choix.innerHTML='';
						var k=addHtmll(choix,addHtmll(addHtmll(choix,'span','Titre'),'input','',"type==checkbox!!onclick==if(this.checked){this.form.fr.value=this.param;addClass(this.form.fr.parentNode,'see');}else this.form.fr.parentNode.removeAttribute('class');"));
						k.param=clas('fr',this)[0].innerHTML;
						var kk=addHtmll(choix,addHtmll(addHtmll(choix,'span','Descriprion'),'input','',"type==checkbox!!onclick==if(this.checked){this.form.fr1.value=this.param;addClass(this.form.fr1.parentNode,'see');}else this.form.fr1.parentNode.removeAttribute('class');"));
						// alert(fr1[1].innerHTML);
						kk.param=clas('fr1',this)[0].innerHTML;
						addHtmll(choix,addHtmll(addHtmll(choix,'span','Image'),'input','',"type==checkbox!!onclick==if(this.checked)addClass(upl.parentNode,'see'); else upl.parentNode.removeAttribute('class');"));
						var kkk=addHtmll(choix,addHtmll(addHtmll(choix,'span','Prix'),'input','',"type==checkbox!!onclick==if(this.checked){this.form.prix.value=this.param;addClass(prix.parentNode,'see');}else this.form.prix.parentNode.removeAttribute('class');"));
						// alert(prix[0].innerHTML);
						kkk.param=clas('prix',this)[0].innerHTML;
				}alert('ok');
				getText(choix_admin,'');
		};
}
				),'lpd.php','admin_='+x+'&valeur='+y.value);
}
function admin_semaine_ens(x){
if(EV(x)){ toast('ok');alert("fonction d'éditon de l'enseignement n°"+x+" 'tant' à faire");}
else {toast('ok');alert("fonction d'affichage de l'enseignement n° 'tant' à faire");}
}