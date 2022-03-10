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
                'dateVaccine'=>$_POST['date_end'],
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

        public function userInformation(){

            $id_user = $_SESSION['User'];

            $dataUser = [];

            $this->loadModel('UserModel');

            $UserModel = new UserModel;
    
       
            $dataUser = $UserModel->findData(['*'],['id_user' => $_SESSION['User']]);
    
            // $this->view('form2',$data);

            echo json_encode( $dataUser[0]);


        }

        public function vaccineNumber()
        {
            $id_user = $_SESSION['User'];

            $dataUser = [];

            $this->loadModel('VaccineModel');

            $VaccineModel = new VaccineModel;
            
            $oderby= [
                'column'=>'numberVaccine',
                'oder'=>'desc'

            ];
       
            $dataVaccine = $VaccineModel->findDataOder(['*'],$oderby,['id_user'=> $id_user,'check_'=>1]);

    
            // $this->view('form2',$data);

            echo json_encode( $dataVaccine[0]); 
        }

        public function registrationList(){
            $id_user = $_SESSION['User'];

            $dataUser = [];

            $this->loadModel('VaccineModel');

            $VaccineModel = new VaccineModel;
            
            $oderby= [
                'column'=>'id',
                'oder'=>'desc'

            ];
       
            $List = $VaccineModel->findDataOder(['*'],$oderby,['id_user'=> $id_user]);

    
            // $this->view('form2',$data);

            echo json_encode( $List); 

        }



    
    

}