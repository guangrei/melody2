<?php

namespace SensioLabs\Melody\Exception;

/**
 * ParseException.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ParseException extends \LogicException
{
    public function __construct($message = null, $code = 0, \Exception $e = null)
    {
        parent::__construct($this->getHelp($message), $code, $e);
    }

    private function getHelp($message = null)
    {
        return <<<HELP
$message

The php script should look like:

<?php
<<<COMPOSER
packages:
    - "grei/tanggalmerah: *"
COMPOSER;

$t = new Grei\TanggalMerah();
var_dump($t->check());

HELP;
    }
}
