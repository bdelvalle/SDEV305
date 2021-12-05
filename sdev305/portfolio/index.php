<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <script>src="guestbook.js"</script>

    <title>Sign my Guestbook!</title>
    <!--  Favicon-->
    <link rel="icon" type="image/png" href="images/favicon.ico">


</head>
<body>
<div class="container" id="main">
<!-- Page header -->
<div class="jumbotron">
    <h1 class="display-4">Guestbook</h1>
    <p class="lead">Let's Stay in Touch!</p>

</div>
<!-- Order form -->
<form id="contact-form" action="confirm.php" method="get">

    <!--  Contact info  -->
    <fieldset class="form-group border p-2">
        <legend>Contact Information</legend>
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" aria-describedby="first name"
                   placeholder="Enter first name">
            <span class="err" id="err-fname">Please enter first name</span>
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" aria-describedby="last name"
                   placeholder="Enter last name">
            <span class="err" id="err-lname">Please enter last name</span></div>

        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title"
                   placeholder="Enter your job title">
            <span class="err" id="err-title">Please job title</span></div>

        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="text" class="form-control" id="linkedin" name="linkedin" aria-describedby="linkedin"
                   placeholder="Enter your LinkedIn URL">
            <span class="err" id="err-linkedin">Please enter your LinkedIn URL</span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email"
                   placeholder="Enter your Email">
            <span class="err" id="err-email">Please enter your email</span>
        </div>
    </fieldset>




    <!--How did we meet?-->
    <fieldset class="form-group border p-2">
        <legend>How did meet?</legend>
        <div class="form-group">
            <select class="form-control" id="met" name="met">
                <option value="none">Select a Size</option>
                <option value="meetup">Meetup</option>
                <option value="job-fair">Job Fair</option>
                <option value="nope">Haven't met yet.</option>
                <option value="other">Other</option>
            </select>
            <span class="err" id="err-size">Please select how we know each other.</span>
        </div>
        <div id="Other-block" class="form-group">
            <label for="othermet">Other</label>
            <textarea class="form-control" id="othermet" name="othermet" aria-describedby="other"
                      rows="5"></textarea>
            <span class="err" id="err-other">Please enter how we met if you selected other:</span>
        </div>
    </fieldset>
        <!--Mailing List-->
        <fieldset class="form-group border p-2">
            <legend>Mailing List</legend>
            <div class="form-group">
                <div class="checkbox">
                    <label><input id="mailing" type="checkbox" name="mailing" value="mailing" checked> Please add me to the mailing list!</label>
                </div>
            <legend>Please choose an email format:</legend>
            <div class="form-group">
                <div class="radio">
                    <label><input id="HTML" type="radio" name="method" value="html" checked> HTML</label>
                </div>
                <div class="radio">
                    <label><input id="Text" type="radio" name="method" value="text"> Text</label>
                </div>
                <span class="err" id="err-method">Please select email format</span>
            </div>




</div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>

</div>
</body>
</html>