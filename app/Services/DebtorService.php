<?php

namespace App\Services;

use App\Helper\BaseQuery;
use App\Models\Debtor;

class DebtorService
{
    use BaseQuery;

    private $_model = null;

    public function __construct()

    {
        $this->_model = new Debtor();
    }


    public function index()

    {
        return $this->get_all($this->_model);
    }


    public function store($data)

    {
        $debtor = $this->add($this->_model, $data);

        if (isset($data['addresses']) && is_array($data['addresses'])) {
            foreach ($data['addresses'] as $addressData) {
                $debtor->addresses()->create($addressData);
            }
        }

        if (isset($data['bank_accounts']) && is_array($data['bank_accounts'])) {
            foreach ($data['bank_accounts'] as $bankAccountData) {
                $debtor->banks()->create($bankAccountData);
            }
        }
        if (isset($data['assets']) && is_array($data['assets'])) {
            foreach ($data['assets'] as $assetData) {
                $debtor->assets()->create($assetData);
            }
        }

        if (isset($data['employments']) && is_array($data['employments'])) {
            foreach ($data['employments'] as $employmentData) {
                $debtor->employments()->create($employmentData);
            }
        }

        return $debtor;
    }


    public function show($id)

    {
        return $this->get_by_id($this->_model, $id);
    }


    public function update($id, $data)

    {
        $debtor = $this->get_by_id($this->_model, $id);
        if ($debtor) {
            $debtor->update($data);

            if (isset($data['addresses']) && is_array($data['addresses'])) {
                foreach ($data['addresses'] as $addressData) {
                    if (isset($addressData['id'])) {
                        $address = $debtor->addresses()->findOrFail($addressData['id']);

                        if ($address) {
                            $address->update($addressData);
                        }
                    } else {
                        $debtor->addresses()->create($addressData);
                    }
                }
            }

            if (isset($data['bank_accounts']) && is_array($data['bank_accounts'])) {
                foreach ($data['bank_accounts'] as $bankAccountData) {
                    if (isset($bankAccountData['id'])) {
                        $bankAccount = $debtor->banks()->findOrFail($bankAccountData['id']);

                        if ($bankAccount) {
                            $bankAccount->update($bankAccountData);
                        }
                    } else {
                        $debtor->banks()->create($bankAccountData);
                    }
                }
            }

            if (isset($data['assets']) && is_array($data['assets'])) {
                foreach ($data['assets'] as $assetData) {
                    if (isset($assetData['id'])) {
                        $asset = $debtor->assets()->findOrFail($assetData['id']);

                        if ($asset) {
                            $asset->update($assetData);
                        }
                    } else {
                        $debtor->assets()->create($assetData);
                    }
                }
            }

            // Update or create employments
            if (isset($data['employments']) && is_array($data['employments'])) {
                foreach ($data['employments'] as $employmentData) {
                    if (isset($employmentData['id'])) {
                        $employment = $debtor->employments()->findOrFail($employmentData['id']);

                        if ($employment) {
                            $employment->update($employmentData);
                        }
                    } else {
                        $debtor->employments()->create($employmentData);
                    }
                }
            }
        }

        return $debtor;
    }


    public function destroy($id)

    {
        $debtor = $this->get_by_id($this->_model, $id);

        if ($debtor) {
            $debtor->addresses()->delete();
            $debtor->banks()->delete();
            $debtor->assets()->delete();
            $debtor->employments()->delete();
            $debtor->notes()->delete();

            $this->delete($this->_model, $id);
        }
    }
}
