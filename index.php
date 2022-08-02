<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Personil</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Personil</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran personil baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="form_daftar.php">Daftar Baru</a></li>
            <li><a href="waktudaftar.php">Daftar Baru dan Waktu</a></li>
        </ul>
    </nav>

    </body>
</html>