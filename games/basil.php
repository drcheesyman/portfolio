<!DOCTYPE html>
<html lang="en">

    <?php 
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/includes/header.php";
        include_once($path);
    ?>

        <main class="page">

            <!--        SIDEBAR          --->
            <div class="sidebar">
                <p>
                    Basil and the Isles of Spice
                </p>

                <ul class="worktable">
                    <a href="#level"><li class="worktableheader"><i class="arrow right"></i>Level Design</li></a>
                    <a href="#level-first"><li><i class="arrow right"></i>Tutorial</li></a>
                </ul>

                <ul class="worktable">
                    <a href="#ux"><li class="worktableheader"><i class="arrow right"></i>UX Design</li></a>
                    <a href="#fifth"><li><i class="arrow right"></i>Particles</li></a>
                    <a href="#sixth"><li><i class="arrow right"></i>Feedback</li></a>
                    <a href="#seventh"><li><i class="arrow right"></i>UI</li></a>
                    <a href="#eighth"><li><i class="arrow right"></i>Engaging experience</li></a>
                </ul>
            </div>

            <!--     HEADER SECTION       --->
            <div class="gameinfo" id="topgameinfo">
                <img class="backgroundimage" src="/media/games/basil/basil_home_bg.jpg">

                <img class="gamelogo" src = "/media/games/basil/basil_logo.png">

                <div id="basildetails">
                    <img id="basilheadertextbox" src ="/media/games/basil/basil_textbox.png">

                    <p id="basiloverview">
                        <b>PROJECT OVERVIEW</b>
                        <br>- Student Project (DigiPen)
                        <br>- 19 person team
                        <br>- Made in Unity
                        <br>- Completed 04.22.2023
                    </p>

                    <img id="basilheaderbasil" src ="/media/games/basil/basil_home_basil.png">
                </div>

            </div>

            <!--     BETWEEN SECTION       --->
            <div class="betweendecor" style="background-image: url('/media/games/basil/basil_between_01.jpg');">
            </div>

            <!--     LEVEL SECTION       --->
            <div id="level" class="gameinfo">
                <img class="backgroundimage" src="/media/games/basil/basil_bg_03.jpg">

                <h2>Level Design - Overview</h2>

                <div class="gameinfogroup">
                    <p class="left">
                        When we came up with the idea for Basil and the Isles of Spice, we wanted a series of nine linear islands. Every three islands would be focused on one of our core mechanics: water running, climbing, and gliding. The player would collect crystals across these islands, which would be required to open gates between each group of islands. 
                    </p>
                    <img class="right" src="/media/games/basil/proto_map_01.jpg">
                </div>

                <div class="gameinfogroup">
                    <img class="left" src="/media/games/basil/proto_map_02.jpg">
                    <p class="right">
                    Each water running island would have three crystals, and the gate to the climbing islands would require seven crystals to unlock. This way, the player could take on challenges that interested them and skip ones that were too difficult.
                    </p>
                </div>

                <p>
                    Over time, we simplified this to one island per ability, and eventually ended up cutting the climb entirely. In the end, there were three islands which could be visited in any order before unlocking the fourth and final island.
                </p>
                
                <div class="gameinfogroup">
                    <img class="left" src="/media/games/basil/proto_map_03.jpg">
                    <img class="right" src="/media/games/basil/proto_map_04.jpg">
                </div>
            </div>

            <!--     BETWEEN SECTION       --->
            <div class="betweendecor" style="background-image: url('/media/games/basil/basil_between_02.jpg');">
            </div>

            <!--     FIRST SECTION       --->
            <div id="level-first" class="gameinfo">
                <img class="backgroundimage" src="/media/games/time/time_bg.jpg">

                <h2>Level Design - Tutorial</h2>

                <p>
                    The tutorial changed a lot over time. In the first iteration, the player would have to unlock the water run ability. The player traveled through the village, using basic movement and jumping, until they reached a pool of water. This was unpassable without the water run ability, which required the player to learn how to use it to progress. After this, the player would use the water run ability in a couple more pools of water before reaching the beach. They would then use the water running ability on the open sea for the first time. 
                </p>

                <p>
                    The next iteration of the tutorial was much more linear. The player no longer had to unlock the water run, so it is introduced much earlier. This version still had several flaws, however. It was too claustrophobic, with right walls blocking out the main path rather than allowing exploration, which was one of our main target audiences. Additionally, the core mechanic, water running, was still introduced later than we wanted.
                </p>
            </div>

            <!--     BETWEEN SECTION       --->
            <div class="betweendecor" style="background-image: url('/media/games/basil/basil_between_03.jpg');">
            </div>
        </main>
        
    </body>

</html>