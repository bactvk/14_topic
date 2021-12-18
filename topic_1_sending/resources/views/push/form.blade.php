<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Application</title>

</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-2">
        <form action="" method="POST">
            @csrf
            <label for="">Message</label>
            <br>
            <textarea name="contents" id="" cols="33" rows="10"></textarea>

            <br>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>