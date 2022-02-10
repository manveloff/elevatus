<?php
declare(strict_types=1);
require_once('Distance.php');

// Read strings input
$a = htmlspecialchars($_POST['str1'] ?? '');
$b = htmlspecialchars($_POST['str2'] ?? '');

// Try to get the Levenshtein distance
try {
	$result = 'Result: '.LevenshteinDistance::get($a, $b);
} catch(Throwable $e) {
  $result = $e->getMessage();
}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Levenshtein Distance</title>
</head>
<body>
<div>
	<h1>Get Levenshtein distance</h1>
	<form action="index.php" method="post">
		<p>First string: <input type="text" name="str1" /></p>
		<p>Second string: <input type="text" name="str2" /></p>
		<p><input type="submit" /></p>
	</form>
	<div>
    <?php echo $result; ?>
	</div>
</div>
</body>
</html>
