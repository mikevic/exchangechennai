<?php
//Header
require_once 'header.php';
?>
<div class="container">

<div class="title"><h3>Exchange Participant Registration - GIP</h3></div>
<div>
	<p>
    Congratulations on your descision to take the AIESEC GIP Programme. We are sure you will have a great experience!
    </p>
</div>
<form action="includes/gip-reg-server.php" method="post" enctype="multipart/form-data">
	<label>Name : </label><input type="text" name="ep_name" required="required" />
    <label>Email Address : </label><input type="email" name="ep_email" required="required"/>
    <label>University : </label><input type="text" name="university" required="required" />
    <label>Mobile : </label><input type="text" name="mobile" required="required" />
    <label>Address : </label><textarea name="address" required="required" /></textarea><br />
    <label>EP Contract : </label>
    You may obtain the blank EP Contact <a href="../EPContractGIP.pdf" target="_blank">here</a> (Right click -&gt; Save Target As). Fill up the form, save it and upload it here. <br />
    <input type="file" accept="application/pdf" name="contract" required="required" />
    <label>CV : </label>Attach a PDF Version of your CV. Other file types are not allowed. Your CV needs to be either in <a href="https://europass.cedefop.europa.eu/editors/en/cv-esp/upload" target="_blank">Europass</a> or American format. <br /><input type="file" accept="application/pdf" name="cv" required="required" />
    <br  /><button class="btn" type="submit">Submit</button>
</form>
</div>
<?
//Footer
require_once 'footer.php';
?>