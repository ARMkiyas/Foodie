module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      fontFamily:{

        'logo':['Lobster', 'cursive'],
        'sans': ['ui-sans-serif', 'system-ui'],
       'serif': ['ui-serif', 'Georgia'],
       'mono': ['ui-monospace', 'SFMono-Regular'],

      },

    extend: {

      color:{
        orange:"#FF431E",

      },

      borderRadius: {
        max:"2rem",
        max2:"3rem",
        max3:"4rem"
      },


        textColor:{
          orange:"#FF431E",
        }
   

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
