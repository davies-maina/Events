<template>
    <div class="container">

                    <button type="button" :class="buttonMode" @click="handleRegistration">{{buttonText}}</button>



    </div>
</template>


<script>
import { registrationUrl } from "../config";
export default {
    props:['text','mode', 'eventId'],


        created () {
      this.buttonText = this.text
      this.buttonMode = this.mode
    },

        data () {
      return {
        buttonText: '',
        buttonMode: ''
      }
    },

    methods:{


        handleRegistration(){


            let postData={


                eventId:this.eventId
            }

            axios.post(registrationUrl, postData)
                        .then((response)=>{

        if (response.status == 200) {
              this.buttonText = 'Register'
              this.buttonMode = 'btn btn-outline-info'
            }
        if (response.status == 201) {
              this.buttonText = 'Unregister'
              this.buttonMode = 'btn btn-outline-danger'
            }
                            
                        })
        }
    }
}
</script>
