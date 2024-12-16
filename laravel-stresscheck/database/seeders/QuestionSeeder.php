<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            ['content' => '仕事でストレスを感じることはありますか？', 'created_at' => now(), 'updated_at' => now()],
            ['content' => '1日にどのくらいリラックスする時間を取れていますか？', 'created_at' => now(), 'updated_at' => now()],
            ['content' => '睡眠の質についてどのように感じていますか？', 'created_at' => now(), 'updated_at' => now()],
            ['content' => '運動を定期的に行っていますか？', 'created_at' => now(), 'updated_at' => now()],
            ['content' => '最近、気分の浮き沈みを感じることがありますか？', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('questions')->insert($questions);
    }
}
