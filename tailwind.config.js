module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./*.html",
    "./pages/*.html",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')({
      charts: true,
    }),
  ]
}