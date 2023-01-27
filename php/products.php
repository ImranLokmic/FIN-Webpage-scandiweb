<?php

class display{

    function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
    public function displaySKU($id)
    {    
        $query = $this->pdo->prepare("SELECT products.product_sku FROM products WHERE id='".$id."'");
        $query->execute();
        return $query->fetch();
    }	
    public function displayName($id)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values WHERE att_id=1 AND product_id='".$id."'");
        $query->execute();
        return $query->fetch();
    }	
    public function displayValue($id)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values WHERE att_id=2 AND product_id='".$id."'");
        $query->execute();
        return $query->fetch();
    }	
    public function displayUnique($id)
    {    
        $query = $this->pdo->prepare("SELECT product_value FROM p_values
            INNER JOIN products ON p_values.product_id = products.id
            INNER JOIN uniqueatt ON uniqueatt.id=p_values.att_id
            WHERE p_values.product_id='".$id."';");
        $query->execute();
        return $query->fetch();
    }	
}
?>