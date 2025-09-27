<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="game-title">Game Page</title>
  <style>
    * {
      font-family: "Stoke", serif;
      font-weight: 400;
      box-sizing: border-box;
    }
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #0d001a, #2b0038); 
      color: #eee !important;
    }
    header {
      background: linear-gradient(90deg, #5a189a, #9d4edd);
      color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 26px;
      font-weight: bold;
    }
    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
      background: rgba(40, 0, 60, 0.85);
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.6);
    }
    iframe {
      width: 100%;
      height: 600px;
      border: none;
      border-radius: 10px;
      margin-bottom: 20px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.5);
    }
    h2 {
      margin-top: 25px;
      color: #d9b3ff;
      border-left: 5px solid #9d4edd;
      padding-left: 10px;
    }
    .meta {
      margin: 15px 0;
      padding: 12px;
      background: linear-gradient(90deg, #3c096c, #5a189a);
      border-radius: 8px;
      color: #fff;
      font-size: 15px;
    }
    .tags span {
      display: inline-block;
      background: linear-gradient(90deg, #7b2cbf, #9d4edd);
      color: #fff;
      padding: 6px 12px;
      margin: 4px;
      border-radius: 20px;
      font-size: 14px;
      transition: 0.3s;
    }
    .tags span:hover {
      background: linear-gradient(90deg, #9d4edd, #c77dff);
      transform: scale(1.05);
    }
    .instructions {
      background: linear-gradient(90deg, #c77dff, #7b2cbf);
      padding: 12px;
      margin: 15px 0;
      border-radius: 8px;
      color: #000;
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php include("header.php");
 ?>
  <header id="header-title">Loading Game...</header>

  <div class="container">
    <!-- Game Frame -->
    <iframe id="game-frame"></iframe>

    <!-- Category -->
    <div class="meta">
      <p><strong>Category:</strong> <span id="game-category"></span></p>
    </div>

    <!-- Description -->
    <h2>Description</h2>
    <p id="game-description"></p>

    <!-- Tags -->
    <h2>Tags</h2>
    <div class="tags" id="game-tags"></div>

    <!-- Instructions -->
    <h2>Instructions</h2>
    <div class="instructions" id="game-instructions"></div>

    <!-- Game Info -->
    <div class="meta">
      <p><strong>Size:</strong> <span id="game-size"></span></p>
      <p><strong>Published:</strong> <span id="game-published"></span></p>
    </div>
  </div>

<script>
  // --- GAME DATA JSON ---
  const games = {
    "burnout": {
      title: "GT Burnout Parking Simulator",
      category: "Arcade, Racing",
      description: "GT Burnout Parking Simulator is a thrilling driving game that challenges players to master precision parking while performing intense burnout maneuvers...",
      tags: ["Car Parking","Cars","Parking"],
      instructions: "WASD / Arrow keys – Move",
      size: "960 x 600",
      published: "Mon Mar 03, 2025",
      iframe: "https://html5.gamemonetize.com/ym0vlnmwf8rx23ljxscuzimhdm4yjjz5/"
    },
    "frenzy-demine": {
      title: "frenzy-demine",
      category: "Hypercasual, Shooting",
      description: "Test your reflexes and strategy in this fast-paced bomb disposal game! Identify and defuse the correct mines before time runs out, earning points and bonuses for speed. Each wave ramps up the challenge with more mines and less time, pushing your skills to the limit. Can you survive the explosive chaos and set a new personal best.",
      tags: ["1 Player","2D","Casual","Retro","Shooter"],
      instructions: "Left-click / Tap on the shapes.",
      size: "1080 x 1920",
      published: "Thu Sep 04, 2025",
      iframe :"https://html5.gamemonetize.co/jjprjr53ojpuxj4nx49ga0kb6puqqp6e/" 
    },
       "Slider-Puzzel": {
      title: "Sliding-Number-Puzzle",
      category: "Action , Puzzle",
      description: "Challenge your mind with Sliding Number Puzzle, a timeless brain teaser built with pure HTML5, ready to run seamlessly on desktop and mobile browsers. Rearrange the numbered tiles to restore the correct order in the least number of moves. Perfect for casual gamers and puzzle enthusiasts alike, this game delivers endless replay value with its clean design and addictive gameplay",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/hzm4ilrkbvxv6bbtvycjitkgvqu4qyzk/"
    },
        "Unicorn Coloring Challenge": {
      title: "Unicorn Coloring Challenge",
      category: "Arcade , Girls",
      description: "Unicorn Coloring Challenge is a magical and delightful coloring game that will spark creativity in kids and adults alike! Dive into a world of rainbow-colored unicorns, sparkling stars, and enchanted landscapes. Grab your digital crayons, paints, and brushes to bring each adorable unicorn to life. With endless colors to choose from, you can create dazzling designs, mix and match patterns, and let your imagination run wild. Perfect for little artists who love magical creatures, glittery adventures, and fun challenges. Let the unicorn magic begin and see who can make the most fabulous masterpiece!",
      tags: ["Cartoon ,Coloring Educational, Mobile School"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/os0nnbahf0d3dnlf5kmsk8pl19cg3x11/"
    },
        "play5": {
      title: "Princess doll dressup bueaty",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/ba61ju4zxm7s4ergucae5tmberlk7t6t/"
    },
        "play6": {
      title: "Mysterious Elevator",
      category: "Action , Puzzle",
      description: "Immerse yourself in the thrilling adventure of “Mysterious Elevator”! You are trapped in a skyscraper with 100 floors, ruled by the sarcastic Keeper of Numbers — a master of mathematical riddles. To escape, solve logical challenges while riding in an old creaky elevator. Swap number and sign blocks, assemble equations, and face extra puzzles along the way. Each floor is a new test: from simple arithmetic to tricky logic traps. One mistake, and the elevator may crash! With every solution you descend closer to freedom. “Mysterious Elevator” is perfect for fans of math, logic, and atmospheric mysteries. Can you outsmart the Keeper and escape?",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/fovn0q6vntn3c8adm8lsz17gszwguvw4/"
    },
    
        "play7": {
      title: "Supper Traffic Racer",
      category: "Action , Puzzle",
      description: "Immerse yourself in the thrilling adventure of “Mysterious Elevator”! You are trapped in a skyscraper with 100 floors, ruled by the sarcastic Keeper of Numbers — a master of mathematical riddles. To escape, solve logical challenges while riding in an old creaky elevator. Swap number and sign blocks, assemble equations, and face extra puzzles along the way. Each floor is a new test: from simple arithmetic to tricky logic traps. One mistake, and the elevator may crash! With every solution you descend closer to freedom. “Mysterious Elevator” is perfect for fans of math, logic, and atmospheric mysteries. Can you outsmart the Keeper and escape?",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/a5w7favv4e53hhyfev78m7xs0dcefnew/"
    },
     "play8": {
      title: "Jingle Jetpack",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/1h0rpfwt512uknlm2so880g153siow4p/"
    },
     "play9": {
      title: "Fun Golf",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/2a4n27775li5nlyq75cbmoiyckyet93v/"
    },
     "play10": {
      title: "Sift Renegade Brawl",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/v9kun6or775k19iri6nhtxd1hrmv2zvx/"
    },
     "play11": {
      title: "Scary Rainbow",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/4pm9pjhq20euvhttfd2mdh349obcztgi/"
    },
      "play12": {
      title: "Princess Color Number",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/lchueh3gpki8r358kv95y9qfg5wxpg3w/"
    },
      "play13": {
      title: "Heart Box - physics",
      category: "Action , Puzzle",
      description: "Welcome to Girl Games Unblocked: Mini Fun, a collection of minigames online. Whether you are a casual player looking for relaxation or a skillful gamer who wants to elevate your gaming skills, we will satisfy your needs with our vast number of relaxing games. Find your favorite minigame among our best girl game selection. Fashion design, nail salon, doll dressup games, food cooking... You can always find something that fits your type",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/m4qrp2locszmxh6vtcaibgi4phewv6yh/"
    },
      "play14": {
      title: "Tom & Jerry Run",
      category: "Action , Puzzle",
      description: "Tom and Jerry Run is fun endless runner game such as subway surfers! Run with Jerry throught subway city and jump over obstacles to collect gold coins as in talking tom gold run!",
      tags: ["1 Player, Memory, Puzzle"],
      instructions: "Mouse click or tap to play",
      size: "800 X 600",
      published: "Fri Sep 12 2025",
      iframe: "https://html5.gamemonetize.co/a6d9kqfsjxbpdktw6p8j11z8bm776t8h/"
    },
  };

  
  const urlParams = new URLSearchParams(window.location.search);
  const gameKey = urlParams.get("game") || "burnout"; // default if not provided
  const game = games[gameKey];

  // --- FILL DATA ---
  document.title = game.title;
  document.getElementById("header-title").textContent = game.title;
  document.getElementById("game-frame").src = game.iframe;
  document.getElementById("game-category").textContent = game.category;
  document.getElementById("game-description").textContent = game.description;
  document.getElementById("game-tags").innerHTML = game.tags.map(tag => `<span>${tag}</span>`).join("");
  document.getElementById("game-instructions").textContent = game.instructions;
  document.getElementById("game-size").textContent = game.size;
  document.getElementById("game-published").textContent = game.published;
</script>
<?php include("../HOME_PAGE/footer.php")?>
</body>
</html>
