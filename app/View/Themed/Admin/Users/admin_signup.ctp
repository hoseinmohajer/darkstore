<body class="login">
	<section>
		<h1><strong>Dark</strong> Store</h1>
		<?php
			echo $this->Form->create('User', array('action' => 'signup', 'type' => 'post'));
			echo $this->Form->input('username', array('label' => false, 'style' => 'direction:ltr', 'placeholder' => 'Username'));
			echo $this->Form->input('password', array('label' => false, 'style' => 'direction:ltr', 'placeholder' => 'Password'));
			echo $this->Form->input('confirmpassword', array('label' => false, 'style' => 'direction:ltr', 'placeholder' => 'Repead Password', 'type' => 'password'));
			echo $this->Form->button('Sign Up', array('class' => 'blue', 'type' => 'submit', 'escape' => true));
		?>
		<p><a href="login">Login</a></p>	
	</section>
</body>