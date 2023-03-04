<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel 8 Barcode Demo - codeanddeploy.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <style>
            @page { size: 52.5mm 30mm portrait;
                padding: 0 !important;
                margin: 0 !important;
             }
            body{
                padding: 0 !important;
                margin: 0 !important;
            }
        </style>
    </head>

    <body onload="window.print()">
        @foreach ($students as $key => $stu)
            
            <div style="font-size:10px;width:100%;padding:2px;min-height:100px">
                <b>{{ $user->name }} - {{ $key+1 }}</b><br/>
                    {{-- <span style="float:right">Pcs: {{ $data->pcs }}</span></b><br> --}}
                <b>L x W : {{ $stu['length'] }} x {{ $stu['width'] }}</b><br>
                Height : {{ $stu['height'] }}<br>
                weight : {{ $stu['weight'] }}<br>
                Date : {{ date('d/m/Y') }}<br>
                <span style="float:right;margin-top:-70px;margin-right:5px">{!! DNS2D::getBarcodeSVG("$user->name", 'QRCODE') !!}</span>
            </div>    
        @endforeach
     </body>
</html>