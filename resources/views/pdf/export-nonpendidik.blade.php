<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Tenaga Non Pendidik</title>
</head>
<body>
    <table border="1" style="border collapse: collapse; margin: auto; width: 500px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->status_kepegawaian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
