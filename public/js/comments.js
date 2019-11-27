var comments = new Vue({
  el: "#formu",

  data: {
    content: '',
    id: '',







  },
  props: ['articleid'],


  methods: {


    FiltersForm: function() {
      axios
        .post('/post_comment', {
          content: this.content,
        id: this.articleid,


        })
      this.message1 = "Votre commentaire a bien été ajouté";
      this.content = "";


    },

  },

  mounted() {




  }

});
