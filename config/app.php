<?php

// Path: config\app.php
// this file contains all the constants and the initialization of the application, it needs to be required in controller

define('APP_PATH', '../');
define('UPLOADS_PATH', APP_PATH . 'uploads/');

require('config.php');
require('requestFunctions.php');
require('fileFunctions.php');
require('model/data.class.php');
require('model/mysqldataprovider.class.php');


Data::initialize(new MysqlDataProvider(CONFIG['db']));
