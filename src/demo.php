#!/usr/bin/php
<?php
/**
 * demo.php
 *
 * PHP version 5
 *
 * @category PHP
 * @package  /
 * @author   Fukuball Lin <fukuball@gmail.com>
 * @license  MIT Licence
 * @version  GIT: <fukuball/iloveck101>
 * @link     https://github.com/fukuball/iloveck101
 */
ini_set('memory_limit', '1024M');

// autoload
require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';
require_once dirname(__FILE__)."/class/ClassAutoloader.php";

$seg_list = Jieba::cut("他来到了网易考察大厦 A test，\n我来到北京清华大学");
print_r($seg_list);

//$multiArray = new Tebru\MultiArray(array());
//$multiArray->set('key1', 'value');
//$multiArray->set('key2.nested-key', 'value');
//$multiArray->set('key2.newKey', 'value');
//var_dump($multiArray->get('key2'));
?>