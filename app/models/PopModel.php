<?php


class PopModel extends Eloquent {
    protected $table = "county";


    public function morbidity(){
       return $this->hasOne("MorbModel","id");
    }

}