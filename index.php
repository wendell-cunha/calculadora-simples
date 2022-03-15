<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 

<form action="index.php" method="get">
<p>
  N1: <input type="number" name="n1"><br>
</p>
<p>
  N2: <input type="number" name="n2"><br>
</p>
<input type="submit">
</form>
<style>
  p{
    margin: 10px;
    color: red;
    
  
  }
  input{
    margin:10px;
  }
  
</style>
  <p>
    The anwser is <?php echo $_GET['n1'] + $_GET['n2']?>
  </p>