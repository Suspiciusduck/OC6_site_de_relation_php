# TomTroc – Intégration MVC maison (PHP)

## Démarrer
- Placez ce dossier sur un serveur PHP (Apache/Nginx) ou lancez `php -S localhost:8000 -t public`.
- Ouvrez http://localhost:8000/ → la route par défaut est définie dans `public/index.php`.

## Router
- `public/index.php` prend `?action=SLUG`
- Les vues se trouvent dans `templates/SLUG.php`
- Le style commun est dans `public/css/style.css`
- Les images de référence (maquettes) sont servies depuis `public/_design/`.

## Mapping templates → routes
         template                           route    type
      accueil.php       /index.php?action=accueil listing
compte-public.php /index.php?action=compte-public listing
    connexion.php     /index.php?action=connexion listing
edition-livre.php /index.php?action=edition-livre listing
  inscription.php   /index.php?action=inscription listing
   messagerie.php    /index.php?action=messagerie listing
   mon-compte.php    /index.php?action=mon-compte listing
   nos-livres.php    /index.php?action=nos-livres listing
 single-livre.php  /index.php?action=single-livre listing

## Masquer l'image de référence
- Dans un template (`templates/*.php`), mettez `$designRef = '';` pour masquer l'image de référence.
