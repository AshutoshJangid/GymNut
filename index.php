<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <script>
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

        *,
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }

        html,
        body {
            height: 100%;
            background-color: #152733;
            overflow: hidden;
        }


        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 60px;
        }

        .form-content .form-items {
            border: 3px solid #fff;
            padding: 40px;
            display: inline-block;
            width: 100%;
            min-width: 540px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: left;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .form-content h3 {
            color: #fff;
            text-align: left;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-content h3.form-title {
            margin-bottom: 30px;
        }

        .form-content p {
            color: #fff;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 30px;
        }


        .form-content label,
        .was-validated .form-check-input:invalid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #fff;
        }

        .form-content input[type=text],
        .form-content input[type=password],
        .form-content input[type=email],
        .form-content select {
            width: 100%;
            padding: 9px 20px;
            text-align: left;
            border: 0;
            outline: 0;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            margin-top: 16px;
        }


        .btn-primary {
            background-color: #6C757D;
            outline: none;
            border: 0px;
            box-shadow: none;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
        }

        .form-content textarea {
            position: static !important;
            width: 100%;
            padding: 8px 20px;
            border-radius: 6px;
            text-align: left;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            outline: none;
            resize: none;
            height: 120px;
            -webkit-transition: none;
            transition: none;
            margin-bottom: 14px;
        }

        .form-content textarea:hover,
        .form-content textarea:focus {
            border: 0;
            background-color: #ebeff8;
            color: #8D8D8D;
        }

        .mv-up {
            margin-top: -9px !important;
            margin-bottom: 8px !important;
        }

        .invalid-feedback {
            color: #ff606e;
        }

        .valid-feedback {
            color: #2acc80;
        }
    </style>
</head>

<body>
    <div>
    <?php include 'header.php'; ?>
</div>
    <div>
        <?php 
        $mail = mail('ashujangid16786@gmail.com','test mail','hello world','From: ashutoshjangid99@gmail.com');
        //print ($mail) ?  "<script>alert('Passed')</script>" : "<script>alert('not')</script>";
        ?>
        <!-- Basic Detail -->
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content" id="regDetail">
                        <div class="form-items">
                            <h3>Register New Gym Nut</h3>
                            <p>Fill in the data below.</p>
                            <form class="requires-validation" id="reg_form">

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                    <div class="valid-feedback">Username field is valid!</div>
                                    <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="tel" name="mobile" placeholder="Contact Number" required>
                                    <div class="valid-feedback">Number field is valid!</div>
                                    <div class="invalid-feedback">Number field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                    <div class="valid-feedback">Email field is valid!</div>
                                    <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <select name="gender" class="form-select mt-3" required>
                                        <option selected disabled value=""> Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Secret</option>
                                    </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                                </div>

                                <div class="form-button mt-3">
                                    <button id="submit" name="regSub" type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-content" id="planDetail" style="display:none;">
                        <div class="form-items">
                            <h3>Register New Gym Nut</h3>
                            <p>Select the plan Details</p>
                            <form class="requires-validation" id="Plan_form">
                                <input type="hidden" name="reg_id" id="userID">
                                <div class="col-md-12">
                                    <select name="type" id="planType" class="form-select mt-3" required>
                                        <option selected disabled value=""> Select Plan Type</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="quarterly">Quarterly</option>
                                        <option value="half_yearly">Half Yearly</option>
                                        <option value="yearly">Yearly</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <input type="radio" id="yesCardio" name="cardio" value="1" checked>
                                    <label for="yesCardio">With Cardio</label><br>
                                    <input type="radio" id="noCardio" name="cardio" value="0">
                                    <label for="noCardio">Without Cardio</label><br>

                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" onchange="getToDate(this.value)" type="date" id="fromDate" name="fromDate" placeholder="Plan Start From" required>
                                </div>

                                <div class="form-button mt-3">
                                    <button id="submit" name="planSub" type="submit" class="btn btn-primary">Save & Continue</button>
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
    <!-- Registration form submit script -->
    <script>
        $(function() {

            $('#reg_form').on('submit', function(e) {

                e.preventDefault();
                var form = new FormData(this);
                //   for (var value of formData. values()) {
                //     console. log(value);
                //     }
                $.ajax({
                    type: 'post',
                    url: 'reg_form.php',
                    data: $('form').serialize(),
                    success: function(userID) {
                        document.getElementById("regDetail").style.display = "none";
                        document.getElementById("planDetail").style.display = "block";
                        document.getElementById("userID").setAttribute("value", userID);
                    }
                });

            });

        });
    </script>
    <!-- Plan form submit script -->
    <script>
        $(function() {

            $('#Plan_form').on('submit', function(e) {

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
                        swal("Plan Is Created" , "success")
                         . then(function() {
                        window.location.href = "index.php";
                        });
                        // document.getElementById("regDetail").style.display = "none";
                        // document.getElementById("planDetail").style.display = "block";
                        // document.getElementById("userID").setAttribute("value", userID);
                    }
                });

            });

        });
    </script>
    <!-- <script>
       function getToDate(data){
        let type = document.getElementById("planType").value;
        let fromDate = document.getElementById("fromDate").value;
        console.log(fromDate);
        if(type == "monthly"){console.log(type);}
        else if(type == "quarterly"){

            console.log(type);
           let dateram = '2021-07-21';
            console.log(typeof(fromDate));
            let newSom  = (+new Date(document.getElementById("fromDate").value));
            console.log(newSom);
            console.log(dateram.valueAsNumber);
            toDate = fromDate.setMonth(fromDate.getMonth() + 8);
            console.log(fromDate.getMonth());
            document.getElementById("toDate").setAttribute("value", toDate);
        }
        else if(type == "half_yearly"){console.log(type);}
        else if(type == "yearly"){console.log(type);}
        }
    </script> -->
</body>

</html>