<div class="container">
    <form action="?page=login" method="post">
        <img src="assets/images/Favicon.jpg" alt="Logo du restaurant" class="icon-menu">
        <h3>Page de connexion</h3>
        <label for="email">Entrez votre email : </label>
        <input type="email" id="email" name="email" autofocus placeholder="Email" id="username" required/>

        <label for="password">Entrez votre mot de passe : </label>
        <input type="password" id="password" name="password" placeholder="Password" id="password" required/>
      
        <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
        <button type="submit" value="login" class="submit">Se connecter</button>
    </form>
</div>