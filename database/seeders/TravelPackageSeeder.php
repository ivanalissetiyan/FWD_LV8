<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TravelPackage;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel_packages = [
            [
                'title' => 'Liburan Perkuliahan semester',
                'slug' => 'liburan-perkuliahan-semester',
                'location' => 'Semarang, Jawa Tengah',
                'about' => 'Liburang kami sangat menyenangkan lho',
                'featured_event' => 'Acara have fun aja',
                'language' => 'Indonesia',
                'foods' => 'Bakso & Mie Ayam',
                'departure_date' => '2022-02-16',
                'duration' => '3 Minggu',
                'type' => 'Mewah',
                'price' => '800000',

            ],
            [
                'title' => 'Liburan Sekolah',
                'slug' => 'liburan-sekolah',
                'location' => 'Yogjakarta, Jawa Tengah',
                'about' => 'Liburang ala-ala anak sekolah aja',
                'featured_event' => 'Kami happy banget',
                'language' => 'Indonesia',
                'foods' => 'Sate Kambing',
                'departure_date' => '2022-02-16',
                'duration' => '1 Minggu',
                'type' => 'Sederhana',
                'price' => '1000000',

            ],
            [
                'title' => 'Liburan Kerja',
                'slug' => 'liburan-kerja',
                'location' => 'Batam, Kepulauan Riau',
                'about' => 'Liburang ala-ala karyawan',
                'featured_event' => 'Kota Batam Sangat Panas',
                'language' => 'Indonesia',
                'foods' => 'Nasi Padang',
                'departure_date' => '2022-02-16',
                'duration' => '2 Hari',
                'type' => 'Menengah',
                'price' => '2000000',

            ]
        ];
        TravelPackage::insert($travel_packages);
        // TravelPackage::factory(2)->create();
    }
}
