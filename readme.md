[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![PHP7 Compatible](https://img.shields.io/badge/php-7-green.svg?style=flat-square)](https://packagist.org/packages/asgardcms/platform)

# ppicms
PPI Community Management System

This application is develeloped to manage membership and events of Indonesian Student Association (Persatuan Pelajar Indonesia-PPI). As the pilot project, this application is implemented for PPI Australia at the University of Wollongong (UOW). This is an open source application which can be used by any student associations.

The website of PPIA UOW using this application has been launched on July 24, 2016. Some features and fixes will be added continuously to improve the quality of this app. 

# Concept

![alt text][concept]
[concept]: http://ppiauow.org/assets/media/ppiauowxs.jpg "Concept"

# Live site

http://ppiauow.org

# Features

+ Responsive design
+ Lightweight and Fast loading
+ Fully customizeable
+ Member area
+ Various design template (Home, Blog, Pages)
+ Registration with Invitation Code
+ Email Integration (SMTP/Mail/Sendmail)
+ Email confirmation
+ Multi language/translation support (i18n)
+ Media (images) management
+ Role-based user management
+ Modular Components and Themes

# Technical Specification

+ PHP >= 5.5.9
+ Laravel Framework 5.2
+ MySQL
+ Bootstrap 4

# Documentation

Installation for Windows (e.g. using Wampp)

* Install Composer https://getcomposer.org/download/  
* Install Git https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
* Open command prompt and run:

```
cd c:\wamp64\www\
git clone https://github.com/karfianto/ppicms.git
cd ppicms
composer install
copy .env.example .env
```

* Create a new database (e.g. via phpmyadmin) and edit the database configs in .env file
* Back to the command prompt, run:

```
php artisan key:generate
php artisan migrate
php artisan module:migrate Blog
php artisan module:migrate Core
php artisan module:migrate Dashboard
php artisan module:migrate Menu
php artisan module:migrate Media
php artisan module:migrate Setting
php artisan module:migrate Translation
php artisan module:migrate User
php artisan module:seed Blog
php artisan module:seed Core
php artisan module:seed Dashboard
php artisan module:seed Menu
php artisan module:seed Media
php artisan module:seed Setting
php artisan module:seed Translation
php artisan module:seed User
php artisan clear-compiled
```

* Run this query to create an admin account (username: admin@admin.com, password: admin)

```
INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES ('1', 'admin@admin.com', '$2y$10$Mz4prg9um5HY0XhUBSL0Mu12jJvaGbfXtUAc67Kt9gwtGyKuVY6aa', NULL, NULL, NULL, NULL, NOW(), NOW());

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES ('1', '1', NOW(), NOW());

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES ('1', '1', '', '1', NOW(), NOW(), NOW());
```

* Open browser and go to http://localhost/ppicms/public/backend
* To make all links work, you shouldn't use subfolder. So you have to create a virtual host. In Wampp, you can create for example:

ppicms.dev --> localhost/ppicms/public

Then, edit ```config/app.php``` and change url to http://ppicms.dev/ 

So you can access your app at http://ppicms.dev/ and the backend at http://ppicms.dev/backend


# Contact

You can post issues on this repository or email me at <karfi@ictlab.org> for any questions.

![alt text][logo]
[logo]: http://ppiauow.com/wp-content/uploads/2016/02/logoheader-7.jpg "PPIA UOW"
