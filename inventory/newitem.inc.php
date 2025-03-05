<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Item ID:</td>
           <td><input type="text" name="itemID" size="4"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="itemName" size="20"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="4"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="listPrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="additem">
</form>
