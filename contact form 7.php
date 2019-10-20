<form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
            [text* form_name id:form_name data-error:"Firstname is required." placeholder "Name"]
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
            [email* email id:email placeholder data-error:"E-mail id is required." "E-Mail ID"]
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
            [text phone id:phone placeholder "contact no."]
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
[select no_of_persons id:no_of_persons class:selectpicker include_blank "1" "2" "3"]
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
[text* date-picker id:date-picker data-error:"Date is required." placeholder "Date"]
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
[text* time-picker id:time-picker ata-error:"Time is required." placeholder "Time"]
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">

            <select name="preferred_food" id="preferred_food" class="selectpicker">
                <option selected disabled>preferred food</option>
                <option>Indian</option>
                <option>Continental</option>
                <option>Mexican</option>
            </select>
        </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-box">
            <select name="occasion" id="occasion" class="selectpicker">
                <option selected disabled>Occasion</option>
                <option>Wedding</option>
                <option>Birthday</option>
                <option>Anniversary</option>
            </select>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="reserve-book-btn text-center">
            <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">BOOK MY TABLE </button>
        </div>
    </div>
    <!-- end col -->
</form>