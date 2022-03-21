<?php

class ManagervaccineController extends BaseController
{
   
    public function loadMgVaccineView(){

        $this->loadModel('ManagervaccineModel');
        $MgvaccineModel = new ManagervaccineModel;
        $data = $MgvaccineModel->getAll();

        $this->view('admin.managerVaccine',$data);

    }
    
    public function loadAddView(){

        $this->loadModel("DetailvaccineModel");

        $DetailvaccineModel = new DetailvaccineModel;

        $data = $DetailvaccineModel->getAll();

        $this->view('admin.managervaccineAdd',$data);
    }
   
    public function add(){

        $idVaccine = $_POST['id_vaccine'];
        $SL = $_POST['quality'];
        $address = strtolower($_POST['address']) ;

        $this->loadModel('ManagervaccineModel');
        $managervaccineModel = new ManagervaccineModel;
        $data = $managervaccineModel->findData(['*'],['idVaccine' => $idVaccine, 'address'=>$address]);

        if(empty($data)){
            $managervaccineModel->insert(['idVaccine' => $idVaccine, 'address'=>$address, 'number'=>$SL]);
            $SL1 = intval($SL);

        }else{
            $managervaccineModel->updateData(['number'=> intval($SL)+intval($data[0]['number']) ],['idVaccine' => $idVaccine, 'address'=>$address]);
            $SL1 = intval($SL)+intval($data[0]['number']);
        }

        $this->loadModel('VaccineModel');
        $VaccineModel = new VaccineModel;
        $data1 =  $VaccineModel ->findData(['*'],['check_'=>0, 'address'=>$address ,'idVaccine'=> $idVaccine],$SL1);
        
        

        foreach($data1 as $value){
            if(strtotime(date("Y-m-d")) < strtotime(date($value['endDate']))){
               $SL1--;
               $VaccineModel->updateData(['check_'=>1],['id'=>$value['id']]);
               $managervaccineModel->updateData(['number'=> $SL1 ],['idVaccine' => $idVaccine, 'address'=>$address]);
                         
            }
        }
        $data = $managervaccineModel->getAll();

        $this->view('admin.managerVaccine',$data);

    }


}