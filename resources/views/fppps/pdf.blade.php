<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .flex{
        display: flex;
        justify-content: center;
        width:screen;
    }
</style>

<body style="width: screen;">
    <h2 style="text-align:center">FORM PAKET PERMINTAAN PRODUKSI</h2>
    <h4 style="text-align:center">No. <b>{{ $fppp->fppp_no }}</b></h4>
    <h4 style="text-align:center">Mockup/Produksi Tahap <b>{{ $fppp->production_phase }}</b></h4>
    <br>
    <p>No. Quotation : <b>{{ $fppp->quotation->no_quotation ?? '' }}</b></p>
    <p>Tanggal : <b>{{ \Carbon\Carbon::parse($fppp->created_at)->translatedFormat('d F Y') }}</b></p>
    <p>Divisi : <b>ASTRAL</b></p>
    <p>Nama Aplikator : <b>{{$fppp->quotation->Aplikator->aplikator}}</b></p>
    <p>Nama Proyek : <b>(CONTOH) BINA BAKTI OFFICE TAHAP 2</b></p>
    <p>Alamat Proyek : <b>(CONTOH) JAKARTA</b></p>
    <p>Sales/Site Manager : <b>{{$fppp->user->name}}</b> </p>
    <p>Status Order :
        @if ($fppp->order_status == 'baru')
            <b {{ $fppp->order_status == 'baru' ? 'selected' : '' }} value="baru">Baru</b>
        @endif
        @if ($fppp->order_status == 'tambahan')
            <b {{ $fppp->order_status == 'tambahan' ? 'selected' : '' }} value="tambahan">Tambahan</b>
        @endif
        @if ($fppp->order_status == 'revisino')
            <b {{ $fppp->order_status == 'revisino' ? 'selected' : '' }} value="revisino">Revisi dari FPPP No.
                {{ $fppp->fppp_revisino }}</b>
        @endif
        @if ($fppp->order_status == 'lainlain')
            <b {{ $fppp->order_status == 'lainlain' ? 'selected' : '' }} value="lainlain">Lain-lain</b>
            <p>Keterangan : </p>
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
        @if ($fppp->glass == 'included_excluded')
            <b {{ $fppp->glass == 'included_excluded' ? 'selected' : '' }} value="included_excluded">Included &
                Excluded</b>
        @endif
    </p>
    <p>Jenis Kaca : <b>{{ $fppp->glass_type }}</b></p>
    <hr>
    <h4>PENGIRIMAN</h4>
    <p>Deadline Pengambilan : <b>{{ \Carbon\Carbon::parse($fppp->retrival_deadline)->translatedFormat('d F Y') }}</b>
    </p>
    <p>Penggunaan Peti :
        @if ($fppp->box_usage == '0')
            <b {{ $fppp->box_usage == '0' ? 'selected' : '' }} value="0">
                Tidak</b>
        @else
            <b {{ $fppp->box_usage == '1' ? 'selected' : '' }} value="1">
                Ya</b>
        @endif
    </p>
    <p>Penggunaan Sealant :
        @if ($fppp->sealant_usage == '0')
            <b {{ $fppp->sealant_usage == '0' ? 'selected' : '' }} value="0">Tidak</b>
        @else
            <b {{ $fppp->sealant_usage == '1' ? 'selected' : '' }} value="1">Ya</b>
        @endif
    </p>
    <p>Pengiriman ke Ekspedisi :
        @if ($fppp->delivery_to_expedition == '0')
            <b {{ $fppp->delivery_to_expedition == '0' ? 'selected' : '' }} value="0">Tidak</b>
        @else
            <b {{ $fppp->delivery_to_expedition == '1' ? 'selected' : '' }} value="1">Ya</b>
        @endif
    </p>
    <p>Catatan : <b>{!! $fppp->note !!}</b></p>
    <p>Banyak Attachment : {{$fppp->files->count()}}</p>


</body>

</html>
