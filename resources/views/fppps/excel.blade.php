
<table>
    <thead>
        <tr>  
            <th><b>NO</b></th>
            <th><b>FPPP_NO</b></th>
            <th><b>PRODUCTION_PHASE</b></th>
            <th><b>FPPP_REVISI_NO</b></th>
            <th><b>FPPP_KETERANGAN</b></th>
            <th><b>PRODUCTION_TIME</b></th>
            <th><b>COLOR</b></th>
            <th><b>GLASS_TYPE</b></th>
            <th><b>RETRIEVAL_DEADLINE</b></th>
            <th><b>FPPP_TYPE</b></th>
            <th><b>ORDER_STATUS</b></th>
            <th><b>GLASS</b></th>
            <th><b>BOX_USAGE</b></th>
            <th><b>SEALANT_USAGE</b></th>
            <th><b>DELIVERY_TO_EXPEDITION</b></th>
            <th><b>NOTE</b></th>
            <th><b>CREATED_AT</b></th>
        </tr>
    </thead>
    <br>
    <tbody>
        @foreach ($fppps as $fppp)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $fppp->fppp_no }}</td>
            <td>{{ $fppp->production_phase }}</td>
            <td>{{ $fppp->fppp_revisino }}</td>
            <td>{{ $fppp->fppp_keterangan }}</td>
            <td>{{ $fppp->production_time }}</td>
            <td>{{ $fppp->color }}</td>
            <td>{{ $fppp->glass_type }}</td>
            <td>{{ $fppp->retrieval_deadline }}</td>
            <td>{{ $fppp->fppp_type }}</td>
            <td>{{ $fppp->order_status }}</td>
            <td>{{ $fppp->glass }}</td>
            <td>{{ $fppp->box_usage }}</td>
            <td>{{ $fppp->sealant_usage }}</td>
            <td>{{ $fppp->delivery_to_expedition }}</td>
            <td>{{ $fppp->note }}</td>
            <td>{{ $fppp->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
