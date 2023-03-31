<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'customers';
// column sa table
protected $fillable = [
'Customers_FirstName', 'Customers_LastName', 'Customers_PhoneNum'
];
}