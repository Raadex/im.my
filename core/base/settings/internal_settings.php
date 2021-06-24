<?php

defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/views/';
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;
const QTY = 8;
const QTY_LINK = 3;

const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
const USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

use core\base\exceptions\RouteException;

function autoloadMainClasses($className)
{
    $className  = str_replace('\\', '/', $className);

    if (!@include_once $className . '.php') {
        throw new RouteException('Неверное имя файла для подключения - ' . $className);
    }
}
spl_autoload_register('autoloadMainClasses');