if (screen.width > 800) {
    var style = document.createElement("style");
    document.body.appendChild(style);
    style.sheet.insertRule(
        "#footer {position: fixed; bottom: 0; width: 100%;}"
        /* "#footer {bottom: 0; width: 100%; position: fixed; }" */
    );
}