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

        $this->view('admin.postView', $data);
    }

    public function deletePost()
    {

        $this->loadModel('PostModel');

        $PostModel = new PostModel;

        $condition = [
            'id' => $_GET['id']
        ];

        $this->loadModel('ContenModel');

        $ContenModel = new ContenModel;

        $ContenModel->deleteData($condition);



        $PostModel->deleteData($condition);

        $data = $PostModel->getAll();

        $this->view('admin.postView', $data);
    }

    public function addPostView()
    {

        $this->view('admin.PostaddView');
    }

    public function addPost()
    {

        // echo var_dump($_POST('date'));
        $title = $_POST['Title'];
        $date = $_POST['date'];
        $prg = $_POST['paragraph'];
        $target_dir = "Views/img/";
        $target_file = $target_dir . basename($_FILES["file_img"]["name"]);

        if (move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file)) {
            $this->loadModel('PostModel');

            $PostModel = new PostModel;

            $data = [
                'Title' => $title,
                'img' => $target_file,
                'paragraph' => $prg,
                'date' => $date
            ];

            $PostModel->insert($data);

            $data = $PostModel->getAll();

            $this->view('admin.postView', $data);
        }
    }

    public function postEditView()
    {


        $id = $_GET['id'];

        $this->loadModel('PostModel');

        $PostModel = new PostModel;

        $condition = [
            'id' => $id
        ];

        $data = $PostModel->findData(['*'], $condition);

        $this->view('admin.PostEditView', $data);
    }

    public function editPost()
    {

        $id = $_POST['id'];
        $Title = $_POST['Title'];
        $date = $_POST['date'];
        $p = $_POST['paragraph'];
        $target_dir = "Views/img/";
        $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
        if ($_FILES["file_img"]['size'] > 0) {
            move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);

            $data = [
                'Title' => $Title,
                'img' => $target_file,
                'paragraph' => $p,
                'date' => $date
            ];
        } else {
            $data = [
                'Title' => $Title,
                'paragraph' => $p,
                'date' => $date
            ];
        }

        $condition = [

            'id' => $id

        ];

        $this->loadModel('PostModel');
        $PostModel = new PostModel;

        $PostModel->updateData($data, $condition);

        $data = $PostModel->getAll();

        $this->view('admin.postView', $data);
    }

    public function details()
    {

        $id = $_GET['id'];

        $condition = [
            'id' => $id
        ];

        $this->loadModel('PostModel');

        $PostModel = new PostModel;

        $Title = $PostModel->findData(['*'], $condition);


        $this->loadModel('ContenModel');

        $ContenModel = new ContenModel;


        $oderby = [
            'column' => 'index_conten',
            'oder' => 'ASC'
        ];

        $content = $ContenModel->findDataOder(['*'], $oderby, $condition);

        $data = [$Title, $content];
        $this->view('details', $data);
    }
}
