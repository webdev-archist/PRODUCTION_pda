			var tmp='';
			var forms=new Array(tel,lig,vir);
			// var phoneLen=<?php //echo$phoneLen; ?>;
			for(var i=0;i<tag('a',paiement).length;i++){
					tag('a',paiement)[i].onclick=function(){
							// alert(tag('input',tel)[0].onclick);
							if(typeof(tag('input',tel)[0].onclick)=='object')
									for(var i=0;i<3;i++)
											tag('input',tel)[i].onclick=function(){phone_compte.value=this.form.phone_compte_user.value+' '+giveformnum(this.className.substring(3));};
							// else alert('ok');
							if(typeof(tag('input',lig)[0].onclick)!='undefined')
									{}
							if(typeof(tag('input',vir)[0].onclick)!='undefined')
									{}
							
							see(document.getElementById(this.href.substring(this.href.indexOf('#')+1)));
					};
					tag('img',paiement)[i].onclick=function(){
							// if(clas('see',paiement).length!=0)
									// clas('see',paiement)[0].removeAttribute('class');
							// addClass(tel,'see');
							see(tel);
							// alert(indicatifp);
							// alert(indicatifp.value);
							// alert(indicatifPhone(indicatifp.value));
							if(typeof(tag('input',tel)[0].onclick)!='undefined')
									for(var i=0;i<3;i++)
											tag('input',tel)[i].onclick=function(){phone_compte.value=this.form.phone_compte_user.value+' '+giveformnum(this.className.substring(3));};
							document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).click();
							
							phone_compte.value=indicatifPhone(indicatifp.value)+' '+giveformnum(document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).className.substring(3));
							phone_compte_user.value=indicatifPhone(indicatifp.value);
							
							// alert(document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).className);
							// alert(document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).className.substring(3));
							// alert(this.onclick);
							addClass(phone_compte_user,'actionn');
							addClass(paiement,'see');
							phone_compte_user.title='Remplissez ce champ';
							clas('actionn')[0].onmousedown=function(){this.removeAttribute('class');this.removeAttribute('title');};
					};
					tag('img',paiement)[i+3].onclick=function(){
							// if(clas('see',paiement).length!=0)
									// clas('see',paiement)[0].removeAttribute('class');
							// addClass(tel,'see');
							see(lig);
							// alert(this.title.substring(0,this.title.indexOf(',')).toLowerCase());
							document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).click();
							email_compte.value=document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).className.substring(5);
							addClass(phone_compte_user,'actionn');
							addClass(paiement,'see');
							phone_compte_user.title='Remplissez ce champ';
							clas('actionn')[0].onmousedown=function(){this.removeAttribute('class');this.removeAttribute('title');};
					};
					tag('img',paiement)[i+6].onclick=function(){
							// if(clas('see',paiement).length!=0)
									// clas('see',paiement)[0].removeAttribute('class');
							// addClass(tel,'see');
							see(vir);
							// alert(this.title.substring(0,this.title.indexOf(',')).toLowerCase());
							document.getElementById(this.title.substring(0,this.title.indexOf(',')).toLowerCase()).click();
							// email_compte.value=0;
							addClass(phone_compte_user,'actionn');
							addClass(paiement,'see');
							phone_compte_user.title='Remplissez ce champ';
							clas('actionn')[0].onmousedown=function(){this.removeAttribute('class');this.removeAttribute('title');};
					};
			}
			function retraite_paiement(xx){//alert("fonction à faire\nMettre les input concerné dans le formulaire principale");alert(x);
					// alert(xx.id);
					var x=xx;
					xx=tag('fieldset',xx)[0];
					var xxx=tag('input',xx);
					// alert(tag('input',tel).length);
					// alert(xxx.length);
					var k=getHtml('div');
					// alert(phone_compte_user.param);
					var bool=false;
					var alertt='';
					for(var i=0;i<xxx.length;i++){
							// if(xxx[i].type=='radio'){
									////alert('ok');
									// if(xxx[i].checked){
											// addHtml(k,xxx[i].clone());
											// bool=true;
											////alert('okok'+xxx[i].value);
									// }
							// }
							// if(xxx[i].type=='number'&&$(xx).id=='tel')
									// if(phone_verif(xxx[i],retraite.pays.param)=='')
											// addHtml(k,xxx[i].clone());
									// else {addClass(xxx[i],'actionn');alertt=phone_verif(xxx[i],retraite.pays.param);}
							// if(xxx[i].type=='number'&&$(xx).id=='vir')
									// if(num_verif(xxx[i])=='')
											// addHtml(k,xxx[i].clone());
									// else {addClass(xxx[i],'actionn');alertt=num_verif(xxx[i]);}
							// if(xxx[i].type=='text'&&$(xx).id=='vir')
									// if(xxx[i].value!='')
											// addHtml(k,xxx[i].clone());
									// else {addClass(xxx[i],'actionn');alertt='Entrez un nom de titulaire de la carte bancaire';}
							// if(xxx[i].type=='text'&&$(xx).id=='lig')
									// if(email_verif(xxx[i])=='')
											// addHtml(k,xxx[i].clone());
									// else {addClass(xxx[i],'actionn');alertt=email_verif(xxx[i]);}
							if(xxx[i].type=='radio'){
									// alert('ok');
									if(xxx[i].checked){
											addHtml(k,xxx[i].clone());
											bool=true;
											// alert('okok'+xxx[i].value);
									}
							}
							// alert("phone_compte_user.value\n"+phone_compte_user.value.substring(0,5));
							// alert("xx.phone_compte_user_checkbox\n"+x.phone_compte_user_checkbox);
							if(xxx[i].name=='phone_compte_user'&&!x.phone_compte_user_checkbox.checked)
									if(!indicatifPays(indicatifp,phone_compte_user.value.substring(0,5),phone_compte_user.value.substring(5)))		
											alertt+=paiement.param;
									// alert(paiement.param);
									// if(phone_verif(xxx[i],retraite.pays.param)!=''){addClass(xxx[i],'actionn');alertt=phone_verif(xxx[i],retraite.pays.param);}
							if(xxx[i].name=='numero')
									if(num_verif(xxx[i])!=''){addClass(xxx[i],'actionn');alertt=num_verif(xxx[i]);}
							if(xxx[i].name=='nomp'&&xx.id=='vir')
									if(xxx[i].value==''){addClass(xxx[i],'actionn');alertt='Entrez un nom de titulaire de la carte bancaire';}
							if(xxx[i].name=='email_compte_user')
									if(email_verif(xxx[i])!=''){addClass(xxx[i],'actionn');alertt=email_verif(xxx[i]);}
					}
					if(bool&&alertt==''){
							// alert(tag('input',xx.parentNode).length+"\n"+xx.id);
							// for(var i=0;i<tag('input',xx.parentNode).length;i++){
							for(var i=tag('input',xx.parentNode).length-1;i>=0;i--){
									// if(tag('input',paiement)[i].hasAttribute('required'))
											// tag('input',paiement)[i].removeAttribute('required');
									// else if(tag('input',paiement)[i].hasAttribute('readonly'))
													// tag('input',paiement)[i].removeAttribute('readonly');http://localhost/ong/librairie/images/orangemoney.jpg
									
									
									// alert(tag('input',xx.parentNode)[i].name+"\n"+tag('input',xx.parentNode)[i].value+"\n"+tag('input',xx.parentNode)[i].type+"\n"+i);
									
									
									// if(tag('input',xx.parentNode)[i].name=='phone_compte_user'){
											// alert(tag('input',xx.parentNode)[i].name);
											// tag('input',xx.parentNode)[i].removeAttribute('required');
									// }
									if(tag('input',xx.parentNode)[i].type=='radio'){
											if(tag('input',xx.parentNode)[i].checked)
													addHtml(retraite,tag('input',xx.parentNode)[i]);
									}else	addHtml(retraite,tag('input',xx.parentNode)[i]);
							}
							// addHtml(retraite,paiement);
							paiement.removeAttribute('class');
							addClass(retraite.retraite_validation,'see actionn');
							unsee(reserve);
							unsee(payer);
					// }else alert(bool+"\nalertt\n"+alertt+'l');
					}else alert(alertt);
			}
			function validForm(x){ error='';var boolradio=false;
			
					for(var i=0;i<tag('input',tag('fieldset',x)[0]).length;i++)
							if(tag('input',tag('fieldset',x)[0])[i].type=='number'){
									if(tag('input',tag('fieldset',x)[0])[i].name=='phone_compte_user'&&!x.phone_compte_user_checkbox.checked){//alert(tag('input',tag('fieldset',x)[0])[i]+"\n"+tag('input',tag('fieldset',x)[0])[i].value);
											if(!indicatifPays(indicatifp,phone_compte_user.value.substring(0,5),phone_compte_user.value.substring(5)))		
													error+=paiement.param;
											// else alert('error');
											
											// if(tag('a',x)[i].value.length==phoneLen)	error+="Le numéro que vous avez entré comporte une erreur, il doit contenir "+phoneLen+" chiffres\n";
									}//else alert(x.phone_compte_user_checkbox);
							}else if(tag('input',tag('fieldset',x)[0])[i].type=='radio'){
									if(tag('input',tag('fieldset',x)[0])[i].checked)
											boolradio=true;
									// alert(tag('input',tag('fieldset',x)[0])[i].checked);
							}
									if(!boolradio)error+="Choisissez un opérateur svp";
					if(boolradio)if(error!=''){alert(error);return false;}else{paiement.removeAttribute('class'); return true;}
					// else return false;
					else {toast('informations corresctes');}
						// {}
			}