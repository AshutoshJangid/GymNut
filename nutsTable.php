<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <div class="body fixed">
        <?php include 'header.php'; ?>
    </div>
    <div class="table-body mt-5">
        <div class="row col-md-12">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Action</th>
                            <th scope="col">Reg. No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Inserted At</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $getList = mysqli_query($con, "SELECT * FROM gn_nuts");
                        if (mysqli_num_rows($getList) > 0) {
                            $c = 1;
                            while ($fetchData = mysqli_fetch_assoc($getList)) {

                        ?>
                                <tr>
                                    <th scope="row"><?php echo $c; ?></th>
                                    <td><a class="btn" data-toggle="modal" data-target="#editModal<?php echo $fetchData['id']; ?>"><i class="fa fa-pencil-square"></i></a>
                                        <a class="btn btn-prmary" data-toggle="modal" data-target="#paymentModal<?php echo $fetchData['id']; ?>"><i class="fa fa-rupee-sign fa-sm" aria-hidden="true"></i></a>

                                    </td>
                                    <td><?php echo $fetchData['id']; ?></td>
                                    <td><?php echo $fetchData['name']; ?></td>
                                    <td><?php echo $fetchData['gender']; ?></td>
                                    <td><?php echo $fetchData['mobile']; ?></td>
                                    <td><?php echo $fetchData['email']; ?></td>
                                    <td><?php echo $fetchData['inserted_at']; ?></td>
                                </tr>
                                <div class="modal fade" id="editModal<?php echo $fetchData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <?php $getDetail = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM gn_nuts where id ='$fetchData[id]'")); ?>
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Details</h5>

                                            </div>
                                            <div class="modal-body">
                                                <form class="requires-validation" id="reg_form2">
                                                <input type="hidden" name="reg_id2" value="<?php echo $fetchData['id']; ?>" id="userID">
                                                    <div class="col-md-12">
                                                        <input class="form-control" type="text" value="<?php echo $getDetail['name']?>" name="nameEdit" placeholder="Full Name" required>
                                                        
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input class="form-control" type="tel" name="mobileEdit" placeholder="Contact Number" value="<?php echo $getDetail['mobile']?>" required>
                                                        
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input class="form-control" type="email" name="emailEdit" placeholder="E-mail Address" value="<?php echo $getDetail['email']?>" required>
                                                       
                                                    </div>

                                                    <div class="form-button mt-3">
                                                        <button id="submit" name="regSub" type="submit" class="btn btn-primary"> Save Edits</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="paymentModal<?php echo $fetchData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Fees Renewal</h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="requires-validation" id="Plan_form2">
                                                    <input type="hidden" name="reg_id" value="<?php echo $fetchData['id']; ?>" id="userID">
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
                                                        <input class="form-control"  type="date" id="fromDate" name="fromDate" placeholder="Plan Start From" required>
                                                    </div>

                                                    <div class="form-button mt-3">
                                                        <button id="submit" name="planSub" type="submit" class="btn btn-primary">Save & Continue</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $c++;
                            }
                        } else { ?> <tr>
                                <td colspan="6" style="text-align: center;">No Data Available</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</body>
<script>
    $(function() {

        $('#Plan_form2').on('submit', function(e) {

            e.preventDefault();
            var form = new FormData(this);
            for (var value of form.values()) {
                console.log(value);
            }

            $.ajax({
                type: 'post',
                url: 'reg_form.php',
                data: $(form).serialize(),
                success: function(data) {
                    swal("Plan Is Created",data, "success")
                        .then(function() {
                            window.location.href = "nutsTable.php";
                        });
                    // document.getElementById("regDetail").style.display = "none";
                    // document.getElementById("planDetail").style.display = "block";
                    // document.getElementById("userID").setAttribute("value", userID);
                }
            });

        });

    });
</script>
<script>
    $(function() {

        $('#reg_form2').on('submit', function(e) {

            e.preventDefault();
            var form = new FormData(this);
            for (var value of form.values()) {
                console.log(value);
            }

            $.ajax({
                type: 'post',
                url: 'reg_form.php',
                data: $('form').serialize(),
                success: function(data) {
                    swal("Edits are Saved", data,"success")
                        .then(function() {
                            window.location.href = "nutsTable.php";
                        });
                    
                }
            });

        });

    });
</script>
</html>