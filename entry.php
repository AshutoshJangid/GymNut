<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div>
        <!-- Basic Detail -->
        <div class="form-body col-md-12 mt-5">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Register New Gym Nut</h3>
                            <p>Fill in the data below.</p>
                            <form class="requires-validation" id="reg_form">

                                <div class="col-md-12">
                                    <input class="form-control" type="text" id="regNo" name="regNo" placeholder="Enter Your Registration Number" required>
                                </div>

                                <div class="form-button mt-3">
                                    <button id="entryToday" name="entryToday" type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#entryModal">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Detail -->
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        // swal("Good job!", "You clicked the button!", "success");
        $(function() {

            $('#reg_form').on('submit', function(e) {

                e.preventDefault();
                var form = new FormData(this);
                // for (var value of form.values()) {
                //     console.log(value);
                // }

                $.ajax({
                    type: 'post',
                    url: 'reg_form.php',
                    data: $('form').serialize(),
                    success: function(data) {
                         swal("Welcome!!", data , "success")
                         . then(function() {
                        window.location.href = "entry.php";
                        });
                    }
                });

            });

        });
    </script>
</body>

</html>