<?php

class display{

    function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
    public function displaySKU($sku)
    {    
        $query = $this->pdo->prepare("SELECT products.product_sku FROM products WHERE product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	
    public function displayName($sku)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values WHERE att_id=1 AND product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	
    public function displayValue($sku)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values WHERE att_id=2 AND product_sku='".$sku."'");
        $query->execute();
        return $query->fetch();
    }	
    public function displayUnique($sku)
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