<?php
require_once "lib/_config.php";

${"MyVar"};

?>

<html lang="en">
<head>
  <title>Entry</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="ckeditor/ckeditor.js"></script>
  <script src="ckeditor/samples/js/sample.js"></script>
  <link rel="stylesheet" href="ckeditor/samples/css/samples.css">
  <link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
</head>
<body  id="main">






<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Drug Entry</div>
    <div class="panel-body">
        <form method="post" action="insert.php"  >
                     <input type="text" name="drug_name" class="form-control" placeholder="Drug Name">
                     <input type="text" name="drug_company" class="form-control" placeholder="Drug Company">
                     <input type="text" name="drug_compositions" class="form-control" placeholder="Drug Compositions">
                     <input type="text" name="drug_price" class="form-control" placeholder="Drug Price">
                     <select name="drug_prescription" class="form-control" >
                      <option value="">Prescription Necessary ?</option>
                       <option value="Yes">Yes</option>
                       <option value="No">No</option>
                     </select>
                     <select name="drug_packing" class="form-control" >
                      <option value="">Drug Packing ?</option>
                       <option value="Stripe">Stripe</option>
                       <option value="Bottle">Bottle</option>
                     </select>
                         <textarea class="form-control" name="drug_used_for" placeholder="Drug Used For"></textarea>
                         <textarea class="form-control" name="drug_unsafe_with" placeholder="Drug Unsafe With"></textarea>
                         <textarea class="form-control" name="drug_substitute" placeholder="Drug Substitutes"></textarea>
                    <input type="text" name="drug_quantity_by_packing" class="form-control" placeholder="Quantity Per Packet">
            
<br><br>

                    <div class="panel panel-default">
                    <div class="panel-heading">Drug Composition</div>
                    <div class="panel-body">
                        <div class="input-group control-group after-add-more">  
                         <input type="text" name="dc_name[]" class="form-control" placeholder="Enter Composition Name Here">
                         <textarea class="form-control" name="dc_uses[]" placeholder="Drug Uses"></textarea>
                             <textarea class="form-control" name="dc_side_effects[]" placeholder="Drug Side Effects"></textarea>
                             <textarea class="form-control" name="dc_how_to_use[]" placeholder="How to Use"></textarea>
                             <textarea class="form-control" name="dc_how_drug_work[]" placeholder="How Drug Works"></textarea>
                            <div class="input-group-btn"> 
                            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                            </div>
                        </div>
                    </div>
                    </div>
                    

<br><br>

                    <div class="panel panel-default">
                    <div class="panel-heading">Drug Info</div>
                    <div class="panel-body">
                      <div class="input-group control-group1 after-add-more1">      
                         <select name="di_type" class="form-control" >
                              <option value="">Drug Info Type ?</option>
                               <option value="Expert">Expert</option>
                               <option value="Warning">Warning</option>
                          </select>
                          <input type="text" name="di_composition[]" class="form-control" placeholder="Enter Composition Name Here">
                          <input type="text" name="di_topic[]" class="form-control" placeholder="Enter Info Topic">
                          <textarea class="form-control" name="di_content[]" placeholder="Drug Info"></textarea>
                            <div class="input-group-btn"> 
                            <button class="btn btn-success add-more1" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                            </div>
                      </div>
                    </div>
                    </div>
                    <input type="submit" name="save" class="form-control btn btn-success">

 </form>
    

        <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
                        <div class="copy-fields hide">
                          <div class="control-group input-group" style="margin-top:10px">
                          <input type="text" name="dc_name[]" class="form-control" placeholder="Enter Composition Name Here">
                         <textarea class="form-control" name="dc_uses[]" placeholder="Drug Uses"></textarea>
                             <textarea class="form-control" name="dc_side_effects[]" placeholder="Drug Side Effects"></textarea>
                             <textarea class="form-control" name="dc_how_to_use[]" placeholder="How to Use"></textarea>
                             <textarea class="form-control" name="dc_how_drug_work[]" placeholder="How Drug Works"></textarea> 
                            <div class="input-group-btn"> 
                              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                          </div>
                        </div>


                        <div class="copy-fields1 hide">
                          <div class="control-group1 input-group" style="margin-top:10px">
                           <select name="di_type[]" class="form-control" >
                          <option value="">Drug Info Type ?</option>
                           <option value="Expert">Expert</option>
                           <option value="Warning">Warning</option>
                         </select>
                         <input type="text" name="di_composition[]" class="form-control" placeholder="Enter Composition Name Here">
                         <input type="text" name="di_topic[]" class="form-control" placeholder="Enter Info Topic">
                          <textarea class="form-control" name="di_content[]" placeholder="Drug Info"></textarea>
                            <div class="input-group-btn"> 
                              <button class="btn btn-danger remove1" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                          </div>
                        </div>
          </div>
          </div>
        </div>











<script type="text/javascript">

    $(document).ready(function() {

  //here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more").click(function(){ 
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });

   

  //here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more1").click(function(){ 
          var html1 = $(".copy-fields1").html();
          $(".after-add-more1").after(html1);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove1",function(){ 
          $(this).parents(".control-group1").remove();
      });

    });

</script>
<script>
  initSample();
</script>

</body>
</html>