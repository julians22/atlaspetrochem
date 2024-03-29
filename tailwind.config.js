module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
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
            height: {
                "250px": "250px",
                "300px": "300px",
                "470px": "470px",
                "485px": "485px"
            },
            minWidth: {
                "330px": "330px"
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
            backgroundSize: ["hover", "focus"],
            backgroundOpacity: ["hover", "focus"],
            translate: ["group-hover"],
            inset: ["group-hover", "hover"],
            textAlign: ["group-hover"]
        }
    },
    plugins: [require("@tailwindcss/typography")]
};
