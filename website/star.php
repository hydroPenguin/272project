
<!-- From Codepen https://codepen.io/jamesbarnett/ -->
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }

/****** Style Star Rating Widget *****/

.rating {
  border: none;
  float: right;
}

.rating > input { display: none; }
.rating > label:before {
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before {
  content: "\f089";
  position: absolute;
}

.rating > label {
  color: #ddd;
 float: right;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
</style>

<div class="w3-container" align="center">
<div class="w3-card-4 w3-container w3-padding" >
	<form class="w3-container" method = "post" action = "addreview.php">
		<div class="w3-container w3-padding" style="padding-bottom: 18px;font-size : 24px;">Comments</div>
				<input type="text" id="comment" name="comment" style="width:850px;height:200px;" class="form-control" required/>
		<div class="w3-container w3-padding">
			<fieldset class="rating">
        <legend>Please rate before submit</legend>

        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="pname" value="<?php echo $_GET['name']; ?>">
		    <input type="radio" id="star5" name="rating" value="5" required/><label class = "full" for="star5"></label>
		    <input type="radio" id="star4half" name="rating" value="4.5" required/><label class="half" for="star4half"></label>
		    <input type="radio" id="star4" name="rating" value="4" required/><label class = "full" for="star4"></label>
		    <input type="radio" id="star3half" name="rating" value="3.5" required/><label class="half" for="star3half"></label>
		    <input type="radio" id="star3" name="rating" value="3" required/><label class = "full" for="star3"></label>
		    <input type="radio" id="star2half" name="rating" value="2.5" required/><label class="half" for="star2half"></label>
		    <input type="radio" id="star2" name="rating" value="2" required/><label class = "full" for="star2"></label>
		    <input type="radio" id="star1half" name="rating" value="1.5" required/><label class="half" for="star1half"></label>
		    <input type="radio" id="star1" name="rating" value="1" required/><label class = "full" for="star1"></label>
	    	<input type="radio" id="starhalf" name="rating" value="0.5" required/><label class="half" for="starhalf"></label>
			</fieldset>
		<div class="w3-container w3-padding">
			<button class="w3-button w3-round-xlarge w3-sand" name='Submit' type="submit" value="Submit">Submit</button>
		</div>
	</form>
</div>
</div>
</div>
