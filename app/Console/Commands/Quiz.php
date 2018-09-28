<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

class Quiz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Output of the summary answer questions list';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
        $quizzes = $this->getQuizzes();
        $index = array_rand($quizzes);
        $randomQuiz = $quizzes[$index];
        if ($index == 0){
        $answer = $this->choice($randomQuiz, ['Circle', 'Square']);
        ($answer == 'Circle') ? dd('Your answer is correct=)') : dd('Your answer is incorrect=(');}else{$answer = $this->choice($randomQuiz, ['7', '8']);
        ($answer == '7') ? dd('Your answer is correct=)') : dd('Your answer is incorrect=(');
        }
    }

    /**
     * Cet conf
     */
    private function getQuizzes()
    {
        return config('app.quizzes');

    }
}
