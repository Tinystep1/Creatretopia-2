<h1>Creaturetopia (PHP)</h1>
<h3>Earliaer work</h3>
<p>This is a continuation of my <a href="https://github.com/Tinystep1/Creaturetopia">Creatutopia</a> respository. It will include php, so will be code only.</p>
<p>To see a demo of my site, see my Creatutopia repository (above link).</p>
<h3> Continuation of The RET Course</h3>
<p>I removed the old links on the <a href="./animal-reference.html">species list</a> and <a href="./petinfo.html">Animal Info</a> pages.</p> 
<p>I have started an <a href="./faq.html">FAQ page</a> and connected it to the CSS file for the site. I will add the questions and answers soon, looking at other sites for possible questions, and also add othrs people ask me when I talk about my project that are appropriate i.e. Focusing on the game and game play itself, not code, etc.</p>
<h3>After the RET course</h3>
<p>I now have <a href="https://github.com/2pisoftware/cmfive-core">2Pi Software's Cmfive code</a> on my computer, and am learning to use it so that I may add a database to my site. You can see this code is <a href="https://github.com/Tinystep1/creaturetopiaCmfive">this repository</a>. All information and updates about the Cmfive and database code will be included in <a href="https://github.com/Tinystep1/Creatretopia-2/blob/master/README.md">this README file</a> (Craeturetopia (PHP)).</p>
<p>I am still working through the CSS part of <a href="https://www.freecodecamp.org">freecodecamp</a>'s Certificate in Responsive Web Design, and adding parts of it to my site.</p>
<p>My initial sample version of this game (which may be included in this or a seperate respository, work to commence soon) will use a simple 'blob' creature called My Blob. There will be no database and saving. Initially, with a number of set items to use on the 'creature', you will be able to increase its stats. The hygine will also automatically decrease over time. one update will allow you to enter it in shows against three NPCs (non player characters), Blobby, Blobina, and The Blob, which will get tandomly generated stats each time you hit 'Enter Show'. You will then see a  pop-up or new window with a back button with the results. A final update will allow medals to appear on your pets page for each show where it placed (1st, 2nd, and 3rd. I may also add a renaming feature. After this, work will be focused soley on the official game.</p>
<p>I am working on adding tables to my database for my <a href="https://github.com/Tinystep1/creaturetopiaCmfive">creaturetopia module</a>. I have created one for <a href="./petinfo.html">petinfo.html</a> using the filler text as column names. I have started to add information to this table for my first animal. This will need to be edited. However, an 'edit animal' feature has alredy been added to the table.</p>
<p>I have started a simplefied version of the game in my <a href="https://github.com/Tinystep1/Creaturetopia-Sample">Creatutretopia Sample repository</a>. It now has a basic index page explaing the game in it' smost basic form.</p>
<p>For the Creaturetopia Sample of the game, I can probably use a canvas to display the 'animal's' stats. As the canvas can react to a user's click actions, and JavaScript, I can set it up so that the numbers of particular stats increase within a designated range depending on the use button clicked i.e. the item 'use' button the user clicks on. In JavaScript I may also be able to cause the 'hygine' stat to go down automatically over time, whilst the game is loaded.</p>
<p>As I am planning to have the item and animal pages seperate for the actual game (as there will be multipe animals, only select items can be used on some animals, and not all users will have all items), I will have to find a different way to cause effects on the stats therough item use, but the canvas will help me to practice woking out how items might affect the animals, and increase their stats.<p>
<p>I have started a simplefied version of the game in my Creatutretopia Sample repository. It now has a basic index page explaing the game in it' smost basic form.</p>
<h3>Creaturetopia Sample Game</h3>
<p>For the Creaturetopia Sample of the game, I can probably use a canvas to display the 'animal's' stats. As the canvas can react to a user's click actions, and JavaScript, I can set it up so that the numbers of particular stats increase within a designated range depending on the use button clicked i.e. the item 'use' button the user clicks on. In JavaScript I may also be able to cause the 'hygine' stat to go down automatically over time, whilst the game is loaded.</p>
<p>As I am planning to have the item and animal pages seperate for the actual game (as there will be multipe animals, only select items can be used on some animals, and not all users will have all items), I will have to find a different way to cause effects on the stats therough item use, but the canvas will help me to practice woking out how items might affect the animals, and increase their stats.<p>
<p>I have created an <a href="https://github.com/Tinystep1/Creaturetopia-Sample/blob/master/game.html">HTML game play page</a> for the Creaturetopia Sample repository , and added a blank canvas element with no border. On the same page I have added a list of items with the 'Use' and 'Equip' buttons next to them. I will have to add JavaScript to get them to do what I want.</p>
<p>I have also added a JavaScript page name <a href="https://github.com/Tinystep1/Creaturetopia-Sample/blob/master/gameCanvasInfo.js">Game Canvas Info</a> that includes the basic JavaScript information I need to add for the canvas on the <a href="https://github.com/Tinystep1/Creaturetopia-Sample/blob/master/game.html">Game page</a> for each stat, and what happens when you click the items next to the buttons. At the moment it is not correct JavaScript, and is more of a note page. I am not sure if I will modify and use this or create a seperte page calles game.js when I start coding the JavaScript for my 'animalStats' canvas on my <a href="https://github.com/Tinystep1/Creaturetopia-Sample/blob/master/game.html">Game</a> page.</p>
<h3>The Full Game</h3>
<p>I worked more on my <a href="https://github.com/Tinystep1/creaturetopiaCmfive">Creaturetpia CMfive repository</a>. I changed the column type for the animal description on the <a href="https://github.com/Tinystep1/creaturetopiaCmfive/blob/master/install/migrations/20191204104036-CreaturetopiainitialMigration.php">pet info table</a> and created a new table for the item part of the <a href="https://github.com/Tinystep1/creaturetopiaCmfive/blob/master/templates/public/viewanimalinfo.tpl.php">public animal info page</a>. I then linked them, setting it up so I can select which items I add to the table go with which animal. I currently have one real animal and item on each table, along with one test animal and item which I lnked to test the code.</p>
<p>I will have to creaate a third table for statistics that will most help each animal species. I am not yet sure what columns it will have beyond the names of diifferent stats though</p>
<p>I added some info for another animal in the <a href="https://github.com/Tinystep1/Creaturetopia/blob/master/petinfo.js">JavaScript pet info page</a> in my original <a href="https://github.com/Tinystep1/Creaturetopia">Creaturetopia</a> repository to practice what I learnt on <a href="https://www.freecodecamp.org/learn">freecodecamp</a> today.</p>
<p>I have decided my breed information (found in my original <a href="https://github.com/Tinystep1/Creaturetopia">Creaturetopia</a> repository) can be best displayed as a table. Differnt species will have different traits and attributes so I will need to create a sperate species page and table for each.</p>
<p>I can actually use partials in CMFive to grab information from the database and display it as a table on my site.</p>
<p>I added the small legal text at the bottom of the index page to the bottom of the other pages, and added some accesskeys for the main site pages. I will look further into W3 Consortium's Web Content Accessibility Guidelines in order to make my site as accessbile to as many people as possible.</p>
<h3><a href="https://github.com/Tinystep1/Creaturetopia-Sample">The Sample Game</a></h3>
<p>I have added the blob, and the items I have come up with for it so far to my database. I will create a new game page for it in the templates of the <a href="https://github.com/Tinystep1/creaturetopiaCmfive">CMFive repository</a> in the future.</p>
<p>I am now going to use Vue.js instead of a canvas to display the blobs stats, as it should be able to give more real time reaction to user actions. I have been learning a bit of it today, and there may be a way to more easliy extrapolate this design for the full game too.</p>
<p>For now, I have added some more CSS to the samle game, and added some formatting to the <a href="https://github.com/Tinystep1/Creaturetopia-Sample/blob/master/game.html">game page</a>.</p>
<p>I have been doing some short courses with <a href="https://www.futurelearn.com">FutureLearn</a> on various parts of computing. I am doing Code For The Web, which covers basic aspects of HTML and CSS, as a sort of review. I am doing How To Create Great Content Online, which will ensure I can make the pages for my game the most engaging possible to encourage people to stay on, and explore, the site. I am doing Copyright and the Business of Creative Industries, which includes games like this, so will ensure I am in line with current copyright law, and can protect my game too.</p>
<p>I am also doing Computer Programming for Everyone, which is currently looking at algortithms, which I will need to use for shows both in the first or second update of the <a href="https://github.com/Tinystep1/Creaturetopia-Sample">sample game</a>, and in the actual full reease game too.</p>
<h3><a href="https://github.com/Tinystep1/Creatretopia-2/blob/master/README.md">Full Game<a></h3>
<p>Working through Basic CSS section of the Responsive Web Design Certification on<a href="https://www.freecodecamp.org/learn">freecodecamp.com</a> I have decided that margins will be useful between my images of items in the store in the full game, and equipped items on the animal pages of players. They will need even padding to center the images in the boxes. These parts of the game will be worked on at a later date.</p>
<p>I edited the sizing of the banner image on the <a href="./index.html">index page</a> to make it responsive for smaller device screens.</p>
<p>I edited the linked images on the <a href="./index.html">index page</a> to stop them from apperaing pixelated on high resolution screens. I will be doing the same with most images used on the site in the future.</p>
<p>I contacted the person who currently owns <a href="http://www.animalacres.net/home">Animal Acres</a>, and asked if they knew whether players used mobile devices or computers more to play the game, and what they suggested for optmising my game for touch screen devices. Using Google Analytics they could tell me that most people use a touch screen device. Only around 60 players in total use a computer. I should, therefore, design my game with touchscreen devices in mind. She advised me to steer clear of things that appear when you hover your mouse above them, or come up with a work around for touch screens. She also said to use CSS to make sure things resize accordingly, which I have been working on just recently. Using modern HTML, CSS, and JavaScript, buttons shuls automatically work on touch screens, so there is no issue there. Lastly, she suggested usung Chrome Development tools to check differnt screen sizes quickly. I will have to look into that.</p>
<p>Over the last few days I have been setting up my creaturetopia CMfive databaase with MySQL, in a virtual Linux computer. I have begun to add a statistic table to it labeled Stats.</p>
<p>I reorganised my CSS and synced it up with that in my CMfive database. Now they have the element specific styles at the top, then the class styles, and finally, the ID styles. I also deleted the irrelevant or repeated styles, shuch as the serveral id styles which do the same as the green-background class.</p>
<p>I fised the headings on the FAQ page so that they have semantic menaing. For further semantic meaning, I also made sure every page had a <b>main</b> section.</p>
<p>I also added a base for a news and announcement page for the site. It has an announcement with placeholder text to show the formatting they will have.</p>
<p>I added a header element to each page, and updating the CSS to match new page titles. I also added navigation elements to the appropriate pages and sections.</p>
<p>I added the form tag to the <a href="registration-page.html">Registration Page</a> form. I also added labels to all the iput boxes and a datepicker for the birthdate setion of the form. The password textbox has also been changed to the password type to hide the information. </p>
<p>I have added a test.php file. This is only for practicing PHP while I'm learning some of the basics rather than the pre-constructed databse template I am creating over in creaturetopiaCmfive. It is not part of the actual game, and will be deleted at a later date.</p>
<p>I added a target of a new tab or window to the appropriate links.</p>