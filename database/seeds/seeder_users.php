<?php

use Illuminate\Database\Seeder;
use app\ModelUser;

class seeder_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\ModelUser::insert([
          [
              'email' => 'kikirizkiamalinda@mrwhite.com',
              'password'=> '123456789',
              'nama'=> 'Kiki Rizki Amalinda',
              'foto'=> 'kiki.jpg',
          ],
          [
              'email' => 'tririzkiherlambang@mrwhite.com',
              'password'=> '123456789',
              'nama'=> 'Tri Rizki Herlambang',
              'foto'=> 'bams.jpg',
            ],
        ]);
    }
  }
