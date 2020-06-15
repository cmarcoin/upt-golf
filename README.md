# upt-golf
Site web de l'association upt golf

Pour déployer sur heroku :

git push heroku master

Une fois le push fait, l'application est compilée par heroku et les migrations lancées grâce à :
`
"scripts": {
    "compile": [
        "php bin/console doctrine:migrations:migrate"
    ]
},
`
