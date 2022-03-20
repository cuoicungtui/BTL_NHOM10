<?php

class DetailvaccineController extends BaseController
{
     public function loadVaccineView(){

        $this->loadModel('DetailvaccineModel');
        $DetailvaccineModel = new DetailvaccineModel;
        $data =  $DetailvaccineModel->getAll();
        $this->view('admin.vaccineView',$data);

    }
    public function loadVaccineAdd(){

        $this->view('admin.vaccineAddView');
    }
    public function vaccineAdd(){

        $name = $_POST['name'];
        $made = $_POST['made'];
        $StartAge = $_POST['startAge'];
        $EndAge  =$_POST['endAge'];

        $data = [
            'name' => $name,
            'made' => $made,
            'startAge' => $StartAge,
            'endAge' => $EndAge
        ];

        $this->loadModel('DetailvaccineModel');
        $DetailvaccineModel = new DetailvaccineModel;
        $DetailvaccineModel->insert($data);

        echo "1565";
    }

    public function checkVaccine(){
        $name = $_POST['name'];
        $this->loadModel('DetailvaccineModel');
        $DetailvaccineModel = new DetailvaccineModel;
        $data =  $DetailvaccineModel->findData(['*'],['name'=>$name]);

        if(empty($data)){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function loadVaccineEdit(){

        $this->loadModel('DetailvaccineModel');
        $DetailvaccineModel = new DetailvaccineModel;
        $data =  $DetailvaccineModel->findData(['*'],['idVaccine'=> $_GET['id'] ]);

        $this->view('admin.vaccineEditView',$data);

    }
    public function vaccineEdit(){

        $name = $_POST['name'];
        $made = $_POST['made'];
        $StartAge = $_POST['startAge'];
        $EndAge  =$_POST['endAge'];

        $data = [
            'name' => $name,
            'made' => $made,
            'startAge' => $StartAge,
            'endAge' => $EndAge
        ];

        $this->loadModel('DetailvaccineModel');
        $DetailvaccineModel = new DetailvaccineModel;
        $DetailvaccineModel->updateData($data,[ 'idVaccine' => $_POST['idVaccine']]);
        echo "1";
    }

    public function vaccineDelete(){
        $id = $_GET['id'];
        $this->loadModel('DetailvaccineModel');

        $condition = [

            'idVaccine'=>$id
        ];

        $DetailvaccineModel = new DetailvaccineModel;
        $DetailvaccineModel->deleteData($condition);
        $data =  $DetailvaccineModel->getAll();
        $this->view('admin.vaccineView',$data);
    }
}