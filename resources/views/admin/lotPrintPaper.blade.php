<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        
        .table-1 td {
            height: 50px;
        }
        
        .table-2,
        .table-3,
        .table-4 {
            margin-top: 15px;
        }
        
        .table-4 tr th {
            height: 40px;
            background-color: rgba(0, 67, 138, 0.1);
            color: #00438a;
        }
        
        .table-3 tr td:first-child {
            text-align: center;
        }
        
        .table-3 tr th {
            height: 40px;
        }
        
        td {
            height: 25px;
        }
        
        .table {
            width: 793px;
            height: 1122px;
        }
    </style>
</head>

<body onload="onLoad()">
    <section class="table">
        <table style="width:100%" class="table-1">
            <tr>
                <th style="width:40%"></th>
                <th style="width:20%">
                </th>
                <th style="width:10%; background-color: #00438a; color: #fff; padding: 5px;">SENDER</th>
                <th style="width:10%"></th>
                <th style="width:10%; background-color: #00438a; color:#fff; padding: 5px;">RECEIVER</th>
                <th style="width:10%"></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="2"></td>
                <td colspan="2"></td>

            </tr>

        </table>
        <table style="width:100%" class="table-2">
            <tr>
                <th style="width:40%; text-align: start; padding: 5px;"> Machine No:</th>
                <th style="width:8%">
                </th>
                <th style="width:12%">DATE
                </th>
                <th style="width:10%; ">TIME</th>
                <th style="width:20%">OPERATOR NAME</th>
                <th style="width:10%; ">WEIGHT</th>

            </tr>
            <tr>
                <th style="text-align: start; padding: 5px;">Lot NO:</th>
                <td rowspan="2" style=" text-align: center; padding: 5px; background-color: #00438a; color:#fff;"> START END</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <th style=" text-align: start; padding: 5px;">Total GR Hr:</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <table style="width:100%" class="table-3 ">
            <thead>
                <tr>
                    <th style="width:10%; color: #00438a;">No.
                    </th>
                    <th style="width:30%; background-color: rgba(0,67,138,0.1); color: #00438a;">Packet No.
                    </th>
                    <th style="width:8%; background-color: rgba(0,67,138,0.1); color: #00438a;">
                        Origin Height
                    </th>
                    <th style="width:12%; background-color: rgba(0,67,138,0.1); color: #00438a;">
                        Final Height
                    </th>
                    <th style="width:10%; background-color: rgba(0,67,138,0.1); color: #00438a;">Growth
                    </th>
                    <th style="width:40%; color: #00438a;" colspan="7">QR
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?= isset($data[0]) ? $data[0]['lot_master']['name'] .'-'.$data[0]['id'] : ''; ?></td>
                    <td><?= isset($data[0]) ? $data[0]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?= isset($data[1]) ? $data[1]['lot_master']['name'] .'-'.$data[1]['id'] : ''; ?></td>
                    <td><?= isset($data[1]) ? $data[1]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><?= isset($data[2]) ? $data[2]['lot_master']['name'] .'-'.$data[2]['id'] : ''; ?></td>
                    <td><?= isset($data[2]) ? $data[2]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                
                
                </tr>
                <tr>
                    <td>4</td>
                    <td><?= isset($data[3]) ? $data[3]['lot_master']['name'] .'-'.$data[3]['id'] : ''; ?></td>
                    <td><?= isset($data[3]) ? $data[3]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                
                
                </tr>
                <tr>
                    <td>5</td>
                    <td><?= isset($data[4]) ? $data[4]['lot_master']['name'] .'-'.$data[4]['id'] : ''; ?></td>
                    <td><?= isset($data[4]) ? $data[4]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                
                
                </tr>
                <tr>
                    <td>6</td>
                    <td><?= isset($data[5]) ? $data[5]['lot_master']['name'] .'-'.$data[5]['id'] : ''; ?></td>
                    <td><?= isset($data[5]) ? $data[5]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                
                
                </tr>
                <tr>
                    <td>7</td>
                    <td><?= isset($data[6]) ? $data[6]['lot_master']['name'] .'-'.$data[6]['id'] : ''; ?></td>
                    <td><?= isset($data[6]) ? $data[6]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                    <td></td>
                    <td></td>
                    <td></td>
                
                
                
                </tr>
                <tr>
                    <td>8</td>
                    <td><?= isset($data[7]) ? $data[7]['lot_master']['name'] .'-'.$data[7]['id'] : ''; ?></td>
                    <td><?= isset($data[7]) ? $data[7]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td style="width:4.1%;">
                
                    </td>
                    <td style="width:4.1%;">
                
                    </td>
                    <td style="width:4.1%;">
                
                    </td>
                    <td style="width:4.1%;">
                
                    </td>
                    <td style="width:4.1%;">
                
                    </td>
                    <td style="width:4.1%;">
                
                    </td>
                    <td style="width:4.1%;">
                
                    </td>
                
                
                </tr>
                <tr>
                    <td>9</td>
                    <td><?= isset($data[8]) ? $data[8]['lot_master']['name'] .'-'.$data[8]['id'] : ''; ?></td>
                    <td><?= isset($data[8]) ? $data[8]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                </tr>
                <tr>
                    <td>10</td>
                    <td><?= isset($data[9]) ? $data[9]['lot_master']['name'] .'-'.$data[9]['id'] : ''; ?></td>
                    <td><?= isset($data[9]) ? $data[9]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                </tr>
                <tr>
                    <td>11</td>
                    <td><?= isset($data[10]) ? $data[10]['lot_master']['name'] .'-'.$data[10]['id'] : ''; ?></td>
                    <td><?= isset($data[10]) ? $data[10]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                </tr>
                <tr>
                    <td>12</td>
                    <td><?= isset($data[11]) ? $data[11]['lot_master']['name'] .'-'.$data[11]['id'] : ''; ?></td>
                    <td><?= isset($data[11]) ? $data[11]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                    <td></td>
                    <td></td>
                    <td></td>
                
                </tr>
                <tr>
                    <td>13</td>
                    <td><?= isset($data[12]) ? $data[12]['lot_master']['name'] .'-'.$data[12]['id'] : ''; ?></td>
                    <td><?= isset($data[12]) ? $data[12]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                    <td></td>
                    <td></td>
                    <td></td>
                
                </tr>
                <tr>
                    <td>14</td>
                    <td><?= isset($data[13]) ? $data[13]['lot_master']['name'] .'-'.$data[13]['id'] : ''; ?></td>
                    <td><?= isset($data[13]) ? $data[13]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                
                    <td colspan="3" style="text-align: end; padding: 5px; border: none; background-color: #00438a; color:#fff;">
                        Av.Gr.Rt.
                    </td>
                    <td colspan="4">
                
                    </td>
                
                </tr>
                <tr>
                    <td>15</td>
                    <td><?= isset($data[14]) ? $data[14]['lot_master']['name'] .'-'.$data[14]['id'] : ''; ?></td>
                    <td><?= isset($data[14]) ? $data[14]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="3" style=" text-align: end; padding: 5px; border: none; background-color: #00438a; color:#fff;">
                        AV.Growth
                    </td>
                    <td colspan="4">
                
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td><?= isset($data[15]) ? $data[15]['lot_master']['name'] .'-'.$data[15]['id'] : ''; ?></td>
                    <td><?= isset($data[15]) ? $data[15]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="7" style=" text-align: center; ">
                        Note:
                    </td>
                
                </tr>
                <tr>
                    <td>17</td>
                    <td><?= isset($data[16]) ? $data[16]['lot_master']['name'] .'-'.$data[16]['id'] : ''; ?></td>
                    <td><?= isset($data[16]) ? $data[16]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="7" style=" border: none; border-bottom: 1px dotted black;">
                        >
                    </td>
                
                </tr>
                <tr>
                    <td>18</td>
                    <td><?= isset($data[17]) ? $data[17]['lot_master']['name'] .'-'.$data[17]['id'] : ''; ?></td>
                    <td><?= isset($data[17]) ? $data[17]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="7" style=" border: none; border-bottom: 1px dotted black;">
                        >
                    </td>
                
                </tr>
                <tr>
                    <td>19</td>
                    <td><?= isset($data[18]) ? $data[18]['lot_master']['name'] .'-'.$data[18]['id'] : ''; ?></td>
                    <td><?= isset($data[18]) ? $data[18]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="7" style="  border: none; border-bottom: 1px dotted black;">
                        >
                    </td>
                
                </tr>
                <tr>
                    <td>20</td>
                    <td><?= isset($data[19]) ? $data[19]['lot_master']['name'] .'-'.$data[19]['id'] : ''; ?></td>
                    <td><?= isset($data[19]) ? $data[19]['height'] : ''; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="7" style="   border: none; border-bottom: 1px dotted black;">
                        >
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width:100%" class="table-4">
            <thead>
                <tr>
                    <th style="width:10%; text-align: center;  ">DATE</th>
                    <th style="width:30%">Time
                    </th>
                    <th style="width:8%">Temp</th>
                    <th style="width:12%">Power
                    </th>
                    <th style="width:10%; ">Cham Base</th>
                    <th style="width:15%">AXIS</th>
                    <th style="width:25%; ">Note</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>

                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>

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