<?php

namespace App\Http\Requests;

use App\Models\Mahasiswa;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMahasiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $mahasiswa = $this->route('mahasiswa');
        $id = $mahasiswa instanceof Mahasiswa ? $mahasiswa->id : $mahasiswa;

        return [
            'nim'      => 'required|string|max:20|unique:mahasiswas,nim,' . $id,
            'nama'     => 'required|string|max:100',
            'email'    => 'required|email|unique:mahasiswas,email,' . $id,
            'jurusan'  => 'required|string|max:100',
            'angkatan' => 'required|integer|min:2000|max:' . date('Y'),
        ];
    }

    /**
     * Handle a failed validation attempt.
     */
    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            throw new HttpResponseException(
                response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'errors' => $validator->errors()
                ], 422)
            );
        }

        parent::failedValidation(validator);
    }
}

