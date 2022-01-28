Vue.prototype.$http = axios;

new Vue({
    el: '#app',

    data: {
        skills: []
    },

    mounted(){
        // make an ajax request to our server - /skills

        axios.get('/skills').then(response => console.log(response.data));
        axios.get('/skills').then(response => this.skills =response.data);
        this.$http.get('/skills').then(response => this.skills =response.data);
        this.$http.get('/skills').then(response => console.log(response.data));
    }
});
