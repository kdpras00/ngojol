<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CostumerMelakukanRating;    
use Illuminate\Support\Facades\Validator;

class CostumermelakukanratingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = CostumerMelakukanRating::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data costumer melakukan rating',
            'data' => $ratings
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rating = new CostumerMelakukanRating;

        $rules = [
            'customer_id' => 'required|integer',
            'customer_name' => 'required|string',
            'order_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
            'rating_date' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memasukkan data costumer melakukan rating',
                'data' => $validator->errors()
            ], 400);
        }

        $rating->customer_id = $request->customer_id;
        $rating->customer_name = $request->customer_name;
        $rating->order_id = $request->order_id;
        $rating->rating = $request->rating;
        $rating->review = $request->review;
        $rating->rating_date = $request->rating_date;
        $rating->save();

        return response()->json([
            'success' => true,
            'message' => 'Data costumer melakukan rating',
            'data' => $rating
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rating = CostumerMelakukanRating::find($id);
        if ($rating) {
            return response()->json([
                'success' => true,
                'message' => 'Data costumer melakukan rating',
                'data' => $rating
            ], 200);    
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data costumer melakukan rating tidak ditemukan',
            ], 404);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rating = CostumerMelakukanRating::find($id);
        if (empty($rating)) {
            return response()->json([
                'status' => false,
                'message' => 'Data costumer melakukan rating tidak ditemukan',
            ], 404);
        }

        $rules = [
            'customer_id' => 'required|integer',
            'customer_name' => 'required|string',
            'order_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
            'rating_date' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal. Silakan periksa data yang Anda masukkan.',
                'data' => $validator->errors()
            ], 400);
        }

        $rating->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Sukses melakukan update data costumer melakukan rating',
            'data' => $rating
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rating = CostumerMelakukanRating::find($id);
        if (empty($rating)) {
            return response()->json([
                'status' => false,
                'message' => 'Data costumer melakukan rating tidak ditemukan',
            ], 404);
        }   

        $rating->delete();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data costumer melakukan rating',
        ], 200);    
    }

    public function getAllRatings()
    {
        return response()->json(CostumerMelakukanRating::all());
    }
}
