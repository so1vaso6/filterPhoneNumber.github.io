<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>FILTER NUMBER</title>
</head>

<body>
    <div id="wrapper">
        <div id="container">
            <div class="row justify-content-around">
                <form id="form_reg" class="col-md-6 bg-light p-3 my-3" action="result.php" method="post">
                    <h1 class="text-center text-uppercase h3 py-3">FILTER DUPLICATE PHONE NUMBER</h1>
                    <div class="form-group">
                        <label for="listA">LIST A</label>
                        <input type="text" name="listA" id="listA" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="listB">LIST B</label>
                        <input type="text" name="listB" id="listB" class="form-control" required>
                    </div>
                    <input type="submit" value="FILTER" class="btn-primary btn btn-block p-2 text-uppercase" name="btn-reg">
                </form>
            </div>
        </div>
    </div>
</body>

</html>