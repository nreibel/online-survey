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
      <h2>étude sur le savoir déclaratif opérant de prise en charge de l'anaphylaxie dans une population d'internes de médecine générale</h2>
    </div>

    <form action="submit.php" method="post">
      <ol>

        <li>
          <p>Êtes-vous :</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('m', 'Un homme',  'reponse block');
            $rbl->add_radiobutton('f', 'Une femme', 'reponse block');
            $rbl->print_html();
          ?>
        </li>

        <li>
          <p>En quel semestre d'internat êtes-vous actuellement ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('1', '1er semestre',  'reponse block');
            $rbl->add_radiobutton('2', '2ème semestre', 'reponse block');
            $rbl->add_radiobutton('3', '3ème semestre', 'reponse block');
            $rbl->add_radiobutton('4', '4ème semestre', 'reponse block');
            $rbl->add_radiobutton('5', '5ème semestre', 'reponse block');
            $rbl->add_radiobutton('6', '6ème semestre', 'reponse block');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Avez-vous déjà effectué votre stage chez le praticien ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Envisagez-vous d'exercer :</p>
          <?php
            checkbox('En libéral'           , 'reponse block');
            checkbox('En milieu rural'      , 'reponse block');
            checkbox('En milieu semi-rural' , 'reponse block');
            checkbox('En milieu urbain'     , 'reponse block');
            checkbox('En milieu hospitalier. Quelle spécialité ?', 'reponse');
          ?>
          &nbsp;
          <?php text(); ?>
        </li>
        
        <li>
          <p>Vous estimez-vous bien formé pour prendre en charge des patients allergiques et/ou une anaphylaxie?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('Très bien',   'Très bien',   'reponse block');
            $rbl->add_radiobutton('Bien',        'Bien',        'reponse block');
            $rbl->add_radiobutton('Insuffisant', 'Insuffisant', 'reponse block');
            $rbl->add_radiobutton('Pas du tout', 'Pas du tout', 'reponse block');
            $rbl->print_html();
          ?>
        </li>
      
        <li>
          <p>Connaissez-vous des recommandations de prise en charge ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->add_radiobutton('oui', 'Oui : lesquelles ? ', 'reponse');
            $rbl->print_html();
          ?>
          &nbsp;
          <?php text() ?>
        </li>
      
        <li>
          <p>Connaissez-vous une classification de l'anaphylaxie ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->add_radiobutton('oui', 'Oui : lesquelles ? ', 'reponse');
            $rbl->print_html();
          ?>
          &nbsp;
          <?php text() ?>
        </li>
        
        <li>
          <p>En cas de suspicion de réaction allergique, quels signes cliniques vous amènent à transférer le patient en urgence en milieu hospitalier ?</p>
          <table id="signes_cliniques">
            <tr>
              <td>
                <?php
                  checkbox('Signes cutanéo-muqueux isolés', 'reponse block');
                  checkbox('Œdème de Quincke',              'reponse block');
                  checkbox('Toux',                          'reponse block');
                  checkbox('Dyspnée',                       'reponse block');
                  checkbox('Hyper-réactivité bronchique',   'reponse block');
                  checkbox('Bronchospasme / asthme',        'reponse block');
                  checkbox('Désaturation',                  'reponse block');
                  checkbox('Hypotension légère',            'reponse block');
                  checkbox('Dysphagie haute',               'reponse block');
                ?>
              </td>
              <td class="spacer"/>
              <td>
                <?php
                  checkbox('Dysphonie',                 'reponse block');
                  checkbox('Bradycardie',               'reponse block');
                  checkbox('Troubles du rythme',        'reponse block');
                  checkbox('Tachycardie',               'reponse block');
                  checkbox('Troubles de la conscience', 'reponse block');
                  checkbox('Nausées, vomissements',     'reponse block');
                  checkbox('Douleurs abdominales',      'reponse block');
                  checkbox('Diarrhées',                 'reponse block');
                  checkbox('Etat de choc',              'reponse block');
                ?>
              </td>
            </tr>
          </table>
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
          <p>Vous n’hospitalisez pas le patient (pas de signe de gravité). Quels traitements préventifs prescrivez-vous ?</p>
          <?php
            checkbox('Corticoïdes per os sur une courte durée', 'reponse block');
            checkbox('Beta2-mimétiques en inhalation',          'reponse block');
            checkbox('Anti-leucotriènes',                       'reponse block');
            checkbox('Anti-histaminiques',                      'reponse block');
            checkbox('Stylos auto-injecteurs d’adrénaline',    'reponse block');
          ?>
          <div>Autres :&nbsp;<?php text() ?></div>
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
          <p>Avez-vous déjà observé ou assisté à une démonstration d'utilisation d'un stylo auto-injecteur d'adrénaline ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('oui', 'Oui', 'reponse');
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->print_html();
          ?>
        </li>
        
        <li>
          <p>Connaissez-vous des noms de stylos d'adrénaline ayant l'AMM actuellement ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('non', 'Non', 'reponse');
            $rbl->add_radiobutton('oui', 'Oui : lesquelles ? ', 'reponse');
            $rbl->print_html();
          ?>
          &nbsp;
          <?php text() ?>
        </li>
        
        <li>
          <p>Commentaire libre :</p>
          <?php text_area(4, 50); ?>
        </li>
      </ol>
      
      <div>
        <button type="submit">Valider</button>
      </div>
      
    </form>
  </body>
</html>
