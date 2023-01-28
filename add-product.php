<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/add.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js/display.js"></script>
<title>Scandiweb :)</title>
</head>
<body>

<div class="container">

<div class="header">

<div id="title">Product Add</div>
<div id="add-product-btn-cont"><div id="add-product-btn"><a onclick="adding_db()">SAVE</a></div></div>
<div id="delete-product-btn-cont"><a href="index.php">CANCEL</a></div>

</div>

<hr />
<form id="product_form" action="php/insert.php" method="post">
  <label for="sku" id="lsku">SKU:</label>
  <input type="text" id="sku" name="sku"><br>
  <label for="name" id="lname">Name:</label>
  <input type="text" id="name" name="name"><br>
  <label for="price" id="lprice">Price:</label>
  <input type="number" id="price" name="price"><br>
  <label for="selector" id="lselector">Product Type:</label>
  <select name="selector" id="selector">
        <option value="" selected></option>
        <option value="DVD">Book</option>
        <option value="Book">DVD</option>
        <option value="Furniture">Furniture</option>
      </select>
  <label for="book" id="lBook">Weight:</label>
  <input type="number" id="Book" name="book"><br>
  <label for="dvd" id="lDVD">Size:</label>
  <input type="number" id="DVD" name="dvd"><br>
  <label for="furniture" id="lFurniture">HxWxL:</label>
  <input type="number" id="Furniture" name="furniture"><br>
</div>
<hr />

<div class="footer">Scandiweb Test assignment</div>

</div>

</body>
</html>

