# Eval

## Etape 1

L'intégration de la Home page est **presque** terminée. Mais je sais pas ce que j'ai fait, je me suis emmêlée les pinceaux dans mes classes css au moment de les intégrer dans mon html ... du coup c'est le bordel. Tu pourrais remettre ça en ordre stp ?
=> attention pour cette première étape, seul le fichier index.html est à modifier (pas le style.css)

## Etape 2
Super merci d'avoir tout remis en ordre. Ah zut je viens de me rendre compte qu'il manque certains trucs dans mon fichier style.css ...
Tu pourrais mettre stp les bonnes couleurs sur les catégories ?
Voici les couleurs dont j'ai besoin :
- Education :e76f51
- Loisirs : e9c46a
- Bien-être :2a9d8f

Je veux aussi qu'au survol de mes catégories, la couleur du texte change pour celle-ci : 212025 mais je ne veux pas de sur-lignage hein, c'est moche !

A l'inverse, pour le "Continue Reading" je veux qu'au survol, le sur-lignage disparaisse. 

Tu as vu, il y a aussi des bordures tout atour de mes articles, tu peux les rajouter stp ?
La couleur que je veux : 212025

Le résultat final de tout ça doit être comme sur le fichier HomeDef.png
	
## Etape 3

### Objectif

Rediriger l'internaute sur la page du premier article avec son texte complet

### Comment faire ?

- créer un fichier `html/article.html` qui contiendra le code pour cette nouvelle page Web
- le texte sera un _lorem_ de 400 caractères (emmet : `lorem400`)
- mettre en place le lien de _Continue reading_ du premier article vers cette page HTML créée
- faire l'intégration HTML/CSS de cette page `html/article.html` selon le screenshot fourni plus haut
- un lien "Back to home" n'apparait pas sur le screenshot mais est présent après le texte de l'article. Il reprend le même style que le lien _Continue reading_

## Étape 4 - Factoriser

### Problème

Le code HTML est majoritairement dupliqué entre ces 2 fichiers HTML

### Objectif

Factoriser ce code HTML, c'est-à-dire éviter les répétitions

### Comment faire ?

- HTML = statique
- PHP = dynamique
- copier ces fichiers HTML dans le répertoire `php` puis renommer avec la bonne extension de fichier
- analyser le code HTML pour savoir quels contenus factoriser
- créer des fichiers PHP si besoin, dans le répertoire `inc` c	omme par exemple des templates ;-)


## Étape 5 - Données dynamiques

### Objectif

Rendre les données de la page "home" et "article" dynamiques

### Comment faire ?

- créer un tableau associatif contenant les données suivantes sur le premier article :
    - titre
    - auteur
    - texte
    - catégorie
    - date de publication
    - image de l'auteur
- au sein du code HTML de la page, afficher les données du tableau pour remplacer ces mêmes données, actuellement écrites "en dur" (statique)

## Etape 6 - Navigation

### Objectif

Rendre le menu de gauche dynamique

### Comment faire ?

- créer un tableau associatif contenant le nom et le lien de chaque élément du menu de gauche (plan du site, toutes les races de chien, etc.)
- parcourir ce tableau afin de générer le code HTML de cette navigation

## Étape 7 - Toutes les pages _articles_

### Objectif

Le bon article s'affiche quand on clique sur un article.

### Comment faire ?


- créer un fichier de `template` pour les articles
- récupérer l'id de l'article pour afficher le bon article et son contenu 
