<?php

class AdminController extends BaseController
{
    // public function index(){

    //     $this->loadModel('AdminModel');
    //     $AdminModel = new AdminModel;

    //     $select = ['id','name'];

    //     $oder=[
    //         'column'=>'id',
    //         'oder'=>'desc'
    //     ];

    //     $data = $AdminModel->getAll($select,$oder);

    //     return $this->view('trangchu',$data);

    // }

    // public function find(){

    //     $this->loadModel('AdminModel');
    //     $AdminModel = new AdminModel;


    //     $select = ['id','name'];

    //     $condition = [
    //         'name'=>'quoc',
    //         'age'=>10
    //     ];

    //     $data = $AdminModel->findData($select,$condition);
    //     return $data;
    // }

    // public function add(){

    //    $this->loadModel('AdminModel');
    //     $AdminModel = new AdminModel;

    //     $data=[
    //         'username'=>'1',
    //         'password'=>'21342'       
    //     ];

    //     return $AdminModel->insert($data);

    // }

    // public function update(){

    //     $this->loadModel('AdminModel');
    //     $AdminModel = new AdminModel;


    //     $data=[
    //         'username'=>'1',
    //         'password'=>'21342'       
    //     ];

    //     $condition = [
    //         'id' => 1,
    //         'name'=>'quio'
    //     ];

    //     return $AdminModel->updateData($data,$condition);


    // }

    public function delete()
    {
        $this->loadModel('AdminModel');
        $AdminModel = new AdminModel;

        $condition = [
            'name' => 'quoc',
            'id' => 1
        ];


        return $AdminModel->deleteData($condition);
    }
    public function loadViewAccout()
    {
        $this->loadModel('AdminModel');

        $AdminModel = new AdminModel;

        $data = $AdminModel->getAll();

        $this->view("admin.accoutView", $data);
    }

    public function login()
    {

        $this->loadModel('AdminModel');

        $AdminModel = new AdminModel;

        $username = $_POST['usename'];
        $password  = $_POST['password'];

        $data =  $AdminModel->findData(['*'], [
            'username' => $username,
        ]);
        if (empty($data))
            header('location:admin/?err');
        else {

            if (password_verify($password, $data[0]['password'])) {

                session_start();
                $_SESSION['Admin'] = $username;
                header("location:/BTL_NHOM10/Views/admin/");
            }else
                header('location:admin/?err=1');
        }
    }

    public function logout()
    {
        session_start();
        if (isset($_SESSION['Admin'])) {
            unset($_SESSION['Admin']);
            header("location:/BTL_NHOM10/admin/");
        }
    }


    public function delete_admin()
    {

        $this->loadModel('AdminModel');
        $AdminModel = new AdminModel;

        $condition = [
            'id' => $_GET['id']
        ];

        $AdminModel->deleteData($condition);

        $data = $AdminModel->getAll();

        $this->view("admin.accoutView", $data);
    }

    public function add_admin()
    {

        if (isset($_POST['username'])) {

            $username = $_POST['username'];

            $password = $_POST['password'];

            $this->loadModel('AdminModel');

            $AdminModel = new AdminModel;

            $condition = [

                'username' => $username
            ];

            $data = $AdminModel->findData(['*'], $condition);

            if (!empty($data)) {

                echo "1";
            } else {
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                $data = [

                    'username' => $username,
                    'password' => $password_hash

                ];

                $AdminModel->insert($data);
                echo '0';
            }
        }
    }

    public function loadEditView(){

       $this->view('admin.accoutEditView'); 

    }

    public function editView(){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $new_password = $_POST['new_password'];
        $curenter_password = $_POST['curenter_password'];

        $this->loadModel('AdminModel');
        $AdminModel = new AdminModel;

        $condition = [
            'id'=>$id
        ];

        $data =  $AdminModel->findData(['*'],$condition);
        if(password_verify($curenter_password,$data[0]['password'])){

            $data2=[

                'password'=>password_hash($new_password,PASSWORD_DEFAULT)

            ];

            $AdminModel->updateData($data2,$condition);

            echo '2';

        }else{
            echo '1';
        }
    }
    }
    

}
