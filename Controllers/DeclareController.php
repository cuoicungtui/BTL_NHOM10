<?php

class DeclareController extends BaseController
{
    public function form1View(){

        $this->loadModel('UserModel');

        $UserModel = new UserModel;

        $Condition = [
            'id_user' => $_SESSION['User']
        ];
   
        $data = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);

        $this->view('form1',$data);
    }


    public function form1Submit(){

        $data = [
            'Name' => $_POST['name'],
            'SDT' =>$_POST['SDT'],
            'birthday'=>$_POST['NS'],
            'CCCD'=>$_POST['CCCD'],
            'city_province'=>$_POST['city/province'],
            'District'=>$_POST['District'],
            'sex'=>$_POST['gioitinh'],
        ];
        $Condition = [
            'id_user' => $_SESSION['User']
        ];

        $this->loadModel('UserModel');
        $UserModel = new UserModel;
        $UserModel->updateData($data,$Condition);




        $data = [
            'declare_date'=>date('Y-m-d H:i:s'),
            'tranfer'=>$_POST['checkYN1'],
            'symptom'=>$_POST['checkYN2'],
            'infected'=>$_POST['checkYN3'],
            'covid_country'=>$_POST['checkYN4'],
            'symptom_infected'=>$_POST['checkYN5'],
            'id_user' => $_SESSION['User']
        ];

        $this->loadModel('DeclareModel');
        $DeclareModel = new DeclareModel;
        $DeclareModel->insert($data);
        

        $this->loadModel('PostModel');
        $PostModel = new PostModel;

        $data = $PostModel->getAll(['*'], ['column' => 'date', 'oder' => 'desc']);

        return $this->view('index', $data);



    }
  

}