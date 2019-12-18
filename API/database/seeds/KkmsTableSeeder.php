<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KkmsTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      $date = Carbon::create(2018, 5, 28, 0, 0, 0);

      DB::table('kkms')->insert([
        'nama_singkatan' => 'Devcom',
        'nama_panjang' => 'Developer Community',
        'hari_pertemuan' => 'Senin',
        'waktu_pertemuan' => '16:00',
        'url_logo' => 'http://hda.himatif.org/assets/logo/kkm/devcom.png',
        'ketua_id' => 21,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('kkms')->insert([
        'nama_singkatan' => 'Idea',
        'nama_panjang' => 'Informatics Design Association',
        'hari_pertemuan' => 'Kamis',
        'waktu_pertemuan' => '16:00',
        'url_logo' => 'http://hda.himatif.org/assets/logo/kkm/idea.png',
        'ketua_id' => 20,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      
      DB::table('kkms')->insert([
        'nama_singkatan' => 'IRC',
        'nama_panjang' => 'Informatics Robotic Club',
        'hari_pertemuan' => 'Selasa',
        'waktu_pertemuan' => '16:00',
        'url_logo' => 'http://hda.himatif.org/assets/logo/kkm/irc.png',
        'ketua_id' => 24,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('kkms')->insert([
        'nama_singkatan' => 'IBC',
        'nama_panjang' => 'Informatics Basketball Club',
        'hari_pertemuan' => 'Sabtu',
        'waktu_pertemuan' => '10:00',
        'url_logo' => 'http://hda.himatif.org/assets/logo/kkm/ibc.png',
        'ketua_id' => 16,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      
      DB::table('kkms')->insert([
        'nama_singkatan' => 'IBT',
        'nama_panjang' => 'Informatics Badminton Team',
        'hari_pertemuan' => 'Kamis',
        'waktu_pertemuan' => '18:00',
        'url_logo' => 'http://hda.himatif.org/assets/logo/kkm/ibt.png',
        'ketua_id' => 9,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('kkms')->insert([
        'nama_singkatan' => 'IFC',
        'nama_panjang' => 'Informatics Futsal Club',
        'hari_pertemuan' => 'Jumat',
        'waktu_pertemuan' => '18:00',
        'url_logo' => 'http://hda.himatif.org/assets/logo/kkm/ifc.png',
        'ketua_id' => 19,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
    }
}






