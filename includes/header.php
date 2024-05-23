<?php

$name = 'Maxwell Hogg';
$dob = '12th March 1984';
$tel = '07407 293 295';
$email = 'maxy.hogg@gmail.com';
$personal_statement = 'I am an enthusiastic, reliable, loyal and trustworthy individual with a solid work ethic and excellent practical skills. Although my background in employment has revolved around more physical work, I am very keen to transition to working in web design and development. I have spent the last year completely committed to learning front-end languages such as HTML, CSS and Javascript and I would love to get some hands-on experience to continue my learning journey.';
$employment = array(
    'Nordic Tyres' => array(
        'Job Title' => 'Tyre Fitter/Warehouse Operative',
        'Dates' => 'February 2019 - Present',
        'Responsibilities' => 'Fitting agricultural and forestry tyres, preparing orders for despatch via an integrated barcoding system, loading haulage carriers, receiving container deliveries, completing regular stock checks, general housekeeping.',
    ),
    'A & G King Timber Ltd.' => array(
        'Job Title' => 'Machine Operator',
        'Dates' => 'July 2017 - February 2019',
        'Responsibilities' => 'Cutting and processing various timber dimensions at the request of the line manager, carrying out regular size checks, loading haulage vehicles, and carrying out regular maintenance on equipment.',
    ),
    'Marshalls PLC (Locharbriggs Quarry)' => array(
        'Job Title' => 'Stone Polisher/Machine Operator',
        'Dates' => 'August 2014 - July 2017',
        'Responsibilities' => 'Cutting various stone dimensions at the request of the production manager, polishing the finished product, carrying out regular size checks, palletising stones in accordance with customer order preference, loading haulage vehicles, regular equipment maintenance and general housekeeping duties.',
    ),
    'Argos (Church Place)' => array(
        'Job Title' => 'Stockroom/Sales Assistant',
        'Dates' => 'June 2012 - August 2014',
        'Responsibilities' => 'Picking customer orders, taking deliveries and using voice operated technology to relocate newly delivered items within the stockroom, assembling cages containing old stock for return to the appropriate warehouses, carrying out regular stock checks, serving customers and assisting customers when required.',
    ),
    'A & G King Timber Ltd.' => array(
        'Job Title' => 'Machine Operator/',
        'Dates' => 'May 2003 - September 2008',
        'Responsibilities' => 'Cutting and processing various timber dimensions at the request of the line manager, carrying out regular size checks, loading haulage vehicles, and carrying out regular maintenance on equipment.',
    ),
    'Wallaces Express' => array(
        'Job Title' => 'Machine Operator/',
        'Dates' => 'July 2002 - May 2003',
        'Responsibilities' => 'Assembling customer orders, loading vans appropriately and in a safe manner, delivering stock to customers, receiving deliveries and placing new stock in the appropriate positions within the warehouse, general housekeeping duties.',
    ),
);
$education = array(
	'The University of Glasgow' => array(
		'Subject' => 'BSc Hons Psychology',
		'Dates' => '',
		'Qualification' => '',
	),
	'Langside College, Glasgow' => array(
		'Subject' => 'Access to Humanities (Int.2/Higher Maths, English, IT,',
		'Dates' => '',
		'Qualification' => '',
	),
	'Dumfries High School' => array(
		'Subject' => 'Standard Grade English, Maths, History, Art & Design',
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/common.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
</head>
<body>
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