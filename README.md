Melody - One-file composer scripts
==================================

```bash
composer global require grei/melody2
```

Create a file named `test.php`:

```php
<?php
<<<COMPOSER
packages:
    - "symfony/finder: ~2.8"
COMPOSER;

$finder = Symfony\Component\Finder\Finder::create()
    ->in(__DIR__)
    ->files()
    ->name('*.php')
;

foreach ($finder as $file) {
    echo $file, "\n";
}
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
    - "symfony/finder: ~2.8"
COMPOSER;

$finder = Symfony\Component\Finder\Finder::create()
    ->in(__DIR__)
    ->files()
    ->name('*.php')
;

foreach ($finder as $file) {
    echo $file, "\n";
}
```


And simply run it:

```bash
$ melody run test.php
```
