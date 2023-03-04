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
        <script>
            function onLoad(){
                window.print()
                /*setTimeout(function () { window.print(); }, 500);
                window.onfocus = function () { setTimeout(function () { window.close(); }, 500); }*/
                /*window.addEventListener('afterprint', (event) => {
                    window.close();
                });*/
            }
        </script>
    </head>

    <body onload="onLoad()">
        <div style="font-size:10px;width:100%;padding:3%;min-height:100px;margin-left:4%;margin-top:-8px;font-weight:500;line-height:11px">
                {{ $data['name'] }}
                <span style="float:right;margin-right:30px">Pcs: {{ $data['pcs'] }}</span></b><br>
                A.Height(M) : {{ $data['avg_height'] }}<br>
                A.L x W : {{ $data['avg_length'] }} x {{ $data['avg_width'] }}<br>
                A.Weight(Ct) : {{ $data['avg_weight'] }}<br>
                Weight(Ct) : {{ $data['weight'] }}<br>
                Date : {{ date('d/m/Y') }}<br>
                {{-- <span style="float:right;margin-top:-60px;margin-right:25px">{!! DNS2D::getBarcodeSVG("$data->name", 'QRCODE',2.7,2.7) !!}</span> --}}
                <span style="float:right;margin-top:-50px;margin-right:30px">{!! DNS2D::getBarcodeSVG("$data[id]", 'QRCODE',2.5,2.5) !!}</span>
        </div>
       
    </body>
</html>