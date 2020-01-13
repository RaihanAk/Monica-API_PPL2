<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LombasTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      $date = Carbon::create(1997, 5, 28, 0, 0, 0);

      DB::table('lombas')->insert([
        'nama' => 'Compfest',
        'penyelenggara' => 'UI',
        'tanggal' => Carbon::now()->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);     

      DB::table('lombas')->insert([
        'nama' => 'Arkavidia',
        'penyelenggara' => 'ITB',
        'tanggal' => Carbon::now()->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('lombas')->insert([
        'nama' => 'Mage',
        'penyelenggara' => 'ITS',
        'tanggal' => Carbon::now()->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);  

      DB::table('lombas')->insert([
        'nama' => 'Gemastik',
        'penyelenggara' => 'Kemenristekdikti',
        'tanggal' => Carbon::now()->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
    }
}
