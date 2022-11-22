<?php
require_once("../CRUD/php/component.php");
require_once("../CRUD/php/operations.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <script src="https://kit.fontawesome.com/f570cc1c68.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <!-- .container + tab -->
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="POST" class="w-50">
                    <!--
                    <div class="py-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-warning"><i class="fa-solid fa-id-badge"></i></span>
                            <input type="text" autocomplete="off" placeholder="ID" class="form-control" placeholder="Username" aria-label="Username">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-warning"><i class="fa-solid fa-book"></i></span>
                            <input type="text" autocomplete="off" placeholder="Book Name" class="form-control" placeholder="book_name" aria-label="Username">
                        </div>
                    </div> -->

                    <!-- merging id and book_publisher -->

                    <div class="row pt-2">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-warning"><i class="fa-solid fa-id-badge"></i></span>
                                <input type="text" autocomplete="off" placeholder="ID" class="form-control" placeholder="Username" aria-label="Username">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-warning"><i class="fa-solid fa-book"></i></span>
                                <input type="text" autocomplete="off" placeholder="Book Name" class="form-control" placeholder="book_name" name="book_name" id="book_name" aria-label="book_name">
                            </div>
                        </div>
                    </div>
                    <!-- ********************** -->
                    <div class="row pt-2">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-warning"><i class="fas fa-people-carry"></i></span>
                                <input type="text" name="book_publisher" id="book_publisher" autocomplete="off" placeholder="Publisher" class="form-control" placeholder="book_publisher" aria-label="book_publisher">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-warning"><i class="fas fa-dollar-sign"></i></span>
                                <input type="text" autocomplete="off" placeholder="Price" class="form-control" placeholder="book_price" id="book_price" name="book_price" aria-label="book_price">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-placement='bottom' title='Create'") ?>

                        <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-placement='bottom' title='Read'") ?>

                        <?php buttonElement("btn-Update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-placement='bottom' title='Update'") ?>

                        <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toggle='tooltip' data-placement='bottom' title='|Delete'") ?>
                    </div>
                </form>
            </div>
            <!-- bootstrap table -->
            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Book Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>1</td>
                            <td>php book</td>
                            <td>Complexo</td>
                            <td>109.85</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>c++ book</td>
                            <td>Complexo</td>
                            <td>119.85</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>java book</td>
                            <td>Complexo</td>
                            <td>159.85</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>js book</td>
                            <td>Complexo</td>
                            <td>179.85</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Adobe book</td>
                            <td>Complexo</td>
                            <td>109.85</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>