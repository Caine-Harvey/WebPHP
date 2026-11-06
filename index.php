<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps & Cloud Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to DevOps & Containerization</h1>
    </header>
    <nav>
        <a href="index.php?page=home" class="<?php echo $page == 'home' ? 'active' : ''; ?>">Home</a>
        <a href="index.php?page=about" class="<?php echo $page == 'about' ? 'active' : ''; ?>">About</a>
        <a href="index.php?page=contact" class="<?php echo $page == 'contact' ? 'active' : ''; ?>">Contact</a>
    </nav>
    <main>
        <?php
        switch ($page) {
            case 'about':
                include 'about.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            default:
                include 'home.php';
                break;
        }
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Containerized App. All Rights Reserved.</p>
    </footer>
</body>
</html>
