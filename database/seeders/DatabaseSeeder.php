<?php

namespace Database\Seeders;

use App\Models\Batch;
use App\Models\Course;
use App\Models\FeeReceiptVoucher;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Voucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       Instructor::factory(50)->create();
       Batch::factory(30)->create();
       Course::factory(50)->create();
       Student::factory(50)->create();

        // FeeReceiptVoucher::factory(100)->create();

       $this->call([
           UserSeeder::class,
           AttachmentSeeder::class,
          LedgerSeeder::class
       ]);

    Voucher::factory(1000)->create();
    }
}
