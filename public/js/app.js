new Vue({
    el: '#app',

    mounted(){
        // make an ajax request to our server - /skills

        axios.get('/skills').then(response => console.log(response));
    }
});
