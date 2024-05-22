<x-auth-layout>
    <style>
        body {
            font-family: Arial;
        }

        /* Style the tab */
        * {
            margin: 0;
            padding: 0;
        }

        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 16px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            width: 100vw;
            border-top: none;
        }
    </style>
    {{-- @php
foreach ($logsplacement as $log) {
    // Check if $log->data is an array
    if (is_array($log->data)) {
        // Access the 'amount' key if it exists
        if (isset($log->data['amount'])) {
            // Use the value
            dd( $log->data['amount']);
        } else {
            // Handle the case where 'amount' key is not set
            echo 'Amount key not found in $log->data';
        }
    } else {
        // Handle the case where $log->data is not an array
        echo '$log->data is not an array';
    }
}
@endphp --}}




    <div class="card border-bottom-primary shadow h-100">
        <div class="card-header p-0">
            <div class="tab">
                <button class="tablinks active" onclick="openTab(event, 'summary')">Summary</button>
                <button class="tablinks" onclick="openTab(event, 'debtor')">Debtor</button>
                <button class="tablinks" onclick="openTab(event, 'client')">Client</button>
                <button class="tablinks" onclick="openTab(event, 'placement')">Placement</button>
                <button class="tablinks" onclick="openTab(event, 'judgment')">Judgment</button>
                <button class="tablinks" onclick="openTab(event, 'financials')">Financials</button>
                <button class="tablinks" onclick="openTab(event, 'ticklers')">Ticklers</button>
                <button class="tablinks" onclick="openTab(event, 'agreement')">Agreements</button>
                <button class="tablinks" onclick="openTab(event, 'notes')">Notes</button>
                <button class="tablinks" onclick="openTab(event, 'legal')">Legal</button>
                <button class="tablinks" onclick="openTab(event, 'documents')">Documents</button>
                <button class="tablinks" onclick="openTab(event, 'payment')">Payments</button>
                <button class="tablinks" onclick="openTab(event, 'addcost')">Add Cost</button>

            </div>
        </div>
        @php
            $subtotal = $data->calculateSumOfAmounts() + floatval(str_replace(',', '', $data->fixed_interest));

            $payments = \App\Models\Payment::where('claim_id', $data->id)->sum('amount');

            $dueAmount = $subtotal - $payments;
        @endphp


        <div class="card-body px-0">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="d-flex">
                <div id="summary" class="tabcontent" style="display: block;">
                    @include('auth.pages.claims.summary')
                </div>

                <div id="debtor" class="tabcontent">

                    @include('auth.pages.claims.debtor')

                </div>

                <div id="client" class="tabcontent">
                    @include('auth.pages.claims.client')

                </div>

                <div id="placement" class="tabcontent">

                    @include('auth.pages.claims.placement')
                </div>

                <div id="judgment" class="tabcontent">
                    @include('auth.pages.claims.judgment')

                </div>

                <div id="financials" class="tabcontent">
                    @include('auth.pages.claims.financial')

                </div>

                <div id="ticklers" class="tabcontent">

                    @include('auth.pages.claims.ticklers')
                </div>
                <div id="agreement" class="tabcontent">

                    @include('auth.pages.claims.aggrement')

                </div>

                <div id="notes" class="tabcontent">
                    @include('auth.pages.claims.note')

                </div>

                <div id="legal" class="tabcontent">

                    @include('auth.pages.claims.legal')
                </div>


                <div id="documents" class="tabcontent">
                    <h3> documents</h3>

                </div>


                <div id="payment" class="tabcontent">
                    @include('auth.pages.claims.payments')

                </div>

                <div id="addcost" class="tabcontent">

                    @include('auth.pages.claims.financial-cost')
                </div>


            </div>
        </div>
    </div>




    <script>
        function openTab(evt, tabName) {
            let i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }
    </script>
</x-auth-layout>
