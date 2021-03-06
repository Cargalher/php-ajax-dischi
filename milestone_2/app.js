const app = new Vue ({
    el: '#app',
    data: {
        url: '/php/php-ajax-dischi/milestone_2/api/api.php',
        discs: [],
        error: null,
        genres: [],
        selectedGenre: ''
    },
    mounted(){
        axios
        .get(this.url)                    //calling ajax
        .then(response => {   
            // Mandatory_part stampiamo a schermo una card per ogni album.                     //saving all the discs
            this.discs = response.data;
            console.log(response.data);
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
            this.error = "Sorry could not conect to the API"
        });
    }
});