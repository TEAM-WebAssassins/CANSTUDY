
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty table</title>
    <link rel="stylesheet" href="style44_page2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body id="body">
    <div class="container"  id="bodydd">
        <div class="jumbotron" id="tableout">
        <h1 class="animate__animated animate__bounce" id=hp3>CANSTUDY</h1>
            <div class="card" id="tableborder">
                <h2 >Faculty table</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FacultyaddModal">
                        Add Data
                      </button>
                    </div>
                </div>
<div class="card">
    <div class="card-body" id="tablebody">
    <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'canstudy');

        $query = "SELECT * FROM isefaculty_upload";
        $query_run = mysqli_query($connection, $query);
    ?>
        <table class="table table-dark">
            <thead>
              <tr>
              <th scope="col">S.No</th>
                <th scope="col">Faculty ID</th>
                <th scope="col">SEM</th>
                <th scope="col">Subject</th>
                <th scope="col">Module 1</th>
                <th scope="col">Module 2</th>
                <th scope="col">Module 3</th>
                <th scope="col">Module 4</th>
                <th scope="col">Module 5</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
            <tbody>
              <tr>
              <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['faculty_Id']; ?></td>
                <td><?php echo $row['sem']; ?></td>
                <td><?php echo $row['sub']; ?></td>
                <td><?php echo $row['module1']; ?></td>
                <td><?php echo $row['module2']; ?></td>
                <td><?php echo $row['module3']; ?></td>
                <td><?php echo $row['module4']; ?></td>
                <td><?php echo $row['module5']; ?></td>
                <td>
                    <button type="button" class="btn btn-success editbtn">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger deletebtn">Delete</button>
                </td>
              </tr>
            </tbody>
            <?php
                    }
                }
                else
                {
                    echo "No Record Found";
                }
                ?>
                    </table>
                </div>
            </div>

                      <!-- Modal -->
                        <div class="modal fade" id="FacultyaddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Upload notes</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="insertdata.php" method="post"> 
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Faculty_Id</label>
                                          <input type="text" name="faculty_Id" class="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label>Faculty_Name</label>
                                            <input type="text" name="username" class="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <select name="sem" class="form-control sem selectFilter"  data-target="subject" required>
                                                <option value="-1" >-- SEM --</option>
                                                <option data-ref="sem3">Sem3</option>
                                                <option data-ref="sem4">Sem4</option>
                                                <option data-ref="sem5">Sem5</option>
                                                <option data-ref="sem6">Sem6</option>
                                                <option data-ref="sem7">Sem7</option>
                                                <option data-ref="sem8">Sem8</option>
                                            </select>
                                            <br>
                                            <select name="sub" class="form-control subject selectFilter">
                                                <option value="-1" class="sub1">-- Select Sub --</option>
                                                <option  data-belong="sem3">MAT3</option>
                                                <option  data-belong="sem3">DS</option>
                                                <option  data-belong="sem3">DMS</option>
                                                <option  data-belong="sem3">CO</option>
                                                <option  data-belong="sem3">ADE</option>
                                                <option  data-belong="sem3">SE</option>
                                                <option  data-belong="sem3">KAN</option>
                                                <option  data-belong="sem4">MAT4</option>
                                                <option  data-belong="sem4">MCES</option>
                                                <option  data-belong="sem4">DAA</option>
                                                <option  data-belong="sem4">OS</option>
                                                <option  data-belong="sem4">OOC</option>
                                                <option  data-belong="sem4">DC</option>
                                                <option  data-belong="sem4">CIP</option>
                                                <option  data-belong="sem5">CNS</option>
                                                <option  data-belong="sem5">DBMS</option>
                                                <option  data-belong="sem5">ATC</option>
                                                <option  data-belong="sem5">AOP</option>
                                                <option  data-belong="sem5">UP</option>
                                                <option  data-belong="sem5">ES</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Module 1</label>
                                            <input type="file" name="module1"  accept=".pdf"  placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label>Module 2</label>
                                            <input type="file" name="module2"   accept=".pdf" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label>Module 3</label>
                                            <input type="file" name="module3"  accept=".pdf" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label>Module 4</label>
                                            <input type="file" name="module4"  accept=".pdf" placeholder="">
                                        </div>
                                        <div class="form-group">
                                        <label>Module 5</label>
                                            <input type="file" name="module5"  accept=".pdf" placeholder="">
                                        </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="Submit" name="submit" class="btn btn-primary">Save Data</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
<!--################################################################################################################################-->


<!-- edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload notes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="insertdata.php" method="post"> 
        <div class="modal-body">
            <div class="form-group">
                <label>Faculty_Id</label>
                  <input type="text" name="faculty_Id" class="" placeholder="" id="faculty_Id">
                </div>
                <div class="form-group">
                <label>Faculty_Name</label>
                    <input type="text" name="username" class="" placeholder="" id="username">
                </div>
                <div class="form-group">
                    <select name="sem" class="form-control sem selectFilter"  data-target="subject" id="sem" required>
                        <option value="-1" >-- SEM --</option>
                        <option data-ref="sem3">Sem3</option>
                        <option data-ref="sem4">Sem4</option>
                        <option data-ref="sem5">Sem5</option>
                        <option data-ref="sem6">Sem6</option>
                        <option data-ref="sem7">Sem7</option>
                        <option data-ref="sem8">Sem8</option>
                    </select>
                    <br>
                    <select name="sub" class="form-control subject selectFilter" id="sub">
                        <option value="-1" class="sub1">-- Select Sub --</option>
                        <option  data-belong="sem3">MAT3</option>
                        <option  data-belong="sem3">DS</option>
                        <option  data-belong="sem3">DMS</option>
                        <option  data-belong="sem3">CO</option>
                        <option  data-belong="sem3">ADE</option>
                        <option  data-belong="sem3">SE</option>
                        <option  data-belong="sem3">KAN</option>
                        <option  data-belong="sem4">MAT4</option>
                        <option  data-belong="sem4">MCES</option>
                        <option  data-belong="sem4">DAA</option>
                        <option  data-belong="sem4">OS</option>
                        <option  data-belong="sem4">OOC</option>
                        <option  data-belong="sem4">DC</option>
                        <option  data-belong="sem4">CIP</option>
                        <option  data-belong="sem5">CNS</option>
                        <option  data-belong="sem5">DBMS</option>
                        <option  data-belong="sem5">ATC</option>
                        <option  data-belong="sem5">AOP</option>
                        <option  data-belong="sem5">UP</option>
                        <option  data-belong="sem5">ES</option>
                    </select>
                </div>
                <div class="form-group">
                <label>Module 1</label>
                    <input type="file" name="module1" id="module1" accept=".pdf"  placeholder="">
                </div>
                <div class="form-group">
                <label>Module 2</label>
                    <input type="file" name="module2" id="module2"  accept=".pdf" placeholder="">
                </div>
                <div class="form-group">
                <label>Module 3</label>
                    <input type="file" name="module3" id="module3" accept=".pdf" placeholder="">
                </div>
                <div class="form-group">
                <label>Module 4</label>
                    <input type="file" name="module4" id="module4" accept=".pdf" placeholder="">
                </div>
                <div class="form-group">
                <label>Module 5</label>
                    <input type="file" name="module5" id="module5" accept=".pdf" placeholder="">
                </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" name="submit" class="btn btn-primary">Edit Data</button>
        </div>
    </form>
</div>
</div>
</div>
</div>

<!--################################################################################################################################-->


<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="Delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


<!--################################################################################################################################-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="selectFilter.min.js"></script>
<script>
    $(document).ready(function () {

        $('.deletebtn').on('click', function () {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

        });
    });
</script>

<script>
    $(document).ready(function () {

        $('.editbtn').on('click', function () {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);
            
            $('#faculty_Id').val(data[0]);
            $('#username').val(data[1]);
            $('#sem').val(data[2]);
            $('#subject').val(data[3]);
            $('#module1').val(data[4]);
            $('#module2').val(data[5]);
            $('#module3').val(data[6]);
            $('#module4').val(data[7]);
            $('#module5').val(data[8]);
        });
    });
</script>



</body>
</html>







