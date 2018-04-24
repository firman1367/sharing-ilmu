<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="plugins/iCheck/all.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
      <!-- icon -->
      <link rel="icon" href="dist/img/dss.png">
      <!-- skin -->
      <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
      <!-- fancy box -->
      <link rel="stylesheet" href="dist/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
      <!-- original -->
      <link rel="stylesheet" href="original.css" type="text/css">
 <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/docs.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo1.js"></script>
  <link href="dist/css/summernote.css" rel="stylesheet">
  
</head>
<body>
  <div id="summernote"><p>Hello Summernote</p></div>
  <script src="dist/css/summernote.js"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
          height: 300
        });
    });
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script>
</body>
</html>