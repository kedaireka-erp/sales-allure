
<table>
    <thead>
        <tr>  
            <th><b>NO</b></th>
            <th><b>QUOTATION_NO</b></th>
            <th><b>CONTACT_ID</b></th>
            <th><b>DEAL_SOURCE_ID</b></th>
            <th><b>STATUS_ID</b></th>
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
            <td>{{ $quotation->contact_id}}</td>
            <td>{{ $quotation->deal_source_id }}</td>
            <td>{{ $quotation->status_id }}</td>
            <td>@currency($quotation->nominal())</td>
            <td>{{ $quotation->keterangan }}</td>
            <td>{{ $quotation->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
