<?php
// templates/nos-livres.php
$title = 'Listing';
$designRef = 'Nos livres.png'; // laisser vide '' pour masquer l'image de référence
ob_start();
?>
<div class="panel" style="margin-bottom:12px">
  <form class="grid" style="grid-template-columns:1fr 200px 140px 140px auto;gap:12px;align-items:end">
    <div><label>Recherche</label><input placeholder="Mots-clés…"/></div>
    <div><label>Ville</label><input placeholder="Ville…"/></div>
    <div><label>Prix min</label><input type="number" placeholder="0"/></div>
    <div><label>Prix max</label><input type="number" placeholder="500"/></div>
    <button class="btn" type="button">Filtrer</button>
  </form>
</div>
<div class="tt-results__head" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
  <p class="card__meta">124 résultats</p>
  <div><label for="sort" style="margin-right:8px" class="card__meta">Tri</label>
    <select id="sort"><option>Récents</option><option>Prix ↑</option><option>Prix ↓</option></select>
  </div>
</div>
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
