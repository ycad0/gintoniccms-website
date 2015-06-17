<?php
return array (
  'EmailTransport' => 
  array (
    'default' => 
    array (
      'className' => 'Mail',
      'host' => 'localhost',
      'port' => 25,
      'timeout' => 30,
      'username' => 'user',
      'password' => 'secret',
      'client' => NULL,
      'tls' => NULL,
    ),
  ),
  'Email' => 
  array (
    'default' => 
    array (
      'transport' => 'default',
      'from' => 'phil.laf@gmail.com',
    ),
  ),
);