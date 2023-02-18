<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    @if($errors->all())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

    </ul>

    @endif


    <div id="demo">demo</div>
    <form method="post">
        @csrf
        <input type="text" name="name" value="">
        <br>
        cricket <input type="checkbox" name="hobby" value="cricket" class="hobby">
        football <input type="checkbox" name="hobby" value="football" class="hobby">
        baseball <input type="checkbox" name="hobby" value="baseball" class="hobby">
        table <input type="checkbox" name="hobby" value="table" class="hobby">
        running <input type="checkbox" name="hobby" value="running" class="hobby">
        <input type="submit" value="Submit">
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            //set initial state.

            $('.hobby').change(function() {

                var val = [];
                $.each($("input[name='hobby']:checked"), function() {
                    val.push($(this).val());
                });
                // alert("Selected say(s) are: " + val.join(", "));
                document.getElementById("demo").innerHTML = val.join(", ");

            });


        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>