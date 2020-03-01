<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>My First Form</title>
		<style>
			input[type="text"] {
				background-color: yellow;
				color: red;
			}
		</style>
	</head>
	<body>
		<h1>Google Search</h1>
		<form action="http://www.google.com/search">
			Search String: <input type="text" name="q" />
			<input type="submit" value="Search" />
		</form>
		<hr />
		<h1>My Custom Form</h1>
		<form action="form_display.php?id=123" method="post" enctype="multipart/form-data">
			<dl>
				<dt>Username:</dt>
				<dd><input type="text" value="admin" name="username" size="10" maxlength="15" /></dd>
				<dt>Password:</dt>
				<dd><input type="password" name="pwd" value="defaultPassword" /></dd>
				<dt>Comments:</dt>
				<dd>
				<textarea name="comments" cols="30" rows="10">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum veritatis molestiae itaque, eos asperiores atque labore a beatae mollitia veniam dolore, ullam odit minima in expedita accusamus quia laborum nam.
				</textarea>
				</dd>
				<dt>Favorite Food</dt>
				<dd>
				Food 1<input type="checkbox" name="food1" />
				Food 2<input type="checkbox" name="food2" checked="asdas" />
				Food 3<input type="checkbox" name="food3" />
				Food 4<input type="checkbox" name="food4" />
				</dd>
				<dt>Year of Study</dt>
				<dd>
				Year 1: <input type="radio" name="yearOfStudy" value="year1" />
				Year 2: <input type="radio" name="yearOfStudy" value="year2" checked="" />
				Year 3: <input type="radio" name="yearOfStudy" value="year3" />
				Year 4: <input type="radio" name="yearOfStudy" value="year4" />
				</dd>

				<dt>Favorite Movie</dt>
				<dd>
					<select name="favoriteMovies[]" multiple="" >
						<option value="movie1" selected="">Movie 1</option>
						<option value="movie2">Movie 2</option>
						<option value="movie3">Movie 3</option>
						<option value="movie4">Movie 4</option>
						<option value="movie5">Movie 5</option>
						<option value="movie6">Movie 6</option>
						<option value="movie7">Movie 7</option>
						<option value="movie8">Movie 8</option>
						<option value="movie9">Movie 9</option>
						<option value="movie10">Movie 10</option>
					</select>
				</dd>

				<dt>My Avatar</dt>
				<dd>
					<input type="file" name="avatar" accept="image/*" />
				</dd>
			</dl>
			
			<input type="hidden" name="userID" value="12222" />


			<input type="submit" value="Submit" />
			<input type="reset" value="Reset" />
		</form>
	</body>
</html>