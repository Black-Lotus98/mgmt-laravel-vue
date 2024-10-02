<?php

namespace Database\Seeders;

use App\Models\InspectionDetail;
use Illuminate\Database\Seeder;

class InspectionDetailsSeeder extends Seeder
{
    public function run()
    {
        $inspectionItems = [
            ['inspection_item' => 'SafePassing', 'description' => 'Ensuring safe passing maneuvers', 'max_score' => 3],
            ['inspection_item' => 'RightLane', 'description' => 'Staying in the right lane', 'max_score' => 3],
            ['inspection_item' => 'BlinkerUse', 'description' => 'Proper use of turn signals', 'max_score' => 3],
            ['inspection_item' => 'NoSmoking', 'description' => 'Adhering to the no-smoking policy', 'max_score' => 3],
            ['inspection_item' => 'Seatbelt', 'description' => 'Wearing seatbelt at all times', 'max_score' => 3],
            ['inspection_item' => 'BumpSpeed', 'description' => 'Maintaining appropriate speed over bumps', 'max_score' => 3],
            ['inspection_item' => 'NeighborhoodSpeed', 'description' => 'Driving at a safe speed in neighborhoods', 'max_score' => 3],
            ['inspection_item' => 'CurveSpeed', 'description' => 'Slowing down appropriately for curves', 'max_score' => 3],
            ['inspection_item' => 'StopSlowly', 'description' => 'Coming to a gradual stop', 'max_score' => 3],
            ['inspection_item' => 'SafeDistance', 'description' => 'Maintaining a safe following distance', 'max_score' => 3],
            ['inspection_item' => 'NoPhone', 'description' => 'Avoiding phone usage while driving', 'max_score' => 3],
        ];

        foreach ($inspectionItems as $item) {
            InspectionDetail::firstOrCreate([
                'inspection_item' => $item['inspection_item'],
                'description' => $item['description'],
                'max_score' => $item['max_score'],
                'isDeleted' => false
            ]);
        }
    }
}
