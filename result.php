<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>

    <link rel= "stylesheet"  href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin= "anonimo" >
</head>
<body>
    
    <div class="p-5 m-5 border border-2 w-25">
        <h2>
            Il testo inserito è:
        </h2>

        <p>
            <?php echo $_POST['text']?>
        </p>
        <h4>
            Lunghezza del paragrafo: <?php echo strlen($_POST['text']); ?>
        </h4>

        <p>
            <?php echo 
                    str_replace($_POST['badWord'], '***'  , $_POST['text']);
            ?>
        </p>

        <h4>
            Lunghezza del paragrafo: <?php echo strlen(str_replace($_POST['badWord'], '***'  , $_POST['text'])); ?>
        </h4>

    </div>
</body>
</html>