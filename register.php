<div id = "register" class = "modal fade" tabindex = "-1" role = "dialog" style = "display:none;" data-backdrop="static" data-keyboard="false">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div id="modal-header">
				<button type = "button" class = "close" data-dismiss = "modal">
					&times;
				</button>						
				<h4 class = "modal-title" id = "myModalLabel">Register</h4>
			</div>		
			<div id = "modal-body">
                <form role = "form" enctype="multipart/form-data" id = "form" method = "post">
					<div class = "form-group">
				        <label for="name" class = "control-label sr-only">Username</label>
					    <input type = "text" name="username" class="form-control" id="username" placeholder="Username"/>
				    </div>
                    <div class="form-group">
					    <label for="password" class = "control-label sr-only">Password</label>
					    <input type = "password" name="password" class="form-control" id="password" placeholder="Password"/>
                    </div>
                    <!--Re-enter pass for security purposes to be added later-->
                    <div class="form-group">
					    <label for="emailadd" class = "control-label sr-only">Email-Address</label>
					    <input type = "email" name="emailadd" class="form-control" id="email" placeholder="Email Adress"/>
                    </div>
                    <div class="form-group">
					    <label for="mobileno" class = "control-label sr-only">Mobile No.</label>
					    <input type = "text" name="mobileno" class="form-control" id="mobile" placeholder="Mobile #"/>
                    </div>
	                <button id ="register" name = "submit" type="submit" class=" btn btn-theme pull-right">Register</button>
				</form>
            </div>
            <div id= "modal-footer">
            </div>
        </div>
    </div>
</div>