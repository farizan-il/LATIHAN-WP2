<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
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

        .centered-form {
            padding: 20px;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            box-shadow: none;
        }

        select.form-control {
            appearance: none;
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            box-shadow: none;
        }

        .input-group-text {
            background: transparent;
            border: none;
            border-bottom: 1px solid #ced4da;
        }

        .btn-submit {
            background-image: linear-gradient(to right, purple, red);
            border: none;
            border-radius: 20px;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 centered-form">
                <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
                    <h3 class="text-center mb-5 font-weight-bold">Input Data Mata Kuliah</h3>
                    
                    <!-- Menampilkan pesan kesalahan -->
                    <?php 
                        echo validation_errors(
                            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>oops... </strong>',
                            '</div>'
                        ); 
                    ?>
                    
                    <div class="form-group mt-5 mb-4">
                        <label for="kode">Kode Mata Kuliah</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-code"></i></span>
                            </div>
                            <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode [min 3]" required>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="nama">Nama Mata Kuliah</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Matkul [min 3]" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                            </div>
                            <select class="form-control" id="sks" name="sks" required>
                                <option value="">Pilih SKS</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-submit px-5 py-2 font-weight-bold">Kirim Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
