<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poll UI Design | CodingNepal</title>
 
</head>
<body>
    
  <div class="wrapper">
    <header>Poll UI Design</header>
    <div class="poll-area">
      <input type="checkbox" name="poll" id="opt-1">
      <input type="checkbox" name="poll" id="opt-2">
      <input type="checkbox" name="poll" id="opt-3">
      <input type="checkbox" name="poll" id="opt-4">
      <label for="opt-1" class="opt-1">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text">HTML</span>
          </div>
          <span class="percent">30%</span>
        </div>
        <div class="progress" style='--w:30;'></div>
      </label>
      <label for="opt-2" class="opt-2">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text">Java</span>
          </div>
          <span class="percent">20%</span>
        </div>
        <div class="progress" style='--w:20;'></div>
      </label>
      <label for="opt-3" class="opt-3">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text">Python</span>
          </div>
          <span class="percent">40%</span>
        </div>
        <div class="progress" style='--w:40;'></div>
      </label>
      <label for="opt-4" class="opt-4">
        <div class="row">
          <div class="column">
            <span class="circle"></span>
            <span class="text">jQuery</span>
          </div>
          <span class="percent">10%</span>
        </div>
        <div class="progress" style='--w:10;'></div>
      </label>
    </div>
  </div>

  <script src="../script/poll.js"></script>

</body>
</html>