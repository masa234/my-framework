<?php $this->setLayoutVar( 'title', 'ログイン' ); ?>

<h2>ログイン</h2>

<p>
    <a href="<?php print $base_url; ?>/user/signup">新規ユーザ登録</a>
</p>
<form action="<?php print $base_url; ?>/user/authenticate" method="post">
    <input type="hidden" name="_token" value="<?php print $this->escape( $_token ); ?>" />

    <?php if ( isset( $errors ) && count( $errors ) > 0 ): ?>
    <?php print $this->render( '_errors', array( 'errors' => $errors ) ); ?>
    <?php endif; ?>

    <?php echo $this->render( 'user/_register_form', array(
        'user_name' => $user_name, 'email' => $email, 'password' => $password
    )); ?>  

    <p>
        <input type="submit" class="btn btn-primary" value="ログイン">
    </p>
</form>
