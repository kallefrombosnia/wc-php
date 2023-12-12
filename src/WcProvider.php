<?php

namespace Kallefrombosnia\WcPhp;

use Kallefrombosnia\WcPhp\Exceptions\NotCLIAppException;

class WcProvider {

    public function __construct()
    {
        if (defined('STDIN')) {
            throw new NotCLIAppException('Please run this app in the CLI.');
        }
    }
}