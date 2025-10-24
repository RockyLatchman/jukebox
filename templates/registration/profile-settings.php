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
         <form method="POST" name="save-preferences-form">
             <h3>Create your jukebox</h3>
             <div class="share-options">
               <label>Do you want your profile visible?</label>
               <div class="toggle-switch"><input type="checkbox" name="profile-privacy" value="yes" checked></div>
             </div>
            <p>If you say no, only users you add will be able to interact with you</p>
            <input type="submit" name="save-preference" value="Save my preference">
         </form>
        </div>
    </section>
</main>
