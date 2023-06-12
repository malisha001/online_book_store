<?php
require 'head.php';
require 'connection.php';
?>
<title>Order History</title>

    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
    

  <body>

  <div class="container mt-4" style="margin-bottom:20px;">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Details
                            <!-- <a href="add.php" class="btn btn-primary float-end">Add Students</a> -->
                        </h4>

                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php

                                        $query = "SELECT * FROM cart";
                                        $query_run = mysqli_query($connection,$query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $cartdetails)
                                            {
                                                ?>
                                                
                                                <tr>

                                                    <td> <?= $cartdetails['cartID']; ?> </td>
                                                    <td> <?= $cartdetails['book_name']; ?> </td>
                                                    <td> <?= $cartdetails['price']; ?> </td>
                                                    <td> <?= $cartdetails['Quantity']; ?> </td>
                                                    <td> <?= $cartdetails['Total_price']; ?> </td>

                                                    

                                                
                                                </tr>


                                                <?php
                                            }


                                        }else{
                                            
                                            echo "No Record";
                                        }
                                    ?>
                            
                            </tbody>
                        </table>


                    </div>


                </div>
            </div>
        </div>
        </div>







    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<?php
require 'foot.php'
?>