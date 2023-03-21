<?php

namespace Test;

class Vuln extends BaseVuln
{
    function func01($name, $password)
    {
        parent::func01($name, $password);
        var_dump($name);
        $name_tag = '<strong>' . $name . '</strong>';
        $this->func02($name_tag);

        return $password;
    }

    function func02($name)
    {
        $vuln2 = new Vuln2();
        $vuln2->func01($name);
    }
}

function func03($name)
{
    echo $name;
    $still_name = $name . '!!!';
    var_dump($name);
    return system($name);
}

function getName() {
    return $_GET["name"] . "!!!";
}

$name = $_GET['name'];
$password = $_GET['password'];
$also_name = $name;

$also_name->$password($name);
$also_name($password);

$vuln = new Vuln();
$vuln->func01($name, $password);
func03($name);
$vuln->func04($name, $password);
$vuln->func05(getName());
func03(getName());
$wpdb->query($name);
