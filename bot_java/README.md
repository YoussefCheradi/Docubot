# Chatbot Java avec Spring AI

Ce projet implémente la composante Java du chatbot de documentation, utilisant le framework Spring pour faciliter l'intégration avec les services d'intelligence artificielle tels qu'OpenAI et, à l'avenir, Open Assistant.

## Prérequis

- Java JDK 11 ou supérieur
- Maven 3.6 ou supérieur
- Accès aux API d'OpenAI (clé API requise)

## Configuration

1. Clonez ce dépôt dans votre environnement de développement local.
2. Configurez votre clé API OpenAI dans le fichier `src/main/resources/application.properties` :

   ```properties
   openai.api.key=votre_clé_api_ici
 
 
Assurez-vous que Maven est installé et configuré sur votre machine.

## Installation

Pour construire et exécuter le projet, exécutez les commandes suivantes dans le répertoire racine du projet :

bash

mvn clean install
mvn spring-boot:run
Utilisation
Une fois l'application démarrée, elle sera accessible via http://localhost:8080. Vous pouvez interagir avec le chatbot en envoyant des requêtes HTTP POST à l'endpoint suivant :

POST /chatbot/query
Content-Type: application/json
{
"query": "Votre question ici"
}
La réponse du chatbot sera retournée dans le corps de la réponse HTTP.

## Structure du Projet

src/main/java/ma/tt/chatbot - Contient le code source de l'application.
src/main/resources/application.properties - Fichier de configuration pour les clés API et autres paramètres.

## Sécurité

Assurez-vous de sécuriser l'accès à votre clé API et considérez l'utilisation de HTTPS pour protéger les données transmises entre le client et le serveur.

## Contribution

Nous accueillons les contributions! Pour contribuer, veuillez forker le dépôt, créer une branche pour vos modifications et soumettre une pull request.
 
 
Ce fichier `README.md` fournit les instructions de base pour configurer, installer et utilise