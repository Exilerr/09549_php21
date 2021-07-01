<?php 
$this->view('partitions.frontend.header', ['menus' => $menu ??[]]);
$this->view('frontend.categories.detail', ['category' => $category,
  'products'=>$products,
]);
$this->view('partitions.frontend.footer');
?>