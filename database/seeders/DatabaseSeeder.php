<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

 
    public function run()
    {
        User::factory()->count(5)->create()->each(function($user){
            Company::factory()->has(
                Contact::factory()->count(5)->state(function($attributes, Company $company){
                    return ['user_id' => $company->user_id];
                })
            )->count(10)->create(
                ['user_id' => $user->id]
            );
        });
        //
        }
}
