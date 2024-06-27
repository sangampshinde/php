<?php
// syntax
// setcookie(name, value,expires,path,domain,secure,httponly);
// name->it contains cookie name
// value->it contains value
// expires->it contains data to expire at timestamp
// path->it contains cookie available path / for entire website and othe like /home it available only for home page
// domain->it contains cokikies authority 
// secure->it work only with https only
// httonly->it work only with http class only.

setcookie('fruite',"apples",time()+(60*60*24),"/");
// application of browser
// fruite	apples	localhost	/	2024-06-28T16:01:01.012Z	12					Medium

if(isset($_COOKIE["fruite"]))
{
    echo "<pre>";
    print_r($_COOKIE["fruite"]);//apples
}else{
    echo "cookie not set";
}

print_r($_COOKIE);
// Array
// (
//     [fruite] => apples
// )











?>