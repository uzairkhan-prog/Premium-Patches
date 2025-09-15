<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class ClientsExport implements FromCollection
{
    protected $clients;

    public function __construct($clients)
    {
        $this->clients = $clients;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->clients;
    }
}