<?php
error_reporting(0);
include "../config/connection.php";

$category = $_GET['category'];

$querySubCategory = "SELECT * FROM as_sub_categories WHERE categoryID = '$category' AND status = 'Y' ORDER BY subCategoryName ASC";
$sqlSubCategory = mysql_query($querySubCategory);

echo "<option value='*' SELECTED>*</option>";
while ($dtSubCategory = mysql_fetch_array($sqlSubCategory))
{
	echo "<option value='$dtSubCategory[subCategoryID]'>&nbsp;$dtSubCategory[subCategoryName]</option>";
}
?>