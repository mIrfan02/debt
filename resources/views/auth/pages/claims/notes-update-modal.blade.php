<div class="modal fade" id="editModal{{ $note->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $note->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $note->id }}">Edit Note</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('notes.update', $note->id) }}" novalidate>
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label for="title" class="form-label">Title:</label>
                            <x-front.input-field type="text" name="title" id="title" place="Enter note's title"
                                val="{{ $note->title }}" required="true">
                                Full Name:
                            </x-front.input-field>
                        </div>

                        <label for="activity">Action :</label>
                        <select id="activity" name="action" class="form-control">
                            <!-- Claim Activities -->
                            <option value="Claim-Agreement" @if ($note->action == 'Claim-Agreement') selected @endif>
                                Claim-Agreement</option>
                            <option value="Claim-Archieved" @if ($note->action == 'Claim-Archieved') selected @endif>
                                Claim-Archieved</option>
                            <option value="Claim-Assigned" @if ($note->action == 'Claim-Assigned') selected @endif>
                                Claim-Assigned</option>
                            <option value="Claim-Audit" @if ($note->action == 'Claim-Audit') selected @endif>Claim-Audit
                            </option>
                            <option value="Claim-Closed" @if ($note->action == 'Claim-Closed') selected @endif>Claim-Closed
                            </option>
                            <option value="Claim-Converted" @if ($note->action == 'Claim-Converted') selected @endif>
                                Claim-Converted</option>
                            <option value="Claim-Created" @if ($note->action == 'Claim-Created') selected @endif>
                                Claim-Created</option>
                            <option value="Claim-Deleted" @if ($note->action == 'Claim-Deleted') selected @endif>
                                Claim-Deleted</option>
                            <option value="Claim-Exported" @if ($note->action == 'Claim-Exported') selected @endif>
                                Claim-Exported</option>
                            <option value="Claim-Final Payment Received"
                                @if ($note->action == 'Claim-Final Payment Received') selected @endif>Claim-Final Payment Received</option>
                            <option value="Claim-Imported" @if ($note->action == 'Claim-Imported') selected @endif>
                                Claim-Imported</option>
                            <option value="Claim-Interest Start Date"
                                @if ($note->action == 'Claim-Interest Start Date') selected @endif>Claim-Interest Start Date</option>
                            <option value="Claim-Merged" @if ($note->action == 'Claim-Merged') selected @endif>
                                Claim-Merged</option>
                            <option value="Claim-Modified" @if ($note->action == 'Claim-Modified') selected @endif>
                                Claim-Modified</option>
                            <option value="Claim-Overpayment" @if ($note->action == 'Claim-Overpayment') selected @endif>
                                Claim-Overpayment</option>
                            <option value="Claim-Restored" @if ($note->action == 'Claim-Restored') selected @endif>
                                Claim-Restored</option>
                            <option value="Claim-Viewed" @if ($note->action == 'Claim-Viewed') selected @endif>
                                Claim-Viewed</option>
                            <option value="Claim-Not Modified" @if ($note->action == 'Claim-Not Modified') selected @endif>
                                Claim-Not Modified</option>
                            <option value="Claim-Not Viewed" @if ($note->action == 'Claim-Not Viewed') selected @endif>
                                Claim-Not Viewed</option>
                            <option value="Judgment Expiry" @if ($note->action == 'Judgment Expiry') selected @endif>Judgment
                                Expiry</option>
                            <option value="Statute of Limitations" @if ($note->action == 'Statute of Limitations') selected @endif>
                                Statute of Limitations</option>
                            <option value="YGC Record 20" @if ($note->action == 'YGC Record 20') selected @endif>YGC Record
                                20</option>

                                <option value="10 Day Notice Sent" @if($note->action == '10 Day Notice Sent') selected @endif>10 Day Notice Sent</option>
                                <option value="Abstract Issued" @if($note->action == 'Abstract Issued') selected @endif>Abstract Issued</option>
                                <option value="Abstract Recorded" @if($note->action == 'Abstract Recorded') selected @endif>Abstract Recorded</option>
                                <option value="Answer Due" @if($note->action == 'Answer Due') selected @endif>Answer Due</option>
                                <option value="Answer Filed" @if($note->action == 'Answer Filed') selected @endif>Answer Filed</option>
                                <option value="Arrest Warrant" @if($note->action == 'Arrest Warrant') selected @endif>Arrest Warrant</option>
                                <option value="Case Dismissed" @if($note->action == 'Case Dismissed') selected @endif>Case Dismissed</option>
                                <option value="Complaint Filed" @if($note->action == 'Complaint Filed') selected @endif>Complaint Filed</option>
                                <option value="Complaint Served" @if($note->action == 'Complaint Served') selected @endif>Complaint Served</option>
                                <option value="Courts- NO Activity" @if($note->action == 'Courts- NO Activity') selected @endif>Courts- NO Activity</option>
                                <option value="Default Filed" @if($note->action == 'Default Filed') selected @endif>Default Filed</option>
                                <option value="Discovery End Date" @if($note->action == 'Discovery End Date') selected @endif>Discovery End Date</option>
                                <option value="Judgment Docketed" @if($note->action == 'Judgment Docketed') selected @endif>Judgment Docketed</option>
                                <option value="Judgment Request Sent" @if($note->action == 'Judgment Request Sent') selected @endif>Judgment Request Sent</option>
                                <option value="Lien Date" @if($note->action == 'Lien Date') selected @endif>Lien Date</option>
                                <option value="Lien Filed" @if($note->action == 'Lien Filed') selected @endif>Lien Filed</option>
                                <option value="Lien Renewal Date" @if($note->action == 'Lien Renewal Date') selected @endif>Lien Renewal Date</option>
                                <option value="Lien Renewal Filed" @if($note->action == 'Lien Renewal Filed') selected @endif>Lien Renewal Filed</option>
                                <option value="Motion Filed" @if($note->action == 'Motion Filed') selected @endif>Motion Filed</option>
                                <option value="Property Exec Date" @if($note->action == 'Property Exec Date') selected @endif>Property Exec Date</option>
                                <option value="Stipulation Date" @if($note->action == 'Stipulation Date') selected @endif>Stipulation Date</option>
                                <option value="Summons Served" @if($note->action == 'Summons Served') selected @endif>Summons Served</option>
                                <option value="Transcript" @if($note->action == 'Transcript') selected @endif>Transcript</option>
                                <option value="Trial Date" @if($note->action == 'Trial Date') selected @endif>Trial Date</option>
                                <option value="Wage Execution" @if($note->action == 'Wage Execution') selected @endif>Wage Execution</option>
                                <option value="Writ Issued" @if($note->action == 'Writ Issued') selected @endif>Writ Issued</option>
                                <option value="Bank Subpoena" @if($note->action == 'Bank Subpoena') selected @endif>Bank Subpoena</option>
                                <option value="Deposition Notice" @if($note->action == 'Deposition Notice') selected @endif>Deposition Notice</option>
                                <option value="Document Request" @if($note->action == 'Document Request') selected @endif>Document Request</option>
                                <option value="Information Subpoena" @if($note->action == 'Information Subpoena') selected @endif>Information Subpoena</option>
                                <option value="Interrogatories" @if($note->action == 'Interrogatories') selected @endif>Interrogatories</option>
                                <option value="Claim-Change of Claim Status" @if($note->action == 'Claim-Change of Claim Status') selected @endif>Claim-Change of Claim Status</option>
                                <option value="Claim-Change of Collector" @if($note->action == 'Claim-Change of Collector') selected @endif>Claim-Change of Collector</option>
                                <option value="Claim-Change of Contingency Method" @if($note->action == 'Claim-Change of Contingency Method') selected @endif>Claim-Change of Contingency Method</option>
                                <option value="Claim- Add a Note(action)" @if($note->action == 'Claim- Add a Note(action)') selected @endif>Claim- Add a Note(action)</option>
                                <option value="Claim-Add a Tickler" @if($note->action == 'Claim-Add a Tickler') selected @endif>Claim-Add a Tickler</option>
                                <option value="Claim- Add a Transaction" @if($note->action == 'Claim- Add a Transaction') selected @endif>Claim- Add a Transaction</option>
                                <option value="NSF (Non Sufficient Funds)" @if($note->action == 'NSF (Non Sufficient Funds)') selected @endif>NSF (Non Sufficient Funds)</option>
                                <option value="Transaction- Last Cost" @if($note->action == 'Transaction- Last Cost') selected @endif>Transaction- Last Cost</option>
                                <option value="Transaction - Last Payment" @if($note->action == 'Transaction - Last Payment') selected @endif>Transaction - Last Payment</option>
                                <option value="Transaction - Last Transaction" @if($note->action == 'Transaction - Last Transaction') selected @endif>Transaction - Last Transaction</option>
                                <option value="Transaction - None" @if($note->action == 'Transaction - None') selected @endif>Transaction - None</option>
                                <option value="Amounts from Client" @if($note->action == 'Amounts from Client') selected @endif>Amounts from Client</option>
                                <option value="Note From Client" @if($note->action == 'Note From Client') selected @endif>Note From Client</option>
                                <option value="Notes - Last Note" @if($note->action == 'Notes - Last Note') selected @endif>Notes - Last Note</option>
                                <option value="Notes - None" @if($note->action == 'Notes - None') selected @endif>Notes - None</option>
                                <option value="(Not Assigned)" @if($note->action == '(Not Assigned)') selected @endif>(Not Assigned)</option>
                                <option value="Claim-Change of Status" @if($note->action == 'Claim-Change of Status') selected @endif>Claim-Change of Status</option>

                            <!-- Debtor Activities -->

                                <option value="Debtor-Archieved" @if($note->action == 'Debtor-Archieved') selected @endif>Debtor-Archieved</option>
                                <option value="Debtor-Assigned" @if($note->action == 'Debtor-Assigned') selected @endif>Debtor-Assigned</option>
                                <option value="Debtor-Closed" @if($note->action == 'Debtor-Closed') selected @endif>Debtor-Closed</option>
                                <option value="Debtor-Converted" @if($note->action == 'Debtor-Converted') selected @endif>Debtor-Converted</option>
                                <option value="Debtor- Created" @if($note->action == 'Debtor- Created') selected @endif>Debtor- Created</option>
                                <option value="Debtor-Exported" @if($note->action == 'Debtor-Exported') selected @endif>Debtor-Exported</option>
                                <option value="Debtor- Imported" @if($note->action == 'Debtor- Imported') selected @endif>Debtor- Imported</option>
                                <option value="Debtor-Merged" @if($note->action == 'Debtor-Merged') selected @endif>Debtor-Merged</option>
                                <option value="Debtor - Modified" @if($note->action == 'Debtor - Modified') selected @endif>Debtor - Modified</option>
                                <option value="Debtor -  Restored" @if($note->action == 'Debtor -  Restored') selected @endif>Debtor -  Restored</option>
                                <option value="Debtor - Viewed" @if($note->action == 'Debtor - Viewed') selected @endif>Debtor - Viewed</option>
                                <option value="Debtors- Not Modified" @if($note->action == 'Debtors- Not Modified') selected @endif>Debtors- Not Modified</option>
                                <option value="Debtors- NOT Viewed" @if($note->action == 'Debtors- NOT Viewed') selected @endif>Debtors- NOT Viewed</option>


                            <!-- Client Activities -->
                            <option value="Client-Archieved" @if($note->action == 'Client-Archieved') selected @endif>Client-Archieved</option>
                            <option value="Client-Assigned" @if($note->action == 'Client-Assigned') selected @endif>Client-Assigned</option>
                            <option value="Client-Closed" @if($note->action == 'Client-Closed') selected @endif>Client-Closed</option>
                            <option value="Client-Converted" @if($note->action == 'Client-Converted') selected @endif>Client-Converted</option>
                            <option value="Client- Created" @if($note->action == 'Client- Created') selected @endif>Client- Created</option>
                            <option value="Client-Exported" @if($note->action == 'Client-Exported') selected @endif>Client-Exported</option>
                            <option value="Client- Imported" @if($note->action == 'Client- Imported') selected @endif>Client- Imported</option>
                            <option value="Client-Merged" @if($note->action == 'Client-Merged') selected @endif>Client-Merged</option>
                            <option value="Client - Modified" @if($note->action == 'Client - Modified') selected @endif>Client - Modified</option>
                            <option value="Client -  Restored" @if($note->action == 'Client -  Restored') selected @endif>Client -  Restored</option>
                            <option value="Client - Viewed" @if($note->action == 'Client - Viewed') selected @endif>Client - Viewed</option>
                            <option value="Clients- Not Modified" @if($note->action == 'Clients- Not Modified') selected @endif>Clients- Not Modified</option>
                            <option value="Clients- NOT Viewed" @if($note->action == 'Clients- NOT Viewed') selected @endif>Clients- NOT Viewed</option>


                            <!-- Creditor Activities -->
                            <!-- Add similar checks for other options -->
                            <option value="Creditor-Archieved" @if($note->action == 'Creditor-Archieved') selected @endif>Creditor-Archieved</option>
                            <option value="Creditor-Assigned" @if($note->action == 'Creditor-Assigned') selected @endif>Creditor-Assigned</option>
                            <option value="Creditor-Closed" @if($note->action == 'Creditor-Closed') selected @endif>Creditor-Closed</option>
                            <option value="Creditor-Converted" @if($note->action == 'Creditor-Converted') selected @endif>Creditor-Converted</option>
                            <option value="Creditor- Created" @if($note->action == 'Creditor- Created') selected @endif>Creditor- Created</option>
                            <option value="Creditor-Exported" @if($note->action == 'Creditor-Exported') selected @endif>Creditor-Exported</option>
                            <option value="Creditor- Imported" @if($note->action == 'Creditor- Imported') selected @endif>Creditor- Imported</option>
                            <option value="Creditor-Merged" @if($note->action == 'Creditor-Merged') selected @endif>Creditor-Merged</option>
                            <option value="Creditor - Modified" @if($note->action == 'Creditor - Modified') selected @endif>Creditor - Modified</option>
                            <option value="Creditor -  Restored" @if($note->action == 'Creditor -  Restored') selected @endif>Creditor -  Restored</option>
                            <option value="Creditor - Viewed" @if($note->action == 'Creditor - Viewed') selected @endif>Creditor - Viewed</option>
                            <option value="Creditors- Not Modified" @if($note->action == 'Creditors- Not Modified') selected @endif>Creditors- Not Modified</option>
                            <option value="Creditors- NOT Viewed" @if($note->action == 'Creditors- NOT Viewed') selected @endif>Creditors- NOT Viewed</option>

                            <!-- Contact Activities -->
                          <!-- Add similar checks for other options -->
                            <option value="Contact-Archieved" @if($note->action == 'Contact-Archieved') selected @endif>Contact-Archieved</option>
                            <option value="Contact-Assigned" @if($note->action == 'Contact-Assigned') selected @endif>Contact-Assigned</option>
                            <option value="Contact-Closed" @if($note->action == 'Contact-Closed') selected @endif>Contact-Closed</option>
                            <option value="Contact-Converted" @if($note->action == 'Contact-Converted') selected @endif>Contact-Converted</option>
                            <option value="Contact- Created" @if($note->action == 'Contact- Created') selected @endif>Contact- Created</option>
                            <option value="Contact-Exported" @if($note->action == 'Contact-Exported') selected @endif>Contact-Exported</option>
                            <option value="Contact- Imported" @if($note->action == 'Contact- Imported') selected @endif>Contact- Imported</option>
                            <option value="Contact-Merged" @if($note->action == 'Contact-Merged') selected @endif>Contact-Merged</option>
                            <option value="Contact - Modified" @if($note->action == 'Contact - Modified') selected @endif>Contact - Modified</option>
                            <option value="Contact -  Restored" @if($note->action == 'Contact -  Restored') selected @endif>Contact -  Restored</option>
                            <option value="Contact - Viewed" @if($note->action == 'Contact - Viewed') selected @endif>Contact - Viewed</option>
                            <option value="Contacts- Not Modified" @if($note->action == 'Contacts- Not Modified') selected @endif>Contacts- Not Modified</option>
                            <option value="Contacts- NOT Viewed" @if($note->action == 'Contacts- NOT Viewed') selected @endif>Contacts- NOT Viewed</option>


                            <!-- Other Activities -->
                        <option value="Accurint/Credit Reports" @if($note->action == 'Accurint/Credit Reports') selected @endif>Accurint/Credit Reports</option>
                        <option value="Affidavit of Not Srvd" @if($note->action == 'Affidavit of Not Srvd') selected @endif>Affidavit of Not Srvd</option>
                        <option value="Affidavit of Publication" @if($note->action == 'Affidavit of Publication') selected @endif>Affidavit of Publication</option>
                        <option value="Affidavit of Service" @if($note->action == 'Affidavit of Service') selected @endif>Affidavit of Service</option>
                        <option value="ANSWER" @if($note->action == 'ANSWER') selected @endif>ANSWER</option>
                        <option value="ATTORNEY ASSIGNED" @if($note->action == 'ATTORNEY ASSIGNED') selected @endif>ATTORNEY ASSIGNED</option>
                        <option value="Attorney Called" @if($note->action == 'Attorney Called') selected @endif>Attorney Called</option>
                        <option value="Audit" @if($note->action == 'Audit') selected @endif>Audit</option>
                        <option value="Bankruptcy Search" @if($note->action == 'Bankruptcy Search') selected @endif>Bankruptcy Search</option>
                        <option value="Billing - Flat Fee" @if($note->action == 'Billing - Flat Fee') selected @endif>Billing - Flat Fee</option>
                        <option value="Billing - Hourly" @if($note->action == 'Billing - Hourly') selected @endif>Billing - Hourly</option>
                        <option value="Billing / Cost" @if($note->action == 'Billing / Cost') selected @endif>Billing / Cost</option>
                        <option value="Billing-Contg" @if($note->action == 'Billing-Contg') selected @endif>Billing-Contg</option>
                        <option value="Billing-Misc" @if($note->action == 'Billing-Misc') selected @endif>Billing-Misc</option>
                        <option value="Called" @if($note->action == 'Called') selected @endif>Called</option>
                        <option value="Call to Attorney" @if($note->action == 'Call to Attorney') selected @endif>Call to Attorney</option>
                        <option value="Called Client" @if($note->action == 'Called Client') selected @endif>Called Client</option>
                        <option value="Called Court" @if($note->action == 'Called Court') selected @endif>Called Court</option>
                        <option value="Called Debtor" @if($note->action == 'Called Debtor') selected @endif>Called Debtor</option>
                        <option value="CACNELLED / RESCHEDULED HEARING" @if($note->action == 'CACNELLED / RESCHEDULED HEARING') selected @endif>CACNELLED / RESCHEDULED HEARING</option>
                        <option value="Case Closed" @if($note->action == 'Case Closed') selected @endif>Case Closed</option>
                        <option value="Chpt 11 Bankruptcy Notice" @if($note->action == 'Chpt 11 Bankruptcy Notice') selected @endif>Chpt 11 Bankruptcy Notice</option>
                        <option value="Chpt 13 Bankruptcy Notice" @if($note->action == 'Chpt 13 Bankruptcy Notice') selected @endif>Chpt 13 Bankruptcy Notice</option>
                        <option value="Chpt 7 Bankruptcy Notice" @if($note->action == 'Chpt 7 Bankruptcy Notice') selected @endif>Chpt 7 Bankruptcy Notice</option>
                        <option value="Client Called" @if($note->action == 'Client Called') selected @endif>Client Called</option>
                        <option value="Client Contact/Info" @if($note->action == 'Client Contact/Info') selected @endif>Client Contact/Info</option>
                        <option value="COUNTERCLAIM" @if($note->action == 'COUNTERCLAIM') selected @endif>COUNTERCLAIM</option>
                        <option value="Court Reporter Scheduled" @if($note->action == 'Court Reporter Scheduled') selected @endif>Court Reporter Scheduled</option>
                        <option value="Credit Card Authorization Received" @if($note->action == 'Credit Card Authorization Received') selected @endif>Credit Card Authorization Received</option>
                        <option value="Credit Card Declined" @if($note->action == 'Credit Card Declined') selected @endif>Credit Card Declined</option>
                        <option value="Debtor Called" @if($note->action == 'Debtor Called') selected @endif>Debtor Called</option>
                        <option value="Demand ltr-consumer" @if($note->action == 'Demand ltr-consumer') selected @endif>Demand ltr-consumer</option>
                        <option value="Demand ltr sent - biz" @if($note->action == 'Demand ltr sent - biz') selected @endif>Demand ltr sent - biz</option>
                        <option value="Deposition" @if($note->action == 'Deposition') selected @endif>Deposition</option>
                        <option value="Direct Pay Invoice" @if($note->action == 'Direct Pay Invoice') selected @endif>Direct Pay Invoice</option>
                        <option value="Dismissal W/O Prejudice" @if($note->action == 'Dismissal W/O Prejudice') selected @endif>Dismissal W/O Prejudice</option>
                        <option value="Dismissal With Prejudice" @if($note->action == 'Dismissal With Prejudice') selected @endif>Dismissal With Prejudice</option>
                        <option value="Drafted Document(s)" @if($note->action == 'Drafted Document(s)') selected @endif>Drafted Document(s)</option>
                        <option value="Earnings Disclosure Worksheet received" @if($note->action == 'Earnings Disclosure Worksheet received') selected @endif>Earnings Disclosure Worksheet received</option>
                        <option value="E-Filed" @if($note->action == 'E-Filed') selected @endif>E-Filed</option>
                        <option value="EJ Letter to Court" @if($note->action == 'EJ Letter to Court') selected @endif>EJ Letter to Court</option>
                        <option value="Email" @if($note->action == 'Email') selected @endif>Email</option>
                        <option value="Email from attorney" @if($note->action == 'Email from attorney') selected @endif>Email from attorney</option>
                        <option value="Email from Client" @if($note->action == 'Email from Client') selected @endif>Email from Client</option>
                        <option value="Email from Court Reporter" @if($note->action == 'Email from Court Reporter') selected @endif>Email from Court Reporter</option>
                        <option value="Email from debtor" @if($note->action == 'Email from debtor') selected @endif>Email from debtor</option>
                        <option value="Email from Metro Legal" @if($note->action == 'Email from Metro Legal') selected @endif>Email from Metro Legal</option>
                        <option value="Email to attorney" @if($note->action == 'Email to attorney') selected @endif>Email to attorney</option>
                        <option value="Email to client" @if($note->action == 'Email to client') selected @endif>Email to client</option>
                        <option value="Email to Court Reporter" @if($note->action == 'Email to Court Reporter') selected @endif>Email to Court Reporter</option>
                        <option value="Email to Debtor" @if($note->action == 'Email to Debtor') selected @endif>Email to Debtor</option>
                        <option value="Email to Metro Legal" @if($note->action == 'Email to Metro Legal') selected @endif>Email to Metro Legal</option>

                            <!-- Additional Activities -->
                        <option value="Exemption returned" @if($note->action == 'Exemption returned') selected @endif>Exemption returned</option>
                        <option value="Fax Sent/Received" @if($note->action == 'Fax Sent/Received') selected @endif>Fax Sent/Received</option>
                        <option value="Fax to employer" @if($note->action == 'Fax to employer') selected @endif>Fax to employer</option>
                        <option value="Fee Arrangement" @if($note->action == 'Fee Arrangement') selected @endif>Fee Arrangement</option>
                        <option value="Filed with Court" @if($note->action == 'Filed with Court') selected @endif>Filed with Court</option>
                        <option value="Financial Disclosure Form return" @if($note->action == 'Financial Disclosure Form return') selected @endif>Financial Disclosure Form return</option>
                        <option value="Forward payment to Client" @if($note->action == 'Forward payment to Client') selected @endif>Forward payment to Client</option>
                        <option value="Garnishment documents returned" @if($note->action == 'Garnishment documents returned') selected @endif>Garnishment documents returned</option>
                        <option value="Garnishment sent to Employer" @if($note->action == 'Garnishment sent to Employer') selected @endif>Garnishment sent to Employer</option>
                        <option value="Hearing / Trial" @if($note->action == 'Hearing / Trial') selected @endif>Hearing / Trial</option>
                        <option value="Informational Statement sent" @if($note->action == 'Informational Statement sent') selected @endif>Informational Statement sent</option>
                        <option value="Judge Assigned" @if($note->action == 'Judge Assigned') selected @endif>Judge Assigned</option>
                        <option value="Judgment Entered with Writ" @if($note->action == 'Judgment Entered with Writ') selected @endif>Judgment Entered with Writ</option>
                        <option value="Letter" @if($note->action == 'Letter') selected @endif>Letter</option>
                        <option value="Letter from Debtor" @if($note->action == 'Letter from Debtor') selected @endif>Letter from Debtor</option>
                        <option value="Letter to Attorney" @if($note->action == 'Letter to Attorney') selected @endif>Letter to Attorney</option>
                        <option value="Letter to Client" @if($note->action == 'Letter to Client') selected @endif>Letter to Client</option>
                        <option value="Letter to Debtor" @if($note->action == 'Letter to Debtor') selected @endif>Letter to Debtor</option>
                        <option value="Levy documents returned" @if($note->action == 'Levy documents returned') selected @endif>Levy documents returned</option>
                        <option value="Levy sent to bank" @if($note->action == 'Levy sent to bank') selected @endif>Levy sent to bank</option>
                        <option value="Mail returned" @if($note->action == 'Mail returned') selected @endif>Mail returned</option>
                        <option value="Mediation/Arbitration Date" @if($note->action == 'Mediation/Arbitration Date') selected @endif>Mediation/Arbitration Date</option>
                        <option value="Meeting/Attended" @if($note->action == 'Meeting/Attended') selected @endif>Meeting/Attended</option>
                        <option value="Military Search" @if($note->action == 'Military Search') selected @endif>Military Search</option>
                        <option value="Motor Vehicle" @if($note->action == 'Motor Vehicle') selected @endif>Motor Vehicle</option>
                        <option value="New Address" @if($note->action == 'New Address') selected @endif>New Address</option>
                        <option value="No Contact with Debtor" @if($note->action == 'No Contact with Debtor') selected @endif>No Contact with Debtor</option>
                        <option value="No Physical File" @if($note->action == 'No Physical File') selected @endif>No Physical File</option>
                        <option value="Note" @if($note->action == 'Note') selected @endif>Note</option>
                        <option value="OFD Returned" @if($note->action == 'OFD Returned') selected @endif>OFD Returned</option>
                        <option value="OFD sent to debtor" @if($note->action == 'OFD sent to debtor') selected @endif>OFD sent to debtor</option>
                        <option value="OFFSET NOTICE" @if($note->action == 'OFFSET NOTICE') selected @endif>OFFSET NOTICE</option>
                        <option value="Opened Court File" @if($note->action == 'Opened Court File') selected @endif>Opened Court File</option>
                        <option value="Order to show cause" @if($note->action == 'Order to show cause') selected @endif>Order to show cause</option>
                        <option value="PO Box Address Request" @if($note->action == 'PO Box Address Request') selected @endif>PO Box Address Request</option>
                        <option value="Post Judgment Discovery" @if($note->action == 'Post Judgment Discovery') selected @endif>Post Judgment Discovery</option>
                        <option value="Power of Attorney" @if($note->action == 'Power of Attorney') selected @endif>Power of Attorney</option>
                        <option value="Pregarn sent" @if($note->action == 'Pregarn sent') selected @endif>Pregarn sent</option>
                        <option value="Received Documents" @if($note->action == 'Received Documents') selected @endif>Received Documents</option>
                        <option value="Received Signed Stipulation & Confession" @if($note->action == 'Received Signed Stipulation & Confession') selected @endif>Received Signed Stipulation & Confession</option>
                        <option value="Refund" @if($note->action == 'Refund') selected @endif>Refund</option>
                        <option value="Release" @if($note->action == 'Release') selected @endif>Release</option>
                        <option value="Reminder Letter" @if($note->action == 'Reminder Letter') selected @endif>Reminder Letter</option>
                        <option value="Remitted" @if($note->action == 'Remitted') selected @endif>Remitted</option>
                        <option value="Renewed Judgment" @if($note->action == 'Renewed Judgment') selected @endif>Renewed Judgment</option>
                        <option value="Returned Original Writ" @if($note->action == 'Returned Original Writ') selected @endif>Returned Original Writ</option>
                        <option value="Reviewed File" @if($note->action == 'Reviewed File') selected @endif>Reviewed File</option>
                        <option value="S & C to process server" @if($note->action == 'S & C to process server') selected @endif>S & C to process server</option>
                        <option value="Satisfaction of Judgment" @if($note->action == 'Satisfaction of Judgment') selected @endif>Satisfaction of Judgment</option>
                        <option value="SCANNED - NO PHYSICAL FILE" @if($note->action == 'SCANNED - NO PHYSICAL FILE') selected @endif>SCANNED - NO PHYSICAL FILE</option>
                        <option value="Second Request" @if($note->action == 'Second Request') selected @endif>Second Request</option>
                        <option value="Secretary of state search" @if($note->action == 'Secretary of state search') selected @endif>Secretary of state search</option>
                        <option value="Settlement" @if($note->action == 'Settlement') selected @endif>Settlement</option>
                        <option value="Stipulation and Confession of Judgment" @if($note->action == 'Stipulation and Confession of Judgment') selected @endif>Stipulation and Confession of Judgment</option>
                        <option value="STOP GARNISHMENT" @if($note->action == 'STOP GARNISHMENT') selected @endif>STOP GARNISHMENT</option>
                        <option value="Subpoena sent to process server" @if($note->action == 'Subpoena sent to process server') selected @endif>Subpoena sent to process server</option>
                        <option value="Substitution of Counsel" @if($note->action == 'Substitution of Counsel') selected @endif>Substitution of Counsel</option>
                        <option value="Summary Judgment Docs" @if($note->action == 'Summary Judgment Docs') selected @endif>Summary Judgment Docs</option>
                        <option value="Suspended/Inactive" @if($note->action == 'Suspended/Inactive') selected @endif>Suspended/Inactive</option>
                        <option value="TERMINATED" @if($note->action == 'TERMINATED') selected @endif>TERMINATED</option>
                        <option value="Transcribe Judgment" @if($note->action == 'Transcribe Judgment') selected @endif>Transcribe Judgment</option>
                        <option value="Vacate Judgment documents to Court" @if($note->action == 'Vacate Judgment documents to Court') selected @endif>Vacate Judgment documents to Court</option>
                        <option value="Wage Assignment" @if($note->action == 'Wage Assignment') selected @endif>Wage Assignment</option>
                        <option value="Withdrawal of Counsel" @if($note->action == 'Withdrawal of Counsel') selected @endif>Withdrawal of Counsel</option>
                        <option value="Write" @if($note->action == 'Write') selected @endif>Write</option>

                        </select>


                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="note" name="note" rows="4" placeholder="Enter your note"
                                val="{{ $note->note }}">{{ $note->note }}</textarea>
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
                                            @if ($role->name == $note->note_by) selected @endif>{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="note_date">Note Date:</label>
                                <input type="date" class="form-control" id="note_date" name="note_date"
                                    value="{{ $note->note_date }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="reviewed" value="0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="reviewed" name="reviewed"
                                    value="1" @if ($note->reviewed == 1) checked @endif>
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
                                            @if ($role->name == $note->review_by) selected @endif>{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="review_date">Review Date:</label>
                                <input type="date" class="form-control" id="review_date" name="review_date"
                                    value="{{ $note->review_date }}">
                            </div>
                        </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
