<?php include ('header.php'); ?>
<?include('sidebar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="col-md-9">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
