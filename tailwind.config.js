/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {
      colors:{
        'primary': '#4FD1C5',
        'secondary': '#81E6D9',
        'accent': '#EDF2F7',
        'danger': '#FC8181',
        'warning': '#D69E2E',
        'info': '#5A67D8',
        'success': '#38A169',
        'blue-purple': '#4C51BF',
        'default': '#4A5568',
        'gr' : '#8FABC0',
        'base': '#F7FAFC',
      },
      transitionProperty: {
        'display': 'display',
      }

    },
  },
  plugins: [],
};
