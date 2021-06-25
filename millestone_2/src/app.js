const app = new Vue ({
    el: '#app',
    data:{
        discs: [],
        error: null,
        genres: [],
        selectedGenre: ''
    },
    mounted(){
        axios
        // .get('/dist/api.php')                    //calling ajax
        .then(response => {   
            // Mandatory_part stampiamo a schermo una card per ogni album.                     //saving all the discs
            this.discs = response.data.response;
            console.log(this.discs);
            //bonus1_ Creare una select con tutti i generi dei dischi. In base a cosa scegliamo nella select, vedremo i corrispondenti cd.
            this.discs.forEach(disk =>{
                if(!this.genres.includes(disk.genre)){
                    this.genres.push(disk.genre);
                }
            });
            // bonus 2_Ordinare i dischi per anno di uscita.// order by year of release
            this.discs.sort(function(oldest, newest){
                return(oldest.year) - (newest.year);
            });
        })
        .catch(e =>{
            console.error(e);
            this.error = "Sorry could not cnect to the API"
        })
    }
});