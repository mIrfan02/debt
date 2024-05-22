<x-auth-layout pageTitle="Create Note">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <x-front.card>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('notes.index') }}">
                            <button type="button" class="btn btn-info mt-2">All Notes</button>
                        </a>
                    </div>

                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="debtorid" value="{{ $debtorid }}">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <label for="activity">Action :</label>
                        <select id="activity" name="action" class="form-control">
                            <!-- Claim Activities -->
                            <option value="Claim-Agreement">Claim-Agreement</option>
                            <option value="Claim-Archieved">Claim-Archieved</option>
                            <option value="Claim-Assigned">Claim-Assigned</option>
                            <option value="Claim-Audit">Claim-Audit</option>
                            <option value="Claim-Closed">Claim-Closed</option>
                            <option value="Claim-Converted">Claim-Converted</option>
                            <option value="Claim-Created">Claim-Created</option>
                            <option value="Claim-Deleted">Claim-Deleted</option>
                            <option value="Claim-Exported">Claim-Exported</option>
                            <option value="Claim-Final Payment Received">Claim-Final Payment Received</option>
                            <option value="Claim-Imported">Claim-Imported</option>
                            <option value="Claim-Interest Start Date">Claim-Interest Start Date</option>
                            <option value="Claim-Merged">Claim-Merged</option>
                            <option value="Claim-Modified">Claim-Modified</option>
                            <option value="Claim-Overpayment">Claim-Overpayment</option>
                            <option value="Claim-Restored">Claim-Restored</option>
                            <option value="Claim-Viewed">Claim-Viewed</option>
                            <option value="Claim-Not Modified">Claim-Not Modified</option>
                            <option value="Claim-Not Viewed">Claim-Not Viewed</option>
                            <option value="Judgment Expiry">Judgment Expiry</option>
                            <option value="Statute of Limitations">Statute of Limitations</option>
                            <option value="YGC Record 20">YGC Record 20</option>
                            <option value="10 Day Notice Sent">10 Day Notice Sent</option>
                            <option value="Abstract Issued">Abstract Issued</option>
                            <option value="Abstract Recorded">Abstract Recorded</option>
                            <option value="Answer Due">Answer Due</option>
                            <option value="Answer Filed">Answer Filed</option>
                            <option value="Arrest Warrant">Arrest Warrant</option>
                            <option value="Case Dismissed">Case Dismissed</option>
                            <option value="Complaint Filed">Complaint Filed</option>
                            <option value="Complaint Served">Complaint Served</option>
                            <option value="Courts- NO Activity">Courts- NO Activity</option>
                            <option value="Default Filed">Default Filed</option>
                            <option value="Discovery End Date">Discovery End Date</option>
                            <option value="Judgment Docketed">Judgment Docketed</option>
                            <option value="Judgment Request Sent">Judgment Request Sent</option>
                            <option value="Lien Date">Lien Date</option>
                            <option value="Lien Filed">Lien Filed</option>
                            <option value="Lien Renewal Date">Lien Renewal Date</option>
                            <option value="Lien Renewal Filed">Lien Renewal Filed</option>
                            <option value="Motion Filed">Motion Filed</option>
                            <option value="Property Exec Date">Property Exec Date</option>
                            <option value="Stipulation Date">Stipulation Date</option>
                            <option value="Summons Served">Summons Served</option>
                            <option value="Transcript">Transcript</option>
                            <option value="Trial Date">Trial Date</option>
                            <option value="Wage Execution">Wage Execution</option>
                            <option value="Writ Issued">Writ Issued</option>
                            <option value="Bank Subpoena">Bank Subpoena</option>
                            <option value="Deposition Notice">Deposition Notice</option>
                            <option value="Document Request">Document Request</option>
                            <option value="Information Subpoena">Information Subpoena</option>
                            <option value="Interrogatories">Interrogatories</option>
                            <option value="Claim-Change of Claim Status">Claim-Change of Claim Status</option>
                            <option value="Claim-Change of Collector">Claim-Change of Collector</option>
                            <option value="Claim-Change of Contingency Method">Claim-Change of Contingency Method</option>
                            <option value="Claim- Add a Note(action)">Claim- Add a Note(action)</option>
                            <option value="Claim-Add a Tickler">Claim-Add a Tickler</option>
                            <option value="Claim- Add a Transaction">Claim- Add a Transaction</option>
                            <option value="NSF (Non Sufficient Funds)">NSF (Non Sufficient Funds)</option>
                            <option value="Transaction- Last Cost">Transaction- Last Cost</option>
                            <option value="Transaction - Last Payment">Transaction - Last Payment</option>
                            <option value="Transaction - Last Transaction">Transaction - Last Transaction</option>
                            <option value="Transaction - None">Transaction - None</option>
                            <option value="Amounts from Client">Amounts from Client</option>
                            <option value="Note From Client">Note From Client</option>
                            <option value="Notes - Last Note">Notes - Last Note</option>
                            <option value="Notes - None">Notes - None</option>
                            <option value="(Not Assigned)">(Not Assigned)</option>
                            <option value="Claim-Change of Status">Claim-Change of Status</option>

                            <!-- Debtor Activities -->
                            <option value="Debtor-Archieved">Debtor-Archieved</option>
                            <option value="Debtor-Assigned">Debtor-Assigned</option>
                            <option value="Debtor-Closed">Debtor-Closed</option>
                            <option value="Debtor-Converted">Debtor-Converted</option>
                            <option value="Debtor- Created">Debtor- Created</option>
                            <option value="Debtor-Exported">Debtor-Exported</option>
                            <option value="Debtor- Imported">Debtor- Imported</option>
                            <option value="Debtor-Merged">Debtor-Merged</option>
                            <option value="Debtor - Modified">Debtor - Modified</option>
                            <option value="Debtor -  Restored">Debtor -  Restored</option>
                            <option value="Debtor - Viewed">Debtor - Viewed</option>
                            <option value="Debtors- Not Modified">Debtors- Not Modified</option>
                            <option value="Debtors- NOT Viewed">Debtors- NOT Viewed</option>

                            <!-- Client Activities -->
                            <option value="Client-Archieved">Client-Archieved</option>
                            <option value="Client-Assigned">Client-Assigned</option>
                            <option value="Client-Closed">Client-Closed</option>
                            <option value="Client-Converted">Client-Converted</option>
                            <option value="Client- Created">Client- Created</option>
                            <option value="Client-Exported">Client-Exported</option>
                            <option value="Client- Imported">Client- Imported</option>
                            <option value="Client-Merged">Client-Merged</option>
                            <option value="Client - Modified">Client - Modified</option>
                            <option value="Client -  Restored">Client -  Restored</option>
                            <option value="Client - Viewed">Client - Viewed</option>
                            <option value="Clients- Not Modified">Clients- Not Modified</option>
                            <option value="Clients- NOT Viewed">Clients- NOT Viewed</option>

                            <!-- Creditor Activities -->
                            <option value="Creditor-Archieved">Creditor-Archieved</option>
                            <option value="Creditor-Assigned">Creditor-Assigned</option>
                            <option value="Creditor-Closed">Creditor-Closed</option>
                            <option value="Creditor-Converted">Creditor-Converted</option>
                            <option value="Creditor- Created">Creditor- Created</option>
                            <option value="Creditor-Exported">Creditor-Exported</option>
                            <option value="Creditor- Imported">Creditor- Imported</option>
                            <option value="Creditor-Merged">Creditor-Merged</option>
                            <option value="Creditor - Modified">Creditor - Modified</option>
                            <option value="Creditor -  Restored">Creditor -  Restored</option>
                            <option value="Creditor - Viewed">Creditor - Viewed</option>
                            <option value="Creditors- Not Modified">Creditors- Not Modified</option>
                            <option value="Creditors- NOT Viewed">Creditors- NOT Viewed</option>

                            <!-- Contact Activities -->
                            <option value="Contact-Archieved">Contact-Archieved</option>
                            <option value="Contact-Assigned">Contact-Assigned</option>
                            <option value="Contact-Closed">Contact-Closed</option>
                            <option value="Contact-Converted">Contact-Converted</option>
                            <option value="Contact- Created">Contact- Created</option>
                            <option value="Contact-Exported">Contact-Exported</option>
                            <option value="Contact- Imported">Contact- Imported</option>
                            <option value="Contact-Merged">Contact-Merged</option>
                            <option value="Contact - Modified">Contact - Modified</option>
                            <option value="Contact -  Restored">Contact -  Restored</option>
                            <option value="Contact - Viewed">Contact - Viewed</option>
                            <option value="Contacts- Not Modified">Contacts- Not Modified</option>
                            <option value="Contacts- NOT Viewed">Contacts- NOT Viewed</option>

                            <!-- Other Activities -->
                            <option value="Accurint/Credit Reports">Accurint/Credit Reports</option>
                            <option value="Affidavit of Not Srvd">Affidavit of Not Srvd</option>
                            <option value="Affidavit of Publication">Affidavit of Publication</option>
                            <option value="Affidavit of Service">Affidavit of Service</option>
                            <option value="ANSWER">ANSWER</option>
                            <option value="ATTORNEY ASSIGNED">ATTORNEY ASSIGNED</option>
                            <option value="Attorney Called">Attorney Called</option>
                            <option value="Audit">Audit</option>
                            <option value="Bankruptcy Search">Bankruptcy Search</option>
                            <option value="Billing - Flat Fee">Billing - Flat Fee</option>
                            <option value="Billing - Hourly">Billing - Hourly</option>
                            <option value="Billing / Cost">Billing / Cost</option>
                            <option value="Billing-Contg">Billing-Contg</option>
                            <option value="Billing-Misc">Billing-Misc</option>
                            <option value="Called">Called</option>
                            <option value="Call to Attorney">Call to Attorney</option>
                            <option value="Called Client">Called Client</option>
                            <option value="Called Court">Called Court</option>
                            <option value="Called Debtor">Called Debtor</option>
                            <option value="CACNELLED / RESCHEDULED HEARING">CACNELLED / RESCHEDULED HEARING</option>
                            <option value="Case Closed">Case Closed</option>
                            <option value="Chpt 11 Bankruptcy Notice">Chpt 11 Bankruptcy Notice</option>
                            <option value="Chpt 13 Bankruptcy Notice">Chpt 13 Bankruptcy Notice</option>
                            <option value="Chpt 7 Bankruptcy Notice">Chpt 7 Bankruptcy Notice</option>
                            <option value="Client Called">Client Called</option>
                            <option value="Client Contact/Info">Client Contact/Info</option>
                            <option value="COUNTERCLAIM">COUNTERCLAIM</option>
                            <option value="Court Reporter Scheduled">Court Reporter Scheduled</option>
                            <option value="Credit Card Authorization Received">Credit Card Authorization Received</option>
                            <option value="Credit Card Declined">Credit Card Declined</option>
                            <option value="Debtor Called">Debtor Called</option>
                            <option value="Demand ltr-consumer">Demand ltr-consumer</option>
                            <option value="Demand ltr sent - biz">Demand ltr sent - biz</option>
                            <option value="Deposition">Deposition</option>
                            <option value="Direct Pay Invoice">Direct Pay Invoice</option>
                            <option value="Dismissal W/O Prejudice">Dismissal W/O Prejudice</option>
                            <option value="Dismissal With Prejudice">Dismissal With Prejudice</option>
                            <option value="Drafted Document(s)">Drafted Document(s)</option>
                            <option value="Earnings Disclosure Worksheet received">Earnings Disclosure Worksheet received</option>
                            <option value="E-Filed">E-Filed</option>
                            <option value="EJ Letter to Court">EJ Letter to Court</option>
                            <option value="Email">Email</option>
                            <option value="Email from attorney">Email from attorney</option>
                            <option value="Email from Client">Email from Client</option>
                            <option value="Email from Court Reporter">Email from Court Reporter</option>
                            <option value="Email from debtor">Email from debtor</option>
                            <option value="Email from Metro Legal">Email from Metro Legal</option>
                            <option value="Email to attorney">Email to attorney</option>
                            <option value="Email to client">Email to client</option>
                            <option value="Email to Court Reporter">Email to Court Reporter</option>
                            <option value="Email to Debtor">Email to Debtor</option>
                            <option value="Email to Metro Legal">Email to Metro Legal</option>

                            <!-- Additional Activities -->
                            <option value="Exemption returned">Exemption returned</option>
                            <option value="Fax Sent/Received">Fax Sent/Received</option>
                            <option value="Fax to employer">Fax to employer</option>
                            <option value="Fee Arrangment">Fee Arrangement</option>
                            <option value="Filed with Court">Filed with Court</option>
                            <option value="Financial Disclosure Form return">Financial Disclosure Form return</option>
                            <option value="Forward payment to Client">Forward payment to Client</option>
                            <option value="Garnishment documents returned">Garnishment documents returned</option>
                            <option value="Garnishment sent to Employer">Garnishment sent to Employer</option>
                            <option value="Hearing / Trial">Hearing / Trial</option>
                            <option value="Informational Statement sent">Informational Statement sent</option>
                            <option value="Judge Assigned">Judge Assigned</option>
                            <option value="Judgment Entered with Writ">Judgment Entered with Writ</option>
                            <option value="Letter">Letter</option>
                            <option value="Letter from Debtor">Letter from Debtor</option>
                            <option value="Letter to Attorney">Letter to Attorney</option>
                            <option value="Letter to Client">Letter to Client</option>
                            <option value="Letter to Debtor">Letter to Debtor</option>
                            <option value="Levy documents returned">Levy documents returned</option>
                            <option value="Levy sent to bank">Levy sent to bank</option>
                            <option value="Mail returned">Mail returned</option>
                            <option value="Mediation/Arbitration Date">Mediation/Arbitration Date</option>
                            <option value="Meeting/Attended">Meeting/Attended</option>
                            <option value="Military Search">Military Search</option>
                            <option value="Motor Vehicle">Motor Vehicle</option>
                            <option value="New Address">New Address</option>
                            <option value="No Contact with Debtor">No Contact with Debtor</option>
                            <option value="No Physical File">No Physical File</option>
                            <option value="Note">Note</option>
                            <option value="OFD Returned">OFD Returned</option>
                            <option value="OFD sent to debtor">OFD sent to debtor</option>
                            <option value="OFFSET NOTICE">OFFSET NOTICE</option>
                            <option value="Opened Court File">Opened Court File</option>
                            <option value="Order to show cause">Order to show cause</option>
                            <option value="PO Box Address Request">PO Box Address Request</option>
                            <option value="Post Judgment Discovery">Post Judgment Discovery</option>
                            <option value="Power of Attorney">Power of Attorney</option>
                            <option value="Pregarn sent">Pregarn sent</option>
                            <option value="Received Documents">Received Documents</option>
                            <option value="Received Signed Stipulation & Confession">Received Signed Stipulation & Confession</option>
                            <option value="Refund">Refund</option>
                            <option value="Release">Release</option>
                            <option value="Reminder Letter">Reminder Letter</option>
                            <option value="Remitted">Remitted</option>
                            <option value="Renewed Judgment">Renewed Judgment</option>
                            <option value="Returned Original Writ">Returned Original Writ</option>
                            <option value="Reviewed File">Reviewed File</option>
                            <option value="S & C to process server">S & C to process server</option>
                            <option value="Satisfaction of Judgment">Satisfaction of Judgment</option>
                            <option value="SCANNED - NO PHYSICAL FILE">SCANNED - NO PHYSICAL FILE</option>
                            <option value="Second Request">Second Request</option>
                            <option value="Secretary of state search">Secretary of state search</option>
                            <option value="Settlement">Settlement</option>
                            <option value="Stipulation and Confession of Judgment">Stipulation and Confession of Judgment</option>
                            <option value="STOP GARNISHMENT">STOP GARNISHMENT</option>
                            <option value="Subpoena sent to process server">Subpoena sent to process server</option>
                            <option value="Substitution of Counsel">Substitution of Counsel</option>
                            <option value="Summary Judgment Docs">Summary Judgment Docs</option>
                            <option value="Suspended/Inactive">Suspended/Inactive</option>
                            <option value="TERMINATED">TERMINATED</option>
                            <option value="Transcribe Judgment">Transcribe Judgment</option>
                            <option value="Vacate Judgment documents to Court">Vacate Judgment documents to Court</option>
                            <option value="Wage Assignment">Wage Assignment</option>
                            <option value="Withdrawal of Counsel">Withdrawal of Counsel</option>
                            <option value="Write">Write</option>

                        </select>



                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="note" name="note" rows="4" placeholder="Enter your note"></textarea>
                            @error('note')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="note_by">Note By:</label>
                            <select class="form-control" id="note_by" name="note_by">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="note_date">Note Date:</label>
                            <input type="date" class="form-control" id="note_date" name="note_date">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="reviewed" value="0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reviewed" name="reviewed" value="1">
                            <label class="form-check-label" for="reviewed">
                                Reviewed
                            </label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="review_by">Review by:</label>
                            <select class="form-control" id="review_by" name="review_by">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="review_date">Review Date:</label>
                            <input type="date" class="form-control" id="review_date" name="review_date">
                        </div>
                    </div>



                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </x-front.card>
            </div>
        </div>
    </div>
</x-auth-layout>
