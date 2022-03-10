<?php

class VaccineModel extends BaseModel
{ 
    const TABLE = "vaccine";

    public function getAll($select = ['*'], $orderby = [],$limit= 200 ){

       return $this->all(self::TABLE,$select,$orderby,$limit);

    }
    
    public function findData($select = ['*'] ,$condition = [])
    {

        return $this->find(self::TABLE,$select,$condition);
        
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