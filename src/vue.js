var prova = new Vue({
  el: "#cont",
  data: {
    generi: [],
    genChosen: 'all',
    dischi: []
  },
  mounted(){
    axios
    .get('dir/server.php')
    .then((result)=> {
      this.dischi = result.data;
      this.dischi.forEach((item) => {
        if (this.generi.includes(item.genere) == false) {
          this.generi.push(item.genere)
        }
      });
      console.log(this.generi);


    })
  },
  methods: {
    seleziona(){
      this.genChosen = document.getElementById('scelta').value;
    }
  }
})
