<?php

namespace App\Common\Event;

use Symfony\Component\EventDispatcher\Event;

class IllegalOperationEvent extends Event {
    public $user;
    public $context;

    public function __construct($user, $context) {
        $this->user    = $user;
        $this->context = $context;
    }
}
