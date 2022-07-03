let mix = require("laravel-mix");
let glob = require("glob");

mix.options({
    processCssUrls: false,
    clearConsole: true,
    terser: {
        extractComments: false,
    },
});

glob.sync("./**/**/webpack.mix.js").forEach((item) => require(item));
