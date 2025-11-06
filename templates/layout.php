<?php
// templates/layout.php
?><!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title><?= isset($title) ? htmlspecialchars($title) : 'TomTroc' ?></title>

  <?php
  // => /06_Projet_6/OC6_site_de_relation_php/public
  $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
  ?>

  <!-- CSS -->
  <link rel="stylesheet" href="<?= $base ?>/css/style.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="<?= isset($bodyClass) ? htmlspecialchars($bodyClass) : '' ?>">

<header class="site-header">
  <div class="container site-header__inner">
    <a class="brand" href="<?= $base ?>/index.php">Tom<span style="color:var(--primary)">Troc</span></a>

    <nav class="nav" aria-label="Navigation">
      <a href="<?= $base ?>/index.php">Accueil</a>
      <a href="<?= $base ?>/index.php?action=connexion">Annonces</a>
      <a href="<?= $base ?>/index.php?action=nos-livres">Publier</a>
      <a href="<?= $base ?>/index.php?action=messagerie">Contact</a>
    </nav>

    <div class="actions" style="display:flex;gap:10px">
      <a class="btn btn--ghost" href="<?= $base ?>/index.php?action=connexion">Se connecter</a>
      <a class="btn" href="<?= $base ?>/index.php?action=single-livre">+ Déposer</a>
    </div>
  </div>
</header>

<main class="main">
  <div class="container">
    <?php if (!empty($designRef)) : ?>
      <!-- Référence design (désactiver en prod) -->
      <img class="design-ref" src="<?= $base ?>/_design/<?= htmlspecialchars($designRef) ?>" alt="Référence design" />
    <?php endif; ?>

    <?= $content ?? '' ?>
  </div>
</main>

<footer class="site-footer">
  <div class="container site-footer__inner">
    <div>&copy; TomTroc — Tous droits réservés</div>
    <div style="display:flex;gap:12px;flex-wrap:wrap">
      <a href="<?= $base ?>/index.php?action=legal">Mentions légales</a>
      <a href="<?= $base ?>/index.php?action=privacy">Confidentialité</a>
      <a href="<?= $base ?>/index.php?action=contact">Contact</a>
    </div>
  </div>
</footer>

</body>
</html>