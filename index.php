<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
     <?php require('functions.php') ?>
  </head>
  <body>
    <form action="submit.php" method="POST">
      <ol>

        <li>
          <p>Nom, prénom</p>
          <?php text('Entrez votre nom') ?>
        </li>

        <li>
          <p>Question réponses multiples</p>
          <?php checkbox('Réponse 1', 'reponse') ?>
          <?php checkbox('Réponse 2', 'reponse') ?>
          <?php checkbox('Réponse 3', 'reponse') ?>
        </li>

        <li>
          <p>Question a réponse unique</p>
          <?php radiobutton('q2', 'rep1', 'Réponse 1', 'reponse') ?>
          <?php radiobutton('q2', 'rep2', 'Réponse 2', 'reponse') ?>
          <?php radiobutton('q2', 'rep3', 'Réponse 3', 'reponse') ?>
        </li>

        <li>
          <p>Tableau de réponses</p>
          <table class="text">
            <tr>
              <td></td>
              <td>Colonne 1</td>
              <td>Colonne 2</td>
              <td>Colonne 3</td>
            </tr>
            <tr>
              <td class="ok">Ligne 1</td>
              <td><?php text() ?></td>
              <td><?php text() ?></td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td class="warning">Ligne 2</td>
              <td><?php text() ?></td>
              <td><?php text() ?></td>
              <td><?php text() ?></td>
            </tr>
            <tr>
              <td class="urgent">Ligne 3</td>
              <td><?php text() ?></td>
              <td><?php text() ?></td>
              <td><?php text() ?></td>
            </tr>
          </table>
        </li>

        <li>
          <p>Réponses nombreuses</p>
          <table class="checkbox">
            <tr>
              <td><?php checkbox('Réponse 1') ?></td>
              <td><?php checkbox('Réponse 2') ?></td>
              <td><?php checkbox('Réponse 3') ?></td>
            </tr>
            <tr>
              <td><?php checkbox('Réponse 4') ?></td>
              <td><?php checkbox('Réponse 5') ?></td>
              <td><?php checkbox('Réponse 6') ?></td>
            </tr>
            <tr>
              <td><?php checkbox('Réponse 7') ?></td>
              <td><?php checkbox('Réponse 8') ?></td>
              <td><?php checkbox('Réponse 9') ?></td>
            </tr>
          </table>
        </li>
        
      </ol>
      <button type="submit">Valider</button>
    </form>
  </body>
</html>