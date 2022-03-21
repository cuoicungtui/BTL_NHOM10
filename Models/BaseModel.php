<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class BaseModel extends Database
{
    protected $connect;

    public function __construct()
    {
        $this->connect =  $this->connect();
    }

    public function all($table,$select = ['*'],$orderby = [],$limit= 200){

        $column = implode(',',$select);

        $oderstring = implode(' ',$orderby);

        if($oderstring){
            $sql = "SELECT ${column} FROM ${table} ORDER BY ${oderstring} LIMIT ${limit}";
        }else 

            $sql = "SELECT ${column} FROM ${table} LIMIT ${limit}";

        $query = $this->_query($sql);
        $data = [];
        While($row = mysqli_fetch_assoc($query)){
           array_push($data,$row);
        }
        return $data;


    }

    public function  find($table,$select = ['*'] ,$condition = [],$limit= 200){

        $conditionset = [];

        foreach($condition as $key => $value){
            array_push($conditionset,"${key}"."= '".$value ."'");
        }

        $conditionsetString = implode(' AND ',$conditionset);

        $column = implode(',',$select);

        $sql = "SELECT ${column} FROM ${table} WHERE ${conditionsetString} LIMIT ${limit}";

        $query = $this->_query($sql);
        $data = [];
        While($row = mysqli_fetch_assoc($query)){
           array_push($data,$row);
        }
        return $data;
  

    }

    public function  findOder($table,$select = ['*'],$orderby = [] ,$condition = []){

        $conditionset = [];

        foreach($condition as $key => $value){
            array_push($conditionset,"${key}"."= '".$value ."'");
        }

        $conditionsetString = implode(' AND ',$conditionset);

        $column = implode(',',$select);
        $oderstring = implode(' ',$orderby);

        if($oderstring){

            $sql = "SELECT ${column} FROM ${table} WHERE ${conditionsetString} ORDER BY ${oderstring}";

        }else 

            $sql = "SELECT ${column} FROM ${table} WHERE ${conditionsetString}";

        $query = $this->_query($sql);
        $data = [];
        While($row = mysqli_fetch_assoc($query)){
           array_push($data,$row);
        }
        return $data;
        // return $sql;

    }



    public function add($table,$data = []){
        $columns = implode( ',',array_keys($data));

        $values = array_map(function($value){
            return "'".$value."'";
        },array_values($data));

        $stringvalues = implode(',',array_values($values));

        $sql = "INSERT INTO ${table}(${columns}) VALUES (${stringvalues})";

        return $this-> _query($sql);
        // return $sql;

    }

    public function  update($table,$data = [],$condition = []){
        

        $dataset = [];

        foreach($data as $key => $value){
            array_push($dataset,"${key}"."= '".$value ."'");
        }

        $datasetString = implode(',',$dataset);

        $conditionset = [];

        foreach($condition as $key => $value){
            array_push($conditionset,"${key}"."= '".$value ."'");
        }

        $conditionsetString = implode(' AND ',$conditionset);

        $sql = "UPDATE ${table} SET ${datasetString} WHERE ${conditionsetString}";

       return $this->_query($sql);
      
    }


    public function  delete($table,$condition = []){

        $conditionset = [];

        foreach($condition as $key => $value){
            array_push($conditionset,"${key}"."= '".$value ."'");
        }

        $conditionsetString = implode(' AND ',$conditionset);

        $sql = "DELETE FROM ${table}  WHERE $conditionsetString ";

        return $this->_query($sql);

    }

    private function _query($sql){
         return mysqli_query($this->connect,$sql);
    }


}