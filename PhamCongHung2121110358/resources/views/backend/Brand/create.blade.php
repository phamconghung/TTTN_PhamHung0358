@extends('layouts.backend.admin')
@section('title', $title ?? 'Trang Quản Lý')
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="text-transform: uppercase;  ">{{ $title }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('brand.index') }}"
                                        style="text-transform: capitalize;">Tất cả thương hiệu</a></li>
                                <li class="breadcrumb-item active ">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->

            </section>
            <!-- Main content -->
            <section class="content">
                <form action="{{ route('brand.store') }}" name="form1" method="post" enctype="multipart/form-data">
                    <!-- Default box --> @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                        <i class="fas fa-save"></i> Lưu[Thêm]
                                    </button>
                                    <a class="btn btn-sm btn-info" href="{{ route('brand.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('backend.message_alert')

                            <div class="row">
                                <div class="col-md-8">
                                    <div>
                                        <label for="name">Tên thương hiệu</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Việt Nam" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="metakey">Từ khóa</label>
                                        <textarea name="metakey" id="metakey" class="form-control" placeholder="Từ khóa">{{ old('metakey') }}</textarea>
                                        @if ($errors->has('metakey'))
                                            <div class="text-danger">
                                                {{ $errors->first('metakey') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="metadesc">Mô tả</label>
                                        <textarea name="metadesc" id="metadesc" class="form-control" placeholder="Mô tả">{{ old('metadesc') }}</textarea>
                                    </div>
                                    @if ($errors->has('metadesc'))
                                        <div class="text-danger">
                                            {{ $errors->first('metadesc') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="sort_order">Sắp xếp</label>
                                        <select name="sort_order" id="sort_order" class="form-control bg-gray">
                                            <option value="0">--Chọn vị trí--</option>
                                            {!! $html_sort_order !!}
                                        </select>


                                    </div>
                                    <div>
                                        <label for="image">Hình đại diện</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            value="{{ old('image') }}">
                                        @if ($errors->has('image'))
                                            <div class="text-danger">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="status">Trạng thái</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{ old('status') == 1 ? 'selected' : ' ' }}>Xuất bản</option>
                                            <option value="2" {{ old('status') == 2 ? 'selected' : ' ' }}>Không xuất bản
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                        <i class="fas fa-save"></i> Lưu[Thêm]
                                    </button>
                                    <a class="btn btn-sm btn-info" href="{{ route('brand.index') }}">
                                        <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                    </div>
                    <!-- /.card -->
                </form>
            </section>
            <!-- /.content -->
        </div>
    </section>

@endsection
