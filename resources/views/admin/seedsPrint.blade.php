<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel 8 Barcode Demo - codeanddeploy.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <style>
            /*@page { size: 52.5mm 30mm portrait;
                padding: 0 !important;
                margin: 0 !important;
             }*/
             @page { size: 50mm 27.5mm portrait;
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
        <div style="font-size:10px;width:100%;padding:5%;min-height:100px;margin-left:4%;margin-top:-14.4px;font-weight:500">
                {{ $data->name }} - {{ $id }}<br/>
                    {{-- <span style="float:right">Pcs: {{ $data->pcs }}</span></b><br> --}}
                L x W : {{ $data->length }} x {{ $data->width }}<br>
                Height : {{ $data->height }}<br>
                Weight : {{ $data->weight }}<br>
                Date : {{ date('d/m/Y') }}<br>
                {{-- <span style="float:right;margin-top:-60px;margin-right:25px">{!! DNS2D::getBarcodeSVG("$data->name", 'QRCODE',2.7,2.7) !!}</span> --}}
                <span style="float:right;margin-top:-60px;margin-right:25px">{!! DNS2D::getBarcodeSVG("$id", 'QRCODE',2.7,2.7) !!}</span>
        </div>
       
    </body>
</html>

