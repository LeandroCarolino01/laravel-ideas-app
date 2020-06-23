<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Idea Item</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">
        {{ $idea->name }}
        </h1>
       <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{ $idea->description}}
            </div>
        </div>
            </div>
       </div>
    </div>
</body>
</html>