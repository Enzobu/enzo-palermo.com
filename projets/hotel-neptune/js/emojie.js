
const popEmoji = "⚓";
let cursorX = 0;
let cursorY = 0
document.addEventListener("mousemove", event => {
  cursorX = event.pageX;
  cursorY = event.pageY;
})
document.addEventListener("mousedown", event => {
  if (event.button === 0) { // left-click
    const emoji = document.createElement("span");
    emoji.innerHTML = popEmoji;
    emoji.style.position = "absolute";
    emoji.style.left = `${cursorX}px`;
    emoji.style.top = `${cursorY}px`;
    emoji.style.fontSize = "2em"; // double the size of the emoji
    document.body.appendChild(emoji);
  }
});
