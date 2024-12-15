<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Year;
use App\Models\Month;
use Carbon\Carbon;

class YearMonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan tahun saat ini
        $currentYear = Carbon::now()->year;
        $currentMonthIndex = Carbon::now()->month - 1; // Index bulan saat ini (0-based index)

        // Membuat tahun (misalnya tahun saat ini)
        $year = Year::firstOrCreate(['year' => $currentYear]);

        // Iterasi setiap nama bulan
        foreach (Year::$monthNames as $index => $monthName) {
            // Jika bulan saat ini atau sebelumnya, berikan nilai acak
            if ($index <= $currentMonthIndex) {
                $collection = rand(10000000000, 80000000000); // Nilai acak untuk collection
                $distribution = rand(10000000000, 80000000000); // Nilai acak untuk distribution
            } else {
                // Jika bulan mendatang, isi dengan 0
                $collection = 0;
                $distribution = 0;
            }

            // Buat atau perbarui data bulan di database
            Month::updateOrCreate(
                [
                    'month_name' => $monthName,
                    'year_id' => $year->id
                ],
                [
                    'collection' => $collection,
                    'distribution' => $distribution
                ]
            );
        }
    }
}
