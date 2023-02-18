<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3>Dependant Selelctbox</h3>
    <form action="{{url('/')}}/getValue"  method="post">
        @csrf
        <div class="form-group">
            <label for="">State</label>
            <select class="form-control" name="country_id" id="country">
                <option>Select Country</option>
                @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">State</label>
            <select class="form-control" name="state_id" id="state">
                <option></option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="">City</label>


            <select class="form-control" name="city_id" id="city">
                <option>Select City</option>
                <option></option>
                <option></option>
                <option></option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <p id="demo">hemmo</p>
    <script>
        $(document).ready(function() {
            $("#country").change(function() {

                let country_id = jQuery(this).val();
                // alert(country_id);

                jQuery.ajax({
                    url: "/getState",
                    type: "post",
                    data: "country_id=" + country_id + '&_token={{csrf_token()}}',
                    success: function(result) {
                        jQuery("#state").html(result);
                    }
                });
            });


            $("#state").change(function() {

                let state_id = jQuery(this).val();
                alert(state_id);

                jQuery.ajax({
                    url: "/getCity",
                    type: "post",
                    data: "state_id=" + state_id + '&_token={{csrf_token()}}',
                    success: function(result) {
                        jQuery("#city").html(result);
                    }
                });
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