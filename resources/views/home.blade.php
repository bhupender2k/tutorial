<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1>Ajax CRUD</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                Studesnts <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentModal">
                    Add new Student
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table" id="studentTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td scope="row"></td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-info"> Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="student-form">
                        @csrf
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="name" class="form-control" type="text" />
                            <label for="my-input">Email</label>
                            <input id="email" class="form-control" type="text" />
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <p id="demo1">Hello</p>
    <script type="text/javascript">
        $("#student-form").submit(function(e) {

            e.preventDefault();
            let name = $("#name").val();
            let email = $("#email").val();
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{route('student.add')}}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: name,
                    email: email,
                },
                success: function(response) {
                    if (response) {

                        $("#studentTable tbody").prepend('<tr> <td scope="row"></td><td>' + response.name + '</td><td>' + response.email + '</td></tr>')
                        $("#student-form")[0].reset();
                        $("#studentModal").modal('hide');
                    }
                }
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>