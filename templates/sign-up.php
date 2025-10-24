<header>
   <div class="logo">
       <img src="./public/images/music_note.png" alt="Image of music note">
      <h2>Jukebox</h2>
   </div>
   <nav>
     <menu>
        <li><a href="/jukebox/features">Features</a></li>
        <li><a href="/jukebox/all">Play music</a></li>
        <li><a href="/jukebox/api">API</a></li>
     </menu>
     <menu>
        <li><a href="/jukebox/sign-in">Sign in</a></li>
        <li><a href="/jukebox/sign-up">Sign up</a></li>
     </menu>
   </nav>
</header>
<main>
    <section>
        <div>
         <form method="POST">
            <h3>Sign up</h3>
            <input type="text" name="username" placeholder="Username"  required>
            <input type="email" name="email" placeholder="E-mail"  required>
            <input type="password" name="password" placeholder="Password"  required>
            <input type="password" name="confirm-password" placeholder="Confirm password"  required>
            <input type="submit" name="signin" value="Sign in">
            <input type="submit" name="signup" value="Sign up">
         </form>
        </div>
    </section>
</main>
