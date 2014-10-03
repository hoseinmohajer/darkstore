<body class="login">
	<section>
		<h1><strong>Dark</strong> Store</h1>
		<?php
			echo $this->Form->create('Admin', array('action' => 'login', 'type' => 'post'));
			echo $this->Form->input('username', array('label' => 'UserName', 'maxLength' => '10', 'style' => 'direction:ltr', 'placeholder' => 'Username'));
			echo $this->Form->input('password', array('label' => 'PassWord', 'maxLength' => '6', 'style' => 'direction:ltr', 'placeholder' => 'Password'));
			echo $this->Form->button('Login', array('class' => 'blue'));
		?>
		<p><a href="#">Forgot your password?</a></p>
	</section>
</body>
