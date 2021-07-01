<?php
class ProductController extends BaseController {

  private $productModel;

    public function __construct()
    {
      $this->loadModel('ProductModel');
      $this->productModel =  new ProductModel;
    }

    public function index(){
       $selectColumns = ['id','name','category_id','price'];
      $orders =[
        'column'=>'id',
        'order'=>'asc',
      ];

      $products = $this->productModel->getAll($selectColumns,$orders);

      return $this->view('frontend.products.index',[
        'pageTitle'=> 'Danh sách sản phẩm',
        'products'=> $products,
        
      ]);

    }
    public function store()
    {
      $data = [
        'id' => 4,  
        'name'         => 'Iphone 11',
        'price'        => '23000000',
        'image'        => null,
        'category_id'  => 2
      ];
      $this->productModel->store($data);
    }
    
    public function update()
    {
      $id =$_GET['id'];
      $data = [
        'id' => 4,  
        'name'         => 'Iphone 12',
        'price'        => '27000000',
        'image'        => null,
        'category_id'  => 2
      ];
      $this->productModel->updateData($id,$data);
    }

    public function show($id){
    
     $product = $this->productModel->findById($id);
      return $this->view('frontend.products.show',
      ['product'=> $product
    
    ]);
    }
    public function delete(){
      $id =$_GET['id'];
      $this->productModel->destroy($id);
    }
}
?>