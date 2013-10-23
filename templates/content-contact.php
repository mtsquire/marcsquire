<div class="row-fluid">
	<div class="span6">
		<form id="contact_marc" method="post" action="http://formmail.dreamhost.com/cgi-bin/formmail.cgi" class="form-horizontal">
			<fieldset>
			<div class="control-group"> 
				<label class="control-label" name="fname">First Name</label>
					<div class="controls"> 
						<input type="text" required="required" class="required input-xlarge" name="fname" id="fname">
					</div>
			</div>
			<div class="control-group"> 
				<label class="control-label" name="lname">Last Name</label>
					<div class="controls"> 
						<input type="text" required="required" class="required input-xlarge" name="lname" id="lname">
					</div>
			</div>
			<div class="control-group"> 
				<label class="control-label" name="email">E-mail</label>
					<div class="controls"> 
						<input type="email" required="required" placeholder="youremail@example.com" class="required email input-xlarge" name="email" id="email">
					</div>
			</div>
			<div class="control-group"> 
				<label class="control-label" name="phone">Phone </label>
					<div class="controls"> 
						<input type="tel" pattern="\d\d\d\-\d\d\d\-\d\d\d\d" required="required" placeholder="###-###-####" class="required phoneUS input-xlarge" name="phone" id="phone">
					</div>
			</div>
			<div class="control-group"> 
				<label class="control-label" name="comments">Comments</label>
					<div class="controls">
						<textarea  type="text" required="required" class="required  input-xlarge" id="textarea" rows="4" name="comments" id="comments"></textarea>
						<p class="help-block">Please include specific requirements for your site, and any other important information you feel is necessary.</p>
					</div>
			<div class="control-group">
				<div class="controls"> 
					<input type="hidden" name="recipient" value="marc@marcsquiredesign.com">
					<input type="hidden" name="subject" value="Marc Squire Design Website Inquiry">
					<input type="hidden" name="redirect" value="http://marcsquiredesign.com/thanks">
				</div>
			</div>
				<div class="form-actions"> 
					<button type="submit" class="btn btn-primary" value="Send">Submit</button> 
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="span6 hidden-tablet">
		<a class="twitter-timeline" href="https://twitter.com/Mtsquire" data-widget-id="243459467222581248">Tweets by @Mtsquire</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div>
		<script type="text/javascript" charset="utf-8">
	
			$(document).ready(function(){
				if ($.browser.msie){
        			$("#contact_marc").validate();
				}
			});

        </script>