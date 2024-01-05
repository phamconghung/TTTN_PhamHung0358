<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:product,name|unique:brand,name|unique:category,name|unique:post,title|unique:topic,name|max:255',
            'detail' => 'required|string|max:1500',
            'metadesc' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'qty' => 'required|integer|min:1|max:100',
            'price' => 'required|numeric|min:1000',
            'price_sale' => 'nullable|required_with:date_begin,date_end|numeric|min:1000|lte:price',
            'date_begin' => 'nullable|required_with:date_end|date',
            'date_end' => 'nullable|required_with:date_begin|date|after:date_begin',
            'size' => 'required|string|max:255|in:Cỡ nhỏ,Cỡ phổ biến,Cỡ lớn,Cỡ rất lớn',
            'color' => 'required|string|max:255|in:Red,Black,Blue',
            'store_name' => 'required|string|max:255',
            'price_store' => 'required|numeric|min:1000',
        ];
    }

    public function messages(): array
    {
        $messages = [
            'same' => 'Đã tồn tại',
            'required' => 'Bạn chưa điền vào đây',
            'size' => 'Vượt quá :size từ!!',
            'min' => 'Phải lớn hơn hoặc bằng  :min ',
            'max' => 'Phải nhỏ hơn hoặc bằng  :max ',
            'in' => 'Không hợp lệ',

            'mimes' => 'Không hỗ trợ định dạng',
        ];

        return [
            'name.required' => $messages['required'],
            'name.max' => $messages['max'] . ' từ',
            'name.unique' => 'Tên đã được sử dụng. Vui lòng chọn tên khác',

            'detail.required' => $messages['required'],
            'detail.max' => $messages['max'] . ' từ',

            'metadesc.required' => $messages['required'],

            'metakey.required' => $messages['required'],

            'qty.min' => $messages['min'],
            'qty.max' => $messages['max'],
            'qty.required' => $messages['required'],

            'price.required' => $messages['required'],
            'price.min' => $messages['min'],

            'price_sale.min' => $messages['min'],
            'price_sale.lt' => 'Phải nhỏ hơn giá gốc',
            'price_sale.required_with' => $messages['required'],

            'date_begin.required_with' => $messages['required'],

            'date_end.required_with' => $messages['required'],
            'date_end.after' => 'Ngày kết thúc phải nhỏ hơn ngày bắt đầu',

            'store_name.required' => $messages['required'],
            'store_name.max' => $messages['max'] . ' từ',

            'size.in' => 'Kích thước không hợp lệ. Chỉ chấp nhận giá trị trong danh sách: Cỡ nhỏ, Cỡ phổ biến, Cỡ lớn, Cỡ rất lớn',
            'color.in' => 'Màu không hợp lệ. Chỉ chấp nhận giá trị trong danh sách: Red, Black, Blue',

            'price_store' => $messages['required'],
            'price_store.numeric' => 'Giá nhập phải là số.',
            'price_store.min' => $messages['min'],
            'price_store.lt' => 'Giá nhập phải nhỏ hơn giá gốc.',
        ];
    }
}
