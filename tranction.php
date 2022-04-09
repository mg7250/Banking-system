<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
</head>

<body>

    <div class="container p-0">
        <div class="card px-4">
            <a style="" href="welcome.php"class="btn btn-dark">Back</a>
            <p class="h8 py-3">Payment Details</p>
            <form action="trans.php" method="post">
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Person Name</p> <input class="form-control mb-3" type="text"
                                placeholder="Enter the Name" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Account No</p> <input class="form-control mb-3" type="text"
                                name="acctno" placeholder="1234 5678 435678">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Amount</p> <input class="form-control mb-3" type="number"
                                name="amt" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Enter Username</p> <input class="form-control mb-3" type="text" name="username"
                                placeholder="To username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">password</p> <input class="form-control mb-3 pt-2 " type="password"
                                name="password" placeholder="enter your password">
                        </div>
                    </div>
                    <div class="col mx-auto">
                        <button type="submit" class="btn btn-block btn-primary">Tranfer Money</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>