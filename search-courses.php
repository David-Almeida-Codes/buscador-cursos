<?php

require 'vendor/autoload.php';
//require_once 'src/SearchEngine.php';

use Dac\SearchEngine\SearchEngine;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$searchEngine = new SearchEngine($client, $crawler);
$courses = $searchEngine->search('/cursos-online-programacao/php');

foreach($courses as $course){
    echo $course . PHP_EOL;
}



