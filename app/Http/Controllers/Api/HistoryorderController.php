<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Historyorder;
use Illuminate\Support\Facades\Validator;

class HistoryorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Historyorder::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data history order',
            'data' => $orders
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'total_price' => 'required|integer',
            'order_date' => 'required|date',
            'status' => 'required|string'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memasukkan data history order',
                'data' => $validator->errors()
            ], 400);
        }

        $order = Historyorder::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data history order berhasil disimpan',
            'data' => $order
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Historyorder::find($id);
        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Data history order ditemukan',
                'data' => $order
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data history order tidak ditemukan',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Historyorder::find($id);
        if (empty($order)) {
            return response()->json([
                'success' => false,
                'message' => 'Data history order tidak ditemukan',
            ], 404);
        }

        $rules = [
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'total_price' => 'required|integer',
            'order_date' => 'required|date',
            'status' => 'required|string'
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
            'message' => 'Sukses melakukan update data history order',
            'data' => $order
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Historyorder::find($id);
        if (empty($order)) {
            return response()->json([
                'success' => false,
                'message' => 'Data history order tidak ditemukan',
            ], 404);
        }

        $order->delete();
        return response()->json([
            'success' => true,
            'message' => 'Sukses menghapus data history order',
        ], 200);
    }

    public function getAllOrders()
    {
        return response()->json(Historyorder::all());
    }
}
