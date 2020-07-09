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
      <h1>Codeigniter Categories Parents</h1>
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
<script type="text/javascript">
$(document).ready(function(){
  /**
  * AJAX to initailize page with parent categories
   */
   $.ajax({
        type: "GET",  
        url: "/categories",
        dataType: "json",       
        success: function(response)  
        {
            initPage(response);
        }   
  });
    
   
});

/**
* Function to fill up select box for parent
 */
function initPage(data) 
{
    var sel = $("#parent");

    sel.empty();

    for (var i = 0; i < data.length; i++) {
        sel.append('<option value="' + data[i].id + '">' + data[i].title + '</option>');
    }
}

/**
* AJAX to get all children
 */
function performAJAX(element){
    var title = $(element).find('option:selected').text();
    var parent_id = element.value;

    $.ajax({
        type:"GET",
        url : "/categories/" + parent_id,
        dataType: "json",       
        success : function(response) {
            initChild(response, parent_id, title);
        },
        error: function() {
            alert('Error occured');
        }
    });
}

/**
* Function to fill up select box for child
 */
function initChild(data, referenceID, title) 
{
    let div = $("#newChilds");
    div.append('<div class="col-md-12"><h3><center>Child Categories of ' + title + '</center></h3><select onchange="performAJAX(this)" class="form-control" id="select' + referenceID + '"></select></div>');

    let sel = $('#select' + referenceID);

    for (var i = 0; i < data.length; i++) {
        sel.append('<option value="' + data[i].id + '">' + data[i].title + '</option>');
    }
    $("#newChilds").show();
}
</script>
   
</body>
</html>