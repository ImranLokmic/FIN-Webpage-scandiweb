<?php

abstract class display{
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    abstract public function display($sku);
}

class SKU extends display{
    public function display($sku)
    {    
        $query = $this->pdo->prepare("SELECT products.product_sku FROM products WHERE product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	

}
class Name extends display{
    public function display($sku)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values WHERE att_id=1 AND product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	

}
class Value extends display{
    public function display($sku)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values WHERE att_id=2 AND product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	
}

class Unique extends display{
    public function display($sku)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values
            INNER JOIN products ON p_values.product_sku = products.product_sku
            INNER JOIN uniqueatt ON uniqueatt.id=p_values.att_id
            WHERE p_values.product_sku='".$sku."';");
        $query->execute();
        return $query->fetch();
    }	

}


?>