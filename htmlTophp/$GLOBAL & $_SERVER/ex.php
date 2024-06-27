<?php

$a=10;
$data=20;
echo "<pre>";
print_r($GLOBALS);//global userdefined variable lists

// Array
// (
//     [_GET] => Array
//         (
//         )

//     [_POST] => Array
//         (
//         )

//     [_COOKIE] => Array
//         (
//         )

//     [_FILES] => Array
//         (
//         )

//     [a] => 10
//     [data] => 20
// )

print_r($_SERVER);//give server information

// Array
// (
//     [MIBDIRS] => C:/xampp/php/extras/mibs
//     [MYSQL_HOME] => \xampp\mysql\bin
//     [OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf
//     [PHP_PEAR_SYSCONF_DIR] => \xampp\php
//     [PHPRC] => \xampp\php
//     [TMP] => \xampp\tmp
//     [HTTP_HOST] => localhost
//     [HTTP_CONNECTION] => keep-alive
//     [HTTP_CACHE_CONTROL] => max-age=0
//     [HTTP_SEC_CH_UA] => "Not/A)Brand";v="8", "Chromium";v="126", "Google Chrome";v="126"
//     [HTTP_SEC_CH_UA_MOBILE] => ?0
//     [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
//     [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
//     [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36
//     [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
//     [HTTP_SEC_FETCH_SITE] => none
//     [HTTP_SEC_FETCH_MODE] => navigate
//     [HTTP_SEC_FETCH_USER] => ?1
//     [HTTP_SEC_FETCH_DEST] => document
//     [HTTP_ACCEPT_ENCODING] => gzip, deflate, br, zstd
//     [HTTP_ACCEPT_LANGUAGE] => en-GB,en-US;q=0.9,en;q=0.8
//     [PATH] => C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Git\cmd;C:\Users\sanga\AppData\Roaming\nvm;C:\Program Files\nodejs;C:\Windows\System32\cmd.exe;C:\Program Files\MongoDB\Server\6.0\bin;C:\Program Files\MongoDB\Server\6.0\bin;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Users\sanga\AppData\Local\Microsoft\WindowsApps;C:\Users\sanga\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\sanga\AppData\Roaming\nvm;C:\Program Files\nodejs;C:\Users\sanga\AppData\Roaming\Composer\vendor\bin;C:\Users\sanga\AppData\Local\Programs\Ollama
//     [SystemRoot] => C:\WINDOWS
//     [COMSPEC] => C:\WINDOWS\system32\cmd.exe
//     [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
//     [WINDIR] => C:\WINDOWS
//     [SERVER_SIGNATURE] => 
// Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80


//     [SERVER_SOFTWARE] => Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
//     [SERVER_NAME] => localhost
//     [SERVER_ADDR] => ::1
//     [SERVER_PORT] => 80
//     [REMOTE_ADDR] => ::1
//     [DOCUMENT_ROOT] => C:/xampp/htdocs
//     [REQUEST_SCHEME] => http
//     [CONTEXT_PREFIX] => 
//     [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs
//     [SERVER_ADMIN] => postmaster@localhost
//     [SCRIPT_FILENAME] => C:/xampp/htdocs/php-programing/Array/htmlTophp/$GLOBAL/ex.php
//     [REMOTE_PORT] => 51636
//     [GATEWAY_INTERFACE] => CGI/1.1
//     [SERVER_PROTOCOL] => HTTP/1.1
//     [REQUEST_METHOD] => GET
//     [QUERY_STRING] => 
//     [REQUEST_URI] => /php-programing/Array/htmlTophp/$GLOBAL/ex.php
//     [SCRIPT_NAME] => /php-programing/Array/htmlTophp/$GLOBAL/ex.php
//     [PHP_SELF] => /php-programing/Array/htmlTophp/$GLOBAL/ex.php
//     [REQUEST_TIME_FLOAT] => 1719472260.7319
//     [REQUEST_TIME] => 1719472260
// )

print_r($_SERVER['REQUEST_URI']);//specific request 

// /php-programing/Array/htmlTophp/$GLOBAL/ex.php



?>