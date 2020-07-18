<?php  
	
	require_once("PHP/component.php");
	require_once("PHP/operation.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Code Review 10</title>
	<script src="https://kit.fontawesome.com/969b0d4b22.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Stylesheets/style.css">
</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Manu's Big Library</h1>

			<div class="d-flex justify-content-center">
				<form method="post" class="w-50">
					<div class="pt-2">
						<?php  
							inputElement($icon = "<i class='fas fa-portrait'></i>", $placeholder = "ID", $name = "book_id", $value = setID());
						?>
					</div>
					<div class="pt-2">
						<?php  
							inputElement($icon = "<i class='fas fa-book'></i>", $placeholder = "Book Name", $name = "book_name", $value = "");
						?>
					</div>
					<div class="row pt-2">
						<div class="col">
							<?php  
								inputElement($icon = "<i class='fas fa-male'></i></i>", $placeholder = "Author", $name = "book_author", $value = "");
						    ?>
						</div>
						<div class="col">
							<?php  
								inputElement($icon = "<i class='fas fa-people-carry'></i></i>", $placeholder = "Publisher", $name = "book_publisher", $value = "");
						    ?>
						</div>
					</div>
					<div class="row pt-2">
						<div class="col">
							<?php  
								inputElement($icon = "<i class='fas fa-hashtag'></i></i>", $placeholder = "ISBN", $name = "book_isbn", $value = "");
						    ?>
						</div>
						<div class="col">
							<?php  
								inputElement($icon = "<i class='fas fa-exclamation'></i>", $placeholder = "Description", $name = "book_description", $value = "");
						    ?>
						</div>
					</div>
					<div class="row pt-2">
						<div class="col">
							<?php  
								inputElement($icon = "<i class='fas fa-table'></i>", $placeholder = "Publish Date", $name = "book_date", $value = "");
						    ?>
						</div>
						<div class="col">
							<?php  
								inputElement($icon = "<i class='fas fa-euro-sign'></i>", $placeholder = "Price", $name = "book_price", $value = "");
						    ?>
						</div>
					</div>
					<div class="pt-2">
						<?php  
							inputElement($icon = "<i class='fas fa-image'></i>", $placeholder = "Image URL", $name = "book_image", $value = "");
						?>
					</div>
					<div class="d-flex justify-content-center">
						<?php  
							buttonElement($btnid = "btn-create", $styleclass = "btn btn-success", $text = "<i class='fas fa-plus'></i>", $name = "create", $attr = "dat-toggle='tooltip' data-placement='bottom' title='Create'");

							buttonElement($btnid = "btn-read", $styleclass = "btn btn-primary", $text = "<i class='fas fa-sync'></i>", $name = "read", $attr = "dat-toggle='tooltip' data-placement='bottom' title='Read'");

							buttonElement($btnid = "btn-update", $styleclass = "btn btn-light border", $text = "<i class='fas fa-pen-alt'></i>", $name = "update", $attr = "dat-toggle='tooltip' data-placement='bottom' title='Update'");

							buttonElement($btnid = "btn-delete", $styleclass = "btn btn-danger", $text = "<i class='fas fa-trash-alt'></i>", $name = "delete", $attr = "dat-toggle='tooltip' data-placement='bottom' title='Delete'");

							deleteBtn();
						?>
					</div>
				</form>
			</div>
			<div class="d-flex table data">
				<table class= "table table-striped table-dark">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Book Name</th>
							<th>Author</th>
							<th>Publisher</th>
							<th>ISBN</th>
							<th>Description</th>
							<th>Date</th>
							<th>Price</th>
							<th>Image</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody id="tbody">
						<?php  

							if(isset($_POST['read']))
							{
								$result = getData();

								if($result)
								{
									while($row = mysqli_fetch_assoc($result))
									{
										?>
											
											<tr>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['id']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_name']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_author']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_publisher']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_isbn']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_description']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo $row['book_date']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><?php echo '€' . $row['book_price']; ?></td>
												<td data-id="<?php echo $row['id'] ?>"><img src="<?php echo $row['book_image']; ?>"></td>
												<td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id'] ?>"></i></td>
											</tr>

										<?php
									}
								}
							}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</main>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<script src="Scripts/script.js"></script>
</body>
</html>