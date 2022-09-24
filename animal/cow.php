<?php
namespace ani;

class cow extends animal {


private $owner;

public function get_owner(){

    return $this->$owner;

}
public function set_owner( $owner){
    return $this->owner=$owner;

}
}