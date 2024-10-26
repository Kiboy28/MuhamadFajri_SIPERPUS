<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Bookshelf;


class bookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves_')->insert([
            [
                'code'=>'RAK01',
                'name'=>'Informatika',
            ],
            [
                'code'=>'RAK02',
                'name'=>'Sipil',
            ],
            [
                'code'=>'ELK01',
                'name'=>'Elektronika',
            ]
        ]);

        Bookshelf::create([
            'code'=> 'RAK03',
            'name'=> 'Industri',

        ]);
    }
}
