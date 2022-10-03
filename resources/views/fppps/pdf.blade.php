<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .flex {
        display: flex;
        justify-content: center;
        width: screen;
    }
</style>

<body style="width: screen;">
    <h2 style="text-align:center">FORM PAKET PERMINTAAN PRODUKSI</h2>
    <h4 style="text-align:center">No. <b>{{ $fppp->fppp_no }}</b></h4>
    <h4 style="text-align:center">Mockup/Produksi Tahap <b>{{ $fppp->production_phase }}</b></h4>
    <br>
    <p>Tipe FPPP :
        @if ($fppp->fppp_type == 'produksi')
            <b {{ $fppp->fppp_type == 'produksi' ? 'selected' : '' }} value="produksi">Produksi</b>
        @endif
        @if ($fppp->fppp_type == 'memo')
            <b {{ $fppp->fppp_type == 'memo' ? 'selected' : '' }} value="memo">Memo</b>
        @endif
    </p>
    <p>No. Quotation : <b>{{ $fppp->quotation->DataQuotation->no_quotation ?? '' }}</b></p>
    <p>Tanggal : <b>{{ \Carbon\Carbon::parse($fppp->created_at)->translatedFormat('d F Y') }}</b></p>
    <p>Divisi : <b>ASTRAL</b></p>
    <p>Nama Aplikator : <b>{{ $fppp->quotation->Aplikator->aplikator }}</b></p>
    <p>Nama Proyek : <b>{{ $fppp->quotation->DataQuotation->nama_proyek }}</b></p>
    <p>Alamat Proyek : <b>{{ $fppp->quotation->DataQuotation->alamat_proyek }}</b></p>
    <p>Sales/Site Manager : <b>{{ $fppp->user->name }}</b> </p>
    <p>Status Order :
        <b>{{ ucfirst($fppp->order_status) }}</b>
        @if ($fppp->order_status == 'revisi')
            <b {{ $fppp->order_status == 'revisino' ? 'selected' : '' }} value="revisino">dari FPPP No.
                {{ $fppp->fppp_revisino }}</b>
        @endif
        @if ($fppp->order_status == 'lain-lain')
            <b {{ $fppp->order_status == 'lainlain' ? 'selected' : '' }} value="lainlain"><p>Keterangan : </p></b>
            {!! $fppp->fppp_keterangan !!}
        @endif
    </p>
    <p>Waktu Produksi : <b>{{ $fppp->production_time }} Hari</b></p>
    <hr>
    <h4>PAKET DATA PRODUKSI</h4>
    <p>Warna : <b>{{ $fppp->color }}</b></p>
    <p>Kaca :
        @if ($fppp->glass == 'included')
            <b {{ $fppp->glass == 'included' ? 'selected' : '' }} value="included">Included</b>
        @endif
        @if ($fppp->glass == 'excluded')
            <b {{ $fppp->glass == 'excluded' ? 'selected' : '' }} value="excluded">Excluded</b>
        @endif
        @if ($fppp->glass == 'included & excluded')
            <b {{ $fppp->glass == 'included_excluded' ? 'selected' : '' }} value="included_excluded">Included &
                Excluded</b>
        @endif
    </p>
    <p>Jenis Kaca : <b>{{ $fppp->glass_type }}</b></p>
    <hr>
    <h4>PENGIRIMAN</h4>
    <p>Deadline Pengambilan : <b>{{ \Carbon\Carbon::parse($fppp->retrival_deadline)->translatedFormat('d F Y') }}</b>
    </p>
    <p>Penggunaan Peti : <b>{{ ucfirst($fppp->box_usage) }}</b> </p>
    <p>Penggunaan Sealant : <b>{{ ucfirst($fppp->sealant_usage) }}</b> </p>
    <p>Pengiriman ke Ekspedisi : <b>{{ ucfirst($fppp->delivery_to_expedition) }}</b> </p>
    <p>Catatan : <b>{!! $fppp->note !!}</b></p>
    <p>Banyak Attachment : {{ $fppp->files->count() }}</p>


</body>

</html>
