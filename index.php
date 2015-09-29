

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="www.mobhe.com">
    <title>Mobhe form </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="page-header text-center">Enter the records</h1>
                <form class="form-horizontal" role="form" method="post" action="index.php">
                    <div class="form-group">
                        <label for="image url" class="col-sm-2 control-label">Image Url</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Image URL" required>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="heading" class="col-sm-2 control-label">Heading</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="heading" name="heading" placeholder="heading" required>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article" class="col-sm-2 control-label">Article</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="article" required></textarea>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="article" class="col-sm-2 control-label">Speciality</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="speciality" name="speciality" placeholder="speciality" required>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="article" class="col-sm-2 control-label">Sub Speciality</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subspeciality" name="subspeciality" placeholder="sub-speciality" >
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="author" class="col-sm-2 control-label">author name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="author name" name="author_name" placeholder="author name" >
                            
                        </div>
                    </div>
                    <div class="source url">
                        <label for="heading" class="col-sm-2 control-label">Source Url</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="source url" name="source_url" placeholder="source url" required>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>   
    
  </body>
</html>