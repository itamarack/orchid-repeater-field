<?php

declare(strict_types=1);

namespace Rocont\OrchidRepeaterField\Exceptions;

use JetBrains\PhpStorm\Pure;
use Throwable;

class UnsupportedAjaxDataLayout extends \Exception
{
    #[Pure]
    public function __construct(string $layout, int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct(
            "To use ajaxData your layout \"{$layout}\" should use trait \Rocont\OrchidRepeaterField\Traits\AjaxDataAccess",
            $code,
            $previous
        );
    }
}
