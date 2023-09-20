<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class TechnologyController extends Controller
{
    //
    public function index()
    {
        try {
            $filePath = storage_path('app/public/Section-json/technologies.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['technologies'])) {
                    return response()->json(['data' => $data['technologies']]);
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
