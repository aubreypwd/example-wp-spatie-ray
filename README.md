# What is this?

This is a Re: to Tom Mcfarlin's [Tweet](https://twitter.com/tommcfarlin/status/1479499427429687299) and [blog post](https://tommcfarlin.com/ray-per-project-at-an-application-level/) about how you you can setup a WordPress Project that includes [Spatie Ray](https://spatie.be/products/ray) for debugging!

It also includes WordPress using `composer` as outlined in [this](https://salferrarello.com/install-wordpress-with-composer/) article by [Sal Ferrarello](https://salferrarello.com/).

TLDR: Everything you want to see is in `composer.json` and `wp-config.php`!

---

# What did I do?

```bash
composer init # Duh
composer require johnpbloch/wordpress # Require WordPress, see https://salferrarello.com/install-wordpress-with-composer/
composer require --dev spatie/ray # Require Spatie Ray so I can ray() things...
```

## Then...

- Modified `index.php` like it says to [here](https://salferrarello.com/install-wordpress-with-composer/)
- Created `wp-config.php` using `wp config create --dbname=localhost --dbuser=root`
- Modified [`wp-config.php`](wordpress/wp-config.php) (go see my notes there)

# If you clone this repo

First run:

```
composer install
```
