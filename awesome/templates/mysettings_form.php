<head>
<script type="text/javascript">

$(document).ready(function(){
   $(function() {
    $('#favteam').change(function() {
        this.form.submit();
    	});
	});
});
</script>
</head>

<form  action="mysettings.php" method="post">
    <fieldset>

       
        <input type="submit" name="delete" value="delete account"class="btn btn-default"> 


 
    </fieldset>
</form>

<form  action="mysettings.php" method="post">
<select class="form-control" name="favteam" id="favteam">
        <option value=""></option>
        <option value="atlantahawks">Atlanta Hawks</option>
<option value="bostonceltics">Boston Celtics</option>
<option value="brooklynnets">Brooklyn Nets</option>
<option value="charlottehornets">Charlotte Hornets</option>
<option value="chicagobulls">Chicago Bulls</option>
<option value="clevelandcavaliers">Cleveland Cavaliers</option>
<option value="dallasmavericks">Dallas Mavericks</option>
<option value="denvernuggets">Denver Nuggets</option>
<option value="detroitpistons">Detroit Pistons</option>
<option value="goldenstatewarriors">Golden State Warriors</option>
<option value="houstonrockets">Houston Rockets</option>
<option value="indianapacers">Indiana Pacers</option>
<option value="losangelesclippers">LA Clippers</option>
<option value="losangeleslakers">LA Lakers</option>
<option value="memphisgrizzlies">Memphis Grizzlies</option>
<option value="miamiheat">Miami Heat</option>
<option value="milwaukeebucks">Milwaukee Bucks</option>
<option value="minnesotatimberwolves">Minnesota Timberwolves</option>
<option value="neworleanspelicans">New Orleans Pelicans</option>
<option value="newyorkknicks">New York Knicks</option>
<option value="oklahomacitythunder">Oklahoma City Thunder</option>
<option value="orlandomagic">Orlando Magic</option>
<option value="philadelphiasixers">Philadelphia Sixers</option>
<option value="phoenixsuns">Phoenix Suns</option>
<option value="portlandtrailblazers">Portland Trail Blazers</option>
<option value="sacramentokings">Sacramento Kings</option>
<option value="sanantoniospurs">San Antonio Spurs</option>
<option value="torontoraptors">Toronto Raptors</option>
<option value="utahjazz">Utah Jazz</option>
<option value="washingtonwizards">Washington Wizards</option>
        </select>
       
      
</form>


