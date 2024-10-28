<?php

declare(strict_types=1);

use Rocont\OrchidRepeaterField\Http\Controllers\Systems\RepeaterController;

$this->router->post('repeater', [RepeaterController::class, 'view'])->name('systems.repeater');
