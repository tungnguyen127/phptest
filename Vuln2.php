<?php

namespace Test;

class Vuln2 {
    function func01($i)
    {
        $this->func02($i . '1337');
    }

    function func02($i)
    {
        $this->func03($i . '1338');
    }

    function func03($i)
    {
        $vuln3 = new Vuln3();
        $vuln3->func01($i . '1337');
    }
}
