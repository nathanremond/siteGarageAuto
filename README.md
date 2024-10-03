# Execution en local

1) Installer wampserver et démarrer tous les services

2) Cloner le dépôt avec le lien suivant : https://github.com/nathanremond/siteGarageAuto

3) Taper la commande `php bin/console doctrine:migrations:migrate` pour créer la base de données

4) Taper la commande `symfony server:start -d` pour démarrer l'application

5) Cliquer sur l'url fourni par le terminal