

function getBotResponse(input) {
    //responses for button click questions
    if (input == "Hey there! Searching for career opportunities?") {
        return "career opportunities?";
    } else if (input == "I'd be happy to direct you to the right resources!") {
        return "direct you to the right resources!";
    } else if (input == "I'd be happy") {
        return " happy";
    }else if (input == "Right resources!") {
    return "Hey there! Searching for ";
    } else if (input == "Right resources!") {
    return "Hey there! Searching for ";
    }

    // Simple responses
    if (input == "hello" || input == "Hello" ) {
        return "Hello there!";
    } else if (input == "hi" || input == "Hi" ) {
        return "Hi there!";
    } else if (input == "hey" || input == "Hey" ) {
        return "Hey there!";
    } else if (input == "goodbye" || input == "Goodbye" || input == "Good bye" || input == "good bye" || input == "Good Bye" ) {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}