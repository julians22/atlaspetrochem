module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                api: {
                    redLighten: "#e01f26",
                    red: "#e01f26",
                    redDarken: "#ad1419"
                }
            },
            letterSpacing: {
                bannerParagraph: ".5em"
            }
        }
    },
    variants: {
        extend: {
            display: ['group-hover'],
        }
    },
    plugins: []
};
