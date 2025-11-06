<?php
// templates/connexion.php
$title = 'Login';
$designRef = 'Connexion.png'; // laisser vide '' pour masquer l'image de référence
ob_start();
?>
<section class="panel" style="max-width:520px;margin-inline:auto">
  <h1>Se connecter</h1>
  <form class="grid" style="grid-template-columns:1fr;gap:12px;margin-top:8px">
    <div><label>Email</label><input type="email" placeholder="vous@exemple.com"/></div>
    <div><label>Mot de passe</label><input type="password" placeholder="••••••••"/></div>
    <button class="btn" type="button">Connexion</button>
  </form>
  <p class="card__meta" style="margin-top:10px">Pas de compte ? <a href="/index.php?action=register">S’inscrire</a></p>
</section>

<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
