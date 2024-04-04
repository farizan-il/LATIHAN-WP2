<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1579547944212-c4f4961a8dd8?q=80&w=2139&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
        }

        table {
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        th, td {
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: purple;
        }

        a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <?= $kode; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td>
                        <?= $sks; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>

</html>
