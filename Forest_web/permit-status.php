<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<form class="container mt-5 border  bg-dark border-dark">
  <div class="form-element textfield">
    <label style="color:white;">Enter your CNIC</label>
    <br>
    <input type="Search" placeholder="enter your CNIC">
  </div>

  <div class="form-element submit-btn mt-3">
    <input class="btn btn-md btn-success" type="submit" value="Search" >
  </div>
</form>


<div class="table-responsive container p-3 mb-5 bg-dark ">
    <table
        class="container-fluid table-responsive{-sm|-md|-lg|-xl|-xxl} table-responsive-dark table-bordered border table-responsive-striped text-wrap bordered-solid border-2 border-info  table align-middle table-dark table-sm"
        style=" word-wrap: break-word; color: white; font-size: 2vw; ">
        
        <thead>
            <tr>
                <th colspan="7">
                    <h3 style="font-size: 3vw; text-align: center; color: yellow;">List Of Requested Permits And Their Status</h3>

                </th>
            </tr>
            <div class="row" >
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number of Trucks</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Date submitted</th>
                    <th scope="col">Status</th>
                </tr>
            </div>
        </thead>       
        <tbody>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color:yellow; color:black;">Pending</td>                  
                </tr>   
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color:green; color:white;">Approved</td>                  
                </tr>   
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color:red; color:white;">Rejected</td>                  
                </tr>   
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="background-color:skyblue; color:black;">View</td>                  
                </tr>   
                        
        </tbody>
    </table>
</div>

<?php include('includes/footer.php') ?>




