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
         <form method="POST" name="create-jukebox-form" action="/jukebox/sign-up/profile/settings">
             <h3>Create your jukebox</h3>
             <p>Select your tracks and add them to a playlist</p>
             <div class="share-options">
               <label>Share jukebox publicly?</label>
               <div class="toggle-switch"><input type="checkbox" name="jukebox-privacy"></div>
             </div>
              <div class="share-options">
                <label>Allow users to add music to your jukebox?</label>
                <div class="toggle-switch"><input type="checkbox" name="jukebox-share"></div>
              </div>
              <div class="add-track-container">
                  <ul>
                    <li>Select tracks</li>
                    <li>Select all</li>
                  </ul>
                  <div class="track">
                      <div class="track-details">
                          <img src="http://localhost/jukebox/public/images/Nas-the-lost-tapes-lp.png" alt="">
                          <ul>
                           <li>Nas</li>
                           <li>Lost Tapes</li>
                          </ul>
                          <ul>
                           <li>Purple</li>
                           <li>4:20</li>
                           <li><input type="checkbox" name="nas-purple"></li>
                          </ul>
                      </div>
                  </div>
                  <div class="track">
                      <div class="track-details">
                          <img src="http://localhost/jukebox/public/images/Santogold_artwork.png" alt="">
                          <ul>
                           <li>Santigold</li>
                           <li>Santogold</li>
                          </ul>
                          <ul>
                           <li>Lights Out</li>
                           <li>4:20</li>
                           <li><input type="checkbox" name="santigold-lights-out"></li>
                          </ul>
                      </div>
                  </div>
                  <div class="track">
                      <div class="track-details">
                          <img src="http://localhost/jukebox/public/images/RHCP_BSSM.png" alt="">
                          <ul>
                           <li>Red Hot Chili Peppers</li>
                           <li>Lost Tapes</li>
                          </ul>
                          <ul>
                           <li>Blood Sugar Sex Magik</li>
                           <li>4:20</li>
                           <li><input type="checkbox" name="rhcp-give-it-away"></li>
                          </ul>
                      </div>
                  </div>
                  <div class="track">
                      <div class="track-details">
                          <img src="http://localhost/jukebox/public/images/Sade_Lovers_Rock.png" alt="">
                          <ul>
                           <li>Sade</li>
                           <li>Lovers Rock</li>
                          </ul>
                          <ul>
                           <li>Flow</li>
                           <li>4:20</li>
                           <li><input type="checkbox" name="sade-flow"></li>
                          </ul>
                      </div>
                  </div>
                  <ul>
                    <li><a href="">prev</a></li>
                    <li>1 of 12</li>
                    <li><a href="">next</a></li>
                  </ul>
              </div>
            <input type="submit" name="add-jukebox" value="Save jukebox">
         </form>
        </div>
    </section>
</main>
