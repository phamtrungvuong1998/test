function validationvitridangtuyen(){

    var viTriDangTuyen = document.getElementById("vitridangtuyen").value;
    if (viTriDangTuyen == '') {
        document.getElementById('thongbaovitridangtuyen').innerHTML = 'Bạn phải nhập vào trường này';
        return;
    }
}

function validationsoluongcantuyen(){
    var soLuongCanTuyen = document.getElementById("soluongcantuyen").value;
    if (soLuongCanTuyen == '') {
        document.getElementById('thongbaosoluongcantuyen').innerHTML = 'Bạn phải nhập vào trường này';
        return;
    }else if (isNaN(soLuongCanTuyen)) {
        document.getElementById('thongbaosoluongcantuyen').innerHTML = 'Bạn phải nhập số  lượng';
        return;
    }
}
    
    
function validationthoigianthuviec(){
    var thoiGianThuViec = document.getElementById("thoigianthuviec").value;
    if (thoiGianThuViec == '') {
        document.getElementById('thongbaothoigianthuviec').innerHTML = 'Bạn phải nhập vào trường này';
        return;
    }
}
   
function validationmota(){
    var moTa = document.getElementById("mota").value;
    m = moTa.trim().split(" ");

    if (m.length < 50) {
        document.getElementById('thongbaomota').innerHTML = 'Mô tả phải trên 50 kí tự';
        return;
    }
}
   
function validationyeucaucongviec(){
    var yeuCauCongViec = document.getElementById("yeucaucongviec").value;

    var y = yeuCauCongViec.trim().split(" ");

    if (y.length < 50) {
        document.getElementById('thongbaoyeucaucongviec').innerHTML = 'Yêu cầu công việc phải trên 50 kí tự';
        return;
    }
}

function valdationquyenloiduochuong(){
    var quyenLoiDuocHuong = document.getElementById("quyenloiduochuong").value;
    var q = quyenLoiDuocHuong.trim().split(" ");

    if (q.length < 50) {
        document.getElementById('thongbaoquyenloiduochuong').innerHTML = 'Phải trên 50 kí tự';
        return;
    }
}

function validationhosobaogom(){
    var hoSoBaoGom = document.getElementById("hosobaogom").value;
    var h = hoSoBaoGom.trim().split(" ");

    if (h.length < 50) {
        document.getElementById('thongbaohosobaogom').innerHTML = 'Phải trên 50 kí tự';
        return;
    }

}

function validationtennguoilienhe(){
    var tenNguoiLienHe = document.getElementById("tennguoilienhe").value;
    if (tenNguoiLienHe == '') {
        document.getElementById('thongbaotennguoilienhe').innerHTML = 'Tên không được đê trống';
    }else if(!isNaN(tenNguoiLienHe)){
        document.getElementById('thongbaotennguoilienhe').innerHTML = 'Tên không được chứa số';
    }
}

function validationdiachilienhe(){
    var diaChiLienHe = document.getElementById("diachilienhe").value;
    if (diaChiLienHe == '') {
        document.getElementById('thongbaodiachilienhe').innerHTML = 'Địa chỉ không được đê trống';
    }
}
    
function validationsodienthoailienhe(){
    var soDienThoaiLienHe = document.getElementById("sodienthoailienhe").value;
    var sdt = soDienThoaiLienHe.trim().split("");
    if (soDienThoaiLienHe == '') {
        document.getElementById('thongbaosodienthoailienhe').innerHTML = 'SDT không được đê trống';
    }else if(isNaN(soDienThoaiLienHe)){
        document.getElementById('thongbaosodienthoailienhe').innerHTML = 'SDT không được chứa chữ';
    }else if(sdt.length < 11){
        document.getElementById('thongbaosodienthoailienhe').innerHTML = 'SDT phải từ 10 - 11 số';
    }
}

function validationemaillienhe(){
    var emailLienHe = document.getElementById("emaillienhe").value;
    if (emailLienHe == '') {
        document.getElementById('thongbaoemaillienhe').innerHTML = 'Email không được đê trống';
    }
}
 
