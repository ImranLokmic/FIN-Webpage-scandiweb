<?php 
include 'ini.php';

class entryInputs{

    public $sku,$name,$price,$product_type,$unique,$height,$width,$length;

    function __construct(){
    $this->sku = $_POST['sku'];
    $this->name = $_POST['name'];
    if($_POST['price']>0){
        $this->price = $_POST['price'];
        }
    if($_POST['productType']==='weight'){
        $this->product_type='Book';
        }else if($_POST['productType']==='size'){
            $this->product_type='DVD';
        }else if($_POST['productType']==='furniture'){
            $this->product_type='Furniture';
        }
    if (isset($_POST['dvd'])&& $_POST['dvd']>0) {
        $this->unique = $_POST['dvd'];
        }
    if (isset($_POST['book'])&& $_POST['book']>0) {
        $this->unique = $_POST['book'];
        }
    if (isset($_POST['height'])&& $_POST['height']>0) {
        $this->height = $_POST['height'];
        }
    if (isset($_POST['width'])&& $_POST['width']>0) {
        $this->width = $_POST['width'];
        }
    if (isset($_POST['length']) && $_POST['length']>0) {
        $this->length = $_POST['length'];
        }
    if ($_POST['productType']==='furniture'){
        $this->unique = $this->height.'x'.$this->width.'x'.$this->length;
        }
    }
}

class validEntry extends entryInputs{
    public function check_Entry(){
        if (empty($this->sku)||empty($this->name)||empty($this->price)||empty($this->product_type)||empty($this->unique)) {
                header("Location: ../add-product.php");
                die();
          };
    }
}

class duplicateEntry extends entryInputs{
    function __construct($pdo){
        parent::__construct();
        $this->pdo = $pdo;
    }
    public function check_duplicates(){    
        $query = $this->pdo->prepare("SELECT product_sku FROM products WHERE id = '".$this->sku."'");
        $query->execute();
        $query->fetch();
        if ($query->rowCount() > 0) {
            header("Location: ../index.php");
            die();
        }
    }   
}

class insertEntry extends entryInputs{
    function __construct($pdo){
        parent::__construct();
        $this->pdo = $pdo;
        }
    public function insert_sku(){    
        $query = $this->pdo->prepare("INSERT INTO products (product_sku,product_type) VALUES ('".$this->sku."','".$this->product_type."')");
        $query->execute();
        return $query->fetch();
        }	 
    public function insert_name(){    
        $query = $this->pdo->prepare("INSERT INTO p_values (product_sku,att_id,product_value) VALUES ('".$this->sku."',1,'".$this->name."')");
        $query->execute();
        return $query->fetch();
        }
    public function insert_value(){    
        $query = $this->pdo->prepare("INSERT INTO p_values (product_sku,att_id,product_value) VALUES ('".$this->sku."',2,'".$this->price."')");
        $query->execute();
        return $query->fetch();
        }
    public function insert_unique(){    
        $att_id = $this->pdo->query("SELECT uniqueatt.id FROM uniqueatt INNER JOIN products ON products.product_type=uniqueatt.p_type WHERE products.product_sku='".$this->sku."'")->fetch(PDO::FETCH_NUM);
        $query = $this->pdo->prepare("INSERT INTO p_values (product_sku,att_id,product_value) VALUES ('".$this->sku."','".$att_id[0]."','".$this->unique."')");
        $query->execute();
        return $query->fetch();
        }
}


$input1 = new validEntry();
$input1->check_Entry();
$input2 = new duplicateEntry($pdo);
$input2->check_duplicates();
$input3 = new insertEntry($pdo);
$input3->insert_sku();
$input3->insert_name();
$input3->insert_value();
$input3->insert_unique();
header("Location: ../index.php");
die();

?>