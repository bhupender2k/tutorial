<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3 border border-1"> left



                <form id="student-form">
                    <!-- <form id="student-form" action="{{route('student.add1')}}" method="post"> -->
                    @csrf
                    <input id="name" type="text" name="name" />
                    <br>
                    1 <input type="checkbox" name="city_id" value="1" checked>
                    <br>
                    2 <input type="checkbox" name="city_id" value="2">
                    <br>

                    3 <input type="checkbox" name="city_id" value="3">
                    <br>
                    4<input type="checkbox" name="city_id" value="4">
                    <br>
                    5 <input type="checkbox" name="city_id" value="5">
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-9 border border-1">
                <table id="studentTable" class="table table-bordered">
                    @foreach($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                    </tr>
                    @endforeach
                </table>

            </div>



        </div>
    </div>

    <p id="demo1">Hemmo</p>
    <p id="demo2">Hemmo</p>
    <p id="demo3">Hemmo</p>
    <script type="text/javascript">
        $("#student-form").submit(function(e) {

            e.preventDefault();
            let name = $("#name").val();
            let _token = $("input[name=_token]").val();

            var city_id = [];
            $.each($("input[name='city_id']:checked"), function() {
                city_id.push($(this).val());
            });
            document.getElementById("demo1").innerHTML = city_id;

            $.ajax({
                url: "{{route('student.add1')}}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: name,
                    city_id: city_id
                },
                success: function(response) {

                    if (response) {
                        document.getElementById("demo2").innerHTML = response;
                        response1 = JSON.parse(response);
                        document.getElementById("demo3").innerHTML = response1[0].name;
                     
                        let text = ""
                        for (let x in response1) {
                            text += "<tr class='text-danger' ><td>" + response1[x].name + "</td> <td>" + response1[x].email + "</td> <td>" + response1[x].city_id + "</td></tr>";
                        }
                        
                     
                        // response = json_decode(response);
                        // $("#studentTable").prepend('<tr class="text-primary"> <td>' + response1[0].name + '</td><td>' + response1[0].email + '</td></tr>')
                        $("#studentTable").empty();
                        $("#studentTable").prepend(text)

                        // $("#student-form")[0].reset();
                    }
                }
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>