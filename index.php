<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>

<?php echo "$component_Nav";?>
<div class="container">
<!--end container -->
</div>
</main>

<?php echo "$component_Footer";?>
<script>
/*This code ensures our nav bar is able to be toggled closed. */
    $("#navbarSupportedContent a:not(.dropdown-toggle)").click(function() {
      $("#navbarSupportedContent").collapse("hide");
    });
  </script>
</body>
</html>
