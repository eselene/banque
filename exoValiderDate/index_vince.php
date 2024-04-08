<!DOCTYPE html>
<html>

<head>
    <title>Validation Date</title><br>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>

<body>
    <div class='MonTableau'>
        <h1>Validation Date</h1>
        <form method="post">
            Entrez une date <input type="text" name="testDate" placeholder="jj/mm/aaaa">
            <input class="btn btn-sample" type="submit" name="btnValid" value="Tester">
            <div><?php echo $msg; ?></div>
        </form>
    </div>
</body>

</html>