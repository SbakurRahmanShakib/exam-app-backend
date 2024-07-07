<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateStudentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-student-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

        $studentName = 'Student ' . Carbon::now()->format('YmdHis');

        $email = 'email@gmail.com';

        $phone = '01774307611';

        $address = "Banasree";


        Student::create([
            's_name'   => $studentName,
            'email'    => $email,
            'phone'    => $phone,
            'address'  => $address

        ]);
        $this->info('Student created: ' . $studentName);



    }
}
