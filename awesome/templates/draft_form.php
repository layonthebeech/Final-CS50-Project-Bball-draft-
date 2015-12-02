
<?php
$csv = array_map('str_getcsv', file('bballstats.csv'));

?>

 <head>

     
<script type="text/javascript">

$(document).ready(function(){
    $('#draft').DataTable();
});

</script>

<script type = "text/javascript">



$(document).ready(function(){
 
  var count = 0;
  
     $("#submitbutton").prop('disabled', true);
  
   
  
  $("#draft tbody").on("click","tr", function() {
   // $("#myteam tbody").append($(this).clone());
 
    var position = $(this).children("td").eq(1).html();
  // find the td that has the content of the row that i clicked 
    var posofplayer = $('#myteam td[value="'+position+'"]:first').parent().html($(this).html()).attr("value",$(this).attr("value"));
    //if length of selector is 0 no match 
    if(posofplayer===0){


    }
    if( posofplayer.length !== 0){
     count++;
    console.log(count);
    $(this).hide();
    }
    if(count ===9){
  $("#submitbutton").prop('disabled', false);
}
  });
    
  $('#myteam tbody').on("click","tr", function() {
    
   if(count <9){
  $("#submitbutton").prop('disabled', true);
}
    console.log(count);
  var position = $(this).children("td").eq(1).html();
    $('#draft tr[value="'+$(this).attr("value")+'"]').show();
    console.log(position);

    if(position){
      count--;
    $(this).html('<td value="'+position+'"> '+position+' <td>');
  }
  }); 

$("#submitbutton").click(function(){
 var myteam = [];

  $('#myteam tbody tr').each(function(){
    myteam.push($(this).attr("value")); 
  });
  var request = {'myteam':myteam};
  console.log(myteam);
$.post("draft.php",request, function(response){
    console.log(response);
});
});





});


</script>

 




</head>

 <button id = "submitbutton" class="btn btn-default" >Save My Team</button>

<table id ="myteam"  >
 <thead>
    
    <th ><?php echo implode('</th><th>', $csv[0]); ?></th>
    
  </thead>
  <tbody>
  <tr>
     <td value ="PG" >PG</td>
      
      
     </tr>
      <tr>
     <td value ="PG" >PG</td>
      
      
     </tr>
      <tr>
     <td value ="SG" >SG</td>
      
      
     </tr>
      <tr>
    <td value ="SG" >SG</td>
      
      
     </tr>
      <tr>
     <td value ="SF" >SF</td>
      
      
     </tr>
      <tr>
     <td value ="SF" >SF</td>
      
      
     </tr>
      <tr>
   <td value ="PF" >PF</td>
      
      
     </tr>
      <tr>
    <td value ="PF" >PF</td>
      
      
     </tr>
      <tr>
     <td value ="C" >C</td>
      
      
     </tr>
    </tbody>
</table>




      
     
            
       
 
<table id ="draft" style="width:auto" >
  <thead>
    <tr >
  
      <th ><?php echo implode('</th><th>', $csv[0]); ?></th>
    </tr>
  </thead>
  <tbody>
 
   <?php $count = 0;
      
 ?>
<?php foreach ($csv as $row): //array_map('htmlentities', $row); ?>

    <tr value = "<?php echo $count++;?>">
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

</div>
