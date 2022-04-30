<?php
    INCLUDE("database.php");
?>

<html>
  <head>
    <title>Item Inventory</title>
  </head>

  <body>
   <h3>Insert each item information into the form</h3>
    <!-- HTML form-->
    <form action="submit_form.php" method="POST"> 
      <p>Item id number: <input type="number" name="item_id"/></p>
      <p>Item name: <input type="text" name="item_name"/></p>
      <p>Amount of item: <input type="number" name="item_amount"/></p>

      <input type="submit" title="Add to Inventory"/>
    </form>

  </body>
</html>