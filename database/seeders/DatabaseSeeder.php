<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {

    User::factory()->count(200)->create();

    User::query()->inRandomOrder()->limit(10)->get()
      ->each(fn(User $u) => Project::factory()
        ->create(['created_by' => $u->id]));
  }
}
