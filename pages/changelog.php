<?php include("include/navbar.html")?>
<!DOCTYPE html>
<html lang="pt">

<header>
	<title>NONAME Brasil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</header>

<style>
</style>

<body>
	<img src="../assets/1.png">
	<div class="jumbotron">
		<h1>Changelog</h1>
		<ul>
			<li>Project Started</li>
			<li>V 0.0.1
				<ul>
				<li>Added movement system</li>
				<li>Added smooth camera follow</li>
				<li>Added character model</li>
				</ul>
			</li>
			<li>V 0.0.2</li>
				<ul>
				<li>Added animation integration with movement</li>
				<li>Added inventory UI (not functional)</li>
				</ul>
			<li>V 0.0.3</li>
				<ul>
				<li>Added inventory system</li>
				<li>Added item_asset class (stores item info)</li>
				<li>Added weapon and armor class (same as above)</li>
				</ul>
			<li>V 0.0.4</li>
				<ul>
				<li>Added an equipment system</li>
				<li>Added a combat manager class</li>
				</ul>
			<li>V 0.0.5</li>
				<ul>
				<li>Added integration between equipment system and combat manager</li>
				<li>Added integration between animation and combat manager</li>
				<li>Added collisions to the attack animation</li>
				<li>Added a dummy enemy</li>
				<li>Made possible to deal damage do to enemies</li>
				</ul>
			<li>V 0.0.6</li>
				<ul>
				<li>Added a new map</li>
				<li>Added falling animation</li>
				</ul>
			<li>V 0.0.7</li>
				<ul>
				<li>Added skill system (would'nt work)</li>
				<li>Added skill_asset class (holds skill info)</li>
				</ul>
			<li>V 0.0.8</li>
				<ul>
				<li><b>Started refactoring the game system</b></li>
				<li>Refactored movement system</li>
				<li>Added an animation manager system</li>
				</ul>
			<li>V 0.0.9</li>
				<ul>
				<li>Refactored inventory system</li>
				<li>Refactored combat system</li>
				<li>Added an input manager system</li>
				<li>Added an interface manager system</li>
				<li>Added an state manager system</li>
				<li>Added integration between all managers</li>
				</ul>
			<li>V 0.1.0</li>
				<ul>
				<li>Revamped inventory and item_asset system</li>
				<li>Revamped animation and animator_helper system</li>
				<li>Added a skill system with skill_asset class</li>
				<li>Added integration between skill system, combat manager and animation manager</li>
				</ul>
			<li>V 0.1.1</li>
				<ul>
				<li><b>W.I.P</b></li>
				</ul>
		</ul>
	</div>
</body>
</html>
<?php include("include/footer.html")?>