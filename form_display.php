<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Form Display</title>
</head>
<body>
	<h1>This page displays data collected using the custom form in previous page.</h1>
	<?php if($_SERVER["REQUEST_METHOD"]=="GET") {?>
		<h2>This page was accessed using HTTP GET method</h2>
	<?php } elseif($_SERVER["REQUEST_METHOD"]=="POST") { ?>
		<h2>This page was accessed using HTTP POST method</h2>
	<?php } ?>
	
	<hr />
	<h1>Form Details</h1>
	
	<dl>
		<dt>ID:</dt>
		<dd><?= $_GET["id"] ?> </dd>
		<dt>Username:</dt>
		<dd><?= $_REQUEST["username"] ?> </dd>
		<dt>Password:</dt>
		<dd><?= $_REQUEST["pwd"] ?> </dd>
		<dt>Comments:</dt>
		<dd><?= $_POST["comments"] ?> </dd>
		<dt>Is Food 1 Checked?:</dt>
		<dd><?= isset($_POST["food1"])?'Yes':'No' ?> </dd>
		<dt>Year of Study:</dt>
		<dd><?= $_POST["yearOfStudy"] ?> </dd>
		<dt>Favorite Movies:</dt>
		<dd>
			<ul>
				<?php foreach($_POST["favoriteMovies"] as $favMovie) { ?>	
					<li><?= $favMovie ?> </li>
				<?php } ?>
			</ul>
		</dd>
		<dt>My Avatar</dt>
		<dd>
			<?php  
				$tempFilePath = $_FILES["avatar"]["tmp_name"];
				if(is_uploaded_file($tempFilePath)) {
					$filePath = "./uploaded_files/" . $_FILES["avatar"]["name"];
					move_uploaded_file($tempFilePath, $filePath);
			?>		
				<img src="<?= $filePath ?>" alt="" />
			<?php } ?>	

		</dd>
	</dl>

</body>
</html>















