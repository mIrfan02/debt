<x-auth-layout pageTitle="Legal Detail">


    <x-front.card>

        <style>
            #legalTable {
                width: 100%;
                /* Set width to 100% to take the full width */
                margin: 20px auto;
                border: 1px solid #ccc;
                border-radius: 5px;
                overflow: hidden;
            }

            .legalrow {
                display: flex;
                flex-direction: column;
                border-bottom: 1px solid #ccc;
            }

            .cell {
                padding: 10px;
                border-right: 1px solid #ccc;
            }

            .legalheader {
                font-weight: bold;
                background-color: #ddd;
            }
        </style>
        <div id="legalTable">
            <div id="legalRow1" class="legalrow">
                <div class="cell legalheader">Plaintiff</div>
                <div class="cell">
                    @if (isset($data->plaintiff))
                        @foreach ($data->plaintiff as $plaintiffIndex => $plaintiffArray)
                            @foreach ($plaintiffArray as $index => $plaintiff)
                                {{ $plaintiffIndex + 1 - $index - 1 }}. {{ $plaintiff }}<br>
                            @endforeach
                        @endforeach
                    @endif
                </div>


            </div>
            <div id="legalRow2" class="legalrow">
                <div class="cell legalheader">Defendant </div>
                <div class="cell">
                    @if (isset($data->defendant))
                        @foreach ($data->defendant as $defendantIndex => $defendantArray)
                            @foreach ($defendantArray as $index => $defendant)
                                {{ $defendantIndex + 1 - $index - 1 }}. {{ $defendant }}<br>
                            @endforeach
                        @endforeach
                    @endif
                </div>
            </div>
            <div id="legalRow3" class="legalrow">
                <div class="cell legalheader">Bankruptcy</div>
                <div class="cell">
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for=""><strong>Chapter:</strong> {{ $data->chapter }}</label>
                        </div>
                        <div class="col-md-4">
                            <label for=""><strong>Case Number:</strong>
                                {{ $data->case_number ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-4">
                            <label for=""><strong>Location:</strong> {{ $data->location }}</label>
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <label for=""><strong>Closed Date:</strong>
                                {{ $data->closed_date ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-4 ">
                            <label for=""><strong>Converted Date:</strong> {{ $data->converted_date }}</label>
                        </div>
                        <div class="col-md-4">
                            <label for=""><strong>Date341:</strong>
                                {{ $data->date341 ?? 'N/A' }}</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for=""><strong>Re Affirmation Amount:</strong> {{ $data->re_affirmation_amount }}</label>
                        </div>
                        <div class="col-md-4">
                            <label for=""><strong>Re-Affirmation Date:</strong>
                                {{ $data->re_affirmation_date ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-4">
                            <label for=""><strong>Arrangment Amount:</strong>
                                {{ $data->arrangement_amount ?? 'N/A' }}</label>
                        </div>



                    </div>


                </div>
                <!-- Add more cells as needed -->
            </div>



            <div id="legalRow4" class="legalrow">
                <div class="cell legalheader">Probate</div>
                <div class="cell">
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for=""><strong>Probate Case Number:</strong> {{ $data->probate_case_number }}</label>
                        </div>
                        <div class="col-md-4">
                            <label for=""><strong>Court Name:</strong>
                                {{ $data->court_name ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-4">
                            <label for=""><strong>Date Filed:</strong> {{ $data->date_filed }}</label>
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <label for=""><strong>Death Date:</strong>
                                {{ $data->date_of_death ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-4 ">
                            <label for=""><strong>Country:</strong> {{ $data->county }}</label>
                        </div>
                        <div class="col-md-4">
                            <label for=""><strong>State:</strong>
                                {{ $data->state ?? 'N/A' }}</label>
                        </div>

                        <div class="col-md-3">
                            <label for=""><strong>Date Expires:</strong>
                                {{ $data->date_expires ?? 'N/A' }}</label>
                        </div>


                    </div>



                </div>

            </div>

            <div id="legalRow5" class="legalrow">
                <div class="cell legalheader">Remarks</div>
                <div class="cell">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label for=""><strong>Remarks:</strong> {{ $data->remarks }}</label>
                        </div>



                    </div>






                </div>

            </div>




        </div>




    </x-front.card>


</x-auth-layout>
