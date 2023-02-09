// Create the pop-up container
var popup = document.createElement('div');

// Set the background color and border of the pop-up
popup.style.backgroundColor = 'white';
popup.style.border = '1px solid black';

// Set the text color of the pop-up
popup.style.color = 'red';

// Set the text content of the pop-up
popup.textContent = 'Invalid user or password.';

// Set the font family and font size of the pop-up
popup.style.fontFamily = 'sans-serif';
popup.style.fontSize = '16px';

// Set the position and dimensions of the pop-up
popup.style.position = 'fixed';
popup.style.top = '50%';
popup.style.left = '50%';
popup.style.transform = 'translate(-50%, -50%)';
popup.style.width = '300px';
popup.style.height = '100px';

// Set the padding and text alignment of the pop-up
popup.style.padding = '20px';
popup.style.textAlign = 'center';

// Use the document.write() function to write the pop-up to the page
document.write(popup);