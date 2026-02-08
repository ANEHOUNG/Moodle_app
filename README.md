# Déploiement Docker de Moodle

## Informations Étudiant
### Nom : ANEHOUNG MEINKONDEM YVAN BLANC,
### Matricule : 25G2030,
### Application : Moodle (Système de gestion de l'apprentissage), 
### URL de l'application : https://25G2030.systeme-res30.app.

## Description de l'Application et Cas d'Usage en Entreprise
Moodle est un système de gestion de l'apprentissage (LMS) open-source largement utilisé par les universités, centres de formation et entreprises pour gérer des plateformes d'apprentissage en ligne. Dans un contexte professionnel,
Moodle peut être utilisé pour former et certifier les employés, déployer des cours en ligne pour les écoles et universités, partager le savoir interne et gérer des examens et évaluations en ligne. 
Le déploiement de Moodle avec Docker permet une portabilité et scalabilité faciles ainsi qu'une maintenance simplifiée en environnement de production.

## Instructions pour Démarrer l'Application
Aller dans le dossier du projet : `cd /home/anehoung/deployments/25G2030`. 
Lancer l'application avec Docker Compose : `docker compose up -d`. 
Accéder à l'application via HTTPS à l'adresse : https://25G2030.systeme-res30.app.

## Rôle des Services dans Docker Compose
### Service Moodle : 
- exécute l'application Moodle,   
- expose le port interne pour NGINX,  
- utilise un volume bindé `moodle_app/` pour stocker les fichiers persistants.   
### Service MariaDB : fournit la base de données pour Moodle, 
- stocke toutes les données de l'application (utilisateurs, cours, configurations),   
- utilise un volume bindé pour garantir la persistance des données.   

* Les deux services communiquent via un réseau bridge Docker personnalisé.

## Explication des Variables d'Environnement (.env)
Toutes les informations sensibles sont stockées dans le fichier `.env`.   
DB_HOST : Hôte de la base de données,   
DB_NAME : Nom de la base de données Moodle,   
DB_USER : Utilisateur de la base de données,   
DB_PASSWORD : Mot de passe de la base de données,   
DOMAIN : Nom de domaine public de l'application,   
SMTP_HOST : Serveur SMTP pour l'envoi des mails,   
SMTP_PORT : Port du serveur SMTP,   
SMTP_USER : Nom d'utilisateur SMTP,   
SMTP_PASSWORD : Mot de passe SMTP.   
Cette gestion des secrets améliore la sécurité et respecte les bonnes pratiques DevOps.

## Commande Exacte pour Générer le Certificat TLS
Les certificats TLS ont été générés avec Certbot et Let’s Encrypt.   
Commande utilisée : `sudo certbot certonly --nginx -d systeme-res30.app -d *.systeme-res30.app`.   
Les certificats sont stockés dans `/etc/letsencrypt/`.

## Persistance des Données avec Bind Volumes
La persistance des données est assurée grâce à des volumes bindés :  
 `moodle_app/` pour les fichiers de l'application Moodle et un volume pour  MariaDB pour stocker la base de données.   
 Ainsi, les données ne sont pas perdues lors du redémarrage ou de la recréation des conteneurs.

## Possibilités de Monétisation
La plateforme Moodle déployée peut générer des revenus via des cours en ligne payants, abonnements de formation d'entreprise, programmes de certification, hébergement et gestion de plateformes LMS pour des institutions, ainsi que des services de développement et support Moodle personnalisés.

## Conclusion
Ce projet illustre un déploiement Moodle prêt pour la production avec Docker Compose, sécurisé en HTTPS, utilisant des volumes bindés pour la persistance et une gestion correcte des variables d'environnement sur un VPS partagé.
