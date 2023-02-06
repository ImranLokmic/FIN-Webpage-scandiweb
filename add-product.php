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
<div id="add-product-btn-cont"><button id="Save" onclick="adding_db()" >Save</button></div>
<div id="delete-product-btn-cont"><a href="index.php">CANCEL</a></div>

</div>

<hr />
<form id="product_form" action="php/insert.php" method="post">
  <label for="sku" id="lsku">SKU:</label>
  <input type="text" id="sku" name="sku" required><br>
  <label for="name" id="lname">Name:</label>
  <input type="text" id="name" name="name" required><br>
  <label for="price" id="lprice">Price:</label>
  <input type="number" id="price" name="price" min="0" required><br>
  <label for="selector" id="lselector">Product Type:</label>
  <select name="productType" id="productType">
        <option value="" selected></option>
        <option value="size">DVD</option>
        <option value="weight">Book</option>
        <option value="furniture">Furniture</option>
      </select>
  <label for="book" id="lweight">Weight:</label>
  <input type="number" id="weight" name="book" min="0" required placeholder="Please, provide weight"><br>
  <label for="dvd" id="lsize">Size:</label>
  <input type="number" id="size" name="dvd" min="0" required placeholder="Please, provide size"><br>

  <label for="height" id="lheight" >Height:</label>
  <input type="number" id="height" name="height" min="0" required placeholder="Please, provide height" ><br>
  <label for="width" id="lwidth" >Width:</label>
  <input type="number" id="width" name="width" min="0" required placeholder="Please, provide width" ><br>
  <label for="length" id="llength" >Length:</label>
  <input type="number" id="length" name="length" min="0" required placeholder="Please, provide length" ><br>
</div>
<hr />

<div class="footer">Scandiweb Test assignment</div>

</div>

</body>
</html>

