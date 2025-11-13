<?php

namespace App;

class ApiHelper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function resp($data, $internalStatus = 200)
    {
        $headers = [
            "Content-Type" => "application/json"
        ];
        return response()->json($data, $internalStatus, $headers);
    }

    public function fieldChecker($receivedData, $requiredFields)
    {
        $missingFields = [];

        // Iterate through required fields and collect missing attributes
        foreach ($requiredFields as $field) {
            if (!isset($receivedData[$field])) {
                $missingFields[] = $field;
            }
        }

        if (!empty($missingFields)) {
            $errorMessage = 'Missing required fields: ' . implode(', ', $missingFields);

            // Using response()->json() instead of the undefined $this->resp() helper
            return [
                'error' => $errorMessage,
                'missing_fields' => $missingFields
            ];
        }
        return null; // All required fields are present
    }
}
