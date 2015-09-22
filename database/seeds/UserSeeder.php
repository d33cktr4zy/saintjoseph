<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //hapus data
        DB::table('tbl_user')->delete();
	    DB::table('tbl_user')->insert([
		    [
			    'username'  =>  'gaby',
			    'nama_depan'=>  'Gabriel',
			    'nama_belakang'=> 'Fermy',
		        'password'  =>  Hash::make('12345'),
			    'email'     =>  'adadeh@adaaja.com',
			    'alamat'    =>  'disini aja',
			    'kota'      =>  'Medan',
			    'kode_pos'  =>  '12345',
			    'user_level'=>  1,

	        ]
	                                  ]);
    }
}
