<?php

class ComplexNumber{

    private int $real;

    private int $imaginary;

    public function __construct(int $real, int $imaginary)
    {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function getRealNumber(): int{
        return $this->real;
    }

    public function getImaginaryNumber(): int{
        return $this->imaginary;
    }

    public function setRealNumber(int $real): void{
        $this->real = $real;
    }

    public function setImaginaryNumber(int $imaginary): void{
        $this->imaginary = $imaginary;
    }

    public function multiplyComplexNumber(ComplexNumber $c): void{
        $cR = $c->real;
        $cI = $c->imaginary;
        $real1 = $this->real * $cR;
        $imaginary1 = $this->real * $cI;
        $imaginary2 = $this->imaginary * $cR;
        $real2 = -($this->imaginary * $cI);
        $this->real = $real1 + $real2;
        $this->imaginary = $imaginary1 + $imaginary2;
    }

    public function dump(bool $onlyNumber = false): string|array{
        if($onlyNumber){
            return [$this->real, $this->imaginary];
        }
        if($this->real === 0){
            if($this->imaginary === 0){
                return "0";
            }else{
                return $this->imaginary."i";
            }
        }
        if($this->imaginary === 0){
            return $this->real;
        }
        if($this->imaginary >= 0){
            return $this->real."+".$this->imaginary."i";
        }
        return $this->real.$this->imaginary."i";
    }
}
