<?php
namespace App\Controllers;

use App\Models\Product_model;

class Product extends BaseController
{
	public function __construct(){
        $this->data = new Product_model();
    }
    public function index(){
        echo view ('Product_view',['product'=> $this->data->findAll()]);
    }
    function add_new(){
        echo view('add_product_view',['product'=> $this->data->findAll()]);
    }
    function save()
    {
        $this->data->save([
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price')
        ]);
        return redirect()->to('product');
    }
    function delete($product_id) {
        $this->data->delete($product_id);
        return redirect()->to('product');
    }
    function get_edit($product_id) {
        $result =  $this->data->where(['product_id' => $product_id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = array(
                'product_id' => $i['product_id'],
                'product_name' => $i['product_name'],
                'product_price' => $i['product_price']
            );
            return view('edit_product_view', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
    function update() {
        $this->data->replace([
            'product_id' => $this->request->getPost('product_id'),
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price')
        ]);
        return redirect()->to('product');
    }
}
?>