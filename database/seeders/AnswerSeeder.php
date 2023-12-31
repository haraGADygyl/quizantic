<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers_id1 = [
            'Version 8',
            'Version 9',
            'Version 11',
        ];

        foreach ($answers_id1 as $answer) {
            Answer::firstOrCreate([
                'question_id' => 1,
                'text' => $answer,
            ]);
        }

        Answer::firstOrCreate([
            'question_id' => 1,
            'text' => 'Version 10',
            'is_correct' => true
        ]);

        $answers_id2 = [
            'Version 9',
            'Version 10',
            'Version 11',
        ];

        foreach ($answers_id2 as $answer) {
            Answer::firstOrCreate([
                'question_id' => 2,
                'text' => $answer,
            ]);
        }

        Answer::firstOrCreate([
            'question_id' => 2,
            'text' => 'Version 8',
            'is_correct' => true
        ]);

        $answers_id3 = [
            'Version 9',
            'Version 10',
            'Version 11',
        ];

        foreach ($answers_id3 as $answer) {
            Answer::firstOrCreate([
                'question_id' => 3,
                'text' => $answer,
            ]);
        }

        Answer::firstOrCreate([
            'question_id' => 3,
            'text' => 'Version 8',
            'is_correct' => true
        ]);
    }
}
