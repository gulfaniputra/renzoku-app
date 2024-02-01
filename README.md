# Renzoku App

_**Note:** this project is a work in progress_

A spartan web application for displaying users' favorite Japanese television series.

The name 'Renzoku' comes from the Japanese romanization of 連続ドラマ that means 'drama serial'.

## Table Of Contents

-   [Introduction](#introduction)
-   [Local Server Installation](#local-server-installation)
-   [Stack](#stack)

## Introduction

This is an initial attempt at developing a simple Laravel web application.

The objective is to learn and apply basic web development concepts such as API call.

## Local Server Installation

-   Clone the repo:

    ```
    $ git clone https://github.com/gulfaniputra/renzoku-app.git
    ```

-   Move to the `renzoku-app` directory on your local machine:

    ```
    $ cd renzoku-app
    ```

-   Copy `.env.example` and rename it as `.env`.

-   Configure the database section in `.env`:

    ```
    ...

    DB_CONNECTION=<my_connection>
    DB_HOST=<my_host>
    DB_PORT=<my_port>
    DB_DATABASE=<my_database>
    DB_USERNAME=<my_username>
    DB_PASSWORD=<my_password>

    ...
    ```

-   Add your TMDB API Read Access Token to `.env`:

    ```
    ...

    TMDB_TOKEN=<my_token>
    ```

-   Setup your TMDB token in `services.php`:

    ```
    ...

            'tmdb' => [
            'token' => env('TMDB_TOKEN'),
        ],

    ];
    ```

-   Install the app’s dependencies:

    ```
    $ composer install
    $ npm install
    ```

-   Generate the `APP_KEY` in `.env` to a random string:

    ```
    $ php artisan key:generate
    ```

-   Create the migration repository:

    ```
    $ php artisan migrate
    ```

-   Seed the database:

    ```
    $ php artisan db:seed
    ```

-   Start Laravel's local development server:

    ```
    $ php artisan serve
    ```

## Stack

-   TMDB API 3
-   Laravel 10
-   jQuery 3
-   Ajax
-   Bootstrap 5
