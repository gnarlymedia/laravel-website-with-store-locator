window.onload = function() {
    var backgrounds = [
        '/assets/images/background/background_1800_short.jpg',
        '/assets/images/iStock_4.jpg',
        '/assets/images/iStock_8.jpg'
    ];

    var background = backgrounds[Math.floor(Math.random() * backgrounds.length)];

    $.vegas({
        src: background,
        fade:1000
    });
};