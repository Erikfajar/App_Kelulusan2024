const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

// Set canvas width and height to match window size
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Array of emojis
const emojis = ['😢', '😭', '😞', '😔', '😿'];

// Array to store emojis
const emojisArray = [];

// Function to generate a random emoji
function generateEmoji() {
    return emojis[Math.floor(Math.random() * emojis.length)];
}

// Emoji constructor
function Emoji(x, y, speed) {
    this.x = x;
    this.y = y;
    this.speed = speed;
    this.symbol = generateEmoji();
}

// Function to draw an emoji
Emoji.prototype.draw = function() {
    ctx.font = '30px serif';
    ctx.fillText(this.symbol, this.x, this.y);
}

// Function to update emoji position
Emoji.prototype.update = function() {
    this.y += this.speed;
    if (this.y > canvas.height) {
        this.y = 0;
        this.symbol = generateEmoji();
    }
}

// Function to animate the emojis
function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Add new emoji at random interval
    if (Math.random() < 0.03) {
        emojisArray.push(new Emoji(Math.random() * canvas.width, 0, Math.random() * 2 + 1));
    }

    // Update and draw emojis
    emojisArray.forEach(emoji => {
        emoji.update();
        emoji.draw();
    });

    requestAnimationFrame(animate);
}

// Start the animation
animate();

// Resize canvas when window is resized
window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});