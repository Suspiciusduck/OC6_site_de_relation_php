<?php
// templates/accueil.php
$title = 'Home';
$designRef = 'Accueil.png'; // laisser vide '' pour masquer l'image de référence
ob_start();
?>
<section class="panel" style="margin-bottom:16px">
  <h1 style="margin:0 0 8px">Bienvenue sur TomTroc</h1>
  <p class="card__meta">Cherchez, filtrez et trouvez des annonces près de chez vous.</p>
  <form class="grid" style="grid-template-columns:1fr 220px 200px auto;gap:12px;align-items:end">
    <div><label>Recherche</label><input placeholder="Ex: vélo, iPhone, canapé"/></div>
    <div><label>Ville</label><input placeholder="Paris, Lyon…"/></div>
    <div><label>Catégorie</label><select><option>Toutes</option></select></div>
    <button class="btn" type="button">Rechercher</button>
  </form>
</section>
<section class="grid grid--3" style="margin-top:16px">
  <?php for ($i=0;$i<6;$i++): ?>
  <article class="card">
    <div class="card__media"></div>
    <div class="card__body">
      <h3 class="card__title">Titre d'annonce</h3>
      <div class="card__meta">Ville • 120 €</div>
      <div style="margin-top:10px;display:flex;gap:8px">
        <a class="btn btn--sm" href="#">Voir</a>
        <a class="btn btn--ghost btn--sm" href="#">Contacter</a>
      </div>
    </div>
  </article>
  <?php endfor; ?>
</section>

<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
