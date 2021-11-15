<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Mise en situation, création de l'appli web Sigma Formations 


Le projet consisté à réaliser une application WEB pour la société SIGMA. 

Les contraintes étaient les suivantes :

- Développement sous le framework Laravel 8
- J'ai réalisé mon projet  avec le SGBD MariaDB ( MYSQL ne fonctionnait pas sur mon poste, j'ai pris la responsabilié d'utiliser  MariaDB)
- Mon application WEB est désigné grace au framework Bootstrap

<img src="C:\Users\Alexandre\Desktop\imgblog\sigma.jpg">

J'ai commencé à développer mon application WEB grâce à LARAVEL, c'était une première expérience.
Ayant déjà développer sur Symfony, les mécaniques n'étaient pas les mêmes, je devais m'adapter rapidement.

Le moteur de template utilisé par les deux frameworks est différent. LARAVEL utilise Blade, alors que Symfony utilise Twig.

Avec Blade, j'ai eu la possibilité de réutiliser le code, ce qui signifie qu'il est possible d'utiliser la fonction du controleur dans le modèle.

J'ai notamment rencontré un problème lorsque je voulais utiliser Eloquent pour pouvoir établir des relations entre modèles , en ayant respecter toutes les étapes des migrations et des seeders. 
