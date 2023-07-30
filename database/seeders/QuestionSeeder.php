<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions_id1 = [
            'What is the latest major version of Laravel?',
        ];

        foreach ($questions_id1 as $question) {
            Question::firstOrCreate([
                'topic_id' => 1,
                'level_id' => 1,
                'text' => $question
            ]);
        }

        $questions_id2 = [
            'What is the latest major version of PHP?',
        ];

        foreach ($questions_id2 as $question) {
            Question::firstOrCreate([
                'topic_id' => 2,
                'level_id' => 1,
                'text' => $question
            ]);
        }

        $questions_id3 = [
            'What is the latest major version of SQL?'
        ];

        foreach ($questions_id3 as $question) {
            Question::firstOrCreate([
                'topic_id' => 3,
                'level_id' => 2,
                'text' => $question
            ]);
        }
    }
}
