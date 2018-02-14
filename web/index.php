<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  <?php if (isset($_GET['submitted'])) { ?>
   <div style="border: 3px solid red; padding: 10px;"> 
  <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>text: <?php echo htmlspecialchars($_GET['text']); ?></p>
     <p>text: <?php echo htmlspecialchars($_GET['my-textarea']); ?></p>
     <p>text: <?php echo htmlspecialchars($_GET['my-color']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
     </div>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <div style="border: 2px solid green;">
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
     <input type="text" name="text"><br>
    <textarea id="my-textarea" name="my-textarea" style="resize:none" placeholder="Введите многострочный текст"></textarea><br>
    <input id="my-color" name="my-color" type="color"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
    
  </form>
  </div>
  <?php } ?>

</body>
</html>
