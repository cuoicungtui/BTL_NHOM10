<?php

class VaccineModel extends BaseModel
{ 
    const TABLE = "vaccine";

    public function getAll($select = ['*'], $orderby = [],$limit= 500 ){

       return $this->all(self::TABLE,$select,$orderby,$limit);

    }
    
    public function findData($select = ['*'] ,$condition = [],$limit= 500)
    {

        return $this->find(self::TABLE,$select,$condition,$limit= 500);
        
    }
    public function findDataOder($select = ['*'] ,$orderby = [],$condition = [])
    {

        return $this->findOder(self::TABLE,$select,$orderby,$condition);
        
    }


    public function insert($data = []){

       return $this->add(self::TABLE,$data);

    }

    public function  updateData($data = [],$condition = []){

        return $this->update(self::TABLE,$data,$condition);

    }

    public function  deleteData($condition = []){

        return $this->delete(self::TABLE,$condition);

    }
}