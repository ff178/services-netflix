<?php

    define('LIBS','libs/');
    define('MODELS','./models/');
    define('BS','../bussinesLogic/');
    define('BL','../bussinesLogic/');
    define('MODULE','./views/modules/');

$dbtype = "mysql";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "netflix";

switch ($source) {
  case 'app':
  /*
    App
  */
  define('URL', 'http://54.213.230.248/services-netflix/');

  define('_DB_TYPE', $dbtype);
  define('_DB_HOST' , $dbhost);
  define('_DB_USER' , $dbuser );
  define('_DB_PASS' , $dbpass );
  define('_DB_NAME' , $dbname);

  define('HASH_ALGO' , 'sha512');
  define('HASH_KEY' , 'my_key');
  define('HASH_SECRET' , 'my_secret');
  define('SECRET_WORD' , 'so_secret');
    break;
  case 'services':
  /*
  Services
  */
  define('URL', 'http://localhost/netflix/Services/');
  define('LOCAL_SERVER',false);

  define('DB_HOST', $dbhost);
  define('DB_USER', $dbuser);
  define('DB_PASS', $dbpass);
  define('DB_NAME', $dbname);
  define('DB_TYPE', $dbtype);

  define('HASH_KEY', '1234');
  define('HASH_SECRET', '5678');
  define('HASH_PASSWORD_KEY', '9123');
  define('SECRET_WORD', 'scrtwrd');

  break;
}
