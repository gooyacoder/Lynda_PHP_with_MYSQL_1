<?php 
	
	$id = $_GET['id'] ?? '1';
	echo htmlspecialchars($id);
	//echo $id;

 ?>

<a href="show.php?name=<?php echo urlencode('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php echo urlencode('Widgets&More'); ?>">Link</a><br />
<a href="show.php?query=<?php echo urlencode('!#*?'); ?>">Link</a><br />