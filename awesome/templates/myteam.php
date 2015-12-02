


<?php
$csv = array_map('str_getcsv', file('bballstats.csv'));
?>


<head>


<script>
$(document).ready(function(){
 $('#myteam td').each(function(){
    var playervalue = $(this).attr("value");   
    console.log(playervalue);
   
     if( playervalue === 'none'){
    $(this).html('No Players in team');
    }
    else{
     var playerinfo = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(0).html();
     var playerpos = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(1).html();
      var playerteam = $('#draft tr[value="'+$(this).attr("value")+'"]').children("td").eq(3).html();
     console.log(playerinfo);
     $(this).html('<td>'+playerinfo+'<td>'+playerpos+'<td>'+playerteam);
    }
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
 



<table id ="myteam" class ="myteam" >
 <thead>
    <tr>
    <th value = "0"></th>
     </tr>
  </thead> 
  <?php if(!empty($positions[0])):  ?>
    <?php foreach ($positions as $position): ?>
        <tr>
     <td class = "myteam"value ="<?php echo htmlspecialchars($position); ?>"  ></td>
     </tr>
     
    <?php endforeach ?>
      <?php else: ?>
                <tr>
                    <td value = "none" >No players in team</td>
                </tr>
    <?php endif ?>
    
</table>
<table id ="draft" class="display"cellspacing="0" width="50%">
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


 </div>          

      





