<?php

use App\mayquetthes;
use App\nhanviens;
use App\phieuthues;
use App\phongbans;
use App\sachs;
use App\vaoras;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/sum/{n}', function ($n) {
//     echo "tong la: " . ($n + 1)*n/2;
// });

// Route::get('/sum/{a}/{b}', function ($a,$b) {
//     echo "canh huyen: " . sqrt($a*$a + $b*$b);
// });

// Route::get('/sum/{a}/{b}/{c}', function ($a,$b,$c) {
//     $delta = $b*$b - 4*$a*$c;
//     echo "pt bac 2: x1= " . (-$b + sqrt($delta))/2 . "x2= ". (-$b - sqrt($delta))/2;
// });

// Route::get('/update/{id}/{ten}', function ($id,$ten) {
//     echo "thuc hiencap nhat";
// })->where(['id'=>'[0-9]+','ten'=>'[a-zA-Z0-9]+']); //regular expression

// Route::get('/update/{id}/{ten}', function ($id,$ten) {
//     echo route("capnhatnguoidung");
// })->where(['id'=>'[0-9]+','ten'=>'[a-zA-Z0-9]+'])->name("hienthicapnhat");

// Route::post('/update', function () {
//     echo "thuc hiencap nhat";
// })->name("capnhatnguoidung");

// Route::get('/blabla',function(){
//     echo route("hienthicapnhat",['id'=>1,'ten'=>'abcs']);
// });

Route::get('/view',function(){
    $db = new PDO("pgsql:dbname=demo;host=localhost","postgres","12345");
    $sth = $db->prepare("select * from phongban");
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            
    return view("blabla",['result'=>$result]);
})->name("viewUser");

Route::get('/manhinhthemmoi',function(){
    return view("manhinhthemmoi");
})->name("add");

Route::get('/manhinhedit/{id}',function($id){
    $db = new PDO("pgsql:dbname=demo;host=localhost","postgres","12345");
    $sth = $db->prepare("select * from phongban where id = ?");
    $sth->execute([$id]);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return view("manhinhthemmoi",['result'=>$result]);
})->name("sua");

// Route::post('/luudulieu',function(Request $request){
//     $id = $request->request->get("id");
//     $ten = $request->request->get("ten");
//     if ($id == "") {
//         $id = rand(0,9999999999999);
//         $db = new PDO("pgsql:dbname=demo;host=localhost","postgres","12345");
//         $sth = $db->prepare("insert into phongban (id,ten) values(?,?)");
//         $sth->execute([$id,$ten]);
//         return redirect()->route('viewUser');
//     }else{
//         $db = new PDO("pgsql:dbname=demo;host=localhost","postgres","12345");
//         $sth = $db->prepare("update phongban set ten=? where id = ?");
//         $sth->execute([$ten,$id]);
//         return redirect()->route('viewUser');
//     }
    
// })->name("luudulieu");

Route::get('/xoa/{id}',function($id){
    $db = new PDO("pgsql:dbname=demo;host=localhost","postgres","12345");
    $sth = $db->prepare("delete from phongban where id = ?");
    $sth->execute([$id]);
    return redirect()->route('viewUser');
})->name("xoa");

//Route::redirect('/luudulieu', '/view')->name("redirect");
/*
Route::post('/update', function () {
    echo "thuc hiencap nhat";
});

Route::post('/', function () {
    return view('welcome');
});

Route::any('/', function () {
    return view('welcome');
});*/

//Route::redirect('/sum', '/add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//middleware
// Route::get('/manhinhthemmoi',function(){
//     echo "helllo";
// })->middleware("ghilog")->name("add");

Route::get('/kocoquyen',function(){
    echo "kocoquyen";
})->name("kocoquyen");

Route::get('/manhinhthemmoi',function(){
    //lấy toàn bộ danh sách
    $userArr = DB::table("users")->get();
    //lấy dong đầu tiên của dữ liệu
    $user = DB::table("users")->first();
    //lấy có where
    $user = DB::table("users")
    ->where("email","=","admin@gmail.com")
    ->where("id",1000)
    ->first();
    // phần điều kiện <,>,<>,=,like,@@

    //lấy một dữ liệu theo cột(thường dùng khi cần lấy cấu hình, check quyền)
    $name = DB::table("users")
        ->where("email","=","admin@gmail.com")
        ->where("id",1000)
        ->value("name");

    // lấy dữ liệu theo id
    $user = DB::table("users")
        ->find(1000);

    // lấy mảng dữ liệu theo cột
    $userIdAr = DB::table("users")
        ->pluck("id");

    // lấy mảng dữ liệu theo cột có key va value để đổ combobox
    $userIdNameAr = DB::table("users")
        ->pluck("name","id"); // value,key

    // Đếm số lượng record
    $countUser = DB::table("users")->count();

    // Group by và các hàm tính toán sum,avg.max,min
    $max = DB::table("migrations")->sum("batch");

    // Kiểm tra tồn tại
    $exists = DB::table("migrations")->where("batch",1)->exists();
    // Kiểm tra ko tồn tại 
    $exists = DB::table("migrations")->where("batch",1)->doesntExist();
    
    //echo $exists?"tồn tại":"ko tồn tại";exit;

    // query tĩnh
    $r = DB::select(
            DB::raw(
                "select * from donhangs where ngayban = ?"
            ),["2020-09-24"]
        );
    dd($r);
    //Viết màn hình cập nhật user (phân vào chức danh và phòng ban)

    dd($userIdNameAr);
});
//->middleware("authencation");
//->name("kiemtra");

Route::get('/capnhatuser/{id}',function(Request $request,$id){

    $phongban = DB::table("phongbans")
    ->pluck("name","id");

    $chucdanh = DB::table("chucdanhs")
    ->pluck("name","id");

    $user = DB::table("users")
        ->find($id);
    
    return view("showmanhinh",
        compact([
            "user"
            ,"phongban"
            ,"chucdanh"
        ])
    );

})
//->middleware("authencation")
->name("edituser");

Route::get('/viewuser',function(){

    $phongban = DB::table("phongbans")
    ->pluck("name","id");

    $chucdanh = DB::table("chucdanhs")
    ->pluck("name","id");

    $user = DB::table("users")->get();        
    return view("viewuser",
        compact([
            "user"
            ,"phongban"
            ,"chucdanh"
        ])
    );
})->name("viewUser");

Route::post('/save',function(Request $request){
    $id = $request->request->get("id");
    $name = $request->request->get("name");
    $chucdanh = $request->request->get("chucdanh");
    $phongban = $request->request->get("phongban");

    $db = new PDO("pgsql:dbname=demo;host=localhost","postgres","12345");
    $sth = $db->prepare("update users set name=?,chucdanhid=?,phongbanid=? where id = ?");
    $sth->execute([$name,$chucdanh,$phongban,$id]);
    return redirect()->route('viewUser');

})->name("save");

Route::get('/viewdonhang',function(){
    if(isset($_REQUEST['ngay'])){
        $ngay = $_GET['ngay'];
        $ngaytn = implode("-",array_reverse(explode("-",$ngay)));
    }else{
        $ngay = date("d-m-Y");
        $ngaytn = date("Y-m-d");
    }

    $donhang = DB::table("donhangs")->where("ngayban",$ngaytn)->get(); 
    $tong = DB::table("donhangs")->where("ngayban",$ngaytn)->sum("thanhtien"); 
    $count = DB::table("donhangs")->where("ngayban",$ngaytn)->count();
    //$ngay = $_GET['ngay'];  
    return view("viewdonhang",
        compact([
            "donhang"
            ,"ngay"
            ,"tong"
            ,"count"
        ])
    );
})->name("viewdonhang");

// viết chức năng quản lý thư viện
// Danh sách sách
// Danh sách phiếu thuê sách
// chi tiết phiếu thuê sách
// lập báo cóa như sau:
// --Báo cáo theo ngày gồm các cột dữ liệu
// -----Ngày thuê,số lượng phiếu, số lượng sách
// --Báo cáo theo tháng
// -----Tháng thuê, số lượng phiếu, số lượng sách
// --Báo cáo sách
// -----Tháng thuê, tên sách,số lượng được thuê
// -----Sắp xếp theo số lượng được thuê giảm dần

Route::get('/sach/list',function(){
    
    $sachs = DB::table("sachs")->get();
    return view("viewsach",
        compact([
            "sachs" 
        ])
    );
})->name("sachs.list");

Route::get('/phieuthue/list',function(){
    
    $phieuthues = DB::table("phieuthues")->get();
    return view("viewphieuthue",
        compact([
            "phieuthues" 
        ])
    );
})->name("phieuthues.list");

Route::get('/phieuthuchitiet/list',function(){
    $sachs = DB::table("sachs")
    ->pluck("tensach","id");

    $phieuthues = DB::table("phieuthues")
    ->pluck("tenphieu","id");
    
    $chitietphieuthues = DB::table("chitietphieuthues")->get();
    return view("viewchitietphieuthue",
        compact([
            "chitietphieuthues" 
            ,"sachs"
            ,"phieuthues"
        ])
    );
})->name("chitietphieuthues.list");

Route::get('/thongke/ngay',function(){
    $thongkengay = DB::select(
            'SELECT
                pt.ngaythue
                ,count(distinct pt.id) as soluongphieu
                ,count(ptct.sachid) as soluongsach
            FROM phieuthues pt 
                LEFT JOIN chitietphieuthues ptct ON pt.id = ptct.phieuthueid
            GROUP BY pt.ngaythue'
        );
    return view("thongketheongay",["thongkengay"=>$thongkengay]);
})->name("thongke.ngay");

Route::get('/thongke/thang',function(){
    $thongkethang = DB::select(
            'SELECT
                EXTRACT(month from pt.ngaythue) as thangthue
                ,count(distinct pt.id) as soluongphieu
                ,count(ptct.sachid) as soluongsach
            FROM phieuthues pt 
                LEFT JOIN chitietphieuthues ptct ON pt.id = ptct.phieuthueid
            GROUP BY thangthue'
        );
    return view("thongketheothang",["thongkethang"=>$thongkethang]);
})->name("thongke.thang");

Route::get('/thongke/sach',function(){
    if (isset($_GET['thangthue'])) {
        $thangthue = $_GET['thangthue'];
    }else{
        $thangthue = date("m");
    }
    $thongkesach = DB::select(
            'SELECT
                s.tensach
                ,count(ptct.sachid) as soluongthue
            FROM sachs s 
                LEFT JOIN chitietphieuthues ptct ON s.id = ptct.sachid
                LEFT JOIN phieuthues pt on pt.id = ptct.phieuthueid
            WHERE EXTRACT(month from pt.ngaythue) = ?
            GROUP BY s.tensach 
            ORDER BY soluongthue desc',[$thangthue]
        );
    return view("thongketheosach",["thongkesach"=>$thongkesach,"thangthue"=>$thangthue]);
})->name("thongke.sach");

Route::post('/sach/save','SachsController@themOrUpdate')->name('sach.save');

Route::get('/sach/addOrEdit/{id}',function(Request $request,$id){
    if($id < 0){
        $sach = new sachs();
    }else{
        $sach = DB::table('sachs')->find($id);
    }
    return view('editsach',['sach'=>$sach]);
})->name('sach.show');

Route::post('/phieuthue/save','PhieuthuesController@themOrUpdate')->name('phieuthue.save');

Route::get('/phieuthue/addOrEdit/{id}',function(Request $request,$id){
    if($id < 0){
        $phieuthue = new phieuthues();
    }else{
        $phieuthue = DB::table('phieuthues')->find($id);
    }
    return view('editphieuthue',['phieuthue'=>$phieuthue]);
})->name('phieuthue.show');

// Quản  lý vào ra cho 1 công ty
/**
 *  tạo model nhanvien,phongban, mayquetthe, vaora băng migration
 *  Viết các chức năng sau
 *      -QUản lý nhân viên
 *      - QUản lý phòng ban
 *      - Quản lý máy quét thẻ
 *      - thêm mới vào /ra
 *      - Hiển thị danh sách vào ra cho 1 nhân viên theo ngày
 *      - HIển thị danh sách vào ra theo tháng (các ngày trong tháng) cho  1 nhân viên theo mẫu
 *          Ngày------giờ vào ----- giờ ra ---- số lần vào/ra
 */
    //Quản lý nhân viên
 Route::get('/nhanvien/list',function(){
    $nhanviens = DB::table('nhanviens')->get();
    $phongbans = DB::table('phongbans')->pluck('ten','id');
    return view('viewnhanvien',['nhanviens'=>$nhanviens,'phongbans'=>$phongbans]);
 })->name('nhanvien.list');

 Route::get('/nhanvien/addOrEdit/{id}',function(Request $request,$id){
    if($id < 0){
        $nhanviens = new nhanviens();
    }else{
        $nhanviens = DB::table('nhanviens')->find($id);
    }
    $phongbans = DB::table('phongbans')->pluck('ten','id');
    return view('editnhanvien',['nhanviens'=>$nhanviens,'phongbans'=>$phongbans]);
})->name('nhanvien.show');

Route::post('/nhanvien/save','NhanviensController@themOrUpdate')->name('nhanvien.save');

    //Quản lý phòng ban
Route::get('/phongban/list',function(){
    $phongbans = DB::table('phongbans')->get();
    return view('viewphongban',['phongbans'=>$phongbans]);
 })->name('phongban.list');

 Route::get('/phongban/addOrEdit/{id}',function(Request $request,$id){
    if($id < 0){
        $phongbans = new phongbans();
    }else{
        $phongbans = DB::table('phongbans')->find($id);
    }
    
    return view('editphongban',['phongbans'=>$phongbans]);
})->name('phongban.show');

Route::post('/phongban/save','PhongbansController@themOrUpdate')->name('phongban.save');

    //Quản lý máy quẹt thẻ
Route::get('/mayquetthe/list',function(){
    $mayquetthes = DB::table('mayquetthes')->get();
    return view('viewmayquetthe',['mayquetthes'=>$mayquetthes]);
})->name('mayquetthe.list');

Route::get('/mayquetthe/addOrEdit/{id}',function(Request $request,$id){
    if($id < 0){
        $mayquetthes = new mayquetthes();
    }else{
        $mayquetthes = DB::table('mayquetthes')->find($id);
    }
    
    return view('editmayquetthe',['mayquetthes'=>$mayquetthes]);
})->name('mayquetthe.show');

Route::post('/mayquetthe/save','MayquetthesController@themOrUpdate')->name('mayquetthe.save');

    //Thêm mới vào ra
Route::get('/vaora/add',function(Request $request){
    return view('addvaora');
})->name('vaora.show');
    
Route::post('/vaora/save','VaorasController@themOrUpdate')->name('vaora.save');

    //Hiển thị danh sách ra vào cho 1 nhân viên theo ngày
Route::get('/nhanvien/ngay',function(Request $request){
    
    $ngay = isset($request->ngay)?$ngay = $request->ngay:date('d');
    $thang = isset($request->thang)?$thang = $request->thang:date('m');
    $nhanvienid = isset($request->nhanvienid)?$request->nhanvienid:-1;
    $nhanviens = DB::table('nhanviens')->pluck('ten','id');
    $vaoras = DB::select('SELECT * FROM vaoras where EXTRACT(day from thoigian) = ? and nhanvienid = ? and EXTRACT(month from thoigian) = ?',[$ngay,$nhanvienid,$thang]);
    return view('thongkevaoratheongay',['vaoras'=>$vaoras,'nhanviens'=>$nhanviens,'ngay'=>$ngay,'nhanvienid'=>$nhanvienid,'thang'=>$thang]);
})->name('nhanvien.ngay');
    //HIển thị danh sách vào ra theo tháng

Route::get('/nhanvien/thang',function(Request $request){

    $thang = isset($request->thang)?$thang = $request->thang:date('m');
    $nam = isset($request->nam)?$nam = $request->nam:date('Y');
    $nhanvienid = isset($request->nhanvienid)?$request->nhanvienid:-1;
    $nhanviens = DB::table('nhanviens')->pluck('ten','id');
    $vaoras = DB::select('select 
	                        EXTRACT(day from thoigian) as ngay,
	                        min(thoigian) as vao,
	                        max(thoigian) as ra,
	                        count(nhanvienid) as soluong
                            from vaoras
                            where nhanvienid = ? and EXTRACT(month from thoigian) = ? and EXTRACT(year from thoigian) = ?
                            group by ngay',[$nhanvienid,$thang,$nam]);
    return view('thongkevaoratheothang',['vaoras'=>$vaoras,'nhanviens'=>$nhanviens,'thang'=>$thang,'nhanvienid'=>$nhanvienid,'nam'=>$nam]);
})->name('nhanvien.thang');



