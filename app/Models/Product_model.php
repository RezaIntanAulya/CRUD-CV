<?php
namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model{
    protected $table = 'Product';
    protected $allowedFields = ['product_id', 'product_name', 'product_price'];
    function get_product(){
        $result = $this->db->get('product');
        return $result;
    }
}
?>