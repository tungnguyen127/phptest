<?php

namespace Test;

class BaseVuln extends BaseVuln2 {
    function func01($name, $password) {
        system($password);
    }

    function func04($name, $password) {
        system($name);
    }
}
