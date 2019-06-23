@include ('includes.header')
@include ('includes.messages')

<div class="container">
<div id="drop-container"></div> 
<div class="form-group">
		
		</div>
	
	<form class="logintest" method="POST" action="{{url('user')}}">
		{{csrf_field()}}
		<div class="container">
		
<div class="col-sm-6">


		<div class="form-group">
		<label for="">Enter Text</label>
		<input type="text" name="text" class="form-control">

	</div>
	<div class="form-group">
		<label for="">Map</label>
		<input type="text" name="name" id="pac-input" class="form-control" id="default" list="languages">


		<datalist id="languages">
    <option value="Mumbai">
    <option value="Bengaluru">
    <option value="Kolkata">
    <option value="Chennai">
    <option value="Hyderabad">
    <option value="Ahmedabad">
    <option value="Jaipur">
    <option value="Pune">
    <option value="New Delhi">
    <option value="Chandigarh">
    <option value="Kochi">
    <option value="Indore">
  </datalist>

    <div id="map" style="height: 400px;width:600px"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
<div class="form-group">
		
		</div>



<div class="form-group">
		<label for="">Lat</label>
<input type="text" name="Lat" id="Lat" value="">
<div class="form-group">
		<label for="">lng</label>
<input type="text" name="lng" id="lng" value="">

<div class="form-group">
		
		</div>


	<select name="month" size="1" class="form-control">
    <?php
    for ($i = 0; $i < 12; $i++) {
        $time = strtotime(sprintf('%d months', $i));   
        $label = date('F', $time);   
        $value = date('n', $time);


echo "<option value='$value'>$label</option>";

    }
    ?>
</select>

<div class="form-group">

</div>

<p>Date: <input type="text" name="Date" id="datepicker"></p>




		<?php 

date_default_timezone_set('Asia/Kolkata');
echo date('h:i:s A');

?>
		<div class="form-group">
		
		</div>
		<input class="btn btn-primary" type="Submit" name="Submit" value="Submit">
	</form>
</div>

@include ('includes.footer')