<?php
echo $_GET["url"];
?>

<html>
<div id="container">
  <button class="learn-more">کلیک کنید</button>
</div>
</html>

<style>
@import url("https://fonts.googleapis.com/css?family=Roboto:900");
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  font-size: 1rem;
  line-height: 1.5;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  margin: 0;
  min-height: 100vh;
  background: #3c3c3c;
}

button {
  position: relative;
  display: inline-block;
  cursor: pointer;
  outline: none;
  border: 0;
  vertical-align: middle;
  text-decoration: none;
  font-size: inherit;
  font-family: inherit;
}
button.learn-more {
  -webkit-transition: all 0.5s cubic-bezier(0.65, -0.25, 0.25, 1.95);
  transition: all 0.5s cubic-bezier(0.65, -0.25, 0.25, 1.95);
  font-weight: 900;
  color: #202121;
  padding: 1.25rem 2rem;
  background: #fff;
  text-transform: uppercase;
}
button.learn-more:hover, button.learn-more:focus, button.learn-more:active {
  letter-spacing: 0.125rem;
}

@supports (display: grid) {
  body {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 0.625rem;
    grid-template-areas: ". main main ." ". main main .";
  }

  #container {
    grid-area: main;
    align-self: center;
    justify-self: center;
  }
}
</style>