
//permet de vider le cache  config cache
php artisan co:ca
php view clear

modification resources/js/app.js on charge lodash, popper (nécessaire pour certains composants de Bootstrap),
ajout window._ = require('lodash');
      window.Popper = require('popper.js').default;
 
 puis npm run dev     
      
pour la barre de recherche https://bootsnipp.com/snippets/35V6b

install icone  npm install material-design-icons
et     npm install @fortawesome/fontawesome-free