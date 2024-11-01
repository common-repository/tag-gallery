<?php
/**
 * Instructions: 
 * 
 * If you are still experiencing problems of thumbnails not working, uncomment 
 * the following line and change the value to to the actual, absolute path 
 * to your website.
 * 
 * Finally comment out the other one in this file.
 * 
 */
//$_SERVER['DOCUMENT_ROOT'] = '/path/to/my/website/';

/**
 * If you set the document root above, comment this one out or delete it.
 */
$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__) . "/../../../../");