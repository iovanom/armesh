<?php
class PriceTable{
    public $products;
    
    public function getProducts($ids = array()){
        global $wpdb;
        if (empty($ids)){
            //$sql = "SELECT 'id', 'name', 'dimension','unit','price' FROM $wpdb->price_table";
            $sql = "SELECT id, name, dimension, unit, price FROM wp_price_table";
            $result = $wpdb->get_results($sql);
            foreach($result as $object){
                $this->products[] = new Product($object);
            }
            
        }else{
            $sql = "SELECT id, name, dimension, unit, price  FROM wp_price_table WHERE id = ";
            $count = count($ids);
            $i = 0;
            while($i < $count){
                if($i == ($count-1)){
                    $sql .= $ids[$i]; 
                }else{
                    $sql .= $ids[$i] ." OR id = ";
                }
                $i++;
            }
            //echo $sql;
            $result = $wpdb->get_results($sql);
            //print_r($result);
            foreach($result as $object){
                $this->products[] = new Product($object);
            }
            
        }
        //print_r($result);
    }
}
?>