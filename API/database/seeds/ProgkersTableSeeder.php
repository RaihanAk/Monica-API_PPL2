<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgkersTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      $date = Carbon::create(1997, 5, 28, 0, 0, 0);

      DB::table('progkers')->insert([
        'nama' => 'INTI (Informatics Berbakti)',
        'depkom_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);     

      DB::table('progkers')->insert([
        'nama' => 'PKTI (Pelatihan Karya Tulis Ilmiah)',
        'depkom_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('progkers')->insert([
        'nama' => 'Peluit (Pemilihan Umum IT)',
        'depkom_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);  

      DB::table('progkers')->insert([
        'nama' => 'Haiti (Hardskill For TI)',
        'depkom_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('progkers')->insert([
        'nama' => 'CBS (Character Building Season)',
        'depkom_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);      
    }
}
