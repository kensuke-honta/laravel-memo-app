<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Memo;
class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Memo::create([
            'id' => '1',
            'title' => 'hoge',
            'text' => 'testText'
        ]);
    }
}
