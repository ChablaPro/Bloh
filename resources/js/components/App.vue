<template>
  <div>
    <navbar-component v-if="navbar"/>
    <router-view />
    <footer-component v-if="footer" />
  </div>
</template>

<script>
export default {
  data(){
    return{ 
      reussie : false
    }
  },
  mounted(){
    
    
  },
  computed:{
    navbar(){
      return  this.$route.path !== '/Dashboard' && this.$route.path !== '/Bord' && this.$route.path !== '/Blog_admin' && this.$route.path !== '/Admin_Approve' && this.$route.path !== '/Categori' && this.$route.path !== '/Tag' && this.$route.path !== '/Admin' && this.$route.path !== '/login' && this.$route.path !== '/Amin_role' && this.$route.path !== '/Admin_Newsletter' && this.$route.path !== '/desabonnement' && this.$route.name !== 'visualisation' && this.$route.path !== '/Admin_Contacts' && this.$route.path !== '/Admin_RDV'  && this.$route.path !== '/Calendrier'
    },
    footer(){
      return  this.$route.path !== '/Dashboard' && this.$route.path !== '/Bord' && this.$route.path !== '/Blog_admin' && this.$route.path !== '/Admin_Approve' && this.$route.path !== '/Categori' && this.$route.path !== '/Tag' && this.$route.path !== '/Admin' && this.$route.path !== '/login' && this.$route.path !== '/Amin_role' && this.$route.path !== '/Admin_Newsletter' && this.$route.path !== '/desabonnement' && this.$route.name !== 'visualisation' && this.$route.path !== '/Admin_Contacts' && this.$route.path !== '/Admin_RDV'  && this.$route.path !== '/Calendrier'
      
    }
  },
  methods:{
    async logout(){
        const logout = await axios.get('/logout')
        if(logout.status === 200){

            this.$Notice.success({

                title: "Déconnexion réussie",

            });

            this.reussie = true

            if(this.reussie){
                
                $('#Logout').modal('hide').modal('dispose');
                $('.modal-backdrop').remove();
                
            }

            window.location.reload()
            
        }
    }
  }
}
</script>



