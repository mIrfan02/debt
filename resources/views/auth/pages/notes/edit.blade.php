<x-auth-layout pageTitle="Update Note details">

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-front.card>
                    <form method="POST" action="{{ route('notes.update', $data->id) }}" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title" class="form-label">Title:</label>
                            <x-front.input-field type="text" name="title" id="title" place="Enter note's title"
                                val="{{ $data->title }}" required="true">
                                Full Name:
                            </x-front.input-field>
                        </div>

                        <label for="activity">Action :</label>
                        <select id="activity" name="action" class="form-control">
                            <!-- Claim Activities -->
                            <option value="Claim-Agreement" @if ($data->action == 'Claim-Agreement') selected @endif>
                                Claim-Agreement</option>
                            <option value="Claim-Archieved" @if ($data->action == 'Claim-Archieved') selected @endif>
                                Claim-Archieved</option>
                            <option value="Claim-Assigned" @if ($data->action == 'Claim-Assigned') selected @endif>
                                Claim-Assigned</option>
                            <option value="Claim-Audit" @if ($data->action == 'Claim-Audit') selected @endif>Claim-Audit
                            </option>
                            <option value="Claim-Closed" @if ($data->action == 'Claim-Closed') selected @endif>Claim-Closed
                            </option>
                            <option value="Claim-Converted" @if ($data->action == 'Claim-Converted') selected @endif>
                                Claim-Converted</option>
                            <option value="Claim-Created" @if ($data->action == 'Claim-Created') selected @endif>
                                Claim-Created</option>
                            <option value="Claim-Deleted" @if ($data->action == 'Claim-Deleted') selected @endif>
                                Claim-Deleted</option>
                            <option value="Claim-Exported" @if ($data->action == 'Claim-Exported') selected @endif>
                                Claim-Exported</option>
                            <option value="Claim-Final Payment Received"
                                @if ($data->action == 'Claim-Final Payment Received') selected @endif>Claim-Final Payment Received</option>
                            <option value="Claim-Imported" @if ($data->action == 'Claim-Imported') selected @endif>
                                Claim-Imported</option>
                            <option value="Claim-Interest Start Date"
                                @if ($data->action == 'Claim-Interest Start Date') selected @endif>Claim-Interest Start Date</option>
                            <option value="Claim-Merged" @if ($data->action == 'Claim-Merged') selected @endif>
                                Claim-Merged</option>
                            <option value="Claim-Modified" @if ($data->action == 'Claim-Modified') selected @endif>
                                Claim-Modified</option>
                            <option value="Claim-Overpayment" @if ($data->action == 'Claim-Overpayment') selected @endif>
                                Claim-Overpayment</option>
                            <option value="Claim-Restored" @if ($data->action == 'Claim-Restored') selected @endif>
                                Claim-Restored</option>
                            <option value="Claim-Viewed" @if ($data->action == 'Claim-Viewed') selected @endif>
                                Claim-Viewed</option>
                            <option value="Claim-Not Modified" @if ($data->action == 'Claim-Not Modified') selected @endif>
                                Claim-Not Modified</option>
                            <option value="Claim-Not Viewed" @if ($data->action == 'Claim-Not Viewed') selected @endif>
                                Claim-Not Viewed</option>
                            <option value="Judgment Expiry" @if ($data->action == 'Judgment Expiry') selected @endif>Judgment
                                Expiry</option>
                            <option value="Statute of Limitations" @if ($data->action == 'Statute of Limitations') selected @endif>
                                Statute of Limitations</option>
                            <option value="YGC Record 20" @if ($data->action == 'YGC Record 20') selected @endif>YGC Record
                                20</option>

                                <option value="10 Day Notice Sent" @if($data->action == '10 Day Notice Sent') selected @endif>10 Day Notice Sent</option>
                                <option value="Abstract Issued" @if($data->action == 'Abstract Issued') selected @endif>Abstract Issued</option>
                                <option value="Abstract Recorded" @if($data->action == 'Abstract Recorded') selected @endif>Abstract Recorded</option>
                                <option value="Answer Due" @if($data->action == 'Answer Due') selected @endif>Answer Due</option>
                                <option value="Answer Filed" @if($data->action == 'Answer Filed') selected @endif>Answer Filed</option>
                                <option value="Arrest Warrant" @if($data->action == 'Arrest Warrant') selected @endif>Arrest Warrant</option>
                                <option value="Case Dismissed" @if($data->action == 'Case Dismissed') selected @endif>Case Dismissed</option>
                                <option value="Complaint Filed" @if($data->action == 'Complaint Filed') selected @endif>Complaint Filed</option>
                                <option value="Complaint Served" @if($data->action == 'Complaint Served') selected @endif>Complaint Served</option>
                                <option value="Courts- NO Activity" @if($data->action == 'Courts- NO Activity') selected @endif>Courts- NO Activity</option>
                                <option value="Default Filed" @if($data->action == 'Default Filed') selected @endif>Default Filed</option>
                                <option value="Discovery End Date" @if($data->action == 'Discovery End Date') selected @endif>Discovery End Date</option>
                                <option value="Judgment Docketed" @if($data->action == 'Judgment Docketed') selected @endif>Judgment Docketed</option>
                                <option value="Judgment Request Sent" @if($data->action == 'Judgment Request Sent') selected @endif>Judgment Request Sent</option>
                                <option value="Lien Date" @if($data->action == 'Lien Date') selected @endif>Lien Date</option>
                                <option value="Lien Filed" @if($data->action == 'Lien Filed') selected @endif>Lien Filed</option>
                                <option value="Lien Renewal Date" @if($data->action == 'Lien Renewal Date') selected @endif>Lien Renewal Date</option>
                                <option value="Lien Renewal Filed" @if($data->action == 'Lien Renewal Filed') selected @endif>Lien Renewal Filed</option>
                                <option value="Motion Filed" @if($data->action == 'Motion Filed') selected @endif>Motion Filed</option>
                                <option value="Property Exec Date" @if($data->action == 'Property Exec Date') selected @endif>Property Exec Date</option>
                                <option value="Stipulation Date" @if($data->action == 'Stipulation Date') selected @endif>Stipulation Date</option>
                                <option value="Summons Served" @if($data->action == 'Summons Served') selected @endif>Summons Served</option>
                                <option value="Transcript" @if($data->action == 'Transcript') selected @endif>Transcript</option>
                                <option value="Trial Date" @if($data->action == 'Trial Date') selected @endif>Trial Date</option>
                                <option value="Wage Execution" @if($data->action == 'Wage Execution') selected @endif>Wage Execution</option>
                                <option value="Writ Issued" @if($data->action == 'Writ Issued') selected @endif>Writ Issued</option>
                                <option value="Bank Subpoena" @if($data->action == 'Bank Subpoena') selected @endif>Bank Subpoena</option>
                                <option value="Deposition Notice" @if($data->action == 'Deposition Notice') selected @endif>Deposition Notice</option>
                                <option value="Document Request" @if($data->action == 'Document Request') selected @endif>Document Request</option>
                                <option value="Information Subpoena" @if($data->action == 'Information Subpoena') selected @endif>Information Subpoena</option>
                                <option value="Interrogatories" @if($data->action == 'Interrogatories') selected @endif>Interrogatories</option>
                                <option value="Claim-Change of Claim Status" @if($data->action == 'Claim-Change of Claim Status') selected @endif>Claim-Change of Claim Status</option>
                                <option value="Claim-Change of Collector" @if($data->action == 'Claim-Change of Collector') selected @endif>Claim-Change of Collector</option>
                                <option value="Claim-Change of Contingency Method" @if($data->action == 'Claim-Change of Contingency Method') selected @endif>Claim-Change of Contingency Method</option>
                                <option value="Claim- Add a Note(action)" @if($data->action == 'Claim- Add a Note(action)') selected @endif>Claim- Add a Note(action)</option>
                                <option value="Claim-Add a Tickler" @if($data->action == 'Claim-Add a Tickler') selected @endif>Claim-Add a Tickler</option>
                                <option value="Claim- Add a Transaction" @if($data->action == 'Claim- Add a Transaction') selected @endif>Claim- Add a Transaction</option>
                                <option value="NSF (Non Sufficient Funds)" @if($data->action == 'NSF (Non Sufficient Funds)') selected @endif>NSF (Non Sufficient Funds)</option>
                                <option value="Transaction- Last Cost" @if($data->action == 'Transaction- Last Cost') selected @endif>Transaction- Last Cost</option>
                                <option value="Transaction - Last Payment" @if($data->action == 'Transaction - Last Payment') selected @endif>Transaction - Last Payment</option>
                                <option value="Transaction - Last Transaction" @if($data->action == 'Transaction - Last Transaction') selected @endif>Transaction - Last Transaction</option>
                                <option value="Transaction - None" @if($data->action == 'Transaction - None') selected @endif>Transaction - None</option>
                                <option value="Amounts from Client" @if($data->action == 'Amounts from Client') selected @endif>Amounts from Client</option>
                                <option value="Note From Client" @if($data->action == 'Note From Client') selected @endif>Note From Client</option>
                                <option value="Notes - Last Note" @if($data->action == 'Notes - Last Note') selected @endif>Notes - Last Note</option>
                                <option value="Notes - None" @if($data->action == 'Notes - None') selected @endif>Notes - None</option>
                                <option value="(Not Assigned)" @if($data->action == '(Not Assigned)') selected @endif>(Not Assigned)</option>
                                <option value="Claim-Change of Status" @if($data->action == 'Claim-Change of Status') selected @endif>Claim-Change of Status</option>

                            <!-- Debtor Activities -->

                                <option value="Debtor-Archieved" @if($data->action == 'Debtor-Archieved') selected @endif>Debtor-Archieved</option>
                                <option value="Debtor-Assigned" @if($data->action == 'Debtor-Assigned') selected @endif>Debtor-Assigned</option>
                                <option value="Debtor-Closed" @if($data->action == 'Debtor-Closed') selected @endif>Debtor-Closed</option>
                                <option value="Debtor-Converted" @if($data->action == 'Debtor-Converted') selected @endif>Debtor-Converted</option>
                                <option value="Debtor- Created" @if($data->action == 'Debtor- Created') selected @endif>Debtor- Created</option>
                                <option value="Debtor-Exported" @if($data->action == 'Debtor-Exported') selected @endif>Debtor-Exported</option>
                                <option value="Debtor- Imported" @if($data->action == 'Debtor- Imported') selected @endif>Debtor- Imported</option>
                                <option value="Debtor-Merged" @if($data->action == 'Debtor-Merged') selected @endif>Debtor-Merged</option>
                                <option value="Debtor - Modified" @if($data->action == 'Debtor - Modified') selected @endif>Debtor - Modified</option>
                                <option value="Debtor -  Restored" @if($data->action == 'Debtor -  Restored') selected @endif>Debtor -  Restored</option>
                                <option value="Debtor - Viewed" @if($data->action == 'Debtor - Viewed') selected @endif>Debtor - Viewed</option>
                                <option value="Debtors- Not Modified" @if($data->action == 'Debtors- Not Modified') selected @endif>Debtors- Not Modified</option>
                                <option value="Debtors- NOT Viewed" @if($data->action == 'Debtors- NOT Viewed') selected @endif>Debtors- NOT Viewed</option>


                            <!-- Client Activities -->
                            <option value="Client-Archieved" @if($data->action == 'Client-Archieved') selected @endif>Client-Archieved</option>
                            <option value="Client-Assigned" @if($data->action == 'Client-Assigned') selected @endif>Client-Assigned</option>
                            <option value="Client-Closed" @if($data->action == 'Client-Closed') selected @endif>Client-Closed</option>
                            <option value="Client-Converted" @if($data->action == 'Client-Converted') selected @endif>Client-Converted</option>
                            <option value="Client- Created" @if($data->action == 'Client- Created') selected @endif>Client- Created</option>
                            <option value="Client-Exported" @if($data->action == 'Client-Exported') selected @endif>Client-Exported</option>
                            <option value="Client- Imported" @if($data->action == 'Client- Imported') selected @endif>Client- Imported</option>
                            <option value="Client-Merged" @if($data->action == 'Client-Merged') selected @endif>Client-Merged</option>
                            <option value="Client - Modified" @if($data->action == 'Client - Modified') selected @endif>Client - Modified</option>
                            <option value="Client -  Restored" @if($data->action == 'Client -  Restored') selected @endif>Client -  Restored</option>
                            <option value="Client - Viewed" @if($data->action == 'Client - Viewed') selected @endif>Client - Viewed</option>
                            <option value="Clients- Not Modified" @if($data->action == 'Clients- Not Modified') selected @endif>Clients- Not Modified</option>
                            <option value="Clients- NOT Viewed" @if($data->action == 'Clients- NOT Viewed') selected @endif>Clients- NOT Viewed</option>


                            <!-- Creditor Activities -->
                            <!-- Add similar checks for other options -->
                            <option value="Creditor-Archieved" @if($data->action == 'Creditor-Archieved') selected @endif>Creditor-Archieved</option>
                            <option value="Creditor-Assigned" @if($data->action == 'Creditor-Assigned') selected @endif>Creditor-Assigned</option>
                            <option value="Creditor-Closed" @if($data->action == 'Creditor-Closed') selected @endif>Creditor-Closed</option>
                            <option value="Creditor-Converted" @if($data->action == 'Creditor-Converted') selected @endif>Creditor-Converted</option>
                            <option value="Creditor- Created" @if($data->action == 'Creditor- Created') selected @endif>Creditor- Created</option>
                            <option value="Creditor-Exported" @if($data->action == 'Creditor-Exported') selected @endif>Creditor-Exported</option>
                            <option value="Creditor- Imported" @if($data->action == 'Creditor- Imported') selected @endif>Creditor- Imported</option>
                            <option value="Creditor-Merged" @if($data->action == 'Creditor-Merged') selected @endif>Creditor-Merged</option>
                            <option value="Creditor - Modified" @if($data->action == 'Creditor - Modified') selected @endif>Creditor - Modified</option>
                            <option value="Creditor -  Restored" @if($data->action == 'Creditor -  Restored') selected @endif>Creditor -  Restored</option>
                            <option value="Creditor - Viewed" @if($data->action == 'Creditor - Viewed') selected @endif>Creditor - Viewed</option>
                            <option value="Creditors- Not Modified" @if($data->action == 'Creditors- Not Modified') selected @endif>Creditors- Not Modified</option>
                            <option value="Creditors- NOT Viewed" @if($data->action == 'Creditors- NOT Viewed') selected @endif>Creditors- NOT Viewed</option>

                            <!-- Contact Activities -->
                          <!-- Add similar checks for other options -->
                            <option value="Contact-Archieved" @if($data->action == 'Contact-Archieved') selected @endif>Contact-Archieved</option>
                            <option value="Contact-Assigned" @if($data->action == 'Contact-Assigned') selected @endif>Contact-Assigned</option>
                            <option value="Contact-Closed" @if($data->action == 'Contact-Closed') selected @endif>Contact-Closed</option>
                            <option value="Contact-Converted" @if($data->action == 'Contact-Converted') selected @endif>Contact-Converted</option>
                            <option value="Contact- Created" @if($data->action == 'Contact- Created') selected @endif>Contact- Created</option>
                            <option value="Contact-Exported" @if($data->action == 'Contact-Exported') selected @endif>Contact-Exported</option>
                            <option value="Contact- Imported" @if($data->action == 'Contact- Imported') selected @endif>Contact- Imported</option>
                            <option value="Contact-Merged" @if($data->action == 'Contact-Merged') selected @endif>Contact-Merged</option>
                            <option value="Contact - Modified" @if($data->action == 'Contact - Modified') selected @endif>Contact - Modified</option>
                            <option value="Contact -  Restored" @if($data->action == 'Contact -  Restored') selected @endif>Contact -  Restored</option>
                            <option value="Contact - Viewed" @if($data->action == 'Contact - Viewed') selected @endif>Contact - Viewed</option>
                            <option value="Contacts- Not Modified" @if($data->action == 'Contacts- Not Modified') selected @endif>Contacts- Not Modified</option>
                            <option value="Contacts- NOT Viewed" @if($data->action == 'Contacts- NOT Viewed') selected @endif>Contacts- NOT Viewed</option>


                            <!-- Other Activities -->
                        <option value="Accurint/Credit Reports" @if($data->action == 'Accurint/Credit Reports') selected @endif>Accurint/Credit Reports</option>
                        <option value="Affidavit of Not Srvd" @if($data->action == 'Affidavit of Not Srvd') selected @endif>Affidavit of Not Srvd</option>
                        <option value="Affidavit of Publication" @if($data->action == 'Affidavit of Publication') selected @endif>Affidavit of Publication</option>
                        <option value="Affidavit of Service" @if($data->action == 'Affidavit of Service') selected @endif>Affidavit of Service</option>
                        <option value="ANSWER" @if($data->action == 'ANSWER') selected @endif>ANSWER</option>
                        <option value="ATTORNEY ASSIGNED" @if($data->action == 'ATTORNEY ASSIGNED') selected @endif>ATTORNEY ASSIGNED</option>
                        <option value="Attorney Called" @if($data->action == 'Attorney Called') selected @endif>Attorney Called</option>
                        <option value="Audit" @if($data->action == 'Audit') selected @endif>Audit</option>
                        <option value="Bankruptcy Search" @if($data->action == 'Bankruptcy Search') selected @endif>Bankruptcy Search</option>
                        <option value="Billing - Flat Fee" @if($data->action == 'Billing - Flat Fee') selected @endif>Billing - Flat Fee</option>
                        <option value="Billing - Hourly" @if($data->action == 'Billing - Hourly') selected @endif>Billing - Hourly</option>
                        <option value="Billing / Cost" @if($data->action == 'Billing / Cost') selected @endif>Billing / Cost</option>
                        <option value="Billing-Contg" @if($data->action == 'Billing-Contg') selected @endif>Billing-Contg</option>
                        <option value="Billing-Misc" @if($data->action == 'Billing-Misc') selected @endif>Billing-Misc</option>
                        <option value="Called" @if($data->action == 'Called') selected @endif>Called</option>
                        <option value="Call to Attorney" @if($data->action == 'Call to Attorney') selected @endif>Call to Attorney</option>
                        <option value="Called Client" @if($data->action == 'Called Client') selected @endif>Called Client</option>
                        <option value="Called Court" @if($data->action == 'Called Court') selected @endif>Called Court</option>
                        <option value="Called Debtor" @if($data->action == 'Called Debtor') selected @endif>Called Debtor</option>
                        <option value="CACNELLED / RESCHEDULED HEARING" @if($data->action == 'CACNELLED / RESCHEDULED HEARING') selected @endif>CACNELLED / RESCHEDULED HEARING</option>
                        <option value="Case Closed" @if($data->action == 'Case Closed') selected @endif>Case Closed</option>
                        <option value="Chpt 11 Bankruptcy Notice" @if($data->action == 'Chpt 11 Bankruptcy Notice') selected @endif>Chpt 11 Bankruptcy Notice</option>
                        <option value="Chpt 13 Bankruptcy Notice" @if($data->action == 'Chpt 13 Bankruptcy Notice') selected @endif>Chpt 13 Bankruptcy Notice</option>
                        <option value="Chpt 7 Bankruptcy Notice" @if($data->action == 'Chpt 7 Bankruptcy Notice') selected @endif>Chpt 7 Bankruptcy Notice</option>
                        <option value="Client Called" @if($data->action == 'Client Called') selected @endif>Client Called</option>
                        <option value="Client Contact/Info" @if($data->action == 'Client Contact/Info') selected @endif>Client Contact/Info</option>
                        <option value="COUNTERCLAIM" @if($data->action == 'COUNTERCLAIM') selected @endif>COUNTERCLAIM</option>
                        <option value="Court Reporter Scheduled" @if($data->action == 'Court Reporter Scheduled') selected @endif>Court Reporter Scheduled</option>
                        <option value="Credit Card Authorization Received" @if($data->action == 'Credit Card Authorization Received') selected @endif>Credit Card Authorization Received</option>
                        <option value="Credit Card Declined" @if($data->action == 'Credit Card Declined') selected @endif>Credit Card Declined</option>
                        <option value="Debtor Called" @if($data->action == 'Debtor Called') selected @endif>Debtor Called</option>
                        <option value="Demand ltr-consumer" @if($data->action == 'Demand ltr-consumer') selected @endif>Demand ltr-consumer</option>
                        <option value="Demand ltr sent - biz" @if($data->action == 'Demand ltr sent - biz') selected @endif>Demand ltr sent - biz</option>
                        <option value="Deposition" @if($data->action == 'Deposition') selected @endif>Deposition</option>
                        <option value="Direct Pay Invoice" @if($data->action == 'Direct Pay Invoice') selected @endif>Direct Pay Invoice</option>
                        <option value="Dismissal W/O Prejudice" @if($data->action == 'Dismissal W/O Prejudice') selected @endif>Dismissal W/O Prejudice</option>
                        <option value="Dismissal With Prejudice" @if($data->action == 'Dismissal With Prejudice') selected @endif>Dismissal With Prejudice</option>
                        <option value="Drafted Document(s)" @if($data->action == 'Drafted Document(s)') selected @endif>Drafted Document(s)</option>
                        <option value="Earnings Disclosure Worksheet received" @if($data->action == 'Earnings Disclosure Worksheet received') selected @endif>Earnings Disclosure Worksheet received</option>
                        <option value="E-Filed" @if($data->action == 'E-Filed') selected @endif>E-Filed</option>
                        <option value="EJ Letter to Court" @if($data->action == 'EJ Letter to Court') selected @endif>EJ Letter to Court</option>
                        <option value="Email" @if($data->action == 'Email') selected @endif>Email</option>
                        <option value="Email from attorney" @if($data->action == 'Email from attorney') selected @endif>Email from attorney</option>
                        <option value="Email from Client" @if($data->action == 'Email from Client') selected @endif>Email from Client</option>
                        <option value="Email from Court Reporter" @if($data->action == 'Email from Court Reporter') selected @endif>Email from Court Reporter</option>
                        <option value="Email from debtor" @if($data->action == 'Email from debtor') selected @endif>Email from debtor</option>
                        <option value="Email from Metro Legal" @if($data->action == 'Email from Metro Legal') selected @endif>Email from Metro Legal</option>
                        <option value="Email to attorney" @if($data->action == 'Email to attorney') selected @endif>Email to attorney</option>
                        <option value="Email to client" @if($data->action == 'Email to client') selected @endif>Email to client</option>
                        <option value="Email to Court Reporter" @if($data->action == 'Email to Court Reporter') selected @endif>Email to Court Reporter</option>
                        <option value="Email to Debtor" @if($data->action == 'Email to Debtor') selected @endif>Email to Debtor</option>
                        <option value="Email to Metro Legal" @if($data->action == 'Email to Metro Legal') selected @endif>Email to Metro Legal</option>

                            <!-- Additional Activities -->
                        <option value="Exemption returned" @if($data->action == 'Exemption returned') selected @endif>Exemption returned</option>
                        <option value="Fax Sent/Received" @if($data->action == 'Fax Sent/Received') selected @endif>Fax Sent/Received</option>
                        <option value="Fax to employer" @if($data->action == 'Fax to employer') selected @endif>Fax to employer</option>
                        <option value="Fee Arrangement" @if($data->action == 'Fee Arrangement') selected @endif>Fee Arrangement</option>
                        <option value="Filed with Court" @if($data->action == 'Filed with Court') selected @endif>Filed with Court</option>
                        <option value="Financial Disclosure Form return" @if($data->action == 'Financial Disclosure Form return') selected @endif>Financial Disclosure Form return</option>
                        <option value="Forward payment to Client" @if($data->action == 'Forward payment to Client') selected @endif>Forward payment to Client</option>
                        <option value="Garnishment documents returned" @if($data->action == 'Garnishment documents returned') selected @endif>Garnishment documents returned</option>
                        <option value="Garnishment sent to Employer" @if($data->action == 'Garnishment sent to Employer') selected @endif>Garnishment sent to Employer</option>
                        <option value="Hearing / Trial" @if($data->action == 'Hearing / Trial') selected @endif>Hearing / Trial</option>
                        <option value="Informational Statement sent" @if($data->action == 'Informational Statement sent') selected @endif>Informational Statement sent</option>
                        <option value="Judge Assigned" @if($data->action == 'Judge Assigned') selected @endif>Judge Assigned</option>
                        <option value="Judgment Entered with Writ" @if($data->action == 'Judgment Entered with Writ') selected @endif>Judgment Entered with Writ</option>
                        <option value="Letter" @if($data->action == 'Letter') selected @endif>Letter</option>
                        <option value="Letter from Debtor" @if($data->action == 'Letter from Debtor') selected @endif>Letter from Debtor</option>
                        <option value="Letter to Attorney" @if($data->action == 'Letter to Attorney') selected @endif>Letter to Attorney</option>
                        <option value="Letter to Client" @if($data->action == 'Letter to Client') selected @endif>Letter to Client</option>
                        <option value="Letter to Debtor" @if($data->action == 'Letter to Debtor') selected @endif>Letter to Debtor</option>
                        <option value="Levy documents returned" @if($data->action == 'Levy documents returned') selected @endif>Levy documents returned</option>
                        <option value="Levy sent to bank" @if($data->action == 'Levy sent to bank') selected @endif>Levy sent to bank</option>
                        <option value="Mail returned" @if($data->action == 'Mail returned') selected @endif>Mail returned</option>
                        <option value="Mediation/Arbitration Date" @if($data->action == 'Mediation/Arbitration Date') selected @endif>Mediation/Arbitration Date</option>
                        <option value="Meeting/Attended" @if($data->action == 'Meeting/Attended') selected @endif>Meeting/Attended</option>
                        <option value="Military Search" @if($data->action == 'Military Search') selected @endif>Military Search</option>
                        <option value="Motor Vehicle" @if($data->action == 'Motor Vehicle') selected @endif>Motor Vehicle</option>
                        <option value="New Address" @if($data->action == 'New Address') selected @endif>New Address</option>
                        <option value="No Contact with Debtor" @if($data->action == 'No Contact with Debtor') selected @endif>No Contact with Debtor</option>
                        <option value="No Physical File" @if($data->action == 'No Physical File') selected @endif>No Physical File</option>
                        <option value="Note" @if($data->action == 'Note') selected @endif>Note</option>
                        <option value="OFD Returned" @if($data->action == 'OFD Returned') selected @endif>OFD Returned</option>
                        <option value="OFD sent to debtor" @if($data->action == 'OFD sent to debtor') selected @endif>OFD sent to debtor</option>
                        <option value="OFFSET NOTICE" @if($data->action == 'OFFSET NOTICE') selected @endif>OFFSET NOTICE</option>
                        <option value="Opened Court File" @if($data->action == 'Opened Court File') selected @endif>Opened Court File</option>
                        <option value="Order to show cause" @if($data->action == 'Order to show cause') selected @endif>Order to show cause</option>
                        <option value="PO Box Address Request" @if($data->action == 'PO Box Address Request') selected @endif>PO Box Address Request</option>
                        <option value="Post Judgment Discovery" @if($data->action == 'Post Judgment Discovery') selected @endif>Post Judgment Discovery</option>
                        <option value="Power of Attorney" @if($data->action == 'Power of Attorney') selected @endif>Power of Attorney</option>
                        <option value="Pregarn sent" @if($data->action == 'Pregarn sent') selected @endif>Pregarn sent</option>
                        <option value="Received Documents" @if($data->action == 'Received Documents') selected @endif>Received Documents</option>
                        <option value="Received Signed Stipulation & Confession" @if($data->action == 'Received Signed Stipulation & Confession') selected @endif>Received Signed Stipulation & Confession</option>
                        <option value="Refund" @if($data->action == 'Refund') selected @endif>Refund</option>
                        <option value="Release" @if($data->action == 'Release') selected @endif>Release</option>
                        <option value="Reminder Letter" @if($data->action == 'Reminder Letter') selected @endif>Reminder Letter</option>
                        <option value="Remitted" @if($data->action == 'Remitted') selected @endif>Remitted</option>
                        <option value="Renewed Judgment" @if($data->action == 'Renewed Judgment') selected @endif>Renewed Judgment</option>
                        <option value="Returned Original Writ" @if($data->action == 'Returned Original Writ') selected @endif>Returned Original Writ</option>
                        <option value="Reviewed File" @if($data->action == 'Reviewed File') selected @endif>Reviewed File</option>
                        <option value="S & C to process server" @if($data->action == 'S & C to process server') selected @endif>S & C to process server</option>
                        <option value="Satisfaction of Judgment" @if($data->action == 'Satisfaction of Judgment') selected @endif>Satisfaction of Judgment</option>
                        <option value="SCANNED - NO PHYSICAL FILE" @if($data->action == 'SCANNED - NO PHYSICAL FILE') selected @endif>SCANNED - NO PHYSICAL FILE</option>
                        <option value="Second Request" @if($data->action == 'Second Request') selected @endif>Second Request</option>
                        <option value="Secretary of state search" @if($data->action == 'Secretary of state search') selected @endif>Secretary of state search</option>
                        <option value="Settlement" @if($data->action == 'Settlement') selected @endif>Settlement</option>
                        <option value="Stipulation and Confession of Judgment" @if($data->action == 'Stipulation and Confession of Judgment') selected @endif>Stipulation and Confession of Judgment</option>
                        <option value="STOP GARNISHMENT" @if($data->action == 'STOP GARNISHMENT') selected @endif>STOP GARNISHMENT</option>
                        <option value="Subpoena sent to process server" @if($data->action == 'Subpoena sent to process server') selected @endif>Subpoena sent to process server</option>
                        <option value="Substitution of Counsel" @if($data->action == 'Substitution of Counsel') selected @endif>Substitution of Counsel</option>
                        <option value="Summary Judgment Docs" @if($data->action == 'Summary Judgment Docs') selected @endif>Summary Judgment Docs</option>
                        <option value="Suspended/Inactive" @if($data->action == 'Suspended/Inactive') selected @endif>Suspended/Inactive</option>
                        <option value="TERMINATED" @if($data->action == 'TERMINATED') selected @endif>TERMINATED</option>
                        <option value="Transcribe Judgment" @if($data->action == 'Transcribe Judgment') selected @endif>Transcribe Judgment</option>
                        <option value="Vacate Judgment documents to Court" @if($data->action == 'Vacate Judgment documents to Court') selected @endif>Vacate Judgment documents to Court</option>
                        <option value="Wage Assignment" @if($data->action == 'Wage Assignment') selected @endif>Wage Assignment</option>
                        <option value="Withdrawal of Counsel" @if($data->action == 'Withdrawal of Counsel') selected @endif>Withdrawal of Counsel</option>
                        <option value="Write" @if($data->action == 'Write') selected @endif>Write</option>

                        </select>


                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="note" name="note" rows="4" placeholder="Enter your note"
                                val="{{ $data->note }}">{{ $data->note }}</textarea>
                            @error('note')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="note_by">Note By:</label>
                                <select class="form-control" id="note_by" name="note_by">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}"
                                            @if ($role->name == $data->note_by) selected @endif>{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="note_date">Note Date:</label>
                                <input type="date" class="form-control" id="note_date" name="note_date"
                                    value="{{ $data->note_date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="reviewed" value="0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="reviewed" name="reviewed"
                                    value="1" @if ($data->reviewed == 1) checked @endif>
                                <label class="form-check-label" for="reviewed">
                                    Reviewed
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="review_by">Review by:</label>
                                <select class="form-control" id="review_by" name="review_by">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}"
                                            @if ($role->name == $data->review_by) selected @endif>{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="review_date">Review Date:</label>
                                <input type="date" class="form-control" id="review_date" name="review_date"
                                    value="{{ $data->review_date }}">
                            </div>
                        </div>







                        <button type="submit" class="btn btn-primary mt-2">Update</button>

                    </form>
                </x-front.card>

            </div>
        </div>
    </div>
</x-auth-layout>




