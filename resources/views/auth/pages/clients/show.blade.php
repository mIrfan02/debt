<x-auth-layout pageTitle="Client Detail">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-front.card>
                    <h3 style="text-decoration: underline;">Client Info</h3>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Name:</strong> {{ $data->person }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Position:</strong> {{ $data->position ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Client Number:</strong> {{ $data->client_number ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Organization:</strong> {{ $data->organization ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Collector:</strong> {{ $data->collector ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Display As:</strong> {{ $data->display_as ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Email:</strong> {{ $data->email ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Phone:</strong> {{ $data->phone ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Address:</strong> {{ $data->address ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Cell:</strong> {{ $data->cell ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Fax:</strong> {{ $data->fax ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>City:</strong> {{ $data->city ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>State:</strong> {{ $data->state ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Zip:</strong> {{ $data->zip ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Country:</strong> {{ $data->country ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Remarks:</strong> {{ $data->remarks ?? 'N/A' }}</label>
                        </div>
                    </div>



                    <hr>

                    <h3 style="text-decoration: underline;">Creditor Details</h3>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor:</strong> {{ $data->creditor ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Number:</strong> {{ $data->creditor_number ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Organization:</strong> {{ $data->creditor_organization ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Collector:</strong> {{ $data->creditor_collector ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Display As:</strong> {{ $data->creditor_display_as ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Email:</strong> {{ $data->creditor_email ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Phone:</strong> {{ $data->creditor_phone ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Address:</strong> {{ $data->creditor_address ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Cell:</strong> {{ $data->creditor_cell ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Fax:</strong> {{ $data->creditor_fax ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor City:</strong> {{ $data->creditor_city ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor State:</strong> {{ $data->creditor_state ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Zip:</strong> {{ $data->creditor_zip ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Country:</strong> {{ $data->creditor_country ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for=""><strong>Creditor Remarks:</strong> {{ $data->creditor_remarks ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <hr>

                    <h3 style="text-decoration: underline;">Original Details</h3>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Amount:</strong> {{ $data->creditor_amount ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Open Date:</strong>
                                {{ $data->creditor_open_date ? Carbon\Carbon::parse($data->creditor_open_date)->format('F j, Y') : 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Creditor Line 2:</strong> {{ $data->creditor_line_2 ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Interest Amount:</strong> {{ $data->interest_amount ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Interest Date:</strong>
                                {{ $data->interest_date ? Carbon\Carbon::parse($data->interest_date)->format('F j, Y') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Account Number:</strong> {{ $data->account_no ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Suit Fee:</strong> {{ $data->suit_fee ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Date Stay Lifted:</strong>
                                {{ $data->date_stay_lifted ? Carbon\Carbon::parse($data->date_stay_lifted)->format('F j, Y') : 'N/A' }}</label>
                        </div>
                    </div>

                    <hr>

                    <h3 style="text-decoration: underline;">Credit Bureau Details</h3>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Original Open Date:</strong>
                                {{ $data->original_open_date ? Carbon\Carbon::parse($data->original_open_date)->format('F j, Y') : 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Delinquency Date:</strong>
                                {{ $data->delinquency_date ? Carbon\Carbon::parse($data->delinquency_date)->format('F j, Y') : 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Terms Duration:</strong> {{ $data->terms_duration ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Credit Limit:</strong> {{ $data->credit_limit ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Payment History:</strong> {{ $data->payment_history ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Experian Code:</strong> {{ $data->experian_code ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Original Amount:</strong> {{ $data->original_amount ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Amount Past Due:</strong> {{ $data->amount_past_due ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>TransUnion Code:</strong> {{ $data->transUnion_code ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Charge Off Amount:</strong> {{ $data->charge_off_amount ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Billing Day of Month:</strong> {{ $data->billing_day_of_month ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Equifax Code:</strong> {{ $data->equifax_code ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><strong>Monthly Payment:</strong> {{ $data->monthly_payment ?? 'N/A' }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for=""><strong>Residence Code:</strong> {{ $data->residence_code ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for=""><strong>Invoice Code:</strong> {{ $data->invoice_code ?? 'N/A' }}</label>
                        </div>
                    </div>


                </x-front.card>
            </div>
        </div>
    </div>
</x-auth-layout>
