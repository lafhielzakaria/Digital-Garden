🎯 Contexte du projet
Vous travaillez pour GreenTech Solutions, une startup qui souhaite lancer une application minimaliste et personnalisable appelée Digital Garden.

Cette application permet à un utilisateur de créer un compte, puis de gérer un « jardin numérique » composé de :

Thèmes (catégories visuelles, ex : "Productivité", "Voyage", "Idées")
Notes rattachées à un thème
Chaque utilisateur possède son propre jardin, totalement privé.

L’objectif est de permettre une organisation simple, colorée et intuitive des pensées, projets et informations personnelles.

Vous êtes chargé de développer l’intégralité de l'application :

✔ Backend PHP procédural

✔ Base de données SQL

✔ Frontend HTML + CSS + Bootstrap/Tailwind

✔ Gestion des sessions

✔ Validation côté client (JS) et côté serveur (PHP)

✔ CRUD complet sur Thèmes & Notes (Tags optionnel)

---

🧱 Objectifs pédagogiques
À l’issue du projet, vous devrez maîtriser :

🔹 Backend
PHP procédural (conditions, fonctions, include…)
Sessions & authentification
Sécurité : validation, regex, requêtes préparées
Gestion d’une relation 1:N
Gestion d'une relation N:N (optionel)
🔹 SQL
Création de tables
SELECT / INSERT / UPDATE / DELETE
Contrainte de clé étrangère (1:N)
Requêtes filtrées
🔹 Frontend
HTML5 / CSS3
Bootstrap (formulaires, layout, badges…)
JavaScript (validation, interactions, alertes)
🔹 Méthodologie
User stories
Tâches + sous-tâches
Utilisation de Jira
Organisation du code & architecture simple
---

🌐 Pages à réaliser
---

1. Accueil (index.php)
Affiche :

Nom de l'application : Digital Garden
Message d’introduction
Boutons :
✔ S’inscrire

✔ Se connecter

Si l’utilisateur est connecté → redirection automatique vers Dashboard.

---

2. Page d’inscription
Formulaire avec validation JS + PHP :

Champs :

Nom d’utilisateur (obligatoire, min 3 caractères, alphanumérique)
Mot de passe (obligatoire, min 6 caractères)
Confirmation mot de passe
Validation serveur + enregistrement SQL
Stockage de la date d’inscription
Après succès → redirection vers Dashboard.

---

3. Page de connexion
Formulaire simple :

Nom d’utilisateur
Mot de passe
Si les identifiants sont corrects :

ouverture de session
stockage de l’heure de connexion
redirection → Dashboard
---

4. Dashboard
Affiche :

Bienvenue + nom d’utilisateur
Date d’inscription
Heure de connexion (session)
Boutons :
✔ Gérer mes Thèmes

✔ Gérer mes Notes

✔ Déconnexion

---

🌱 5. Page : Gestion des Thèmes
A. Liste des thèmes
Chaque thème affiche :

Nom du thème
Couleur choisie (badge coloré) obligatoire
Tags (multiples tags séparés par virgule, transformés en badges) (optionel)
Nombre de notes associées
Boutons : Modifier / Supprimer
Si aucun thème :

➡ “Aucun thème n’a encore été créé.”

---

B. Formulaire d’ajout / modification
Champs :

Nom du thème (obligatoire, ≥ 3 caractères)
Couleur du thème (obligatoire – input color)
Tags (multiples tags séparés par virgule) (optionel)
Mode :

Par défaut → création
En cas de modification → préremplissage + bouton “Mettre à jour”
---

🍃 6. Page : Gestion des Notes
A. Liste des notes
Chaque note affiche :

Titre
Importance (1 à 5 — obligatoire)
Contenu (extrait)
Date de création
Thème associé
Boutons Modifier / Supprimer
Filtres :

Par thème (sélecteur)
Par importance
Par mot-clé (barre de recherche)
---

B. Formulaire d’ajout / modification
Champs :

Thème (select — obligatoire)
Titre (obligatoire)
Importance (1–5 — obligatoire)
Contenu (obligatoire)
🔐 Règles de sécurité & redirections
Toute page interne nécessite la connexion → redirection /login
Un utilisateur ne peut manipuler QUE ses thèmes & notes
Validation des deux côtés : JS + PHP
---

🧩 UML requis
À rendre avant le développement :

✔ Diagramme de cas d’usage
✔ Diagramme de classes
✔ (Optionnel) Diagramme de séquence – Authentification
---

📌 Contraintes techniques
Frontend
HTML5 / CSS3
Bootstrap ou Tailwind
JS pour :
validation
interactions simples
Backend
PHP 8 procédural
Architecture avec include
Validation serveur
Sessions
Fichiers séparés (login.php, themes.php, notes.php…)
---

📁 Arborescence recommandée
​
digital-garden/
​
│── index.php
​
│── login.php
​
│── register.php
​
│── dashboard.php
​
│── themes.php
​
│── notes.php
​
│── config/
​
│     └── database.php
​
│── includes/
​
│     ├── header.php
​
│     ├── footer.php
​
│     └── auth.php
​
│── public/
​
│     ├── css/
​
│     └── js/
​
└── sql/
​
      └── schema.sql
​
​
​
---

⭐ Fonctionnalités Bonus (optionnelles)
Export JSON d’un thème
Dark / Light mode
Pagination
Sweet Alert avant suppression
Upload image pour un thème
Tri personnalisé des notes
Modalités pédagogiques
Travail: Individuel

Durée de travail: 7 jours

Date de lancement du brief : 4/12/2025 à 9:00

Date limite de soumission: 19/12/2025 à 23:59

Modalités d'évaluation
Vous présenterez votre travail pendant 15 minutes : 
- 5 minutes : Démonstration du conception. 
- 10 minutes : Explication du code.
Livrables
+ Lien de la planification des tâches avec Jira.
+ Lien vers le repository GitHub contenant :
+ README.
+ Scripts PHP fonctionnels pour toutes les fonctionnalités backend.
+ script sql.
+ UML (diagramme de cas d'utilisation, diagramme de classes).
+ Compte rendu du livrable.
+ Lien d'hébergement (facultatif)
Critères de performance
1. Performance de l’application
✔ Temps de réponse

Évaluer le temps de chargement des pages et des opérations (connexion, ajout, édition, suppression).
L’application doit offrir une navigation fluide et des réponses rapides, adaptées aux attentes des utilisateurs.

✔ Utilisation de la mémoire

Surveiller la consommation mémoire du serveur afin d’assurer une exécution stable et une gestion optimisée des ressources lors des traitements et des requêtes.

✔ Optimisation des requêtes SQL

Analyser et optimiser les requêtes SQL pour réduire leur temps d’exécution.
Limiter les requêtes redondantes, éviter les scans complets inutiles et réduire les risques de surcharge de la base de données.

2. Sécurité – PHP 8 Procédural + MySQLi
✔ Prévention des injections SQL

Utiliser systématiquement des requêtes préparées (prepared statements) pour empêcher toute manipulation malveillante des données envoyées à la base.

✔ Validation et assainissement des données

Contrôler et nettoyer toutes les données provenant des formulaires utilisateurs afin d’empêcher les attaques XSS, l’envoi de données incorrectes ou tout comportement non désiré.

✔ Protection contre les attaques XSS

Encoder et filtrer les données affichées dans les pages web pour empêcher l’exécution de scripts injectés par un utilisateur malveillant.

3. Bonnes pratiques – Développement PHP Procédural
✔ Principe DRY (Don’t Repeat Yourself)

Minimiser la duplication de code en centralisant les fonctionnalités communes dans des fonctions ou des fichiers inclus.

✔ Modularité du code

Structurer le projet en modules logiques et indépendants afin de faciliter la lisibilité, la réutilisation et la maintenance du code.

✔ Conventions de nommage

Utiliser des noms clairs, cohérents et explicites pour les variables, fonctions, fichiers et constantes afin d’améliorer la compréhension du code.

✔ Documentation et commentaires

Ajouter des commentaires utiles et informatifs pour expliquer les parties importantes du code, les algorithmes, la logique métier et les zones sensibles.

✔ Gestion des erreurs

Mettre en place un mécanisme fiable de gestion des erreurs (messages personnalisés, logs, redirections) permettant de détecter et traiter les anomalies sans afficher d’informations sensibles.

4. Connexion à la base de données (PHP MySQLi)
✔ Sécurité des identifiants

Stocker les identifiants de connexion dans un fichier sécurisé séparé (ex. config.php) et éviter de les exposer dans le code source principal.

✔ Gestion propre des connexions

Ouvrir et fermer les connexions à la base uniquement lorsque nécessaire, afin de réduire la consommation de ressources et éviter les connexions persistantes inutiles.

✔ Utilisation sécurisée des paramètres

Employer les requêtes préparées pour toutes les opérations (SELECT, INSERT, UPDATE, DELETE) afin de renforcer la sécurité contre les injections.
Situation professionnelle
Concevoir et Développer la partie Back-End d'une application web
Besoin visé ou problème rencontré
Mettre en place un système de gestion de contenu pour un site web. Le système doit permettre aux administrateurs d'ajouter, lire, mettre à jour et supprimer des articles sur le site. De plus, l'entreprise a besoin d'un système d'authentification simple pour sécuriser l'accès aux fonctionnalités d'administration.
