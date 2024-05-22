<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'clients';

    protected $fillable = [
        'person', 'position', 'client_number', 'organization', 'collector',
        'display_as', 'email', 'phone', 'address', 'cell', 'fax',
        'city', 'state', 'zip', 'country', 'remarks',
        'creditor', 'creditor_number', 'creditor_organization', 'creditor_collector',
        'creditor_display_as', 'creditor_email', 'creditor_phone', 'creditor_address', 'creditor_cell', 'creditor_fax',
        'creditor_city', 'creditor_state', 'creditor_zip', 'creditor_country', 'creditor_remarks',
        'creditor_amount', 'creditor_open_date', 'creditor_line_2', 'interest_amount', 'interest_date',
        'account_no', 'suit_fee', 'date_stay_lifted',
        'original_open_date', 'delinquency_date', 'terms_duration', 'credit_limit', 'payment_history',
        'experian_code', 'original_amount', 'amount_past_due', 'transUnion_code', 'charge_off_amount',
        'billing_day_of_month', 'equifax_code', 'monthly_payment', 'residence_code', 'invoice_code',
    ];
}
