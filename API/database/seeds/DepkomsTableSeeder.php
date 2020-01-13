<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DepkomsTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      $date = Carbon::create(1997, 5, 28, 0, 0, 0);

      DB::table('depkoms')->insert([
        'nama' => 'Departemen Sosial',
        'bk_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);     

      DB::table('depkoms')->insert([
        'nama' => 'Departemen Penelitian dan Pengembangan',
        'bk_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('depkoms')->insert([
        'nama' => 'Komisi 3',
        'bk_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('depkoms')->insert([
        'nama' => 'Departemen Pembentukan Sumber Daya Manusia',
        'bk_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);  

      DB::table('depkoms')->insert([
        'nama' => 'Departemen Keilmuan',
        'bk_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);        
    }
}
