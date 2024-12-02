<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CostumerOrder;    
use Illuminate\Support\Facades\Validator;

class CostumerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = CostumerOrder::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data costumer order',
            'data' => $orders
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new CostumerOrder;

        $rules = [
            'username' => 'required',
            'order_date' => 'required|date',
            'total_price' => 'required|numeric',
            'status' => 'required',
            'payment_method' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memasukkan data costumer order',
                'data' => $validator->errors()
            ], 400);
        }

        $order->username = $request->username;
        $order->order_date = $request->order_date;
        $order->total_price = $request->total_price;
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->save();

        return response()->json([
            'success' => true,
            'message' => 'Data costumer order',
            'data' => $order
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = CostumerOrder::find($id);
        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Data costumer order',
                'data' => $order
            ], 200);    
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data costumer order tidak ditemukan',
            ], 404);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = CostumerOrder::find($id);
        if (empty($order)) {
            return response()->json([
                'status' => false,
                'message' => 'Data costumer order tidak ditemukan',
            ], 404);
        }

        $rules = [
            'username' => 'required',
            'order_date' => 'required|date',
            'total_price' => 'required|numeric',
            'status' => 'required',
            'payment_method' => 'required',
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
            'message' => 'Sukses melakukan update data costumer order',
            'data' => $order
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = CostumerOrder::find($id);
        if (empty($order)) {
            return response()->json([
                'status' => false,
                'message' => 'Data costumer order tidak ditemukan',
            ], 404);
        }   

        $order->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data costumer order',
        ], 200);    
    }

    public function getAllOrders()
    {
        return response()->json(CostumerOrder::all());
    }
}
