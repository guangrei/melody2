Melody - One-file composer scripts
==================================

## INSTALLATION

with composer
```bash
composer global require grei/melody2
```
or download melody.phar directly, from [release](https://github.com/guangrei/melody2/releases).

## EXAMPLE

Create a file named `test.php`:

```php
<?php
<<<COMPOSER
packages:
    - "grei/tanggalmerah: *"
COMPOSER;

$t = new Grei\TanggalMerah();
var_dump($t->check());

```
or you can write richer script format:
```php
<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Filename: test.php
 * Descr: melody test file
 * User: Guangrei
 * Date: Jan 03, 2022
 * Time:  17:35:02 WIB
 */
<<<COMPOSER
packages:
    - "grei/tanggalmerah: *"
COMPOSER;

$t = new Grei\TanggalMerah();
var_dump($t->check());

```


And simply run it:

```bash
$ melody run test.php
```
