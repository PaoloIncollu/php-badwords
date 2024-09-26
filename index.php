<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <link rel= "stylesheet"  href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin= "anonimo" >

</head>
<body>

<div class="p-5 m-5 border border-2 w-25">
    <form action="./result.php" method="POST" > 

        <div class="d-flex justify-content-between align-items-center w-100 mb-3">

            <label for="text" class="me-3">
                Inserisci testo a caso
            </label>

            <textarea name="text" id="text" >
            </textarea>
        </div>
       
        <div class="d-flex justify-content-between align-items-center  w-100">

            <label for="bad-word">
                Inserisci parola da censurare
            </label>

            
            <input name="badWord" type="text" id="bad-word">
        </div>
        
        <div class="d-flex justify-content-end w-100 pt-3">


            <button type="submit">
                Invia
            </button>
        </div>

        
    </form>
</div>
    
</body>
</html>