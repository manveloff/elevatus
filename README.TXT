README of the project, or HOWTO USE
--------------------------------

    # Links
    # Get Hamming / Levenshtein distance
    # Unit tests
    # CLI
    # Web page
    # Docker

--------------------------------

> Links

    # You can find and check the project here:
    https://phpsandbox.io/e/x/ztj09?layout=EditorPreview&defaultPath=%2F&theme=dark&showExplorer=no&openedFiles=

> Getting Hamming / Levenshtein distance

    How to use the Distance class?
    Let's review an example:

    require_once('Distance.php');
    $str1 = 'One';
    $str2 = 'Once';
    $hamming_dist = HammingDistance::get($str1, $str2);
    $levenshtein_dist = LevenshteinDistance::get($str1, $str2)

> Unit tests

    I used PHPUnit for unit tests.
    Ensure that you've installed the package user composer.

      $ cd <folder with the project>
      $ php composer.phar install

    There are two unit tests testing calculating of
    Hamming / Levenshtein distance.

      $ ./vendor/bin/phpunit DistanceTest.php --testdox

> CLI

    You will be prompted to type 2 strings.
    Then the CLI will output a Levenshtein distance.

    $ chmod +x cli.php
    $ ./cli.php

> Web page

    Web page is available in the "index.php" file.
    You will be prompted to type 2 strings, then push the button.
    The Levenshtein distance result will appear below.

    > In local development environment

        $ php -S localhost:8080

    > Using Docker

        $ cd <folder with the project>
        $ docker run -it --rm --name elevatus -v "$PWD":/home/elevatus -w /home/elevatus -p 8080:8080 php:8.1-fpm-alpine sh
        $ docker ps
        $ docker exec -it <CONTAINER ID>
        $ php -S 0.0.0.0:8080

> Docker

    You can use Docker to play with the project inside
    a container with Alpine and php 8.1:

    $ cd <folder with the project>
    $ docker run -it --rm --name elevatus -v "$PWD":/home/elevatus -w /home/elevatus php:8.1-fpm-alpine sh
