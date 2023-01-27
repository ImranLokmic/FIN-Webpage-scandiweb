<?php
include 'ini.php';

$id = $_POST['id'];

class delete{

    function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
    public function delete_products($id)
    {    
        $query = $this->pdo->prepare("DELETE FROM products WHERE id='".$id."'");
        $query->execute();
        return $query->fetch();
    }	
    public function delete_p_values($id)
    {    
        $query = $this->pdo->prepare("DELETE FROM p_values WHERE product_id='".$id."'");
        $query->execute();
        return $query->fetch();
    }
};

foreach ($id as $item){
  $trigger = new delete($pdo);
  $trigger->delete_products($item);
  $trigger->delete_p_values($item);
}
?>