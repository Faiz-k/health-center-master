

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Shooting Star</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="stars" style="z-index: -1;">
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
</div>
<!-- partial -->



<div style="z-index: 0;">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            margin: 20px ;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        p {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
    <h1 style="color:white;">Skin Cancer Prediction</h1>
  
    <div style="background-color: #f9f9f969; border-radius: 10px;">
    <br>
      <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="gender" name="gender" value="Male">Male
    <input type="radio" id="gender" name="gender" value="Female">Female
    <input type="radio" id="gender" name="gender" value="Other">Other<br><br>

    <label for="skin-disease">Any Skin Disease History:</label>
    <input type="radio" id="skin-disease-yes" name="skin-disease" value="Yes">Yes
    <input type="radio" id="skin-disease-no" name="skin-disease" value="No">No<br><br>

    <label for="disease-name">Disease Name (if yes):</label>
    <input type="text" id="disease-name" name="disease-name"><br><br>

    <label for="allergies">Are You Allergic to Anything:</label>
    <input type="radio" id="allergies-yes" name="allergies" value="Yes">Yes
    <input type="radio" id="allergies-no" name="allergies" value="No">No<br><br>

    <button  onclick="saveFormData()"><a href="./report.html">Get Report</a></button>
    <br><br>
  </div>


    <form method="POST" action="" enctype="multipart/form-data" style="background-color: #ffffff54;">

        <label for="image">Upload Skin Image:</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" >
        <button type="submit">Predict</button>
   
    </form>
    
  
  

    <?php
    $API_URL = "https://api-inference.huggingface.co/models/sanjit23/skin-cancer";
    $API_KEY = "Bearer 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"; // Replace with your actual API key

    function query($filename) {
        global $API_URL, $API_KEY;

        $data = file_get_contents($filename);
        $headers = array(
            "Authorization: $API_KEY",
            "Content-Type: application/octet-stream"
        );

        $ch = curl_init($API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $tempFile = $image['tmp_name'];

        $output = query($tempFile);

        $maxScore = -1;
        $maxLabel = "";

        foreach ($output as $result) {
            if ($result["score"] > $maxScore) {
                $maxScore = $result["score"] * 100;
                $maxLabel = $result["label"];
            }
        }

        echo '<h2 style="color:white;">Prediction: ' . $maxLabel . ' with probability of ' . $maxScore . '%</h2>';
    }
    ?>
 -->
   



 <script>
  // Function to save the form data to local storage
  function saveFormData() {
      // Get the form elements by their IDs
      const name = document.getElementById("name").value;
      const age = document.getElementById("age").value;
      const gender = document.querySelector('input[name="gender"]:checked').value;
      const skinDisease = document.querySelector('input[name="skin-disease"]:checked').value;
      const diseaseName = document.getElementById("disease-name").value;
      const allergies = document.querySelector('input[name="allergies"]:checked').value;
  console.log(name,age,gender,skinDisease)
      // Create an object to store the form data
      const formData = {
          name,
          age,
          gender,
          skinDisease,
          diseaseName,
          allergies
      };
  
      // Convert the object to a JSON string
      const formDataJSON = JSON.stringify(formData);
  
      // Save the JSON string to local storage
      localStorage.setItem("formData", formDataJSON);
  
      // You can add a confirmation or redirect to another page here if needed
  }
  </script>
  



</div>

<style>

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
  overflow: hidden;
}

.stars {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  transform: rotate(-45deg);
}

.star {
  --star-color: var(--primary-color);
  --star-tail-length: 6em;
  --star-tail-height: 2px;
  --star-width: calc(var(--star-tail-length) / 6);
  --fall-duration: 9s;
  --tail-fade-duration: var(--fall-duration);
  position: absolute;
  top: var(--top-offset);
  left: 0;
  width: var(--star-tail-length);
  height: var(--star-tail-height);
  color: var(--star-color);
  background: linear-gradient(45deg, currentColor, transparent);
  border-radius: 50%;
  filter: drop-shadow(0 0 6px currentColor);
  transform: translate3d(104em, 0, 0);
  animation: fall var(--fall-duration) var(--fall-delay) linear infinite, tail-fade var(--tail-fade-duration) var(--fall-delay) ease-out infinite;
}
@media screen and (max-width: 750px) {
  .star {
    animation: fall var(--fall-duration) var(--fall-delay) linear infinite;
  }
}
.star:nth-child(1) {
  --star-tail-length: 6.65em;
  --top-offset: 54.83vh;
  --fall-duration: 7.561s;
  --fall-delay: 6.664s;
}
.star:nth-child(2) {
  --star-tail-length: 7.21em;
  --top-offset: 12.39vh;
  --fall-duration: 7.275s;
  --fall-delay: 5.578s;
}
.star:nth-child(3) {
  --star-tail-length: 6.98em;
  --top-offset: 18.57vh;
  --fall-duration: 8.916s;
  --fall-delay: 4.55s;
}
.star:nth-child(4) {
  --star-tail-length: 6.92em;
  --top-offset: 24.33vh;
  --fall-duration: 10.909s;
  --fall-delay: 6.948s;
}
.star:nth-child(5) {
  --star-tail-length: 6.75em;
  --top-offset: 5.96vh;
  --fall-duration: 11.285s;
  --fall-delay: 6.216s;
}
.star:nth-child(6) {
  --star-tail-length: 6.67em;
  --top-offset: 35.99vh;
  --fall-duration: 8.055s;
  --fall-delay: 5.599s;
}
.star:nth-child(7) {
  --star-tail-length: 5.18em;
  --top-offset: 5.04vh;
  --fall-duration: 6.677s;
  --fall-delay: 9.894s;
}
.star:nth-child(8) {
  --star-tail-length: 7.3em;
  --top-offset: 71.26vh;
  --fall-duration: 10.744s;
  --fall-delay: 2.409s;
}
.star:nth-child(9) {
  --star-tail-length: 6.05em;
  --top-offset: 7.48vh;
  --fall-duration: 9.867s;
  --fall-delay: 7.172s;
}
.star:nth-child(10) {
  --star-tail-length: 6.63em;
  --top-offset: 20.36vh;
  --fall-duration: 10.805s;
  --fall-delay: 5.27s;
}
.star:nth-child(11) {
  --star-tail-length: 5.47em;
  --top-offset: 18.01vh;
  --fall-duration: 8.461s;
  --fall-delay: 7.892s;
}
.star:nth-child(12) {
  --star-tail-length: 6.74em;
  --top-offset: 29.03vh;
  --fall-duration: 8.986s;
  --fall-delay: 7.154s;
}
.star:nth-child(13) {
  --star-tail-length: 5.04em;
  --top-offset: 75.76vh;
  --fall-duration: 9.386s;
  --fall-delay: 3.739s;
}
.star:nth-child(14) {
  --star-tail-length: 5.08em;
  --top-offset: 78.69vh;
  --fall-duration: 8.984s;
  --fall-delay: 8.527s;
}
.star:nth-child(15) {
  --star-tail-length: 6.75em;
  --top-offset: 88.05vh;
  --fall-duration: 6.708s;
  --fall-delay: 0.436s;
}
.star:nth-child(16) {
  --star-tail-length: 6.1em;
  --top-offset: 53.03vh;
  --fall-duration: 7.952s;
  --fall-delay: 7.84s;
}
.star:nth-child(17) {
  --star-tail-length: 6.7em;
  --top-offset: 80.34vh;
  --fall-duration: 10.664s;
  --fall-delay: 6.211s;
}
.star:nth-child(18) {
  --star-tail-length: 5.06em;
  --top-offset: 56.92vh;
  --fall-duration: 6.454s;
  --fall-delay: 3.971s;
}
.star:nth-child(19) {
  --star-tail-length: 6.86em;
  --top-offset: 49.9vh;
  --fall-duration: 8.946s;
  --fall-delay: 3.973s;
}
.star:nth-child(20) {
  --star-tail-length: 5.38em;
  --top-offset: 55.13vh;
  --fall-duration: 9.363s;
  --fall-delay: 4.504s;
}
.star:nth-child(21) {
  --star-tail-length: 6.3em;
  --top-offset: 31.52vh;
  --fall-duration: 10.6s;
  --fall-delay: 7.721s;
}
.star:nth-child(22) {
  --star-tail-length: 5.82em;
  --top-offset: 92.53vh;
  --fall-duration: 7.321s;
  --fall-delay: 0.037s;
}
.star:nth-child(23) {
  --star-tail-length: 6.88em;
  --top-offset: 14.62vh;
  --fall-duration: 11.905s;
  --fall-delay: 1.345s;
}
.star:nth-child(24) {
  --star-tail-length: 7.5em;
  --top-offset: 41.15vh;
  --fall-duration: 7.317s;
  --fall-delay: 4.551s;
}
.star:nth-child(25) {
  --star-tail-length: 6.98em;
  --top-offset: 42.76vh;
  --fall-duration: 11.588s;
  --fall-delay: 1.734s;
}
.star:nth-child(26) {
  --star-tail-length: 6.29em;
  --top-offset: 10.28vh;
  --fall-duration: 6.702s;
  --fall-delay: 4.8s;
}
.star:nth-child(27) {
  --star-tail-length: 5.87em;
  --top-offset: 32.17vh;
  --fall-duration: 9.341s;
  --fall-delay: 1.402s;
}
.star:nth-child(28) {
  --star-tail-length: 6.39em;
  --top-offset: 43.15vh;
  --fall-duration: 6.144s;
  --fall-delay: 5.56s;
}
.star:nth-child(29) {
  --star-tail-length: 6.36em;
  --top-offset: 68.27vh;
  --fall-duration: 7.712s;
  --fall-delay: 6.794s;
}
.star:nth-child(30) {
  --star-tail-length: 6.65em;
  --top-offset: 68.8vh;
  --fall-duration: 10.453s;
  --fall-delay: 6.022s;
}
.star:nth-child(31) {
  --star-tail-length: 6.12em;
  --top-offset: 86.02vh;
  --fall-duration: 8.754s;
  --fall-delay: 8.042s;
}
.star:nth-child(32) {
  --star-tail-length: 6.73em;
  --top-offset: 82.34vh;
  --fall-duration: 7.146s;
  --fall-delay: 2.809s;
}
.star:nth-child(33) {
  --star-tail-length: 5.13em;
  --top-offset: 18.41vh;
  --fall-duration: 7.215s;
  --fall-delay: 0.558s;
}
.star:nth-child(34) {
  --star-tail-length: 6.33em;
  --top-offset: 99.66vh;
  --fall-duration: 10.179s;
  --fall-delay: 8.727s;
}
.star:nth-child(35) {
  --star-tail-length: 7.06em;
  --top-offset: 87.43vh;
  --fall-duration: 10.371s;
  --fall-delay: 2.789s;
}
.star:nth-child(36) {
  --star-tail-length: 5.26em;
  --top-offset: 33.99vh;
  --fall-duration: 10.616s;
  --fall-delay: 2.676s;
}
.star:nth-child(37) {
  --star-tail-length: 5.11em;
  --top-offset: 5.43vh;
  --fall-duration: 6.612s;
  --fall-delay: 6.725s;
}
.star:nth-child(38) {
  --star-tail-length: 6.8em;
  --top-offset: 90.59vh;
  --fall-duration: 7.332s;
  --fall-delay: 4.022s;
}
.star:nth-child(39) {
  --star-tail-length: 5.14em;
  --top-offset: 6.45vh;
  --fall-duration: 6.129s;
  --fall-delay: 7.001s;
}
.star:nth-child(40) {
  --star-tail-length: 6.78em;
  --top-offset: 61.1vh;
  --fall-duration: 7.763s;
  --fall-delay: 7.278s;
}
.star:nth-child(41) {
  --star-tail-length: 6.05em;
  --top-offset: 57.41vh;
  --fall-duration: 10.073s;
  --fall-delay: 8.628s;
}
.star:nth-child(42) {
  --star-tail-length: 5.1em;
  --top-offset: 28.84vh;
  --fall-duration: 6.488s;
  --fall-delay: 5.171s;
}
.star:nth-child(43) {
  --star-tail-length: 7.42em;
  --top-offset: 57.12vh;
  --fall-duration: 9.961s;
  --fall-delay: 8.092s;
}
.star:nth-child(44) {
  --star-tail-length: 7.36em;
  --top-offset: 4.62vh;
  --fall-duration: 8.077s;
  --fall-delay: 1.402s;
}
.star:nth-child(45) {
  --star-tail-length: 6.01em;
  --top-offset: 75.89vh;
  --fall-duration: 7.768s;
  --fall-delay: 0.759s;
}
.star:nth-child(46) {
  --star-tail-length: 7.12em;
  --top-offset: 38.84vh;
  --fall-duration: 7.958s;
  --fall-delay: 0.131s;
}
.star:nth-child(47) {
  --star-tail-length: 5.25em;
  --top-offset: 98.42vh;
  --fall-duration: 7.565s;
  --fall-delay: 1.746s;
}
.star:nth-child(48) {
  --star-tail-length: 7.05em;
  --top-offset: 19.19vh;
  --fall-duration: 9.493s;
  --fall-delay: 6.258s;
}
.star:nth-child(49) {
  --star-tail-length: 5.22em;
  --top-offset: 80.88vh;
  --fall-duration: 7.984s;
  --fall-delay: 5.047s;
}
.star:nth-child(50) {
  --star-tail-length: 5.35em;
  --top-offset: 70.84vh;
  --fall-duration: 6.495s;
  --fall-delay: 9.438s;
}
.star::before, .star::after {
  position: absolute;
  content: "";
  top: 0;
  left: calc(var(--star-width) / -2);
  width: var(--star-width);
  height: 100%;
  background: linear-gradient(45deg, transparent, currentColor, transparent);
  border-radius: inherit;
  animation: blink 2s linear infinite;
}
.star::before {
  transform: rotate(45deg);
}
.star::after {
  transform: rotate(-45deg);
}

@keyframes fall {
  to {
    transform: translate3d(-30em, 0, 0);
  }
}
@keyframes tail-fade {
  0%, 50% {
    width: var(--star-tail-length);
    opacity: 1;
  }
  70%, 80% {
    width: 0;
    opacity: 0.4;
  }
  100% {
    width: 0;
    opacity: 0;
  }
}
@keyframes blink {
  50% {
    opacity: 0.6;
  }
}</style>
</body>
</html>
