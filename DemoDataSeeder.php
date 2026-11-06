<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the demonstration data seeder utility.
     * Maps perfectly to the definitions inside data-model.md
     */
    public function run(): void
    {
        // 1. Fixed Read-Only Categories (Seed only, no maintenance allowed)
        $categories = [
            ['id' => Str::uuid(), 'name' => 'Science Fiction'],
            ['id' => Str::uuid(), 'name' => 'Fantasy'],
            ['id' => Str::uuid(), 'name' => 'History'],
            ['id' => Str::uuid(), 'name' => 'Biography'],
            ['id' => Str::uuid(), 'name' => 'Technology'],
        ];

        // 2. Demonstration Internal Users (Strictly matching defined internal roles)
        $users = [
            ['id' => Str::uuid(), 'username' => 'admin_operator', 'password_hash' => 'argon2_hash_placeholder', 'role' => 'admin'],
            ['id' => Str::uuid(), 'username' => 'librarian_operator', 'password_hash' => 'argon2_hash_placeholder', 'role' => 'librarian'],
        ];

        // 3. Initial Book Inventory (Ensuring total_copies >= 1 constraint)
        $books = [
            [
                'id' => Str::uuid(),
                'title' => 'The Clean Coder',
                'author' => 'Robert C. Martin',
                'isbn' => '9780137081073',
                'total_copies' => 5,
                'available_copies' => 5,
                'cover_key' => 'covers/clean_coder_opaque_key',
                'deleted_at' => null
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Design Patterns',
                'author' => 'Erich Gamma',
                'isbn' => '9780201633610',
                'total_copies' => 3,
                'available_copies' => 3,
                'cover_key' => null,
                'deleted_at' => null
            ]
        ];

        echo "SDD Tooling: Demo data seed profiles successfully prepared for the library schema.\n";
    }
}
