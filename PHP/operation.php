<?php  
	
	require_once("database.php");
	require_once("component.php");

	$con = createDatabase();

	if(isset($_POST['create']))
	{
		createData();
	}

	if(isset($_POST['update']))
	{
		updateData();
	}

	if(isset($_POST['delete']))
	{
		deleteRecord();
	}

	if(isset($_POST{'deleteall'}))
	{
		deleteAll();
	}

	function createData()
	{
		$bookname = textboxValue($value = "book_name");
		$bookauthor = textboxValue($value = "book_author");
		$bookpublisher = textboxValue($value = "book_publisher");
		$bookisbn = textboxValue($value = "book_isbn");
		$bookdescription = textboxValue($value = "book_description");
		$bookdate = textboxValue($value = "book_date");
		$bookprice = textboxValue($value = "book_price");
		$bookimage = textboxValue($value = "book_image");

		if($bookname && $bookauthor && $bookpublisher && $bookisbn && $bookdescription && $bookdate && $bookprice && $bookimage)
		{
			$sql = "
				INSERT INTO books (book_name, book_author, book_publisher, book_isbn, book_description, book_date, book_price, book_image)
				VALUES 
				(
					'$bookname', '$bookauthor', '$bookpublisher', '$bookisbn', '$bookdescription', '$bookdate', '$bookprice', '$bookimage'
				)
			";

			if(mysqli_query($GLOBALS['con'], $sql))
			{
				textNode($classname = "success", $msg = "Record Successfully Inserted");
			}
			else
			{
				echo "Error";
			}
		}
		else
		{
			textNode($classname = "error", $msg = "Provide Data In The Textbox");
		}
	}

	function textboxValue($value)
	{
		$textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));

		if(empty($textbox))
		{
			return false;
		}
		else
		{
			return $textbox;
		}
	}

	function textNode($classname, $msg)
	{
		$element = "<h6 class='$classname'>$msg</h6>";

		echo $element;
	}

	function getData()
	{
		$sql = "
			SELECT * FROM books
		";

		$result = mysqli_query($GLOBALS['con'], $sql);

		if(mysqli_num_rows($result) > 0)
		{
			return $result;
		}
	}

	function updateData()
	{
		$bookid = textboxValue($value = "book_id");
		$bookname = textboxValue($value = "book_name");
		$bookauthor = textboxValue($value = "book_author");
		$bookpublisher = textboxValue($value = "book_publisher");
		$bookisbn = textboxValue($value = "book_isbn");
		$bookdescription = textboxValue($value = "book_description");
		$bookdate = textboxValue($value = "book_date");
		$bookprice = textboxValue($value = "book_price");
		$bookimage = textboxValue($value = "book_image");

		if($bookid && $bookname && $bookauthor && $bookpublisher && $bookisbn && $bookdescription && $bookdate && $bookprice && $bookimage)
		{
			$sql = "
				UPDATE books 
				SET 
				book_name='$bookname',
				book_author='$bookauthor',
				book_publisher='$bookpublisher',
				book_isbn='$bookisbn',
				book_description='$bookdescription',
				book_date='$bookdate',
				book_price='$bookprice',
				book_image='$bookimage'
				WHERE id='$bookid'
			";

			if(mysqli_query($GLOBALS['con'], $sql))
			{
				textNode($classname = "success", $msg = "Data Successfully Updated");
			}
			else
			{
				textNode($classname = "error", $msg = "Unable To Update Data");
			}
		}
		else
		{
			textNode($classname = "error", $msg = "Select Data");
		}
	}

	function deleteRecord()
	{
		$bookid = (int)textboxValue($value = "book_id");

		$sql = "
			DELETE FROM books WHERE id=$bookid
		";

		if(mysqli_query($GLOBALS['con'], $sql))
		{
			textNode($classname = "success", $msg = "Record Deleted Successfully");
		}
		else
		{
			textNode($classname = "error", $msg = "Unable To Delete Record");
		}
	}

	function deleteBtn()
	{
		$result = getData();
		$i = 0;

		if($result)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$i++;
				if($i > 2)
				{
					buttonElement($btnid = "btn-deleteall", $styleclass = "btn btn-danger", "<i class='fas fa-trash'></i> Delete All", $name = "deleteall", $attr = "");
					return;
				}
			}
		}
	}

	function deleteAll()
	{
		$sql = "
			DROP TABLE books
		";

		if(mysqli_query($GLOBALS['con'], $sql))
		{
			textNode($classname = "success", $msg = " All Records Deleted Successfully");
			createDatabase();
		}
		else
		{
			textNode($classname = "error", $msg = "Something Went Wrong");
		}
	}

	function setID()
	{
		$getid = getData();
		$id = 0;

		if($getid)
		{
			while($row = mysqli_fetch_assoc($getid))
			{
				$id = $row['id'];
			}
		}

		return($id + 1);
	}

?>