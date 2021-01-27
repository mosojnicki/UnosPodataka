<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isporuke - fakture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form action="unos.php" method="post" name="forma">
            <!-- sr-only služi da polje bude hidde -->
            <!-- <div class="form-group sr-only">
                <label for="ime">IdStudent:</label>
                <input type="text" class="form-control" name="idstudent" placeholder="">
            </div> -->
            <div class="form-group">
                <label for="idIsporuke">idIsporuke:</label>
                <input type="text" class="form-control" name="idIsporuke" placeholder="Unesi idIsporuke">
            </div>
            <div class="form-group">
                <label for="idPosla">idPosla:</label>
                <input type="text" class="form-control" name="idPosla" placeholder="Unesi idPosla">
            </div>
            <div class="form-group">
                <label for="opis">Opis:</label>
                <textarea name="opis" id="opis" cols="30" rows="2" class="form-control"
                    placeholder="Upiši opis"></textarea>
            </div>
            <div class="form-group">
                <label for="brStrExp">brStrExp:</label>
                <input type="text" class="form-control" name="brStrExp" placeholder="Unesi broj eksportiranih stranica">
            </div>
            <div class="form-group">
                <label for="brDocExp">brDocExp:</label>
                <input type="text" class="form-control" name="brDocExp" placeholder="Unesi broj eksportiranih dokumenata">
            </div>
            <div class="form-group">
                <label for="brStrSken">brStrSken:</label>
                <input type="text" class="form-control" name="brStrSken" placeholder="Unesi broj skeniranih stranica">
            </div>
            <div class="form-group">
                <label for="brDocSken">brDocSken:</label>
                <input type="text" class="form-control" name="brDocSken" placeholder="Unesi broj skeniranih dokumenata">
            </div>
            
            <div class="form-group">
                <button type="reset" class="btn btn-danger">Obriši</button>
                <button type="submit" class="btn btn-success">Spremi</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>
