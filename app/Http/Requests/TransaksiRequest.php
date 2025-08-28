<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
			'nama_pelanggan' => 'required',
			'nama_menu' => 'required',
			'tanggal_pembelian' => 'required',
			'jumlah' => 'required',
			'total_bayar' => 'required',
			'status_pembayaran' => 'required',
        ];
    }
}
