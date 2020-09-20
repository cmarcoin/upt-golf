# upt-golf

Site web de l'association upt golf sous Symfony 5

Pour déployer sur heroku :

```
git push heroku master
```

Une fois le push fait, l'application est compilée par heroku et les migrations lancées grâce à :

```
"scripts": {
    "compile": [
        "php bin/console doctrine:migrations:migrate"
    ]
},
```

La base de données est une base de données MySQL hostée par JawsDB. Elle est gérée par l'add-on heroku JawsDB MySQL.
Pour récupérer l'url de la base de donnée :

```
heroku config:get JAWSDB_URL
```

Dans Symfony, il faut setter la variable d'environnement DATABASE_URL en production pour faire le lien avec la base de données.

```
heroku config:set DATABASE_URL *******************
```

Pour démarrer l'application en local (s'assurer d'abord que MySQL est démarré)

`````
php -S 127.0.0.1:8000 -t public
````
`````
