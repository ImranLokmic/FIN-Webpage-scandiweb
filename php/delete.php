<?php
include 'ini.php';

$sku = $_POST['id'];

class delete{

    function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
    public function delete_products($sku)
    {    
        $query = $this->pdo->prepare("DELETE FROM products WHERE product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	
    public function delete_p_values($sku)
    {    
        $query = $this->pdo->prepare("DELETE FROM p_values WHERE product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }
};

foreach ($sku as $item){
  $trigger = new delete($pdo);
  $trigger->delete_products($item);
  $trigger->delete_p_values($item);
}
?>