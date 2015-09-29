<html>
  <head>
    <meta charset="UTF-8">
	<title>Anaphylaxie - Médecine générale</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
     <?php
       require_once('../includes/functions.php');
     ?>
  </head>
  <body>
  
	<div class="logo">
		<img id="uds" src="../img/logo_uds.jpg"/>
		<img id="unistra" src="../img/logo_fac_strasbourg.jpg"/>
	</div>
	
    <div id="title">
		<h2>QUESTIONNAIRE SUR LA PRISE EN CHARGE DES ANAPHYLAXIES EN MILIEU PRÉ-HOSPITALIER ET AUX URGENCES<h2>
	</div>
    
    <form action="submit.php" method="POST">
      <ol>
	  
        <li>
          <p>Quelle est votre spécialité ?</p>
          <?php checkbox('Urgentiste', 'reponse') ?>
          <?php checkbox('Anesthésiste-réanimateur', 'reponse') ?>
        </li>

        <li>
          <p>Dans quelle structure exercez-vous ?</p>
          <?php checkbox('CHU',  'reponse') ?>
          <?php checkbox('CHR',  'reponse') ?>
          <?php checkbox('CH',   'reponse') ?>
          <?php checkbox('SAMU', 'reponse') ?>
          <?php checkbox('SMUR', 'reponse') ?>
        </li>
        
        <li>
          <p>Depuis combien de temps exercez-vous ?</p>
          <?php radiobutton('rb2', '0-5',   '0-5 ans',  'reponse') ?>
          <?php radiobutton('rb2', '6-10',  '6-10 ans', 'reponse') ?>
          <?php radiobutton('rb2', '11-20', '11-20 ans','reponse') ?>
          <?php radiobutton('rb2', '20+',   '>20 ans',  'reponse') ?>
          <?php null_radiobutton('rb2') ?>
        </li>
    
        <li>
          <p>Etes-vous :</p>
          <?php radiobutton('rb3', 'm', 'un homme',  'reponse') ?>
          <?php radiobutton('rb3', 'f', 'une femme', 'reponse') ?>
          <?php null_radiobutton('rb3') ?>
        </li>
        
        <li>
          <p>À combien de cas d’anaphylaxie nécessitant un traitement en urgence et une surveillance rapprochée estimez-vous être confronté chaque année ?</p>
          <?php radiobutton('rb4', '0-5',   '0-5',  'reponse') ?>
          <?php radiobutton('rb4', '6-10',  '6-10', 'reponse') ?>
          <?php radiobutton('rb4', '11-15', '11-15','reponse') ?>
          <?php radiobutton('rb4', '15+',   '>15',  'reponse') ?>
          <?php null_radiobutton('rb4') ?>
        </li>
    
        <li>
          <p>Connaissez-vous les recommandations de prise en charge :</p>
          <?php checkbox('SFAR (Société Française d’Anesthésie et de Réanimation)',      'reponse') ?>
          <?php checkbox('NICE (National Institute for Health and Care Excellence, UK)', 'reponse') ?>
          <?php checkbox('EAACI (European Academy of Allergy and Clinical Immunology)',  'reponse') ?>
          <?php checkbox('AAAAI (American Academy of Allergy Asthma and Immunology)',    'reponse') ?>
          <?php checkbox('WAO (World Allergy Organization)',                             'reponse') ?>
          <?php checkbox('Resuscitation Council (UK)',                                   'reponse') ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
        
        <li>
          <p>Quelle classification de l’anaphylaxie utilisez-vous ?</p>
          <?php checkbox('Ring et Messmer', 'reponse') ?>
          <?php checkbox('Gell et Coombs',  'reponse') ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>

        <li>
          <p>En cas de suspicion d’allergie, quels signes cliniques vous orientent vers une anaphylaxie ?</p>
          <table id="signes_cliniques">
            <tr>
              <td>
                <?php checkbox('Urticaire',                    'reponse') ?>
                <?php checkbox('Prurit',                       'reponse') ?>
                <?php checkbox('Rhinite',                      'reponse') ?>
                <?php checkbox('Conjonctivite',                'reponse') ?>
                <?php checkbox('Erythème',                     'reponse') ?>
                <?php checkbox('Œdème de la face',             'reponse') ?>
                <?php checkbox('Œdème du tronc',             'reponse') ?>
                <?php checkbox('Œdème des membres inférieurs', 'reponse') ?>
                <?php checkbox('Œdème des membres supérieurs', 'reponse') ?>
                <?php checkbox('Œdème de Quincke',             'reponse') ?>
                <?php checkbox('Essoufflement',                'reponse') ?>
                <?php checkbox('Toux',                         'reponse') ?>
                <?php checkbox('Hyper-réactivité bronchique',  'reponse') ?>
                <?php checkbox('Bronchospasme / asthme',       'reponse') ?>
                <?php checkbox('Désaturation',                 'reponse') ?>
              </td>
              <td>
                <?php checkbox('Hypotension artérielle',       'reponse') ?>
                <?php checkbox('Syncope',                      'reponse') ?>
                <?php checkbox('Hypersialorrhée',              'reponse') ?>
                <?php checkbox('Myalgies',                     'reponse') ?>
                <?php checkbox('Dysphagie',                    'reponse') ?>
                <?php checkbox('Dysphonie',                    'reponse') ?>
                <?php checkbox('Bradycardie',                  'reponse') ?>
                <?php checkbox('Troubles du rythme',           'reponse') ?>
                <?php checkbox('Tachycardie',                  'reponse') ?>
                <?php checkbox('Troubles de la conscience',    'reponse') ?>
                <?php checkbox('Nausées',                      'reponse') ?>
                <?php checkbox('Vomissements',                 'reponse') ?>
                <?php checkbox('Douleurs abdominales',         'reponse') ?>
                <?php checkbox('Diarrhées',                    'reponse') ?>
                <?php checkbox('Etat de choc',                 'reponse') ?>
              </td>
            </tr>
          </table>
        </li>
        
        <li>
          <p>Disposez-vous d’un protocole de prise en charge des urgences anaphylactiques ?</p>
          <?php radiobutton('rb5', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb5', 'non', 'Non', 'reponse inline') ?>
          <?php null_radiobutton('rb5') ?>
        </li>
        
        <li>
          <p>Demandez-vous un bilan biologique ?</p>
          <?php radiobutton('rb6', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb6', 'non', 'Non', 'reponse inline') ?>
          <?php null_radiobutton('rb6') ?>
		  
		  <p>Si oui, lequel ?</p>
		  <?php checkbox('Tryptase sérique',      'reponse') ?>
		  <?php checkbox('Histamine plasmatique', 'reponse') ?>
		  <?php checkbox('IgE spécifiques',       'reponse') ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
        
        <li>
          <p>Si vous demandez un bilan biologique, dans quels délais ?</p>
		  <table id="bilan_bio" class="border">
			<tr>
			  <td>Tryptase sérique</td>
			  <td>
                <?php radiobutton('rb7', 'oui', 'Dès la prise en charge du patient', 'reponse') ?>
                <?php radiobutton('rb7', 'non', '< 1h', 'reponse') ?>
                <?php radiobutton('rb7', 'non', '> 1h', 'reponse') ?>
                <?php null_radiobutton('rb7') ?>
		      </td>
			</tr>
			<tr>
			  <td>Histamine plasmatique</td>
			  <td>
                <?php radiobutton('rb7', 'oui', 'Dès la prise en charge du patient', 'reponse') ?>
                <?php radiobutton('rb7', 'non', '< 1h', 'reponse') ?>
                <?php radiobutton('rb7', 'non', '> 1h', 'reponse') ?>
                <?php null_radiobutton('rb7') ?>
		      </td>
			</tr>
			<tr>
			  <td>IgE</td>
			  <td>
                <?php radiobutton('rb7', 'oui', 'Dès la prise en charge du patient', 'reponse') ?>
                <?php radiobutton('rb7', 'non', '< 1h', 'reponse') ?>
                <?php radiobutton('rb7', 'non', '> 1h', 'reponse') ?>
                <?php null_radiobutton('rb7') ?>
		      </td>
			</tr>
		  </table>
        </li>
        
        <li>
          <p>Répétez-vous ce bilan au cours de la prise en charge ?</p>
          <?php radiobutton('rb7', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb7', 'non', 'Non', 'reponse inline') ?>
          <?php null_radiobutton('rb7') ?>
        </li>
		
		<li>
		  <p>Gardez-vous le patient en surveillance après avoir stabilisé son état clinique et si oui, combien de temps (heures) ?</p>
		  <table class="border txt_table">
		    <tr>
			  <td></td>
			  <td class="title center">Temps de surveillance</td>
		    </tr>
		    <tr>
              <td class="padded grade_1">Grade I</td>
			  <td><?php text() ?></td>
		    </tr>
		    <tr>
              <td class="padded grade_2">Grade II</td>
			  <td><?php text() ?></td>
		    </tr>
		    <tr>
              <td class="padded grade_3">Grade III</td>
			  <td><?php text() ?></td>
		    </tr>
		  </table>
		</li>
		
        <li>
          <p>Quels traitements de première intention instaurez-vous en fonction du grade (classification de Ring et Messmer) ? :</p>
          <table id="traitements1" class="border center_input">
            <tr>
              <td class="padded" rowspan=2">Symptômes</td>
              <td class="title center" colspan="6">Traitements de première intention</td>
            </tr>
            <tr>
              <td class="padded center title">Antihistaminiques<br/>per os</td>
              <td class="padded center title">Antihistaminiques<br/>IV</td>
              <td class="padded center title">Corticoïdes<br/>per os</td>
              <td class="padded center title">Corticoïdes<br/>IV</td>
              <td class="padded center title">Adrénaline<br/>IM</td>
              <td class="padded center title">Adrénaline<br/>IV</td>
            </tr>
            <tr>
              <td class="padded grade_1">Signes cutanéo-muqueux isolés</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_2">Tachycardie</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_2">Hypotension modérée</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_2">Hyper-réactivité bronchique</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_2">Toux</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_2">Nausées</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Œdème de Quincke</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Etat de choc</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Bradycardie</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Troubles du rythme</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Bronchospasme</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Troubles de la conscience</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
            <tr>
              <td class="padded grade_3">Vomissements / diarrhées</td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
              <td><?php checkbox('', 'reponse') ?></td>
            </tr>
          </table>
      
          <table id="legend">
            <tr>
              <td class="padded grade_1">Grade I</td>
              <td class="padded grade_2">Grade II</td>
              <td class="padded grade_3">Grade III</td>
            </tr>
          </table>
      
        </li>
    
		<li>
		  <p>Quels traitements mettez-vous en place en cas de :</p>
			<table id="traitements2" class="border center_input">
				<tr>
					<td></td>
					<td class="padded center title">Stridor surajouté</td>
					<td class="padded center title">Dyspnée surajoutée</td>
					<td class="padded center title">Hypotension ou collapsus surajouté</td>
				</tr>
				<tr>
					<td class="padded">Adrénaline par voie intra-musculaire</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Adrénaline par voie intra-veineuse</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Corticothérapie par voie intra-veineuse</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Aérosols de béta2-mimétiques</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Aérosols de corticoïdes</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Aérosols d’adrénaline</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Oxygénothérapie à haut débit</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Pose d’une voie veineuse périphérique</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Remplissage avec cristalloïdes</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Position allongée en Trendelenburg</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Position semi-assise</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
				<tr>
					<td class="padded">Intubation oro-trachéale</td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				    <td><?php checkbox('', 'reponse') ?></td>
				</tr>
			</table>

		</li>
	
        <li>
          <p>Prévoyez-vous une consultation en allergologie à distance ?</p>
          <?php radiobutton('rb7', 'oui',     'Oui', 'reponse inline') ?>
          <?php radiobutton('rb7', 'non',     'Non', 'reponse inline') ?>
          <?php radiobutton('rb7', 'parfois', 'En fonction de la sévérité des symptômes', 'reponse inline') ?>
          <?php null_radiobutton('rb7') ?>
        </li>
		
		<li>
			<p>A la sortie du patient, prescrivez-vous des stylos auto-injecteurs d’adrénaline, des anti-histaminiques, une corticothérapie ?</p>
            <?php radiobutton('rb7', 'non', 'Non', 'reponse') ?>
            <?php radiobutton('rb7', 'oui', 'En fonction du grade (Classification de Ring et Messmer) : Dosage ? (mg/j)', 'reponse') ?>
            <?php null_radiobutton('rb7') ?>
			<table class="border txt_table">
				<tr>
					<td></td>
					<td class="padded title">Anti-histaminiques</td>
					<td class="padded title">Corticothérapie</td>
					<td class="padded title">Adrénaline IM</td>
				</tr>
				<tr>
					<td class="padded grade_1">Grade I</td>
					<td><?php text() ?></td>
					<td><?php text() ?></td>
					<td><?php text() ?></td>
				</tr>
				<tr>
					<td class="padded grade_2">Grade II</td>
					<td><?php text() ?></td>
					<td><?php text() ?></td>
					<td><?php text() ?></td>
				</tr>
				<tr>
					<td class="padded grade_3">Grade III</td>
					<td><?php text() ?></td>
					<td><?php text() ?></td>
					<td><?php text() ?></td>
				</tr>
			</table>
		</li>
		
        <li>
          <p>Disposez-vous d’un document à remettre au patient expliquant les symptômes d’anaphylaxie devant le conduire à reconsulter en urgence ou à appeler le 15 ?</p>
          <?php radiobutton('rb8', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb8', 'non', 'Non', 'reponse inline') ?>
          <?php null_radiobutton('rb8') ?>
        </li>
        
        <li>
          <p>En cas de prescription de stylos auto-injecteurs d’adrénaline, formez-vous le patient à leur usage ?</p>
          <?php radiobutton('rb9', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb9', 'non', 'Non', 'reponse inline') ?>
          <?php null_radiobutton('rb9') ?>
          <div>Si non : pourquoi ?&nbsp;&nbsp;<?php text() ?></div>
        </li>
        
      </ol>
      
      <button type="submit">Valider</button>
      
    </form>
  </body>
</html>