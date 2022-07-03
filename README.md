<p align="center">
    <a href="http://pyor.team/blackcms">
        <img alt="BlackCMS logo" width="300" height="100" src="https://i.ibb.co/yWwRNCr/logo.png" />
    </a>
</p>

<p align="center">
    <a href="https://img.shields.io/github/license/blackcms/cms"><img alt="NPM" src="https://img.shields.io/github/license/blackcms/cms"></a>
    <a href="https://img.shields.io/github/v/release/blackcms/cms"><img src="https://img.shields.io/github/v/release/blackcms/cms"></a>
    <a href="https://img.shields.io/github/forks/blackcms/cms"><img alt="NPM" src="https://img.shields.io/github/forks/blackcms/cms"></a>
    <a href="https://img.shields.io/github/issues/blackcms/cms"><img alt="NPM" src="https://img.shields.io/github/issues/blackcms/cms"></a>
</p>

BlackCMS is a modular and user friendly content management system (CMS) built with Laravel (9.x).

It uses relational DBMS like MySQL or SQLite in conjunction with (optional) NoSQL systems like Redis.

### What is CMS?

A content management system (CMS) is a piece of software which provides website authoring, collaboration, and administration tools that help users with little knowledge of programming languages create and manage website content.

---

## Table of contents

-   [Requirements](#requirements)
-   [Installation](#installation)

    -   [First step](#first-step)
    -   [Second step](#second-step)
    -   [Install cms](#install-cms)

-   [Start serve](#start-serve)
-   [Commands](#commands)
-   [Fix permissions](#fix-permissions)

<a name="requirements"></a>

## Requirements:

-   Composer
-   PHP >= 8
-   MySQL >= 5.7.8

<a name="installation"></a>

## Installation

-   Install [Composer](https://getcomposer.org)
-   Create empty DB in your DBMS

<a name="first-step"></a>

#### First step

1. Clone this repository (SSH or HTTPS)
    - SSH
        ```sh
        git clone git@github.com:blackcms/cms.git
        ```
    - HTTPS
        ```sh
        git clone https://github.com/blackcms/cms.git
        ```
2. Enter the newly created folder
    ```sh
    cd blackcms
    ```
3. Copy file env.example and rename in .env
    ```sh
    cp .env.example .env
    ```
4. Configure it with your config (for DB connection and settings of your website )
    - #### For DB Sqlite connection
        ```sh
        mkdir -p database
        ```
        ```sh
        touch database/database.sqlite
        ```
5. Install dependencies
    ```sh
    composer install
    ```

<a name="second-step"></a>

#### Second step

Assets are managed with [Laravel Mix](https://github.com/JeffreyWay/laravel-mix).
You need to install [Node.js](http://nodejs.org), then go to your website folder and run these commands:

1. Install npm packages (in directory **node_modules**)
    ```sh
    npm install
    ```
2. Compile admin and public assets
    ```sh
    npm run development
    ```

<a name="install-cms"></a>

#### Install CMS

Run the installation command:

```sh
php artisan cms:install
```

<a name="start-serve"></a>

## Start serve

Finally, serve the application

```sh
php artisan serve
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) from your browser.

To access the admin panel, hit the link [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin) from your browser

<a name="commands"></a>

## Commands

### CodeSniffer check

```sh
./vendor/bin/phpcs -d --extensions=php
```

### CodeSniffer fix

```sh
./vendor/bin/phpcbf -d --extensions=php
```

### Publish assets

```sh
php artisan cms:publish:assets
```

### Publish theme assets

```sh
php artisan cms:theme:assets:publish
```

### Link storage

```sh
php artisan storage:link
```

### Remove link storage

```sh
rm -rf public/storage
```

### Clear cache

```sh
php artisan cache:clear
```

### Start

```sh
php artisan serve
```

<a name="fix-permissions"></a>

## Fix permissions

```sh
sudo chown -R $user_name:$group_name .
sudo find . -type f -exec chmod 644 {} \;
sudo find . -type d -exec chmod 755 {} \;
sudo chmod -R 777 ./storage
sudo chmod -R 777 ./bootstrap/cache/
sudo chmod -R 777 ./node_modules/
```
