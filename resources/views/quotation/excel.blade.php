
<table>
    <thead>
        <tr>  
            <th><b>NO</b></th>
            <th><b>QUOTATION_NO</b></th>
            <th><b>NAMA_PROYEK</b></th>
            <th><b>CONTACT</b></th>
            <th><b>DEAL_SOURCE</b></th>
            <th><b>STATUS</b></th>
            <th><b>NOMINAL_PENAWARAN</b></th>
            <th><b>KETERANGAN</b></th>
            <th><b>CREATED_AT</b></th>
        </tr>
    </thead>
    <br>
    <tbody>
        @foreach ($quotations as $quotation)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $quotation->DataQuotation->no_quotation ?? '' }}</td>
            <td>{{ $quotation->DataQuotation->nama_proyek }}
            <td>{{ $quotation->Contact->name}}</td>
            <td>{{ $quotation->DealSource->name }}</td>
            <td>{{ $quotation->Status->name }}</td>
            <td>@currency($quotation->nominal)</td>
            <td>{{ $quotation->keterangan }}</td>
            <td>{{ $quotation->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
