<?php
/**
 * User: Kapmat
 * Date: 2016-03-30
 * Time: 22:58
 */
include 'src/php/detectMobile.php';

if (is_mobile() === false) {
    require('mobileView.php');
} else {
    require('mobileView.php');
}
?>