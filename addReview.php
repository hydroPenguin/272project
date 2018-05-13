
<form id="addReviewForm" name="addReview action="<?php $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8">
    <fieldset><legend>Review This Product</legend>
        <p><label for="rating">Rating</label><input type="radio" name="rating"
                                                    value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
            <input type="radio" name="rating" value="3" /> 3 <input type="radio"
                                                                    name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1</p>
        <p><label for="review">Review</label><textarea name="review" rows="8" cols="40">
       </textarea></p>
        <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button name="addReviewButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit Review</button>
        </div>
        <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
        <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
    </fieldset>
</form>

<?php
if (isset($_POST['addReviewButton'])) {

    extract($_POST);
    //if the text field section has different names, change them to the name you used
    if (!$_POST['review'] || !$_POST['rating']) {
        fieldsBlank();
        die();
    }
    // change the host, user, password and database to the actual value in the host
    $conn = mysqli_connect('jinshikai50430.ipagemysql.com',"guest_newuser","******","mydb");
    if (!$conn) {
        die("Failed to connect to the database");
    }
    // change the table name and other fields to the actual one
    $sql = "INSERT INTO users (productName, review, rating) values (?,?,?)";
    $stmt = mysqli_prepare($conn,$sql);
    // change the name for actual name in the page
    $stmt->bind_param("sds",$_POST['productName'],$_POST['Rating'],$_POST['Review']);
    // print the message, delete this section if you did not want this
    if ($stmt->execute()){
        print("New reviews submitted successfully<br />");
        print("<strong>Please don't add the same review again!</strong>");
    }
    else {
        die("Error: ".$sql."<br>".$conn->error);
    }

    $conn->close();
}
function fieldsBlank()
{
    print("<strong>Please fill in all form fields.<br /></strong>");
}
?>