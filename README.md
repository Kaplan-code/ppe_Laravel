
Cloner l'application:

     git clone https://gitlab.com/Kaplan-K/ppephp.git


 Créer une base de données et un utilisateur dans le SGBD puis compléter le fichier .env avec les informations nécessaire.

Mettre a jour composer si nécessaire:
   
    composer update

Remplire la bdd avec les migrations et les seeders: 

    php artisan migrate:fresh --seed

Pour commencé à utilisée l'application :
    
    php artisan serv
