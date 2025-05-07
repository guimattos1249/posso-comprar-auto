// tailwind.config.js
module.exports = {
  content: [
    './templates/**/*.html.twig', // ou seu caminho real para templates
    './assets/**/*.js'            // se estiver usando JS com Tailwind também
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  variants: {
    extend: {
      textColor: ['hover'],
    },
  },
}
