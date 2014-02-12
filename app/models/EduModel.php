<?php


class EduModel extends Eloquent {
    protected $table = "education";


    public function morbidity(){
        return $this->hasOne("MorbModel","id");
    }

}