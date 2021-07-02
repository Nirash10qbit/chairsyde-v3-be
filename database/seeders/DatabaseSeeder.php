<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Modules\Core\Entities\App;
use Modules\Core\Entities\SubTeam;
use Modules\Core\Entities\SubTeamMember;
use Modules\Core\Entities\Team;
use Modules\Core\Entities\TeamApp;
use Modules\Core\Entities\TeamMember;
use Modules\Core\Entities\TeamMemberApp;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('admin');

        App::create([
            'slug'=>'t_a_1',
            'name'=>'testApp1',
            'description'=>'This is a test app.'
        ]);

        Team::create([
            'name'=>'testTeam',
            'user_id'=>1,
            'is_active'=>true
        ]);

        TeamMember::create([
           'user_id'=>1,
           'team_id'=>1,
            'role'=>1,
           'is_active'=>true
        ]);

        SubTeam::create([
            'name'=>'test_sub_team',
            'team_id'=>1,
            'user_id'=>1,
            'is_active'=>true,
        ]);

        SubTeamMember::create([
            'user_id'=>1,
            'sub_team_id'=>1,
            'role'=>1,
            'is_active'=>true
        ]);
    }
}
