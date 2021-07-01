<?php
class CategoryController extends BaseController{
    private $categoryModel;
    public function __construct(){
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductModel');
        $this->categoryModel = new CategoryModel;
        $this->productModel = new ProductModel;
    }
    public function index(){
       $pageTitle ='Danh sách sản phẩm theo danh mục';

       $categories = $this->categoryModel->getAll(['*'],[
           'column'=>'name',
           'order'=>'asc',
       ]) ;

       return $this->view('frontend.categories.index',[
           'categories' => $categories,
           'pageTitle' => $pageTitle
       ]);
    }
    public function update()
    {
        $id =$_GET['id'];
      $data = [
        'id' => 1,  
        'name'         => 'Bphone ',
      ];
      $this->categoryModel->updateData($id,$data);
    }

    public function show(){
        $categoryId = $_GET['id'] ?? null;
        $categoriesMenu = $this->categoryModel->getCategoryForMenu();
       $category = $this->categoryModel->findById($categoryId);
       $products = $this->productModel->getByCategoryId($categoryId);
      
       return $this->view('frontend.categories.show',[
        'menus'=> $categoriesMenu,
        'category'=> $category,
        'products'=> $products,
        
      ]);
    }
    
    public function delete()
    {
        $id =$_GET['id'];
      $this->categoryModel->destroy($id);
    }
}
?>