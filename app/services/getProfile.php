<?php

require_once __DIR__.'/../../vendor/autoload.php';

use MonCompte\LemonLdap;
use MonCompte\Doctrine;
use MonCompte\Log4php;

$logger = Log4php::getLogger('services/getProfile');

$FIELDS = [
	'nom',
	'prenom',
	'statut',
	'enfants',
	'civilite',
	'genre',
	//'dateNaissance',
	//'dateInscription',
	'region',
	'devise',
];

$currentUserId = LemonLdap::getCurrentUserId();
$logger->debug("Found current user id: {$currentUserId}");

$em = Doctrine::getEntityManager();

$query = $em->createQuery('SELECT m FROM MonCompte\Doctrine\Entities\Membres m WHERE m.idAncienSi = :id');
$query->setParameters([
	'id' => $currentUserId,
]);
$result = $query->getResult();
$foundProfile = $result[0];

//print_r($foundProfile);

$sentProfile = [];

foreach ($FIELDS as $attr)
	$sentProfile[$attr] = $foundProfile->{'get'.strtoupper(substr($attr,0,1)).substr($attr,1)}();

echo json_encode($sentProfile);