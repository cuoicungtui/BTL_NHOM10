<?php

class UserController extends BaseController
{
    public function index()
    {


        $this->loadModel('PostModel');
        $PostModel = new PostModel;

        $data = $PostModel->getAll(['*'], ['column' => 'date', 'oder' => 'desc']);

        return $this->view('index', $data);
    }


    public function loginView()
    {
        return $this->view('login');
    }

    public function login()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->loadModel('UserModel');
        $UserModel = new UserModel;

        $data = $UserModel->findData(['id_user', 'Email', 'Password'], ['Email' => $email]);

        if (password_verify($password, $data[0]['Password'])) {

            
            $_SESSION['User'] = $data[0]['id_user'];
            $this->loadModel('PostModel');
            $PostModel = new PostModel;

            $data = $PostModel->getAll(['*'], ['column' => 'date', 'oder' => 'desc']);

            return $this->view('index', $data);

        } else {

            $this->view('login');
        }
    }

    public function logout()
    {

        if (isset($_SESSION['User'])) {
            unset($_SESSION['User']);

            $this->loadModel('PostModel');
            $PostModel = new PostModel;

            $data = $PostModel->getAll(['*'], ['column' => 'date', 'oder' => 'desc']);

            return $this->view('index', $data);
         
        }
    }


    public function registerView()
    {

        return $this->view('register');
    }

    public function register()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->loadModel("UserModel");
        $UserModel = new UserModel;

        $data = [
            'Email' => $email,
            'Password' => password_hash($password, PASSWORD_DEFAULT)

        ];
        $UserModel->insert($data);
        $this->view('login');
    }

    public function LoadUser()
    {
        $this->loadModel('UserModel');

        $UserModel = new UserModel;

        $data = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);

        $this->view("User.user",$data);
    }


    public function UpdateUser()
    {
        $this->loadModel('UserModel');
        $UserModel = new UserModel;

        $target_dir = "Views/img/";
        $target_file = $target_dir . basename($_FILES["AVT"]["name"]);
        if($_FILES['AVT']['size']>0){

            move_uploaded_file($_FILES["AVT"]["tmp_name"], $target_file);
        }
        $data = [
            'Name' => $_POST['name'],
            'SDT' =>$_POST['SDT'],
            'birthday'=>$_POST['NS'],
            'CCCD'=>$_POST['CCCD'],
            'BHYT_number'=>$_POST['BHYT'],
            'city_province'=>$_POST['city/province'],
            'District'=>$_POST['District'],
            'sex'=>$_POST['inlineRadioOptions'],
            'Avatar'=>$target_file
        ];
        $Condition = [
            'id_user' => $_SESSION['User']
        ];

       // echo var_dump($Condition);
        
        $UserModel->updateData($data,$Condition);
       
        $data = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);

        $this->view("User.user",$data);
    }

    // public function form1View(){

    //     $this->loadModel('UserModel');

    //     $UserModel = new UserModel;

    //     $Condition = [
    //         'id_user' => $_SESSION['User']
    //     ];
   
    //     $data = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);

    //     $this->view('form1',$data);
    // }


   






    
    public function form2View(){

        
        $this->loadModel('UserModel');

        $UserModel = new UserModel;

        $Condition = [
            'id_user' => $_SESSION['User']
        ];
   
        $data = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);

        $this->view('form2',$data);
    }


 
}
