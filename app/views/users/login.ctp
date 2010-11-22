<div class="login"> 
<h2>Login</h2>    
<p>Por favor ingrese su email y contrase&ntilde;a para poder autenticarse en el sistema.</p> 
    <?php
        echo $session->flash('auth');
	    echo $form->create('User', array('action' => 'login'));
	    echo $form->input('email');
	    echo $form->input('password');
	    echo $form->end('Login');
    ?>
</div>