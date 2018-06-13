<div id="login-modal" class="modal fade in" style="display: block; padding-right: 15px;"><div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-user-reg active"><a href="javascript:void(0);" class="toggle-loginreg" data-type="register" title="Create a Profile"><i class="fa fa-user"></i> Register</a></h4>
      <h4 class="modal-user-log"><a href="javascript:void(0);" class="toggle-loginreg" data-type="login" title="Already Have a Profile?"><i class="fa fa-sign-in"></i> Login</a></h4>
    </div>
    <div class="modal-body">
      
      <div id="ajaxLoginForm" style="display: none;">
        <p style="text-align: left;" abp="1212"><span>This is</span><b abp="1214">&nbsp;FREE</b><span>&nbsp;access&nbsp;to the Multiple Listing Service (MLS). Every property for sale in Southwest Missouri is posted here. Happy searching!</span></p>
<form novalidate="novalidate" id="UserLoginForm" method="post" action="/login.html"><fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset><input type="hidden" value="/" name="data[User][r_from]"><input type="hidden" value="1" name="data[User][is_ajax]"><div class="row">
  <div class="col-md-12">
    <p class="users-signin-help">Sign in using a social network:</p>
  </div>

    <div class="col-btn col-xs-12 col-sm-6 col-md-6">
  <a href="/auth/facebook" data-type="facebook" class="btn btn-block btn-social btn-facebook extended-login">
    <span class="fa fa-facebook"></span> Sign in with Facebook
  </a>
  </div>
    <div class="col-btn col-xs-12 col-sm-6 col-md-6">
  <a href="/auth/google" data-type="google" class="btn btn-block btn-social btn-google extended-login">
    <span class="fa fa-google-plus"></span> Sign in with Google
  </a>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="social-splitter">
      <span>OR</span>
    </div>
  </div>
<div class="col-md-12">
	<p class="users-signin-help">Sign in using your registered account:</p>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
	  <input name="data[User][username]" type="text" maxlength="255" placeholder="Username or Email" class="form-control required" value="" id="UserUsername" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
			<input type="password" name="data[User][password]" placeholder="Password" class="form-control required" autocomplete="off" minlength="6" value="" id="UserPassword" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
	    <label class="checkbox-inline" for="UserCookie"><input type="hidden" name="data[User][cookie]" id="UserCookie_" value="0"><input type="checkbox" name="data[User][cookie]" checked="checked" value="1" id="UserCookie"> Remember Me</label>
        <!--<span class="help-block">If checked, next time you visit the site, your login information will be remembered and you will automatically be logged in.</span>-->
    </div>
  </div>
</div>

<p abp="1216"><span style="color: #000000;" abp="1217">&nbsp;</span></p></div><!--/.col-md-8-->


</div></form>      </div>
      <div id="ajaxRegisterForm" style="display: block;">
        <div id="status"></div>
<div id="RegisterForm_status"></div>

<p style="text-align: left;" abp="1212"><span style="color: #000000;" abp="1217"><span><span style="color: #000000;" abp="1213">This is<b abp="1214">&nbsp;FREE</b>&nbsp;access&nbsp;to the Multiple Listing Service (MLS). Every property for sale in Southwest Missouri is posted here. Happy searching!</span></span></span></p>
<p style="text-align: left;" abp="1212"></p><div class="row">
<div class="col-md-12 userRegForm">

<div class="row">
  <div class="col-md-12">
    <p class="users-signin-help">Sign in using a social network:</p>
  </div>

    <div class="col-btn col-xs-12 col-sm-6 col-md-6">
  <a href="/auth/facebook" data-type="facebook" class="btn btn-block btn-social btn-facebook extended-login">
    <span class="fa fa-facebook"></span> Sign in with Facebook
  </a>
  </div>
    <div class="col-btn col-xs-12 col-sm-6 col-md-6">
  <a href="/auth/google" data-type="google" class="btn btn-block btn-social btn-google extended-login">
    <span class="fa fa-google-plus"></span> Sign in with Google
  </a>
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="social-splitter">
      <span>OR</span>
    </div>
  </div>
</div>


<form onsubmit="ajax_registerUser();" id="UserRegisterForm" enctype="multipart/form-data" method="post" action="/register.html" novalidate="novalidate"><fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset><fieldset>
  <legend>User Details</legend>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label" for="regUserFirstName">First Name: <span class="required" aria-required="true">*</span></label>
            <input name="data[User][firstname]" type="text" id="regUserFirstname" class="form-control required" minlength="2" maxlength="50" value="" aria-required="true" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: pointer;">        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label" for="regUserLastName">Last Name: <span class="required" aria-required="true">*</span></label>
            <input name="data[User][lastname]" type="text" id="regUserLastname" class="form-control required" minlength="2" maxlength="50" value="" aria-required="true">        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label" for="regUserEmail">Email Address: <span class="required" aria-required="true">*</span></label>
            <input name="data[User][email]" type="text" id="regUserEmail" class="form-control required email" remote="/users/login_verify/" maxlength="255" value="" aria-required="true">        </div>
      </div>

	        <div class="col-md-6">
        <div class="form-group">
											<label class="control-label" for="regUserPrimaryPhone">Phone: <span class="required" aria-required="true">*</span></label>
						<input name="data[User][primary_phone]" type="text" id="regUserPrimaryPhone" data-mask="999-999-9999? x99999" class="form-control required phoneno" maxlength="100" value="" aria-required="true">					        </div>
      </div>
	  
    </div>

</fieldset>

<fieldset>
  <legend>Login Info</legend>
	    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label" for="regUserPassword">Password: <span class="required" aria-required="true">*</span></label>
            <input type="password" name="data[User][password]" id="regUserPassword" class="form-control required" minlength="6" value="" aria-required="true" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><span class="help-block">Password must be at least 6 characters.</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="control-label" for="regUserPasswordConfirm">Confirm Password: <span class="required" aria-required="true">*</span></label>
            <input type="password" name="data[User][password_confirm]" id="regUserPasswordConfirm" class="form-control required" minlength="6" equalto="#regUserPassword" value="" aria-required="true" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">        </div>
      </div>
    </div>

</fieldset>

<div class="row">
	<div class="col-md-12">
		<div class="form-group">
				<label class="checkbox-inline" for="regUserSubscribeOptin"><input type="hidden" name="data[User][subscribe_optin]" id="regUserSubscribeOptin_" value="0"><input type="checkbox" name="data[User][subscribe_optin]" id="regUserSubscribeOptin" value="1" checked="checked"> Email Opt-In</label>
				<span class="help-block">If checked, you will receive email updates with properties from your saved searches and favorite listings.</span>
		</div>
	</div>
</div>

<div class="myrsol_peekaboo"><label for="TrackbackUsernamequD31">Leave this field blank</label><input id="TrackbackUsernamequD31" autocomplete="off" name="data[Trackback][usernamequD31]" value="" type="text"><label for="SubscriptionSubjecte80KI">Leave this field blank</label><input id="SubscriptionSubjecte80KI" autocomplete="off" name="data[Subscription][subjecte80KI]" value="" type="text"><label for="LinkEmail30Oy7">Leave this field blank</label><input id="LinkEmail30Oy7" autocomplete="off" name="data[Link][email30Oy7]" value="" type="text"><label for="AccountNick3E7rP">Leave this field blank</label><input id="AccountNick3E7rP" autocomplete="off" name="data[Account][nick3E7rP]" value="" type="text"><label for="CommentComment1TYk5">Leave this field blank</label><input id="CommentComment1TYk5" autocomplete="off" name="data[Comment][comment1TYk5]" value="" type="text"></div><div class="input text" style="display:none"><label for="UserHoneypot">honeypot</label><input name="data[User][honeypot]" type="text" value="" id="UserHoneypot"></div><div class="input text" style="display:none"><label for="UserSpinner">Spinner</label><input name="data[User][spinner]" type="text" value="xGvaqq+Vep1qY6p9pKyrqaiNnpF4e+HAWKVuhnV0ooGCd590cGWRhXRU6LDP7NzolY6Jx8aM2oFt2KObs7q/j7CX2XlzmqvZuqiobek=" id="UserSpinner"></div></form></div>
</div>

<script type="text/javascript">
var reg_plantobuy = 0;
var reg_wwrealtor = 0;
var reg_buysellrent = 0;
$(document).ready(function() {

	$.validator.addMethod("valueNotEquals", function(value, element, arg) {
		return arg != value;
	}, "Value must not equal arg.");

	$("#UserRegisterForm").validate({
		messages: {
			"data[User][password_confirm]": {
				equalTo: 'Passwords do not match.'
			},
			"data[User][email]": {
				remote: $.validator.format("{0} is already in use")
			},
			//"data[User][assigned_to]": { valueNotEquals: "Please select an agent from the list or select No Preference." }
		}
	});

	if(reg_plantobuy == 1) { $('#regUserPlanToBuy').rules('add', { valueNotEquals: -1, messages: { valueNotEquals: "Please make a selection" } }); }
	if(reg_wwrealtor == 1) { $('#regUserWorkingWithRealtor').rules('add', { valueNotEquals: -1, messages: { valueNotEquals: "Please make a selection" } }); }
	if(reg_buysellrent == 1) { $('#regUserBuySellRent').rules('add', { valueNotEquals: -1, messages: { valueNotEquals: "Please make a selection" } }); }

});

</script>      </div>
  </div><!--/.modal-body-->

  <div class="modal-footer">
    <span class="pull-left" id="login-reg-btns"><button type="button" class="btn btn-success" id="registrationSubmit" data-loading-text="Saving..."><i class="fa fa-ok"></i> Register</button><a href="/lostpassword.html" title="Lost your password?" class="pull-right btn btn-default">Lost your password?</a></span>
    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>

  </div>
</div>
</div>