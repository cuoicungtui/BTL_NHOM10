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
        $this->loadModel('PostModel');

        $PostModel = new PostModel;

        $condition =[
            'id'=>$_GET['id']
        ];
        $PostModel->deleteData($condition);

        $data = $PostModel->getAll();

        $this->view('admin.postView',$data);
        
    }

   public function addPostView(){
      
    $this->view('admin.PostaddView');

   }

   public function addPost(){

    // echo var_dump($_POST('date'));
    $title = $_POST['Title'];
    $date = $_POST['date'];
    $prg = $_POST['paragraph'];
    $target_dir = "Views/img/";
    $target_file = $target_dir.basename($_FILES["file_img"]["name"]);

    if(move_uploaded_file($_FILES['file_img']['tmp_name'],$target_file)){
        $this->loadModel('PostModel');

        $PostModel = new PostModel;

        $data=[
            'Title'=>$title,
            'img'=>$target_file,
            'paragraph'=>$prg,
            'date'=>$date
        ];

        $PostModel->insert($data);

        $data = $PostModel->getAll();

        $this->view('admin.postView',$data);


    }
   

   }
    
    

}