<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Requests;
use App\Models\User;
use App\Models\Groups;
use App\Models\Comments;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $groups = Groups::create([
            'id' => 1,
            'name' => 'User'
        ]);
        $groups = Groups::create([
            'id' => 2,
            'name' => 'Administrator'
        ]);
        $groups = Groups::create([
            'id' => 3,
            'name' => 'Department'
        ]);


        $users = User::create([
            'id' => 1,
            'name' => 'Linda',
            'surname' => 'Rieksta',
            'email' => 'linda.rieksta@test.lv',
            'password' => Hash::make('Parole123'),
            'groupID' => 1,
        ]);
        $users = User::create([
            'id' => 2,
            'name' => 'Emīls',
            'surname' => 'Ozoliņš',
            'email' => 'emils.ozolins@test.lv',
            'password' => Hash::make('Pm3ucbKm'),
            'groupID' => 1,
        ]);
        $users = User::create([
            'id' => 3,
            'name' => 'Anna',
            'surname' => 'Priedīte',
            'email' => 'anna.priedite@test.lv',
            'password' => Hash::make('MMpgQx5D'),
            'groupID' => 1,
        ]);
        $users = User::create([
            'id' => 4,
            'name' => 'Ieva',
            'surname' => 'Zariņa',
            'email' => 'ieva.zarina@test.lv',
            'password' => Hash::make('7GXbVeR3'),
            'groupID' => 2,
        ]);
        $users = User::create([
            'id' => 5,
            'name' => 'Gustavs',
            'surname' => 'Liepa',
            'email' => 'gustavs.liepa@test.lv',
            'password' => Hash::make('Xbr97pzs'),
            'groupID' => 3,
        ]);
        //requests
        $requests = Requests::create([
            'id' => 1,
            'request_type' => 'Error',
            'name' => 'Web error',
            'priority' => 'A',
            'attachment' => 'NULL',
            'date' => '2022-05-05',
            'description' => 'Web page is not working',
            'status' => 'In progress',
            'userID' => 1,
        ]);
        $requests = Requests::create([
            'id' => 2,
            'request_type' => 'Consultation',
            'name' => 'New consultation',
            'priority' => 'B',
            'attachment' => 'NULL',
            'date' => '2022-05-05',
            'description' => 'New consultation',
            'status' => 'Open',
            'userID' => 2,
        ]);
        $requests = Requests::create([
            'id' => 3,
            'request_type' => 'Change',
            'name' => 'New funtionality',
            'priority' => 'C',
            'attachment' => 'NULL',
            'date' => '2022-05-05',
            'description' => 'Create new button in homepage',
            'status' => 'Closed',
            'userID' => 3,
        ]);
        $requests = Requests::create([
            'id' => 4,
            'request_type' => 'Travel request',
            'name' => 'Seminar',
            'priority' => 'C',
            'attachment' => 'NULL',
            'date' => '2022-05-05',
            'description' => 'Participate in seminar',
            'status' => 'Reopened',
            'userID' => 1,
        ]);
        $requests = Requests::create([
            'id' => 5,
            'request_type' => 'Purchase',
            'name' => 'Purchase of computers',
            'priority' => 'C',
            'attachment' => 'NULL',
            'date' => '2022-05-05',
            'description' => 'Need to buy 10 more computers for office',
            'status' => 'Closed',
            'userID' => 2,
        ]);

        $comments = Comments::create([
            'id' => 1,
            'text' => 'Will be fixed',
            'userID' => 5,
            'requestID' => 1
        ]);
        $comments = Comments::create([
            'id' => 2,
            'text' => 'Ok',
            'userID' => 5,
            'requestID' => 2
        ]);
        $comments = Comments::create([
            'id' => 3,
            'text' => 'Will be created',
            'userID' => 5,
            'requestID' => 3
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
