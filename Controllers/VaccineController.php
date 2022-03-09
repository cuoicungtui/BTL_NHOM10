<?php

class VaccineController extends BaseController
{
    
    public function form2View(){

        $this->loadModel('UserModel');

        $UserModel = new UserModel;

   
        $data = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);

        $this->view('form2',$data);
    }

        public function form2Submit(){

            $data = [
                'Name' => $_POST['name'],
                'SDT' =>$_POST['SDT'],
                'birthday'=>$_POST['NS'],
                'CCCD'=>$_POST['CCCD'],
                'city_province'=>$_POST['city/province'],
                'District'=>$_POST['District'],
                'sex'=>$_POST['gioitinh'],
                'BHYT_number'=>$_POST['BHYT']

            ];
            $Condition = [
                'id_user' => $_SESSION['User']
            ];

            $this->loadModel('UserModel');
            $UserModel = new UserModel;
            $UserModel->updateData($data,$Condition);
    
            
            $data = [

                'id_user'=>$_SESSION['User'],
                'numberVaccine'=>$_POST['Number_vaccine'],
                'startDate'=>$_POST['date_start'],
                'endDate'=>$_POST['date_end'],
                'check_'=>0,
                'queues'=>1,
                'idVaccine'=>1

            ];
            

            $this->loadModel('VaccineModel');
            $VaccineModel = new VaccineModel;
            echo  $VaccineModel->insert($data);


            $this->loadModel('PostModel');
            $PostModel = new PostModel;
    
            $data = $PostModel->getAll(['*'], ['column' => 'date', 'oder' => 'desc']);
    
            return $this->view('index', $data);

        }

    
    

}