//function for ul button in qualification
let output = document.getElementById("qualification_box");
let ul_button = document.getElementById("qualification_button");
    ul_button.addEventListener("click", () => {
        let cmd = ul_button.dataset[""];
        document.execCommand(cmd, false, null);
    });



    //form validation

