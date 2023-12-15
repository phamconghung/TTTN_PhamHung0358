<div class="row">
    <div class="col-7 mb-3">
        <label for="size">Kích Thước</label>
        <select name="size" id="size" class="form-control">
            <option value="" selected disabled>Chọn kích thước</option>
            <optgroup label="Đồng hồ thời trang nữ">
                <option value="Cỡ nhỏ">Cỡ nhỏ: 23 – 27mm</option>
                <option value="Cỡ phổ biến">Cỡ phổ biến: 28 – 32mm</option>
                <option value="Cỡ lớn">Cỡ lớn: 34-38mm</option>
            </optgroup>
            <optgroup label="Đồng hồ thời trang nam">
                <option value="Cỡ nhỏ">Cỡ nhỏ: 35 – 37mm</option>
                <option value="Cỡ phổ biến">Cỡ phổ biến: 38 – 41mm</option>
                <option value="Cỡ lớn">Cỡ lớn: 42 – 45mm</option>
                <option value="Cỡ rất lớn">Cỡ rất lớn (Men XL): 45-50mm</option>
            </optgroup>
        </select>
        @if ($errors->has('size'))
            <div class="text-danger">
                {{ $errors->first('size') }}
            </div>
        @endif
    </div>
    

    <div class="col-7 mb-3">
        <label for="color">Màu</label>
        <select name="color" id="color" class="form-control">
            <option value="" selected disabled>Chọn màu</option>
            <option value="Red">Red</option>
            <option value="Black">Black</option>
            <option value="Blue">Blue</option>
        </select>
        @if ($errors->has('color'))
            <div class="text-danger">
                {{ $errors->first('color') }}
            </div>
        @endif
    </div>
</div>
