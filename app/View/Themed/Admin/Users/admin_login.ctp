<body class="login">
	<section>
		<h1><strong>Dark</strong> Store</h1>
		<?php
			echo $this->Form->create('User', array('action' => 'login', 'type' => 'post'));
			echo $this->Form->input('username', array('label' => false, 'style' => 'direction:ltr', 'placeholder' => 'Username'));
			echo $this->Form->input('password', array('label' => false, 'style' => 'direction:ltr', 'placeholder' => 'Password'));
			echo $this->Form->button('Login', array('class' => 'blue', 'type' => 'submit', 'escape' => true));
		?>
		<p><a href="forgetpassword">Forgot your password?</a></p>
	</section>
</body>