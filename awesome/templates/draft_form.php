
<?php
$csv = array_map('str_getcsv', file('bballstats.csv'));

?>

 <head>

     
<script type="text/javascript">
//initialize datatable jquery plugin
$(document).ready(function(){
    $('#draft').DataTable();
});

</script>

<script type = "text/javascript">



$(document).ready(function(){
 //set count to 0
  var count = 0;
    //make submit disabled for now
     $("#submitbutton").prop('disabled', true);
  
   
  //when clicking the draft table
  $("#draft tbody").on("click","tr", function() {
   // $("#myteam tbody").append($(this).clone());
 //set position to the position of the player clicked
    var position = $(this).children("td").eq(1).html();
  // find the td that has the content of the row that i clicked 
    var posofplayer = $('#myteam td[value="'+position+'"]:first').parent().html($(this).html()).attr("value",$(this).attr("value"));
    //if length of selector is 0 no match 
 //if the position of the player isn't 0. I used length because it would be 0 if there wasn't anything there
    if( posofplayer.length !== 0){
     //add number to player count
     count++;
     //for debugging 
    console.log(count);
   //hide player clicked in draft table
    $(this).hide();
    }
    //if 9 players are selected the button is no longer disabled
    if(count ===9){
  $("#submitbutton").prop('disabled', false);
}
  });
    //when clicking the my team table to remove a player
  $('#myteam tbody').on("click","tr", function() {
    //check the count when you click 
   if(count <9){
    //disable button if not 9 players
  $("#submitbutton").prop('disabled', true);
}
//debugging 
    console.log(count);
    //set position to position of player clicked
  var position = $(this).children("td").eq(1).html();
  //show that player in the draft table again
    $('#draft tr[value="'+$(this).attr("value")+'"]').show();
    console.log(position);
    //make sure position isn't undefined or empty
    if(position){
      //remove number from count
      count--;
      //set table back to the position 
    $(this).html('<td value="'+position+'"> '+position+' <td>');
  }
  }); 
//function to push array of values into mysql table
$("#submitbutton").click(function(){
  //myteam array
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

<?php //loop to create table
foreach ($csv as $row): //array_map('htmlentities', $row); ?>

    <tr value = "<?php echo $count++;?>">
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

</div>
