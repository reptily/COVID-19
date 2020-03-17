<?php

namespace COVID;

class Init
{

    public function __construct(int $perDead)
    {
        if (rand(0, 100) >= $perDead) {
            die();
        }
    }

}
