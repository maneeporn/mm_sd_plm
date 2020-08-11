<!DOCTYPE html>
<html>
<body>
    <?php
    require_once "config.php";
    $userQuery = "SELECT * FROM product_material join material using(material_id) where product_id = 'AT0001' order by material_name ASC" ;
	$result = mysqli_query($connect,$userQuery);
	while ($row = mysqli_fetch_assoc($result))
	{
        
    }
    ?>

<h2>JavaScript Prompt</h2>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var txt;
  var person = prompt("Change product :", "Harry Potter");
  if (person == null || person == "") {
    txt = "User cancelled the prompt.";
  } else {
    txt = "Hello " + person + "! How are you today?";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

</body>
</html>