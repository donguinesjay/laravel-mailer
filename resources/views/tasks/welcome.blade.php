<!DOCTYPE html>
<html>
<head>
    <title>Mailer</title>
</head>
<body>
<h1>HELLO MAILER!</h1>

<ul>
	<?php foreach ($tasks as $task): ?>
		<li>
			<a href="/tasks/{{ $task->id }}">
				<?= $task->body;?>
			</a>
		</li>
	<?php endforeach;?>
</ul>
</body>
</html>