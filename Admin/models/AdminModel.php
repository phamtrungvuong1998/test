<?php

class AdminModel extends Connection
{
    public function getList($vitridangtuyen, $nganhnghe, $diadiemlamviec, $hinhthuclamcviec, $capbac, $mucluong, $soluongcantuyen, $hoahong, $thoigianthuviec, $motacongviec, $sonamkinhnghiem, $yeucaubangcap, $yeucaugioitinh, $yeucaucongviec, $quyenloiduochuong, $hosobaogom, $hannophoso, $tennguoidangtuyen, $diachilienhe, $sodienthoailienhe, $emaillienhe){
        $query = "INSERT INTO `job` ( `viTriDangTuyen`, `nganhNghe`, `diaDiemLamViec`, `hinhThucLamViec`, `soLuongCanTuyen`, `capBac`, `hoaHong`, `mucLuong`, `thoiGianThuViec`, `moTaCongViec`, `soNamKinhNghiem`, `yeuCauBangCap`, `yeuCauGioiTInh`, `yeuCauCongViec`, `quyenLoiDuocHuong`, `hoSoBaoGom`, `hanNopHoSo`, `tenNguoiLienHe`, `diaChiLienHe`, `sdtLienHe`, `emailLienHe`) 
        VALUES ( '$vitridangtuyen', '$nganhnghe', '$diadiemlamviec', '$hinhthuclamcviec', '$capbac', '$mucluong', '$soluongcantuyen', '$hoahong', '$thoigianthuviec', '$motacongviec', '$sonamkinhnghiem', '$yeucaubangcap', '$yeucaugioitinh', '$yeucaucongviec', '$quyenloiduochuong', '$hosobaogom', '$hannophoso', '$tennguoidangtuyen', '$diachilienhe', '$sodienthoailienhe', '$emaillienhe')";
        // echo $query;
        // die();
        return $this->con->query($query);
    }
}


?>