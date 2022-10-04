<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ID Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="width: 40%; margin: 10px auto;">
        <div class="row">
        <h1 class="text-center text-success">ID Generate</h1>
         <form method="POST" action="save.php">
            <fieldset class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </fieldset>
            <div class="col-md-6 mt-2" style="margin:auto;">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
        </div>    
    </div>
</body>
</html> -->


<?php 

//id create 
/*$Id= mt_rand(100000,1000000); 
echo $Id;*/


/*$id = uniqid().".txt";*/

/*$id = uniqid("Text_").".txt";*/

//file  create

/*$id = uniqid("Text_", TRUE).".txt";*/

/*$id = uniqid("Text_").".txt";
$content= "Blah blas blah";
file_put_contents($id, $content)*/





/*
function id()
{
    $keyLength = 8;
    $str = ".1.69i57j0i22i30l4j69i60l3.8555j0j7&sourceid=chr";
    $randstr = substr(str_shuffle($str),0,$keyLength);
    return $randstr;
}
echo id();*/

/*laravel model function*//*
  function IDGenerator($model, $trow, $length = 4, $prefix){
        //$data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $increment_last_number = ((int)$actial_last_number)+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix.'-'.$zeros.$last_number;
    }


    echo IDGenerator();

    */
?>