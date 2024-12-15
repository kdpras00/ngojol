<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    // Menampilkan halaman pendaftaran driver
    public function create()
    {
        return view('pendaftaran-driver-baru', ['title' => 'Pendaftaran Driver']);

    }

    // Menangani penyimpanan data pendaftaran
    public function store(Request $request)
    {

        // Validate input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'vehicle' => 'required|string',
            'license' => 'required|string|max:20',
            'ktp' => 'required|string|max:20|unique:drivers,ktp',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $photoPath;
        }

        // Save data to the database
        Driver::create($validatedData);

        // Redirect with success message
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
    }


}
