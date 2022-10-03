<table>
    <thead>
        <tr>
            <th><b>NO</b></th>
            <th><b>NO_FPPP</b></th>
            <th><b>TIPE_FPPP</b></th>
            <th><b>TAHAP_PRODUKSI</b></th>
            <th><b>NO_QUOTATION</b></th>
            <th><b>TANGGAL</b></th>
            <th><b>DIVISI</b></th>
            <th><b>NAMA_APLIKATOR</b></th>
            <th><b>NAMA_PROYEK</b></th>
            <th><b>ALAMAT_PROYEK</b></th>
            <th><b>SALES/SITE_MANAGER</b></th>
            <th><b>STATUS_ORDER</b></th>
            <th><b>REVISI_DARI_FPPP_NO</b></th>
            <th><b>KETERANGAN_LAIN-LAIN</b></th>
            <th><b>WAKTU_PRODUKSI</b></th>
            <th><b>WARNA</b></th>
            <th><b>KACA</b></th>
            <th><b>JENIS_KACA</b></th>
            <th><b>DEADLINE_PENGEMBALIAN</b></th>
            <th><b>PENGGUNAAN_PETI</b></th>
            <th><b>PENGGUNAAN_SEALANT</b></th>
            <th><b>PENGIRIMAN_KE_EKSPEDISI</b></th>
            <th><b>CATATAN</b></th>
        </tr>
    </thead>
    <br>
    <tbody>
        @foreach ($fppps as $fppp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $fppp->fppp_no }}</td>
                <td>{{ $fppp->fppp_type }}</td>
                <td>{{ $fppp->production_phase }}</td>
                <td>{{ $fppp->quotation->DataQuotation->no_quotation ?? '' }}</td>
                <td>{{ \Carbon\Carbon::parse($fppp->created_at)->translatedFormat('d F Y') }}</td>
                <td>ASTRAL</td>
                <td>{{ $fppp->quotation->Aplikator->aplikator }}</td>
                <td>{{ $fppp->quotation->DataQuotation->nama_proyek ?? '' }}</td>
                <td>{{ $fppp->quotation->DataQuotation->alamat_proyek ?? '' }}</td>
                <td>{{ $fppp->user->name }}</td>
                <td> {{ $fppp->order_status }} </td>
                <td>{{ $fppp->fppp_revisino }} </td>
                <td>{{ $fppp->fppp_keterangan }} </td>
                <td>{{ $fppp->production_time }} hari</td>
                <td>{{ $fppp->color }}</td>
                <td> {{ ucfirst($fppp->glass) }} </td>
                <td>{{ $fppp->glass_type }}</td>
                <td>{{ $fppp->retrieval_deadline }}</td>
                <td> {{ $fppp->box_usage }} </td>
                <td> {{ $fppp->sealant_usage }}</td>
                <td> {{ $fppp->delivery_to_expedition }} </td>
                <td>{!!$fppp->note!!}</td>
            </tr>
        @endforeach
    </tbody>
</table>
