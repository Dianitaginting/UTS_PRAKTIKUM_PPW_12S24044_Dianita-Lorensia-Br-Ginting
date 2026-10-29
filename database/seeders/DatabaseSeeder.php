<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $srv = Category::create(['name' => 'Server & Cloud', 'code' => 'SRV']);
    $iot = Category::create(['name' => 'Internet of Things', 'code' => 'IOT']);
    $mda = Category::create(['name' => 'Multimedia & Drone', 'code' => 'MDA']);

    Equipment::create([
        'category_id' => $srv->id,
        'asset_code' => 'EQ-SRV-001',
        'name' => 'Dell PowerEdge T40 Server',
        'specification' => 'Intel Xeon E-2224G, 16GB RAM, 1TB HDD',
        'condition' => 'baik',
        'status' => 'dipinjam',
        'daily_rental_fee' => 100000,
    ]);

    Equipment::create([
        'category_id' => $mda->id,
        'asset_code' => 'EQ-DRN-001',
        'name' => 'DJI Mavic Air 2 Fly More Combo',
        'specification' => '4K Video, 34 Min Flight Time, 10km Range',
        'condition' => 'baik',
        'status' => 'tersedia',
        'daily_rental_fee' => 50000,
    ]);
    }
}
