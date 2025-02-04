<?php include ('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- Full-screen container -->
    <div class="container-fluid" style="margin-top:50px;">
        <h1 class="mb-4">Welcome Admin!</h1>

        <!-- Table wrapper -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-start">ID</th>
                        <th class="text-start">Article Title</th>
                        <th class="text-start">Edit</th>
                        <th class="text-start">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($articles)): ?>
                        <?php foreach ($articles as $art): ?>
                            <tr class="align-middle">
                                <td style="padding: 15px;" class="text-start">1</td>
                                <td style="padding: 15px;" class="text-start"><?= $art->article_title; ?></td>
                                <td style="padding: 15px;" class="text-start">
                                    <a href="#" class="btn btn-primary btn-lg me-2">Edit</a>
                                </td>
                                <td style="padding: 15px;" class="text-start">
                                    <a href="#" class="btn btn-danger btn-lg">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-start">No Data Available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
<?php include ('footer.php'); ?>
