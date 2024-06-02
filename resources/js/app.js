// Check and set Theme Mode
if (document.documentElement) {
    const defaultThemeMode = "system";
    let themeMode = localStorage.getItem("theme_mode_value");
    if (themeMode === null) {
        if (defaultThemeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        } else {
            themeMode = defaultThemeMode;
        }
    }
    console.log("Dark THeme");
    if (!document.body.classList.contains(themeMode)) {
        document.body.classList.add(themeMode);
    }
}

