<?php
$CFG = new stdClass();
$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = '25G2030';
$CFG->dbuser    = '25G2030';
$CFG->dbpass    = 'anehoung123';
$CFG->prefix    = 'mdl_';
$CFG->wwwroot   = 'https://25g2030.systeme-res30.app';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;
$CFG->sslproxy = true; // <- très important pour HTTPS derrière Nginx
require_once(__DIR__ . '/lib/setup.php');
