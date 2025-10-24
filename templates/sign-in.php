<header>
    <div class="logo">
        <a href="http://localhost/jukebox"><img src="http://localhost/jukebox/public/images/music_note.png" alt="Image of music note">
       <h2>Jukebox</h2></a>
    </div>
   <nav>
     <menu>
        <li><a href="http://localhost/jukebox/features">Features</a></li>
        <li><a href="http://localhost/jukebox/music/collections">Play music</a></li>
        <li><a href="http://localhost/jukebox/api">API</a></li>
     </menu>
     <menu>
        <li><a href="http://localhost/jukebox/sign-in">Sign in</a></li>
        <li><a href="http://localhost/jukebox/sign-up">Sign up</a></li>
     </menu>
   </nav>
</header>
<main>
    <section>
        <div>
         <form method="POST">
            <h3>Sign in</h3>
            <input type="email" name="email" placeholder="E-mail"  required>
            <input type="password" name="password" placeholder="Password"  required>
            <input type="submit" name="signup" value="Sign up">
            <input type="submit" name="signin" value="Sign in">
            <span><a href="">Forgot password?</a></span>
         </form>
        </div>
    </section>
</main>
