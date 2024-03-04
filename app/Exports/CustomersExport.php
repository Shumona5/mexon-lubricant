<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomersExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return ["ID", "First Name", "Last Name", "Business Name", "Email", "Phone", "Status", "Address", "Date of Birth", "Created At", "Updated At"];
    }
  
    public function collection()
    {
        $data = Customer::select('id', 'first_name', 'last_name', 'business_name', 'email', 'phone', 'status', 'address', 'date_of_birth', 'created_at', 'updated_at')->get();
        return $data;
    }

    public function map($data): array
    {
        return [
          $data->id,
          $data->first_name,
          $data->last_name,
          $data->business_name,
          $data->email,
          $data->phone,
          $data->status,
          $data->address,
          $data->date_of_birth,
          $data->created_at,
          $data->updated_at,

        ];
    }
}
