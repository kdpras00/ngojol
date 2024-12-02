<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;    
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $register = Register::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Register',
            'data' => $register
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $register = new Register;

        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'gagal memasukkan data',
                'data' => $validator->errors()
            ], 400);
        }

        $register-> nama  = $request->nama;
        $register-> email = $request->email;
        $register-> password = $request->password;
        $register->save();

        
        return response()->json([
            'success' => true,
            'message' => 'Data Register',
            'data' => $register
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $register = Register::find($id);
        if ($register) {
            return response()->json([
                'success' => true,
                'message' => 'Data Register',
                'data' => $register
            ], 200);    
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Register tidak ditemukan',
            ], 404);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $register = Register::find($id);
        if (empty($register)) {
            return response()->json([
                'status' => false,
                'message' => 'Data Register tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama' => 'required',
            'email' => 'required|email|unique:register,email,' . $id,
            'password' => 'required|min:8',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal. Silakan periksa data yang Anda masukkan.',
                'data' => $validator->errors()
            ], 400);
        }

        // Hash the password before updating
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $register->update($data);

        return response()->json([
            'success' => true,
            'message' => 'sukses melakukan update data',
            'data' => $register
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $register = Register::find($id);
        if (empty($register)) {
            return response()->json([
                'status' => false,
                'message' => 'Data Register tidak ditemukan',
            ], 404);
        }   

        $register->delete();
        return response()->json([
            'status' => true,
            'message' => 'sukses menghapus data',
        ], 200);    
    }

    public function getAllRegisters()
    {
        return response()->json(Register::all());
    }
}
