<?php

class ProductController extends BaseController
{
    public function index(){

        $this->loadModel('ProductModel');
        $ProductModel = new ProductModel;

        $select = ['id','name'];

        $oder=[
            'column'=>'id',
            'oder'=>'desc'
        ];

        $data = $ProductModel->getAll($select,$oder);

        return $this->view('trangchu',$data);

    }

    public function find(){

        $this->loadModel('ProductModel');

        $ProductModel = new ProductModel;

        $select = ['id','name'];

        $condition = [
            'name'=>'quoc',
            'age'=>10
        ];

        $data = $ProductModel->findData($select,$condition);
        echo $data;
    }

    public function add(){

        $this->loadModel('ProductModel');
        $ProductModel = new ProductModel;

        $data=[
            'username'=>'1',
            'password'=>'21342'       
        ];

        echo $ProductModel->insert($data);

    }

    public function update(){
        
        $this->loadModel('ProductModel');
        $ProductModel = new ProductModel;

        $data=[
            'username'=>'1',
            'password'=>'21342'       
        ];

        $condition = [
            'id' => 1,
            'name'=>'quio'
        ];

        echo $ProductModel->updateData($data,$condition);


    }

    public function delete(){
        $this->loadModel('ProductModel');

        $ProductModel = new ProductModel;

        $condition = [
            'name'=>'quoc',
            'id'=>1
        ];

        
        echo var_dump($ProductModel->deleteData($condition));

    }
    

}