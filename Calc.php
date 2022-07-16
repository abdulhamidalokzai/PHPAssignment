 <html>
    <head>

    <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        
    
  <form method="post" class="mainlayout" action="">
     
    <div class="c-header">
      <h3>DEMO   <span>using PHP</span></h3>
    </div>

    <?php echo $errorMsg; ?> 

    <!--   Field -->
    <div class="c-field">
      <input class="form-control" type="text" readonly name="operand1" value="<?php echo $output; ?>" />
    </div>

    <!--   Keys -->
    <div class="c-keys">
      <div class="c-row">
        <button name="clear" value="1" type="submit" class="btn btn-clear">Clear</button>
        <button name="operator" value="/" type="submit" class="btn">/</button>
      </div>
      <div class="c-row">
        <button name="operand2" value="7" type="submit" class="btn">7</button>
        <button name="operand2" value="8" type="submit" class="btn">8</button>
        <button name="operand2" value="9" type="submit" class="btn">9</button>
        <button name="operator" value="*" type="submit" class="btn">&times;</button>
      </div>
      <div class="c-row">
        <button name="operand2" value="4" type="submit" class="btn">4</button>
        <button name="operand2" value="5" type="submit" class="btn">5</button>
        <button name="operand2" value="6" type="submit" class="btn">6</button>
        <button name="operator" value="-" type="submit" class="btn">-</button>
      </div>
      <div class="c-row">
        <button name="operand2" value="1" type="submit" class="btn">1</button>
        <button name="operand2" value="2" type="submit" class="btn">2</button>
        <button name="operand2" value="3" type="submit" class="btn">3</button>
        <button name="operator" value="+" type="submit" class="btn">+</button>
      </div>
      <div class="c-row">
        <button name="operand2" value="0" type="submit" class="btn">0</button>
        <button name="operand2" value="." type="submit" class="btn">.</button>
        <button name="result" value="1" type="<?php echo $op2 ? 'submit' : 'button'; ?>" class="btn btn-secondary">=</button>
      </div>
    </div>

 
  </form>
  <!--   Layout UI End --> 
  </body>
  </html>



  <?php
 

 
  $op1 = isset($_REQUEST['operand1']) ? $_REQUEST['operand1'] : '';
  $op2 = isset($_REQUEST['operand2']) ? $_REQUEST['operand2'] : '';
  $optr = isset($_REQUEST['operator']) ? $_REQUEST['operator'] : '';

   
  if (!$op1 && $optr) {
    $optr = '';
  }

 
  if (!$op1 && $op2 == '.') {
    $op1 = 0; // add zero prefix 
  }

  
  if ($optr) {
    $lastVal = substr($op1, -1);
    $operators = array('+','-','*','/','.');
    if (in_array($lastVal, $operators)) {
      $optr = '';
    }
  }

 
  if (strpos($op1, '=') === false) {
    $output = $op1.$optr.$op2; 
  } else {
    $output = $op2;
  }

 
  if (isset($_REQUEST['result']) && ($_REQUEST['result'] == 1)) {
    $output =  '= ' . eval('return '.$output.';'); 
  }

 
  if (isset($_REQUEST['clear']) && ($_REQUEST['clear'] == 1)) {
    $output = $op1 = $op2 = $optr = '';
  }
  ?>


