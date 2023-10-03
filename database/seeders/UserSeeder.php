<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Form::create([
      'email' => Str::random(8) . '@mail.com',
      'password' => Hash::make('password'),
      'first_name' => Str::random(8),
      'last_name' => Str::random(8),
      'age' => rand(2.50, 99.99),
    ]);
  }
}
