<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $filePath = storage_path('app/public/data.json'); // Adjust the path as needed
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]+$/',
            'projectDetails' => 'required|string',
        ]);
        try {

            $newData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'projectDetails' => $request->input('projectDetails'),
            ];

            // Define the path to your JSON file
            $filePath = storage_path('app/public/data.json'); // Adjust the path as needed

            // Check if the file exists and decode its current content
            $currentData = [];
            if (file_exists($filePath)) {
                $currentData = json_decode(file_get_contents($filePath), true);
                if (!is_array($currentData)) {
                    throw new \Exception('Existing data is not in array format.');
                }
            }

            // Append the new data to the existing data
            $currentData[] = $newData;

            // Encode the merged data as JSON
            $jsonData = json_encode($currentData);

            // Write the JSON data to the file
            if (file_put_contents($filePath, $jsonData) !== false) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data saved successfully',
                ]);
            } else {
                throw new \Exception('Failed to write data to JSON file.');
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data saved successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
