<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
// /*
require_once('ClientHTTP.php');
require_once('Comment.php');

// $client = new ClientHTTP();
// $data = new Comment();

$client = new ClientHTTP($_POST['host'], $_POST['method'], []);
// $data = new Comment($_POST['host'], $_POST['method'], []);
$data = new Comment();

if ($_POST['host']) {

	$client->setHost($_POST['host']);

} else {

	$client->setHost('example.com');

}

if ($_POST['method']) {

	$client->setMethod($_POST['method']);

} else {

	$client->setMethod('get');

}

if ($_POST['name']) {

	$data->setName($_POST['name']);

} else {

	$data->setName('Some name');

}

if ($_POST['text']) {

	$data->setText($_POST['text']);

} else {

	$data->setText('Some text');

}

switch ($client->getMethod()) {
	case 'get':
		echo $client->getHost();
		echo "<br />";
		echo $client->getMethod();
		echo "<br />";
		echo $data->getName();
		echo "<br />";
		echo $data->getText();
		echo "<br />";
		echo $client->setLastId(1);
		echo $client->getLastId();
		break;
	case 'post':
		echo $client->getHost();
		echo "<br />";
		echo $client->getMethod();
		echo "<br />";
		echo $data->getName();
		echo "<br />";
		echo $data->getText();
		echo "<br />";
		echo $client->setLastId(2);
		echo $client->getLastId();
		break;
	case 'put':
		echo $client->getHost();
		echo "<br />";
		echo $client->getMethod();
		echo "<br />";
		echo $data->getName();
		echo "<br />";
		echo $data->getText();
		echo "<br />";
		echo $client->setLastId(3);
		echo $client->getLastId();
		break;
	
	default:
		# code...
		break;
}

// */

