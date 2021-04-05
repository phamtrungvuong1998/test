<?php
    require_once "./core/Controller.php";
    class AdminController extends Controller
    {

        public function Home(){
            $this->view("Admin");
        }

        public function getList(){
            $get = $this->model("AdminModel");
            $get->getList($_POST['vitridangtuyen'], $_POST['nganhnghe'], $_POST['diadiemlamviec'], $_POST['hinhthuclamviec'], $_POST['capbac'], $_POST['thoigianthuviec'], $_POST['soluongcantuyen'], $_POST['hoahong'], $_POST['mucluong'], $_POST['mota'], $_POST['sonamkinhnghiem'], $_POST['yeucaubangcap'], $_POST['yeucaugioitinh'], $_POST['yeucaucongviec'], $_POST['quyenloiduochuong'], $_POST['hosobaogom'], $_POST['hannophoso'], $_POST['tennguoilienhe'], $_POST['diachilienhe'], $_POST['sodienthoailienhe'], $_POST['emaillienhe']);
        }
    }
    
?>