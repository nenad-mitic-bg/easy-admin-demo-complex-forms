EasyAdmin Demo - Complex Forms
==============================

__Forked from https://github.com/javiereguiluz/easy-admin-demo__

A demo application that expands on the [EasyAdmin Demo][1] and showcases
creating more complex forms.

Requirements
------------

  * PHP 7.1.3 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][2].

How to install this project
---------------------------

  1. `git clone git@github.com:shonezlo/easy-admin-demo-complex-forms.git`
  2. `cd easy-admin-demo-complex-forms`
  3. `composer install`
  4. `php bin/console doctrine:fixtures:load`
  5. `php bin/console server:run`
  6. Browse `http://127.0.0.1:8000/admin/`

The project comes with an SQLite sample database, but you can also create your
own database and load the fixtures data:

  1. Edit the `DATABASE_URL` env var in the `.env` file to use your database credentials.
  1. `php bin/console doctrine:database:create`
  1. `php bin/console doctrine:schema:create`
  1. `php bin/console doctrine:fixtures:load --append`

[1]: https://github.com/javiereguiluz/easy-admin-demo
[2]: https://symfony.com/doc/current/reference/requirements.html
