<?php
/**
 * Created by PhpStorm.
 * User: wangyi
 * Date: 16/2/27
 * Time: 00:53
 */
require_once "Page.php";
$total = 100;
$pagesize = 10;
$page = new Page($total, $pagesize);
$pageshow = $page->showpage();
echo $pageshow;