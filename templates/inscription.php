<?php
// templates/inscription.php
$title = 'Register';
$designRef = 'Inscription.png'; // laisser vide '' pour masquer l'image de référence
ob_start();
?>
<section class="panel" style="max-width:520px;margin-inline:auto">
  <h1>Créer un compte</h1>
  <form class="grid" style="grid-template-columns:1fr;gap:12px;margin-top:8px">
    <div><label>Email</label><input type="email" placeholder="vous@exemple.com"/></div>
    <div><label>Mot de passe</label><input type="password" placeholder="••••••••"/></div>
    <div><label>Confirmer le mot de passe</label><input type="password" placeholder="••••••••"/></div>
    <button class="btn" type="button">Inscription</button>
  </form>
  <p class="card__meta" style="margin-top:10px">Déjà un compte ? <a href="/index.php?action=login">Se connecter</a></p>
</section>

<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
