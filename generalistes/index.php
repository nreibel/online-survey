<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Anaphylaxie - Médecine générale</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <?php
      require_once('../includes/functions.php');
      require_once('../includes/RadioButtonList.php');
    ?>
  </head>
  <body>

    <div class="logo">
      <img id="uds"     src="../img/logo_uds.jpg"             alt="Université de Strasbourg" />
      <img id="unistra" src="../img/logo_fac_strasbourg.jpg"  alt="Faculté de médecine de Strasbourg" />
    </div>

    <div id="title">
      <h2>QUESTIONNAIRE SUR LA PRISE EN CHARGE DES ANAPHYLAXIES EN MÉDECINE GÉNÉRALE</h2>
    </div>

    <form action="submit.php" method="post">
      <ol>

        <li>
          <p>Dans quelle structure exercez-vous ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('cabinet', 'Cabinet libéral',               'reponse block');
            $rbl->add_radiobutton('assoc',   'Maison médicale / association', 'reponse block');
            $rbl->print_html();
          ?>
        </li>

        <li>
          <p>Où exercez-vous ?</p>
          <?php
            checkbox('Milieu rural',      'reponse block');
            checkbox('Milieu semi-rural', 'reponse block');
            checkbox('Ville',             'reponse block');
          ?>
        </li>

        <li>
          <p>Depuis combien de temps exercez-vous ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('0-5',   '0-5 ans',   'reponse block');
            $rbl->add_radiobutton('6-10',  '6-10 ans',  'reponse block');
            $rbl->add_radiobutton('11-20', '11-20 ans', 'reponse block');
            $rbl->add_radiobutton('20+',   '>20 ans',   'reponse block');
            $rbl->print_html();
          ?>
        </li>

        <li>
          <p>Etes-vous :</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('m', 'Un homme',  'reponse block');
            $rbl->add_radiobutton('f', 'Une femme', 'reponse block');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>À combien de cas d’anaphylaxie nécessitant un traitement en urgence et une surveillance rapprochée estimez-vous être confronté chaque année ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('0-5',   '0-5',   'reponse block');
            $rbl->add_radiobutton('6-10',  '6-10',  'reponse block');
            $rbl->add_radiobutton('11-15', '11-15', 'reponse block');
            $rbl->add_radiobutton('15+',   '>15',   'reponse block');
            $rbl->print_html();
          ?>
        </li>
    
        <li>
          <p>Connaissez-vous les recommandations de prise en charge :</p>
          <?php
            checkbox('SFAR (Société Française d’Anesthésie et de Réanimation)',      'reponse block');
            checkbox('NICE (National Institute for Health and Care Excellence, UK)', 'reponse block');
            checkbox('HAS (Haute Autorité de Santé)',                                'reponse block');
            checkbox('European Resuscitation Council',                               'reponse block');
            checkbox('EAACI (European Academy of Allergy and Clinical Immunology)',  'reponse block');
            checkbox('AAAAI (American Academy of Allergy Asthma and Immunology)',    'reponse block');
            checkbox('WAO (World Allergy Organization)',                             'reponse block');
          ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
        
        <li>
          <p>Quelle classification de l’anaphylaxie utilisez-vous ?</p>
          <?php
            checkbox('Ring et Messmer', 'reponse block');
            checkbox('Müller',  'reponse block');
          ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
    
        <li>
          <p>En cas de suspicion d’allergie, quels signes cliniques vous orientent vers une anaphylaxie ?</p>
          <table id="signes_cliniques">
            <tr>
              <td>
                <?php
                  checkbox('Urticaire',                    'reponse block');
                  checkbox('Prurit',                       'reponse block');
                  checkbox('Rhinite',                      'reponse block');
                  checkbox('Conjonctivite',                'reponse block');
                  checkbox('Erythème',                     'reponse block');
                  checkbox('Œdème de la face',             'reponse block');
                  checkbox('Œdème du tronc',               'reponse block');
                  checkbox('Œdème des membres inférieurs', 'reponse block');
                  checkbox('Œdème des membres supérieurs', 'reponse block');
                  checkbox('Œdème de Quincke',             'reponse block');
                  checkbox('Essoufflement',                'reponse block');
                  checkbox('Toux',                         'reponse block');
                  checkbox('Hyper-réactivité bronchique',  'reponse block');
                  checkbox('Bronchospasme / asthme',       'reponse block');
                  checkbox('Désaturation',                 'reponse block');
                ?>
              </td>
              <td class="spacer"/>
              <td>
                <?php
                  checkbox('Hypotension artérielle',    'reponse block');
                  checkbox('Syncope',                   'reponse block');
                  checkbox('Hypersialorrhée',           'reponse block');
                  checkbox('Myalgies',                  'reponse block');
                  checkbox('Dysphagie',                 'reponse block');
                  checkbox('Dysphonie',                 'reponse block');
                  checkbox('Bradycardie',               'reponse block');
                  checkbox('Troubles du rythme',        'reponse block');
                  checkbox('Tachycardie',               'reponse block');
                  checkbox('Troubles de la conscience', 'reponse block');
                  checkbox('Nausées',                   'reponse block');
                  checkbox('Vomissements',              'reponse block');
                  checkbox('Douleurs abdominales',      'reponse block');
                  checkbox('Diarrhées',                 'reponse block');
                  checkbox('Etat de choc',              'reponse block');
                ?>
              </td>
            </tr>
          </table>
        </li>
        
        <li>
          <p>Disposez-vous d’un protocole de prise en charge des urgences anaphylactiques ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Dans quels cas transférez-vous le patient en milieu hospitalier en urgence ?</p>
          <?php
            checkbox('Signes cutanéo-muqueux isolés', 'reponse block');
            checkbox('Atteinte multi-viscérale modérée : Hyper-réactivité bronchique / Toux / Dyspnée / Nausées / Tachycardie / Hypotension légère',  'reponse block');
            checkbox('Atteinte multi-viscérale sévère : Œdème de Quincke / Bradycardie / Troubles du rythme / Bronchospasme ou asthme / Troubles de la conscience / Vomissements, diarrhées / Etat de Choc',  'reponse block');
          ?>
        </li>
        
        <li>
          <p>Demandez-vous un bilan biologique ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
        </li>
  
        <li>
          <p>Quel traitement de première intention instaurez-vous en fonction du grade (classification de Ring et Messmer) ? :</p>
          <table id="traitements1" class="border cb">
            <tr>
              <td class="padded" rowspan="2">Symptômes</td>
              <td class="center title" colspan="5">Traitements de première intention</td>
            </tr>
            <tr>
              <td class="padded center title">Antihistaminiques<br/>per os</td>
              <td class="padded center title">Antihistaminiques<br/>IV</td>
              <td class="padded center title">Corticoïdes<br/>per os</td>
              <td class="padded center title">Corticoïdes<br/>IV</td>
              <td class="padded center title">Adrénaline<br/>IM</td>
            </tr>
            <tr>
              <td class="padded grade_1">Signes cutanéo-muqueux isolés</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Tachycardie</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Hypotension modérée</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Hyper-réactivité bronchique</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Toux</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Nausées</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Œdème de Quincke</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Etat de choc</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Bradycardie</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Troubles du rythme</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Bronchospasme</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Troubles de la conscience</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Vomissements / diarrhées</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('Anti-H1',    null, 'reponse block');
                $rbl->add_radiobutton('Anti-H1 IV', null, 'reponse block');
                $rbl->add_radiobutton('Cortico',    null, 'reponse block');
                $rbl->add_radiobutton('Cortico IV', null, 'reponse block');
                $rbl->add_radiobutton('Adre IM',    null, 'reponse block');
                $rbl->print_td();
              ?>
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
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Si vous n’hospitalisez pas le patient, quels traitements préventifs prescrivez-vous ?</p>
          <?php
            checkbox('Corticoïdes per os sur une courte durée. Quelle dose (mg/j)?&nbsp;', 'reponse'); text();
            checkbox('Beta2-mimétiques en inhalation',      'reponse block');
            checkbox('Anti-leucotriènes',                   'reponse block');
            checkbox('Anti-histaminiques',                  'reponse block');
            checkbox('Stylos auto-injecteurs d’adrénaline', 'reponse block');
          ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
        
        <li>
          <p>Disposez-vous d’un document à remettre au patient expliquant les symptômes d’anaphylaxie devant le conduire à reconsulter en urgence ou à appeler le 15 ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>En cas de prescription de stylos auto-injecteurs d’adrénaline, formez-vous le patient à leur usage ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
          <div>Si non : pourquoi ?&nbsp;&nbsp;<?php text() ?></div>
        </li>
        
      </ol>
      
      <div>
        <button type="submit">Valider</button>
      </div>
      
    </form>
  </body>
</html>
