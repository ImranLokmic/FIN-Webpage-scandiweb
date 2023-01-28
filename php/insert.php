<?php
include 'ini.php';

$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$product_type = $_POST['selector'];
$weight = $_POST['book'];
$size = $_POST['dvd'];
$hxwxl = $_POST['furniture'];
echo $id;
class insert{

    function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
    public function insert_sku($sku,$product_type)
    {    
        $query = $this->pdo->prepare("INSERT INTO products (product_sku,product_type) VALUES ('".$sku."','".$product_type."')");
        $query->execute();
        return $query->fetch();
    }	 
    public function insert_name($name)
    {    
        $query = $this->pdo->prepare("INSERT INTO p_values (product_id,att_id,product_value) VALUES ('".$id."',1,'".$name."')");
        $query->execute();
        return $query->fetch();
    }
    public function insert_value($price)
    {    
        $query = $this->pdo->prepare("INSERT INTO p_values (product_id,att_id,product_value) VALUES ('".$id."',2,'".$price."')");
        $query->execute();
        return $query->fetch();
    }
};

$trigger = new insert($pdo);
$trigger->insert_sku($sku,$product_type);
$trigger->insert_name($name);
$trigger->insert_value($price);

header("Location: ../index.php");
die();
?>