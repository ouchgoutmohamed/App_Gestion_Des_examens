# Application de Gestion des Examens

## Description
Une application de gestion des examens avec des fonctionnalités permettant :
- La saisie des notes par les professeurs.
- La gestion des réclamations des étudiants.
- La consultation des résultats par les étudiants.

## Fonctionnalités
1. **Saisie des Notes**  
   Les professeurs peuvent ajouter et modifier les notes des étudiants pour chaque cours.
   
2. **Consultation des résultats**  
   Les étudiants peuvent consulter leurs notes.

3. **Consultation des Résultats**  
   Les étudiants peuvent consulter leurs résultats et leur moyenne.

## Technologies Utilisées
- **Frontend** : HTML, CSS, JavaScript, Tailwind CSS.
- **Backend** : PHP, CodeIgniter.
- **Base de Données** : MySQL.

## Étapes pour Configurer le Projet

1. **Clonez le projet :**
   ```bash
   git clone https://github.com/ouchgoutmohamed/App_Gestion_Des_examens.git
   ```

2. **Installez les dépendances backend avec Composer :**
   ```bash
   composer install
   ```

3. **Installez les dépendances frontend (incluant Tailwind CSS) :**
   ```bash
   npm install
   ```

4. **Activez MySQL et configurez la base de données :**

   - **Créer la base de données :**
     - Option 1 : Exécutez la commande suivante pour créer la base de données `gestion_exams` :
       ```bash
       php spark create:db gestion_exams
       ```
     - Option 2 : Créez-la manuellement avec un logiciel comme phpMyAdmin ou MySQL Workbench.

   - **Créer les tables :**
     - Option 1 : Exécutez la commande suivante pour exécuter les migrations :
       ```bash
       php spark migrate
       ```
     - Option 2 : Importez le fichier `db.sql` inclus dans le projet.

5. **Peupler la base de données :**
   - Exécutez la commande suivante pour insérer des données initiales :
     ```bash
     php spark db:seed MainSeeder
     ```

6. **Lancez le serveur web :**
   ```bash
   php spark serve
   ```

## Contribution
Pour contribuer :
1. Faites un fork du projet.
2. Créez une nouvelle branche :
   ```bash
   git checkout -b nouvelle-fonctionnalité
   ```
3. Effectuez vos modifications et testez-les.
4. Envoyez une pull request.

## Licence
Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT). Vous êtes libre de l'utiliser et de le modifier.

