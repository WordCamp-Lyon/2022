## Installation

1. Cloner le repertoire du thème enfant WordCamp Lyon 2022 :

```git clone git@github.com:WordCamp-Lyon/2022.git```

2. Activer ce thème depuis l'interface d'administration de WordPress : Apparence > Thème > WordCamp Lyon 2022.

Ce thème s'appuie sur le thème Twenty Twenty.

## Architecture

* `functions.php`
* `style.css`

Ces fichiers servent uniquement à la déclaration du thème enfant.

* `/src`

Ce dossier regroupe tous les styles du thème enfant. Ces styles sont découpés en fichiers Sass pour faciliter les évolutions et la maintenance.

Le fichier `index.js` sert de point d'entrée pour la compilation via `@wordpress/script`. 

Le fichier `style.scss` repertorie tous les styles du thème.

## Contribution

Pour contribuer aux améliorations du thème, nous nous basons sur les maquettes suivantes : https://www.figma.com/file/bIlFrsWLSRVol7mroP8RLN/WCLyon?node-id=80%3A331

Pour mettre en place l'environnement de développement, il suffit d'utiliser la commande suivante : 
```npm i && npm run start```

Chaque changements dans le dossier `/src` déclenche une nouvelle compilation et met à jour les styles dans le dossier `/build`. 

Le dossier `/build` est volontairement versionné (contrainte technique du WordCamp Central) pour synchroniser automatiquement les changements sur le site.
