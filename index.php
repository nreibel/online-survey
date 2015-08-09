<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
     <?php require('functions.php') ?>
  </head>
  <body>
    <div id="divTitle">QUESTIONNAIRE SUR LA PRISE EN CHARGE DES ANAPHYLAXIES EN MÉDECINE GÉNÉRALE</div>
    
    <form action="submit.php" method="POST">
      <ol>

        <li>
          <p>Dans quelle structure exercez-vous ?</p>
          <?php radiobutton('rb1', 'cabinet', 'Cabinet libéral', 'reponse') ?>
          <?php radiobutton('rb1', 'assoc',   'Maison médicales / association', 'reponse') ?>
        </li>
        
        <li>
          <p>Où exercez-vous ?</p>
          <?php checkbox('Milieu rural', 'reponse') ?>
          <?php checkbox('Milieu semi-rural', 'reponse') ?>
          <?php checkbox('Ville', 'reponse') ?>
        </li>
        
        <li>
          <p>Depuis combien de temps exercez-vous ?</p>
          <?php radiobutton('rb2', '0-5',   '0-5 ans',  'reponse') ?>
          <?php radiobutton('rb2', '6-10',  '6-10 ans', 'reponse') ?>
          <?php radiobutton('rb2', '11-20', '11-20 ans','reponse') ?>
          <?php radiobutton('rb2', '20+',   '>20 ans',  'reponse') ?>
        </li>
    
        <li>
          <p>Etes-vous :</p>
          <?php radiobutton('rb3', 'm', 'un homme',  'reponse') ?>
          <?php radiobutton('rb3', 'f', 'une femme', 'reponse') ?>
        </li>
        
        <li>
          <p>À combien de cas d’anaphylaxie nécessitant un traitement en urgence et une surveillance rapprochée estimez-vous être confronté chaque année ?</p>
          <?php radiobutton('rb4', '0-5',   '0-5',  'reponse') ?>
          <?php radiobutton('rb4', '6-10',  '6-10', 'reponse') ?>
          <?php radiobutton('rb4', '11-15', '11-15','reponse') ?>
          <?php radiobutton('rb4', '15+',   '>15',  'reponse') ?>
        </li>
    
        <li>
          <p>Connaissez-vous les recommandations de prise en charge :</p>
          <?php checkbox('SFAR (Société Française d’Anesthésie et de Réanimation)',      'reponse') ?>
          <?php checkbox('NICE (National Institute for Health and Care Excellence, UK)', 'reponse') ?>
          <?php checkbox('EAACI (European Academy of Allergy and Clinical Immunology)',  'reponse') ?>
          <?php checkbox('AAAAI (American Academy of Allergy Asthma and Immunology)',    'reponse') ?>
          <?php checkbox('WAO (World Allergy Organization)',                             'reponse') ?>
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
        </li>
        
        <li>
          <p>Dans quels cas transférez-vous le patient en milieu hospitalier en urgence ?</p>
          <?php checkbox('Signes cutanéo-muqueux isolés', 'reponse') ?>
          <?php checkbox('Atteinte multi-viscérale modérée : Hyper-réactivité bronchique / Toux / Dyspnée / Nausées / Tachycardie / Hypotension légère',  'reponse') ?>
          <?php checkbox('Atteinte multi-viscérale sévère : Œdème de Quincke / Bradycardie / Troubles du rythme / Bronchospasme ou asthme / Troubles de la conscience / Vomissements, diarrhées / Etat de Choc',  'reponse') ?>
        </li>
        
        <li>
          <p>Demandez-vous un bilan biologique ?</p>
          <?php radiobutton('rb6', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb6', 'non', 'Non', 'reponse inline') ?>
        </li>
        
        <li>
          <p>Quels les traitements de première intention instaurez-vous en fonction du grade (classification de Ring et Messmer) ? :</p>
          <table id="traitements">
            <tr>
              <td class="padded" rowspan=2">Symptômes</td>
              <td class="title" colspan="5">Traitements de première intention</td>
            </tr>
            <tr>
              <td class="padded title">Antihistaminiques<br/>per os</td>
              <td class="padded title">Antihistaminiques<br/>IV</td>
              <td class="padded title">Corticoïdes<br/>per os</td>
              <td class="padded title">Corticoïdes<br/>IV</td>
              <td class="padded title">Adrénaline<br/>IM</td>
            </tr>
            <tr>
              <td class="padded grade_1">Signes cutanéo-muqueux isolés</td>
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
            </tr>
            <tr>
              <td class="padded grade_2">Hypotension modérée</td>
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
            </tr>
            <tr>
              <td class="padded grade_2">Toux</td>
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
            </tr>
            <tr>
              <td class="padded grade_3">Œdème de Quincke</td>
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
            </tr>
            <tr>
              <td class="padded grade_3">Bradycardie</td>
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
            </tr>
            <tr>
              <td class="padded grade_3">Bronchospasme</td>
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
            </tr>
            <tr>
              <td class="padded grade_3">Vomissements / diarrhées</td>
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
          <p>Prévoyez-vous une consultation en allergologie à distance ?</p>
          <?php radiobutton('rb7', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb7', 'non', 'Non', 'reponse inline') ?>
        </li>
        
        <li>
          <p>Si vous n’hospitalisez pas le patient, quels traitements préventifs prescrivez-vous ?</p>
          <?php checkbox('Corticoïdes per os sur une courte durée. Quelle dose ?&nbsp;', 'reponse inline') ?><?php text() ?>
          <?php checkbox('Beta2-mimétiques en inhalation',      'reponse') ?>
          <?php checkbox('Anti-leucotriènes en inhalation',     'reponse') ?>
          <?php checkbox('Anti-histaminiques',                  'reponse') ?>
          <?php checkbox('Stylos auto-injecteurs d’adrénaline', 'reponse') ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
        
        <li>
          <p>Disposez-vous d’un document à remettre au patient expliquant les symptômes d’anaphylaxie devant le conduire à reconsulter en urgence ou à appeler le 15 ?</p>
          <?php radiobutton('rb8', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb8', 'non', 'Non', 'reponse inline') ?>
        </li>
        
        <li>
          <p>En cas de prescription de stylos auto-injecteurs d’adrénaline, formez-vous le patient à leur usage ?</p>
          <?php radiobutton('rb9', 'oui', 'Oui', 'reponse inline') ?>
          <?php radiobutton('rb9', 'non', 'Non', 'reponse inline') ?>
          <div>Si non : pourquoi ?&nbsp;&nbsp;<?php text() ?></div>
        </li>
        
      </ol>
      
      <button type="submit">Valider</button>
      
    </form>
  </body>
</html>