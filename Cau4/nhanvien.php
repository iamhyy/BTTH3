<?php
class nhanvien{
    private $MaNV, $TenNV, $SoNgayLam, $LuongNgay;
    public function Gan($ma, $ten, $songay, $luongngay){
        $this->MaNV = $ma;
        $this->TenNV = $ten;
        $this->SoNgayLam = $songay;
        $this->LuongNgay = $luongngay;

    }
    public function InNhanVien(){
        echo "Mã nhân viên: ".$this->MaNV." --Tên nhân viên: ".$this->TenNV." -- Số ngày làm: ".$this->SoNgayLam." --Lương ngày: ".$this->LuongNgay;
    }
    public function TinhLuong(){
        $luong = $this->SoNgayLam*$this->LuongNgay;
        return $luong;
    }
}

class nhanvienql extends nhanvien{
    private $phucap = 2000;
    public function Gan($ma, $ten, $songay, $luongngay){
        parent::Gan($ma, $ten, $songay, $luongngay);
    }
    public function InNhanVien(){
        echo parent::InNhanVien()." -- Phụ cấp: ".$this->phucap;
    }
    public function TinhLuong(){
        return parent::TinhLuong()*$this->phucap;
    }
}
?>