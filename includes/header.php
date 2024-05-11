<?php

$name = 'Maxwell Hogg';
$dob = '12th March 1984';
$tel = '07407 293 295';
$email = 'maxy.hogg@gmail.com';
$personal_statement = 'I am currently working as a tyre fitter at Nordic Tyres. Although I love the job...';
$employment = array(
    'Nordic Tyres' => array(
        'Job Title' => 'Tyre Fitter/Warehouse Operative',
        'Dates' => 'February 2019 - Present',
        'Responsibilities' => 'Fitting agricultural and forestry tyres, preparing orders for despatch, loading carriers, receiving container deliveries, general housekeeping.',
    ),
    'A & G King Timber Ltd.' => array(
        'Job Title' => 'Machine Operator',
        'Dates' => 'July 2017 - February 2019',
        'Responsibilities' => 'Operating various timber processing equipment such as bandsaw, crosscutter, horizontal saw, and chamfering machine, preparing orders for despatch, general housekeeping.',
    ),
    'Marshalls PLC (Locharbriggs Quarry)' => array(
        'Job Title' => 'Stone Polisher/',
        'Dates' => 'August 2014 - July 2017',
        'Responsibilities' => ', general housekeeping.',
    ),
    'Argos (Church Place)' => array(
        'Job Title' => 'Stone Polisher/',
        'Dates' => 'June 2012 - August 2014',
        'Responsibilities' => ', general housekeeping.',
    ),
    'A & G King Timber Ltd.' => array(
        'Job Title' => 'Machine Operator/',
        'Dates' => 'May 2003 - September 2008',
        'Responsibilities' => 'Operating various timber processing equipment such as bandsaw, crosscutter, horizontal saw, and chamfering machine, preparing orders for despatch, general housekeeping.',
    ),
    'Wallaces Express' => array(
        'Job Title' => 'Machine Operator/',
        'Dates' => 'July 2002 - May 2003',
        'Responsibilities' => 'Operating various timber processing equipment such as bandsaw, crosscutter, horizontal saw, and chamfering machine, preparing orders for despatch, general housekeeping.',
    ),
);
$education = array(
	'The University of Glasgow' => array(
		'Subject' => 'BSc Hons Psychology',
		'Dates' => '',
		'Qualification' => '',
	),
	'Langside College, Glasgow' => array(
		'Subject' => 'Access to Humanities',
		'Dates' => '',
		'Qualification' => '',
	),
	'Dumfries High School' => array(
		'Subject' => 'BSc (Hons) Psychology)',
		'Dates' => '',
		'Qualification' => '',
	),
);
$skills = '';
$interests = 'In my spare time, I enjoy...';
$references = 'I can provide references upon further enquiry.';
$nav_items = [
	'index.php' => 'CV',
	'skills.php' => 'Skills',
	'contact.php' => 'Contact',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8" />
 	<title><?= $name ?> &bull; <?= $page_title ?></title>
   <meta name="viewport" content="width=device-width,initial-scale=1" />
   <meta name="description" content="" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/shared.css" />
   <link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>
<body>
	<?php
		$page_title = "Home";
	?>
	<section class="navbar">
		<div class="navbar-container">
			<div class="navbar-logo">
				<a href="index.php">MAXWELL HOGG - CV</a>
			</div>
			<ul class="navbar-list-items">
				<?php foreach ($nav_items as $page_link => $nav_item): if ($nav_item === 'Contact'): ?>
					<li class="navbar-list-item navbar-list-item__contact"><a href="<?= $page_link ?>"><?= $nav_item ?></a></li>
				<?php else: ?>
					<li class="navbar-list-item"><a href="<?= $page_link ?>"><?= $nav_item ?></a>
				<?php endif; endforeach; ?>			</ul>
		</div>
	</section>