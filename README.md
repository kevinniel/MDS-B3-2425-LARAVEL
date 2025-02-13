# TP à réaliser pour l'évaluation

A faire en individuel obligatoirement 😇

**Le but n'est pas forcément de tout terminer**, mais d'aller le plus loin possible pour chacun.

## Le sujet

Vous allez réaliser une application de gestion de locations de box de stockage à destination des propriétaires. Les locataires n'ont aucune connaissance de cet outil 😶‍🌫️ .

## Les fonctionnalités

- Authentification
- Gestion de box (chaque compte utilisateur (= proprio de box) peut gérer ses propres box)
- Gestion de locataires (nom, tel,mail, adresse, compte banciare...)
- Gestion de modèles de contrats
- Gestion des contrats automatisée : l'utilisateur peut créer un modèle de contrat, en y incluant des variables (nom, prenom, adresse, etc...) qui seront par la suite automatiquement remplacées lors de la constitution d'un contrat.
- Gestion des suivis de paiement au mois par mois (cases à cocher)
- Gestion des impots : en fonction des structures de société, perso ou autre, implémenter les calculs des impots et recracher les montants que vous devrez renseigner dans les cases de votre déclaration d'impôts 😁
- Gestion des factures

## Les petits plus

- Export du contrat en PDF 😁 (merci kévin)
- Export des impôts en PDF (merci Yann)
- Export Excel comptable des paiements reçu
- Export des clients au format CSV
- Envoi automatique par mail de la facture 🐥

## Les impératifs

- GIT & GITHUB (repo public)
- Issues pour chaque chose réalisée
- Milestones
- Branches à gogo 🌴

## Les livrables finaux

- Code source
- Script de déploiement automatique (CI/CD)
- URL d'accès à votre projet
- Readme - qui inclura des logs de connexion par défaut pour tester l'application !

-----------------
-----------------
-----------------
-----------------

# Etapes de réalisation

1. ✅ Initialisation de Laravel
2. ✅ Mise en place de l'authentification (cf breeze : https://laravel.com/docs/11.x/starter-kits#laravel-breeze)
3. ✅ Gestion des boxs (CRUD : https://github.com/kevinniel/MDS-B3-2425-LARAVEL?tab=readme-ov-file#etapes-dun-crud)
4. Gestion des locataires (= boxs !)
5. Gestion des modèles de contrats (= CRUD !)

-----------------
-----------------
-----------------
-----------------

# Support de cours
Présentation de Laravel et bases

## Debug bar

Si vous voulez vous simplifier la vie : 

`composer require barryvdh/laravel-debugbar --dev`

## Artisan
Artisan est une interface utilisable en ligne de commande (CLI - Command Line Interface).

### Utilisation de base
Artisan est basé sur PHP, et nécessite donc l'utilisation de la commande "PHP" pour s'en servir.
Toute commande artisan débute donc par `php artisan`.
La commande `php artisan` seule, affichera l'ensemble des commandes disponibles proposées par Artisan.

### Commandes usuelles
- **Création de fichiers** : Artisan nous permet de générer des fichiers a l'aide de la commande `php artisan make:...`. On doit ensuite interposer le symbole ":", puis spécifier le type de fichier que l'on veut créer.
    - `php artisan make:model Nom`
    - `php artisan make:controller NomController`
    - `php artisan make:migration create_blog_table`
- gestion de la base de données : Artisan nous permet de créer, modifier ou supprimer des tables au sein d'une base de données. Il utilise les fichiers de migration, mais n'exécute chaque migration, que sur les fichiers qui n'ont pas déjà été migrés. Pour cela, il faut utiliser la commande "migrate".
    - `php artisan migrate` : déclenche les migrations
    - `php artisan migrate:fresh` : reset la BDD puis déclenche les migrations
    - `php artisan migrate:fresh --seed` : reset la BDD puis déclenche les migrations et les seeders
- gestion du cache : Artisan nous permet de nettoyer le cache de manière rapide et simple avec la commande `php artisan cache:clear`.
- Affichage des routes : Artisan nous permet d'afficher les routes existantes au sein de l'application avec la commande `php artisan route:list`.
- publication des vendors : Artisan nous permet de publier les dépendances et librairies utilisées au sein d'un projet Laravel. Ceci nous permettant de modifier ces librairies et dépendances sans crainte de voir le travail perdue pour cause de mise à jour. la commande étant `php artisan vendor:publish`

## Architecture de Laravel
|- /app  
|----- /Console  
|--------- /Commands : Dossier qui contient toutes les commandes personnalisées créées.  
|----- /Exceptions  
|----- /Http  
|--------- /Controller : Dossier qui contiendra l'ensembe des controleurs  
|------------- controller.php : Controleur de base du framework  
|--------- /Middleware : Dossier qui contiendra l'ensemble des middleware  
|----- /Providers
|----- /Models
|--------- User.php : Modèle utilisateur généré automatiquement par Laravel  
|- /bootstrap  
|- /config : Contient les fichiers de configuration de l'application  
|- /database  
|----- /factories : Contient les fichier de Factory
|----- /migrations : Contient les fichiers de migrations qui permettent de créer, modifier ou   supprimer une ou plusieurs table(s)  
|----- /seeders : Contient les fichier de Seeder
|- /public : dossier d'entrée de l'application  
|----- index.php : point d'entrée de l'application  
|- /ressources  
|----- /lang : dossier qui contient les fichiers de traductions de l'application  
|----- /views : dossier qui contient l'ensemble des vues du projet  
|- /routes
|----- web.php : fichier pour déclarer les routes relatives à une application web.  
|- /storage  
|- /tests : dossier contenant les tests unitaires & fonctionnels  
|- /vendor : Contient l'ensemble des dépendances du projet (géré par Composer)  
|- composer.json => le fichier qui permet de lister les dépendances  
|- .env => fichier de configuration de l'application  

## Etapes d'un CRUD
1. Création d'une table en base de données :
    - Création d'un ou plusieurs fichier(s) de migration avec la commande `php artisan make:migration [NOM_DU_FICHIER_DE_MIGRATION]`
    - Migration des fichiers grâce à la commande `php artisan migrate`
2. Création du modèle en lien avec la table créée en base de données :
    - Création du fichier avec la commande `php artisan make:model [NOM_DU_MODEL]`
    - Renseignement du nom de la table en lien avec le nouveau modèle grâce à l'attribut : `protected $table="[NOM_DE_LA_TABLE]";`
    - Renseignement des champs de la table qui peuvent être modifiés grâce au modèle via le tableau unidimensionnel contenu dans l'attribut `protected $fillable=[TABLEAU_DES_CHAMPS]`
3. (Optionnel mais recommandé) Création des Factory et implémentation des seeders 
    - Création du factory avec la commande `php artisan make:factory [NOM_DU_FACTORY]`
    - implémentation du tableau contenu dans le return du factory grâce à la librairie faker (https://fakerphp.org/)
    - Mise en place de l'exécution du factory dans le fichier `DatabaseSeeder` en spécifiant le nombre de création que vous souhaitez : `Blog::factory([NOMBRE_SOUHAITE])->create();`
4. Création d'une ou plusieurs route(s)
    - Ajout de la / des route(s) dans le fichier `/routes/web.php`. Renseignement de l'URL attendue, du contrôleur ainsi que de sa méthode qui doit être appelée au matching de l'URL, puis définition d'un nom sur la route pour facilité son utilisation a posteriori.
    - Rappel des différentes routes d'un CRUD dans laravel : 
        - `GET` - `/blogs` - affiche tous les blogs
        - `GET` - `/blogs/{id}` - affiche le détail d'un blog
        - `GET` - `/blogs/{id}/create` - affiche le formulaire d'ajout d'un blog
        - `POST` - `/blogs` - Traite le formulaire d'ajout d'un blog (= save en BDD)
        - `GET` - `/blogs/{id}/edit` - affiche le formulaire de modification d'un blog
        - `PUT` - `/blogs/{id}/update` - Traite le formulaire de modification d'un blog (= save en BDD)
        - `DELETE` - `/blogs` - Supprime un blog en BDD (l'id du blog à supprimer est passé dans un formulaire et non dans l'URL)
5. Création du contrôleur
    - Création du fichier avec la commande `php artisan make:controller [NOM_DU_CONTROLLER]`
    - Définition de la / des méthode(s) en lien avec les routes précédemment créées
    - Penser à retourner les vues ou les redirects à l'issue de chaque méthode du controleur
6. Création des vues
    - Pour chaque vue nécessaire, créer un fichier avec l'extension `.blade.php` dans le dossier `/ressources/views/`. Nommer ce fichier de telle sorte à pouvoir l'appeler simplement dans les méthodes des contrôleurs.

## Relations entre entitées

1. Ajouter une foreign key dans votre base de données pour lier une table "A" à une table "B". Ajouter donc un champs "b_id" dans la table "A". Ensuite, déclarer votre foreign dans la migration grâce à : 

    ```
    # foreignId est le type de chamlps qu'il nous faut
    # user_id est le nom du champs que l'on crée
    # constrained('users') est le lien vers la table souhaitée
    $table->foreignId('user_id')->constrained('users')->onDelete('set null');
    ```

2. Déclarer cette relation dans vos models.
    - Ajouter le champs "b_id" dans l'attribut fillable du model "A"
    - déclarer dans le model "A", la relation avec le model "B", grâce au code suivant : 
    ```
        # le nom de la méthode est arbitraire. Vous pouvez mettre ce que vous souhaitez, cependant c'est ce nom de méthode que vous devrez utiliser avec l'utilisation du "with" plus bas.
        public function b()
        {
            # BelongsTo doit prendre en premier paramètre le nom du model A, puis en second paramètre, le nom du champs dans le modèle courant lié avec le model A grâce à sa foreign key
            return $this->belongsTo(B::class);
        }
    ```
    - Vous pouvez déclarer la fonction inverse dans l'autre model pour pouvoir accéder au "with" depuis l'autre model : 
    ```
        # le nom de la méthode est arbitraire. Vous pouvez mettre ce que vous souhaitez, cependant c'est ce nom de méthode que vous devrez utiliser avec l'utilisation du "with" plus bas.
        public function as()
        {
            # la relation inverse se déclare grace a la méthode "hasMany", qui ne prend cette fois en paramètre, que le nom du model "A"
            return $this->hasMany(A::class);
        }
    ```

3. Vous pouvez maintenant vous servir des méthodes "as" et "b" respectivement des modèles "B" et "A" grâce à la méthode "with" d'Eloquent (désormais votre ORM préféré).
Pour cela, vous pouvez par exemple faire l'une des requêtes suivantes : 

```
    # Renverra a la fois le model A, en y incluant dans les relations, l'objet "B" correspondant en base de données
    $obj = A::where('id', $id)->with('b')->first();

    # Renverra a la fois le model B, en y incluant dans les relations, le ou les objets "A" correspondant(s) en base de données
    $obj = B::where('id', $id)->with('as')->first();
```

# Déploiement & CI/CD

## Déploiement

Sur le VPS : 

- `sudo apt update && sudo apt upgrade -y` mettre à jour les paquets
- `sudo apt install -y nginx php-cli php-fpm php-sqlite3 php-xml php-mbstring php-curl php-zip unzip git composer sqlite3` installation des paquets pour le déploiement de laravel
- modification du fichier `/etc/nginx/sites-enabled/default` : ajout de `index.php` sur la ligne des index
- restart le service nginx : `sudo service nginx restart`
- se positionner dans le bon dossier `cd /var/www/html`
- cloner le repo dans le dossier `sudo git clone [URL] .`
- installer les dépendances de laravel avec composer : `composer install`
- vérifier l'installation de php-fpm (`sudo apt install php8.2-fpm -y`)
- Configurer le `.env` (`sudo cp .env.example .env`)
- regénérer la clé dans le .env (`php artisan key:generate`)
- Modifiez le fichier de conf default de nginx (`/etc/nginx/sites-available/default`) -> cf gros bout de code ci-dessous
- vérifier les droits sur les fichiers : 
```
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
```
- Créer le fichier SQLite, et donner les droits adéquats dessus :
```
touch /var/www/html/database/database.sqlite
sudo chown www-data:www-data /var/www/html/database/database.sqlite
sudo chmod 664 /var/www/html/database/database.sqlite
```
- Déclencher la migration (`php artisan migrate`)
- il reste à build les dépendances Front via NPM. Installer NPM
```
sudo apt install nodejs npm -y
npm install
npm run build
```

## Default Nginx conf file

```
server {
    listen 80;
    server_name _; # Change avec ton domaine si nécessaire
    root /var/www/html/public;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    # Configuration pour PHP-FPM
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;  # Vérifie la version de PHP installée
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    # Interdire l'accès aux fichiers cachés (ex: .env)
    location ~ /\. {
        deny all;
    }
}
```

## Mise en place du CI/CD

Plusieurs étapes à suivre : 

1. créer un fichier `.github/workflows/ci.yml` à la racine de votre projet


### Contenu de base du ci.yml

```
name: CI

on: [push]

jobs:
    deploy:
        if: github.ref == 'refs/heads/master'
        runs-on: ubuntu-latest
        steps:
        - uses: actions/checkout@v2
        - name: Push to server
            uses: appleboy/ssh-action@master
            with:
            host: ${{ secrets.SERVER_IP }}
            username: ${{ secrets.SERVER_USERNAME }}
            password: ${{ secrets.SERVER_PASSWORD }}
            script: |
                cd ${{ secrets.PROJECT_PATH }}
```