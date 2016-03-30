<?php
/**
 * User: Kapmat
 * Date: 2016-03-30
 * Time: 22:58
 */
include 'php/detectMobile.php';
include 'View/desktopView.php';
include 'View/mobileView.php';
include 'css/desktopDesign.css';

if (is_mobile() === false) {
    require ('View/desktopView.php');
} else {
    require ('View/mobileView.php');
}
?>