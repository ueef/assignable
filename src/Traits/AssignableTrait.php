<?php
declare(strict_types=1);

namespace Ueef\Assignable\Traits;

trait AssignableTrait
{
    public function assign(array $parameters)
    {
        foreach ($parameters as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}

