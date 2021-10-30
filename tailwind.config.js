module.exports = {
  purge: [
    './src/**/*.php',
     './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {

      'logo': ['Lobster', 'cursive'],
      'sans': ['ui-sans-serif', 'system-ui'],
      'serif': ['ui-serif', 'Georgia'],
      'mono': ['ui-monospace', 'SFMono-Regular'],

    },
    backgroundColor: theme => ({
      ...theme('colors'),
      "blueGray": "#607d8b",
      "blueGray-50": "#eceff1",
      "blueGray-100": "#cfd8dc",
      "blueGray-200": "#b0bec5",
      "blueGray-300": "#90a4ae",
      "blueGray-400": "#78909c",
      "blueGray-500": "#607d8b",
      "blueGray-600": "#546e7a",
      "blueGray-700": "#455a64",
      "blueGray-800": "#37474f",
      "blueGray-900": "#263238",
    }),


    textColor: theme=>({
      ...theme('colors'),
      "blueGray": "#607d8b",
      "blueGray-50": "#eceff1",
      "blueGray-100": "#cfd8dc",
      "blueGray-200": "#b0bec5",
      "blueGray-300": "#90a4ae",
      "blueGray-400": "#78909c",
      "blueGray-500": "#607d8b",
      "blueGray-600": "#546e7a",
      "blueGray-700": "#455a64",
      "blueGray-800": "#37474f",
      "blueGray-900": "#263238",
      "lightBlue": "#03a9f4",
      "lightBlue-50": "#e1f5fe",
      "lightBlue-100": "#b3e5fc",
      "lightBlue-200": "#81d4fa",
      "lightBlue-300": "#4fc3f7",
      "lightBlue-400": "#29b6f6",
      "lightBlue-500": "#03a9f4",
      "lightBlue-600": "#039be5",
      "lightBlue-700": "#0288d1",
      "lightBlue-800": "#0277bd",
      "lightBlue-900": "#01579b",

    }),

    extend: {

      color: {
        orange: "#FF431E",
        bluegray: "#1E293B",
  
      },
      backgroundColor: {
        bluegray: "#1E293B",
      },

      borderRadius: {
        max: "2rem",
        max2: "3rem",
        max3: "4rem"
      },


      textColor: {
        orange: "#FF431E",
      }


    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}