
<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<div class=" mt-4 container chllanform border border-4 border-dark">
            <nav class="navbar  d-flex">

                <div class="div-start">
                    <img src="static/pic/kpk-logo.png" alt="" width="70" height="50" class="img-fluid">
                
                </div>
                <div>
                    <p id="Permit-request">
                        TRANSPORT PERMIT REQUEST FORM
                        
                        OF KP FOREST DEPARTMENT
                    </p>
                </div>
                <div class="div-end">
                    <img src="static/pic/kpk-logo.png" alt="" width="70" height="50" class="img-fluid">
                </div>
            </nav>
        </div>
</header>



    <div class="container border border-solid border-dark border-4 border-top-0 " >
        <br>                    
      <form class="row   " action="index.html">
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">Name ( نام )</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">Phone ( نمبر )</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputname" class="form-label">CNIC ( شناختی کاڈ نمبر )</label>
            <input type="text" class="form-control" id="inputname">
        </div>
        
        <div class="col-md-6 col-lg-4">
            <label for="inputAddress" class="form-label"> Collected From(لکڑی جمع کرنے کی جگہ)</label>
            <input type="text" class="form-control txt2" id="inputAddress" placeholder="">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputAddress2" class="form-label txt1">Avaliable At ( موجودہ جگہ )</label>
            <input type="text" class="form-control " id="inputAddress2" placeholder="">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputCity" class="form-label">Number of Trucks ( ٹرکوں کی تعداد )</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputCity" class="form-label">Truck Wheeler ( ٹرک وہیلر )</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6 col-lg-4" class="form-control">
            <label for="inputState" class="form-label">From( کہاں سے لے کے جانی )</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6 col-lg-4">
            <label for="inputZip" class="form-label">To ( کہاں لے کے جانی )</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-md btn-primary">Request Permat</button>
            <button type="cancel" class="btn btn-md btn-primary">Cancel </button>
        </div>
        
    </form>
    </div>


<?php include('includes/footer.php') ?>