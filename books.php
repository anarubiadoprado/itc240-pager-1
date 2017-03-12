<?php include "includes/config.php"?>
<?php include "includes/header.php"?>
<h1><?=$pageID?></h1>
<?php	
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$sql = 'select * from Books';


$result = mysqli_query($iConn, $sql);

/*

'  .  XXX  .  '

*/
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
	echo '<p>';
  echo 'Book Name: <b>' . $row['BookName'] . '       </b>  ';
   echo 'Author Name: <b>' . $row['BookAuthor'] . '  </b>  ';
   echo 'Year Release: <b>' . $row['YearRelease'] . '   </b>  ';
	echo 'Genre: <b>' . $row['Genre'] . '  </b>     ';
	echo '<a href="book_view.php?id=' . $row['BooksID'] . '">' . $row['BookName'] . '</a>';
	echo ' </p>';
}

  }else {
	echo '<p>There are currently no Books</p>';
	
}

@mysqli_free_result($result);
@mysqli_close($iConn);

	
		
?>
<?php include "includes/footer.php"?>