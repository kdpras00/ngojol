<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverSampaiTujuan;
use Illuminate\Support\Facades\Validator;

class DriverSampaiTujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arrivals = DriverSampaiTujuan::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data driver sampai tujuan',
            'data' => $arrivals
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'driver_name' => 'required',
            'phone_number' => 'required',
            'delivery_date' => 'required|date',
            'order_id' => 'required|numeric',
            'status' => 'required|in:Selesai,Dibatalkan',
            'arrival_time' => 'nullable|date_format:H:i:s',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memasukkan data driver sampai tujuan',
                'data' => $validator->errors()
            ], 400);
        }

        $arrival = DriverSampaiTujuan::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data driver sampai tujuan',
            'data' => $arrival
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $arrival = DriverSampaiTujuan::find($id);
        if ($arrival) {
            return response()->json([
                'success' => true,
                'message' => 'Data driver sampai tujuan',
                'data' => $arrival
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data driver sampai tujuan tidak ditemukan',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $arrival = DriverSampaiTujuan::find($id);
        if (empty($arrival)) {
            return response()->json([
                'status' => false,
                'message' => 'Data driver sampai tujuan tidak ditemukan',
            ], 404);
        }

        $rules = [
            'driver_name' => 'required',
            'phone_number' => 'required',
            'delivery_date' => 'required|date',
            'order_id' => 'required|numeric',
            'status' => 'required|in:Selesai,Dibatalkan',
            'arrival_time' => 'nullable|date_format:H:i:s',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal. Silakan periksa data yang Anda masukkan.',
                'data' => $validator->errors()
            ], 400);
        }

        $arrival->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Sukses melakukan update data driver sampai tujuan',
            'data' => $arrival
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $arrival = DriverSampaiTujuan::find($id);
        if (empty($arrival)) {
            return response()->json([
                'status' => false,
                'message' => 'Data driver sampai tujuan tidak ditemukan',
            ], 404);
        }

        $arrival->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data driver sampai tujuan',
        ], 200);
    }

    public function getAllArrivals()
    {
        return response()->json(DriverSampaiTujuan::all());
    }
}
