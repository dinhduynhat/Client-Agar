<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>
<body>
<form action="checkdir.php">
  <input type="submit" value="click on me!">
</form>

<div class="the-return">
  [HTML is replaced when successful.]
</div>

<script type="text/javascript">
$("document").ready(function(){
var data = {
      "action": "test"
    };
data = $(this).serialize() + "&" + $.param(data);
$.ajax({
      type: "POST",
      dataType: "json",
      url: "checkdir.php", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
        $(".the-return").html(data["names"]);
        //alert("Form submitted successfully.\nReturned json: " + data["json"]);
      }
    });
});
</script>
</body>