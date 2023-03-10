<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel User</title>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr class="column">
                    <th class="row">Nama</th>
                    <th class="row">Alamat</th>
                    <th class="row">Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $value)
                    <tr class="column">
                        <td class="row">{{ $value->nama }}</td>
                        <td class="row">{{ $value->alamat }}</td>
                        <td class="row">{{ $value->no_telp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</body>
</html>