<?php
		if($_GET['menu']=='weekend-de-loisir'){?>
				<div id='retraite_infos' class='retraite_infos'>
						<iframe src='calendrier.php'></iframe>
						<INPUT TYPE='number' id="nbre_jours" placeholder='0 Jours' size="10" />
				</div>
		<?php }else{
?>
<div id='retraite_infos'>
		<?php
		if($_GET['menu']=='retraite-de-priere-spirituelle-esprit-saint-gregorienne'){ ?>
		<form id='ouverte'>
				<div class="detail">
						<div><u>Siège</u>: Abidjan II Plateaux rue des Jardins, à la <a href='index.php?menu=lieu-librairie' target='_blank'>Librairie Piussance Divine</a>.</div>
						<div><u>Durée</u>: 7jours complets, de samedi à samedi.</div>
						<div><u>Inscription</u>: <span>en-ligne, ou, à la <a href="#contact">Librairie Puissance Divine</a></span>
								<u>Contact 1</u><span>: 00225-09-36-06-72</span>
								<u>Contact 2</u><span>: 00225-47-81-10-92</span>
								<u>Frais de participation</u><span>: 49.000 Fcfa</span>
						</div>
						
				</div>
				<h3><a href="javascript:out('calendrier');" target='_blank'>Programme</a></h3>
				<ul onclick="out('calendrier');">
						<li>Samedi
								<div>
										<u>14H30</u><span>: Départ d'Abidjan (<a href='index.php?menu=lieu-librairie' target='_blank'>Librairie Piussance Divine</a>)</span>
										<u>15H30</u><span>: Arrivée à <a href='index.php?menu=lieu-bolobi' target='_blank'>Bolobi</a>: hébergement-Informations</span>
										<u>18H</u><span>: Restauration</span>
										<u>19H30</u><span>: Chapelet Saint Grégoire, Messe Grégorienne, Petit déjeuner->Repos</span>
								</div>
						</li>
						<li>Dimanche
								<div>
										<u>11H30</u><span>: Chapelet Saint Grégoire</span>
										<u>12H30</u><span>: Restauration - Pause</span>
										<u>15H</u><span>: Prière d'intercession, Exhortation/Débat</span>
										<u>17H-18H</u><span>: Pause</span>
										<u>18H</u><span>: Restauration</span>
										<u>19H</u><span>: Exhortation/Débat</span>
										<u>20H30</u><span>: Chapelet du Coeur d'Accueil de Jésus</span>
										<u></u><span>: Repos</span>
								</div>
						</li>
						<li>Lundi
								<div>
										<u>06H30-08H30</u><span>: Chapelet Saint Grégoire, Messe Grégorienne</span>
										<u>08H30</u><span>: Petit-déjeuner->Pause</span>
										<u>10H</u><span>: Chapelet à l'Esprit-Saint; Enseignement</span>
										<u>12H</u><span>: Restauration->Pause</span>
										<u>15H</u><span>: Prière d'intercession, Exhortation/Débat</span>
										<u>17H</u><span>: Confession</span>
										<u>18H</u><span>: Restauration</span>
										<u>19H</u><span>: Exhortation/Débat, Chapelet du Coeur d'Accueil de Jésus</span>
										<u></u><span>: Repos</span>
								</div>
						</li>
						<li>Mardi
								<div>Idem</div>
						</li>
						<li>Mercredi
								<div>Idem</div>
						</li>
						<li>Jeudi
								<div>Idem</div>
						</li>
						<li>Vendredi
								<div>Idem</div>
						</li>
						<li>Samedi
								<div>
										<u>06H30-08H30</u><span>: Chapelet Saint Grégoire, Messe Grégorienne</span>
										<u>08H30</u><span>: Petit-déjeuner->Pause</span>
										<u>10H</u><span>: Chapelet à l'Esprit-Saint, Enseignement</span>
										<u>12H</u><span>: Restauration, Opération propreté, Départ pour Abidjan</span>
								</div>
						</li>
						<li>Fin de la retraite</li>
				</ul>
		</form>
		<form id='fermee'>
				<div class="detail">
						<div><u>Lieu</u>: <a href='index.php?menu=lieu-bolobi' target='_blank'>Sanctuaire notre Dame du Rosaire de Bolobi</a></div>
						<div><u>Durée</u>: 2 jours complets, de vendredi à dimanche.</div>
						<div><u>Inscription</u><span>: en-ligne ou par téléphone.</span>
								<u>Contact 1</u><span>: 00225-09-36-06-72</span>
								<u>Contact 2</u><span>: 00225-47-81-10-92</span>
								<u>Frais de participation</u><span>: 14.000 Fcfa </span>
								<u>Transport (car)</u><span>: 3.500 Fcfa</span>
						</div>
				</div>
				<h3><a href="javascript:out('calendrier');" target='_blank'>Programme</a></h3>
				<ul onclick="out('calendrier');" class='prog_ret'>
						<li>Vendredi
								<div>
										<u></u><span> Arrivée à <a href='index.php?menu=lieu-librairie' target='_blank'>Bolobi</a>. Installation.</span>
										<u>18H - 18H30</u><span> : <strong>Prière</strong> à l'<strong>Esprit-Saint</strong></span>
										<u>18H30 - 19H</u><span> : Informations</span>
										<u>19H - 20H30</u><span> : Repas</span>
										<u>20H30 - 22H</u><span> : Enseignement</span>
										<u>22H</u><span> : Couvre-feu</span>
								</div>
						</li>
						<li>Samedi
								<div>
										<u>06H30 - 07H</u><span> : <strong>Prière</strong> à l'<strong>Esprit-Saint</strong></span>
										<u>07H - 08H</u><span> : Petit-déjeûner</span>
										<u>08H - 10H</u><span> : Enseignement -> pause</span>
										<u>10H - 11H30</u><span> : Messe</span>
										<u>12H - 14H</u><span> : Repas -> pause</span>
										<u>14H - 14H30</u><span> : Chapelet du coeur d'accueil de Jésus</span>
										<u>14H30 - 15H</u><span> : Cantiques</span>
										<u>15H - 15H30</u><span> : Prières d'intercession et de réparation</span>
										<u>15H30 - 17H</u><span> : Exhortation/Débat</span>
										<u>17H-18H</u><span> : Confession</span>
										<u>18H - 19H</u><span> : Pause</span>
										<u>19H - 20H</u><span> : Repas</span>
										<u>20H - 22H</u><span> : Cantique- Rosaire</span>
										<u>22H</u><span> : Couvre-feu</span>
								</div>
						</li>
						<li>Dimanche<div>
										<u>06H30 - 07H</u><span> : <strong>Prière</strong> à l'<strong>Esprit-Saint</strong></span>
										<u>07H - 08H</u><span> : Petit-déjeûner</span>
										<u>08H - 09H</u><span> : Opération propreté</span>
										<u>09H - 10H30</u><span> : Messe (à l'<strong>Esprit-Saint</strong>) </span>
										<u>10H30 - 11H</u><span> : Prière de protection contre la sorcellerie et le mauvais sort</span>
										<u>11H - 12H</u><span>: Témoignages</span>
										<u>12H - 13H</u><span>: Repas -> retour à Abidjan</span>
								</div>
						</li>
						<li>Fin de la retraite</li>
				</ul>
		</form> <?php }elseif($_GET['menu']=='retraite-spirituelle-abidjan-week-ends-rosaire'){ ?>
				<div class="detail">
						<div><u>Lieu</u>: <a href='index.php?menu=lieu-bolobi' target='_blank'>Sanctuaire notre Dame du Rosaire de Bolobi</a></div>
						<div><u>Durée</u>: 1 week-end, de Vendredi à Dimanche.</div>
						<div><u>Inscription</u><span>: en-ligne ou par téléphone.</span>
								<u>Contact 1</u><span>: 00225-09-36-06-72</span>
								<u>Contact 2</u><span>: 00225-47-81-10-92</span>
								<u>Hébergement (lit+repas)</u><span>: 14.000 Fcfa </span>
								<u>Transport (car)</u><span>: 3.500 Fcfa</span>
						</div>
				</div>
				<h3><a href="javascript:out('calendrier');" target='_blank'>Programme</a></h3>
				<ul style='padding-bottom:300px'>
						<li>Vendredi:
								<ul>
										<li>Installation</li>
										<li>Repas</li>
										<li>18h30-20h30: Récitation du Rosaire</li>
										<li>20h30-21h: Repas</li>
										<li>Causerie - Débats</li>
									
								</ul>
						</li>
						<li>Samedi:
								<ul>
										<li>06h30-07h: Petit-déjeuner</li>
										<li>07h-08h : Chapelet du Saint-Esprit, chants à l'Esprit-Saint</li>
										<li>Louange</li>
										<li>Enseignement</li>
										<li>11h-12h30: Messe</li>
										<li>Repas</li>
										<li>Prière de 15h</li>
										<li>Rosaire</li>
										<li>Repas</li>														
								</ul>
						</li>
						<li>Dimanche:
								<ul>
										<li>06h30-07h: Petit-déjeuner</li>
										<li>07h-09h : Rosaire</li>
										<li>Témoignages</li>
										<li>09h30-11h: Messe</li>
										<li>Repas</li>														
										<li>Fin de la retraite</li>
								</ul>
						</li>
				</ul>
				
		<?php }elseif($_GET['menu']=='location-espace-de-priere-abidjan'){ ?>
				<div class="detail">
						<div><u>Siège</u>: Abidjan II plateaux rue des Jardins, à la <a href='index.php?menu=lieu-librairie' target='_blank'>Librairie Piussance Divine</a>.</div>
						<div><u>Inscription</u>: <span>en-ligne, par téléphone, ou, à la <a href="#contact">Librairie Puissance Divine</a></span>
								<u>Contact 1</u><span>: 00225-09-36-06-72</span>
								<u>Contact 2</u><span>: 00225-47-81-10-92</span>
						</div>
						
				</div>
				<!--<h3><u>Activité de loisir :</u></h3>
						<ul>
								<li>marche, découverte en forêt et plantation</li>
								<li>pêche et maraichage</li>
								<li>lecture, causerie, débat, jeuxde société etc...</li>													
						</ul>-->
		<?php }elseif($_GET['menu']=='assistance-spirituelle-abidjan'){ ?>
				
		<?php } ?>
</div>
<?php } ?>