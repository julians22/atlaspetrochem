module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            boxShadow: {
                "3xl": "1px 3px 7px 1px rgba(0,0,0,0.75)"
            },
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
            display: ["group-hover"],
            height: ["group-hover"],
            scale: ["group-hover"],
            translate: ["group-hover"]
        }
    },
    plugins: []
};
