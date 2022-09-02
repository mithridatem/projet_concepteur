# Sujet

Notre entreprise Adrar souhaite créer un site web (blog) pour communiquer sur nos actions,  
événements etc …  
Le site devra être utilisable sur ordinateur et sur mobile.  
Nous souhaitons avoir un système d’authentification (admin publie les articles), et que les utilisateurs (connectés) puissent poster des commentaires.  
L’admin devra pouvoir supprimer des commentaires, bannir et dé bannir des comptes utilisateurs.  
Les visiteurs devront pouvoir consulter les articles et les commentaires.  

----

 ## Installation nécéssaire pour le fonctionnement du projet en local

La stack :  
PHP8.1.18  
Mysql 5.2 (en cours d'uppgrade pour la 8)  
Apache 2.4.51   
Tailwinds 3.1.6

Pour executer ce code il faudra dans l'ordre.  
cloner le folder dans votre WWW, faire un SYMLINK ou alors avec un VHOST (configuration APACHE).      
Créer la base de donnée à l'aide du fichier SQL ce trouvant dans le dossier conception.  
Il faudra remettre en place à la racine un fichier secret.json, qui contient trois attribut.  

```json
{
    "bdd": "mysql:host=localhost;dbname=",
    "id": "",
    "pwd": ""
}
```

Ouvrir un terminal dans le dossier src.  
faire un npm install.    
et normalement c'est tout. 

Pour le modifier il faudra lancer le WATCHER de tailwinds

npx tailwindcss -i ./input.css -o ./dist/output.css --watch

Pour mieux comprendre le code rendez-vous sur la documentation de tailwindcss

---

## Note personnelle sur la gestion du projet

### Tree
    src/: 
    "source" files to build and develop the project.
    This is where the original source files are located, before being compiled into fewer files to dist/, public/ or build/.

    dist/: 
    "distribution", the compiled code/library, also named public/ or build/. The files meant for production or public use are usually located here.

    There may be a slight difference between these three:
        build/: is a compiled version of your src/ but not a production-ready.
        dist/: is a production-ready compiled version of your code.
        public/: usually used as the files runs on the browser. which it may be the server-side JS and also include some HTML and CSS.

    assets/:
    static content like images, video, audio, fonts etc.

    lib/: 
    external dependencies (when included directly).

    test/: 
    the project's tests scripts, mocks, etc.

    node_modules/: 
    includes libraries and dependencies for JS packages, used by Npm.

    vendor/: 
    includes libraries and dependencies for PHP packages, used by Composer.

    bin/: 
    files that get added to your PATH when installed.

### Markdown/Text Files:

    README.md: 
    A help file which addresses setup, tutorials, and documents the project. README.txt is also used.

    LICENSE.md: 
    any rights given to you regarding the project. LICENSE or LICENSE.txt are variations of the license file name, having the same contents.

    CONTRIBUTING.md: 
    how to help out with the project. Sometimes this is addressed in the README.md file.

### Specific (these could go on forever):

    package.json: 
    defines libraries and dependencies for JS packages, used by Npm.

    package-lock.json: 
    specific version lock for dependencies installed from package.json, used by Npm.

    composer.json: 
    defines libraries and dependencies for PHP packages, used by Composer.

    composer.lock: 
    specific version lock for dependencies installed from composer.json, used by Composer.

    gulpfile.js: 
    used to define functions and tasks to be run with Gulp.

    .travis.yml: 
    config file for the Travis CI environment.

    .gitignore: Specification of the files meant to be ignored by Git.

    .gitkeep: keep empty folders in your projects.