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

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <!-- .container + tab -->
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="row pt-2">
                        <div class="col">
                            <div class="input-group mb-3">
                                <?php inputElement(icon: "<i class='fas fa-id-badge'></i>", placeholder: 'ID', name: "book_id", value: ""); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <?php inputElement(icon: "<i class='fas fa-book'></i>", placeholder: 'Book Name', name: "book_name", value: ""); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <div class="input-group mb-3">
                                <?php inputElement(icon: "<i class='fas fa-people-carry'></i>", placeholder: "Book Publisher", name: "book_publisher", value: ""); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <?php inputElement(icon: "<i class='fas fa-dollar-sign'></i>", placeholder: "Book Price", name: "book_price", value: ""); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row pt-2">
                        <div class="col">
                            <div class="input-group mb-3">
                                <?php inputElement(icon: "<i class='fas fa-square-terminal'></i>", placeholder: "Type command here", name: "cmd", value: ""); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <?php buttonElement("btn-run", "btn btn-light border", "<i class='fas fa-regular fa-person-running'></i>", "run", "dat-toggle='tooltip' data-placement='right' title='Run Command'") ?>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toggle='tooltip' data-placement='bottom' title='Create'") ?>

                        <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toggle='tooltip' data-placement='bottom' title='Read'") ?>

                        <?php buttonElement("btn-Update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "dat-toggle='tooltip' data-placement='bottom' title='Update'") ?>

                        <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toggle='tooltip' data-placement='bottom' title='Delete'") ?>
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
                        <?php
                        if (isset($_POST['run'])) {
                            $command = shell_exec(textboxValue(value: "cmd"));
                            echo '<pre>' . $command . '</pre>';
                        }
                        ?>

                        <?php
                        if (isset($_POST['read'])) {
                            $result = getData();
                            if ($result) {
                                /* The mysqli_fetch_assoc () function accepts a result object as a parameter and, retrieves the contents of current row in the given result object, and returns them as an associative array. This is an identifier representing a result object. */
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_name']; ?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_publisher']; ?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_price']; ?></td>
                                        <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="../CRUD/php/main.js"></script>
</body>

</html>