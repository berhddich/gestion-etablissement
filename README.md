
# 🎓 Application de Gestion Scolaire - Laravel

Ce projet est une application web de **gestion scolaire** développée avec le framework **Laravel**.  
Elle permet de gérer les **étudiants**, **enseignants**, **livres**, et **utilisateurs**, avec un système d’authentification par rôle.  
Le design est moderne, responsive, et facile à utiliser grâce à **Bootstrap 5**.

---

## 👨‍💻 Auteurs

- **Abderrahim Berhiddich**
- **Khalil EL MOUEDENE**

---

## 🚀 Résumé des fonctionnalités

- 🔐 Authentification avec gestion des rôles (`admin`, `student`, `teacher`, `librarian`)
- 👨‍🎓 Gestion des étudiants (lecture seule pour les non-admins)
- 👨‍🏫 Gestion des enseignants (lecture seule pour les non-admins)
- 📚 Gestion des livres
- 👤 Gestion des utilisateurs (admin uniquement)
- 📄 Interface stylisée en cartes (cards Bootstrap)
- 📂 Interface responsive et claire

---

## 🧪 Étapes pour exécuter l’application

### 1. Cloner le projet

```bash
git clone <url-du-depot>
cd gestion-etablissement
```

### 2. Installer les dépendances

```bash
composer install
npm install && npm run dev
```

### 3. Configuration de l’environnement

Copiez le fichier `.env.example` :

```bash
cp .env.example .env
```

Générez la clé de l’application :

```bash
php artisan key:generate
```

### 4. Créer la base de données

- Nom de la base : `school_management`
- Dans `.env`, configurez :

```
DB_DATABASE=school_management
DB_USERNAME=root
DB_PASSWORD=
```

> ⚠️ Assurez-vous que la base est bien créée dans votre serveur MySQL.

---

### 5. Lancer les migrations et les seeders

```bash
php artisan migrate --seed
```

Des utilisateurs seront créés automatiquement :

| Rôle   | Email                | Mot de passe |
|--------|----------------------|--------------|
| Admin  | admin@example.com    | password     |

---

### 6. Démarrer le serveur Laravel

```bash
php artisan serve
```

Puis ouvrez [http://localhost:8000](http://localhost:8000) dans votre navigateur.

---

## 🛡️ Droits d'accès

| Rôle       | Droits                                 |
|------------|----------------------------------------|
| Admin      | ✅ CRUD complet sur toutes les entités  |
| Teacher    | 👁️ Lecture seule sur enseignants        |
| Student    | 👁️ Lecture seule sur étudiants         |

---

## 🧰 Technologies utilisées

- Laravel 10+
- PHP 8.1+
- MySQL
- Bootstrap 5
- Blade Templating

---

## 📁 Structure du projet

```
app/
├── Http/Controllers/
├── Models/
resources/views/
routes/web.php
database/migrations/
database/seeders/
```

---

## 📝 Licence

Projet développé à titre académique par :
**Abderrahim Berhiddich** & **Khalil EL MOUEDENE**
