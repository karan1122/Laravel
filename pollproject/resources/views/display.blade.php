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

    <div class="header">
        <center><h2><b>Online Poll</b></h2></center>
    </div>    

        <div class="row">            
                <div class="col-md-2">
                        <ul>
                        </ul>  
                </div>
                
                <div class="col-md-10">
                    <div class="row">

                        <div class="col-md-8">

                        @foreach($data as $item)

                            <table>
                                <hr>
                                <tr>
                                    <td><br><h3><b>{{$item->pid}} {{$item->poll_name}} </b></h3></td>
                                </tr>
                                <tr>
                                    <td><b>A. {{$item->opt1}} </b></td>
                                    <td><input type="submit" value="Go with A" name='a' class="btn btn-primary"></td>
                                    
                                </tr>
                                <tr>
                                    <td><b>B. {{$item->opt2}} </b></td>
                                    <td><input type="submit" value="Go with B" name='b' class="btn btn-primary"></td>
                                </tr>
                                <tr>
                                    <td><b>C. {{$item->opt3}} </b></td>
                                    <td><input type="submit" value="Go with C" name='c' class="btn btn-primary"></td>
                                </tr>
                                <tr>
                                    <td><b>D. {{$item->opt4}} </b></td>
                                    <td><input type="submit" value="Go with D" name='d' class="btn btn-primary"></td>
                                </tr>
                                <tr>
                                    <td><br><input type="submit" value="Next" name='next' class="btn btn-danger"><br></td>
                                    <td><br><input type="submit" value="DONE" name="done" class="btn btn-success"></td>
                                </tr>
                            </table>

                            @endforeach

                    

                        </div>

                        <div class="col-md-2 mt-5">

                        </div>
                    </div>
                </div>
        </div>

        <div class="footer">
            
        </div>

</body>
</html>
