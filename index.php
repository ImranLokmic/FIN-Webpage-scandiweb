<?php
require_once 'php/ini.php';
require_once 'php/products.php';
$db = new display($pdo);
$rows=$pdo->query('SELECT id FROM products')->fetchAll(PDO::FETCH_NUM);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js/trigger.js"></script>
<title>Scandiweb :)</title>
</head>
<body>

<div class="container">

<div class="header">

<div id="title">Product List</div>
<div id="add-product-btn-cont"><div id="add-product-btn"><a href="add-product.php">ADD</a></div></div>
<div id="delete-product-btn-cont"><a onclick="deletedb()" id="delete-product-btn">MASS DELETE</a></div>

</div>

<hr />
<div class="products">
<?php 
    foreach($rows as $i){
    $sku= $db->displaySKU($i[0]);
    $name= $db->displayName($i[0]);
    $value= $db->displayValue($i[0]);
    $unique= $db->displayUnique($i[0]); 
    if(!$sku){continue;}else{
echo '<div class="productdisplay">';
echo '<input type="checkbox" class="delete-checkbox" name="chkbox" value="' . $i[0] . '"/>';
echo '<div class="item">'; echo($sku[0]); echo '</div>';
echo '<div class="item">'; echo($name[0]); echo '</div>';
echo '<div class="item">'; echo($value[0]); echo '</div>';
echo '<div class="item">'; echo($unique[0]); echo '</div>';
echo '</div>';}
}?>
</div>
<hr />

<div class="footer">Scandiweb Test assignment</div>

</div>

</body>
</html>

