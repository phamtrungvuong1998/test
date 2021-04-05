<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <script src="./public/js/main.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex" id="header-mb">
        <div class="header-icon"><center><img src="./public/img/Alert.png" alt=""></center></div>
        <div class="header-icon"><center><img src="./public/img/logoo 1.png" alt=""></center></div>
        <div class="header-icon" id="tab"><center><img src="./public/img/Group 356.png" alt=""></center></div>
    </div>
    
    <div class="flex-big">
        <div id="sidebar" style="flex: 1;">
            <div id="logo1"><center><img src="./public/img/logo_trang 1.png" alt=""></center></div>
            <div style="margin-top: 19px;">
                <center><img src="./public/img/logo-2.png" alt=""></center>
                <center><p class="font-all" style="width: 80%; color: white; font-size: 18px;">Công ty công nghệ thông tin - VNPT</p></center>
                <hr color="black" size="1px" style="margin-top: 31px;">
            </div>
            <div style="margin-top:35px;">
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/QuanLiChung.png" alt=""></div>
                    <div style="flex: 4;" class="font-all action-list">Quản lí chung</div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/TinTuyenDung.png" alt=""></div>
                    <div style="flex: 3;" class="font-all action-list">Tin tuyển dụng</div>
                    <div style="flex: 1;"><img src="./public/img/m.png" alt=""></div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/QuanLiHoSo.png" alt=""></div>
                    <div style="flex: 3;" class="font-all action-list">Quản lý hồ sơ </div>
                    <div style="flex: 1;"><img src="./public/img/m.png" alt=""></div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/TimKiemUngVien.png" alt=""></div>
                    <div style="flex: 3;" class="font-all action-list">Tìm kiếm ứng viên</div>
                    <div style="flex: 1;"><img src="./public/img/m.png" alt=""></div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/GuiMailMarketing.png" alt=""></div>
                    <div style="flex: 4;" class="font-all action-list">Gửi mail marketing</div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/TinNhanTuUngVien.png" alt=""></div>
                    <div style="flex: 4;" class="font-all action-list">Tin nhắn từ ứng viên</div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/QuanLiDichVu.png" alt=""></div>
                    <div style="flex: 4;" class="font-all action-list">Quản lý dịch vụ</div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/KinhNghiemNhanSu.png" alt=""></div>
                    <div style="flex: 3;" class="font-all action-list">Kinh nghiệm nhân sự</div>
                    <div style="flex: 1;"><img src="./public/img/m.png" alt=""></div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/QuanLiTaiKhoan.png" alt=""></div>
                    <div style="flex: 3;" class="font-all action-list">Quản lý tài khoản</div>
                    <div style="flex: 1;"><img src="./public/img/m.png" alt=""></div>
                </div>
                <div class="flex-big action">
                    <div class="action-icon"><img src="./public/img/ĐongGopYKien.png" alt=""></div>
                    <div style="flex: 4;" class="font-all action-list">Đóng góp ý kiến</div>
                </div>
            </div>
        </div>
        <div id="content-right" style="flex: 4;">
            <div id="first-header" class="flex-big" style="margin-top: 19px;">
                <div id="lochoso" class="font-all"><center>Điểm mất phí lọc hồ sơ:</center></div>
                <div></div>
                <div style="flex: 3;">
                    <div class="flex-big">
                        <div class="header-action font-all">Trang chủ</div>
                        <div class="header-action font-all">Bảng giá</div>
                        <div class="header-action font-all">Đăng tin</div>
                        <div class="header-action font-all" style="flex: 2;">Tìm kiếm ứng viên</div>
                        <div class="header-action font-all" style="flex: 0.7;"><img src="./public/img/Alert.png" alt=""></div>
                        <div class="header-action font-all"><button style="background: #3797DD; border-color: #3797DD;"><a href="http://localhost/Admin/index.php?mod=Auth&act=logout" style="color: white; text-decoration: none;">Đăng xuất</a></button></div>
                    </div>
                </div>
            </div>
            <div id="sup-pc" class="flex-big">
                <div style="flex: 0.4;"><img src="./public/img/sup.png" alt=""></div>
                <div style="flex: 1.5;">Chuyên viên hỗ trợ: <a href="" class="sup-m">Ms.Mai Hương</a></div>
                <div>SĐT: <a href="" class="sup-m">0904646975</a></div>
                <div>Zalo: <a href="" class="sup-m">0904646975</a></div>
                <div style="flex: 2;">Email: <a href="" id="sup-h">huongmai.timviec365@gmail.com</a></div>
            </div>
            <div id="content" style="flex: 4;">
                <div></div>
                <form action="http://localhost/Admin/index.php?mod=Admin&act=getList" method="post">
                    <div class="content-tilte">
                        <div>
                            <h3 class="font-all">Thông tin việc làm <img src="./public/img/Line 37.png" alt=""></h3>
                            <div>
                                <b><p class="font-all"><b>*</b> Vị trí đang tuyển</p></b>
                                <i id="thongbaovitridangtuyen"></i>
                                <input name="vitridangtuyen" onblur="validationvitridangtuyen()" type="text" id="vitridangtuyen" placeholder="VD: Nhân viên kinh doanh, nhân viên hành chính nhân sự" required>
                            </div>
                            <div>
                                <b><p class="font-all"><b>*</b> Ngành nghề</p></b>
                                <i class="thongbao"></i>
                                <select name="nganhnghe" id="">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div>
                                <b><p class="font-all"><b>*</b> Địa điểm làm việc</p></b>
                                <i class="thongbao"></i>
                                <select name="diadiemlamviec" id="">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="flex-big">
                                <div class="line">
                                    <div>
                                        <b><p class="font-all"><b>*</b> Hình thức làm việc</p></b>
                                        <i class="thongbao"></i>
                                        <select name="hinhthuclamviec" id="">
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div>
                                        <b><p class="font-all"><b>*</b> Cấp bậc</p></b>
                                        <i class="thongbao"></i>
                                        <select name="capbac" id="">
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div>
                                        <b><p class="font-all"><b>*</b> Mức lương</p></b>
                                        <i class="thongbao"></i>
                                        <select name="mucluong" id="">
                                            <option value="1">1</option>
                                        </select>   
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <b><p class="font-all"><b>*</b> Số lượng cần tuyển</p></b>
                                        <i id="thongbaosoluongcantuyen"></i>
                                        <input name="soluongcantuyen" onblur="validationsoluongcantuyen()" type="text" id="soluongcantuyen" placeholder="Nhập số lượng" required>
                                    </div>
                                    <div>
                                        <b><p class="font-all"> Hoa hồng (nếu có)</p></b>
                                        <i class="thongbao"></i>
                                        <input name="hoahong" onblur="validation()" type="text" id="hoahong" placeholder="VD: Từ 12 đến 15%">
                                    </div>
                                    <div>
                                        <b><p class="font-all"><b>*</b> Thời gian thử việc</p></b>
                                        <i id="thongbaothoigianthuviec"></i>
                                        <input name="thoigianthuviec" onblur="validationthoigianthuviec()" type="text" id="thoigianthuviec" placeholder="VD: 1 tuần hoặc 1 tháng" required>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div>
                            <h3 class="font-all">Mô tả công việc <img src="./public/img/Line 37.png" alt=""></h3>
                            <b><p class="font-all"><b>*</b> Mô tả công việc</p></b>
                            <i id="thongbaomota"></i>
                            <textarea name="mota" id="mota" onblur="validationmota()" required></textarea>
                        </div>
                        <div>
                            <h3 class="font-all">Yêu cầu công việc <img src="./public/img/Line 37.png" alt=""></h3>
                            <div>
                                <b><p class="font-all"><b>*</b> Số năm kinh nghiệm</p></b>
                                <i class="thongbao"></i>
                                <select name="sonamkinhnghiem" id="">
                                    <option value="1">1</option>
                                </select>   
                            </div>
                            <div class="flex-big">
                                <div class="line">
                                    <b><p class="font-all"><b>*</b> Yêu cầu bằng cấp</p></b>
                                    <i class="thongbao"></i>
                                    <select name="yeucaubangcap" id="">
                                        <option value="1">1</option>
                                    </select> 
                                </div>
                                <div class="line">
                                    <b><p class="font-all"><b>*</b> Yêu cầu giới tính</p></b>
                                    <i class="thongbao"></i>
                                    <select name="yeucaugioitinh" id="">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <b><p class="font-all"><b>*</b> Yêu cầu công việc</p></b>
                                <i id="thongbaoyeucaucongviec"></i>
                                <textarea name="yeucaucongviec" id="yeucaucongviec" onblur="validationyeucaucongviec()" required></textarea> 
                            </div>
                        </div>
                        <div>
                            <h3 class="font-all">Quyền lợi được hưởng <img src="./public/img/Line 37.png" alt=""></h3>
                            <b><p class="font-all"><b>*</b> Quyền lợi được hưởng</p></b>
                            <i id="thongbaoquyenloiduochuong"></i>
                            <textarea name="quyenloiduochuong" id="quyenloiduochuong" onblur="valdationquyenloiduochuong()" required></textarea>
                        </div>
                        <div>
                            <h3 class="font-all">Yêu cầu hồ sơ <img src="./public/img/Line 37.png" alt=""></h3>
                            <b><p class="font-all"><b>*</b> Hồ sơ bao gồm</p></b>
                            <i id="thongbaohosobaogom"></i>
                            <textarea name="hosobaogom" id="hosobaogom" onblur="validationhosobaogom()" required></textarea>
                            <b><p class="font-all"><b>*</b> Hạn nộp hồ sơ</p></b>
                            <i class="thongbao"></i>
                            <input name="hannophoso" onblur="validation()" id="date" type="date" required>
                        </div>
                        <div>
                            <h3 class="font-all">Thông tin liên hệ <img src="./public/img/Line 37.png" alt=""></h3>
                            <div class="flex-big">
                                <div class="line">
                                    <b><p class="font-all"><b>*</b> Tên người liên hệ</p></b>
                                    <i id="thongbaotennguoilienhe"></i>
                                    <input name="tennguoilienhe" onblur="validationtennguoilienhe()" type="text" id="tennguoilienhe" required>
                                    <b><p class="font-all"><b>*</b> Địa chỉ liên hệ</p></b>
                                    <i id="thongbaodiachilienhe"></i>
                                    <input name="diachilienhe" onblur="validationdiachilienhe()" type="text" id="diachilienhe" required>
                                </div>
                                <div class="line">
                                    <b><p class="font-all"><b>*</b> Số điện thoại liên hệ</p></b>
                                    <i id="thongbaosodienthoailienhe"></i>
                                    <input name="sodienthoailienhe" onblur="validationsodienthoailienhe()" type="text" id="sodienthoailienhe">
                                    <b><p class="font-all"><b>*</b> Email liên hệ</p></b>
                                    <i id="thongbaoemaillienhe"></i>
                                    <input name="emaillienhe" onblur="validationemaillienhe()" type="email" id="emaillienhe" required>
                                </div>
                            </div>
                        </div>
                        <center style="margin-top: 28px;">
                            <button class="font-all" type="submit" id="dangtin">ĐĂNG TIN</button>
                            <button class="font-all" id="huytaotin">HỦY TẠO TIN</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="sup-m">
        <div>
            <div class="flex-big sup-flex">
                <div id="sup-img"><center><img src="./public/img/sup.png" alt=""></center></div>
                <div>
                    <div><center class="font-all">Chuyên viên hỗ trợ: Ms.Mai Hương</center></div>
                    <div id="sdt"><center class="font-all">SĐT: 0904646975</center></div>
                    <div class="flex-big">
                        <div><center class="font-all">Zalo: 0904646975</center></div>
                        <div><center class="font-all">Email: huongmai.timviec365@gmail.com</center></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="flex-big" id="footer-cotact">
            <ul style="display: flex; list-style-type: none;">
                <li>Liên hệ \</li>
                <li>Về chúng tôi \</li>
                <li>Thông tin cần biết \</li>
            </ul>
            <ul style="display: flex; list-style-type: none;">
                <li>Thỏa thuận sử dụng \</li>
                <li>Quy định sử dụng \</li>
            </ul>
        </div>
        <div class="flex-big" id="last-footer">
            <div style="padding-top: 23px;">
                <h3>THÔNG TIN LIÊN HỆ</h3>
                <div class="flex flex-footer">
                    <div><img src="./public/img/address.png" alt=""></div>
                    <div class="footer-text">Địa chỉ: Số 12, Ngõ 40, Đường Xuân La, Bắc Từ Liêm, Thành phố Hà Nội</div>
                </div>
                <div class="flex flex-footer">
                    <div><img src="./public/img/thu.png" alt=""></div>
                    <div class="footer-text">Email hỗ trợ: Timviec365com@gmail.com</div>
                </div>
                <div class="flex flex-footer">
                    <div><img src="./public/img/phone.png" alt=""></div>
                    <div class="footer-text"> Số điện thoại: 0329 39.88.58  |  024 36.36.66.99</div>
                </div>
            </div>
            <div style="padding-top: 23px;">
                <h3>ĐỐI TÁC</h3>
                <div class="flex flex-footer">
                    <div><img src="./public/img/muiten.png" alt=""></div>
                    <div class="footer-text">Website: Timviec365.vn</div>
                </div>
                <div class="flex flex-footer">
                    <div><img src="./public/img/muiten.png" alt=""></div>
                    <div class="footer-text">Tìm việc làm: Tại đây</div>
                </div>
                <div class="flex flex-footer">
                    <div><img src="./public/img/muiten.png" alt=""></div>
                    <div class="footer-text"> Tạo CV miễn phí : Tại đây</div>
                </div>
            </div>
            <div style="padding-top: 23px;">
                <h3>ỨNG DỤNG DI ĐỘNG</h3>
                <div class="app flex">
                    <div><img src="./public/img/apptimviec1.png" alt=""></div>
                    <div>Tải app Timviec365</div>
                </div>
                <div class="app flex">
                    <div><img src="./public/img/CV365.png" alt=""></div>
                    <div>Tải app CV365</div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>