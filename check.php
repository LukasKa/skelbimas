<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;


$loader = require_once __DIR__.'/app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);

use Skelbimas\EventBundle\Entity\Event;

$event = new Event();
$event->setMarke('Alfa Romeo');
$event->setModelis('Giulia');
$event->setKomentaras('Brum brum');
//$event->setDetails('');


$em = $container->get('doctrine')->getManager();
$em->persist($event);
$em->flush();