<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Anaphylaxie - Médecine générale</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <?php
      require_once('../includes/functions.php');
      require_once('../includes/RadioButtonList.php');
      require_once('../includes/Select.php');
    ?>
  </head>
  <body>

    <div class="logo">
      <img id="uds"     src="../img/logo_uds.jpg"             alt="Université de Strasbourg" />
      <img id="unistra" src="../img/logo_fac_strasbourg.jpg"  alt="Faculté de médecine de Strasbourg" />
    </div>

    <div id="title">
      <h1>PRISE EN CHARGE DE L'ANAPHYLAXIE</h1>
      <h2 class="sub">Étude sur le savoir déclaratif des internes de médecine générale d'Alsace et de Lorraine</h2>
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
          
          <?php
              $sel = new Select(null, true);
              $sel->add_option("Antihistaminiques per os",     "Anti-H1");
              $sel->add_option("Antihistaminiques IV",         "Anti-H1 IV");
              $sel->add_option("Corticoïdes per os",           "Cortico");
              $sel->add_option("Corticoïdes IV",               "Cortico IV");
              $sel->add_option("Adrénaline IM",                "Adré IM");
              $sel->add_option("Aérosols de Béta2-mimétiques", "Beta2 Inhal");
              $sel->add_option("Aérosols d'adrénaline",        "Adré Inhal");
              $sel->add_option("Corticoïdes inhalés",          "Cortico Inhal");
          ?>
            
          <table id="traitements3">
            <tr>
              <td colspan="3" class="padded grade_1">Signes cutanéo-muqueux isolés</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_2">Toux</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_2">Nausées</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Œdème de Quincke</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Etat de choc</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Bradycardie</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Troubles du rythme</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Bronchospasme</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Troubles de la conscience</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3" class="padded grade_3">Vomissements / diarrhées</td>
              <td><?php $sel->print_html() ?></td>
              <td class="padded">Autre : </td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td class="padded grade_1">Grade I</td>
              <td class="padded grade_2">Grade II</td>
              <td class="padded grade_3">Grade III</td>
            </tr>
          </table>
      
        </li>
    
        <li>
          <p>Vous n'hospitalisez pas le patient (pas de critère de gravité) et prescrivez un traitement préventif adapté à la situation clinique. Pour quelle durée ?</p>
          <?php
            $rbl = new RadioButtonList();
            $rbl->add_radiobutton('< 3',   'Moins de 3 jours', 'reponse block');
            $rbl->add_radiobutton('3 à 7', '3 à 7 jours',      'reponse block');
            $rbl->add_radiobutton('> 7',   'Plus de 7 jours',  'reponse block');
            $rbl->print_td();
          ?>
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
