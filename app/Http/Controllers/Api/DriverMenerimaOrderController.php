<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverMenerimaOrder;
use Illuminate\Support\Facades\Validator;

class DriverMenerimaOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DriverMenerimaOrder::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data driver menerima order',
            'data' => $orders
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
            'order_date' => 'required|date',
            'order_id' => 'required|numeric',
            'status' => 'required|in:Dalam Perjalanan,Diterima,Selesai,Dibatalkan',
            'pickup_time' => 'nullable|date_format:H:i:s',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memasukkan data driver menerima order',
                'data' => $validator->errors()
            ], 400);
        }

        $order = DriverMenerimaOrder::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data driver menerima order',
            'data' => $order
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = DriverMenerimaOrder::find($id);
        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Data driver menerima order',
                'data' => $order
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data driver menerima order tidak ditemukan',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = DriverMenerimaOrder::find($id);
        if (empty($order)) {
            return response()->json([
                'status' => false,
                'message' => 'Data driver menerima order tidak ditemukan',
            ], 404);
        }

        $rules = [
            'driver_name' => 'required',
            'phone_number' => 'required',
            'order_date' => 'required|date',
            'order_id' => 'required|numeric',
            'status' => 'required|in:Dalam Perjalanan,Diterima,Selesai,Dibatalkan',
            'pickup_time' => 'nullable|date_format:H:i:s',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal. Silakan periksa data yang Anda masukkan.',
                'data' => $validator->errors()
            ], 400);
        }

        $order->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Sukses melakukan update data driver menerima order',
            'data' => $order
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = DriverMenerimaOrder::find($id);
        if (empty($order)) {
            return response()->json([
                'status' => false,
                'message' => 'Data driver menerima order tidak ditemukan',
            ], 404);
        }

        $order->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data driver menerima order',
        ], 200);
    }

    public function getAllOrders()
    {
        return response()->json(DriverMenerimaOrder::all());
    }
}
