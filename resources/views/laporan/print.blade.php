
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>laporan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            body{
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color:#333;
                text-align:left;
                font-size:18px;
                margin:0;
                margin-top: 17px
            }
            .container{
                margin:0 auto;
                margin-top:35px;
                padding:40px;
                width:750px;
                height:auto;
                background-color:#fff;
            }
            caption{
                font-size:28px;
                margin-bottom:15px;
            }
            table{
                border:1px solid #333;
                border-collapse:collapse;
                margin:0 auto;
                width:740px;
            }
            td, tr, th{
                padding:12px;
                border:1px solid #333;
                width:185px;
            }
            th{
                background-color: royalblue;
                color: white;
            }
            h4, p{
                margin:0px;
            }
            caption{
                color: black;
                font-weight: bold;
                font-family: 'Courier New', Courier, monospace;
            }
        </style>
    </head>
    <body>
        @foreach ($ticketing as $data)
        <div class="container">
            <table>
                <caption>
                  LAPORAN SIM TICKETING
                </caption>
                <thead>
                    <tr>
                        <th colspan="3">Transaksi Ticketing <strong>{{ $data->id }}</strong></th>
                        <th>{{ $data->created_at->format('D, d M Y') }}</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4>Perusahaan: </h4><br>
                            <p>PT.MGI ASPAC.<br>
                                Jl.Bengawan No.76, Kec.Bandung Wetan<br>
                                Kota Bandung,Jawa Barat 4014<br>
                                08815733482<br>
                                marchisinise@gmail.com
                            </p>
                        </td>

                        <td colspan="2">
                            <h4>Ticketing: </h4><br>
                            <p><b>Kode Request: </b><br>
                                {{ $data->jenisrequest->kode }} <br>
                              <b> Jenis Request:  </b> <br>
                              {{ $data->jenisrequest->name }}<br>
                              <b> Nama Subject: </b> <br>
                               {{ $data->nama_subject }}<br>
                              <b> Status: </b><br>{{ $data->nama_stat }}  <br>
                             <b> Customer: </b> <br> {{ $data->customer->name }} <br>

                              <b> Department: </b> <br> {{ $data->department->name }} <br>




                            </p>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Tanggal Request</th>
                        <th>Tanggal Selesai</th>
                        <th>Nama PIC</th>
                        <th>Deskripsi</th>
                    </tr>
                    <tr>
                        <td>{{ $data->tanggal_request }}</td>
                        <td>{{ $data->tanggal_selesai }}</td>
                        <td>{{ $data->nama_pic }} </td>
                        <td>{{ $data->deskripsi }} </td>

                    </tr>

                </tbody>
            </table>

        </div>
        @endforeach
    </body>
    </html>


    {{-- <i class="bi bi-printer-fill"></i> --}}
