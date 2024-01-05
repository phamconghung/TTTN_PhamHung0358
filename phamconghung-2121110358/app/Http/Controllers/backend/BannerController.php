<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::where('status', '!=', '0')
            ->orderBy('created_at', 'desc')
            ->get();
        $title = 'Tất Cả Banner';
        return view("backend.banner.index", compact('banner', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Banner::where('status',  '!=', '0')
            ->get();
        $html_sort_order = "";
        foreach ($list as $item) {
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'" . (($item->sort_order + 1 == old('sort_order')) ? ' selected ' : ' ') . " >Sau: " . $item->name . "</option>";
        }
        $title = 'Thêm Banner';

        return view("backend.banner.create", compact('html_sort_order', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerStoreRequest $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->position = $request->position;
        $banner->sort_order = $request->sort_order;
        $banner->status = $request->status;
        $banner->created_at = date('Y-m-d H:i:s');
        
        //upload file

        if ($request->hasFile('image')) {
            $path = 'images/banner/';
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::slug($request->name, '-') . '.' . $extension;
            $file->move($path, $filename);
            $banner->image = $filename;
        }
        if ($banner->save()) {
            return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => 'Thêm thành công!']);
        }

        return redirect()->route('banner.create')->with('message', ['type' => 'danger', 'msg' => 'Thêm thất bại!!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        if ($banner == null) {
            return redirect()->route('banner.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        }
        $title = 'Chi Tiết Banner';
        return view("backend.banner.show", compact('title', 'banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        if ($banner == null) {
            return redirect()->route('banner.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại']);
        }
        $list = Banner::where([['status', '!=', 0], ['id', '!=', $id]])->get();
        $html_sort_order = "";
        foreach ($list as $item) {
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'" . (($item->sort_order + 1 == old('sort_order', $banner->sort_order)) ? ' selected ' : ' ') . ">Sau: " . $item->name . "</option>";
        }
        $title = 'Sửa Banner';

        return view("backend.banner.edit", compact('title', 'html_sort_order', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerUpdateRequest $request, $id)
    {
        $request->validate([
            'name' => 'unique:banner,name,' . $id . ',id',
        ], [
            'name.unique' => 'Tên đã được sử dụng. Vui lòng chọn tên khác.'
        ]);
        $banner = Banner::find($id);
        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->position = $request->position;
        $banner->sort_order = $request->sort_order;
        // $banner->level = 1;
        $banner->status = $request->status;
        $banner->updated_at = date('Y-m-d H:i:s');
        //upload file

        if ($request->hasFile('image')) {
            $path = 'images/banner/';
            if (File::exists(public_path($path . $banner->image))) {
                File::delete(public_path($path . $banner->image));
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::slug($request->name, '-') . '.' . $extension;
            $file->move($path, $filename);
            $banner->image = $filename;
        }
        if ($banner->save()) {
            // $link = Link::where([['type', '=', 'banner'], ['table_id', '=', $banner->id]])->first();
            // $link->slug = $banner->slug;
            // $link->save();
            return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => 'Cập nhật thành công!']);
        }
        return redirect()->route('banner.edit')->with('message', ['type' => 'danger', 'msg' => 'Cập nhật thất bại!!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if ($banner == null) {
            return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại!']);
        }
        if ($banner->delete()) {
            $path = 'images/banner/';
            if (File::exists(public_path($path . $banner->image))) {
                File::delete(public_path($path . $banner->image));
            }
            return redirect()->route('banner.trash')->with('message', ['type' => 'success', 'msg' => 'Xóa vĩnh viễn thành công!']);
        }
        return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => 'Xóa thất bại!']);
    }
    public function trash()
    {
        //$list=Product::all();//try van tat ca
        $banner = Banner::where('status', '=', 0)->Orderby('updated_at', 'asc')->get();
        $title = 'Thùng rác Banner';
        return view("backend.banner.trash", compact('banner', 'title'));
    }
    public function trash_multi(Request $request)
    {
        $path = 'images/banner/';

        if (isset($request['DELETE_ALL'])) {
            if (isset($request->checkId)) {
                $list_id = $request->input('checkId');
                $count_max = sizeof($list_id);
                $count = 0;
                foreach ($list_id as $id) {
                    $banner = Banner::find($id);
                    if ($banner == null) {
                        return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => "Có mẫu tin không tồn tại!&&Đã xóa $count/$count_max !"]);
                    }
                    if ($banner->delete()) {
                        if (File::exists(public_path($path . $banner->image))) {
                            File::delete(public_path($path . $banner->image));
                        }
                        $count++;
                    }
                }
                return redirect()->route('banner.trash')->with('message', ['type' => 'success', 'msg' => "Xóa vĩnh viễn thành công $count/$count_max !"]);
            } else {
                return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => 'Chưa chọn mẫu tin!']);
            }
        }
        if (isset($request['RESTORE_ALL'])) {
            if (isset($request->checkId)) {
                $list_id = $request->input('checkId');
                $count_max = sizeof($list_id);
                $count = 0;
                foreach ($list_id as $id) {
                    $banner = Banner::find($id);
                    if ($banner == null) {
                        return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => "Có mẫu tin không tồn tại!&&Đã phục hồi $count/$count_max !"]);
                    }

                    $banner->status = 2;
                    $banner->updated_at = date('Y-m-d H:i:s');
                    $banner->save();
                    $count++;
                }
                return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => "Phục hồi thành công $count/$count_max !"]);
            } else {
                return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => 'Chưa chọn mẫu tin!']);
            }
        }
    }

    public function delete($id)
    {
        $banner = Banner::find($id);
        if ($banner == null) {
            return redirect()->route('banner.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại!']);
        }
        $banner->status = 0;
        $banner->updated_at = date('Y-m-d H:i:s');
        $banner->save();
        return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => 'Xóa thành công!&& vào thùng rác để xem!!!']);
    }

    public function delete_multi(Request $request)
    {
        if (isset($request->checkId)) {
            $list_id = $request->input('checkId');
            $count_max = sizeof($list_id);
            $count = 0;
            foreach ($list_id as $id) {

                $banner = Banner::find($id);
                if ($banner == null) {
                    return redirect()->route('banner.index')->with('message', ['type' => 'danger', 'msg' => "Có mẫu tin không tồn tại!Đã xóa $count/$count_max ! "]);
                }
                $banner->status = 0;
                $banner->updated_at = date('Y-m-d H:i:s');
                $banner->save();
                $count++;
            }
            return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => "Xóa thành công $count/$count_max !&& Vào thùng rác để xem!!!"]);
        } else {
            return redirect()->route('banner.index')->with('message', ['type' => 'danger', 'msg' => 'Chưa chọn mẫu tin!']);
        }
    }

    public function status($id)
    {

        $banner = Banner::find($id);
        if ($banner == null) {
            return redirect()->route('banner.index')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại!']);
        }

        $banner->status = ($banner->status == 1) ? 2 : 1;
        $banner->updated_at = date('Y-m-d H:i:s');
        $banner->save();
        return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => 'Thay đổi trạng thái thành công!']);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function restore($id)
    {

        $banner = Banner::find($id);
        if ($banner == null) {
            return redirect()->route('banner.trash')->with('message', ['type' => 'danger', 'msg' => 'Mẫu tin không tồn tại!']);
        }

        $banner->status = 2;
        $banner->updated_at = date('Y-m-d H:i:s');
        $banner->save();
        return redirect()->route('banner.index')->with('message', ['type' => 'success', 'msg' => 'Phục hồi thành công!']);
    }
}
