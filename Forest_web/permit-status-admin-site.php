<?php include('includes/header.php') ?>
    
<?php include('includes/navbar.php') ?>


<div class="container bg-dark p-3 pb-0  mt-5">
    <form class="container-fluid">
    	<div class="row pt-3 border  bg-dark border-bottom-0 border-2 border-info">
        <div class="col-md-12 col-lg-4 ">
            <label for="inputname" class="form-label select-parmit">Select</label> <br>
            <select class="col-md-6 col-lg-12">
  				<option>List of all Parmits from all region</option>
  			</select>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-6">
            <label for="inputname" class="form-label start-date">Starting-Date</label>
            <input style="background-color:white;" type="date" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-6">
            <label for="inputname" class="form-label end-date">Ending-Date</label>
            <input style="background-color:white;" type="date" class="form-control" id="inputname">
            <br>
        </div>
        </div>
    </form>
    </div>

<div class="table-responsive container p-3  pt-0 bg-dark  ">
    <table
        class="container-fluid table-responsive{-sm|-md|-lg|-xl|-xxl} table-responsive-dark table-bordered border table-responsive-striped text-wrap bordered-solid border-2 border-info  table align-middle table-dark table-sm"
        style=" word-wrap: break-word; color: white; font-size: 2vw; ">
        
        <thead>
            <tr>
                <th colspan="7">
                    <h3 style="font-size: 4vw; text-align: center;color:yellow;">List of all permits and their status</h3>

                </th>
            </tr>
            <div class="row" >
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number of Trucks</th>
                    <th scope="col">Date submitted</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Status</th>
                </tr>
            </div>
        </thead>       
        <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Rizwan</td>
                    <td>6</td>
                    <td>Charsada</td>
                    <td>Mardan</td>
                    <td>1-Jully-2021</td>
                    <td style="background-color:yellow; color:black;">Pending</td>                  
                </tr>   
                <tr>
                    <td scope="row">2</td>
                    <td>Naseem</td>
                    <td>2</td>
                    <td>Mardan</td>
                    <td>Hayatab</td>
                    <td>2-Jully-2021</td>
                    <td style="background-color:green; color:white;">Approved</td>                  
                </tr>   
                <tr>
                    <td scope="row">3</td>
                    <td>Hasneen</td>
                    <td>1</td>
                    <td>Charsada</td>
                    <td>Islamabad</td>
                    <td>3-Jully-2021</td>
                    <td style="background-color:red; color:white;">Rejected</td>                  
                </tr>   
                <tr>
                    <td scope="row">4</td>
                    <td>Ubaid</td>
                    <td>4</td>
                    <td>Noshera</td>
                    <td>Lahore</td>
                    <td>3-Jully-2021</td>
                    <td style="background-color:skyblue; color:black;">View</td>                  
                </tr>   
                <tr>
                    <td scope="row">5</td>
                    <td>Umair</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Noshera</td>
                    <td>5-Jully-2021</td>
                    <td style="background-color:green; color:white;">Pending</td>                  
                </tr>         
        </tbody>
    </table>
</div>


<!-- List of Panding permits -->

<div class="container bg-dark p-3 pb-0  mt-5">
    <form class="container-fluid">
    	<div class="row pt-3 border  bg-dark border-bottom-0 border-2 border-info">
        <div class="col-md-12 col-lg-4 ">
            <label for="inputname" class="form-label select-parmit">Select</label> <br>
            <select class="col-md-6 col-lg-12">
  				<option>List of all Charsada approved Parmits</option>
  			</select>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-6">
            <label for="inputname" class="form-label start-date">Starting-Date</label>
            <input style="background-color:white;" type="date" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-6">
            <label for="inputname" class="form-label end-date">Ending-Date</label>
            <input style="background-color:white;" type="date" class="form-control" id="inputname">
            <br>
        </div>
        </div>
    </form>
    </div>

<div class="table-responsive container p-3  pt-0 bg-dark  ">
    <table
        class="container-fluid table-responsive{-sm|-md|-lg|-xl|-xxl} table-responsive-dark table-bordered border table-responsive-striped text-wrap bordered-solid border-2 border-info  table align-middle table-dark table-sm"
        style=" word-wrap: break-word; color: white; font-size: 2vw; ">
        
        <thead >
            <tr>
                <th colspan="8">
                    <h3 style="font-size: 4vw; text-align: center; color:yellow;" >List of all Charsada approved Parmits</h3>

                </th>
            </tr>
            <div class="row" >
                <tr >
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Trucks</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Date Apply</th>
                    <th scope="col">DateApproved</th>
                    <th scope="col">Approved By</th>
                </tr>
            </div>
        </thead>       
        <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Rizwan</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Mardan</td>
                    <td>1-June-2021</td>
                    <td>2-June-2021</td>
                    <td>Yaseen khan</td>
                                     
                </tr>   
                <tr>
                    <td scope="row">2</td>
                    <td>Naseem</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Hayatab</td>
                    <td>5-June-2021</td>
                    <td>7-June-2021</td>
                    <td>Yaseen khan</td>              
                </tr>   
                <tr>
                    <td scope="row">3</td>
                    <td>Hasneen</td>
                    <td>1</td>
                    <td>Charsada</td>
                    <td>Islamabad</td>
                    <td>9-June-2021</td>
                    <td>13-June-2021</td>
                    <td>Yaseen khan</td>                  
                </tr>   
                <tr>
                    <td scope="row">4</td>
                    <td>Ubaid</td>
                    <td>4</td>
                    <td>Charsada</td>
                    <td>Lahore</td>
                    <td>12-June-2021</td>
                    <td>14-June-2021</td>
                    <td>Yaseen khan</td>                  
                </tr>   
                <tr>
                    <td scope="row">5</td>
                    <td>Umair</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Noshera</td>
                    <td>20-June-2021</td>
                    <td>22-June-2021</td>
                    <td>Yaseen khan</td>                
                </tr>    
                <tr>
                    <td scope="row">3</td>
                    <td>Hasneen</td>
                    <td>1</td>
                    <td>Charsada</td>
                    <td>Islamabad</td>
                    <td>9-June-2021</td>
                    <td>13-June-2021</td>
                    <td>Yaseen khan</td>                  
                </tr>   
                <tr>
                    <td scope="row">4</td>
                    <td>Ubaid</td>
                    <td>4</td>
                    <td>Charsada</td>
                    <td>Lahore</td>
                    <td>12-June-2021</td>
                    <td>14-June-2021</td>
                    <td>Yaseen khan</td>                  
                </tr>   
                <tr>
                    <td scope="row">5</td>
                    <td>Umair</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Noshera</td>
                    <td>20-June-2021</td>
                    <td>22-June-2021</td>
                    <td>Yaseen khan</td>                
                </tr>              
        </tbody>
    </table>
</div>


<!-- List of rejected permits -->
<div class="container bg-dark p-3 pb-0  mt-5">
    <form class="container-fluid">
    	<div class="row pt-3 border  bg-dark border-bottom-0 border-2 border-info">
        <div class="col-md-12 col-lg-4 ">
            <label for="inputname" class="form-label select-parmit">Select</label> <br>
            <select class="col-md-6 col-lg-12">
  				<option>List of all Charsada regected permits</option>
  			</select>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-6">
            <label for="inputname" class="form-label start-date">Starting-Date</label>
            <input style="background-color:white;" type="date" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-6">
            <label for="inputname" class="form-label end-date">Ending-Date</label>
            <input style="background-color:white;" type="date" class="form-control" id="inputname">
            <br>
        </div>
        </div>
    </form>
    </div>

<div class="table-responsive container p-3  pt-0 bg-dark  ">
    <table
        class="container-fluid table-responsive{-sm|-md|-lg|-xl|-xxl} table-responsive-dark table-bordered border table-responsive-striped text-wrap bordered-solid border-2 border-info  table align-middle table-dark table-sm"
        style=" word-wrap: break-word; color: white; font-size: 2vw; ">
        
        <thead>
            <tr>
                <th colspan="8">
                    <h3 style="font-size: 4vw; text-align: center;color: yellow;">List of all Charsada regected permits</h3>

                </th>
            </tr>
            <div class="row" >
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Trucks</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Date submitted</th>
                    <th scope="col">Status</th>
                    <th scope="col">Rejected by</th>
                </tr>
            </div>
        </thead>       
        <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Rizwan</td>
                    <td>6</td>
                    <td>Charsada</td>
                    <td>Mardan</td>
                    <td>11-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td> 

                </tr>   
                <tr>
                    <td scope="row">2</td>
                    <td>Naseem</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Hayatab</td>
                    <td>15-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                
                </tr>   
                <tr>
                    <td scope="row">3</td>
                    <td>Hasneen</td>
                    <td>1</td>
                    <td>Charsada</td>
                    <td>Islamabad</td>
                    <td>15-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                 
                </tr>   
                <tr>
                    <td scope="row">4</td>
                    <td>Ubaid</td>
                    <td>4</td>
                    <td>Charsada</td>
                    <td>Lahore</td>
                    <td>20-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                 
                </tr>   
                <tr>
                    <td scope="row">5</td>
                    <td>Umair</td>
                    <td>2</td>
                    <td>Charsada</td>
                    <td>Noshera</td>
                    <td>22-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                 
                </tr>         
                <tr>
                    <td scope="row">3</td>
                    <td>Hasneen</td>
                    <td>3</td>
                    <td>Charsada</td>
                    <td>Mardan</td>
                    <td>25-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                 
                </tr>   
                <tr>
                    <td scope="row">4</td>
                    <td>Ubaid</td>
                    <td>1</td>
                    <td>Charsada</td>
                    <td>Lahore</td>
                    <td>27-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                 
                </tr>   
                <tr>
                    <td scope="row">5</td>
                    <td>Umair</td>
                    <td>1</td>
                    <td>Charsada</td>
                    <td>Hayatabad</td>
                    <td>30-June-2021</td>
                    <td class="bg-danger">Rejected</td> 
                    <td>Yaseen khan</td>                 
                </tr>         
        </tbody>
    </table>
</div>
   



<?php include('includes/footer.php') ?>
