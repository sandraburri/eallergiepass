<template>
    <section class="container-fluid">

        <ul class="list-group">

        <p class = "mb-0">        
            <li
                v-for="(user, key) in users"
                v-bind:key="key"
                class="list-group-item list-group-item-action"
            >
                <nuxt-link :to="'/view/' + key">
                    {{key}}
                    <span class="float-left">
                        <i class="material-icons">person</i>
                    </span>
                </nuxt-link>
                </li>
            <li 
                <nuxt-link to="/add/scan" class="btn btn-outline">
                <i class="fa fa-plus"></i> 
        </nuxt-link> </li>
        Weiteres Profil hinzufügen
            </li>
        </p>
             
     <p class = "mb-0">  
     <d class ="d" >
           Notfallkontakt </d>
      
     <li class="list-group-item list-group-item-action ">
    Erika Müller
      <span class="float-left">
      <i class="material-icons">person</i>
                    </span>
  </li>
                      
        
        
          <li class="list-group-item">
          <c class="c">  
          Notfallanleitung </c>
        <span class="float-left">
                        <i class="material-icons"> error </i>
                    </span>
                    </li>
            </p>

 <p class = "mb-0">  
  <d class ="d" >
        Informationen </d>

         <li class="list-group-item">aha! Allergiezentrum Schweiz
        <span class="float-right">
                        <i class="material-icons"> call_made </i>
                    </span>
                    </li>
         </p>

<p class = "mb-0">  
 <d class ="d" >
        Ratgeber </d>
         
        <li class="list-group-item"> 
        <c class ="c" > Allergien </c>
        <span class="float-left">
                        <i class="material-icons"> library_books </i>
                    </span>
        <span class="float-right">
                        <i class="material-icons"> keyboard_arrow_right </i>
                    </span>            
                    </li>
         <li class="list-group-item">
         <c class ="c" > Asthma </c>
        <span class="float-left">
                        <i class="material-icons"> library_books </i>
                    </span>
        <span class="float-right">
                        <i class="material-icons"> keyboard_arrow_right </i>
                    </span>            
                    </li>
         <li class="list-group-item">
         <c class ="c" > Ekzem / Hautreaktionen </c>
        <span class="float-left">
                        <i class="material-icons"> library_books </i>
                    </span>
        <span class="float-right">
                        <i class="material-icons"> keyboard_arrow_right </i>
                    </span>            
                    </li>
                     <li class="list-group-item">
         <c class ="c" > Intoleranzen </c>
        <span class="float-left">
                        <i class="material-icons"> library_books </i>
                    </span>
        <span class="float-right">
                        <i class="material-icons"> keyboard_arrow_right </i>
                    </span>            
                    </li>
                     <li class="list-group-item">
                     <c class ="c" > Wissenswertes </c>
        <span class="float-left">
                        <i class="material-icons"> library_books </i>
                    </span>
        <span class="float-right">
                        <i class="material-icons"> keyboard_arrow_right </i>
                    </span>            
                    </li>
       
</p>
    
     </ul>
           
    </section>

</template>

<script>

export default {

    data() {
        return {
            users: []
        }
    },

    async mounted() {
        this.title = "eAllergiepass";

        let users = localStorage['users'] || '';
        if (users) {
            users = JSON.parse(users);
        }

        users = users || {};

        if (!Object.keys(users).length) {
            this.$router.push('/add/scan');
        }

        this.users = users;
    },

    methods: {
    }
}

</script>

<style>
    .container-fluid {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .c{
    margin-left: 0.5rem;
    }

    .d{
        font-weight: bold;
    }

    .list-group-item list-group-item-action active{
        background-color: coral;
    }
</style>

