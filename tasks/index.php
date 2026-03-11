<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IndexTasks</title>
        <?php require_once 'create.php'; ?>
    </head>

    <body>
        <?php require_once '../head.php'; ?>

        <div class="container">
            <h1>Nieuwe Taak</h1>

            <form action="../app/Http/Controllers/tasksController.php" method="POST">
                <div class="form-group">
                    <label for="titel">Titel:</label>
                    <input type="text" name="titel" id="titel" class="form-input">
                </div>
                <div class="form-group">
                    <label for="beschrijving">Beschrijving:</label>
                    <textarea name="beschrijving" id="beschrijving" class="form-input" rows="4"></textarea>
                </div>
        
            </form>
        </div>

    </body>
</html>