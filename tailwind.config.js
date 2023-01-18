/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**.{php,html,js}",
    "./template-parts/*.{php,html.js}.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        primary : "#008542",
        dark: "#262626",
        accent : "#28941e",
        accentYellow: "#daa625",
        lightGray: "#f3f8f4",
        clrGray: "#f2f2f2"
      },

      fontSize: {
        huge: 'clamp(2.4rem, 6vw, 5rem)',
      },

      fontFamily : {
        poppins : ['poppins', 'san-serif'],
        raleway : ['Raleway', 'san-serif']
      }

    },

    container : {
      center: true,
      padding: "15px",
    }

  },
}
