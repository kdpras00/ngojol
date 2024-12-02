<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverPickup;
use Illuminate\Support\Facades\Validator;

class DriverPickupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pickups = DriverPickup::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data driver pickup',
            'data' => $pickups
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
            'pickup_date' => 'required|date',
            'order_id' => 'required|numeric',
            'status' => 'required|in:Dalam Perjalanan,Diterima,Selesai,Dibatalkan',
            'pickup_time' => 'nullable|date_format:H:i:s',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memasukkan data driver pickup',
                'data' => $validator->errors()
            ], 400);
        }

        $pickup = DriverPickup::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data driver pickup',
            'data' => $pickup
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pickup = DriverPickup::find($id);
        if ($pickup) {
            return response()->json([
                'success' => true,
                'message' => 'Data driver pickup',
                'data' => $pickup
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data driver pickup tidak ditemukan',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pickup = DriverPickup::find($id);
        if (empty($pickup)) {
            return response()->json([
                'status' => false,
                'message' => 'Data driver pickup tidak ditemukan',
            ], 404);
        }

        $rules = [
            'driver_name' => 'required',
            'phone_number' => 'required',
            'pickup_date' => 'required|date',
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

        $pickup->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Sukses melakukan update data driver pickup',
            'data' => $pickup
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pickup = DriverPickup::find($id);
        if (empty($pickup)) {
            return response()->json([
                'status' => false,
                'message' => 'Data driver pickup tidak ditemukan',
            ], 404);
        }

        $pickup->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data driver pickup',
        ], 200);
    }

    public function getAllPickups()
    {
        return response()->json(DriverPickup::all());
    }
}
