<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllData extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'academic_year',
        'session',
        'alloted_category',
        'voucher_type',
        'voucher_no',
        'roll_no',
        'admno_uniqueId',
        'status',
        'fee_category',
        'faculty',
        'program',
        'department',
        'batch',
        'receipt_no',
        'fee_head',
        'due_amount',
        'paid_amount',
        'concession_amount',
        'scholarship_amount',
        'reverse_concession_amount',
        'write_off_amount',
        'adjusted_amount',
        'refund_amount',
        'fund_tranCfer_amount',
        'remarks',
    ];

    protected $table = "all_data";

}
