<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\AddTKRequest;
use App\Models\BaiGiang;
use App\Models\GiangVien;
use App\Models\Khoa;
use App\Models\LichDay;
use App\Models\Lop;
use App\Models\Mon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function ThongKe()
    {
        $khoa = Khoa::all()->count();
        $lop = Lop::all()->count();
        $mon = Mon::all()->count();
        $bai = BaiGiang::all()->count();
        $gv = GiangVien::all()->count();
        $lich = DB::table('lichday')
            ->select('lichday.ld_lop', 'lichday.ld_mon')
            ->distinct()->get()->count();

        // dd($lich);
        return view('admin.thongke', compact('khoa', 'lop', 'mon', 'bai', 'gv', 'lich'));
    }
    public function TaiKhoan()
    {
        $data['account'] = User::query()->paginate(10);
        return view('admin.taikhoan', $data);
    }

    public function postTaiKhoan(Request $request)
    {
        $dataValidated = $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|unique:user,email',
            'password' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        $dataValidated['password'] = Hash::make($dataValidated['password']);

        $user = User::create($dataValidated);

        return back();
    }
    public function khoaTK(Request $request, $id)
    {
        $tk = User::find($id);
        $tk->status = 0;
        $tk->save();

        return back()->withInput()->with('success', 'Khóa tài khoản thành công!');
    }
    public function mokhoaTK(Request $request, $id)
    {
        $tk = User::find($id);
        $tk->status = 1;
        $tk->save();

        return back()->withInput()->with('success', 'Mở khóa tài khoản thành công!');
    }

    public function getDeleteTK($id)
    {
        User::destroy($id);
        return back()->withInput()->with('success', 'Xóa tài khoản thành công!');
    }
    public function TimKiem()
    {
        return view('admin.timkiem');
    }
    public function search(Request $request)
    {

        $keyword = $request->get('keyword');

        $resultKhoa = Khoa::where('k_tenkhoa', 'LIKE', '%' . $keyword . '%')->get();
        $resultLop = Lop::where('l_tenlop', 'LIKE', '%' . $keyword . '%')->get();
        $resultMon = Mon::where('m_tenmon', 'LIKE', '%' . $keyword . '%')->get();
        $resultBai = BaiGiang::where('b_tenbai', 'LIKE', '%' . $keyword . '%')->get();
        $resultGV = GiangVien::where('gv_ten', 'LIKE', '%' . $keyword . '%')->get();

        return view('admin.search', compact('resultKhoa', 'resultLop', 'resultMon', 'resultBai', 'resultGV'));
    }
}
