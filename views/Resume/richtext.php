<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Document</title>
    <style>
      *,
      *:before,
      *:after {
        box-sizing: border-box;
      }

      .toolbar {
      }
      .tool-list {
        display: flex;
        flex-flow: row nowrap;
        list-style: none;
        padding: 0;
        margin: 1rem;
        overflow: hidden;
        border-raduis: 10px;
      }
      .tool {
      }
      .tool--btn {
        display: block;
        border: none;
        padding: 0.5rem;
        font-size: 20px;
      }

      #output {
        height: 400px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19),
          0 6px 6px rgba(0, 0, 0, 0.23);
        margin: 1rem;
        padding: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="toolbar">
      <ul class="tool-list">
        <li class="tool">
          <button type="button" data-command="justifyLeft" class="tool--btn">
            <i class="fa fa-align-left"></i>
          </button>
        </li>
        <li class="tool">
          <button type="button" data-command="justifyCenter" class="tool--btn">
            <i class="fa fa-align-center"></i>
          </button>
        </li>
        <li class="tool">
          <button type="button" data-command="bold" class="tool--btn">
            <i class="fa fa-bold"></i>
          </button>
        </li>
        <li class="tool">
          <button type="button" data-command="italic" class="tool--btn">
            <i class="fa fa-italic"></i>
          </button>
        </li>
        <li class="tool">
          <button type="button" data-command="underline" class="tool--btn">
            <i class="fa fa-underline"></i>
          </button>
        </li>
        <li class="tool">
          <button
            type="button"
            data-command="insertOrderedList"
            class="tool--btn"
          >
            <i class="fa fa-list-ol"></i>
          </button>
        </li>
        <li class="tool">
          <button
            type="button"
            data-command="insertUnorderedList"
            class="tool--btn"
          >
            <i class="fa fa-list-ul"></i>
          </button>
        </li>
      </ul>
    </div>

    <div id="output" contenteditable="true"></div>
  </body>

  <script>
    let output = document.getElementById("output");
    let buttons = document.getElementsByClassName("tool--btn");
    for (let btn of buttons) {
      btn.addEventListener("click", () => {
        let cmd = btn.dataset["command"];
        document.execCommand(cmd, false, null);
      });
    }
  </script>
</html>
