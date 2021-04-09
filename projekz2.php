<!DOCTYPE html>
<html>

<head>
    <title>Case Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body style="background-size: cover; background-image: url('https://wallpapercave.com/wp/wp2095045.jpg')">

<!-- Muhammad Asyraf Bin Azman 1917565 -->

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IIUM Course Scheduler Group D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
                    Updated At : <?= $_POST['tarikh'] ?>
                <?php date_default_timezone_set("Asia/Kuala_Lumpur"); ?>
    </nav>
    <br><br><br>

    <div class="row">

        <div class="col-2">

        </div>

        <!-- table -->

        <div class="col-8">

        <div class="bg-light">
            <table class="table">
            <thead>
                    <tr class="bg-info text-center">
                        <th scope="col">Time</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thursday</th>
                        <th scope="col">Friday</th>
                    </tr>
                </thead>
                <form method="post" action="">

                <?php if (isset($_POST['save'])) { ?>

                <input type="hidden" name="tarikh" value="<?= date('d-m-Y h:i a') ?>">

                    <!-- Mohammad Mu'izzuddin bin Mohammad Ali 1918855 --> 

                <tbody class="text-center">
                    <tr>
                        <th class="bg-info">8.30 AM - 9.50 AM</th>
                        <td>
                           <input type="text" class="form-control text-center" name="form1" value="<?= $_POST['form1'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form2" value="<?= $_POST['form2'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form3" value="<?= $_POST['form3'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form4" value="<?= $_POST['form4'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form5" value="<?= $_POST['form5'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">10.00 AM - 11.20 AM</th>
                        <td>
                           <input type="text" class="form-control text-center" name="form6" value="<?= $_POST['form6'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form7" value="<?= $_POST['form7'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form8" value="<?= $_POST['form8'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form9" value="<?= $_POST['form9'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form10" value="<?= $_POST['form10'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">11.30 AM - 12.50 PM</th>
                        <td>
                           <input type="text" class="form-control text-center" name="form11" value="<?= $_POST['form11'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form12" value="<?= $_POST['form12'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form13" value="<?= $_POST['form13'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form14" value="<?= $_POST['form14'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form15" value="<?= $_POST['form15'] ?>">
                        </td>
                    </tr>
                    <tr style= "font-weight: bold" class="bg-info h3 ">
                        <th></th>
                        <td></td>
                        <td></td>
                        <td>Recess</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="bg-info">2.00 PM - 3.20 PM</th>
                        <td>
                           <input type="text" class="form-control text-center" name="form16" value="<?= $_POST['form16'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form17" value="<?= $_POST['form17'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form18" value="<?= $_POST['form18'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form19" value="<?= $_POST['form19'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form20" value="<?= $_POST['form20'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">3.30.00 PM - 4.50 PM</th>
                        <td>
                           <input type="text" class="form-control text-center" name="form21" value="<?= $_POST['form21'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form22" value="<?= $_POST['form22'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form23" value="<?= $_POST['form23'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form24" value="<?= $_POST['form24'] ?>">
                        </td>
                        <td>
                           <input type="text" class="form-control text-center" name="form25" value="<?= $_POST['form25'] ?>">
                        </td>
                    </tr>
                </tbody>
            </table>

         <!-- Muhammad Asyraf Bin Azman 1917565 -->
        <?php } ?>
        <button type="submit" name="save" class="btn btn-primary" style="float: right;">Update</button>
        <a href="projekz.php" class="btn btn-warning">Reset</a>
        </form>
        </div>
        </div>

        <div class="col-2"></div>
    </div>

    <!-- end table -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
