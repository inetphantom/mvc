<?php

use App\Repository\UserRepository;

require_once __DIR__.'/../vendor/autoload.php';

$userRepository = new UserRepository();
$userRepository->create('Ramon',  'Binz',  'ramon.binz@bbcag.ch',   'ramon');
$userRepository->create('Samuel', 'Wicky', 'samuel.wicky@bbcag.ch', 'samuel');