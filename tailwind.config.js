module.exports = {
  important: true,
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    extend: {
        fontFamily: {
            'lato': ['Lato'],
            'domine': ['Domine'],
        },
        colors:
            {
                'primary':'var(--theme-primary-colour)',
                'primary-text':'var(--theme-text-colour)',
                'support':'var(--theme-support-colour)',
                'nav-primary':'var(--theme-navigation-primary-colour)',
                'nav-secondary':'var(--theme-navigation-secondary-colour)',
                'footer-primary':'var(--theme-footer-background-colour)',

                'davy-gray':'#555555',
                'midnight-black':'#222'
            }
    },
  },
  plugins: [],
}
