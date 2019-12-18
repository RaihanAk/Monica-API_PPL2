<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
	  {
	  	$this->call('AnggotasTableSeeder');
	  	$this->call('BksTableSeeder');
      $this->call('DepkomsTableSeeder');
      $this->call('ProgkersTableSeeder');
      $this->call('Anggota_DepkomTableSeeder');
      $this->call('LombasTableSeeder');
      $this->call('Anggota_LombaTableSeeder');
      $this->call('KkmsTableSeeder');
	  }
}
