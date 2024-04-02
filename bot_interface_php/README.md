# DocuBot

public/ : Contient tous les fichiers accessibles au public, y compris le point d'entrée principal index.php pour l'interface du chatbot, ainsi que les ressources statiques comme les feuilles de style, les scripts JavaScript, et les images.

src/ : Regroupe la logique backend du projet. Les scripts dans handlers/ gèrent les actions spécifiques comme les questions des utilisateurs et les feedbacks. services/ contient les scripts pour interagir avec des services web externes, tels que les API de chatbot.

templates/ : Contient les modèles PHP utilisés pour générer les pages HTML. Cela permet de séparer la logique de présentation de la logique métier.

config/ : Dossier pour les fichiers de configuration du projet. Cela inclut les paramètres de connexion à la base de données et les clés API.

vendor/ : Dossier pour les bibliothèques et les dépendances installées via Composer. Il est recommandé de ne pas inclure ce dossier dans le contrôle de version.

logs/ : Destiné à stocker les fichiers journaux de l'application. Ces fichiers peuvent être utiles pour le débogage et la surveillance.

tests/ : Contient les tests unitaires et d'intégration pour assurer la qualité du code.

README.md : Fournit une documentation de base sur le projet, comment le configurer, l'exécuter, et contribuer.

.gitignore : Spécifie intentionnellement les fichiers non suivis par Git, comme les dépendances vendor/ et les fichiers de configuration sensibles.

# Interface Chatbot en PHP

Ce projet implémente l'interface utilisateur pour le chatbot de documentation, en utilisant PHP pour créer une interface web interactive permettant aux utilisateurs de poser des questions et de recevoir des réponses en temps réel.

1. Frontend (Interface Utilisateur)

Une page web simple avec un champ de texte pour que l'utilisateur saisisse sa question.
Un bouton "Envoyer" pour soumettre la question.
Une section d'affichage pour montrer la réponse du chatbot.
Sous la réponse, afficher la question "Cette réponse est-elle utile ?" avec deux boutons : "Oui" et "Non".

2. Backend (Logique Serveur en PHP)

Un script PHP (questionHandler.php) pour gérer les requêtes POST contenant les questions des utilisateurs.
Appel à un web service externe (API du chatbot) pour obtenir une réponse à la question soumise.
Retour de la réponse à la page frontend pour affichage.
Un script PHP (feedbackHandler.php) pour gérer la réponse à la question "Cette réponse est-elle utile ?".
Si "Oui", enregistrer le feedback positif.
Si "Non", rediriger l'utilisateur vers un formulaire de contact ou une page de service client.

3. Service Client (Optionnel)

Une page de contact ou une interface de chat en direct pour permettre à l'utilisateur de communiquer directement avec un agent de service client.

## Flux de Fonctionnement

1. Pose de la Question :

L'utilisateur saisit sa question dans le champ de texte et appuie sur "Envoyer".
La question est envoyée au backend via une requête AJAX à questionHandler.php.
questionHandler.php fait appel à l'API du chatbot et reçoit la réponse.
La réponse est retournée à l'interface utilisateur et affichée sous le champ de question.

2. Feedback sur la Réponse :

Sous la réponse, l'utilisateur est interrogé sur l'utilité de la réponse "Cette réponse est-elle utile ?".
Si l'utilisateur clique sur "Oui", un feedback positif est enregistré via feedbackHandler.php.
Si l'utilisateur clique sur "Non", feedbackHandler.php redirige l'utilisateur vers une page de contact ou de service client 
et appeler un web service (WS) qui stocke la question sans réponse dans la base de données pour analyse et amélioration ultérieures 


3. Considérations Techniques
Sécurité : Assurez-vous de valider et d'assainir toutes les entrées utilisateur pour prévenir les attaques XSS et les injections SQL.
Performance : Utilisez des appels AJAX pour une expérience utilisateur fluide sans nécessiter de rechargement de la page.
Accessibilité : Veillez à ce que l'interface utilisateur soit accessible, en suivant les meilleures pratiques d'accessibilité web.


## Prérequis

- Serveur web avec support PHP 7.4 ou supérieur
- Composer pour la gestion des dépendances PHP

## Configuration

1. Clonez ce dépôt sur votre serveur web.
2. Assurez-vous que PHP est correctement installé et configuré sur votre serveur.
3. Installez les dépendances PHP nécessaires via Composer :

   ```bash
   composer install

Configurez votre serveur web pour pointer vers le dossier public du projet.

## Installation

Après avoir configuré votre environnement, suivez ces étapes pour mettre en place l'interface :

Copiez le contenu du dépôt dans le répertoire de votre choix sur le serveur.

Utilisez Composer pour installer les dépendances :
    
    composer install


Assurez-vous que le serveur web est configuré pour servir le dossier public comme racine du site.

## Utilisation

L'interface du chatbot est maintenant accessible via un navigateur web. Les utilisateurs peuvent interagir avec le chatbot en saisissant leurs questions dans le champ de texte prévu à cet effet et recevoir des réponses directement sur la page web.

## Structure du Projet

    public/ - Dossier racine accessible publiquement contenant les fichiers frontend.
    src/ - Contient les scripts PHP pour le backend de l'interface chatbot.
    vendor/ - Dossiers des dépendances gérées par Composer.
    composer.json - Fichier de configuration pour les dépendances Composer.

## Sécurité

Il est crucial de sécuriser l'interface du chatbot pour protéger les données des utilisateurs :

Validez et assainissez toutes les entrées utilisateur pour prévenir les injections SQL et les attaques XSS.
Utilisez HTTPS pour sécuriser la communication entre le client et le serveur.

## Contribution

Les contributions à ce projet sont bienvenues. Pour contribuer, veuillez forker le dépôt, créer une nouvelle branche pour vos modifications, et soumettre une pull request.

## Licence
Ce projet est licencié sous les termes de la licence MIT. Voir le fichier LICENSE pour plus de détails.

Ce fichier `README.md` fournit un guide pour la configuration, l'installation, et l'utilisation de l'interface PHP de votre chatbot, ainsi que des informations sur la structure du projet, les pratiques de sécurité recommandées, et comment contribuer au projet. Adaptez ce modèle en fonction des spécificités de votre mise en œuvre et de votre environnement de développement.




