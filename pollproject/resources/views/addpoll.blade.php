<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="design.css">

</head>

<body>

    <div>
        <center><h2><b>Online Poll</b></h2></center>
    </div>    

    <div class="row">            
        <div class="col-md-2">
            <ul>
                <li><a href="/addpoll" class="btn btn-warning">Add Poll</a></li><br>
                <li><a href="/activepoll" class="btn btn-warning">Active Poll</a></li><br>
                <li><a href="/showresult" class="btn btn-warning">Show Result</a></li><br>
                 <li><a href="/logout" class="btn btn-warning">Log Out</a></li><br>
            </ul>  
        </div>
                
        <div class="col-md-10">
            
            <div class="mt-5">
                    
                <form action="{{route('addpoll')}}" method="POST">
                    @csrf

                    <h2>ADD NEW POLL</h2>
                    <hr>
                    <h4>Type your quetion here:</h4>
                    <input type="text" name="txtque" id="" placeholder="Your Quetion">
                                            
                    <h5 class="mt-3">Add Options: </h5>
                    <input type="text" name="txtfop" id="" placeholder="First option"><br>
                    <input type="text" name="txtsop" id="" placeholder="Second option"><br>
                    <input type="text" name="txttop" id="" placeholder="Third option"><br>
                    <input type="text" name="txtftop" id="" placeholder="Forth option"><br><br>

                    <input type="submit" value="ADD" name="btndone" class="btn btn-success">
                </form>

            </div>

        </div>

    </div>

    <div class="footer">

    </div>

</body>
</html>
