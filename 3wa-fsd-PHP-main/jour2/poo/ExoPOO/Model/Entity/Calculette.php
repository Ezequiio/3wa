<?php 
class Calculator
{
    protected $addition;
    protected $substraction;
    protected $division;
    protected $multiply;

    public function getAddition(){
        return $this->addition;
    }
    public function getSubstraction(){
        return $this->substraction;
    }
    public function getDivision(){
        return $this->division;
    }
    public function getMultiply(){
        return $this->multiply;
    }
    public function setAddition(int $addition){

        
        $this->addition = $addition;
    }
    public function setSubstraction(int $substraction){
        $this->substraction = $substraction;
    }
    public function setDivision(int $division){
        $this->division = $division;
    }
    public function setMultiply(int $multiply){
        $this->multiply = $multiply;
    }
    public function Addition(){
        $a = 12;
        $b = 13;
        echo $this->a + $this->b;
    }
    
    public function Substraction(){
        echo $this->a - $this->b;
    }
    public function Multiply(){
        echo $this->a * $this->b;
    }
    public function Division(){
        echo $this->a / $this->b;
    }

    
}