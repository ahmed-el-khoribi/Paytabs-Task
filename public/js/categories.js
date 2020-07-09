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
        if(i === 0){
            sel.append('<option disabled selected>-- Choose Category --</option>');
        }
        
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
              if(element.getAttribute("data-creator")){
                $("#div_" + element.getAttribute("data-creator")).remove();
              }
              
              element.setAttribute('data-creator', parent_id);
              
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
      div.append('<div class="col-md-12" id="div_' + referenceID + '"><h3><center>Child Categories of ' + title + '</center></h3><select onchange="performAJAX(this)" class="form-control" id="select' + referenceID + '"></select></div>');
  
      let sel = $('#select' + referenceID);
  
      for (var i = 0; i < data.length; i++) {
          if(i === 0){
              sel.append('<option disabled selected>-- Choose Sub-Category --</option>');
          }
          
          sel.append('<option value="' + data[i].id + '">' + data[i].title + '</option>');
      }
      $("#newChilds").show();
  }