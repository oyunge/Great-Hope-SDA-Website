<html>
    <head>
        <title>Create Event</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="/sermons" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="title">Sermon Title</label>
                        <input type="text" class="form-control" id="title" name="title"  placeholder="Sermon Title">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="sermonFrom">Sermon From</label>
                        <input type="text" class="form-control" id="sermonFrom" name="sermonFrom" placeholder="sermonFrom">
                    </div>
                </div>
              
                <div class="col-12">
                    <div class="form-group">
                        <label for="categories">Categories</label>
                        <textarea class="form-control" name="categories" id="categories" cols="30" rows="10" placeholder="categories"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn crose-btn mt-15" value="" >Submit Now</button>
                </div>
            </div>
        </form>

    </body>
</html>