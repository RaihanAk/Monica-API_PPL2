<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BksTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
    {
      DB::table('bks')->insert([
        'nama' => 'Pioneer',
        'tipe' => 'BE',
        'tahun' => '2014',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      
      DB::table('bks')->insert([
        'nama' => 'DPA 2014',
        'tipe' => 'DPA',
        'tahun' => '2014',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Musyawarah Besar I',
        'tipe' => 'Mubes',
        'tahun' => '2014',
        'url_foto' => 'http://hda.himatif.org/assets/logo/mubes.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('bks')->insert([
        'nama' => 'Harmoni',
        'tipe' => 'BE',
        'tahun' => '2015',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      
      DB::table('bks')->insert([
        'nama' => 'DPA 2015',
        'tipe' => 'DPA',
        'tahun' => '2015',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Musyawarah Besar II',
        'tipe' => 'Mubes',
        'tahun' => '2015',
        'url_foto' => 'http://hda.himatif.org/assets/logo/mubes.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);

      DB::table('bks')->insert([
        'nama' => 'Solid',
        'tipe' => 'BE',
        'tahun' => '2016',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      
      DB::table('bks')->insert([
        'nama' => 'DPA 2016',
        'tipe' => 'DPA',
        'tahun' => '2016',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Musyawarah Besar III',
        'tipe' => 'Mubes',
        'tahun' => '2016',
        'url_foto' => 'http://hda.himatif.org/assets/logo/mubes.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Impresif',
        'tipe' => 'BE',
        'tahun' => '2017',
        'url_foto' => 'http://hda.himatif.org/assets/logo/2017/be.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 
      
      DB::table('bks')->insert([
        'nama' => 'Insight',
        'tipe' => 'DPA',
        'tahun' => '2017',
        'url_foto' => 'http://hda.himatif.org/assets/logo/2017/dpa.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Musyawarah Besar IV',
        'tipe' => 'Mubes',
        'tahun' => '2017',
        'url_foto' => 'http://hda.himatif.org/assets/logo/mubes.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Simfoni',
        'tipe' => 'BE',
        'tahun' => '2018',
        'url_foto' => 'http://hda.himatif.org/assets/logo/2018/be.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 
      
      DB::table('bks')->insert([
        'nama' => 'Aegis',
        'tipe' => 'DPA',
        'tahun' => '2018',
        'url_foto' => 'http://hda.himatif.org/assets/logo/2018/dpa.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Musyawarah Besar V',
        'tipe' => 'Mubes',
        'tahun' => '2018',
        'url_foto' => 'http://hda.himatif.org/assets/logo/mubes.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Kohesif',
        'tipe' => 'BE',
        'tahun' => '2019',
        'url_foto' => 'http://hda.himatif.org/assets/logo/2019/be.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 
      
      DB::table('bks')->insert([
        'nama' => 'DPA 2019',
        'tipe' => 'DPA',
        'tahun' => '2019',
        'url_foto' => 'http://hda.himatif.org/assets/logo/kabplaceholder.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 

      DB::table('bks')->insert([
        'nama' => 'Musyawarah Besar VI',
        'tipe' => 'Mubes',
        'tahun' => '2019',
        'url_foto' => 'http://hda.himatif.org/assets/logo/mubes.png',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]); 
    }
}
