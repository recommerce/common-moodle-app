<?php
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();

$CFG->dbtype    = getenv("MOODLE_DATABASE_TYPE");
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv("MOODLE_DATABASE_HOST");
$CFG->dbname    = getenv("MOODLE_DATABASE_NAME");
$CFG->dbuser    = getenv("MOODLE_DATABASE_USER");
$CFG->dbpass    = getenv("MOODLE_DATABASE_PASSWORD");
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => '',
    'dbhandlesoptions' => false,
    'dbcollation' => 'utf8mb4_unicode_ci', 
);

$CFG->wwwroot   = getenv('MOODLE_URL');
$CFG->dataroot  = '/var/moodledata';
$CFG->directorypermissions = 02777;
$CFG->admin = 'admin';

require_once(__DIR__ . '/lib/setup.php'); // Do not edit

