<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InspireWorkController extends Controller
{
    //
    public function index()
    {
        try {
            $filePath = storage_path('app/public/Section-json/inspiring-work.json');
            if (File::exists($filePath)) {
                $jsonData = File::get($filePath);
                $data = json_decode($jsonData, true);
                if (isset($data['inspiring-work'])) {
                    return response()->json(['data' => $data['inspiring-work']]);
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
