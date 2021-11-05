<?php
class phanso{
    private $tu;
    private $mau;
    public function phanso($tu, $mau){
        $this->tu = $tu;
        $this->mau = $mau;
    }
    public function tong($fps){
        $this->tu = $this->tu*$fps->mau + $this->mau*$fps->tu;
        $this->mau = $this->mau*$fps->tu;
        $kq = $this->tu/$this->mau;
        return $kq;
    }
    public function hieu($fps){
        $this->tu = $this->tu*$fps->mau - $this->mau*$fps->tu;
        $this->mau = $this->mau*$fps->tu;
        $kq = $this->tu/$this->mau;
        return $kq;
    }
    public function tich($fps){
        $this->tu = $this->tu*$fps->tu;
        $this->mau = $this->mau*$fps->mau;
        $kq = $this->tu/$this->mau;
        return $kq;
    }
    public function thuong($fps){
        $this->tu = $this->tu*$fps->mau;
        $this->mau = $this->mau*$fps->tu;
        $kq = $this->tu/$this->mau;
        return $kq;
    }

}
?>