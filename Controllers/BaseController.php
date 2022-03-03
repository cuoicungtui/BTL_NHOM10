<?php
    class BaseController{

        const VIEW_FODER_NAME = 'Views';

        const MODEL_FODER_NAME = 'Models';

        protected function view($viewpath , array $data=[]){
            foreach($data as $key => $values){
                $$key = $values;
            }


            require(self::VIEW_FODER_NAME.'/'.str_replace('.','/',$viewpath).'.php');
        }

        protected function loadModel($Modelpath){

            require(self::MODEL_FODER_NAME.'/'.$Modelpath.'.php');
        }
    }