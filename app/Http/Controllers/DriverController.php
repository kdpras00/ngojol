<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class DriverController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pendaftaran-driver-baru', ['title' => 'Pendaftaran Driver Baru']);
    }

    public function submitRegistration(Request $request)
    {
        Log::info('Received data:', $request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'vehicle' => 'required|in:motor,mobil',
            'license' => 'required|string|max:50',
            'ktp' => 'required|string|max:50',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            Driver::create($validatedData);
            Log::info('Driver created successfully');
            return redirect()->back()->with('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda segera.');
        } catch (\Exception $e) {
            Log::error('Error creating driver: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
