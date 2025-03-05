<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="categoryID" size="20">
       <?php
   //    include("category.php");
       $categories = Category::getCategories();
       foreach ($categories as $category) {
           $categoryID = $category->categoryID;
           $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
           echo "<option value=\"$categoryID\">$name</option>\n";
       }
       ?>
   </select>
</form>
