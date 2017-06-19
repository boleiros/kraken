# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)



## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require boleiros/kraken
```

## Configuration

1. Read and edit `config/app.php` and setup the 'Datasources' and any other.
2. Edit to your settings the file located in: `config/ninja_cms.php`.
3. You need to run `bin/cake migrations seed` to perform all seeds or `bin/cake migrations seed --seed UsersSeed` to perform a specific seed.


## Run Migrations

```
bin/cake migrations migrate
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

