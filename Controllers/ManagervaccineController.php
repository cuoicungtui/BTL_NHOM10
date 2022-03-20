<?php

class ManagervaccineController extends BaseController
{
   
    public function loadMgVaccineView(){

        $this->loadModel('ManagervaccineModel');
        $MgvaccineModel = new ManagervaccineModel;
        $data = $MgvaccineModel->getAll();

        $this->view('admin.managerVaccine',$data);

    }
   


}