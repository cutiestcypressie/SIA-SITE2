<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // Make sure this matches your actual table name
    protected $primaryKey = 'userid'; // Important if your PK is not "id"
    public $incrementing = true; // Set to false if userid is NOT auto-incrementing
    protected $keyType = 'int'; // Use 'string' if your userid is not numeric
    public $timestamps = false;  // Add this line to disable timestamps

    protected $fillable = [
        'username',
        'password',
        'gender',
        'jobid'
    ];

    // Optional: for route model binding to use 'userid' instead of default 'id'
    public function getRouteKeyName()
    {
        return 'userid';
    }
}
