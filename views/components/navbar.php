<style>
    header 
    {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }
    nav
    {
        display: flex;
        /* flex-direction: row; */
        justify-content: space-between;
        align-items: center;
        background-color: #99AECC;
        padding-left: 50px;
        padding-right: 50px;
        height: 35px;
    }
    a
    {
        all: unset;
        font-family: "Whisper", cursive;
        font-size: 40px;
    }
    body
    {
        margin-top: 50px;
        background-color: #D5D5D5;
        box-sizing: border-box;
        position: relative;
    }
    li 
    {
        font-family: "Whisper", cursive;
    }
    .div-for-input-divs
    {
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction: column;
        width: 20%;
        border-right: 1px solid black;
        /* justify-content: space-between; */
    }
    .numbered-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .dropdown-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .numbered-input
    {
        width: 120px;
        height: 20px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .dropdown-input
    {

    }
    .submit-numbered-index
    {
        width: 120px;
        height: 25px;
        color: white;
        background-color: #808080;
        border: 0;
        margin-top: 5px;
        /* border-radius: 6px; */
    }
    .numbered-input:focus 
    {
        outline: none;
        border:1px solid blue;
        box-shadow: 0 0 5px #719ECE;
    }
    .output-index
    {
        width: 80%;
        text-align: center;
        position: absolute;
        right: 0;
        top: 0;

    }
    .funny-font
    {
        font-family: "Whisper", cursive;
    }
    h1
    {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    p
    {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
</style>

<header>
    <nav>
        <a href="index.php">Posts</a>
        <a href="story.php">Stories</a>
        <a href="about.php">About us</a>
    </nav>
</header>