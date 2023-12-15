function populate()
{
    document.write("<ol>");
    for (let i = 0; i < 10; i++) {
        document.write("<li>"+ "<a href='../src/page4.html'> Link </a>" + "</li>");
    }
    document.write("</ol>");
};


select();
function select() {
    window.addEventListener;
    const choice = document.getElementsByClassName("image");
    for (let i = 0; i < choice.length; i++) {
        window.location = "page3.html";
    };
}
