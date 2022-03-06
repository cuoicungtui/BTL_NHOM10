<?php

class UserController extends BaseController
{
//     public function index(){

//         $this->loadModel('ProductModel');
//         $ProductModel = new ProductModel;

//         $select = ['id','name'];

//         $oder=[
//             'column'=>'id',
//             'oder'=>'desc'
//         ];

//         $data = $ProductModel->getAll($select,$oder);

//         return $this->view('trangchu',$data);

//     }

public function LoadUser(){
    $this->view("User.index");
}

public function UpdateUser(){
    $this->loadModel('UserModel');
    $UserModel=new UserModel;
    $data = [
        'Name'=>$_POST['name']
    ];
    $Condition=[
        'id_user'=>1
    ];
  //  $UserModel->updateData($data,$Condition);
    $this->view("User.index");
}

 }