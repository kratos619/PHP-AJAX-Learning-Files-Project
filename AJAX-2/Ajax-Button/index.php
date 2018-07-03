
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Test</title>
    <style media="screen">
      #blog-posts{
        width: 700px;
      }
      .blog-post{
        border:1px solid black;
        margin:  10px 10px 20px 10px;
        padding: 6px;
      }
      button.favorite-button{
        background: #0000FF;
        color: white;
        text-align: center;
        width: 70px;
      }
      button.favorite-button:hover{
        background: #000099;
      }
    </style>
</head>

<body>
    <div id="blog-posts">
      <div id="blog-post-101" class="blog-post">
        <h3>blog post 101</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="favorite-button">Favorite</button>
      </div>
      <div id="blog-post-102" class="blog-post">
        <h3>blog post 102</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="favorite-button">Favorite</button>
      </div>
      <div id="blog-post-103" class="blog-post">
        <h3>blog post 103</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="favorite-button">Favorite</button>
      </div>
    </div>
    <script>
function favorite() {
 
 var parent =  this.parentElement;
  var xhr = new XMLHttpRequest();
  xhr.open('POST','favorite.php',true);
  xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
  xhr.setRequestHeader('X-Requested-Width','XMLHttpRequest');

  xhr.onreadystatechang = function () {
    if(xhr.readyState == 4 && xhr.status == 200){
      var result = xhr.responseText;
      console.log('you click');
      console.log('Result' + result);
    }
  };
  xhr.send("id=" + parent.id);
}

var buttons = document.getElementsByClassName('favorite-button');
for(i = 0 ; i < buttons.length;i++){
  buttons.item(i).addEventListener('click',favorite);
}
    </script>
</body>
</html>
