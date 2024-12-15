<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;    
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $login = login::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data login',
            'data' => $login
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $login = new Login;

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

        $login->nama = $request->nama;
        $login->email = $request->email;
        $login->password = bcrypt($request->password);
        $login->save();

        return response()->json([
            'success' => true,
            'message' => 'Data login',
            'data' => $login
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $login = login::find($id);
        if ($login) {
            return response()->json([
                'success' => true,
                'message' => 'Data login',
                'data' => $login
            ], 200);    
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data login tidak ditemukan',
            ], 404);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $login = login::find($id);
        if (empty($login)) {
            return response()->json([
                'status' => false,
                'message' => 'Data login tidak ditemukan',
            ], 404);
        }

        $rules = [
            'nama' => 'required',
            'email' => 'required|email|unique:login,email,' . $id,
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

        $login->update($data);

        return response()->json([
            'success' => true,
            'message' => 'sukses melakukan update data',
            'data' => $login
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $login = login::find($id);
        if (empty($login)) {
            return response()->json([
                'status' => false,
                'message' => 'Data login tidak ditemukan',
            ], 404);
        }   

        $login->delete();
        return response()->json([
            'status' => true,
            'message' => 'sukses menghapus data',
        ], 200);    
    }

    public function getAlllogins()
    {
        return response()->json(login::all());
    }
}
