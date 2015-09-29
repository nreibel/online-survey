<html>
  <head>
    <meta charset="UTF-8" />
    <title>Anaphylaxie - Médecine générale</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <?php
      require_once('../includes/functions.php');
      require_once('../includes/RadioButtonList.php');
    ?>
  </head>
  <body>

    <div class="logo">
      <img id="uds"     src="../img/logo_uds.jpg"/>
      <img id="unistra" src="../img/logo_fac_strasbourg.jpg"/>
    </div>

    <div id="title">
      <h2>QUESTIONNAIRE SUR LA PRISE EN CHARGE DES ANAPHYLAXIES EN MÉDECINE GÉNÉRALE<h2>
    </div>

  <form action="submit.php" method="POST">
      <ol>

        <li>
          <p>Dans quelle structure exercez-vous ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('cabinet', 'Cabinet libéral',               'reponse');
            $rbl->add_radiobutton('assoc',   'Maison médicale / association', 'reponse');
            $rbl->print_html();
          ?>
        </li>

        <li>
          <p>Où exercez-vous ?</p>
          <?php checkbox('Milieu rural', 'reponse') ?>
          <?php checkbox('Milieu semi-rural', 'reponse') ?>
          <?php checkbox('Ville', 'reponse') ?>
        </li>

        <li>
          <p>Depuis combien de temps exercez-vous ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('0-5',   '0-5 ans',   'reponse');
            $rbl->add_radiobutton('6-10',  '6-10 ans',  'reponse');
            $rbl->add_radiobutton('11-20', '11-20 ans', 'reponse');
            $rbl->add_radiobutton('20+',   '>20 ans',   'reponse');
            $rbl->print_html();
          ?>
        </li>

        <li>
          <p>Etes-vous :</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('m', 'un homme',  'reponse');
            $rbl->add_radiobutton('f', 'une femme', 'reponse');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>À combien de cas d’anaphylaxie nécessitant un traitement en urgence et une surveillance rapprochée estimez-vous être confronté chaque année ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('0-5',   '0-5',   'reponse');
            $rbl->add_radiobutton('6-10',  '6-10',  'reponse');
            $rbl->add_radiobutton('11-15', '11-15', 'reponse');
            $rbl->add_radiobutton('15+',   '>15',   'reponse');
            $rbl->print_html();
          ?>
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
                <?php checkbox('Œdème du tronc',               'reponse') ?>
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
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse inline');
            $rbl->add_radiobutton('non', 'Non', 'reponse inline');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Dans quels cas transférez-vous le patient en milieu hospitalier en urgence ?</p>
          <?php checkbox('Signes cutanéo-muqueux isolés', 'reponse') ?>
          <?php checkbox('Atteinte multi-viscérale modérée : Hyper-réactivité bronchique / Toux / Dyspnée / Nausées / Tachycardie / Hypotension légère',  'reponse') ?>
          <?php checkbox('Atteinte multi-viscérale sévère : Œdème de Quincke / Bradycardie / Troubles du rythme / Bronchospasme ou asthme / Troubles de la conscience / Vomissements, diarrhées / Etat de Choc',  'reponse') ?>
        </li>
        
        <li>
          <p>Demandez-vous un bilan biologique ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse inline');
            $rbl->add_radiobutton('non', 'Non', 'reponse inline');
            $rbl->print_html();
          ?>
        </li>
  
        <li>
          <p>Quels traitements de première intention instaurez-vous en fonction du grade (classification de Ring et Messmer) ? :</p>
          <table id="traitements1" class="border center_input">
            <tr>
              <td class="padded" rowspan=2">Symptômes</td>
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
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Tachycardie</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Hypotension modérée</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Hyper-réactivité bronchique</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Toux</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_2">Nausées</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Œdème de Quincke</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Etat de choc</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Bradycardie</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Troubles du rythme</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Bronchospasme</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Troubles de la conscience</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
                $rbl->print_td();
              ?>
            </tr>
            <tr>
              <td class="padded grade_3">Vomissements / diarrhées</td>
              <?php
                $rbl = new RadioButtonList();
                $rbl->add_radiobutton('as_per_os', null, 'reponse');
                $rbl->add_radiobutton('as_iv',     null, 'reponse');
                $rbl->add_radiobutton('co_per_os', null, 'reponse');
                $rbl->add_radiobutton('co_iv',     null, 'reponse');
                $rbl->add_radiobutton('ad_im',     null, 'reponse');
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
            $rbl->add_radiobutton('oui', 'Oui', 'reponse inline');
            $rbl->add_radiobutton('non', 'Non', 'reponse inline');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Si vous n’hospitalisez pas le patient, quels traitements préventifs prescrivez-vous ?</p>
          <?php checkbox('Corticoïdes per os sur une courte durée. Quelle dose (mg/j)?&nbsp;', 'reponse inline') ?><?php text() ?>
          <?php checkbox('Beta2-mimétiques en inhalation',      'reponse') ?>
          <?php checkbox('Anti-leucotriènes en inhalation',     'reponse') ?>
          <?php checkbox('Anti-histaminiques',                  'reponse') ?>
          <?php checkbox('Stylos auto-injecteurs d’adrénaline', 'reponse') ?>
          <div>Autres :&nbsp;<?php text() ?></div>
        </li>
        
        <li>
          <p>Disposez-vous d’un document à remettre au patient expliquant les symptômes d’anaphylaxie devant le conduire à reconsulter en urgence ou à appeler le 15 ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse inline');
            $rbl->add_radiobutton('non', 'Non', 'reponse inline');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>En cas de prescription de stylos auto-injecteurs d’adrénaline, formez-vous le patient à leur usage ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse inline');
            $rbl->add_radiobutton('non', 'Non', 'reponse inline');
            $rbl->print_html();
          ?>
          <div>Si non : pourquoi ?&nbsp;&nbsp;<?php text() ?></div>
        </li>
        
      </ol>
      
      <button type="submit">Valider</button>
      
    </form>
  </body>
</html>
