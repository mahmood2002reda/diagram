<?php
namespace ani;

class animal{

private string $family ;
private string $food ;


public function __constuct(string $family,string $food){


    return $this->family=$family;
    return $this->food=$food;

}

public function get_family(){

    return $this->family;

}
public function set_family($family){
    return $this->family=$family;

}
public function get_food(){

    return $this->food;

}
public function set_food( $food){
    return $this->food=$food;

}
}