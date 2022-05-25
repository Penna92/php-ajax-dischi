const app = new Vue({
  el: "#app",
  data: {
    dischi: [],
    genres: [],
    selectedGenre: "",
    apiPath: "./server.php",
  },
  methods: {
    search() {
      console.log(this.selectedGenre);
      this.getData(this.selectedGenre);
    },
    getData(genre = null) {
      let path;
      if (genre) {
        path = `${this.apiPath}?genre=${genre}`;
      } else {
        path = this.apiPath;
      }
      axios.get(path).then((res) => {
        this.dischi = res.data;
        // console.log(this.dischi);
        if (this.genres.length === 0) {
          this.dischi.forEach((disco) => {
            if (!this.genres.includes(disco.genre)) {
              this.genres.push(disco.genre);
            }
          });
        }
      });
      console.log(this.genres);
    },
  },
  mounted() {
    this.getData();
  },
});
