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
         <form method="POST" name="preferences-form">
            <h3>Music preferences</h3>
            <p>What kind of music do you like? Select a few genres below</p>
            <input type="text" name="option1" placeholder="Hip Hop"  required>
            <input type="text" name="option2" placeholder="Classic Rock"  required>
            <input type="text" name="option3" placeholder="EDM"  required>
            <input type="text" name="option4" placeholder="Heavy Metal"  required>
            <input type="text" name="option5" placeholder="R&B"  required>
            <input type="text" name="option6" placeholder="Salsa"  required>
            <input type="submit" name="genres" value="Save genres">
         </form>
        </div>
    </section>
</main>
