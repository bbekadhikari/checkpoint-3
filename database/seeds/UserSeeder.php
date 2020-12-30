<?php

use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin table seeder
        DB::table('admins')->insert([
        	"name" => "bibek",
        	"email" => "bibek@app.com",
        	"password" => Hash::make("kathmandu"),
        	"phone" => "9898098098",
        	"type" => "admin",
        ],

    	[
        	"name" => "test",
        	"email" => "test@app.com",
        	"password" => Hash::make("rautahat"),
        	"phone" => "9890098098",
        	"type" => "admin",
        ]

    	[
        	"name" => "demo",
        	"email" => "demo@app.com",
        	"password" => Hash::make("sarlahi"),
        	"phone" => "9898097798",
        	"type" => "admin",
        ]
    );
    }
}
