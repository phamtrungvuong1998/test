function myFunction(){

    var viTriDangTuyen = document.getElementById("vitridangtuyen").value;

    var soLuongCanTuyen = document.getElementById("soluongcantuyen").value;

    
    var thoiGianThuViec = document.getElementById("thoigianthuviec").value;
    
    var moTa = document.getElementById("mota").value;
    m = moTa.trim().split(" ");

    if (m.length < 50) {
        alert("Mô tả trên 50 kí tự");
        return;
    }
    
    
    var yeuCauCongViec = document.getElementById("yeucaucongviec").value;

    var y = yeuCauCongViec.trim().split(" ");

    if (y.length < 50) {
        alert("yêu câu công việc trên 50 kí tự");
        return;
    }
  
    var quyenLoiDuocHuong = document.getElementById("quyenloiduochuong").value;
    var q = quyenLoiDuocHuong.trim().split(" ");

    if (q.length < 50) {
        alert("Trên 50 kí tự");
        return;
    }
   
    var hoSoBaoGom = document.getElementById("hosobaogom").value;

    var tenNguoiLienHe = document.getElementById("tennguoilienhe").value;
  
    var diaChiLienHe = document.getElementById("diachilienhe").value;
   
    var soDienThoaiLienHe = document.getElementById("sodienthoailienhe").value;
 
    var emailLienHe = document.getElementById("emaillienhe").value;
}