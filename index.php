<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title> App-IdeaBin2Dec </title>
</head>
<body>

    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh">

        <div class="row d-flex flex-column">

            <div class="col">
                <form action="#" method="post">

                    <div class="mb-3">
                        <label for="bin_digits" class="form-label"> Binário: </label>
                        <input class="form-control" maxlength="8" name="bin_digits" id="bin_digits" type="text" placeHolder="01010101">
                    </div>

                    <div class="mb-3 d-flex justify-content-center">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Converter</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col d-flex justify-content-center">
                <?php
                    require('./BinToDec.php');
                    require('./BinaryValidation.php');
                    use Bin2Dec\BinToDec;
                    use Bin2Dec\BinaryValidation;

                    $binary = isset($_POST['bin_digits'])? $_POST['bin_digits'] : null;

                    if($binary) {

                        if(BinaryValidation::validate($binary)) {
                            $decimal = BinToDec::BinToDec($binary);
                            $div = sprintf("<span style=\"color: green;\">Resultado: %s </span>", $decimal);
                            echo($div);
                        } else {
                            $div = "<span style=\"color: red;\"> A entrada do campo tem valores diferentes de 0 ou 1 </span>";
                            echo($div);
                        }

                    } else {
                        $div = "<span style=\"color: blue;\"> Nenhum número binário foi digitado! </span>";
                        echo($div);
                    }
                ?>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
