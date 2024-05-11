<?php
	include './includes/header.php';
?>
	<section class="hero">
		<img src="/images/profile.jpg" alt="My profile image">
	</section>
	<section class="hero-profile">
		<table class"hero-profile-list">
			<tr>
				<td><strong>Name:</strong></td>
				<td><?= $name ?></td>
			</tr>
			<tr>
				<td><strong>Date of Birth:</strong></td>
				<td><?= $dob ?></td>
			</tr>
			<tr>
				<td><strong>Tel:</strong></td>
				<td><?= $tel ?></td>
			</tr>
			<tr>
				<td><strong>Email:</strong></td>
				<td><a href="mailto:<?= $email ?>"><?= $email ?></td>
			</tr>
		</table>
	</section>
	<section class="cv-main">
		<div class="main-container personal-statement">
			<h1>Personal Statement</h1>
			<p><?= $personal_statement ?></p>
		</div>
		<div class="main-container employment">
			<h1>Employment</h1>
			<?php $keys = array_keys($employment);
			for($i = 0; $i < count($employment); $i++): ?>
			<div class="info-block">
			<h3 class="info-heading"><?= $keys[$i] ?></h3>
			<?php foreach ($employment[$keys[$i]] as $key => $value): ?>
			<p><strong><?= $key ?></strong>: <?= $value ?></p>
			<?php endforeach; ?>
			</div>
			<?php endfor; ?>
		</div>
		<div class="main-container education">
			<h1>Education</h1>
			<?php $keys = array_keys($education);
			for($i = 0; $i < count($education); $i++): ?>
			<div class="info-block">
			<h3 class="info-heading"><?= $keys[$i] ?></h3>
			<?php foreach ($education[$keys[$i]] as $key => $value): ?>
			<p><strong><?= $key ?></strong>: <?= $value ?></p>
			<?php endforeach; ?>
			</div>
			<?php endfor; ?>
		</div>
		<div class="main-container skills">
			<h1>Skills</h1>
			<p><?= $skills ?></p>
		</div>
		<div class="main-container interests">
			<h1>Interests</h1>
			<p><?= $interests ?></p>
		</div>
		<div class="main-container references">
			<h1>References</h1>
			<p>I can provide references <a href="mailto:<?= $email ?>">upon request</a>.</p>
		</div>				
	</section>
   <footer>
     <div class="footer-container">
	 	<div class="social-media">
	 		<h4>Social Media</h4>
	 		<ul>
	 			<li><a href="">Github</a></li>
	 			<li><a href="">LinkedIn</a></li>
	 			<li><a href="">Instagram</a></li>
	 		</ul>
	 	</div>
	 	<div class="social-media2">
	 		<h4>Social Media</h4>
	 		<ul>
	 			<li><a href="">Github</a></li>
	 			<li><a href="">LinkedIn</a></li>
	 			<li><a href="">Instagram</a></li>
	 		</ul>
	 	</div>
	 	<div class="social-media3">
	 		<h4>Social Media</h4>
	 		<ul>
	 			<li><a href="">Github</a></li>
	 			<li><a href="">LinkedIn</a></li>
	 			<li><a href="">Instagram</a></li>
	 		</ul>
	 	</div>
	 </div>
	 </footer>
</body>
</html>