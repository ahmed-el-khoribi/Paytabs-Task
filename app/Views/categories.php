<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter Categories</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <?= link_tag('plugins/AjaxWheelLoader/css/loader.css'); ?>
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
</head>
<body>
  
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>Codeigniter Categories</h1>
    </div>
    <div class="panel-body">
      <div class="col-md-12" id="parent_categories">
        <h3>
            <center>
                Parent Categories
            </center>
        </h3>
        <select class="form-control" id="parent" onchange="performAJAX(this)">
            <option>-- --</option>
        </select>
      </div>
      <div id="newChilds" style="display:none">
      </div>
    </div>
  </div>
</div>
  
<?= script_tag('plugins/AjaxWheelLoader/js/loader.js'); ?>
<?= script_tag('js/categories.js'); ?>
   
</body>
</html>