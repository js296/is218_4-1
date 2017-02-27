<?php
//Get the category data
$name = filter_input(INPUT_POST, 'name');

//Validate inputs
if ($name == null) {
  $error_message = "Invalid category data. Check every field and try again.";
  include('error.php');
} else {
    require_once('database.php');

    //Add the product to the DB.
    $query = 'INSERT INTO categories_guitar1 (categoryName)
    	      VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValues(':category_name', $name);
    $statement->execute();
    $statement->closeCursor();

    //Display the Category List page
    include('category_list.php');
}
?>

