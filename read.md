# Teste Unitário

## Comandos para rodar

    1º Instale o Composer e veja se o PHP está instalado

    2º Rode: composer init

    3º Rode: composer require --dev phpunit/phpunit

    4º Rode: composer exec -m

    5º Rode: composer dump-autoload -o

    E por último rode: $ ./vendor/bin/phpunit tests/ProductTest.php

## Caso esteja usando os servidores do Xampp:

* mova o arquivo da pasta dll para o seguinte path: ./xampp/php/ext. Após isso, abra o arquivo php.ini do seguinte path: ./xampp/php

* cole o seguinte código no php.ini, após o XSL:
    
[xdebug]
zend_extension ="C:/xampp/php/ext/php_xdebug-3.2.2-8.0-vs16-x86_64.dll"


xdebug.remote_enable = off
xdebug.profiler_enable = off
xdebug.profiler_enable_trigger = Off
xdebug.profiler_output_name = cachegrind.out.%t.%p
xdebug.profiler_output_dir ="C:/xampp/tmp"
xdebug.show_local_vars=0

* COLE o seguinte código no Git bash: 

$ XDEBUG_MODE=coverage ./vendor/bin/phpunit tests --coverage-html coverage --coverage-filter app/libraries