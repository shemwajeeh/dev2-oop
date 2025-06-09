<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Kingdom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="card border-primary w-50 mt-5 mx-auto p-5 shadow">
        <div class="card-body">
            <div class="card-title mb-5">
                <h1 class="display-6 fw-bold text-primary text-center">Animal Kingdom</h1>
            </div>

            <form action="" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label fw-bold">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="species" class="form-label fw-bold">Species:</label>
                        <select name="species" id="species" class="form-select">
                            <option hidden>Select a Species:</option>
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                            <option value="Bird">Bird</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="breed" class="form-label fw-bold">Breed:</label>
                        <input type="text" name="breed" id="breed" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" name="btn_submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
        if (isset($_POST['btn_submit'])){
            $name       = $_POST['name'];
            $species    = $_POST['species'];
            $breed      = $_POST['breed'];

            if ($species == 'Dog'){
                require_once 'Dog.php';
                $animal = new Dog($name, $breed);
            } elseif ($species == 'Cat'){
                require_once 'Cat.php';
                $animal = new Cat($name, $breed);
            } else {
                require_once 'Bird.php';
                $animal = new Bird($name, $breed);
            }
    ?>
            <div class="card w-50 mx-auto mt-3 p-5 shadow border-danger">
                <div class="card-title">
                    <h1 class="display-6 fw-bold text-danger"><?= $animal->getName(); ?></h1>
                </div>
                <div class="card-text">
                    <?= $animal->introduction(); ?> <br>
                    <p class="text-danger fst-italic fs-3 mt-2">
                        <?= $animal->speak(); ?>
                    </p>
                </div>
            </div>
    <?php
        }
    ?>
</body>
</html>