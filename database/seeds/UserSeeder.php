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
        $data = [
            [
              'lname'=>'Lenteria',
              'fname'=>'Benjie',
              'address'=>'Pob. Centro, Clarin, Bohol',
              'phone'=>'0909.089.2350',
              'email'=>'benjielenteria@yahoo.com',
              'password'=>bcrypt('Buscabus_2020')
            ],
            [
                'lname'=>'Reyes',
                'fname'=>'Angelie Mae',
                'address'=>'Lajog, Clarin, Bohol',
                'phone'=>'0909.087.6675',
                'email'=>'angeliemaereyes@yahoo.com',
                'password'=>bcrypt('Buscabus_2020')
            ],
            [
                'lname'=>'Bautista',
                'fname'=>'Roland Glenn',
                'address'=>'Ubojan, Tubigon, Bohol',
                'phone'=>'0909.885.7736',
                'email'=>'rgbautista@yahoo.com',
                'password'=>bcrypt('Buscabus_2020')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
