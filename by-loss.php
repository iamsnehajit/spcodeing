<!DOCTYPE html>
<html>
<head>
	<title>Jagadishpur Co-operative Credit Society Limited | About</title>
	<?php include ('header-include.php'); ?>
</head>
<body>
	<?php include ('header.php'); ?>

	

<div id="question" style="display:none; cursor: default">
        	<div class="block-ui-from">
        		<h2>Log in</h2>
        		<form class="blockUI-form" id="basic-form" name="login" method="post" action="">
						<div class="">
							<input type="text" class="block-ui-input" placeholder="Please Enter Username" name="user" id="user" required autocomplete="off" 
							value="">
							<label for="user">Username</label>
							<input type="password" class="block-ui-input" placeholder="Please Enter Password" name="pass" id="pass" required autocomplete="off"
							value="">
							<label for="pass">Password</label>
							<button type="submit" class="common-btn" name="remember">Sign In</button>
						</div>
					</form>
					<div class="block-xtra text-center">
						<a href="">Not have an accout? Sign up here</a>
						<a href="">Forget Password?</a>
					</div>

        	</div>
        <input type="button" id="yes" value="Yes" />
        <input type="button" id="no" value="No" />
</div>
	<!--=========Banner======--->
	<div class="container-fluid p-0">
		<div class="by-loss-banner">
			<img src="images/by-loss-banner.jpg" alt="Image"/>
		</div>
	</div>
	<!--=======By loss botton=====--->
	<div class="container p-0">
		<div class="by-loss-btn text-center">
			<h1 class="large-txt">Click on the button</h1>
			<div class="act-rul-each">
				<a href="by-loss.php" target="_blank">By Loss</a>
			</div>


		</div>
	</div>

	<?php include ('footer.php'); ?>
	<?php include ('footer-include.php'); ?>
	<script src="js/jquery.blockUI.js"></script>
		<script type="text/javascript">
    $(document).ready(function() {

        $(document).ready(function() {
            $.blockUI({ message: $('#question'), css: { width: '275px' } });
        });

        $('#yes').click(function() {
            // update the block message
            $.blockUI({ message: "<h1>Remote call in progress...</h1>" });

            $.ajax({
                url: 'wait.php',
                cache: false,
                complete: function() {
                    // unblock when remote call returns
                    $.unblockUI();
                }
            });
        });

        $('#no').click(function() {
            $.unblockUI();
            return false;
        });

    });
</script>

</body>
</html>