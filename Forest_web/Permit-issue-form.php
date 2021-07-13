<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<header>
        <div class=" mt-4 container chllanform border border-4 border-dark">
            <nav class="navbar  d-flex">

                <div class="div-start">
                    <img src="static/pic/kpk-logo.png" alt="" width="70" height="50" class="img-fluid">
                
                </div>
                <div>
                    <p id="Permit-request">
                        TRANSPORT PERMIT ISSUE FORM
                        OF KP FOREST DEPARTMENT
                    </p>
                </div>
                <div class="div-end">
                    <img src="static/pic/kpk-logo.png" alt="" width="70" height="50" class="img-fluid">
                </div>
            </nav>
        
        <p class="history">Government of Khyber Pakhtunkhwa, Food, Agriculture & Cooperative Department, Peshawar
            Notification No. SOFT (FACD)/T-105 (1)7071/1, dated 17.03.1971 on the Forest Produce specified below: The
            duty has been realized according to schedule-| and/or | of the said Notification applicable to schedule |
            and/or || of the said
            Notification applicable to each separately.
        </p>
        </div>
</header>

        
<!-- form -->
    <div class="container border border-solid border-dark border-4 border-top-0" >
      <br>
      <form class="row " action="index.html">
        
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">Chllan Number</label>
            <input type="text" value="" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">Forest Department</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        
        <div class="col-md-6 col-lg-4">
           <label for="inputname" class="form-label">Division</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">No of Trucks</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">Date</label>
            <input type="date" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">Owner/Contractor Name</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        
        <div class="col-md-6 col-lg-4" class="form-control">
            <label for="inputState" class="form-label">Destination From</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">To </label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Passed Through</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Parmit issue date </label>
            <input type="date" class="form-control" id="inputZip">
        </div>
        
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Parmit expiry date </label>
            <input type="date" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Name of Driver</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Specification Of Forest Produce</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Logs/Scants</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Volume (Cft)</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Firewood /etc</label>
            <input type="text" class="form-control" id="inputZip">
        </div>

        
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">Parmit issued by </label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        
        
            <footer id="note">
                <br>
                Note: This permit is valid only for transportation of forest produce outside the province
            </footer>
            
        
        




        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-md btn-primary">Issue Permit</button>
            <button type="cancel" class="btn btn-md btn-primary">Cancel </button>
        </div>
        
    </form>
    </div>

<?php include('includes/footer.php') ?>