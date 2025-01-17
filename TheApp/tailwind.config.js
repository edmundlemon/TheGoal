/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: [
  //   "./resources/**/*.blade.php",
  //   "./resources/**/*.js",
  //   "./resources/**/*.vue",
  // ],
  purge: [
    './resources/**/*.blade.php',
    // './resources/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}