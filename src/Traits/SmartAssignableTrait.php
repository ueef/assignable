<?php

namespace Ueef\Assignable\Traits {

    trait SmartAssignableTrait
    {
        /**
         * @param array $parameters
         */
        public function __construct(array $parameters = [])
        {
            $this->assign($parameters);
        }

        /**
         * @param array $parameters
         * @return void
         */
        public function assign(array $parameters)
        {
            foreach ($parameters as $key => $value) {
                $setterMethod = 'set' . ucfirst($key);
                if (method_exists($this, $setterMethod)) {
                    $this->$setterMethod($value);
                    continue;
                }

                if (property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        }
    }
}

