<?php

class ContenController extends BaseController
{
   


    public function loadViewConten()
    {

        $this->loadModel('ContenModel');

        $ContenModel = new ContenModel;

        $id = $_GET['id'];

        $condition = [
            'id' => $id
        ];

        $oderby = [
            'column' => 'index_conten',
            'oder' => 'ASC'
        ];

        $data = $ContenModel->findDataOder(['*'], $oderby, $condition);

        // echo $data;


        $this->view('admin.contenView', $data);
    }

    public function deleteConten()
    {

        $id_conten = $_GET['id_conten'];

        $id = $_GET['id'];

        $this->loadModel('ContenModel');

        $ContenModel = new ContenModel;

        $condition = [

            'id_conten' => $id_conten
        ];
        $ContenModel->deleteData($condition);

        $condition = [
            'id' => $id
        ];

        $oderby = [
            'column' => 'index_conten',
            'oder' => 'ASC'
        ];

        $data = $ContenModel->findDataOder(['*'], $oderby, $condition);



        $this->view('admin.contenView', $data);
    }


    public function addContenView()
    {


        $this->view('admin.contenAdd');
    }

    public function addConten()
    {

        $id = $_POST['ID'];
        $title = $_POST['Title'];
        $index = $_POST['index'];
        $paragraph = $_POST['paragraph'];
        $imgName = $_POST['name_image'];
        $target_dir = "Views/img/";
        $target_file = $target_dir . basename($_FILES["file_img"]["name"]);

        if ($_FILES["file_img"]['size'] > 0) {

            move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);
        } else {
            $target_file = '';
            $imgName = '';
        }

        $this->loadModel('ContenModel');

        $ContenModel = new ContenModel;

        $data = [

            'id' => $id,
            'index_conten' => $index,
            'h1' => $title,
            'p' => $paragraph,
            'img' => $target_file,
            'imgName' => $imgName
        ];

        $ContenModel->insert($data);

        $condition = [
            'id' => $id
        ];

        $oderby = [
            'column' => 'index_conten',
            'oder' => 'ASC'
        ];

        $data = $ContenModel->findDataOder(['*'], $oderby, $condition);


        $this->view('admin.contenView', $data);
    }

    public function editContenView(){

        $id_conten =$_GET['id_conten'];

        $this->loadModel('ContenModel');

        $ContenModel = new ContenModel;

        $condition=[
            'id_conten'=>$id_conten
        ];

        $data = $ContenModel->findData(['*'],$condition);
        
        $this->view('admin.contenEdit',$data);
        
    }


    public function editConten(){
        $id_conten = $_POST['ID'];
        $h1 = $_POST['Title'];
        $p = $_POST['paragraph'];
        $index = $_POST['index'];
        $imgName = $_POST['name_image'];
        $target_dir = "Views/img/";
        $target_file = $target_dir . basename($_FILES["file_img"]["name"]);
        if ($_FILES["file_img"]['size'] > 0) {
            move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);

            $data=[
                'index_conten'=>$index,
                'h1'=>$h1,
                'p'=>$p,
                'imgName'=>$imgName,
                'img'=>$target_file
            ];

        } else {
            $data=[
                'index_conten'=>$index,
                'h1'=>$h1,
                'p'=>$p,
                'imgName'=>$imgName
            ];
        }

        $condition = [

            'id_conten'=>$id_conten

        ];

        $this->loadModel('ContenModel');
        $ContenModel = new ContenModel;
        
        $ContenModel->updateData($data,$condition);

        $condition = [
            'id' => $_GET['id']
        ];

        $oderby = [
            'column' => 'index_conten',
            'oder' => 'ASC'
        ];

        $data = $ContenModel->findDataOder(['*'], $oderby, $condition);


        $this->view('admin.contenView', $data);

    }
}
