<?php
class ProductsController extends AppController {
    public function index() {
        //fetch products resultset from databse
        $products = $this->Product->find('all',array('fields'=>array('Product.id','Product.title','Product.description','Product.price','Product.created','Product.status'),'conditions'=>array('Product.status'=>1)));

        //set products data and pass to the view 
        $this->set('products',$products);
    }

	public function view($id = null) {
	if (!$id) {
	throw new NotFoundException(__('Invalid post'));
	}
	$products = $this->Product->find('all');
	if (!$products) {
	throw new NotFoundException(__('Invalid post'));
	}
	$this->set('products', $products);
	}
}
