<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DatabaseSeeder extends Seeder
{
    use HasRolesAndPermissions;
    
    public function run(): void
    {
        $this->call(LaratrustSeeder::class);
    }
}
