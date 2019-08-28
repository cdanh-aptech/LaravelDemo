<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;

class LoaiTinController extends Controller
{
    //
    public function getDanhSach()
    {
        $loaitin = LoaiTin::all();
        return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }

    public function getThem()
    {
        $theloai = TheLoai::all();
        return view('admin.loaitin.them', ['theloai'=>$theloai]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten' => 'required|min:3|max:100|unique:LoaiTin,Ten',
                'TheLoai' => 'required'
            ],
            [
                'TheLoai.required' => 'Bạn chưa chọn thể loại',
                'Ten.required' => 'Bạn chưa nhập tên loại tin..',
                'Ten.unique' => 'Tên loại tin đã tồn tại',
                'Ten.min' => 'Tên loại tin có độ dài từ 3 đến 100 ký tự',
                'Ten.max' => 'Tên loại tin có độ dài từ 3 đến 100 ký tự'
            ]);
        $loaitin = new LoaiTin;
        $loaitin->Ten = $request->Ten;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->idTheLoai = $request->TheLoai;
        $loaitin->save();

        return redirect('admin/loaitin/them')->with('thongbao', 'Thêm thành công!');
    }

    public function getSua($id)
    {
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::find($id);
        return view('admin.loaitin.sua', ['loaitin'=>$loaitin, 'theloai'=>$theloai]);
    }

    public function postSua(Request $request, $id)
    {
        $loaitin = LoaiTin::find($id);
        $this->validate($request,
            [
                'Ten' => 'required|unique:LoaiTin,Ten|min:3|max:100',
                'TheLoai' => 'required'
            ],
            [
                'TheLoai.required' => 'Bạn chưa chọn loại tin',
                'Ten.required' => 'Bạn chưa nhập tên loại tin',
                'Ten.unique' => 'Tên loại tin đã tồn tại',
                'Ten.min' => 'Tên loại tin có độ dài từ 3 đến 100 ký tự',
                'Ten.max' => 'Tên loại tin có độ dài từ 3 đến 100 ký tự'
            ]);
        
        $loaitin->Ten = $request->Ten;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->idTheLoai = $request->TheLoai;
        $loaitin->save();

        return redirect('admin/loaitin/sua/'.$id)->with('thongbao', 'Cập nhật thành công');
    }

    public function getXoa($id)
    {
        $loaitin = LoaiTin::find($id);
        $loaitin->delete();

        return redirect('admin/loaitin/danhsach')->with('thongbao', 'Thể loại đã xóa thành công');
    }


}
