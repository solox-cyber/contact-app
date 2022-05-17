<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

 
    public function run()
    {
       Contact::factory(10)->create();
        // App\Models\Company::factory()->hasContacts(5)->count(10)->create();
    }
}
