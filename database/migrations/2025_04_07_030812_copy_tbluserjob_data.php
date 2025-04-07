<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get data from source database
        $sourceData = DB::connection('mysql')
            ->table('ddsbe.tbluserjob')
            ->get();

        // Insert data into target database
        foreach ($sourceData as $row) {
            DB::table('tbluserjob')->insert([
                'jobid' => $row->jobid,
                'jobname' => $row->jobname,
                'created_at' => $row->created_at,
                'updated_at' => $row->updated_at
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Clear the data if needed to rollback
        DB::table('tbluserjob')->truncate();
    }
};
