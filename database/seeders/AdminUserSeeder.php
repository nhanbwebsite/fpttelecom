<?php

// database/seeders/AdminUserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User; // hoặc đường dẫn tới model User của bạn

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Nếu đã có user với email này thì update, nếu chưa thì tạo mới
        $user = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Demo',
                'email_verified_at' => now(),
                'password' => Hash::make('P@ssw0rd!'), // mật khẩu: P@ssw0rd!
                'remember_token' => Str::random(10),
                // thêm trường role/is_admin nếu bảng users của bạn có
                // 'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Nếu bạn dùng spatie/laravel-permission v.v. và muốn gán role:
        // $user->assignRole('admin');
    }
}
