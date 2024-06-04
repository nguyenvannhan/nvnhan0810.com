import.meta.glob([
    '../images/**',
    '../svgs/**',
]);

import 'flowbite';

// Check and set Theme Mode
if (document.documentElement) {

    const darkModeValue = 'dark';
    const lightModeValue = 'light';

    const defaultThemeMode = "system";
    let themeMode = localStorage.getItem("theme_mode_value");
    if (themeMode === null) {
        if (defaultThemeMode === "system") {
            themeMode = window.matchMedia(`(prefers-color-scheme: ${darkModeValue})`).matches ? darkModeValue : lightModeValue;
        } else {
            themeMode = defaultThemeMode;
        }
    }
    const updateBodyThemeMode = (mode) => {
        if (!document.body.classList.contains(mode)) {
            if (darkModeValue === mode) {
                document.body.classList.add(darkModeValue);
                document.body.classList.contains(lightModeValue) && document.body.classList.remove(lightModeValue);
            } else {
                document.body.classList.add(lightModeValue);
                document.body.classList.contains(darkModeValue) && document.body.classList.remove(darkModeValue);
            }
        }
    }

    const updateThemeModeIcon = (mode) => {
        if (mode === darkModeValue) {
            document.getElementById('dark-mode-btn-icon').classList.add('hidden');
            document.getElementById('light-mode-btn-icon').classList.remove('hidden');
        } else {
            document.getElementById('light-mode-btn-icon').classList.add('hidden');
            document.getElementById('dark-mode-btn-icon').classList.remove('hidden');
        }
    };

    updateBodyThemeMode(themeMode);
    updateThemeModeIcon(themeMode);

    document.getElementById('theme-toggle-btn').addEventListener('click', function() {
        if (themeMode === darkModeValue) {
            themeMode = lightModeValue;
        } else {
            themeMode = darkModeValue;
        }

        localStorage.setItem("theme_mode_value", themeMode);
        updateBodyThemeMode(themeMode);
        updateThemeModeIcon(themeMode);
    });
}

