<?php  
	
	function createDatabase()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cr10_manuel_biglibrary";

		$con = mysqli_connect($servername, $username, $password);

		if(!$con)
		{
			die("Connection Failed: " . mysqli_connect_error());
		}

		$sql = "
			CREATE DATABASE IF NOT EXISTS $dbname
		";

		if(mysqli_query($con, $sql))
		{
			$con = mysqli_connect($servername, $username, $password, $dbname);

			$sql = "
				CREATE TABLE IF NOT EXISTS books 
				(
					id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
					book_name VARCHAR(128) NOT NULL,
					book_author VARCHAR(64) NOT NULL,
					book_publisher VARCHAR(32),
					book_isbn VARCHAR(64),
					book_description VARCHAR(256),
					book_date VARCHAR(16) NOT NULL,
					book_price FLOAT NOT NULL,
					book_image VARCHAR(128)
				);
			";

			if(mysqli_query($con, $sql))
			{
				return $con;
			}
			else
			{
				echo "Table Creation Failed";
			}
		}
		else
		{
			echo "Error Creating Database" . mysqli_error($con);
		}
	}

?>