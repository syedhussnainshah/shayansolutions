<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilesController extends Controller
{
    //
    public function index()
    {
        try {
            $filePath = storage_path('app/public/Section-json/our-profiles.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['our-profiles'])) {
                    return response()->json(['data' => $data['our-profiles']]);
                } else {
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
