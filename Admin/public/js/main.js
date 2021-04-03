function myFunction(){

    var viTriDangTuyen = document.getElementById("vitridangtuyen").value;
    if (viTriDangTuyen == '') {
        document.getElementsByClassName("thongbao").innerHTML = 'Trường này là bắt buộc';
    }

    var soLuongCanTuyen = document.getElementById("soluongcantuyen").value;
    
    var thoiGianThuViec = document.getElementById("thoigianthuviec").value;
    
    var moTa = document.getElementById("mota").value;
    
    var yeuCauCongViec = document.getElementById("yeucaucongviec").value;
  
    var quyenLoiDuocHuong = document.getElementById("quyenloiduochuong").value;
   
    var hoSoBaoGom = document.getElementById("hosobaogom").value;

    var tenNguoiLienHe = document.getElementById("tennguoilienhe").value;
  
    var diaChiLienHe = document.getElementById("diachilienhe").value;
   
    var soDienThoaiLienHe = document.getElementById("sodienthoailienhe").value;
 
    var emailLienHe = document.getElementById("emaillienhe").value;
}