<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127221484-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127221484-1');
</script>
    <title>Game Design and Development</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon1.png">
    <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Quicksand|Saira+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php
            $title="DesInv 198-4: Video Game Design and Development, Spring 2019";
            include 'header.php';
        ?>
        <div class="background decal"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col" style="height: 2vh"></div>
                </div>
                <h1 class="section-title" id="course-description">COURSE DESCRIPTION</h1>
                <p>
                    This course is a deep dive into the creation of games, from beginning to end. Over the course of
                    the semester, students will pitch a game, form small teams, and build out a project from start to
                    finish with help from the instructors. Students are not required to have any prior game development
                    experience but it is strongly recommended that a student taking the course either has basic art
                    abilities or basic programming abilities. They will also learn about the different roles that exist
                    within the industry, how to apply their skills to them, and form an understanding about how to best
                    prepare themselves to find their way into these roles. This will be a rigorous class, one that will
                    require a lot of time and dedication. Students will be selected via application prior to the first
                    week of classes, to ensure that the class&#8217;s composition reflects a diverse range of skills,
                    backgrounds, and proficiency levels.
                </p>
                <ul class="toc">
                    <h6 class="section-title">Contents</h6>
                    <a href="#course-info">Course Info</a>
                    <a href="#office-hours">Office Hours</a>
                    <a href="#schedule">Schedule</a>
                    <a href="#past-projects">Past Projects</a>
                    <a href="#course-description">Course Description</a>
                    <a href="#prerequisites">Prerequisites</a>
                    <a href="#course-structure">Course Structure</a>
                    <a href="#projects">Projects</a>
                    <a href="#written-responses">Written Responses</a>
                    <a href="#required-materials">Required Materials</a>
                    <a href="#grading">Grading</a>
                    <a href="#general-policy">General Policy</a>
                    <a href="#facilitators">Facilitators</a>
                </ul>
                <h1 class="section-title" id="course-info">COURSE INFO</h1>
                <div>
                    <p>
                        <strong>Time:</strong> Tu/Th 6:30-8:00pm
                    </p>
                    <p>
                        <strong>Location:</strong> Dwinelle 182
                    </p>
                    <p>
                        <strong>Lead Facilitators:</strong> Jennifer Kim, Weylan Wang, Sabrina Wong
                    </p>
                    <p>
                        <strong>Faculty of Record:</strong> Ren Ng
                    </p>
                    <p>
                        <strong>Course Email:</strong> berkeley.gamedev@gmail.com
                    </p>
                </div>
                <h1 class="section-title" id="office-hours">OFFICE HOURS</h1>
                <div>
                    <p>
                        <strong>Time:</strong> Tues. 5:00-6:30pm + Thurs. 11:00-12:30pm
                    </p>
                    <p>
                        <strong>Location:</strong> Cory 258
                    </p>
                </div>
                <h1 class="section-title" id="schedule">SCHEDULE</h1>
                <table class="mdl-shadow--3dp" id="calendar" style="font-family: 'Roboto-Regular'; text-decoration: none; text-align: left; font-size: 1.1rem;  padding-left: 24px">
                    <tbody>
                        <tr>
                            <th>&nbsp;Week&nbsp;</th>
                            <th>&nbsp;Day</th>
                            <th>&nbsp;#</th>
                            <th>&nbsp;Lecture</th>
                            <th>&nbsp;Reading</th>
                            <th>&nbsp;Lab Links</th>
                            <th>&nbsp;Project</th>
                            <th>Office Hours</th>
                        </tr>
                        <!-- Week 0 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="1">0</td>
                            <td>Th 01/24</td>
                            <td>1</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1GRJaJt4wIrQSEDJYHdKdHgr8xcsxxOAhEjkFQazt2MQ/edit?usp=sharing">Course
                                    Overview and Info Session</a><br> Past semester game showcase</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 1 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">1</td>
                            <td>Tu 01/29</td>
                            <td>2</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1qrpiidAAMIcZ1ndCLssJlYJJesogmbeA3hY-jc6I0RA/edit?usp=sharing">Intro
                                    to Unity- Basics</a></td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamedesigning.org/learn/game-design-principles/">The
                                    3 Primary Principles of Game Design</a></td>
                            <td><a href="https://github.com/berkeleyGamedev/UnityBasics">Lab: Unity Basics</a></td>
                            <td class="proj1">Project 1:<br>
                                <a href="https://www.tinyurl.com/ArtProj1Sp19">Artists</a><br>
                                <a href="https://www.tinyurl.com/ProgProj1Sp19">Programmer</a><br>
                                <a href="https://www.tinyurl.com/ArtHybridProj1Sp19">Art/Programmer</a><br>
                                <a href="https://www.tinyurl.com/MusicHybridProj1Sp19">Music/Programmer</a><br>
                            </td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>Th 01/31</td>
                            <td>3</td>
                            <td class="td-left"><a href="https://drive.google.com/open?id=11NpBBhkF3BCmzjUj3N0PhQb_z98cqn8RgyYIuwFQ2To">Intro
                                    to Unity- Programming</a></td>
                            <td><a href="https://github.com/berkeleyGamedev/BasicScriptingLab">Lab: Basic Scripting</a></td>
                            <td class="proj1"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 2 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">2</td>
                            <td>Tu 02/05</td>
                            <td>4</td>
                            <td class="td-left"><a href="https://drive.google.com/open?id=1u2TMJo7D5DaIP12BJpHqYvQ_WEObRkFZSMw2QVGwiMw">Intro
                                    to Unity- The Art Pipeline</a></td>
                            <td class="weeknum" rowspan="2"><a href="https://gamedevlibrary.com/the-difference-between-good-graphics-and-good-aesthetics-in-video-games-eb012c2e3cbe">The
                                    Difference Between Good Graphics And Good Aesthetics In Video Games</a></td>
                            <td></td>
                            <td class="proj1">Project Part 1 Due </br>
                            </td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>Th 02/07</td>
                            <td>5</td>
                            <td class="td-left">Intro to Unity - Advanced Topics</br>
                                <a href="https://drive.google.com/open?id=12i6nQdhmlMnqCegQnHNIxiCoDqtNB06tVSK9P8VoVo4">Art</a></br>
                                <a href="https://drive.google.com/open?id=1_VI0pZlPG7D0Rvdn4P4YITfXsI2fsdNaoIpiC8c7HNA">Programming</a>
                            </td>
                            <td><a href="https://github.com/berkeleyGamedev/Advanced-Scripting">Lab: Advanced Topics</a></td>
                            <td class="proj1"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- week 3 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">3</td>
                            <td>Tu 02/12</td>
                            <td>6</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1cm7VKMrF-q7dAq1K2vOKneikZRhxC8D9ujULtOFfqjw/edit?usp=sharing">Basics
                                    of Game Design</a></td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/132341/the_13_basic_principles_of_.php?page=2 ">The
                                    13 Basic Principles of Gameplay Design</a></td>
                            <td><a href="https://github.com/berkeleyGamedev/ColliderLab">Lab: Colliders</a></br>
                                <a href="hhttps://github.com/berkeleyGamedev/SpritingLab">Lab: Spriting</a></td>
                            <td class="proj1"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>Th 02/14</td>
                            <td>7</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1lbHVIVXc6Tf-fNK8W_LqVTMtlAqiChNIlHtlDW0PX8Q/edit?usp=sharing">Design
                                    Docs</a></br>Unity Collab</td>
                            <td><a href="https://github.berkeley.edu/berkeley-gamedev/RigidBody-and-Movement-Basics">Lab:
                                    Rigidbodies</a></br>
                                <a href="https://github.berkeley.edu/berkeley-gamedev/AnimationSpriteLab">Lab:
                                    Animation</a></td>
                            <td class="proj2">Project 1 Part 2 due/<br>Project 2 Assigned</td>
                            </td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- week 4 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">4</td>
                            <td>Tu 02/19</td>
                            <td>8</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1muyIO3dnxELGKCwpluaMDkqwjYO8W2UD8Op03JCUmNc/edit#slide=id.g4cd801868d_0_143">Tools
                                    and Assets</a></br>Pitch day explanation</td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/view/feature/134571/how_to_pitch_your_project_to_.php">How
                                    To Pitch Your Project To Publishers</a></td>
                            <td><a href="https://github.berkeley.edu/berkeley-gamedev/CoroutinesLab">Lab: Coroutines</a></br>
                                <a href="https://github.com/berkeleyGamedev/AnimatorAndBlendTreesLab">Lab: Animator</a></td>
                            <td class="proj2"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>Th 02/21</td>
                            <td>9</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1i4u7SCagxeAQ61OqkLIiXLoPMxd5P4YUyMkRwsg6dvE/edit?usp=sharing">Group
                                    Dynamics</a></br>Showcase game jam projects, project 3 explained, project work
                                meetings, small group pitch discussions</td>
                            <td></td>
                            <td class="proj2">Game Jam Due</td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 5 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">5</td>
                            <td>Tu 02/26</td>
                            <td>10</td>
                            <td class="td-left"><strong><a href="https://docs.google.com/presentation/d/1mD4C2NUAnlf99F_vJX0dBzKM3wowCSy40QY1ftudMOM/edit?usp=sharing">Pitch Day</a></strong></td>
                            <td class="weeknum" rowspan="2"><a href="https://gamedevelopment.tutsplus.com/articles/how-and-why-to-write-a-great-game-design-document--cms-23545">How
                                    (and Why) to Write a Great Game Design Document</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>Th 02/28</td>
                            <td>11</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1HxD0_T3mJawyBQ9kQJgoyXWjxBDfrGl0aXbfksTh_HM/edit?usp=sharing">MVP, Teams are assembled + brainstorming session</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 6 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">6</td>
                            <td>Tu 03/05</td>
                            <td>12</td>
                            <td class="td-left">Project work meeting</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/185258/best_practices_five_tips_for_.php?print=1">Best
                                    Practices: Five Tips for Better Playtesting</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="white-bg">
                            <td>Th 03/07</td>
                            <td>13</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1WqXPZh0WDd9lC3W2GBU671obZcli3i-fHmtGdKzDfjE/edit?usp=sharing">Feedback Loops, Animation, and Minecraft</a></td>
                            <td></td>
                            <td class="proj3">Milestone 0: Game Design Doc Due</td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 7 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">7</td>
                            <td>Tu 03/12</td>
                            <td>14</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1ABkDIvZX4hhLNRrUU7QVufYMvkoJdKDhhIw8KCAGEJA/edit?usp=sharing">Project work meeting</a></td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/130989/team__corporate_structure_is_the_.php">Team
                                    & Corporate Structure: Is The Standard Way, The Best Way?</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>Th 03/14</td>
                            <td>15</td>
                            <td class="td-left"><strong><a href="https://docs.google.com/presentation/d/1d9BOofUFwKQ6VOccn2kdwXsYG-05C0b5bHVEKGNYWjI/edit?usp=sharing">Milestone 1 Delivery: Demo and Feedback</a></strong></td>
                            <td></td>
                            <td class="proj3">Milestone 1</td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 8 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">8</td>
                            <td>Tu 03/19</td>
                            <td>16</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1IkQUdnP2ZtlrFdRBZZ-fjqayveGTx7qQ3NaWexrIWT4/edit?usp=sharing">Project work meeting</a></td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/blogs/WesleyRockholz/20140418/215819/10_Insightful_Playtest_Questions.php">10
                                    Insightful Playtest Questions</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr>
                            <td>Th 03/21</td>
                            <td>17</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/1MpMYgchQCr8mxwrWf_Rb80ALxtf3c7YDfRGesqVED34/edit?usp=sharing">Accessibility, AI, and Level Design</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="gray-bg">
                            <td colspan="8">Spring Break</td>
                        </tr>
                        <!-- Week 9 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">9</td>
                            <td>Tu 04/02</td>
                            <td>18</td>
                            <td class="td-left"><a href="https://docs.google.com/presentation/d/12fyPkB4WnC0sS73Btoie7R4q3s1RgFRGLjso3nMtotI/edit?usp=sharing">Project work meeting</a></td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/blogs/ThomasGrip/20140429/216467/4Layers_A_Narrative_Design_Approach.php">4-Layers,
                                    A Narrative Design Approach</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="white-bg">
                            <td>Th 04/04</td>
                            <td>19</td>
                            <td class="td-left"><strong><a href="https://docs.google.com/presentation/d/1FO61jgAtX9WT932IP7hvneFLN_9UnvjtNFwWtCmLb4U/edit?usp=sharing">Milestone 2 Delivery: Demo and Feedback</a></strong></td>
                            <td></td>
                            <td class="proj3">Milestone 2</td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 10 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">10</td>
                            <td>Tu 04/09</td>
                            <td>20</td>
                            <td class="td-left">Project work meeting</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.cnet.com/news/microsofts-new-xbox-adaptive-controller-puts-disabled-players-back-in-the-game/">Microsoft's
                                    new Xbox Adaptive Controller puts disabled players back in the game</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>Th 04/11</td>
                            <td>21</td>
                            <td class="td-left">Guest lecture (TBA)/(based on class needs)</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 11 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">11</td>
                            <td>Tu 04/16</td>
                            <td>22</td>
                            <td class="td-left">Project work meeting</td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamestudies.org/0101/juul-gts/">A brief
                                    note on games and narratives</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="white-bg">
                            <td>Th 04/18</td>
                            <td>23</td>
                            <td class="td-left"><strong>Milestone 3 Delivery: Demo and Feedback</strong></td>
                            <td></td>
                            <td class="proj3">Milestone 3</td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 12 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">12</td>
                            <td>Tu 04/23</td>
                            <td>24</td>
                            <td class="td-left">Project work meeting</td>
                            <td class="weeknum" rowspan="2"><a href="https://gamedevelopment.tutsplus.com/tutorials/the-many-ways-to-show-the-player-how-its-done-with-in-game-tutorials--gamedev-400">The
                                    Many Ways to Show the Player How It's Done With In-Game Tutorials</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>Th 04/25</td>
                            <td>25</td>
                            <td class="td-left">Guest lecture (TBA)/(based on class needs)</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 13 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">13</td>
                            <td>Tu 04/30</td>
                            <td>26</td>
                            <td class="td-left">Project work meeting</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/blogs/CalebCompton/20180618/320219/Game_Design_in_Real_Life_Gamification.php">Game
                                    Design in Real Life: Gamification</a></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <tr class="white-bg">
                            <td>Th 05/02</td>
                            <td>27</td>
                            <td class="td-left">Game/course postmortem writeup due</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                        <!-- Week 14 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">14</td>
                            <td>Tu 05/07</td>
                            <td>28</td>
                            <td class="td-left"><strong>Showcase</strong></td>
                            <td></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: Cory 258</td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <h1 class="section-title" id="past-projects">PAST PROJECTS</h1>
                <ul>
                    <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/309983/gddcal-spring-2018-showcase">Spring
                            2018</a></li>
                    <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/430270/gdd-fall-2018-final-showcase">Fall
                            2018</a></li>
                </ul>
                <h1 class="section-title" id="prerequisites">PREREQUISITES</h1>
                <p>
                    This class is open to both programmers and artists. You are not required to have any prior game
                    development experience.
                </p>
                <h6>Programmers</h6>
                <p>
                    Have completed CS61A and CS61B (concurrently is ok)
                </p>
                <h6>Artists</h6>
                <p>
                    Some artistic background, familiarity with some digital art tools
                </p>
                <h1 class="section-title" id="course-structure">COURSE STRUCTURE</h1>
                <p>
                    The class meets <strong>twice a week</strong>, for an hour and a half each meeting and <strong>attendance
                        is required.</strong>
                    For the first four weeks, meetings will be tutorial lectures, designed to provide students with
                    knowledge of how the Unity engine works and best practices for implementing game mechanics.
                    The majority of the classes for the first half of the course will be in the form of hands-on lab
                    assignments.
                </p>
                <p>
                    Project teams are formed around Week 6 and the course will assume the following structure:
                </p>
                <p>
                    The first meeting of the week will be a project work meeting, and the second a lecture.
                </p>
                <p>
                    During the project work meetings:
                </p>
                <p>
                    Teams will meet, check in with a facilitator about their progress, and plan their work schedule for
                    the next week.
                    Teams will work on their projects and get help from facilitators.
                    The lectures from Week 6 onward will be determined during the semester based on what the students
                    need. The lectures will come from a variety of sources: instructors, industry contacts, alumni, and
                    possibly the students themselves.
                </p>
                <h1 class="section-title" id="projects">THE PROJECTS</h1>
                <h6>Project 1</h6>
                <p>
                    Students will be building a game from scratch using a tutorial created by course staff. The project
                    will be a multi-part tutorial over several weeks. This project will reinforce key concepts
                    introduced in the tutorial lectures given in the first 4 weeks of the class. There will also be
                    some open-ended requirements in addition to implementing the tutorial each week into the project.
                </p>
                <p>
                    <strong>Team size:</strong> 1 person
                </p>
                <h6>Project 2</h6>
                <p>
                    A one week &#34;game jam&#34; type project where the goal is to try and build a game in a week. The
                    main purpose of this project is to teach students about scope and what can be done in a week. It
                    will also serve as a good opportunity to see what kind of a group dynamic works best for you.
                </p>
                <p>
                    <strong>Team size:</strong> 2-3 people
                </p>
                <h6>Project 3</h6>
                <p>
                    The flagship project for the course is a game designed and built by the students themselves.
                    Students will begin preparing their pitches in Week 5 with guidance from the instructors, and will
                    give their pitches to the entire class in Week 6. Students will then select which projects they are
                    interested in, and the instructors will match people to teams based on their interests and skills.
                    From there on out, the teams will work with the instructors and their team leads to create a
                    schedule and stick to it. The instructors will also assign labs related to each project to help
                    prepare the team with Unity topics that will be useful to know. While working on the project, the
                    teams will work with and receive feedback from mentors and other students. All projects will be
                    graded based on how well they achieve 4 milestones.
                </p>
                <p>
                    <strong>Team size:</strong> 3-5 people
                </p>
                <p>
                    At each milestone, all projects are shared with the rest of the class. These milestones are as
                    follows:
                </p>
                <p>
                    <strong>Milestone 0:</strong> Game design document explaining the vision for the game, as well as a
                    week by week breakdown of tasks.
                </p>
                <p>
                    <strong>Milestone 1:</strong> Playable prototype of the original pitch. The core mechanics of your
                    game should be implemented, though no art needs to in place yet. Effectively this milestone exists
                    to ensure that your game will be fun, and to get feedback on how it can be improved if it’s not
                    shaping up to be fun.
                </p>
                <p>
                    <strong>Milestone 2:</strong> Alpha Build. All of the main mechanics should be in place. General
                    art style should be decided on and main assets (character, environment) should be in place. A first
                    pass should be done on the rest of the art assets. You should have a basic but well completed
                    level. Can be very buggy.
                </p>
                <p>
                    <strong>Milestone 3 (showcase):</strong> Finished Project. The game should be complete, and in line
                    with the original pitch. It should be polished, playable from start to finish, and mostly bug free.
                </p>
                <p>
                    At each milestone, team members will fill out team evaluations that will be factored into your
                    grade.
                </p>
                <h1 class="section-title" id="written-responses">WRITTEN RESPONSES</h1>
                <p>
                    Students will be responsible for several written assignments. One is a weekly development blog that
                    documents the progress your group is making on your game. One is a game design document that
                    details the design of your game as well as a week by week breakdown of tasks. Lastly students will
                    be required to submit a short writeup detailing their thoughts on their project and the course as a
                    whole.
                </p>
                <h1 class="section-title" id="required-materials">REQUIRED MATERIALS</h1>
                <p>
                    Every student will need a laptop capable of running Photoshop, Illustrator, Unity3D, or another
                    game engine. No textbooks are required. Two recommended resources are articles from
                    www.gamasutra.com and videos from www.gdcvault.com.
                </p>
                <h1 class="section-title" id="grading">GRADING</h1>
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <tbody>
                        <tr>
                            <td style="font-weight:bold; text-align: left; ">Labs</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; text-align: left; ">Project 1</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; text-align: left; ">Project 2</td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; text-align: left; ">Project 3</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; text-align: left; ">Written Responses</td>
                            <td>10%</td>
                        </tr>
                    </tbody>
                </table>
                <h6>Project 1 and 2:</h6>
                <p>
                    Graded on completion of project specifications
                </p>
                <p>
                    Grading will consist of a P/NP and some feedback on your project
                </p>
                <h6>Project 3 (Per milestone):</h6>
                <p>
                    Mentor evaluation: 40%
                </p>
                <p>
                    Peer evaluations: 40%
                </p>
                <p>
                    Project score: 20%
                </p>
                <p>
                    Project score is based off of progress made not percentage of pitch completed
                </p>
                <br />
                <p style="font-weight:bold ">
                    A minimum of 70% is required to pass the course.
                </p>
                <h1 class="section-title" id="general-policy">GENERAL POLICY</h1>
                <p>
                    Attendance matters! If you cannot be at class, you must let an instructor and your team lead know.
                    Only two unexcused absences will be allowed, and any further absences will result in your grade
                    dropping 10% per absence. If you are in danger of not passing come the end of the semester, the
                    instructors will let people know what can be done to remedy that.
                    The instructors recommend you use Unity3D for your projects, as that will be the only
                    &#34;supported&#34; engine by the instructors. You are welcome to use other engines, but the
                    instructors will likely be unable to help you as well as a result.
                </p>
                <br />
                <br />
                <br />
                <br />
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php' ?>
        </main>
    </div>
</body>

</html>