<div class="login"> 
<h2>Login</h2>    
<p>Por favor ingrese su email y contrase&ntilde;a para poder autenticarse en el sistema.</p> 
    <?php if  ($session->check('Message.auth')) $session->flash('auth');
	    echo $form->create('User', array('action' => 'login'));
	    echo $form->input('email');
	    echo $form->input('password');
	    echo $form->end('Login');
?>
 
        <?php //echo $form->submit('Ingresar');?> 
    <?php //echo $form->end(); ?> 
</div>