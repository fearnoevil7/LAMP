<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Great Number Game</title>
</head>
<body>
	<?= $this->session->userdata('number'); ?>
	<?= $this->session->flashdata('result'); ?>
	<?= $this->session->flashdata('correct'); ?>
	<h1>The Great Number Game</h1>
	<p>I Am Thinking of A Number Between 1 and 100</p>
	<p>Take A Guess!</p><br>
	<?php if($this->session->flashdata('result')) { ?>
		<p style="background-color: red; width: 70px; height: 52px;"><?= $this->session->flashdata('result'); ?></p>
	<?php } else if($this->session->flashdata('correct')) { ?>
		<p style="background-color: green; width: 70px; height: 52px;"><?= $this->session->flashdata('correct'); ?></p>
	<?php } ?>
	<form action="check" method="post">
		<span>Guess: </span><input type="number" name="guess"/>
		<input type="submit" value="Submit"/>
	</form>

</body>
</html>