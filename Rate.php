<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Exchange Rate</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
  
</head>

<body>
<div class="continer">
<?php
  function get_currency($amount, $from, $to) {
      if($from == 'THB'){
        if($to == 'USD'){
          $result = $amount * 0.02855;
        }else if($to == 'SGD'){
          $result = $amount * 0.04048;
        }else if($to == 'LAK'){
          $result = $amount * 231.72;
        }

      }else if($from == 'USD'){
        if($to == 'SGD'){
          $result = $amount * 1.4181;
        }else if($to == 'THB'){
          $result = $amount * 35.019;
        }else if($to == 'LAK'){
          $result = $amount * 8116.24;
        }

      }else if($from == 'SGD'){
        if($to == 'USD'){
          $result = $amount * 0.70516;
        }else if($to == 'THB'){
          $result = $amount * 24.6934;
        }else if($to == 'LAK'){
          $result = $amount * 5723.10;
        }

      }else if($from == 'LAK'){
        if($to == 'USD'){
          $result = $amount * 0.0001232;
        }else if($to == 'THB'){
          $result = $amount * 0.004315;
        }else if($to == 'SGD'){
          $result = $amount * 0.0001747;
        }  
      }
      return $result;
  }

  if (isset($_GET['submit'])) {
    
    $val1 = htmlentities($_GET['from']);
      $val2 = htmlentities($_GET['to']);
      $money = htmlentities($_GET['num']);
      if($val1==$val2){
        echo "";
        $result = $money;
    }else{
        $result = get_currency($money,$val1, $val2);
    }
      $moneylast = $money." ".$val1;
      $resultlast = $result." ".$val2;
  }
?>
<script>
  function myFunction() {
      document.getElementById("from").innerHTML = "<?php echo $moneylast ?>";
      document.getElementById("to").innerHTML = "<?php echo $resultlast ?>";
  }
</script>






<div class="login-form">

  <div class="page-header">
    <div class="title-header"><h3>Currency Converter</h3></div>
  </div>
  </form>

    
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/62476/dynamics.min.js'></script>

    <script src="js/index.js"></script>


    <form  method="GET">
    <br>
    
<div class="result pulse animated infinite">
    <?php  

  if(isset($moneylast)&&isset($resultlast)){

    echo $moneylast." : ".$resultlast;
  }
  
?></div>

<br>
  <input type="text" name="num" placeholder="Amount" ><br>


<div class="box_button">
  <section class="button">
  <div class="dropdown">
    <select name="from" class="dropdown-select">
      
      <option value="THB">บาทไทย (THB)</option>
      <option value="SGD">ดอลลาร์สิงคโปร์ (SGD)</option>
      <option value="USD">ดอลลาร์สหรัฐ (USD)</option>
      <option value="LAK">กีบลาว (LAK)</option>
  </select> 
  </div>
  <section class="button">
  <div class="dropdown">
    <select name="to" class="dropdown-select">

      <option value="THB">บาทไทย (THB)</option>
      <option value="SGD">ดอลลาร์สิงคโปร์ (SGD)</option>
      <option value="USD">ดอลลาร์สหรัฐ (USD)</option>
      <option value="LAK">กีบลาว (LAK)</option>
  </select>
</div>
</div>

  <br>
<br>
<input type="submit" class="pulse animated infinite" name="submit" value="EXCHANGE" onclick="myFunction()"> </input>
</form>






  </div>

</div>
</body>
</html>
