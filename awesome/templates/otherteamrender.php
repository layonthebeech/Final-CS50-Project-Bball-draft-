<?php
$csv = array_map('str_getcsv', file('bballstats.csv'));
?>


<head>
<script type="text/javascript">
$(document).ready(function(){

 
});


</script>
<script>
$(document).ready(function(){

      $('#otherdraft').hide();
     
     $('#otherteam td').each(function(){
    var playervalue = $(this).attr("value");   
    console.log(playervalue);
  var playerinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(0).html();
     var playerpos = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(1).html();
      var playerteam = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(3).html();
     console.log(playerinfo);
     $(this).html('<td>'+playerinfo+'<td>'+playerpos+'<td>'+playerteam);
    
 });
  
   $('#otherteam th').each(function(){
     var playerinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(0).html();
     var playerpos = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(1).html();
      var playerteam = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(3).html();
   
   
    var playerheaderinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').html();
     $('#otherteam th').html('<td>'+playerinfo+'<td>'+playerpos+'<td>'+playerteam);
     });
     
     
  

     
    });
   
</script>
<script>
$(document).ready(function(){

   $('#myteam td').each(function(){
    var playervalue = $(this).attr("value");   
    console.log(playervalue);
     var playerinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(0).html();
     var playerpos = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(1).html();
      var playerteam = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(3).html();
     console.log(playerinfo);
     $(this).html('<td>'+playerinfo+'<td>'+playerpos+'<td>'+playerteam);
    
 });
   $('#draft').hide();
   $('#myteam th').each(function(){
   var playerinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(0).html();
     var playerpos = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(1).html();
      var playerteam = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(3).html();
   
   
    var playerheaderinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').html();
     $('#myteam th').html('<td>'+playerinfo+'<td>'+playerpos+'<td>'+playerteam);
     });
     

     
     
        });
        
</script>

</head>

<div>



<table id ="otherteam" class = "myteam" >  
 <thead>
    <tr>
    <th value = "0"></th>
     </tr>
  </thead>
  <tbody>
  <tr><?php echo $teamid ?>'s team 
     <td value ="<?= $otherpositions[0] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $otherpositions[1] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $otherpositions[2] ?>" ></td>
      
      
     </tr>
      <tr>
    <td value ="<?= $otherpositions[3] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $otherpositions[4] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $otherpositions[5] ?>" ></td>
      
      
     </tr>
      <tr>
   <td value ="<?= $otherpositions[6] ?>" ></td>
      
      
     </tr>
      <tr>
    <td value ="<?= $otherpositions[7] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $otherpositions[8] ?>" ></td>
      
      
     </tr>
    </tbody>
</table>


<table id ="myteam" class = "myteam" >
 <thead>
    <tr>MY TEAM
    <th value = "0"></th>
     </tr>
  </thead>
  <tbody>
  <tr>
     <td value ="<?= $positions[0] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $positions[1] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $positions[2] ?>" ></td>
      
      
     </tr>
      <tr>
    <td value ="<?= $positions[3] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $positions[4] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $positions[5] ?>" ></td>
      
      
     </tr>
      <tr>
   <td value ="<?= $positions[6] ?>" ></td>
      
      
     </tr>
      <tr>
    <td value ="<?= $positions[7] ?>" ></td>
      
      
     </tr>
      <tr>
     <td value ="<?= $positions[8] ?>" ></td>
      
      
     </tr>
    </tbody>
</table>




<table id ="draft" class="display"cellspacing="0" width="50%" style="float: left;">
  <thead>
    <tr >
  
      <th><?php echo implode('</th><th>', $csv[0]); ?></th>
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




