<?php

namespace Test;

class Vuln3
{
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
        $o = $i . $i;
        system($o);
    }
}
