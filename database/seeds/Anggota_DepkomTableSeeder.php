<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Anggota_DepkomTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      $date = Carbon::create(1997, 5, 28, 0, 0, 0);

      DB::table('anggota_depkom')->insert([
        'posisi' => 'Staff',
        'anggota_id' => 3,
        'depkom_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);     

      DB::table('anggota_depkom')->insert([
        'posisi' => 'Ketua',
        'anggota_id' => 3,
        'depkom_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('anggota_depkom')->insert([
        'posisi' => 'Staff',
        'anggota_id' => 1,
        'depkom_id' => 5,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);  

      DB::table('anggota_depkom')->insert([
        'posisi' => 'Sekretaris',
        'anggota_id' => 5,
        'depkom_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('anggota_depkom')->insert([
        'posisi' => 'Staff',
        'anggota_id' => 2,
        'depkom_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);      
    }
}
