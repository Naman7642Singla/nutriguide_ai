<?php
ini_set('memory_limit', '-1');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style2.css" />
    <title> NutriGuide-AI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Data Tables -->	
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
		

  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">
  <script src="../assets/js/state_district_crops_dropdown.js"></script>


	<script>
  window.addEventListener("load", function() {
    const endpoint = "https://newsapi.org/v2/everything?q=farmers&sortBy=popularity&apiKey=e13c1810209a4e6ca7997d39b797152c";
    fetch(endpoint)
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then(data => {
      console.log(data);
      // do something with the response data here
    })
    .catch(error => {
      console.error("There was a problem fetching data from the API:", error);
    });
  });
</script>

		  <script>
var settings = {
  "url": "https://newsapi.org/v2/everything?q=farmers&sortBy=popularity&apiKey=e13c1810209a4e6ca7997d39b797152c",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
  console.log(response);
});

</script>
  </head>

<body class="bg-white" id="top">
<header>
      <div id="trying">
      <nav class="section__container nav__container">
        <div class="nav__logo">Nutri<span>Guide</span><sub id="sub">AI</sub></div>
        <ul class="nav__links">
          <li class="link"><a href="http://127.0.0.1:5501/frontend/index2.html">Home</a></li>
          <li class="link"><a href="http://localhost/rop/farmer/ocr.php">DineScan</a></li>
          <li class="link"><a href="http://127.0.0.1:5501/frontend/chatbot.html">Chatbot</a></li>
          <li class="link"><a href="#">Evaluate Food</a></li>
          <li class="link"><a href="http://127.0.0.1:5501/frontend/faq.html">Help/FAQ</a></li>
        </ul>
        
        <a href="contact.html">
         <button class="btn">Contact Us
          
            
          
        </button> 
        </a>
        
        
        
      </nav>
      </div>
    
    </header>
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!-- ======================================================================================================================================== -->

    <div class="container ">

      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <span class="badge badge-danger badge-pill mb-3">Prediction</span>
        </div>
      </div>

      <div class="row row-content">
        <div class="col-md-12 mb-3">

          <div class="card text-white bg-gradient-success mb-3">
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="card-header">
                <span class=" text-info display-4"> Menu Scanning </span>

              </div>

              <div class="card-body text-dark">

                <table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

                  <thead>
                    <tr class="font-weight-bold text-default">
                      <th>
                        <center> Image</center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>
                        <div class="-grouformp">
                          <input type="file" name="image" accept="image/*">

                        </div>
                      </td>

                      <td>
                        <center>
                          <div class="form-group ">
                            <input type="submit" value="Submit" name="Disease_Predict">
                          </div>
                        </center>
                      </td>
                    </tr>
                  </tbody>


                </table>
              </div>
            </form>
          </div>
          <div class="card text-white bg-gradient-success mb-3">
            <div class="card-header">
              <span class=" text-success display-4"> Result </span>
            </div>

            <h4>
              <?php


              // if (isset($_POST['Disease_Predict'])) {
              //     if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
              //         $uploadedFile = $_FILES['image']['tmp_name'];

              //         if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile)) {
              //             $command = escapeshellcmd("python ML/disease_prediction/disease_prediction.py $uploadedFile");
              //             $output = passthru($command);
              //             echo $output;
              //         } else {
              //             echo "Failed to upload image.";
              //         }
              //     } else {
              //         echo "No image uploaded or an error occurred during upload.";
              //     }
              // }

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if file was uploaded without errors
                if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                  $uploadDir = __DIR__ . '\\gp\\';
                  $uploadedFile = $uploadDir . basename($_FILES['image']['name']);
                  // Move the uploaded file to the specified folder
                  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile)) {
                    $command = escapeshellcmd("python healthyclass.py $uploadedFile");
                    $output = passthru($command); 
                    $lines = explode("\n", $output);

// Print all lines except the first two
			for ($i = 1; $i < count($lines); $i++) {
    			echo $lines[$i] . PHP_EOL;
}
                  } else {
                    echo "<p>Failed to move the uploaded file.</p>";
                  }
                } else {
                  echo "<p>No image uploaded or an error occurred during upload.</p>";
                }
              }
              ?>
            </h4>
          </div>
        </div>
      </div>
    </div>

  </section>


</body>

</html>