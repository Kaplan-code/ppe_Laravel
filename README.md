Cloner l'application:

     git clone https://gitlab.com/Kaplan-K/ppephp.git


Mise en place du fichier .env

    cp .env.example .env
    php artisan key:generate

Créer une base de données et un utilisateur dans le SGBD puis compléter le fichier .env avec les informations nécessaire.

Mettre a jour composer :
   
    composer update

Remplire la bdd avec les migrations et les seeders: 

    php artisan migrate:fresh --seed

Pour commencé à utilisée l'application :
    
    php artisan serv


Voici les comptes pour se connecter :

  -Compte délégué régional

    login : delegue@hot.fr
    mdp   : 12345678

  -Compte visiteur

    login : visiteur@hot.fr
    mdp   : 12345678
