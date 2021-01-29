<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
	<link rel="stylesheet" href="s.css">
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=test",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `book_ads` WHERE sem = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
	?> 
	 <?php

	
		while($row = $sth->fetch()){
                  
		?> <table class="content-table" style="width:100%">
		<thead>
		 <th class="list-group-item">BOOK NAME</th>
		 <th class="list-group-item">BOOK AUTHOR</th>
		 <th class="list-group-item">BRANCH</th>
		 <th class="list-group-item">SEMESTER</th>
		 <th class="list-group-item">SUBJECT</th>
		 <th class="list-group-item">PRICE (in Rs)</th>
		 <th class="list-group-item">CONTACT</th>
		 <th class="list-group-item">PHOTO</th>
	  </tr> 
 </thead>
		<br><br><br>
		<tbody>
			<tr>
				<td><?php echo $row->bookname; ?></td>
				<td><?php echo $row->bookauthor;?></td>
				<td><?php echo $row->branch; ?></td>
				<td><?php echo $row->sem;?></td>
				<td><?php echo $row->subject; ?></td>
				<td><?php echo $row->price; ?></td>
				<td><?php echo $row->contact; ?></td>
				<td><img src="<?php echo $row->pic; ?>"></td>
			<tbody></tr>
		</table>

		
<?php 
	}
}
		
		


?>