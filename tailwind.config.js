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
                'primary':'#E61E2A',
                'primary-text':'#575756',
                'support':'#F0F0F0',
                'nav-primary':'#3C3C3B',
                'nav-secondary':'#31302F',
                'footer-primary':'#3C3C3B',

                'davy-gray':'#555555',
                'dim-gray':'#6e6e6d',
                'white-smoke':'#efefef',
                'midnight-black':'#222'
            }
    },
  },
  plugins: [
      require('@tailwindcss/line-clamp'),
  ],
}
