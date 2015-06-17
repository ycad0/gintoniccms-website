<?php
return array (
  'Datasources' => 
  array (
    'default' => 
    array (
      'className' => 'Cake\\Database\\Connection',
      'driver' => 'Cake\\Database\\Driver\\Mysql',
      'persistent' => false,
      'host' => 'localhost',
      'username' => 'banane',
      'password' => 'brune',
      'database' => 'doc',
      'encoding' => 'utf8',
      'timezone' => 'UTC',
      'cacheMetadata' => true,
      'quoteIdentifiers' => false,
    ),
    'test' => 
    array (
      'className' => 'Cake\\Database\\Connection',
      'driver' => 'Cake\\Database\\Driver\\Mysql',
      'persistent' => false,
      'host' => 'localhost',
      'username' => 'my_app',
      'password' => 'secret',
      'database' => 'test_myapp',
      'encoding' => 'utf8',
      'timezone' => 'UTC',
      'cacheMetadata' => true,
      'quoteIdentifiers' => false,
    ),
  ),
);
