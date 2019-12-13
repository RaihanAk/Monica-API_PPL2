<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Anggota_LombaTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      $date = Carbon::create(1997, 5, 28, 0, 0, 0);

      DB::table('anggota_lomba')->insert([
        'nama_tim' => 'Meiko',
        'juara' => 'Juara 1',
        'cabang_lomba' => 'Software Development',
        'anggota_id' => 1,
        'lomba_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);     

      DB::table('anggota_lomba')->insert([
        'nama_tim' => 'Ampersand',
        'juara' => 'Juara 3',
        'cabang_lomba' => 'Competitive Programming',
        'anggota_id' => 3,
        'lomba_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('anggota_lomba')->insert([
        'nama_tim' => 'Hello World Team',
        'juara' => 'Honorable Mention',
        'cabang_lomba' => 'Data Mining',
        'anggota_id' => 2,
        'lomba_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);  

      DB::table('anggota_lomba')->insert([
        'nama_tim' => 'Test Team',
        'juara' => 'Juara 1',
        'cabang_lomba' => 'Business Plan',
        'anggota_id' => 5,
        'lomba_id' => 4,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('anggota_lomba')->insert([
        'nama_tim' => 'I dont know Team',
        'juara' => 'Juara Terakhir',
        'cabang_lomba' => 'Game Development',
        'anggota_id' => 4,
        'lomba_id' => 3,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);      
    }
}
