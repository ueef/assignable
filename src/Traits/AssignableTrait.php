<?php

namespace Ueef\Assignable\Traits {

    trait AssignableTrait
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
                if (property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        }
    }
}

