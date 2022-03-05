<?php

class PostController extends BaseController
{
    // public function index(){

    //     $this->loadModel('PostModel');
    //     $PostModel = new PostModel;

    //     $select = ['id','name'];

    //     $oder=[
    //         'column'=>'id',
    //         'oder'=>'desc'
    //     ];

    //     $data = $PostModel->getAll($select,$oder);

    //     return $this->view('trangchu',$data);

    // }
        
    public function loadPostView()
    {
        $this->loadModel('PostModel');
        $PostModel = new PostModel;

        $data = $PostModel->getAll();

        $this->view('admin.postView',$data);

      

    }

    public function deletePost(){

            
    }
    
    

}