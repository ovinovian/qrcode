<?php

namespace Database\Seeders;

use App\Models\Opd;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Opd::insert([
            [
                'nama_opd' => 'Badan Pusat Statistik (BPS)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'nama_opd' => 'Bank Indonesia (BI)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_opd' => 'Direktorat Jenderal Perbendaharaan (DJPB)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
